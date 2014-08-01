<?php

	include '../../assets/sqlconf.php';
	include '../../assets/error.php';

	echo $_POST['row'];

	$sql="DELETE FROM Customers WHERE iNum = '$_POST[row]'";

	
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
 else {
echo "1 record added";
}

	header('Location: viewcustomers.php')
?>