<?php

	include '../../assets/sqlconf.php';
	include '../../assets/error.php';

	echo $_POST['row'];

	$sql="DELETE FROM Rounds WHERE iNumber = '$_POST[row]'";

	
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 else {
echo "1 record added";
}

	header('Location: editrounds.php')
?>