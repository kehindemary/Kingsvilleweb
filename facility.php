<?php
    include 'includes/header.php';
?>
        <!-- Inner Page Banner Area Start Here -->
        <section class="banner-area">
        <div class="banner">
        <div class="caption container">
            <h1 class="text-color">We are moulding the leaders of <span class =" d-inline text-white">tomorrow today</span></h1>
            <p class="text-white">From highly qualified & experienced teaching staff to modern facilities, 
              we are delivering education in a world-class environment.
            </p>
            <button class = "btn regular-text">Enroll Now<i class="fa fa-caret-right btn-icon-only" aria-hidden="true"></i></button>
        </div>
        <div class="image-area">
        <div class="facilities-banner-img"></div>
        </div>
         </div>
        </section>
       
        <!-- Inner Page Banner Area End Here -->
        <!-- Courses Page 1 Area Start Here -->
        <div class="courses-page-area1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 col-md-push-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="course-details-inner">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <?php $x =0; foreach(getGallery() as $facility){  ?>
                                        <?php if($facility['category'] == 'facility'){ $x++;?>
                                            <div class="carousel-item <?php if($x==1){ ?> active <?php } ?>">
                                                <img src="<?php echo $facility['image_location']; ?>" class="img-responsive d-block w-100">
                                            </div>
                                        <?php } ?>
                                        <?php } ?>
                                    </div>
                                </div>
                                <h2 class="title-default-left title-bar-high">Our Facilities</h2>
                                <p>The academic facilities at Kingsville School are extensively tailored to give a well rounded, cutting edge education to every student. Coupled with competent staff, both academic and non-academic, Kingsville School is fully equipped to meet the expectations of attaining a modern and up-to-date education.</p>
                                <h3 class="sidebar-title">At a Glance:</h3>
                                <ul class="course-feature">
                                    <li>Classrooms</li>
                                    <li>Music Rooms</li>
                                    <li>Art Rooms</li>
                                    <li>Cafeteria</li>
                                    <li>Science Lab</li>
                                    <li>Library</li>
                                    <li>Multipurpose Hall</li>
                                    <li>Computer Lab</li>
                                    <li>Track and Field </li>
                                    <li>Elementary School Playground</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 col-md-pull-9">
                        <?php include "includes/sidemenu.php"; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses Page 1 Area End Here -->
        <?php
            include 'includes/footer.php';
        ?>
        
        <style>
            #carousel-custom {
                margin-top:  10px;
                width: 100%;
            }
            #carousel-custom .carousel-indicators {
                margin: 10px 0 0;
                overflow: auto;
                position: static;
                text-align: left;
                white-space: nowrap;
                width: 100%;
            }
            #carousel-custom .carousel-indicators li {
                background-color: transparent;
                -webkit-border-radius: 0;
                border-radius: 0;
                display: inline-block;
                height: auto;
                margin: 0 !important;
                width: auto;
            }
            #carousel-custom .carousel-indicators li img {
                display: block;
                opacity: 0.5;
            }
            #carousel-custom .carousel-indicators li.active img {
                opacity: 1;
            }
            #carousel-custom .carousel-indicators li:hover img {
                opacity: 0.75;
            }
            #carousel-custom .carousel-outer {
                position: relative;
            }
        
            
        </style>