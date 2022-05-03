<?php 
    session_start();
    ob_start();
    date_default_timezone_set('Asia/Saigon');
    require_once "system/config.php";
    require_once "system/database.php";
    require_once "model/model.php";

    class Home{
        function __construct()
        {
            $this->modelHome = new Model_home();
            $this->Router();
        }


        public function Router(){
            if(isset($_GET['act']) && ($_GET['act'])){
                switch ($_GET['act']) {
                    case 'datalayso':
                        $res = $this->modelHome->getData();
                        echo json_encode($res);
                        break;
                    case 'settimeleft':
                        
                        $this->modelHome->setTimeLeft();
                        $res = $this->modelHome->getTimeLeft();
                        $thoiGian = $this->modelHome->getThoiGian();
                        if( $res <1){
                            $this->modelHome->resetTime($thoiGian);
                        }
                        echo json_encode($res);
                   
                        break;
                
                        
                    
                    default:
                        
                        require_once 'views/index02.php';
                        
                        break;
                }
            }elseif(isset($_GET['action']) && ($_GET['action'])){
                require_once "views/common/header.php";
                switch ($_GET['action']) {
                    case 'donelayso':

                        $time = $_GET['buoi'];

                        $res=  $this->modelHome->getStt($time);
                        
                        require_once "views/camon.php";
                        break;
                    case 'blogsingle':
                        $id = $_GET['id'];
                        $single = $this->modelHome->getBlogSingle($id);
                        require_once "views/blog-detail.php";
                        break;
                    case 'layso':

                        require_once "views/common/header.php";

                        if(isset($_POST['layso']) && ($_POST['layso'])){
                            $name = $_POST['name'];
                            $phone = $_POST['phone'];
                            $time = $_POST['time'];
                            $date = date("Y/m/d");
                            $status = 0;
                            if($name == ""){
                                $_SESSION['error'] = 'Vui Lòng Nhập Tên';
                            }elseif($phone == ""){
                                $_SESSION['error'] = 'Vui Lòng Nhập Số Điện Thoại';
                            }
                            elseif($this->modelHome->checkPhone($phone) > 0){
                                $_SESSION['error'] = 'Số điện thoại đã đăng ký rồi';
                            }
                            else{
                                if($time == 1){
                                    $buoi = 'slsang';
                                }elseif($time == 2){
                                    $buoi = 'slchieu';
                                }else{
                                    $buoi = 'sltoi';
                                }
                              
                                if($this->modelHome->countBenhNhan($time) > $this->modelHome->getSlByBuoi($buoi)){
                                    $_SESSION['error'] = 'Đã đạt giới hạn đăng ký vào thời gian này, mời bạn chọn thời gian khác';
                                }else{
                                    $res = $this->modelHome->postData($name ,$phone, $time,$date,$status);
                                    header("location: index.php?action=donelayso&buoi=".$time);
                                }
                              
                            }
                        }
        
                        if(isset($_POST['huylich']) && ($_POST['huylich'])){
                            $phone = $_POST['phonecancel'];
                            if($phone == ""){
                                $_SESSION['error2'] = 'Vui Lòng Nhập Số Điện Thoại';
                            }else{
                                 $this->modelHome->deleteFormBySdt($phone);
                            }
                        }
                        $sttDangLam = $this->modelHome-> sttDangLam();
                        require_once 'views/index02.php';
                        break;
                        
                    
                    default:
                        
                        break;
                }
                require_once "views/common/footer.php";

            }else{
                // get data
            
                require_once "views/common/header.php";

                
                $tinMoi=  $this->modelHome->getTinMoi();
                $tinNhieuView=  $this->modelHome->getTinNhieuView();
               
                require_once "views/home.php";
                require_once "views/common/footer.php";

            }
        }
        


    }
    $Home = new Home;
?>