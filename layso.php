<?php 
require_once "models/form.php"; 
require_once "../lib/myfunctions.php"; 
class LaySo{
    function __construct()
    {
        $this->model = new Model_laySo();
        $this->lib = new lib();
        $act = "index";

        if(isset($_GET["act"])==true) $act = $_GET['act'];

        switch ($act) {
            case 'index':
                $this->index();
                break;
            case 'setstatus':
                $this->setStatus();
                break; 
            // case 'edit':
            //     $this->addNew();
            //     break;
            case 'update':
        
                break;
            case 'delete':
                $this->delete();
                break;   
            default:
         
                break;
        }

    }
    function index()
    {   
    
        if (isset($_GET['Page'])) $CurrentPage = $_GET['Page']; else $CurrentPage = 1;
     
        
        $TotalProduct = $this->model->countAllform();

        if($TotalProduct == 0) $TotalProduct =1;
  
        $ProductList = $this->model-> GetProductList($CurrentPage);


        $Pagination =  $this->model->Page($TotalProduct, $CurrentPage);

        $sang =  $this->model->soLuong(1);
        $chieu =  $this->model->soLuong(2);
        $toi =  $this->model->soLuong(3);


        if(isset($_POST['edittimeleft']) &&($_POST['edittimeleft']) ){
            $timeLeft = $_POST['timeleft'];
            $this->model->resetTime($timeLeft);
            $this->model->setThoiGian($timeLeft);
        }
        if(isset($_POST['editslsang']) &&($_POST['editslsang']) ){
            $slsang = $_POST['slsang'];
            $this->model->setSl($slsang,'slsang');
        }
        if(isset($_POST['editslchieu']) &&($_POST['editslchieu']) ){
            $slchieu = $_POST['slchieu'];
            $this->model->setSl($slchieu,'slchieu');
        }
        if(isset($_POST['editsltoi']) &&($_POST['editsltoi']) ){
            $sltoi = $_POST['sltoi'];
            $this->model->setSl($sltoi,'sltoi');
        }





        $page_title ="Danh sách người đăng ký";
        $sub_title = "Hiển thị những người đăng ký tại đây";
        $page_file = "views/layso_index.php";
        require_once "views/layout.php";
    }


    // function addNew()
    // {  
    //     if(isset($_GET['id'])&&($_GET['act']='dienthoai')){
    //         $oneRecode = $this->model->showOneBaiViet($_GET['id']);
    //         $page_title ="Sửa Điện Thoại";
    //         $page_file = "views/baiviet_edit.php";
    //     }else{
    //         $page_title ="Thêm Điện Thoại";
    //         $page_file = "views/baiviet_add.php";
    //     }

    //     if(isset($_POST['them'])&&$_POST['them'])
    //     {

    //         $name =$this->lib->stripTags($_POST['name']);
    //         $slug = $this->lib->slug($name);
    //         $motanh = $_FILES['img'];
    //         $img = $this->lib->checkUpLoadMany($motanh);
    //         $date = date("Y-m-d h:i:s");
    //         $noidung = $_POST['noidung'];
    //         $luotxem = $_POST['luotxem'];
    //         $mota = $_POST['mota'];
    //         $public = $_POST['public'];

     
            
    //         settype($luotxem,"int");
    //         settype($public,"int");
            
    //         $_SESSION['message'] = "";
    //         if($name == ""){
    //             $_SESSION['message'] = "Bạn chưa nhập tên";
    //         } 
         

    //         if($_SESSION['message']){
    //             header("location: ?ctrl=thongbao");
    //         }

    //         else
    //         {
    //             if(isset($_GET['id']))
    //             {
    //                 $id = $_GET['id'];
    //                 settype($id,"int");
    //                 $this->edit($name,$slug,$img,$date,$noidung,$luotxem,$mota,$public,$id);
                
    //             }else
    //             {
    //                 $this->store($name,$slug,$img,$date,$noidung,$luotxem,$mota,$public);
    //             }    
    //         }

           
    //     }
     
    //     require_once "views/layout.php";
    // }


    // function store($name,$slug,$img,$date,$noidung,$luotxem,$mota,$public){   
    //     $idLastBaiViet = $this->model->addNewBaiViet($name,$slug,$img,$date,$noidung,$luotxem,$mota,$public);
    //     if($idLastBaiViet != null)
    //     {
    //         echo "<script>alert('Thêm thành công')</script>";
    //         header("location: ?ctrl=baiviet&act=index");
    //     }else
    //     {
    //         echo "<script>alert('Thêm thất bại')</script>";
    //     }

    //     require_once "views/layout.php";
    // }

    // function edit($name,$slug,$img,$date,$noidung,$luotxem,$mota,$public,$id)
    // {
    //     if($this->model->editBaiViet($name,$slug,$img,$date,$noidung,$luotxem,$mota,$public,$id))
    //     {
    //         echo "<script>alert('Sửa thành công')</script>";
    //         header("location: ?ctrl=baiviet&act=index");
    //     }else
    //     {
    //         echo "<script>alert('Sửa thất bại')</script>";
    //     }
    //     require_once "views/layout.php";
    // }


    function setStatus()
    {
        if(isset($_GET['id'])&&($_GET['ctrl']=='layso')){
                    $id = $_GET['id'];
                    settype($id,"int");
                if($this->model->setStatus($id)){
                    $thoiGian = $this->model->getThoiGian();
                    $this->model->resetTime($thoiGian);
                    echo "<script>alert('Xong')</script>";
                    header("location: ?ctrl=layso&act=index");
                }else{
                    echo "<script>alert('Xoá thất bại')</script>";
                }
            }
            require_once "views/layout.php";
    }
    
    function delete()
    {
        if(isset($_GET['id'])&&($_GET['ctrl']=='layso')){
            $id = $_GET['id'];
            settype($id,"int");
            if($this->model->deleteForm($id)){
                echo "<script>alert('Xoá thành công')</script>";
                header("location: ?ctrl=layso&act=index");
            }else{
                echo "<script>alert('Xoá thất bại')</script>";
            }
        }
        require_once "views/layout.php";
    }
}
?>