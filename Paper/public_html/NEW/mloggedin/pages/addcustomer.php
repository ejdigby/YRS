<?php
	
	include '../../assets/conf.php';
	$pagename = "Add Customer";
	$dirnm = 3;
?>
<html>
<?php include '../../assets/head.php'; ?>

<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<div id="form">
				<h1>Name:</h1>
				<form action="addaction.php" method="post">
					<input type="text" name="name" id="name" class="text">
				<br>
				<h1>Password:</h1>
			
					<input type="text" name="pword" id="pword" class="text">
				
				<br>
				<h1>Post Code:</h1>
			
					<input type="text" name="pcode" id="pcode" class="text">
				
				<br>
				<h1>House Number:</h1>
			
					<input type="text" name="hnumb" id="hnumb" class="text">
				
				<br>
				<h1>Street:</h1>
			
					<input type="text" name="street" id="street" class="text">
				
				<br>
				<h1>Round:</h1>
			
					<input type="text" name="round" id="round" class="text">
				
				<br>
				<h1>Paper(s):</h1>
			
					<input type="text" name="papers" id="papers" class="text">
			
				<br>
				<h1>Notes:</h1>
			
					<input type="text" name="notes" id="notes" class="text">
			
				<br>
				<input type="submit" value="Submit" class="button">
				</form>
			</div>
		</div>
	</div>
</body>
</html>