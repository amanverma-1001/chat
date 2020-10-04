<?php
session_start();
?>
<?php include 'common.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title>Index Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">

    <a class="navbar-brand" href="#">&nbsp &nbsp Lifestyle Store</a>
  
    <ul class="navbar-nav" style="font-style: normal; padding-left: 1100px;">
  
      <li class="nav-item">
        <a class="nav-link" href="signup.php"> <img src="signup-icon.png" height=30 width=30>Signup &nbsp &nbsp</a>
      </li>
  <li class="nav-item">
        <a class="nav-link" href="product.php"> <img src="signup-icon.png" height=30 width=30>product &nbsp &nbsp</a>
      </li>
      <li class="nav-item">
 <?php  
 if(isset($_SESSION["email"])) 
{?>
<a class="nav-link" href="logout.php"><img src="signout-icon2.png">Logout</a> ";
<?php }
else{ ?>
<a class="nav-link" href="login.php"><img src="signout-icon2.png">Login</a>";
<?php } ?>

      </li>
  
    </ul>
  
  </nav>

  <div id="banner-image" style="height: 700px;">

    <div class="container">
      
      <div id="banner-content">
<?php if(isset($_SESSION["email"])){ ?>

       <a class="btn btn-danger" href="Product.php">ShopNow</a>
<?php }else{ ?>
 <a class="btn btn-danger" href="Login.php">ShopNow</a>
  <?php  } ?>
      </div>

    </div>

  </div>

  <footer>

    <p><center>Copyright © Lifestyle Store. All Rights
      Reserved | Contact Us: +918002046457 </center></p>

  </footer>

</body>

</html>