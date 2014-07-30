<?php
		include '../../assets/conf.php';
		include '../../assets/sqlconf.php';
		$pagename = "Edit Rounds";
		$dirnm = 3;

?>

<!DOCTYPE html>
<html>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<table>
				<tr>
					<th>Paperboys</th>
					<th>Adresses</th>
					<th>Papers</th>
					<th>Notes</th>
				</tr>
				
				<h1>Round 1</h1>
				
				<?php 
						$result = mysqli_query($con, "SELECT * FROM Customers");

						while($row = mysqli_fetch_array($result)) {
								echo "<tr>";
								echo "<td>", $row['Uname'], "</td>";
								echo "<td>", $row['House_Number'], " ", $row['Street'], " ", $row['Post_Code']. "</td>";
								echo "<td>", $row['Paper'] ,"</td>";
								echo "<td>", $row['Notes'], "</td>";
								echo "</tr>";
						}
						?>
				<!--
				<tr>
					<td>Ed Digby</td>
					<td>123 B street, A Town</td>
					<td>Independent</td>
					<td>Duck bites</td>
				</tr>

			

				<tr>
					<td></td>
					<td>123 A Street, A Town</td>
					<td>The Sun</td>
					<td>Dog bites</td>
				</tr>	-->
			</table>
		</div>
	</div>
</body>
</html>