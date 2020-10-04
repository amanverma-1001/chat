
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT firstname,lastname,email,password FROM users";
$result = mysqli_query($conn,  $sql);
$numch=mysqli_num_rows($result);
if ($numch) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "First: " . $row["firstname"]. " - Last Name: " . $row["lastnamename"]. " " . $row["email"]. "<br>password-".$row["password"];
  }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
