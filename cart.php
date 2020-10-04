<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>

<header>
<?php include 'common.php' ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#" style="margin-left:50px;font-weight:bold;font-size:20px">Lifestyle Store</a>
    </li></ul>
    
  <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" href="cart.php"><img src="cart-icon.png">&nbspCart</a>
    </li>
<li class="nav-item">
      <a class="nav-link" href="contact.php"><img src="contact-icon2.png">&nbspContact</a>
    </li>
    
    <li class="nav-item">
<?php if(isset($_SESSION["email"])){ ?>
      <a class="nav-link" href="logout.php">
      <img src="signout-icon2.png">Logout</a>
<?php }else{ ?>
<a class="nav-link" href="login.php">
      <img src="signout-icon2.png">Login</a>
<?php } ?>  
    </li>
  </ul>
</nav>
<br>

</header>
<?php if(isset($_SESSION["email"])) { ?>

<div class="container" style="margin-top:60px">         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Item Number</th>
        <th>Item Name</th>
        <th>Price</th>
       <th> </th>           
      </tr>
    </thead>
    <tbody>
   
 <?php  
$sql="SELECT productname,price FROM useritems ORDER BY price";
$result=mysqli_query($conn,$sql);
$sum=0;
if(mysqli_num_rows($result)>0)
{
while($detail=mysqli_fetch_assoc($result))
{
 echo "<tr>";
        echo "<td></td>";
        echo "<td>".$detail["productname"]."</td>";
        echo "<td>".$detail["price"]."</td>";
    
      echo  "<td><a href='cart-remove.php?pro={$detail["productname"]}'>
 Remove</a></td></tr>"
?>
<?php
$sum=$sum+$detail["price"];
     
}}
else
{
echo "<br>0 results";
}
?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
<td></td>
      </tr>
      <tr>
        <td></td>
        <td>Total</td>
        <td><?php echo $sum; ?></td>
         <td>
<a href="success.php">
       <button type="submit" class="btn btn-primary" style="text-align:center" name="done">Confirm Order</button></a></form>
</td>
      </tr>
    </tbody>
  </table>
</div>
<?php } 
else{ ?>
<br><br>

<h1>No account login</h1>


<?php } ?>
<footer class="foot" style="position:absolute"> <!---modified font-size and variant-->
<div class="container">
<center>
Copyright @Lifestyle Store.All rights reserved | Contact Us:+91 9000 00000</center>
</div>
</footer>

</body>
</html>
