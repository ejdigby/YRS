<?php
		
	include '/assets/conf.php';
	$pagename = "Manager Dashboard";
	$dirnm = 2;
?>
<html>
<?php include '../assets/head.php'; ?>
<body>
	
	<?php include '../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<div id="row">
				<!-- Add Customers -->
				<a href="pages/addcustomer.php">
					<div id="box">
						<img src="images/plus.png">
						<p>Add Customer</p>
					</div>
				</a>
				<!-- View Customers -->
				<a href="pages/viewcustomers.php">
					<div id="box">
						<img src="images/eye.png">
						<p>View Customers</p>
					</div>
				</a>
				<!-- Edit Rounds -->
				<a href="pages/editrounds.php">
					<div id="box">
						<img src="images/edit.png">
						<p>Edit Rounds</p>
					</div>
				</a>
			</div>
			<div id="row1">
			<!-- Manage Paper Boys -->
				<a href="pages/pboys.php">
					<div id="box">
						<img src="images/gear.png">
						<p>Manage Paper Boys</p>
					</div>
				</a>
				<!-- Manage Invoices -->
				<a href="pages/invoices.php">
					<div id="box">
						<img src="images/edit.png">
						<p>Manage Invoices</p>
					</div>
				</a>
				<!-- View Feedback -->
				<a href="pages/feedback.php">
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
