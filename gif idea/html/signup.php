<?php include 'sql.php'; 
$sql="INSERT INTO Users (Uname, Pword, firstname, lastname, email, age)
VALUES
('$_POST[Uname]','$_POST[Pword]','$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[age]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

header('Location: thank-you.html');    
?>