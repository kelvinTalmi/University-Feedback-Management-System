
<?php
session_start();
include('includes/config.php');


$email=$_SESSION['loginstudent'];

if(isset($_POST['update'])){

$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];


if($password!=$confirm_password){

	echo "<script>alert('Passwords do not match')</script>";
}else{





$update=mysqli_query($conn,"UPDATE users SET password='$password' where adm_no='$email'");

if($update){
	
echo "<script> alert ('Password Updated Succesffully')</script>";

}

}
}
    ?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">



 


<title>FMS</title>



 <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  


</head>



<body>
<?php include("includes/header.php"); ?>


<div style="margin-top:100px;"></div>
<!-- main Body-->


<div style="float:none;margin:auto" class="col col-md-4">

</div>
<div style="float:none;margin:auto" class="col col-md-4">



<div class="card" style="margin-bottom:1.5em">
	<center><div class="card-header"><h5>Update Password</h5></div></center>

	<div class="card-body">
		<form method="post" onSubmit="return validate()">

		<label>Enter New Password</label>
			<input name="password"  class="form-control" type="text" >
			<label>Confirm Password</label>
				<input  name="confirm_password" class="form-control" type="text" >
				<br>
				<center>	<button name="update"  class="btn btn-primary">Update</button> </center>
</form>

</div>

</div>



</div>
</div>



<br>




<!-- Pagination -->
 <script>
        function validate(){

            var a = document.getElementById("pass").value;
            var b = document.getElementById("confirm_pass").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>






  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
