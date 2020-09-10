<?php
session_start();
date_default_timezone_set('Africa/Lagos');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('html_errors', 1);
ini_set('log_errors', 1);

//Generate a random hash code for the hash to be used in payment processing

function generateRandomString($length)
{
	$randomString = '';
	$characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijlmnopqrstuvwxyz0123456789";
	$charactersLength = strlen($characters);
	for($i = 0; $i < $length; $i++)
	{
		$randomString .= $characters[rand(0,($charactersLength - 1))];
	}
	return $randomString;
}

/* Checking user token function as a security measure */

function checkToken($token, $where = ""){
	if(!empty($where))
	{
		if(!isset($_SESSION['user_token']))
		{
			echo "Error: No token set in form. Please refresh page...! <a href='/kingsweb/enrollment.php?'>Click here</a> to refresh page";
			exit();
		}
		elseif(hash_equals($_SESSION["user_token"], $token) == false)
		{
			echo "Error: Invalid token!. <a href='/kingsweb/enrollment.php?'>Click here</a> to refresh page";
			exit();
		}
	}
	else
	{
		if(!isset($_SESSION['user_token']))
		{
			echo "<small style='color:red;'>No token set in form.</small> <a href='/kingsweb/enrollment.php?'>Click here</a> to refresh page...!";
			exit();
		}
		elseif(hash_equals($_SESSION["user_token"],$token) == false)
		{
			echo "<small style='color:red;'>Invalid token. <a href='/kingsweb/enrollment.php?'>Click here</a> to refresh page...!</small>";
			exit();
		}
	}
}

// Destroy Token function
function destroy_token()
{
	unset($_SESSION['user_token']);
}

/*
@ Checking that the post was submitted and not a direct URL was used
@ Checking that the form received has a hidden hash value to confirm its authenticity
*/

if (isset($_POST['submit_btn']) and !empty($_POST['hash']) and !empty($_POST['p_email']) and !empty($_POST['lga']))
{
	enroll();
}
else
{
	//Redirect to home
	header('Location: /kingsweb/enrollment.php?check=error');
}



// Amount for payment (Note that 1000000 is same as 10000.00 in paystack)
// Will be made dynamic in the admin page in the future

$amount = 1000000;

/*
//Child details Test values
$othernames = "Kidd"; //$sanitize['othernames'];
$surname = "Waya"; // $sanitize['surname'];

@Parents details Test Values
$p_name = "Doe Jane"; // $sanitize['p_name'];
$p_email = "doeJane@gmail.com"; // $sanitize['p_email'];
$p_phone = "+2348108686123"; // $sanitize['p_phone'];
*/

function enroll($type="enroll")
{
	//Connecting to the database
	require_once 'priv/db.php';
	$conn = connect();
	
	//Filtering inputs
	$sanitize = filter_var_array($_POST, FILTER_SANITIZE_STRING);

	$token = preg_replace('/\s+/', ' ', htmlentities($_POST['hash']));	
	checkToken($token);
	
	$errors = array();		
	$extension = array("jpeg","jpg","png","gif");		
	$bytes = 1024;
	$allowedKB = 200;
	$totalBytes = $allowedKB * $bytes;
	
	if($_FILES["file"]['name'] == "" || $_FILES["file"]['size'] == "")
	{
		return false;
	}
	
	$uploadThisFile = true;
			
	$file_name = $_FILES["file"]["name"];
	$file_size = $_FILES["file"]["size"]/(1024);
	$file_tmp = $_FILES["file"]["tmp_name"];	
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);

	if(!in_array(strtolower($ext),$extension))
	{
		array_push($errors, "File type is invalid. \n Allowed: ('jpeg, jpg, png, gif') \n Name:- ".$file_name."\n");
		$uploadThisFile = false;
	}				
	
	if($_FILES["file"]["size"] > $totalBytes){
		array_push($errors, "File size must be less than 200KB. \n Name:- ".$file_name."\n File Size:- ".$file_size."KB \n");
		$uploadThisFile = false;
	}
	
	/*
	@Collecting and sanitizing the inputs 
	@Students details
	*/

	$_SESSION['othernames'] = preg_replace('/\s+/', ' ', htmlentities($sanitize['othernames']));
	$_SESSION['surname'] = preg_replace('/\s+/', ' ', htmlentities($sanitize['surname']));
	$_SESSION['gender'] = preg_replace('/\s+/', ' ', htmlentities($sanitize['gender']));
	$date = htmlentities($sanitize['date']);
	$nationality = preg_replace('/\s+/', ' ', htmlentities($sanitize['nationality']));
	$state = preg_replace('/\s+/', ' ', htmlentities($sanitize['state']));
	$lga = preg_replace('/\s+/', ' ', htmlentities($sanitize['lga']));
	$address = preg_replace('/\s+/', ' ', htmlentities($sanitize['address']));
	$class = preg_replace('/\s+/', ' ', htmlentities($sanitize['selectclass']));
	$prevschool = preg_replace('/\s+/', ' ', htmlentities($sanitize['prevschool']));
	$disability = preg_replace('/\s+/', ' ', htmlentities($sanitize['disability']));
	$_SESSION['numhash'] = generateRandomString(20);
	
	/*
	@Parents details
	*/
	$p_name =  preg_replace('/\s+/', ' ', htmlentities($sanitize['p_name']));
	$_SESSION['p_phone'] = preg_replace('/\s+/', ' ', htmlentities($sanitize['p_phone']));
	$_SESSION['p_email'] = filter_var($sanitize['p_email'], FILTER_VALIDATE_EMAIL);
	$p_address = preg_replace('/\s+/', ' ', htmlentities($sanitize['p_address']));
	$p_occupation = preg_replace('/\s+/', ' ', htmlentities($sanitize['p_occupation']));	
		
	try
	{	
		//Move the file into the enroll uploads folder
		$count = count($errors);
			
		if($count != 0){
			foreach($errors as $error){
				echo $error;
			}
			print($count);
			return False;
		}	
		
		if($uploadThisFile === true):
			$fileId = uniqid('',$file_name).".".$ext;
			$root = $_SERVER['DOCUMENT_ROOT'];
			$fileDestination = "/backend-files/KINGSVILLEWEB/src/enroll_uploads/".$fileId;
			$fileDestinationA = $root."".$fileDestination;
			move_uploaded_file($_FILES["file"]["tmp_name"], $fileDestinationA);	
		else:
			header("Location: ../");
		endif;
	
		$user = $conn->prepare(
		"INSERT INTO user_enrollment".
		"(surname, othernames, address, dob, nationality, soo, lga, image_link, class, psa, gender, disability)".
		"VALUES".
		"(:surname,:othernames,:address,:date,:nationality,:state, :lga, :fileDestinationA, :class, :prevschool, :gender, :disability)"
		);
		$user->execute([':surname' => $_SESSION['surname'],
						  ':othernames' => $_SESSION['othernames'],
						  ':address' => $address,
						  ':date' => $date,
						  ':nationality' => $nationality,
						  ':state' => $state,
						  ':lga' => $lga,
						  ':class' => $class,
						  ':prevschool' => $prevschool,
						  ':gender' => $_SESSION['gender'],
						  ':disability' => $disability,
						  ':fileDestinationA' => $fileDestinationA
						]);
		
		if($user):	
			//Get the user ID to use on other tables
			$get = $conn->lastInsertId();
			$parent = $conn->prepare(
						"INSERT INTO user_parents".
						"(user_id, fullname, email, phone, occupation)".
						"VALUES".
						"(:user_id, :fullname, :email, :phone, :occupation)"
						);
			$parent->execute([
						':user_id'=>$get,
						':fullname'=>$p_name,
						':email'=>$_SESSION['p_email'],
						':phone'=>$_SESSION['p_phone'],
						':occupation'=>$p_occupation
						]);

			$pay = $conn -> prepare(
						"INSERT INTO user_payments".
						"(user_id, hash)".
						"VALUES".
						"(:user_id, :hash)"
						);
			$pay->execute([':user_id'=>$get, ':hash' => $_SESSION['numhash']]);
			
			global $p_email, $surname, $othernames, $p_phone, $gender, $hash;
			$_SESSION['user_id'] = $get;
			$_SESSION['insertPaymentConfirmation'] = True;
			$hash = $_SESSION['numhash'];
			$p_email = $_SESSION['p_email'];
			$surname = $_SESSION['surname'];
			$othernames = $_SESSION['othernames'];
			$p_phone = $_SESSION['p_phone'];
			$gender = $_SESSION['gender'];				
		endif;
			
	$user = null;
	$parent = null;
	$pay = null;
	destroy_token();
		
	}
	catch(PDOException $e)
	{
		die("Error due to <strong>".$e->getMessage()."</strong>");
	}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Enrollment payment</title>
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
                Payment confirmation
            </p>
        </div>
        
                    <div class = "notice" style="padding:20px">
                        <p style="font-size:18px;font-weight:bold;" align= "center" class = "regular-text">Hello <?=@$othernames?> <?=@$surname?>, You are about to pay the sum of ₦ 10,000 to complete your enrollment process.
						</p>
						
						<br />
						<p align= "center">Click on the button below to make secured payment.</p>
						<div align= "center">
						<form>
						<button class="btn regular-text" type="button" onclick="payWithPaystack()"> PAY NOW </button> 
						</form>
						
						</div>
                    </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="js/lga.min.js"></script>
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>
<!-- place below the html form -->
function payWithPaystack(){
	var status;
	const api = 'pk_test_28e3de6e87f220a5182c0565505c2831d5ee52ec';
    var handler = PaystackPop.setup({
      key: api,
      email: '<?=$p_email?>',
      amount: '<?=$amount?>',
	  currency: 'NGN',
	  phone: '<?=$p_phone?>',
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
	  firstname: '<?=$othernames?>',
	  lastname: '<?=$surname?>',
      metadata: {
         custom_fields: [
            {
                display_name: '<?=$othernames?>',
                variable_name: '<?=$surname?>',
                value: '<?=$p_phone?>',
            }
         ]
      },
      callback: function(response){
		  const successReference = response.reference;
		  status = response.status;
		  if (successReference){
			  window.location.replace("payment_status.php?chcode=" + "<?=generateRandomString(40)?>" + "&hcmax=" + "<?=$hash?>" + "&hash=" + "<?=generateRandomString(20)?>" + "&spc=" + successReference + "&hc=" + "<?=generateRandomString(10)?>" + "&st=" + status + "&c=" + "<?=generateRandomString(5)?>");
		  }
      },
      onClose: function(){
          alert('You cancelled payment. Window will be closed');
      }
    });
    handler.openIframe();
}
</script>
</body>
</html>