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
				<form>
					<input type="text" name="name" class="text">
				</form>
				<br>
				<h1>Address:</h1>
				<form>
					<input type="text" name="Address" class="text">
				</form>
				<br>
				<h1>Paper(s):</h1>
				<form>
					<input type="text" name="Papers" class="text">
				</form>
				<br>
				<h1>Notes:</h1>
				<form>
					<input type="text" name="notes" class="text">
				</form>
				<br>
				<input type="button" value="Submit" class="button">
			</div>
		</div>
	</div>
</body>
</html>