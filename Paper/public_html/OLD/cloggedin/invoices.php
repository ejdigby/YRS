<?php
	include '../../../sqlconf.php';
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/css/style.css">
	<title>Paper - Invoices</title>
</head>
<body>
	<header>
		<div id="pagename">
			<h1>Dashboard - Invoices</h1>
		</div>
		<div id="logout">
			<a class="logout"href="../logout.php"><span ><?php  echo $_COOKIE['username']; ?></span></a>
		</div>
	</header>
	<div id="wrap">
		<div id="content">
			<h1>Unpaid bills:</h1>
			<p>... - £?</p>
		</div>
	</div>
</body>
</html>