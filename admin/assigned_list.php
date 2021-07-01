<?php

session_start();
include ("includes/config.php");
if(!isset($_SESSION['login'])){
header('location:index.php');
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

  <!-- endinject -->
  
  <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                  <h4 class="font-weight-bold mb-0">Lecturer and Courses</h4>
                </div>


</div>
</div>




<?php
$result=mysqli_query($conn,"SELECT   * FROM lecturer");

if(mysqli_num_rows($result)==0){

echo "No Records Found";

} else {

while ($rows=mysqli_fetch_array($result)){


 ?>
<div class="card ml-3 mb-3">

  <div class="card-header "><?php echo $rows['name'] ?></div>
  <div class="card-body">

<?Php $rows2= $rows['unique_no'] ;

$result45=mysqli_query($conn,"SELECT * FROM lecturer_course where lecturer='$rows2'");

while($result46=mysqli_fetch_array($result45)){
$result47= $result46['course_code'];
$result48=mysqli_query($conn,"SELECT * FROM courses where course_code='$result47'");
while($result49=mysqli_fetch_array($result48)){
  echo $result49['course_title']."<br/>";
    }

}
?>
  </div>
</div>











<?php  }} ?>



<script src="assets/js/dataTables/jquery.dataTables.js"></script>
   <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
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
