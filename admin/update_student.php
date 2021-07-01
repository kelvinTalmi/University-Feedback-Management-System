<?php
$update=$_GET['id'];

session_start();
include ("includes/config.php");
if(!isset($_SESSION['login'])){
header('location:index.php');
}

if (isset($_POST['submit'])){

$update=$_GET['id'];
$name=$_POST['name'];
$adm_no=$_POST['adm_no'];
$email=$_POST['email'];
$phone_number=$_POST['phone_number'];


if($name==""||$adm_no==""||$email==""||$phone_number=="")
{
echo "<script>alert('Some fields are empty') </script>";

}else{

$result=mysqli_query($conn,"UPDATE users set name='$name',adm_no='$adm_no',email='$email',phone_number='$phone_number' where id=$update" );

if($result){

echo "<script>alert('Student Updated Successfully')</script>";
}else{

echo "<script>alert('An error occured')</script>";

}

}


}


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FeedBack Management System</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.2/bootstrap-table.min.css" integrity="sha512-Ok8cRZATfQ1eP0n90TyzhngMiBwgTv/H9CGpqoqHNHfecTORN9ExMo6rxcQSowCX9i1rpz+JVvFJD+IBmHJkyw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.18.2/bootstrap-table.min.js" integrity="sha512-ffrlJUspXYOW6r1y8tWOJHIE6yRUsbq6ESHxcUNU9NU9GWDZ+sS9zlb5SvKqeMEw8XSJXyDLz59PZFIqHHpJBQ==" crossorigin="anonymous"></script>
  <!-- endinject -->
  


  <script>
  function checkAvailability() {
  $("#loaderIcon").show();
  jQuery.ajax({
  url: "check_email5.php",
  data:'emailid='+$("#emailid").val(),
  type: "POST",
  success:function(data){
  $("#user-availability-status").html(data);
  $("#loaderIcon").hide();
  },
  error:function (){}
  });
  }
  </script>



</head>
<body>


<?php include ("includes/header.php") ?>


    <!-- SIDEBAR -->

<?php include ("includes/sidebar.php") ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Update students</h4>
                </div>


</div>
</div>

<div style="float:none;margin:auto" class="col col-md-4">
<div  class="card">
<center><div class="card-header">Update Students</div></center>
<div class="card-body">
<form class="form-group" method="post">


<?php
$update=$_GET['id'];

$result3=mysqli_query($conn,"SELECT *FROM users where id=$update");

while($rows2=mysqli_fetch_array($result3)){




?>







  <label>Full name</label>
<input type="text"  name="name"  value="<?php echo $rows2['name']  ?>" class="form-control" required ><br>

<label>Adm No</label>
<input type="text"  value="<?php echo $rows2['adm_no']  ?>" name="adm_no" class="form-control" required><br>

<label>Email</label>
<input type="email"  name="email" id="emailid" value="<?php echo $rows2['email'] ?>"class="form-control" onchange="checkAvailability()" required >

<label>Phone number</label>
<input type="number"  value="<?php echo $rows2['phone_number']?>" name="phone_number" class="form-control" required>  
 
  
<br>



<center><button class="btn btn-success" id="submit" name="submit">Update</button></center>
<?php } ?>
</form>


</div>

</div>
</div>


 <script src="assets/js/jquery-1.10.2.js"></script>
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
