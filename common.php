<?php

$conn=mysqli_connect("localhost","root","","mydb");
if($conn)
echo "<br>you are connected";
else
die("<br>Err in connection".mysqli_connect_error());

?>