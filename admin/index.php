<?php
session_start();
include ("includes/config.php");

if(isset($_POST['submit'])){

$email=$_POST['email'];
$password=$_POST['password'];

$result=mysqli_query($conn,"SELECT password FROM admin where email='$email'");
$row=mysqli_fetch_array($result);

$dbpassword=$row['password'];

if(mysqli_num_rows($result)==0){

  echo "<script> alert('email not found in our database') </script>";
}else{

if($password==$dbpassword){

$_SESSION['login']=$_POST['email'];
header('location:dashboard.php');


}else {

echo "<script> alert('Wrong Password') </script>";

}



}

}


 ?>

<! DOTYPE>
<html>
<head>

<meta charset="UTF-8">
<meta name="description" content="feedback management System">
<meta name="keywords" content="fedback, students">
<meta name="author" content="Laurah Wambui">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<title>Feedback Management System</title>
</head>

<body>
 
<div class="container">
  <div style="float:none;margin:auto" class="col col-md-5">

<div style="margin-top:20px;" class="card">
<center>
<div class="card-header" ><h6 style="color:orange;font-weight:bold">Feedback Management System</h6> 
<h6>Admin Login</h6></div>
<div class="card-body">

<form  class="form-group" method="post">
<h5>Email</h5>
<input type="email" name="email" class="form-control">

<div style="margin-bottom:20px;">
<h5>Password</h5>
<input type="password" name="password" class="form-control">
</div>
<p><button name="submit" class="btn btn-success">Log In</button></p>
</center>
</div>
</form>
</div>
</div>
</div>




</body>



</html>
