<?php
include '../../assets/sqlconf.php';
include '../../assets/error.php';
$nor = 0;
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
  echo "Connected!!";
}
$result = mysqli_query($con, "SELECT * FROM Rounds");
while($row = mysqli_fetch_array($result)) {
	$nor ++;
	
}
$num = $nor + 1;
$sql="INSERT INTO Rounds (iNum, PostCode, Paper, Roundnmb, Notes)
VALUES
('$num','$_POST[postcode]','$_POST[paper]','$_POST[roundnumber]','$_POST[notes]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

header('Location: editrounds.php');   	
?>