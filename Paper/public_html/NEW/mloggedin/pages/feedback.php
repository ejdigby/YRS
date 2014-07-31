<?php
	
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "View Feedback";
	$dirnm = 3;


?>
<html>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>

	<div id="wrap">
		<div id="content">
			<table>
				<tr>
					<th>Name</th>
					<th>Date Added</th>
					<th>Satisfyed?</th>
					<th>Rating</th>
					<th>Comment</th>
					
				</tr>
				<?php
					$result = mysqli_query($con, "SELECT * FROM Feedback");

						while($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>", $row['Uname'], "</td>";
								echo "<td>", $row['DateAdded'], "</td>";
								echo "<td>", $row['Satisfaction'], "</td>";
								echo "<td>", $row['Rating'], "</td>";
								echo "<td>", $row['Comment'] ,"</td>";
								echo "</tr>";
						}
				?>
			</table>
			<br>
			<br>
			<h1>Satisfaction Rate:</h1>
			<p>97%</p>
			<br>
			<h1>Service Rating:</h1>
			<p>9.5/10</p>
		</div>
	</div>
</body>
</html>