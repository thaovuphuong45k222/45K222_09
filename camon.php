<div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-content-one">
                        <h2 class="title default-text-gradient">Cảm ơn bạn </h2>
                        <h3 class="widget-title">
                              Số thứ tự của bạn là: <?=$res['sttcuaban']?>
                        </h3>
                      
                        <h3 class="widget-title">
                              Buổi: <?php 
                                    if($res['time'] == 1){
                                        echo "Sáng";
                                    }elseif($res['time'] == 2){
                                        echo "Chiều";
                                    }else{
                                        echo "Tối";
                                    }

                                ?>
                        </h3>
                    </div><!-- /.heading-content-one -->
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
            <div class="row center">
                <div class="col-md-8">
                    <div class="contact-us-content-right">
                        <h3 class="widget-title">
                              Mời bạn khai báo y tế <a class="color-orange" href="https://docs.google.com/forms/d/1qoCi8zivxwRM3QtHRLEm7bDJ1IuSTp09XweCgfO07-I/edit#responses"> tại đây </a> 
                        </h3>
                    </div><!-- /.contactus-content-right -->
                </div><!-- /.col-md-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.contact-us-area -->