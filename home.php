
    
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
<!-- ====== About Us Area ====== --> 
    <div class="aboutus-area four">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title">Về Chúng Tôi</h2>
                        <h5 class="sub-title">Giới thiệu về bệnh viện</h5>
                    </div><!-- /.heading-content -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                <div>
                            <div class="col-md-6">
                                <div class="text-content">
                                    <p>Chuyên gia hàng đầu Việt Nam về phẫu thuật tiêu hóa, thực hiện thành công hơn 1000 ca phẫu thuật nội soi điều trị ung thư đại trực tràng, hơn 1000 ca phẫu thuật nội soi điều trị ung thư thực quản, hơn 500 ca phẫu thuật nội soi cắt dạ dày bán phần và toàn phần.</p>
                                    <ul>
                                        <li>phẫu thuật nội soi điều trị co thắt tâm vị</li>
                                         <li>phẫu thuật nội soi cắt dạ dày toàn bộ</li>
                                         <li>cắt dạ dày bán phần</li>
                                         <li> phẫu thuật nội soi cắt thận đuôi tụy</li>
                                      
                                    </ul>
                                </div><!-- /.text-content -->    
                            </div><!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="image-content">
                                    <img src="views/assets/images/bacsi/1.1.png" alt="about" />
                                </div><!-- /.text-content -->
                            </div><!-- /.col-md-6 -->
                        </div> <!-- /.home -->
                </div> <!-- /.col-md-2 -->

             
            </div><!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.aboutus-area -->


   <!-- ====== Gallery Area ======= --> 
   <div class="gallery-area four">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="gallery-left-content">
                        <h2>Ảnh <br/>Chúng <br/> Tôi</h2>
                        <a href="gallery.html" class="button nevy-button">Xem tất cả</a>
                    </div><!-- /.right-content -->
                </div><!-- /.col-md-4 -->
                <div class="col-md-8 col-sm-8">
                    <div class="gallery-slider owl-carousel owl-theme">
                        <div class="item">
                            <img height="200" src="views/assets/images/bacsi/5.jpg" alt="gallery" />
                        </div><!-- /.item -->
                        <div class="item">
                            <img height="200" src="views/assets/images/bacsi/6.jpg" alt="gallery" />
                        </div><!-- /.item -->
                        <div class="item">
                            <img height="200" src="views/assets/images/bacsi/7.jpg" alt="gallery" />
                        </div><!-- /.item --> 
                        <div class="item">
                            <img height="200" src="views/assets/images/bacsi/8.jpeg" alt="gallery" />
                        </div><!-- /.item --> 
                        <div class="item">
                            <img height="200" src="views/assets/images/bacsi/5.jpg" alt="gallery" />
                        </div><!-- /.item -->
                     </div><!-- /.owl-demo --> 
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.gallery-area -->



   
 <!-- ====== Blog Area ====== --> 
 <div class="blog-area bg-gray-color">
       <div class="container">
           <div class="row">
                <div class="col-md-12">
                    <div class="post-filter-area clearfix">
                        <div class="post-filter-area clearfix">
                            <ul class="nav nav-tabs hidden-sm hidden-xs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home" aria-controls="home" role="tab" data-toggle="tab"><span>Mới Nhất</span></a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Nhiều Lượt Xem</a>
                                </li>
                              
                            </ul>

                            <form class="hidden-md hidden-lg">
                                <select class="blog-menu-mobile">
                                    <option value='0'>Recent / News</option>
                                    <option value='1'>Popular</option>
                                    <option value='2'>Treading</option>
                                </select>
                            </form>
                        </div> <!-- /.tab-list -->
                    </div><!-- /.post-filter -->

                   <div class="blog-content-left">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <?php 
                                        foreach ( $tinMoi as $item) {
                                            $linkDetail = '?action=blogsingle&id='.$item['id'].'';
                                            echo '
                                            <div class="col-md-4 col-sm-4">
                                                <article class="post">
                                                    <figure class="post-thumb">
                                                        <a href="'. $linkDetail.'">
                                                            <img style="height:200px" src="uploads/'.$item['img'].'" alt="blog" />
                                                        </a>
                                                    </figure><!-- /.post-thumb -->
                                                    <div class="post-content">  
                                                        <div class="entry-meta">
                                                            <span class="entry-date">
                                                            '.$item['date'].'
                                                            </span>
                                                            <span class="devied"></span>
                                                            <span class="entry-category">
                                                                <a href="'. $linkDetail.'">Lượt xem: '.$item['luotxem'].'</a>
                                                            </span>
                                                        </div><!-- /.entry-header -->
                                                        <div class="entry-header">
                                                            <h3><a href="'. $linkDetail.'">'.$item['name'].'</a></h3>
                                                        </div><!-- /.entry-header -->
                                                    </div><!-- /.post-content -->
                                                </article><!-- /.post -->
                                            </div>
                                            
                                            
                                            ';
                                        }
                                    ?>
                                    <!-- /.col-md-6 -->
                                    
                                   
                                </div><!-- /.row -->

                               
                            </div> <!-- /.home -->
                              
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <div class="row">
                                    <?php 
                                        foreach ($tinNhieuView as $item) {
                                            $linkDetail2 = '?action=blogsingle&id='.$item['id'].'';
                                            echo '
                                            <div class="col-md-4 col-sm-4">
                                            <article class="post">
                                                <figure class="post-thumb">
                                                    <a href="'. $linkDetail2.'">
                                                        <img style="height:200px" src="uploads/'.$item['img'].'" alt="blog" />
                                                    </a>
                                                </figure><!-- /.post-thumb -->
                                                <div class="post-content">  
                                                    <div class="entry-meta">
                                                        <span class="entry-date">
                                                        '.$item['date'].'
                                                        </span>
                                                        <span class="devied"></span>
                                                        <span class="entry-category">
                                                            <a href="'. $linkDetail2.'">Lượt xem: '.$item['luotxem'].'</a>
                                                        </span>
                                                    </div><!-- /.entry-header -->
                                                    <div class="entry-header">
                                                        <h3><a href="'. $linkDetail2.'">'.$item['name'].'</a></h3>
                                                    </div><!-- /.entry-header -->
                                                </div><!-- /.post-content -->
                                            </article><!-- /.post -->
                                        </div>
                                            ';
                                        }
                                    
                                    ?>
                                   <!-- /.col-md-6 -->

                                </div><!-- /.row -->

                           
                            </div> <!-- /.profile -->
                            
                            <div role="tabpanel" class="tab-pane fade" id="messages">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-one.png" alt="blog" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        July 25, 2016
                                                    </span>
                                                    <span class="devied"></span>
                                                    <span class="entry-category">
                                                        <a href="#">Rooms &amp; suites</a>
                                                    </span>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-header">
                                                    <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-footer">
                                                    <div class="entry-footer-meta">
                                                        <span class="view">
                                                            <i class="fa fa-eye"></i>35
                                                        </span>
                                                        <span class="like">
                                                            <a href="#"><i class="fa fa-heart-o"></i>09</a>
                                                        </span>
                                                        <span class="comments">
                                                            <a href="#"><i class="fa fa-comments"></i>05</a>
                                                        </span>
                                                    </div><!-- /.entry-footer-meta -->
                                                </div><!-- /.entry-footer -->
                                            </div><!-- /.post-content -->
                                        </article><!-- /.post -->
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 col-sm-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-two.png" alt="blog" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        July 25, 2016
                                                    </span>
                                                    <span class="devied"></span>
                                                    <span class="entry-category">
                                                        <a href="#">Rooms &amp; suites</a>
                                                    </span>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-header">
                                                    <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-footer">
                                                    <div class="entry-footer-meta">
                                                        <span class="view">
                                                            <i class="fa fa-eye"></i>35
                                                        </span>
                                                        <span class="like">
                                                            <a href="#"><i class="fa fa-heart-o"></i>09</a>
                                                        </span>
                                                        <span class="comments">
                                                            <a href="#"><i class="fa fa-comments"></i>05</a>
                                                        </span>
                                                    </div><!-- /.entry-footer-meta -->
                                                </div><!-- /.entry-footer -->
                                            </div><!-- /.post-content -->
                                        </article><!-- /.post -->
                                    </div><!-- /.col-md-6 -->

                                    <div class="clearfix"></div><!-- /.clearfix -->

                                    <div class="col-md-6 col-sm-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-three.png" alt="blog" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        July 25, 2016
                                                    </span>
                                                    <span class="devied"></span>
                                                    <span class="entry-category">
                                                        <a href="#">Rooms &amp; suites</a>
                                                    </span>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-header">
                                                    <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-footer">
                                                    <div class="entry-footer-meta">
                                                        <span class="view">
                                                            <i class="fa fa-eye"></i>35
                                                        </span>
                                                        <span class="like">
                                                            <a href="#"><i class="fa fa-heart-o"></i>09</a>
                                                        </span>
                                                        <span class="comments">
                                                            <a href="#"><i class="fa fa-comments"></i>05</a>
                                                        </span>
                                                    </div><!-- /.entry-footer-meta -->
                                                </div><!-- /.entry-footer -->
                                            </div><!-- /.post-content -->
                                        </article><!-- /.post -->
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 col-sm-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-one.png" alt="blog" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        July 25, 2016
                                                    </span>
                                                    <span class="devied"></span>
                                                    <span class="entry-category">
                                                        <a href="#">Rooms &amp; suites</a>
                                                    </span>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-header">
                                                    <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-footer">
                                                    <div class="entry-footer-meta">
                                                        <span class="view">
                                                            <i class="fa fa-eye"></i>35
                                                        </span>
                                                        <span class="like">
                                                            <a href="#"><i class="fa fa-heart-o"></i>09</a>
                                                        </span>
                                                        <span class="comments">
                                                            <a href="#"><i class="fa fa-comments"></i>05</a>
                                                        </span>
                                                    </div><!-- /.entry-footer-meta -->
                                                </div><!-- /.entry-footer -->
                                            </div><!-- /.post-content -->
                                        </article><!-- /.post -->
                                    </div><!-- /.col-md-6 -->
                                    
                                    <div class="clearfix"></div><!-- /.clearfix -->

                                    <div class="col-md-6 col-sm-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-two.png" alt="blog" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        July 25, 2016
                                                    </span>
                                                    <span class="devied"></span>
                                                    <span class="entry-category">
                                                        <a href="#">Rooms &amp; suites</a>
                                                    </span>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-header">
                                                    <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-footer">
                                                    <div class="entry-footer-meta">
                                                        <span class="view">
                                                            <i class="fa fa-eye"></i>35
                                                        </span>
                                                        <span class="like">
                                                            <a href="#"><i class="fa fa-heart-o"></i>09</a>
                                                        </span>
                                                        <span class="comments">
                                                            <a href="#"><i class="fa fa-comments"></i>05</a>
                                                        </span>
                                                    </div><!-- /.entry-footer-meta -->
                                                </div><!-- /.entry-footer -->
                                            </div><!-- /.post-content -->
                                        </article><!-- /.post -->
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6 col-sm-6">
                                        <article class="post">
                                            <figure class="post-thumb">
                                                <a href="blog-single.html">
                                                    <img src="assets/images/blog/blog-three.png" alt="blog" />
                                                </a>
                                            </figure><!-- /.post-thumb -->
                                            <div class="post-content">  
                                                <div class="entry-meta">
                                                    <span class="entry-date">
                                                        July 25, 2016
                                                    </span>
                                                    <span class="devied"></span>
                                                    <span class="entry-category">
                                                        <a href="#">Rooms &amp; suites</a>
                                                    </span>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-header">
                                                    <h3><a href="blog-single.html">Finding best places to visit in California</a></h3>
                                                </div><!-- /.entry-header -->
                                                <div class="entry-footer">
                                                    <div class="entry-footer-meta">
                                                        <span class="view">
                                                            <i class="fa fa-eye"></i>35
                                                        </span>
                                                        <span class="like">
                                                            <a href="#"><i class="fa fa-heart-o"></i>09</a>
                                                        </span>
                                                        <span class="comments">
                                                            <a href="#"><i class="fa fa-comments"></i>05</a>
                                                        </span>
                                                    </div><!-- /.entry-footer-meta -->
                                                </div><!-- /.entry-footer -->
                                            </div><!-- /.post-content -->
                                        </article><!-- /.post -->
                                    </div><!-- /.col-md-6 -->
                                </div><!-- /.row -->

                                
                            </div> <!-- /.messages -->
                        </div> <!-- /.tab-content -->
                   </div><!-- /.blog-content-left -->
                </div><!-- /.col-md-8 -->

             
           </div><!-- /.row -->
       </div><!-- /.container -->
    </div><!-- /.blog-area -->