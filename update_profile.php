
<?php
session_start();
include('includes/config.php');


if(isset($_POST['update'])){
   
$name=$_POST['name'];

$mobile_number=$_POST['phone_number'];
 
 $adm_no=$_POST['email'];
$email=$_SESSION['loginstudent'];


$update=mysqli_query($conn,"UPDATE users SET name='$name',phone_number='$mobile_number',email='$adm_no' WHERE adm_no='$email'");

if($update){
echo "<script> alert ('Profile Updated Succesffully')</script>";

}else{

  echo "<script> alert ('An error occurred')</script>";
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



</head>



<body>
<?php include("includes/header.php"); ?>


<div style="margin-top:100px;"></div>
<!-- main Body-->


<div style="float:none;margin:auto" class="col col-md-4">

</div>
<div style="float:none;margin:auto" class="col col-md-4">


<div class="card" style="margin-bottom:1.5em">
  <center><div class="card-header"><h5>Update Profile</h5></div></center>
  <?php
 $email=$_SESSION['loginstudent'];
$result=mysqli_query($conn,"SELECT * FROM users where adm_no='$email' ");
while($rows=mysqli_fetch_array($result)){

   ?>
  <div class="card-body">
    <form method="post">
    <label>Name</label>
      <input required name="name" value="<?php echo $rows['name'] ?>" class="form-control" type="text" >
      
  

      <label>Phone number</label>
        <input required name="phone_number" value="<?php echo $rows['phone_number'] ?>" class="form-control"  pattern="[0-9]{10}" type="tel" >
       
<label>Email</label>
          <input required name="email" value="<?php echo $rows['email'] ?>" class="form-control" type="email" >

          <br>
        <center>  <button name="update" class="btn btn-primary">Update</button><br><br>

         <center> <a href="change_password.php">Change Password</a></center>

     
      </center>
</form>

</div>

</div>

<?php } ?>

</div>



<br>




<!-- Pagination -->







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
