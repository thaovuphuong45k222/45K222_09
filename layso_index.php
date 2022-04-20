<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

    
                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                   
                                    <div class="row">
                                        <div class="col-lg-7">
                                                <h4 class="mt-0 header-title"><?php echo $page_title; ?></h4>
                                                    <br>
                                                    <p class="text-muted font-14 mb-3">Số Lượng Người Đăng Ký Buổi Sáng: <?php echo $sang; ?></p>
                                                    <p class="text-muted font-14 mb-3">Số Lượng Người Đăng Ký Buổi Chiều: <?php echo $chieu; ?></p>
                                                    <p class="text-muted font-14 mb-3">Số Lượng Người Đăng Ký Buổi Tối: <?php echo $toi; ?></p>
                                                    <p class="text-muted font-14 mb-3">
                                                    </p>
                                        </div>
                                        <div class="col-lg-5">
                                        <form method="post" enctype="multipart/form-data"> 
                                        <label for="">Sửa Thời Gian Còn Lại</label>
                                                    <input type="number" name="timeleft"  parsley-trigger="change" required
                                                        placeholder="Nhập thời gian còn lại" class="form-control" id="userName">
                                            <input type="submit" name="edittimeleft" class="btn btn-primary waves-effect waves-light mr-1 mt-1" value="Sửa">


                                        </form>                                      
                                        </div>
                                    </div>
                                    <div class="row">
                                            <div class="col-lg-4">
                                              <form method="post" enctype="multipart/form-data"> 
                                                <label for="">Sửa Số Lượng Sáng</label>
                                                            <input type="number" name="slsang"  parsley-trigger="change" required
                                                                placeholder="Nhập thời gian còn lại" class="form-control" id="userName">
                                                    <input type="submit" name="editslsang" class="btn btn-primary waves-effect waves-light mr-1 mt-1" value="Sửa">
                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                              <form method="post" enctype="multipart/form-data"> 
                                                <label for="">Sửa Số Lượng Trưa</label>
                                                            <input type="number" name="slchieu"  parsley-trigger="change" required
                                                                placeholder="Nhập thời gian còn lại" class="form-control" id="userName">
                                                    <input type="submit" name="editslchieu" class="btn btn-primary waves-effect waves-light mr-1 mt-1" value="Sửa">

                                                </form>
                                            </div>
                                            <div class="col-lg-4">
                                              <form method="post" enctype="multipart/form-data"> 
                                                <label for="">Sửa Số Lượng Tối</label>
                                                            <input type="number" name="sltoi"  parsley-trigger="change" required
                                                                placeholder="Nhập thời gian còn lại" class="form-control" id="userName">
                                                    <input type="submit" name="editsltoi" class="btn btn-primary waves-effect waves-light mr-1 mt-1" value="Sửa">


                                                </form>
                                            </div>
                                        </div>
                                    <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th width="10">STT</th>
                                                    <th >Tên </th>
                                                    <th width="130">Số điện thoại</th>
                                                    <th width="130">Ngày</th>
                                                    <th width="10">Trạng Thái</th>
                                                    <th width="30">Huỷ </th>
                                                    <th width="30">Xét trạng thái</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                        $stt = 0;
                                            foreach ($ProductList as $row) {
                                                $stt++;
                                                $status = ($row['status']=='1') ? '<span class="badge badge-success">Đã làm</span>': '<span class="badge badge-danger">Chưa làm</span>';
                                                
                                                $linkDel = "'?ctrl=layso&act=delete&id=".$row['id']."'";
                                                $linkEdit = '?ctrl=layso&act=setstatus&id='.$row['id'].'&Page='.$_GET['Page'];
                                                
                                                if(is_file(PATH_IMG_SITE.explode(",",$row['img'])[0])){
                                                    $img = PATH_IMG_SITE.explode(",",$row['img'])[0];
                                                }else{
                                                    $img = PATH_IMG_SITE.'logo.png';
                                                }
                                                echo '<tr>
                                                        <td>'.$stt.'</td>
                                                        <td class="" >'.$row['name'].' </td>
                                                        <td class="" >'.$row['phone'].'</td>
                                                        <td>'.$row['date'].'</td>
                                                        <td>'.$status.'</td>
                                                        <td><div  onclick="checkDelete('.$linkDel.')"  class="btn btn-danger" role="button"><i class="fa fa-trash"></i></div></td>
                                                        <td><a href=""><a name="" id="" class="btn btn-primary" href="'.$linkEdit.'" role="button"><span class="mdi mdi-pencil"></span></a></a></a></td>
                                                    </tr>';
                                            }
                                        ?>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row d-flex justify-content-end">
                            <div class="col-lg-5">
                                <nav>
                                    <ul class="pagination pagination-split">
                                        <?php
                                        echo $Pagination;
                                        ?>      
                                    </ul>
                                </nav>    
                                  
                            </div>
                        </div>
                             
                     
                        
                    </div> <!-- container-fluid -->

                </div> <!-- content -->


            </div>
    