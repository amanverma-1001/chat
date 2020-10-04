<?php
session_start();
?>
<?php include 'common.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<header>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top" >
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" style="margin-left:50px;font-weight:bold;font-size:20px">Lifestyle Store</a>
    </li></ul>
    
  <ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="index.php"><img src="signout-icon2.png">Home</a> ";
</li>
    <li class="nav-item">
      <a class="nav-link" href="cart.php"><img src="cart-icon.png">&nbspCart</a>
    </li>
<li class="nav-item">
      <a class="nav-link" href="contact.php"><img src="contact-icon2.png">&nbspContact</a>
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
</nav>
<br>

</header>

<div class="container">
  <div class="jumbotron" style="margin-top:80px">
    <h1>Welcome to Lifestyle Store!</h1>      
    <p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place</p>
  </div>     
</div>

<div class="row" style="margin-top:50px">
            <div class=" col-md-3 col-sm-6">
             <center>
                <img src="camera1.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Sony Alpha Full Frame</h5>
                    <p class="-text">Price Rs 84,999.00</p>
                      <a href="cartadd.php?product=Sony Alpha Full Frame&price=84999">
                    <button type="submit" class="btn btn-primary" style="text-align:center" name="Sony Alpha Full Frame">Add to cart</button>
                    </a>
                </div></center>
            </div>
              <div class=" col-md-3 col-sm-6">
             <center>
                <img src="camera2.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Panasonic Lumix G85M</h5>
                    <p class="-text">Price Rs 57,999.00</p>
                     <a href="cartadd.php?product=Panasonic Lumix G85M&price=57999">
                    <button type="submit" class="btn btn-primary" style="text-align:center" name="Panasonic Lumix G85M">Add to cart</button>
               </a>   
               </div></center>
                   </div>
            <div class=" col-md-3 col-sm-6">
             <center>
                <img src="camera3.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Canon EOS 3000D</h5>
                    <p class="-text">Price Rs 1,13,990.00</p>
                     <a href="cartadd.php?product=Canon EOS 3000D&price=113990">
                    <button type="submit" class="btn btn-primary" style="text-align:center" name="">Add to cart</button>
               </a>
             </div></center>
                </div>
            
     <div class=" col-md-3 col-sm-6">
             <center>
                <img src="camera4.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title"> Nikon P950</h5>
                    <p class="-text">Price Rs 58,999.00</p>
			<a href="cartadd.php?product=Nikon P950&price=58999">
                    <button type="submit" class="btn btn-primary" style="text-align:center" name="item4">Add to cart</button>
                </a>
          </div></center>
            </div>
</div>


<div class="row" style="margin-top:50px">
            <div class=" col-md-3 col-sm-6">
             <center>
                <img src="watches1.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Casio G790 G-Shock</h5>
                    <p class="-text">Price Rs20675</p>
                  <a href="cartadd.php?product=Casio G790 G-Shock&price=20675">
                    <button type="submit" class="btn btn-primary" style="text-align:center">Add to cart</button></a>
                </div></center>
            </div>
              <div class=" col-md-3 col-sm-6">
             <center>
                <img src="watches2.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Fastrack NG3089SL05</h5>
                    <p class="-text">Price Rs 2,495.00</p>
                   <a href="cartadd.php?product=Fastrack NG3089SL05&price=2495">
                   <button type="submit" class="btn btn-primary" style="text-align:center" name="item6">Add to cart</button>
               </a>
                </div></center>
                   </div>
            <div class=" col-md-3 col-sm-6">
             <center>
                <img src="watches3.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Titan 1730SL02 Analog Watch</h5>
                    <p class="-text">Price Rs 2499.00</p>
                    <a href="cartadd.php?product=Titan 1730SL02&price=2499">
                 <button type="submit" class="btn btn-primary" style="text-align:center" name="item7">Add to cart</button>
                </a>
             </div></center>
                </div>
            
     <div class=" col-md-3 col-sm-6">
             <center>
                <img src="watches4.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Rolex Wristwatches</h5>
                    <p class="-text">Price Rs 8,999.00</p>
                   <a href="cartadd.php?product=Rolex Wristwatches&price=8999">
                      <button type="submit" class="btn btn-primary" style="text-align:center" name="item8">Add to cart</button>
                </a>
               </div></center>
            </div>
</div>
            

<div class="row" style="margin-top:50px">
            <div class=" col-md-3 col-sm-6">
             <center>
                <img src="shirt1.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Levi's</h5>
                    <p class="-text">Price Rs 3,600.00</p>
                   <a href="cartadd.php?product=Levi's&price=3600">
                    <button type="submit" class="btn btn-primary" style="text-align:center" name="item9">Add to cart</button>
              </a>
                  </div></center>
             </div>
              <div class=" col-md-3 col-sm-6">
             <center>
                <img src="shirt2.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Verdo LIE</h5>
                    <p class="-text">Price Rs 499.00</p>
                  <a href="cartadd.php?product=Verdo LIE&price=499">
                      <button type="submit" class="btn btn-primary" style="text-align:center" name="item10">Add to cart</button>
                </a>
               </div></center>
                   </div>
            <div class=" col-md-3 col-sm-6">
             <center>
                <img src="shirt3.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">U.S. POLO Assn</h5>
                    <p class="-text">Price Rs 5,199.00</p>
                    <a href="cartadd.php?product=U.S. POLO Assn&price=5199">
                     <button type="submit" class="btn btn-primary" style="text-align:center" name="item11">Add to cart</button>
               </a>
              </div></center>
                </div>
            
     <div class=" col-md-3 col-sm-6">
             <center>
                <img src="shirt4.jpg" class="img-thumbnail" alt="...">
                <div class="-body">
                    <h5 class="-title">Tommy Hilfiger</h5>
                    <p class="-text">Price Rs 3,999.00</p>
                    <a href="cartadd.php?product=Tommy Hilfiger&price=3999">
                     <button type="submit" class="btn btn-primary" style="text-align:center" name="item12">Add to cart</button>
               </a> </div></center>
            </div>
</div>
            
  <footer class="foot" style="margin-top:30px"> <!---modified font-size and variant-->
<div class="container">
<center>
Copyright @Lifestyle Store.All rights reserved | Contact Us:+91 9000 00000</center>
</div>
</footer>
         
                    
</body>
</html>
