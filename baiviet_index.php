<div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">


                        <div class="row">
                            <div class="col-12">
                            

                                <div class="card-box">
                                    <h4 class="mt-0 header-title"><?php echo $page_title; ?></h4>
                                    <p class="text-muted font-14 mb-3">
                                    <?php echo $sub_title; ?>
                                    </p>
                                    <table class="table mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th width="10">STT</th>
                                                    <th width="120">Tên </th>
                                                    <th width="130">Ngày</th>
                                                    <th width="20">Hình</th>
                                                    <th >Mô Tả</th>
                                                    <th width="5">Xoá </th>
                                                    <th width="5">Sửa</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                        $stt = 0;
                                            foreach ($ProductList as $row) {
                                                $stt++;
                                                $anHien = ($row['public']=='1') ? '<span class="badge badge-success">Hiện</span>': '<span class="badge badge-danger">Ẩn</span>';
                                                
                                                $linkDel = "'?ctrl=baiviet&act=delete&id=".$row['id']."'";
                                                $linkEdit = '?ctrl=baiviet&act=edit&id='.$row['id'];
                                                
                                                if(is_file(PATH_IMG_SITE.explode(",",$row['img'])[0])){
                                                    $img = PATH_IMG_SITE.explode(",",$row['img'])[0];
                                                }else{
                                                    $img = PATH_IMG_SITE.'logo.png';
                                                }
                                                echo '<tr>
                                                        <td>'.$stt.'</td>
                                                        <td class="" >'.$row['name']." <br>". $anHien.'</td>
                                                        <td class="" >'.$row['date'].'</td>
                                                        <td><img style="object-fit:cover;" class="img-admin" width="100" height="100" src="'.$img.'"></td>
                                                        <td>'.substr($row['mota'],0,200).' ..</td>
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
    