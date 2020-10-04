<?php session_start(); ?>
<!Doctype html>
<html>
<body>

<?php include 'common.php' ?>
<p> You have logged out</p>
<?php
session_destroy();
?>
<a href="index.php">Click here to go back to index page</a>

</body>
</html>