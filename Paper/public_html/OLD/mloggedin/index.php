<?php
	
	// Include the sql configuration file. This has all the sql credentials
	include '../../sqlconf.php';

	// Check for cookies if they arent set send back to homepage
	if(!isset($_COOKIE['username'])) {
		header('Location /');
	}
	if(!isset($_COOKIE['uid'])){
		header('Location: /');
	}

	// Start session variables using the cookies
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
<!DOCTYPE html>
<!-- This will be the managers dashbaord -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Paper - Manager</title>
</head>
<body>
	<header>
		<div id="dashboard">
			<h1>Dashboard - Manager</h1>
		</div>
		<div id="logout">
			<!-- <a class="logout"href="../logout.php"><span > <?php /* echo $_SESSION['Username']; */?></span></a> -->
			<a class="logout"href="../logout.php"><span ><?php  echo $_SESSION['Username']; ?></span></a>
		</div>
	</header>
	<div id="wrap">
		<div id="content">
			<div id="row">
				<a href="addcustomer.html">
					<div id="box">
						<img src="images/plus.png">
						<p>Add Customer</p>
					</div>
				</a>
				<a href="viewcustomers.html">
					<div id="box">
						<img src="images/eye.png">
						<p>View Customers</p>
					</div>
				</a>
				<a href="rounds.html">
					<div id="box">
						<img src="images/edit.png">
						<p>Edit Rounds</p>
					</div>
				</a>
			</div>
			<div id="row1">
				<a href="manageboys.html">
					<div id="box">
						<img src="images/gear.png">
						<p>Manage Paper Boys</p>
					</div>
				</a>
				<a href="feedback.html">
					<div id="box">
						<img src="images/edit.png">
						<p>Manage Invoices</p>
					</div>
				</a>
				<a href="feedback.html">
					<div id="box">
						<img src="images/message.png">
						<p>View Feedback</p>
					</div>
				</a>
				
			</div>
		</div>
	</div>
</body>
</html>
