<?php
session_start();
require_once("priv/db.php");
$reference = $_GET['spc'];
$status = $_GET['st'];
$hashCode = $_GET['hcmax'];
$name = $_SESSION['othernames'].' '. $_SESSION['surname'];
$gender = $_SESSION['gender'];
$p_email = $_SESSION['p_email'];
$p_phone = $_SESSION['p_phone'];

if($_SESSION['insertPaymentConfirmation'] == True and isset($_SESSION['user_id']) and $_SESSION['numhash'] == $hashCode)
{
	$conn = connect();
	//check if the database has already been updated
	$query = $conn->prepare("SELECT updated FROM user_payments WHERE hash = :hash AND user_id = :id");
	$query->bindValue(':hash', $hashCode, PDO::PARAM_STR);
	$query->bindValue(':id', $_SESSION['user_id'], PDO::PARAM_INT);
	$query->execute();
	$returnedRow = $query->fetch(PDO::FETCH_NUM);
	$updated = $returnedRow[0];
	
	if ($updated != 'yes')
	{
		if($status == 'success'):
			$paid = "Paid";
		else:
			$paid = "Failed";
		endif;
		// Updating the payment status to the user's status from paystack
		$update = $conn->prepare("UPDATE user_payments SET status= :paid, updated='Yes', reference = :reference WHERE(hash = :hash AND user_id = :user)");
		$update->execute([':paid' => $paid,':reference' => $reference, ':hash' => $hashCode, ':user' => $_SESSION['user_id']]);
	}
	$update = null; 
	$query = null;	
}
else
{
	header("Location: backend-files/KINGSVILLEWEB/src/enrollment.php");
}

session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Payment Status</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="css/main-style.css"/>
		<link rel="stylesheet" type="text/css" media="screen" href="css/table.css"/>
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
                Payment status (<?=ucfirst($status)?>).
            </p>
        </div>
        
                    <div class = "notice" style="padding:50px">
                        <p style="font-size:20px;font-weight:bold;" align= "center" class = "regular-text">View your concluded payment status in the table below. Copy reference code for payment confirmation.
						
						</p>
						<div style="overflow-x:auto;">
							<table>
							  <thead>
								<tr>
								  <th colspan="3">Record of payment</th>
								</tr>
								<tr>
								  <th colspan="1">#</th>
								  <th colspan="2">Details</th>
								</tr>
							  </thead>
							  <tbody>
								<tr>
								  <td>Student's Name:</td>
								  <td style="color:#ffc107;"><?=$name?></td>
								  <td>
								  </td>
								</tr>
								<tr>
								  <td>Gender:</td>
								  <td><?=$gender?></td>
								  <td>
								  </td>
								</tr>
								<tr>
								  <td>Parent's Email:</td>
								  <td><?=$p_email?></td>
								  <td>
								  </td>
								</tr>
								<tr>
								  <td>Parent's Phone:</td>
								  <td><?=$p_phone?></td>
								  <td>
								  </td>
								</tr>
								<tr>
								  <td>Transaction Status:</td>
								  <td><?=ucfirst($status)?></td>
								  <td>
								  </td>
								</tr>
								<tr>
								  <td>Transaction Ref.:</td>
								  <td style="color:#ffc107;" id="ref"><?=$reference?></td>
								  <td>
									<i title="Click to copy ref." style="cursor:pointer;" onclick="copyToClipboard('#ref')" class="fa fa-copy"></i>
								  </td>
								</tr>
								<tr>
								  <td colspan="3"><button type="button" class="btn btn-warning">Download</button></td>
								</tr>
							  </tbody>
							</table>
						</div>
						<span align="center">You will be contacted shortly...<span>
						<br />
						<p align= "center">Click the button below to go to our homepage and explore more exciting contents. </p>
						<div align= "center"><a href="index.php" class="btn regular-text">GO HOME </a></div>
                    </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/lga.min.js"></script>
	<script>
	
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}
</script>
</body>
</html>