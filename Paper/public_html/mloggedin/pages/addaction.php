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

$sql="INSERT INTO Customers (Uname, Pword, Post_Code, House_Number, Street, Round, Paper, Notes)
VALUES
('$_POST[name]','$_POST[pword]','$_POST[pcode]','$_POST[hnumb]','$_POST[street]','$_POST[round]','$_POST[papers]','$_POST[notes]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

header('Location: /');   	
?>