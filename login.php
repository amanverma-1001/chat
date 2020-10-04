<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <title>Login</title>
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
    </li></ul>
    
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="signup.php"><img src="signup-icon.png">&nbspSign up</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php"><img src="login-icon.png">Login</a>
    </li>
  </ul>
</nav>
<br>
<div style="text-align:left;margin-top:10px">
  <?php include 'common.php' ?></div>
<div class="container">
 <div class="card bg-light text-dark">
    <div class="card-header" style="text-align:center;height:100px;padding:40px 0;font-size:20px;margin-top:30px">Login</div>
  </div>
  
<div class="card-body">
  <form method="post" action="login_script.php" target="_blank">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember password
      </label>
    </div>
<div class="row">
<div class="col-sm-4" style="color:blue;font-size:small">Forget Password?</div>
<div class="col-sm-8">
<a href="product.html">
    <button type="submit" class="btn btn-primary" style="float:right">Login</button></a>
</div>
</div>
  </form>
</div>
<div class="card bg-light text-dark">
<a href="signup.php">
    <div class="card-footer" style="text-align:center;height:40px;padding:10px 0;font-size:12px;color:blue">Need an accont?Sign Up!</div>
</a>  
</div>
 </div>
</div>


<footer class="foot" style="position:absolute"> <!---modified font-size and variant-->
<div class="container">
<center>
Copyright @Lifestyle Store.All rights reserved | Contact Us:+91 9000 00000</center>
</div>
</footer>

</body>
</html>
