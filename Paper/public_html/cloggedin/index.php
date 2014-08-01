<?php
		
	include '/assets/conf.php';
	// Set the page name and directory number for use in head.php and header.php
	$pagename = "Customer Dashboard ";
	$dirnm = 2;

	// If cookies arent set 
	if(!isset($_COOKIE['username'])) {
		header('Location /');
	}
	if(!isset($_COOKIE['uid'])){
		header('Location: /');
	}
		if($_COOKIE['ulvl'] != 0){
		header('Location: /');
	}
?>
<html>
	<?php include '../assets/head.php'; ?>
	<body>
		<?php include '../assets/header.php'; ?>
		<div id="wrap">
			<div id="content">
				<div id="row">
					
					<a href="pages/editorder.php">
					<div id="box">
						<img src="images/edit.png">
						<p>Edit My Order</p>
					</div></a>

					<a href="pages/where.php">
					<div id="box" class="right">
						<img src="images/question.png">
						<p>Where's My Paper?</p>
					</div></a>

				</div>
				<div id="row1">
					<a href="pages/invoices.php">
					<div id="box">
						<img src="images/invoice.png">
						<p>Invoices</p>
					</div></a>

					<a href="pages/feedback.php">
					<div id="box" class="right">
						<img src="images/message.png">
						<p>Feedback</p>
					</div></a>

				</div>
			</div> 
		</div>
	</body>
</html>
