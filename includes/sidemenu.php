<div class="sidebar">
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Latest News</h3>
                                    <div class="sidebar-latest-research-area">
                                        <ul >
                                            <?php foreach(getNews(3) as $news){ ?>
                                            <li>
                                                <div class="latest-research-img show-content">
                                                    <a href="#"><img src="<?php echo $news['image_location'] ?>" class="img-responsive show-content" style="height:100px;"></a>
                                                </div>
                                                <div class="latest-research-content">
                                                    <h4><?php echo $news['date'] ?></h4>
                                                    <p><?php echo $news['title'] ?></p>
                                                </div>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">Our School</h3>
                                    <ul class="sidebar-categories">
                                        <li><a href="primary.php">Nursery & Primary School</a></li>
                                        <li><a href="secondary.php">Secondary School</a></li>
                                        <li><a href="advanced.php">Advanced Level</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-box-inner">
                                    <h3 class="sidebar-title">School Calendar</h3>
                                    <?php foreach(getLibrary() as $lib){ ?>
                                    <?php if($lib['type'] == "calendar"){ ?>
                                    <a href="download/<?php echo $lib['image_location'] ; ?>" target="_blank" style="margin-bottom:10px;"><?php echo $lib['title'] ; ?></a>
                                    <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="sidebar-box">
                                <div class="sidebar-add-area overlay-primaryColor">
                                    <img src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1598189194/assets/image-slides/building-min_wwb2cr.jpg" class="img-responsive" alt="banner">
                                    <a href="enrollment.php" class="sidebar-ghost-btn">Enroll Now</a>
                                </div>
                            </div>
                        </div>