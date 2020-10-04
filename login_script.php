<?php
session_start();
?>

<?php  include 'common.php' ?>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$email=$_POST['email'];
$passw=$_POST['pwd'];
$_SESSION["email"]=$email;
$sql="SELECT email,password FROM users WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result) >0)
{
$row=mysqli_fetch_assoc($result);
if($row['password']==$passw)
{
header ("Location:./Product.php");
}
else
{
echo "Wrong password";
header ("Location:./Login.php");
}}
else
{
header ("Location:./Signup.php");
}}
?>
