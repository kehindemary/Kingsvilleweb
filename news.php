<?php 
include "includes/header.php"; 
?>

        <!-- Inner Page Banner Area Start Here -->
        <div class="news-banner-img">
            <div class = "banner-text">
            <p>News and Events</p>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- News Page Area Start Here -->
        <div class="news-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <?php
                            if($_GET['type'] == "news"){
                                foreach(getNews() as $news){
                                    $mydate = $news['date'];
        							$month = date("m",strtotime($mydate));
        							$day = date("d",strtotime($mydate));
        							$year = date("Y",strtotime($mydate));
                                 ?>   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="news-box">
                                            <div class="news-img-holder">
                                                <img src="img/news/<?php echo $news['image_location']; ?>" class="img-responsive" alt="research">
                                                <ul class="news-date1">
                                                    <li><?php echo $day .' '. month($month) ;?></li>
                                                    <li><?php echo $year; ?></li>
                                                </ul>
                                            </div>
                                            <h2 class="title-default-left-bold"><a href="#"><?php echo $news['title']; ?></a></h2>
                                            <p><?php echo $news['content']; ?></p>
                                            <!--<a href="#" class="default-big-btn">Read MOre</a>-->
                                        </div>
                                    </div>
                                <?php } ?>
                                
                            <?php }else{ ?>
                                
        						    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 event-inner-area">
                                        <div class="news-box">
                                            <ul class="event-wrapper">
                                                <?php 
                                                foreach(getEvents() as $event){
                                                    $mydate = $event['date'];
                        							$month = date("m",strtotime($mydate));
                        							$day = date("d",strtotime($mydate));
                        							$year = date("Y",strtotime($mydate));
                        						?>
                                                <li class="wow bounceInUp" data-wow-duration="2s" data-wow-delay=".1s">
                                                    <div class="event-calender-wrapper">
                                                        <div class="event-calender-holder">
                                                            <h3><?php echo $day; ?></h3>
                                                            <p><?php echo month($month); ?></p>
                                                            <span><?php echo $year; ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="event-content-holder">
                                                        <h3><a href="<?php echo $event['id'] ?>"><?php echo $event['title'] ?></a></h3>
                                                        <p><?php echo $event['short_content'] ?> </p>
                                                        <ul>
                                                            <li><?php echo $event['time'] ?></li>
                                                            <li><?php echo $event['address'] ?></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                            <?php } ?>
                            
                            
                            <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">-->
                            <!--    <ul class="pagination-center">-->
                            <!--        <li class="active"><a href="news1.html#">1</a></li>-->
                            <!--        <li><a href="news1.html#">2</a></li>-->
                            <!--        <li><a href="news1.html#">3</a></li>-->
                            <!--        <li><a href="news1.html#">4</a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <?php include "includes/sidemenu.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Page Area End Here -->
        <?php include "includes/footer.php"; ?>