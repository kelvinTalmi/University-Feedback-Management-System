<?php
session_start();
include("includes/config.php");
$_SESSION['loginstudent']=="";
session_unset();
session_destroy();

header('location:index.php')
?>
