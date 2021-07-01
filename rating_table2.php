<?php


session_start();
include ("includes/config.php");
if(!isset($_SESSION['loginstudent'])){
header('location:index.php');
}


$adm_no=$_SESSION['loginstudent'];

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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  
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
                  <h4 class="font-weight-bold mb-0">Student Dashboard</h4>
                </div>
                <div>

                </div>
              </div>
            </div>
          </div>



<!-- main content starts here -->
<div style="margin:auto;float:none" class="col-md-12"> <!-- This specifies the colum width -->
<center><div style="color:red">Evaluation Done Sucessfully!!</div></center><br>
<div  class="card">
  <center><div class="card-header">Selected Courses</div></center>

  <div class="card-body">
<table class="table table-bordered ">
  <tr>
    <td>#</td>
    <td>Course Code</td>
    <td>Course Title</td>
    <td>Lecturer</td>

    <td>Action</td>

  </tr>

<?php
$result67=mysqli_query($conn,"SELECT * FROM students_selected_courses where adm_no='$adm_no'");
$i=0;
while($row48=mysqli_fetch_array($result67)){

$i++



?>
<tr>
<td><?php echo $i ?></td>
<td><?php echo $row48['course_code'] ?></td>
<td>
  <?php
$coursescode=$row48['course_code'];
$result69=mysqli_query($conn,"SELECT * FROM courses where course_code='$coursescode'");
while($row49=mysqli_fetch_array($result69)){

echo $row49['course_title'];


}

  ?>

</td>

<td>

  <?php
$lecturercode=$row48['lecturer_name'];
$result691=mysqli_query($conn,"SELECT * FROM lecturer where unique_no='$lecturercode'");
while($row491=mysqli_fetch_array($result691)){

echo $row491['name'];


}

  ?>


</td>


<td>
<?php
$lecturercode=$row48['lecturer_name'];
$result79=mysqli_query($conn,"SELECT * FROM course_feedback where adm_no='$adm_no' AND lecturer='$lecturercode' AND course='$coursescode'");
$result80=mysqli_num_rows($result79);

if($result80>0){
  echo "<a href='#'>Evaluated</a>";
}else {

  ?>

  <a href="evaluate.php?lecturer=<?php echo $row48['lecturer_name'] ?>&&course=<?php echo $row48['course_code']?>">Evaluate</a>



</tr>
<?php }} ?>






</table>

</div>


</div></div>


























                          </div><br><br>

        <?php include ("includes/footer.php") ?>

      </div>

    </div>

  </div>


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
