<?php session_start(); ?>
<?php include 'common.php' ?>
<?php
$po=$_GET["pro"];
$sqli="Delete FROM useritems WHERE productname='$po'";
if(mysqli_query($conn,$sqli))
{
header("Location:./cart.php");
}
else{
echo "Item can't be removed";
}?>