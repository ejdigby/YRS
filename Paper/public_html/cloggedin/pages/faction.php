<?php
print 'hello';
include '../../assets/sqlconf.php';
include '../../assets/error.php';
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
  echo "Connected!!";
}

$sql="INSERT INTO Feedback (Uname, DateAdded, Satisfaction, Rating, Comment)
VALUES
('$_COOKIE[username]', CURDATE(), '$_POST[yesno]','$_POST[rating]','$_POST[comment]')";
if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

header('Location: /');   	
?>