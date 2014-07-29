<?php
	
	include '../../assets/conf.php';
	$pagename = "Dashboard";
?>

		<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Paper - Where's My Paper</title>
</head>
<body>
	<?php include '../../assets/header.php'; ?>
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

