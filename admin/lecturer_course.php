<?php

session_start();
include ("includes/config.php");
if(!isset($_SESSION['login'])){
header('location:index.php');
}

if (isset($_POST['submit'])){

$lecturer=$_POST['lecturer'];
$courses=$_POST['courses'];


if($lecturer==""||$courses=="")
{
echo "<script>confirm('Some fields are empty') </script>";

}else{

foreach($courses as $courses){
  $year=$courses[-2];
  $semester=$courses[-1];
  $courses2=substr($courses,0,-2);

mysqli_query($conn,"INSERT INTO lecturer_course (lecturer,course_code,year,semester) VALUES  ('$lecturer','$courses2','$year','$semester')");

if(true){

header('location:assigned_list.php');
}else{

echo "<script>alert('An error occured')</script>";

}

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
  url: "check_email2.php",
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
                  <h4 class="font-weight-bold mb-0">Assign Courses</h4>
                </div>


</div>
</div>

<div style="float:none;margin:auto" class="col col-md-4">
<div  class="card">
<center><div class="card-header">Assign Courses</div></center>
<div class="card-body">
<form class="form-group" method="post">

<label>Lecturer</label>
<select name="lecturer" class="form-control" required>
  <option value="">Select Lecturer </option>
  <?php
$result1=mysqli_query($conn,"SELECT * FROM lecturer");



while ($row1=mysqli_fetch_array($result1)){

?>

 <option  value='<?php echo $row1['unique_no'] ?>'><?php echo $row1['name'] ?> </option>

<?php }?>

</select>

<br>



<label>Courses</label>
<select multiple name="courses[]" class="form-control" required>

  <?php
$result1=mysqli_query($conn,"SELECT * FROM courses");



while ($row1=mysqli_fetch_array($result1)){

?>

 <option  value="<?php echo $row1['course_code'];echo $row1['year_of_study'];echo $row1['semester']?>"><?php echo $row1['course_title'] ?> </option>

<?php }?>

</select>

<br>




























<!--<input style="display:none" type="number" value=<?php echo rand ( 1000 , 9999 );  ?>  name ="password" class="form-control" required><br>-->


<center><button class="btn btn-success" id="submit" name="submit">Assign</button></center>

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
