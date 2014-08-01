<?php

	include '../../assets/sqlconf.php';
	include '../../assets/error.php';
	$row = $_POST['row'];
	echo $_POST['row'];

	$sql="UPDATE Users SET Round = 0 WHERE PCode = '$_POST[row]'";

	
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 else {
echo "1 record added";
}

	//header('Location: editrounds.php')
?>