<?php
session_start();
include ("includes/config.php");

if(!isset($_SESSION['login'])){

	header('location:login.php');
}


?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Charity Management System">
<meta name="keywords" content="charity,help,aid,changa,smart">


<title>Smart Charity</title>


<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="stylesheet" href="css/swipebox.css">
<link rel="stylesheet" href="css/bootsrap-table.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>



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
	<div class="card-body">


</div>

</div>



</div>
</div>



<br>



















<!-- Pagination -->




<?php include("includes/footer.php"); ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>
<script src="js/jquery.swipebox.js"></script>

<script src="js/script.js"></script>
</body>
</html>
