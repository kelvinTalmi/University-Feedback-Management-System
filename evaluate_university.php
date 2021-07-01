<?php


session_start();
include ("includes/config.php");
if(!isset($_SESSION['loginstudent'])){
header('location:index.php');
}

$adm_no3=$_SESSION['loginstudent'];
$result6t=mysqli_query($conn,"SELECT * FROM university_feedback WHERE adm_no='$adm_no3'");
$result6tw=mysqli_num_rows($result6t);
if($result6tw>0){
  header('location:university.php');

}


if (isset($_POST['submit'])){

$question=$_POST['question'];
$adm_no=$_SESSION['loginstudent'];
$score=$_POST['score'];

$course=$_GET['course'];






foreach($score as $index => $score) {

mysqli_query($conn,"INSERT INTO university_feedback(adm_no,question,score)
VALUES  ('$adm_no','$question[$index]','$score')");



if(true){

header('location:university.php');
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
                  <h4 class="font-weight-bold mb-0">Evaluate Faculty</h4>
                </div>
                <div>

                </div>
              </div>
            </div>
          </div>



<!-- main content starts here -->
<div style="margin:auto;float:none" class="col-md-8"> <!-- This specifies the colum width -->
  <form method="post">

    <!-- Instructors Questions -->
  <center><h5>Questions</h5></center>
<?php
$result89=mysqli_query($conn,"SELECT * FROM  university_questions");
$i=0;
while ($rows50=mysqli_fetch_array($result89)){


$i++;


  ?>
<div  class="card">


  <div class="card-body">

<input hidden  name="question[<?php echo $rows50['id'] ?>]" value="<?php echo $rows50['question'] ?>" >

<?php echo $i ?>. <?php echo $rows50['question'] ?><br><br>

<input name="score[<?php echo $rows50['id'] ?>]" type="radio" value="<?php echo $rows50['excellent'] ?>" required> Excellent &nbsp;
<input name="score[<?php echo $rows50['id'] ?>]" type="radio" value="<?php echo $rows50['good'] ?>"  required> Good &nbsp;
<input name="score[<?php echo $rows50['id'] ?>]" type="radio" value="<?php echo $rows50['fair'] ?>"  required> Fair &nbsp;
<input name="score[<?php echo $rows50['id'] ?>]" type="radio" value="<?php echo $rows50['poor'] ?>" required> Poor &nbsp;
<input name="score[<?php echo $rows50['id'] ?>]" type="radio" value="<?php echo $rows50['very_poor'] ?>"  required> Very poor




</div></div>






<?php } ?>




                      </div>













<br><br>

<center><button name="submit" class="btn btn-primary"> Submit</button> </center><br>

</form>



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
