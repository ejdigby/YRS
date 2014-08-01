<?php
include '../../assets/sqlconf.php';
include '../../assets/error.php';
$nor = 0;
$olduid = 0;
$result = mysqli_query($con, "SELECT * FROM Users");
while($row = mysqli_fetch_array($result)) {
	if ($row['uid'] > $nor) {
		$olduid ++;
	}
}

$newuid = $olduid + 1;

$sql="INSERT INTO Users (Uname, Pword, uid, First_Name, Last_Name, Ulevel, PCode, HNum, Street, Round, Paper, Notes)
VALUES
('$_POST[uname]', '$_POST[pword]', $newuid,'$_POST[fname]','$_POST[lname]','$_POST[ulevel]', '$_POST[pcode]', '$_POST[hnumb]', '$_POST[street]', '$_POST[round]', '$_POST[paper]', '$_POST[notes]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }
echo "1 record added";

header('Location: /');   	
?>