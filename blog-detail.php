<!-- ====== Breadcrumbs Area ======= --> 
<div class="breadcrumbs-area bg-gray-color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs">
                        <span class="first-item">
                         <a href="index01.html">Trang Chủ</a></span>
                        <span class="separator">&gt;</span>
                        <span class="last-item">Bài Viết Chi Tiết</span>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumbs-area -->

	<!-- ====== Single Content Area ====== --> 
	<div class="single-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single-main-content">
						<article class="post">
							<div class="entry-header">
								<h2 class="entry-title"><?=$single['name']?></h2>
							</div><!-- /.entry-header -->
						    <div class="entry-meta">
						        <div class="entry-date">
						            <span>Ngày</span> <?=$single['date']?>
						        </div>
						
						        <div class="entry-view">
						        	<span>Lượt Xem</span>
						        	<i class="fa fa-eye"></i><?=$single['luotxem']?>
						        </div>

						      

						    </div><!-- /.entry-header -->

						    <figure class="post-thumb">
						        <img width="100%" src="uploads/<?=$single['img']?>" alt="blog" />
						    </figure><!-- /.post-thumb -->

						    <div class="entry-content">
                            <?=$single['noidung']?>
						    </div><!-- /.entry-content -->

						    <div class="entry-share">
						    	<span>Share:</span>
						    	<a href="#"><i class="fa fa-instagram"></i></a>
						    	<a href="#"><i class="fa fa-heart"></i></a>
						    	<a href="#"><i class="fa fa-facebook"></i></a>
						    	<a href="#"><i class="fa fa-twitter"></i></a>
						    </div><!-- /.entry-share -->
						</article><!-- /.post -->
					</div><!-- /.single-main-content -->
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- /.single-content -->