<?php
include '../../assets/sqlconf.php';
include '../../assets/error.php';
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
  echo "Connected!!";
}

$sql="INSERT INTO Rounds (iNumber, PostCode, Roundnmb)
VALUES
('$_POST[number]','$_POST[postcode]','$_POST[roundnumber]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

header('Location: editrounds.php');   	
?>