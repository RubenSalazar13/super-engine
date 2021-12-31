<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Form</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
  <img class="wave" src="">
  <div class="container">
    <div class="img">
      <img src="">
    </div>
    <div class="login-content">

     <?php
     /*if ($msg != "") echo $msg . "<br><br>"; */
     ?>

      <form method="post" action="index.php" enctype="multipart/form-data">
        <img src="">
        <h2 class="title">Welcome</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Username</h5>
                    <input type="text" name="username" class="input">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Password</h5>
                    <input name="password" type="password" placeholder="" class="input">
                 </div>
              </div>
              <a href="#">Forgot Password?</a>
              <input type="reset" autocomplete="off" class="btn" value="reset">
              <input type="submit" class="btn" value="Login" name="login">
            </form>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
