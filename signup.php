<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Signup</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<header>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav">
      <li class="nav-item">
      <a class="nav-link" href="#" style="margin-left:50px;font-weight:bold;font-size:20px">Lifestyle Store</a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
      <a class="nav-link" href="signup.php"><img src="signup-icon.png">&nbspSign up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php">
      <img src="login-icon.png">Login</a>
    </li>
  </ul>
</nav>
<br>

</header>

<div class="container">
  <div class="card bg-light text-dark">
    <div class="card-header" style="text-align:center;height:100px;padding:40px 0;font-size:20px;margin-top:30px">Create Account</div>
  </div>
<?php include 'common.php' ?>

<div class="card-body">
  <form method="post" action="signup_script.php">
  <div class="form-group">
   <div class="row">
      <div class="col-sm-6">
        <label for="first name">First Name:</label>
        <input type="text" class="form-control" id="first name" placeholder="Enter first name" name="fname">
       </div>
     <div class="col-sm-6">
  <label for="last name">Last Name:</label>
    <input type="text" class="form-control" id="last name" placeholder="Enter last name" name="lname">
    </div>
</div></div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="row">
<div class="col-sm-6">
  <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter Password" name="pwd">
    </div>
<div class="col-sm-6">
  <label for="pwd2">Confirm Password:</label>
    <input type="password" class="form-control" id="pwd2" placeholder="Confirm Password" name="pwd2">
    </div>
</div></div>
<a href="#">
    <button type="submit" class="btn btn-primary btn-block" style="margin:20px 0;">Create Account</button></a>
  </form>
<div class="card bg-light text-dark">
    <div class="card-footer" style="text-align:center;height:40px;padding:10px 0;font-size:12px;color:blue"><a href="login.php">Have an account? Go to Login</a>
</div>
  </div></div>

<footer class="foot" style="position:absolute"> <!---modified font-size and variant-->
<div class="container">
<center>
Copyright @Lifestyle Store.All rights reserved | Contact Us:+91 9000 00000</center>
</div>
</footer>

</body>
</html>
