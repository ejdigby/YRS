<?php
	
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "View Customers";
	$dirnm = 3;
	$nor = 0;
	$i = 1;

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
		<h1>Customers:</h1><br>
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
						$result = mysqli_query($con, "SELECT * FROM Users WHERE ULevel = 0 AND Round = 1");

						while($row = mysqli_fetch_array($result)) {
								$nor ++;
								echo "<tr>";
								echo "<td>", $row['Uname'], "</td>";
								echo "<td>", $row['HNum'], "</td>";
								echo "<td>", $row['Street'], "</td>";
								echo "<td>", $row['PCode'], "</td>";
								echo "<td>", $row['Paper'] ,"</td>";
								echo "<td>", $row['Round'] ,"</td>";
								echo "<td>", $row['Notes'], "</td>";
								echo "</tr>";
						}

					?>
				
			</table>
			<form id="delete" method="post" action="deletecustomerrow.php">
				Delete Row: <select name="row">
				<?php 
					while ($i <= $nor)  {
						 echo  '<option  value=', $i ,'>', $i, '</option>';
						 $i ++;
					}
				?>
				</select>
				<input type="submit" value="delete" class="delete">
			</form>
		</div>
	</div>
</body>
</html>