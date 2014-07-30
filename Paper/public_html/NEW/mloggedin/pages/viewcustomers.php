<?php
	
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "View Customers";
	$dirnm = 3;

	/*$result = mysqli_query($con, "SELECT * FROM Customers");

		while($row = mysqli_fetch_array($result)) {

				echo "<td>", $row['Uname'], "</td>";
				echo "<td>", $row['House_Number'], "</td>";
				echo "<td>", $row['Street'], "</td>";
				echo "<td>", $row['Post_Code'], "</td>";
				echo "<td>", $row['Paper'] ,"</td>";
				echo "<td>", $row['Round'] ,"</td>";
				echo "<td>", $row['Notes'], "</td>";
		}*/
?>
<html>

<?php include '../../assets/head.php'; ?>

<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<table>
				<tr>
					<td>Name</td>
					<td>House Number </td>
					<td>Street</td>
					<td>Post Code </td>
					<td>Paper(s)</td>
					<td>Round</td>
					<td>Notes</td>
				</tr>
				
					<?php 
						$result = mysqli_query($con, "SELECT * FROM Customers");

						while($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>", $row['Uname'], "</td>";
								echo "<td>", $row['House_Number'], "</td>";
								echo "<td>", $row['Street'], "</td>";
								echo "<td>", $row['Post_Code'], "</td>";
								echo "<td>", $row['Paper'] ,"</td>";
								echo "<td>", $row['Round'] ,"</td>";
								echo "<td>", $row['Notes'], "</td>";
								echo "</tr>";
						}

					?>
				
			</table>
		</div>
	</div>
</body>
</html>