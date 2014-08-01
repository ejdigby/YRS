<?php
		include '../../assets/conf.php';
		include '../../assets/sqlconf.php';
	$pagename = "Add Round";
	$dirnm = 3;
// for number in range 0 - 10 insert into table number round, poost code


?>
<html>

<?php include '../../assets/head.php'; ?>

<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<form method="post" action="addroundaction.php">
			post code:<input type="text" name="postcode">
			Round: <select name="roundnumber">
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			</select>
			Paper:<select name="paper">
			<?php
				$result = mysqli_query($con, "SELECT * FROM Papers");
					while($row = mysqli_fetch_array($result)) {
					echo "<option value='",$row['Paper'],"'>", $row['Paper'], "</option>";
				}					
			?>
			</select>
			Notes:<input type="text" name="notes">
			<input	type="submit" value="Add Round">

			</form>
		</div>
	</div>
</body>
</html>