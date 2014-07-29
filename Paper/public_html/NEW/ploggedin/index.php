<?php
	
	include '/assets/conf.php';
	$pagename = "Dashboard";
?>
<!DOCTYPE html>
<!-- This will be the managers dashbaord -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Paper - Manager</title>
</head>
<body>
	
	<?php include '../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<div id="row">
				<a href="addcustomer.html">
					<div id="box">
						<img src="images/eye.png">
						<p>View My Rounds</p>
					</div>
				</a>
				<a href="viewcustomers.html">
					<div id="box">
						<img src="images/question.png">
						<p>Time Off?</p>
					</div>
				</a>
		<!--		<a href="rounds.html">
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
						<img src="images/message.png">
						<p>Feedback</p> 
					</div>
				</a>
			</div>
		</div>
	</div>
</body>
</html>
