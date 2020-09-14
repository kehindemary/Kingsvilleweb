<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width , initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title> Home </title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <!--Main CSS-->
    <link rel="stylesheet" href="css/main-style.css"/>
    <link rel="stylesheet" href="css/nav.css"/>
    <!--card slider-->   
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> 
    <!--Main CSS ends here-->
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--JQUERY CDN starts here-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
      <!--JQUERY CDN ends here-->
      <!--chatbot-->
      <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="20581a9b-cbef-4780-85c0-46022a76059b";
      (function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
      <!--chatbot ends here-->
</head>
<style>
  .flickity-page-dots .dot{
          display: none;
        }
</style>
<body>
<header>
    <div class="header-top container-fluid">
        <div class="container">
            <div>
            <a href="index.php">
                <img src="https://res.cloudinary.com/marykaystuff/image/upload/v1592566343/Kingsville%20Schools/vevhgp1vtj07furerdtp.png" class="mt-2" alt="logo">    
            </a>
            </div>
            <div class="contact">
            <div class="mx-2 hide-content"><span class="regular-text">Email</span>  admin@kingsvilleschool.com.ng</div>
            <div class="mx-2 hide-content"><span class="regular-text">Phone</span>  +234 (0)1 453 7247</div>
            <button class = "btn regular-text hide-content">Student Portal<i class="fa fa-caret-right btn-icon-only hide-content" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
      <nav>
        <div class="container">
        <label for="btn" class="icon">
              <span class="fa fa-bars bg-dark"></span>
              </label>
              <input type="checkbox" id="btn">
              <ul>
        <li><a href="index.php">Home</a></li>
        <li>
                  <label for="btn-1" class="show">Discover +</label>
                  <a href="#">Discover</a>
                  <input type="checkbox" id="btn-1">
                  <ul>
        <li><a href="about.php">About Kingsville</a></li>
        <li><a href="facility.php">Our facilities</a></li>
        <li><a href="about.php">Newsletter</a></li>
        <li><a href="clubs.php">School Clubs</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        </ul>
        </li>
        <li>
                  <label for="btn-2" class="show">Our School </label>
                  <a href="#">Our School</a>
                  <input type="checkbox" id="btn-2">
                  <ul>
        <li><a href="academics.php">Curriculum</a></li>
        <li><a href="admission.php">Admission</a></li>
        <li>
                      <label for="btn-3" class="show">Advance School</label>
                      <a href="advanced.php">Advance School </a>
                      <input type="checkbox" id="btn-3">
                      <ul>
        <li><a href="advanced.php">IGCSE</a></li>
        <li><a href="advanced.php">TOEFL</a></li>
        <li><a href="advanced.php">IELTS</a></li>
        </ul>
        </li>
        </ul>
        </li>
        <li><a href="portal/users/publiclogin">Check Result</a></li>
        <li><a href="gallery.php">Media Center</a></li>
        <li><a href="contact.php">Contact Us</a></li>
        <li><a href="portal" class="hide-content">Student Portal</a></li>
        </ul>
        </div>
        </nav>
</header>
<body>
  <section class="banner-area">
  <div class="banner">
        <div class="caption">
            <h1 class="text-color">We are moulding the leaders of <span class =" d-inline text-white">tomorrow today</span></h1>
            <p class="text-white">From highly qualified & experienced teaching staff to modern facilities, 
              we are delivering education in a world-class environment.
            </p>
            <a href="enrollment.php">
            <button class = "btn regular-text" >Enroll Now<i class="fa fa-caret-right btn-icon-only" aria-hidden="true"></i></button>
            </a>
          </div>
        <div class="image-area">
        <div class="img-background"></div>
        </div>
  </div>
</section>
<section class="container-fluid">
  <div class="card-title text-center" data-aos="fade-left">
      <h1>Enroll in our School</h1>
  </div>
  <div class="container card-deck" data-aos="fade-right">
    <div class="card">
      <div class="card-img-top card-img-4">
      </div>
      <div class="card-body">
        <h5 class="card-title">Primary School</h5>
        <p class="regular-text">We train our children to maximize their potentials and
           help them discover who they really are.
        </p>
        <a href="primary.php" class="link">
        <p class="regular-text">Learn more
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
        </p>
      </div>
    </div>
    <div class="card">
      <div class="card-img-top card-img-1">
      </div>
      <div class="card-body">
        <h5 class="card-title">Junior Secondary</h5>
        <p class="regular-text">We offer broad and balanced education, 
          preparing our children to succeed in a challenging global community
        </p>
        <a href="secondary.php" class="link">
        <p class="regular-text">Learn more
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
        </p>
      </div>
    </div>
    <div class="card">
      <div class="card-img-top card-img-2">
      </div>
      <div class="card-body">
        <h5 class="card-title">Senior Secondary</h5>
        <p class="regular-text">We offer broad and balanced education, 
          preparing our children to succeed in a challenging global community
        </p>
        <a href="secondary.php" class="link">
        <p class="regular-text">Learn more
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
        </p>
      </div>
    </div>
    <div class="card">
      <div class="card-img-top card-img-3">
      </div>
      <div class="card-body">
        <h5 class="card-title">Advance studies</h5>
        <p class="regular-text">Ancillary courses like TOEFL and IGCSE are also run by the school with standard science laboratories.</p>
        <a href="advanced.php" class="link">
        <p class="regular-text">Learn more
          <i class="fa fa-caret-right" aria-hidden="true"></i>
        </a>
        </p>
      </div>
    </div>
</section>
<section class="card-group-area" data-aos="fade-left">
    <div class="container card-group">
      <div class="card card-style">
        <div class="card-body card-content card-group-img-1">
          <div class="icon" >
          <img src="https://res.cloudinary.com/marykaystuff/image/upload/v1594925527/Kingsville%20Schools/phru6cnqbaurbuvbmb5s.png">
          </div>
          <div class="details">
          <h4 class="text-md"> Currently Enrolling</h4>
          <p class="regular-text">Programs offered includes IGCSE, TOEFL...
          </p>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body card-group-img-2 card-content">
            <div class="icon" >
            <img src ="https://res.cloudinary.com/marykaystuff/image/upload/v1594925522/Kingsville%20Schools/t6vnqpzwki2xt8wanf4f.png">
            </div>
            <div class="details">
              <h4 class = "text-md">School Calendar</h4>
              <p class="regular-text">Programme of school news and events...
              </p>
            </div>
        </div>
      </div>
      <div class="card">
        <div class="card-body card-content card-group-img-3">
          <div class="icon" >                
          <img src="https://res.cloudinary.com/marykaystuff/image/upload/v1594925530/Kingsville%20Schools/eueyjr22udrijh2wliiv.png">
          </div>
          <div class="details">
          <h4 class="text-md">Newsletter </h4>
          <p class="regular-text">Catch up on latest news in KingsVille Schools...
          </p>
          </div>
          </div>
    </div>
</section>
<section class="background-banner" data-aos="fade-right">
  <div class="main-container container">
    <div class="left-container">
    <iframe src="https://www.youtube.com/embed/fjI_iU_kyJo" frameborder="0" 
    allow="autoplay;" allowfullscreen></iframe>
    </div>
    <div class="right-text">
      <p class="regular-text">Welcome to KVS</p>
      <h2>KINGSVILLE SCHOOLS</h2>
      <p class="regular-text" >
          Our vision is to provide, using state of the art technology,
          qualitative and functional education to all our present and 
          prospective students irrespective of nationality, religion or tribe.
      </p>
      <p class="regular-text">
          To create a dynamic, favorable and conducive environment for learning, to produce intelligent, 
          enlightened and highly socialized scholars, 
          who are fit to pursue higher education and become effective, integrated and productive members of the society.
      </p>
      <a class ="link" href="about.php">
        <p>Learn more
          <i class="fa fa-caret-right" aria-hidden="true"></i>
          </p>
        </a>  
    </div>
  </div>
</section>
<section class="chart-area" data-aos="fade-left">
  <div class="main-container container">
    <div class="left-text">
      <p class="regular-text">Why KingsVille Schools</p>
      <h2 class="text-md">Academic Excellence</h2>
      <p>
        Our academic excellence focuses on ensuring academic and personal growth for every child at Kingsville. 
        Our classroom curriculum is based on an internationally-recognized education that challenges students both academically and personally. 
        We have recorded 90% success in academic excellence in the past and present. Our students results speaks for itself:
      </p>
        <a class ="link" href="about.php">
        <p>Learn more
          <i class="fa fa-caret-right" aria-hidden="true"></i>
          </p>
        </a>      
    </div>
    <div class="right-container">
      <img src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1596623979/assets/image-slides/KINGSVILLE_SCHOOLS_ABUJA_2019_WAEC_RESULTS_ANALYSIS_3_twxulf.png">
    </div>
  </div>
</section>
<section data-aos="fade-right" class="sticky-background1 text-white">
  <div class="main-container container">
    <div class="left-container A-level">
    </div>
    <div class="right-text">
      <p class="text-md">A'Level At Kingsville</p>
      <p class="regular-text" >
        Understand British, America and Nigeria Curriculum with; Kingsville Advanced Level School. <span class ="text-color d-inline"> Your best link to Foreign and Nigeria universities</span>. Our expectations are very simple. 
        We Want all students irrespective of their ability and background, to work hard, pray and behave well.
      </p>
      <a class ="link-2" href="advanced.php">
        <p>Learn more
          <i class="fa fa-caret-right" aria-hidden="true"></i>
          </p>
        </a>  
    </div>
  </div>
</section>
<section data-aos="fade-left">
  <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586170/assets/brand/18_olt2ne.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586221/assets/brand/90_fnjide.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586221/assets/brand/91_togw18.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586220/assets/brand/87_gh4plq.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586220/assets/brand/86_g8phun.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586220/assets/brand/84_t7pypo.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586220/assets/brand/85_fzsaqy.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586220/assets/brand/83_fgvqu8.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586219/assets/brand/77_x3tdyw.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586218/assets/brand/76_v3hasr.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586218/assets/brand/75_xddzli.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586218/assets/brand/74_lb4zca.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586218/assets/brand/72_irpmxw.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586175/assets/brand/66_igiecu.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586175/assets/brand/62_qo5mto.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586173/assets/brand/55_hppxjh.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586173/assets/brand/54_wqqs2u.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586173/assets/brand/53_fijzrg.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586173/assets/brand/52_wh3f7l.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586173/assets/brand/51_hvmhtl.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586172/assets/brand/46_mpqq8b.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586171/assets/brand/42_gyqdvt.png">
    </div>
    <div class="carousel-cell">
      <img class="w3-image" src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1595586169/assets/brand/17_syyukp.png">
    </div>
  </div>
</section>
<!-- Counter Area Start Here -->
<div class="counter-area" data-aos="fade-right">
  <div class="container">
      <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-wow-duration=".5s" data-wow-delay=".20s">
          <h2 class="about-counter text-white" data-num="99">100</h2>
          <p>PROFESSIONAL TEACHERS</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-wow-duration=".5s" data-wow-delay=".40s" >
                <h2 class="about-counter text-white" data-num="99">99</h2>
                <p>DISTINCTION IN WAEC</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-wow-duration=".5s" data-wow-delay=".60s" >
            <h2 class="about-counter text-white" data-num="100">100</h2>
              <p>ACADEMIC VALUE</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12" data-wow-duration=".5s" data-wow-delay=".80s" >
              <h2 class="about-counter text-white" data-num="100">100</h2>
              <p>MORAL VALUE</p>
          </div>
      </div>
  </div>
</div>
<!-- Counter Area End Here -->
<!-- Footer Area Start Here -->
<footer class="footer-background" data-aos="fade-left">
  <div class="footer-container container">
    <div class="about">
        <img src="https://res.cloudinary.com/marykaystuff/image/upload/v1592566952/Kingsville%20Schools/gqjj9lyu4cu1ab7te4ji.jpg" alt="logo">
        <hr>    
      <p>© 2020 Kingsville Educational Services. </p>
        <p>All rights reserved</p>
      </div>
      <div class="about-us">
        <p class="title-sm">Discover</p>
        <p class="regular-text"><a href="#">About KingsVille</a></p>
        <p class="regular-text"><a href="#">Our Facilities</a></p>
        <p class="regular-text hide-content"><a href="#">Newsletter</a></p>
        <p class="regular-text"><a href="#">School Clubs</a></p>
        <p class="regular-text"><a href="#">Gallery</a></p>
      </div>
    <div class="our-school">
      <p class="title-sm">Our Schools</p>
      <p class="regular-text"><a href="#">Primary School</a></p>
      <p class="regular-text"><a href="#">Junior School</a></p>
      <p class="regular-text"><a href="#">Senior School</a></p>
      <p class="regular-text"><a href="#">Cambridge 'A' Level</a></p>
    </div>
    <div class="why-school">
      <p class="title-sm">Why KingsVille</p>
      <p class="regular-text"><a href="#">Our Facilities</a></p>
      <p class="regular-text"><a href="#">Boarding Experience</a></p>
      <p class="regular-text"><a href="#">Extracurricular Activities</a></p>
      <p class="regular-text"><a href="#">Skill Aquisition</a></p>
    </div>
    <div class="admission-area">
      <p class="title-sm">Admission</p>
      <p class="regular-text"><a href="#">Currently Enrolling</a></p>
      <p class="regular-text"><a href="#">Entrance Examination</a></p>
    </div>
  </div>
  <div class="map-area">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15758.428047872478!2d7.4378054!3d9.0995173!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x73e3c575aab23b8c!2sKingsville%20College!5e0!3m2!1sen!2sng!4v1597224850343!5m2!1sen!2sng" width="800" height="600" frameborder="0" style="border:0;" 
    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
  <div class="footer-contact-area">
    <div class="container">
  <div class="social-media">        
    <p class="text-md text-white">Connect with Us</p>
  <div class="social-media-icon">
    <a href="#" class=" btn rounded-circle btn-icon-only">
    <i class="fab fa-twitter"></i>
    </a>
    <a href="https://web.facebook.com/KingsvilleAbuja" class=" btn rounded-circle btn-icon-only">
    <i class="fab fa-facebook"></i>
    </a>
    <a href="https://www.instagram.com/kingsvilleschools/" class=" btn  rounded-circle btn-icon-only">
    <i class="fab fa-instagram"></i>
    </a>
    <a href="#" class="btn rounded-circle btn-icon-only">
    <i class="fab fa-linkedin"></i>
    </a>
</div>
</div>
<div class="footer-contact text-white">
  <div>
    <p class="text-md">Contact</p>
    <p class="regular-text">Email</p>  
    <p class="regular-text">admin@kingsvilleschool.com.ng</p>
  <div>
    <p class="regular-text">Phone</p>
    <p class="regular-text">
      +234 (0)1 453 7247
    </p>
    </div>
  </div>
</div>
</div>
</div>
</footer>
<script src="js/jquery-2.2.4.min.js" type="text/javascript"></script>
<!-- Plugins js -->
<script src="js/plugins.js" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- WOW JS -->
<script src="js/wow.min.js"></script>
<!-- Nivo slider js -->
<script src="vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
<script src="vendor/slider/home.js" type="text/javascript"></script>
<!-- Owl Cauosel JS -->
<script src="vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
<!-- Meanmenu Js -->
<script src="js/jquery.meanmenu.min.js" type="text/javascript"></script>
<!-- Srollup js -->
<script src="js/jquery.scrollUp.min.js" type="text/javascript"></script>
<!-- jquery.counterup js -->
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<!-- Countdown js -->
<script src="js/jquery.countdown.min.js" type="text/javascript"></script>
<!-- Isotope js -->
<script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
<!-- Magic Popup js -->
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!-- Gridrotator js -->
<script src="js/jquery.gridrotator.js" type="text/javascript"></script>
<!-- Custom Js -->
<script src="js/main.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
  $('.icon').click(function(){
    $('span').toggleClass("cancel");
  });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
