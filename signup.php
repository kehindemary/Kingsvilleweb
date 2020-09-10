<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup Page</title>
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
                Student Signup Form
            </p>
        </div>
        <form method="POST" action="" class = "regular-text">
                    <label for="username">Username / Email</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="username" >
                    <i class="fas fa-user"></i>
                    </span>
                    </div>     
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your Username" required >
                    </div>
                    <label for="password">Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="password" >
                        <i class="fas fa-unlock"></i>
                        </span>
                        </div>     
                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your Password" >
                    </div>
                    <label for="confirmpassword">Confirm Password</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="confirmpassword" >
                        <i class="fas fa-unlock"></i>
                        </span>
                        </div>     
                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Enter your Password" >
                    </div>
                        <input type="Submit" value = "SIGNUP" class="btn regular-text d-flex justify-content-center" name="submit_btn" id="submit_btn">
                    </form>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/lga.min.js"></script>
</body>
</html>