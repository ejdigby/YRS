<?php
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "Edit My Order";
	$dirnm = 3;

	$result = mysqli_query($con, "SELECT * FROM Customers WHERE Uname = '$_COOKIE[username]'");
	while($row = mysqli_fetch_array($result)) {

		session_start();
		//Store variable from cookies
		$_SESSION['HN'] = $row['House_Number'];
		$_SESSION['S'] = $row['Street'];
		$_SESSION['PC'] = $row['Post_Code'];
		$_SESSION['P'] = $row['Paper'];
		$_SESSION['N'] = $row['Notes'];
		$_SESSION['Userid'] = $_COOKIE['uid'];
		$_SESSION['Name'] = $row['Uname'];
		}


?>
<!DOCTYPE html>
<html>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
		<div id="info">
		<h1>Current Order: <?php echo $_SESSION['Name']; ?></h1>
		<br>
		<br>
		<h2>Address:</h2><br>
		<p><?php echo $_SESSION['HN']; echo "<br>"; echo $_SESSION['S'];?></p>
		<br>
		<br>
		<h2>Post Code:</h2><br>
		<p><?php echo $_SESSION['PC']; ?></p>
		<br>
		<h2>Paper(s):</h2><br>
		<p><?php echo $_SESSION['P']; ?></p>
		<br>
		<h2>Notes:</h2><br>
		<p><?php echo $_SESSION['N']; ?></p>
		<br>
		</div>
		<div id="edit">
			<h1><a href="edit.php">Edit</a></h1>
		</div>
	</div>
</body>
</html>

