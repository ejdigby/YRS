<?php
	
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "Add Users";
	$dirnm = 3;
?>
<html>
<?php include '../../assets/head.php'; ?>

<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<div id="form">
				<h1>UserName:</h1>
				<form action="addaction.php" method="post">
					<input type="text" name="uname" id="uname" class="text">
				<br>
				<h1>Password:</h1>
			
					<input type="password" name="pword" id="pword" class="text">
				
				<br>
					<h1>First Name:</h1>
			
					<input type="text" name="fname" id="fname" class="text">
				
				<br>
					<h1>Last Name:</h1>
			
					<input type="text" name="lname" id="lname" class="text">
				
				<br>
					<h1>Level:</h1>
				<select name="paper">
				  <option value="0">Customer</option>
				  <option value="1">Paperboy</option>
				  <option value="2">Manager</option>
				</select>


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
				<h1>Round:</h1><br>
			
					<input type="text" name="round" id="round" class="text">
				
				<br>
				<h1>Paper:</h1>
				<select name="paper">
					<?php
					$result = mysqli_query($con, "SELECT * FROM Papers");
						while($row = mysqli_fetch_array($result)) {
						echo "<option value='",$row['Paper'],"'>", $row['Paper'], "</option>";
					}					
				?>
			</select>
			
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