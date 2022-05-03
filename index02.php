
    
	<!-- ====== Main Slider Area================================== --> 
	<div class="main-slider-two default-template-gradient">
		<div class="container-fluid pd-zero">
            <div class="pogoSlider">
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <img src="views/assets/images/bacsi/1.jpeg" alt="">
                   
                </div>
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <img src="views/assets/images/bacsi/2.jpg" alt="">
                </div>
                <div class="pogoSlider-slide" data-transition="expandReveal" data-duration="1000">
                    <img src="views/assets/images/bacsi/3.jpg" alt="">
                </div>
            </div><!-- .pogoSlider -->
		</div><!-- /.container-fluid -->
	</div><!-- /.main-slider -->
	
	<!-- ====== Form Area ======= --> 
    <section class="about-bottom-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="image-content gradient-circle">
                        <div>
                            <span>
                                <div class="so" id="sttdanglam">10</div>
                            </span>
                        </div>
                    </div><!-- /.image-content -->
                    <div class="author-content">
                        <div class="author-content-area">                        
                            <h2 class="author-name default-text-gradient">Số Thứ Tự Hiện Tại Đang Làm Hồ Sơ</h2> 
                            <p class="author-designation">Vui Lòng Đến Gặp Bác Sĩ Tư Vấn</p>
                        </div><!-- /.author-content-area -->
                    </div><!-- /.author-content -->
                   <div class="social-media footer pull-left">
                       <span class="pull-left">Theo Dõi :</span>
                       <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                   </div><!-- /.social-media -->
                   <div class="author-sign pull-right">
                       <img src="views/assets/images/sine.png" alt="sine" />
                   </div><!-- /.author-sign -->
                </div>
                <div class="col-lg-6">
                    <div class="image-content gradient-circle">
                        <div>
                            <span>
                                <div class="so" id="time"><?=$sttDangLam?></div>
                            </span>
                        </div>
                    </div><!-- /.image-content -->
                    <div class="author-content">
                        <div class="author-content-area">                        
                            <h2 class="author-name default-text-gradient">Thời Gian Ước Tính Đến Hồ Sơ Tiếp Theo</h2> 
                            <p class="author-designation">Vui Lòng Kiên Nhẫn</p>
                        </div><!-- /.author-content-area -->
                    </div><!-- /.author-content -->
                   <div class="social-media footer pull-left">
                       <span class="pull-left">Theo Dõi :</span>
                       <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                       <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                   </div><!-- /.social-media -->
                   <div class="author-sign pull-right">
                       <img src="views/assets/images/sine.png" alt="sine" />
                   </div><!-- /.author-sign -->
                </div>
            </div><!-- /.riv row -->
        </div><!-- /.container -->
    </section><!-- /.about-bottom-content -->

    <div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title default-text-gradient">Điền Form Để Lấy Số Thứ Tự</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row center">
         
                
                <div class="col-md-8">
                    <div class="contact-us-content-right">
              
                    
                        <form action="index.php?action=layso" method="POST">
                            <img src="views/assets/images/envelope.jpg" alt="envelope" />
                            <div class="input-content clearfix">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" placeholder="Tên*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-6">
                                        <input type="number" name="phone" placeholder="Số điện thoại*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                    <div class="col-sm-12">
                                        <select name="time" id="" class="form-control">
                                            <?php
                                            $today = date("h:i:s");
                                            if (strtotime($today) < strtotime("11:30:00")) {
                                                echo '<option value="1">7:30-11:30</option>';
                                            } 
                                            if(strtotime($today) < strtotime("17:30:00")) {
                                                echo '<option value="2">14:30-17:30</option>';
                                            }
                                            if(strtotime($today) < strtotime("23:30:00")){
                                                echo '<option value="3">19:00-23:30</option>';
                                            }
                                            ?>
                                            
                                          
                                            
                                        </select>
                                    </div><!-- /.col-sm-6 -->
        
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit" value="Lấy Số" name="layso" class="submit default-template-gradient">
                                </div><!-- /.subimt -->
                                <div class="error">
                                    <?php 
                                        if(isset($_SESSION['error'])){
                                            echo $_SESSION['error'];
                                            unset($_SESSION['error']);
                                        }
                                    
                                    ?>
                                </div>
                            </div><!-- /.input-content -->
                        </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us-area -->


    
    <div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title default-text-gradient">Huỷ Lịch Hẹn</h2>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row center">
             
                
                <div class="col-md-8">
                    <div class="contact-us-content-right">
                       
                    
                        <form action="" method="POST">
                            <img src="views/assets/images/envelope.jpg" alt="envelope" />
                            <div class="input-content clearfix">
                                <div class="row">
                                
                                    <div class="col-sm-12">
                                        <input type="number" name="phonecancel" placeholder="Số điện thoại*" class="form-control">
                                    </div><!-- /.col-sm-6 -->
                                 
        
                                </div><!-- /.row -->
                                <div class="subimt-button clearfix">
                                    <input type="submit"  onclick="return confirm('Bạn có chắc muốn huỷ lịch không ?');" value="Huỷ Lịch"  name="huylich" class="submit default-template-gradient">
                                </div><!-- /.subimt -->
                                <div class="error">
                                    <?php 
                                        if(isset($_SESSION['error2'])){
                                            echo $_SESSION['error2'];
                                            unset($_SESSION['error2']);
                                        }
                                    
                                    ?>
                                </div>
                            </div><!-- /.input-content -->
                        </form>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us-area -->
	<!-- ====== Category Area ====== --> 
    <div class="category-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="catagory-left-content clearfix">
                        <h2 class="default-text-gradient">Dịch Vụ Tại ABC</h2>
                        <a href="#" class="button nevy-button">Tất cả dịch vụ</a>
                    </div><!--/.catagory-left-content -->
                </div><!--/.col-md-4 -->
                <div class="col-md-8 col-sm-8">
                    <div class="catagory-right-content row">
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-one.png" alt="category" />
                            <h4>
                                Trung Tâm Bác Sỹ Gia Đình</h4></a>
                        </div><!-- /.category-list -->
                        
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-two.png" alt="category" />
                            <h4>Trung Tâm Thẩm Mỹ</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-three.png" alt="category" />
                            <h4>Trung Tâm Nội Tiết</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-four.png" alt="category" />
                            <h4>Đơn vị IVFMD FAMILY</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-md visible-lg"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-five.png" alt="category" />
                            <h4>Trung Tâm Nha Khoa Thẩm Mỹ</h4></a>
                        </div><!-- /.category-list -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-six.png" alt="category" />
                            <h4>Dịch Vụ Cao Cấp</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-seven.png" alt="category" />
                            <h4>Factory</h4></a>
                        </div><!-- /.category-list -->
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-eight.png" alt="category" />
                            <h4>Khám Sức Khỏe Định Kỳ</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->
                        <div class="clearfix visible-md visible-lg"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-nine.png" alt="category" />
                            <h4>Warehouse</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-sm"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-ten.png" alt="category" />
                            <h4>Đặt lịch khám bệnh</h4></a>
                        </div><!-- /.category-list -->

                        <div class="clearfix visible-xs"></div><!-- /.clearfix -->

                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-two.png" alt="category" />
                            <h4>Tuyển Dụng</h4></a>
                        </div><!-- /.category-list -->
                        <div class="category-list style-two col-md-3 col-sm-4 col-xs-6">
                            <a href="#"><img src="views/assets/images/category/category-one.png" alt="category" />
                            <h4>Dịch Vụ Tiện Ích</h4></a>
                        </div><!-- /.category-list -->
                    </div><!--/.catagory-right-content -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!--/.container -->
    </div><!-- /.category-area -->


   