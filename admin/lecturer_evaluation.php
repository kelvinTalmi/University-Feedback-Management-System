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
                  <h4 class="font-weight-bold mb-0">Lecturer Evaluation</h4>
                </div>


</div>
</div>
<table style="background-color:white" class="table table-bordered table-responsive" id="dataTables-example">

<thead  class="record">
    <td style="font-weight:bold">#</td>
  <td style="font-weight:bold">Lecturer Name</td>

    <td style="font-weight:bold">Unique Number</td>
      <td style="font-weight:bold">Course</td>
      <td style="font-weight:bold">Respondents</td>
    <td style="font-weight:bold">Total Score</td>
        <td style="font-weight:bold">Percentage</td>

      <td style="font-weight:bold">More Details</td>


    </thead>

<?php
$result=mysqli_query($conn,"SELECT distinct(lecturer),course,score FROM feedback group by lecturer order by sum(score) desc ");

if(mysqli_num_rows($result)==0){

echo "No Records Found";

} else {
$i=0;
while ($rows=mysqli_fetch_array($result)){

$i++;
 ?>

<tr>
  <td><?php echo $i ?> </td>
<td> <?php $namo= $rows['lecturer'];
$resultsm=mysqli_query($conn,"SELECT * FROM lecturer WHERE unique_no='$namo'");
$resultsm1=mysqli_fetch_array($resultsm);

echo $resultsm1['name'];



?></td>
<td> <?php echo  $rows['lecturer'] ?></td>
<td> <?php echo  $rows['course'] ?></td>
<td>
  <?php
  $course= $rows['course'];
  $points5=mysqli_query($conn,"SELECT distinct(adm_no) FROM feedback WHERE lecturer='$namo' AND course='$course'");
  $points6=mysqli_num_rows($points5);
echo $points6;
?>
</td>
<td> <?php

$resultscore=mysqli_query($conn,"SELECT SUM(score) AS totalscore FROM feedback WHERE lecturer='$namo' and course='$course'  ");
$resultscore1=mysqli_fetch_array($resultscore);

echo $resultscore1['totalscore'];




?></td>
<td>
  <?php

  $resultcore3=$resultscore1['totalscore'];
$percentage=mysqli_query($conn,"SELECT * FROM instructors_questions ");
$percentage2=mysqli_num_rows($percentage);
$percentage3=$percentage2 * 5;
$percentage4=($resultcore3/$percentage3)*100;

echo intval($percentage4).'%';

?>


</td>





<td><a href="detailed_analysis.php?unique_no=<?php echo $namo ?>&&course=<?php echo  $rows['course']?>&&name=<?php echo $resultsm1['name'] ?>">Detailed Analysis </td>


</tr>


<?php  }} ?>

</table>

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
