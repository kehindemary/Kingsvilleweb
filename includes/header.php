<?php 
include 'admin/functions.php' ; 
$cms = getCMS();
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title> Kingsville Schools </title>
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Main CSS-->
    <link rel="stylesheet" href="css/main-style.css"/>
    <link rel="stylesheet" href="css/nav.css"/>
    <link rel="stylesheet" href="css/style.css"/>
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
            <div class="mx-2 hide-content"><span class="regular-text">Phone</span>  +234 (0) 803 630 4935</div>
            <a href="portal">
            <button class = "btn regular-text hide-content">Student Portal<i class="fa fa-caret-right btn-icon-only hide-content" aria-hidden="true"></i></button>
            </a>  
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