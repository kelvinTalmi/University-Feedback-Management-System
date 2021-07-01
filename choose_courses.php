<?php


session_start();
include ("includes/config.php");
if(!isset($_SESSION['loginstudent'])){
header('location:index.php');
}

$adm_no3=$_SESSION['loginstudent'];
$result6t=mysqli_query($conn,"SELECT * FROM students_selected_courses WHERE adm_no='$adm_no3'");
$result6tw=mysqli_num_rows($result6t);
if($result6tw>0){
  header('location:rating_table.php');

}

if (isset($_POST['submit'])){

$courses=$_POST['courses'];
$adm_no=$_SESSION['loginstudent'];
$lecturer_name=$_POST['lecturer_name'];


if($courses=="")
{
echo "<script>confirm('Please select a course') </script>";

}else{


foreach($courses as $index => $courses) {

mysqli_query($conn,"INSERT INTO students_selected_courses (adm_no,course_code,lecturer_name)
VALUES  ('$adm_no','$courses','$lecturer_name[$index]')");


if(true){

header('location:rating_table.php');
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
<div style="margin:auto;float:none" class="col-md-8"> <!-- This specifies the colum width -->

<div  class="card">
  <center><div class="card-header">Select Courses</div></center>

  <div class="card-body">

<table class="table table-bordered">
<tr>
  <td>#</td>
  <td></td>
<td>Course Code</td>
<td>Course Tile</td>
<td>Lecturer</td>

</tr>


      <?php

    $year=$_GET['year'];
    $semester=$_GET['semester'];
$result78=mysqli_query($conn,"SELECT * FROM lecturer_course WHERE year= $year AND semester= $semester");

$i=0;
while($rows=mysqli_fetch_array($result78)){

$i++;

    ?>
    <tr>
    <form method="post">
  <td><?php echo $i ?></td>
  <td><input name="courses[]" type="checkbox" value="<?php echo $rows['course_code'] ?>"> </td>
  <td><?php echo $rows['course_code'] ?></td>
  <td>
   <?php
   $rowsx= $rows['course_code'] ;
$result79=mysqli_query($conn,"SELECT * FROM courses WHERE course_code= '$rowsx'");

while($rowsx1=mysqli_fetch_array($result79)){

echo $rowsx1['course_title'];

}






   ?>



  </td>
  <td><?php $lec= $rows['lecturer'] ;
  $result563=mysqli_query($conn,"SELECT * FROM lecturer WHERE unique_no='$lec'");
  $result564=mysqli_fetch_array($result563);

  echo $result564['name'];




  ?>
  <input hidden value="<?php echo $rows['lecturer'] ?>" name="lecturer_name[]">



  </td>

  </tr>


<?php } ?>
</table>
<br>



<center><button name="submit" class="btn btn-sm btn-primary">Submit</button></center>

<form>






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
