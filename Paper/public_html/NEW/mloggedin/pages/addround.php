<?php
		include '../../assets/conf.php';
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
			number:<input	type="text" name="number">
			post code:<input type="text" name="postcode">
			<select name="roundnumber">
			  <option value="1">1</option>
			  <option value="2">2</option>
			  <option value="3">3</option>
			  <option value="4">4</option>
			</select>
			<input	type="submit" value="Add Round">

			</form>
		</div>
	</div>
</body>
</html>