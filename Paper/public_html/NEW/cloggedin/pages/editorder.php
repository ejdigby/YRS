<?php
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "Edit My Order";
	$dirnm = 3;

	$result = mysqli_query($con, "SELECT * FROM Customers WHERE Uname = '$_COOKIE[username]'");
	$row = mysqli_fetch_array($result);



?>
<!DOCTYPE html>
<html>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
		<h1>Current Order:</h1>
		<br>
		<br>
		<h2>Address:</h2>
		<p><?php echo $row['Address']; ?></p>
		<br>
		<br>
		<h2>Post Code:</h2>
		<p>...</p>
		<br>
		<h2>Paper(s):</h2>
		<p>...</p>
		<br>
		<h2>Notes:</h2>
		<p>...</p>
		<br>
	</div>
</body>
</html>

