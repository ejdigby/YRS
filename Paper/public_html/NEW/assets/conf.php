<?php
	include 'sqlconf.php';

	if(!isset($_COOKIE['username'])) {
		header('Location /');
	}
	if(!isset($_COOKIE['uid'])){
		heaser('Location: /');
	}
	session_start();
		//Store variable from cookies
		$_SESSION['Username'] = $_COOKIE['username'];
		$_SESSION['Userid'] = $_COOKIE['uid'];

		// Store variables from sql table
		$result = mysqli_query($con,"SELECT * FROM Users WHERE Uname = '$_SESSION[Username]';");
			while($row = mysqli_fetch_array($result)){
				$_SESSION['Firstname'] = $row['First_Name'];
				$_SESSION['Lastname'] = $row['Last_Name'];
				$_SESSION['Email'] = $row['email'];
			}
	mysqli_close($con);
?>