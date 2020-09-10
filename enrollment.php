<?php
session_start();
date_default_timezone_set('Africa/Lagos');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
ini_set('html_errors', 0);
ini_set('log_errors', 1);

function set_token()
{
	if(!isset($_SESSION['user_token'])):
		$_SESSION['user_token'] = bin2hex(md5(mt_rand()));
	endif;
		
	return $_SESSION['user_token'];
}
	
function getTokenField()
{
	return '<input type="hidden" name="hash" value="'.$_SESSION['user_token'].'" />';
}

set_token()
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Enrollment Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main-style.css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" 
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
    </head>
<body>
    <section class="admission-form-area">
        <div class = "logo-area">
            <img src="https://res.cloudinary.com/kingsvilleschools/image/upload/v1597929204/assets/image-slides/logo_f45ke0.jpg" alt ="logo">
        </div>
        <div class ="form-container">
        <div class ="text-md form-title">
            <p class = "text-center">
                Student Admission Form
            </p>
        </div>
        <div class ="regular-text form-text">
            <p class = "text-center">
            Please Note that all fields are <span>required</span>.
            </p>
        </div>
        <p class="regular-text text-white mt-2 mb-0">STUDENT INFORMATION</p>
        <form method="POST" action="pay.php" class = "regular-text" enctype="multipart/form-data">
            <label for="surname">Surname</label>
            <div class="input-group">
            <div class="input-group-prepend">
            <span class="input-group-text" id="surname" >
            <i class="fas fa-user"></i>
            </span>
            </div>     
            <input type="text" id="surname" name="surname" class="form-control" placeholder="Enter your Surname" required >
            </div>
            <label for="othernames">Othernames</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="othernames" >
                <i class="fas fa-user"></i>
                </span>
                </div>     
                <input type="text" id="othernames" name="othernames" class="form-control" placeholder="Enter Other names" >
            </div>
            <label for="dob">Date of birth</label>
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="date" >
                <i class="fas fa-calendar"></i>
                </span>
                </div>     
                <input type="date" id="date" name="date" class="form-control" required >
            </div>
            <label for="gender">Gender</label>
                <select class="form-control regular-text" id="gender" name ="gender">
                    <option>Female</option>
                    <option>Male</option>
                    </select>
                    <label for="gender">Nationality</label>
                    <select class="form-control regular-text "id="nationality" name ="nationality">
                    <option selected>Nigerian</option>
                    </select>
                <label for ="state">State of Origin</label>
                <select 
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-control regular-text"
                required = "required">
                  <option value="" selected>Select State</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
            </select>
            <label class="control-label regular-text">LGA of Origin</label>
            <select
                name="lga"
                id="lga"
                class="form-control regular-text select-lga"
                required = "required"
			>
            </select>
                <label for="address">Home Address</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="address" >
                <i class="fas fa-map-marker-alt"></i>
                </span>
                </div>
                <input type="address" class="form-control" id="address" name="address" placeholder="Enter your Home address" required >
                </div> 
                <label for="selectclass">Select Class</label>
                <select class="form-control regular-text" id="selectclass" name ="selectclass">
                <option>Pre-school</option>
                <option>Primary</option>
                <option>Secondary</option>
                <option>Advance classes</option>
            </select>       
            <label for="prevschool">Previous school attended</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="prevschool" >
                <i class="fas fa-user"></i>                   
                </span>
                </div>
                <input type="input" id="prevschool" name="prevschool" class="form-control" placeholder="Enter the name of previous school">
                </div>    
                <label for="disability">Any physical disability?</label>
                <div class="input-group">
                <input type="disability" id="disability" name="disability" class="form-control" placeholder="State any disability" >
                </div>
                <label for="img">Upload Passport (200kb max - jpeg/jpg/png/gif) :</label>
                <input type="file" id="img" class="text-white my-1" name="file" accept="image/*" required = "required">
                <p class="regular-text text-white my-3">PARENT / GUARDIANS INFORMATION</p>
                <label class = "regular-text" for="p_name">Name</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="name" >
                <i class="fas fa-user"></i>
                </span>
                </div>     
                <input type="text" id="p_name" name="p_name" class="form-control" placeholder="Enter your Fullname" required >
                </div>
                <label class = "regular-text" for="p_address">Address</label>
                <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text" id="p_address" >
                <i class="fas fa-map-marker-alt"></i>                    
                </span>
                    </div>     
                    <input type="text" id="p_address" name="p_address" class="form-control" placeholder="Enter your Address" required >
                    </div>
                    <label class = "regular-text" for="p_email">Parent's Email</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="email" >
                    <i class="fas fa-envelope"></i>
                    </span>
                    </div>
                    <input type="email" class="form-control" id="p_email" name="p_email" placeholder="Email" required >
                    </div>
                    <label class = "regular-text" for="p_phone">Phone Number</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="phone" >
                    <i class="fas fa-phone"></i>
                    </span>
                    </div>
                    <input type="number" class="form-control" id="p_phone" name="p_phone" placeholder="Enter your phone number" required >
                    </div>
					
					<?=getTokenField()?>
					
                    <label class = "regular-text" for="p_occupation">Occupation</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="occupation" >
                    <i class="fas fa-briefcase"></i>
                    </span>
                    </div>     
                    <input type="text" id="p_occupation" name="p_occupation" class="form-control" placeholder="Enter your occupation" required >
                    </div>
					<div align = "center">
                        <input align = center type="Submit" value = "PROCEED TO PAYMENT" class="btn regular-text" name="submit_btn" id="submit_btn">
					</div>
                    </form>
                    <div class = "notice">
                        <p class = "regular-text">PLEASE NOTE: You are required to pay an admission fee of ₦ 10,000 after filling the form</p>
                    </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/lga.min.js"></script>
</body>
</html>