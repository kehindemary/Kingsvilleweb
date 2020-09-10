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
        <div class="gallery-banner-img"></div>
        </div>
         </div>
        </section>
        <!-- Inner Page Banner Area End Here -->
        
        <!-- Gallery Area 2 Start Here -->
        <div class="gallery-area2">
            <div class="container" id="inner-isotope">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="isotop-classes-tab isotop-btn">
                            <a href="gallery.php#" data-filter="*" class="current">All</a>
                            <a href="gallery.php#" data-filter=".education">Education</a>
                            <a href="gallery.php#" data-filter=".event"> Events</a>
                            <a href="gallery.php#" data-filter=".facility">Facilities</a>
                            <a href="gallery.php#" data-filter=".campus">Environment</a>
                        </div>
                    </div>
                </div>
                <div class="row featuredContainer gallery-wrapper">
                    <?php foreach(getGallery() as $gallery){ ?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 <?php echo $gallery['category']; ?>">
                        <div class="gallery-box">
                            <img src="<?php echo $gallery['image_location']; ?>" class="img-responsive" alt="gallery">
                            <div class="gallery-content">
                                <p><?php echo $gallery['title']; ?></p>
                                <a href="<?php echo $gallery['image_location']; ?>" class="zoom"><i class="fa fa-link" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </div>
        </div>
        <!-- Gallery Area 2 End Here -->
        
        <?php
        include 'includes/footer.php';
        ?>