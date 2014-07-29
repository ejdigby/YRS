<?php
	
	include '/assets/conf.php';
	$pagename = "Dashboard";
?>
<!DOCTYPE html>
<!-- This will be the managers dashbaord -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Paper - Customer</title>
</head>
<body>

	<?php include '/assets/header.php'; ?>

	<div id="wrap">
		<div id="content">
			<div id="row">
				<a href="pages/editorder.php">
					<div id="box">
						<img src="images/edit.png">
						<p>Edit My Order</p>
					</div>
				</a>
				<a href="pages/where.php">
					<div id="box" class="right">
						<img src="images/question.png">
						<p>Where's My Paper?</p>
					</div>
				</a>
			</div>
			<div id="row1">
				<a href="pages/invoices.php">
					<div id="box">
						<img src="images/invoice.png">
						<p>Invoices</p>
					</div>
				</a>
				<a href="pages/feedback.php">
					<div id="box" class="right">
						<img src="images/message.png">
						<p>Feedback</p>
					</div>
				</a>
			</div>
				<!--<a href="viewcustomers.html"><div id="box">
					<img src="images/eye.png">
					<p>View Customers</p>
				</div></a>
				<a href="rounds.html"><div id="box">
					<img src="images/edit.png">
					<p>Edit Rounds</p>
				</div></a>
			</div>
			<div id="row1">
				<a href="manageboys.html"><div id="box">
					<img src="images/gear.png">
					<p>Manage Paper Boys</p>
				</div></a>
				<a href="feedback.html"><div id="box">
					<img src="images/message.png">
					<p>Feedback</p>
				</div></a>-->
			</div> 
		</div>
	</div>
</body>
</html>
