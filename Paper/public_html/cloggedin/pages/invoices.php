<?php
	
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	include '../../assets/error.php';
	$pagename = "Invoices";
	$dirnm = 3;

	function calcbill($numberofpapers, $priceperpaper) {
		$finalbill = $numberofpapers * $priceperpaper;
		return $finalbill;
	}
?>
<html>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<h1>Unpaid bills:</h1>
			<?php
				$result = mysqli_query($con, "SELECT * FROM Users Where Uname = '$_COOKIE[username]'");
				$row = mysqli_fetch_array($result);
			
				$PaperName = $row['Paper'];
				$NOPapers = $row['NOPapers'];



				$result = mysqli_query($con, "SELECT * FROM Papers WHERE Paper = '$PaperName'");
				$row = mysqli_fetch_array($result);

				echo "Price per paper = ", $row['Price']; 
				echo "<br>";

				$ppp = $row['Price'];
				echo $NOPapers, " X ", $PaperName, ":";
			
			?>



			<h2><?php echo "£", calcbill($NOPapers, $ppp); ?></h2>
		</div>
	</div>
</body>
</html>