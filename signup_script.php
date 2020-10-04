<?php session_start();
?>


<?php include 'common.php' ?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$firstname=$_POST["fname"];
$lastname=$_POST["lname"];
$email=$_POST["email"];
$pass=$_POST["pwd"];
$pass2=$_POST["pwd2"];
$sql="SELECT email from users WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo "<br>Already have an account with this email";
}
else{
if($pass==$pass2)
{
$sql="INSERT INTO users (firstname,lastname,email,password)
       VALUES ('$firstname','$lastname','$email','$pass')";
if(mysqli_query($conn,$sql))
{
header("Location:./Login.php");
}
}
else{
echo "<br>confirm password and new password not same";
}}}
?>
