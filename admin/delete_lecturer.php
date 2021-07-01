<?php

include ("includes/config.php");
$delete=$_GET['id'];


$result=mysqli_query($conn,"DELETE FROM lecturer where id=$delete");

if($result)
{

header('location:lecturer_list.php');

}







?>