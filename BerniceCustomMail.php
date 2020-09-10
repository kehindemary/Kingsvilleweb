<?php 
//Mail settings
require 'PHPMailerAutoload.php';
require_once "class.phpmailer.php";
$mail = new PHPMailer();
$mail->IsSMTP(); // send via SMTP
$mail->Host = 'mail.kingsvilleschools.com.ng;kingsvilleschools.com.ng';
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "admin@kingsvilleschools.com.ng"; // Enter your SMTP username
$mail->Password = "admin@bc123"; // SMTP password'
$mail->SMTPSecure = 'ssl'; 
$mail->SMTPDebug = false;
$mail->Port = 465;
$webmaster_email = "admin@kingsvilleschools.com.ng";//"customerservice@easyfill.com.ng"; //Add reply-to email address
$mail->From = $webmaster_email;
$mail->FromName = "Kingsville School, Abuja";
$mail->setFrom($webmaster_email, 'KVS');
$mail->AddReplyTo($webmaster_email,"KVS");
$mail->AddBCC("admin@kingsvilleschools.com.ng", "KVS");
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML
 
 //So to send mail at different point in your script, use include('BerniceCustomMail.php'); then were you have $mail('','',''); replace with 
 //This guys below
//$mail->Subject = "GoldHand (TEST)";
//$message = '<!DOCTYPE html>
//        <html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
//        </head><body style="margin:0px; font-family:Tahoma, Geneva, sans-serif; background:#EBEBEB;">
//        <div style="width:100%; height:4px; background:#EBEBEB;"></div>
//        <div style="margin:22px; background:#FFF;">
//        <div style="width:100%;"><div style="padding:24px; font-size:15px; color:#727272; width:40%; display:inline-block;"><span style="font-size:18px;">Alerts</span> <br/> Some Date </div><div style="display:inline-block; margin-left:2px;"><img style="float:right; margin-left:20px;" width=100 height=40 src="http://easyfill.elchabod.com/mBOOT/logo-invoice.png" /></div></div><br/>
 //       <img style="float:left; width:100%"  height=7 src="http://easyfill.elchabod.com/mBOOT/unnamed.gif" />
//        <div style="padding:5px; border-radius:7px; background:#00637F; font-size:19px; height:35px; color:#FFF;"><center style="padding-top:2px;"> EasyFill Reminder</center></div>
//        <div style="padding:24px; font-size:15px;">Dear Bernice Test,<br /><br /> '.$msgn.' </b> <br /><br />Sincerely,<br /><br />www.EasyFill.com.ng</div>   
//        </div>
//        <div style="width:100%; height:4px; background:#EBEBEB; bottom:0px;"></div>
//        </body></html>';

//$mail->Body = $message;  
          
//$mail->Send();
?>