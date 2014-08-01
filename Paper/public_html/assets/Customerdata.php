<?php
	include 'sqlconf.php';
	include 'conf.php';

	`git pull`;
	error_reporting( E_ALL );
	ini_set( 'display_errors', 1 );
	ini_set( 'html_errors', 'On' );

	$username = $_COOKIE['username'];

$cresult = mysqli_query($con,"SELECT * FROM Customers WHERE Uname = '$username';");
    while($row = mysqli_fetch_array($result)) {
   $_SESSION['CUname'] = $row['Uname'];
     $_SESSION['CAddress'] = $row['Address'];
      $_SESSION['CPostcode'] = $row['Postcode'];
       $_SESSION['CRound'] = $row['Round'];
}
	echo $_SESSION['Uname'];

        mysqli_close($con);

?>