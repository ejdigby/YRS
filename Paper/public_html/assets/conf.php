<?php
	// Include the sql credentials through the file sqlconf
	include 'sqlconf.php';

	// If there are no cookies set redirect to homepage where they can log in
	if(!isset($_COOKIE['username'])) {
		header('Location /');
	}
	if(!isset($_COOKIE['uid'])){
		header('Location: /');
	}
	
	//This start sessions for each person accessing the wesbite
	session_start();
		//Store variable from cookies
		$_SESSION['Username'] = $_COOKIE['username'];
		$_SESSION['Userid'] = $_COOKIE['uid'];

		// Store variables from sql table First and Last name
		$result = mysqli_query($con,"SELECT * FROM Users WHERE Uname = '$_SESSION[Username]';");
			while($row = mysqli_fetch_array($result)){
				$_SESSION['Firstname'] = $row['First_Name'];
				$_SESSION['Lastname'] = $row['Last_Name'];

		}
	// Close SQL
	mysqli_close($con);
?>