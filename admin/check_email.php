<?php
require_once("includes/config.php");
// code user email availablity
if(!empty($_POST["emailid"])) {
	$email= $_POST["emailid"];


	$sql =mysqli_query($conn,"SELECT adm_no FROM users WHERE adm_no='$email'");


if(mysqli_num_rows($sql) > 0)



{
echo "<span style='color:red'> Adm_no  already in the record .</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{

	echo "<span style='color:green'>Adm_no available for Registration .</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}
}



?>
