<?php
session_start();
?>
<?php include 'common.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="mystyle.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="container">
 <div class="card bg-light text-dark">
    <div class="card-header"><a href="index.php">Home</a>
         <p  style="display:inline">/</p>
<a href="contact.php">Contact</a></div>
       </div>
<div class="card-body">
  <form action="/action_page.php">
<h2 style="font-weight:block">Contact Details</h2>
<div style="font-size:small">
<p style="margin-top:12px">3481 MelRose Place<br>Beverly Hills CA 90210</p>
<p>p:(123)456-7890</p>
<p>E:name@example.com</p>
<p>H:Monday-Friday: 9:00 AM to 5:00 PM</p>
</div>
<h2 style="margin-top:25px;font-weight:block">Send us a Message</h2>
 <div class="form-group">
      <label for="email">Full Name:</label>
      <input type="name" class="form-control" id="name" placeholder="" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Phone Number:</label>
      <input type="number" class="form-control" id="num" placeholder="" name="number">
</div>
 <div class="form-group">
      <label for="email">Email Address:</label>
      <input type="email" class="form-control" id="email" placeholder="" name="email">
<div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="7" id="comment" name="text"></textarea>
    </div>
<a href="#">
     <button type="submit" class="btn btn-primary">Send Message</button>
</a>
  </form>
    </div></div></div>
   
<footer class="foot"> <!---modified font-size and variant-->
<div class="container">
<center>
Copyright @Lifestyle Store.All rights reserved | Contact Us:+91 9000 00000</center>
</div>
</footer>

</body>
</html>
