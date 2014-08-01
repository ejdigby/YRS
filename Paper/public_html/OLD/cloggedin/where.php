<?php
	include '../../../sqlconf.php';
session_start();
		//Store variable from cookies
		$_SESSION['Username'] = $_COOKIE['username'];
		$_SESSION['Userid'] = $_COOKIE['uid'];

		?>

		<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
	<title>Paper - Where's My Paper</title>
</head>
<body>
	<header>
		<div id="dashboard">
	 <h1>Wheres Is My Paper</h1>
		</div>
		<div id="logout">
				<a class="logout" href="../logout.php"><span ><?php  echo $_COOKIE['username']; ?></span></a>
		</div>
	</header>
	<div id="wrap">
		<div id="content">
			<div id="distance">
				<h1>Your Paper is:</h1>
				<p>... kM away.</p>
			</div>
			<div id="map"></div>
		</div>
	</div>
</body>
</html>

