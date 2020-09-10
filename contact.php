<?php
    include 'includes/header.php';
    
    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        //send email 
                        
        $mail->Subject = "Conact Form | Kingsville School Website";
        $emailAddress = filter_var('admin@kingsvilleschools.com.ng', FILTER_SANITIZE_EMAIL);
        $mail->AddAddress("$emailAddress", "Kingsville School, Abuja");
        $message = '<html> <body bgcolor="#34495E" style="margin: 0; padding: 0;" yahoo="fix">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content">
                <tr><td style="padding: 15px 10px 15px 10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr></tr></table></td></tr>
                <tr><td align="center" bgcolor="#0073AA" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;"> <img src="https://kingsvilleschools.com.ng/img/logo.png" height="62" style="display:block;" />Kingsville School Contact Form</td></tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 40px 20px 40px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 30px; border-bottom: 1px solid #f6f6f6;">
                       <b>Fullname:</b> '.$name.'<br/>
                       <b>Phone No.:</b> '.$phone.'<br/>
                       <b>Email:</b> '.$email.'<br/>
                       <b>Message:</b> '.$message.'<br/>
                    </td>
                </tr>
                <tr><td align="center" bgcolor="#f9f9f9" style="padding: 30px 20px 30px 20px; font-family: Arial, sans-serif;"><table bgcolor="#0073AA" border="0" cellspacing="0" cellpadding="0" class="buttonwrapper"><tr><td align="center" height="50" style=" padding: 0 25px 0 25px; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold;" class="button"> <a href="https://kingsvilleschools.com.ng" style="color: #ffffff; text-align: center; text-decoration: none;">Get Started</a></td></tr></table></td></tr>
                
                <tr><td style="padding: 15px 10px 15px 10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">2019 &copy; <a href="https://kingsvilleschools.com.ng" style="color: #0073AA;">Kingsville School, Abuja</a></td></tr></table></td></tr>
            </table>
        </body>
    </html>';
    
        $mail->Body = $message;
        $mail->Send();
        
        $mail->Subject = "Conact Form | Kingsville School Website";
        $emailAddress = filter_var($email, FILTER_SANITIZE_EMAIL);
        $mail->AddAddress("$emailAddress", "Kingsville School");
        $message = '<html> <body bgcolor="#34495E" style="margin: 0; padding: 0;" yahoo="fix">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; width: 100%; max-width: 600px;" class="content">
                <tr><td style="padding: 15px 10px 15px 10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%"> <tr></tr></table></td></tr>
                <tr><td align="center" bgcolor="#0073AA" style="padding: 20px 20px 20px 20px; color: #ffffff; font-family: Arial, sans-serif; font-size: 36px; font-weight: bold;"> <img src="logo.png" height="62" style="display:block;" />Kingsville School</td></tr>
                <tr>
                    <td align="center" bgcolor="#ffffff" style="padding: 40px 20px 40px 20px; color: #555555; font-family: Arial, sans-serif; font-size: 20px; line-height: 30px; border-bottom: 1px solid #f6f6f6;">
                       <b>Dear '.$name.'</b><br/>
                       Thank you for contacting Kingsville School, Abuja. <br/>
                       Our team will reach out to you shortly.<br/>
                       Regards, <br/>
                       Kingsville School Team
                    </td>
                </tr>
                <tr><td align="center" bgcolor="#f9f9f9" style="padding: 30px 20px 30px 20px; font-family: Arial, sans-serif;"><table bgcolor="#0073AA" border="0" cellspacing="0" cellpadding="0" class="buttonwrapper"><tr><td align="center" height="50" style=" padding: 0 25px 0 25px; font-family: Arial, sans-serif; font-size: 16px; font-weight: bold;" class="button"> <a href="https://kingsvilleschools.com.ng" style="color: #ffffff; text-align: center; text-decoration: none;">Get Started</a></td></tr></table></td></tr>
                
                <tr><td style="padding: 15px 10px 15px 10px;"><table border="0" cellpadding="0" cellspacing="0" width="100%"><tr><td align="center" width="100%" style="color: #fff; font-family: Arial, sans-serif; font-size: 12px;">2019 &copy; <a href="https://kingsvilleschools.com.ng" style="color: #0073AA;">Kingsville School</a></td></tr></table></td></tr>
            </table>
        </body>
    </html>';
    
        $mail->Body = $message;
        $mail->Send();
    }
?>
        <!-- Inner Page Banner Area Start Here -->
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
        <!-- Inner Page Banner Area End Here -->
        <!-- Contact Us Page 1 Area Start Here -->
        <div class="contact-us-page1-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="contact-us-info1">
                            <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p><?php echo $cms['phone1']; ?> <br/>
                                    <?php echo $cms['phone2']; ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p><?php echo $cms['address']; ?></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    <p><?php echo $cms['email1']; ?></p>
                                </li>
                                <li>
                                    <h3>Follow Us</h3>
                                    <ul class="contact-social">
                                        <li><a href="<?php echo $cms['fblink']; ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $cms['twlink']; ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $cms['inlink']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="<?php echo $cms['ytlink']; ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <h2 class="title-default-left title-bar-high">Contact With Us</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="contact-form1">
                                <form id="contact-form" action="" method="post">
                                    <fieldset>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Name*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <input type="phone" placeholder="Phone Number*" class="form-control" name="phone" id="form-phone" data-error="Phone field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <textarea placeholder="Message*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                            <div class="form-group margin-bottom-none">
                                                <button type="submit" class="default-big-btn" name="submit">Send Message</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                            <div class='form-response'></div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="google-map-area">
                        <div id="googleMap" style="width:100%; height:395px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Us Page 1 Area End Here -->
<?php
    include 'includes/footer.php';
?>