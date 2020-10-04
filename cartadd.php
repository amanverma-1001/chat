<?php session_start(); ?>
<?php include 'common.php' ?>
<?php
$product=$_GET["product"];
$pri=$_GET["price"];
echo $pri;
echo $product;
$sql="SELECT productname,price FROM useritems WHERE productname='$product'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<br>Item already added";
header ("Location:./cart.php");
}
else{
 $sqlo="INSERT INTO useritems (productname,price)
        Values ('$product','$pri')"; 
$res=mysqli_query($conn,$sqlo);
if(mysqli_num_rows($res)>0)
{
echo "Item added to cart";
header ("Location:./cart.php");
}
}

?>