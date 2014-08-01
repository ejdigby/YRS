<?php
		include '../../assets/conf.php';
		include '../../assets/sqlconf.php';
	//	include '../../assets/error.php';
		$pagename = "Edit Rounds";
		$dirnm = 3;
		$i = 0;

		

					// }
			/*$result = mysqli_query($con, "SELECT * FROM Rounds");

						while($row = mysqli_fetch_array($result)) {
							echo "<tr>";
								echo "<td>", $row['iNumber'], "</td>";
								echo "<td>", $row['PostCode'] ,"</td>";
								echo "</tr>";}
		*/		
		?>

<!DOCTYPE html>
<html>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
		<form action="addround.php">
			<input type="submit" id="addround" name="addround" value="Add To Round">
		</form>
			<table >
				<tr>
					<!-- <th>Paperboys</th>
					<th>Adresses</th>
					<th>Papers</th>
					<th>Notes</th> -->
					<th> Number</th>
					<th>Post Code</th>
					<th>Paper Boy</th>
				</tr>
				
				<h1 id="round">Round 1</h1>
				
				<?php 
					$locations = [];
					$waypoints= '';
						// $result = mysqli_query($con, "SELECT * FROM Customers");

						// while($row = mysqli_fetch_array($result)) {
						// 		echo "<tr>";
						// 		echo "<td>", $row['Uname'], "</td>";
						// 		echo "<td>", $row['House_Number'], " ", $row['Street'], " ", $row['Post_Code']. "</td>";
						// 		echo "<td>", $row['Paper'] ,"</td>";
						// 		echo "<td>", $row['Notes'], "</td>";
						// 		echo "</tr>";
						// }
					$nor = 0;
			$result = mysqli_query($con, "SELECT * FROM Rounds ORDER BY iNumber ASC");

						while($row = mysqli_fetch_array($result)) {
							$nor ++;
							echo "<tr>";
								echo "<td>", $row['iNumber'], "</td>";
								echo "<td>", $row['PostCode'] ,"</td>";
								echo "<td>", $row['Pboy'] ,"</td>";
								array_push($locations, $row['PostCode']);
								echo "</tr>";}
							//print_r($locations);

						$origin = str_replace(' ','',array_shift($locations));
						$destination = str_replace(' ','',array_pop($locations));

						 foreach ($locations as $value) {
							$waypoints .= $value;
							$waypoints .= "|";

						}
						$waypoints = str_replace(' ', '', $waypoints);
						$waypoints = rtrim($waypoints,"|");
						// print_r($waypoints);
						// print_r("\n");
						// echo($origin);
						// echo($destination);						?>
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
			<form id="delete" method="post" action="deleterow.php">
				Delete Row: <select name="row">
				
				<?php while ($i <= $nor)  {
					 echo  '<option  value=', $i ,'>', $i, '</option>';
					 $i ++;
				}
			?>
			</select>
			<input type="submit" value="delete" class="delete">
			</form>
		</div>
		
		<iframe id="map" width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=<?php echo $origin;?>&destination=<?php echo $destination; ?>&waypoints=<?php echo $waypoints; ?>&key=AIzaSyAsUbhkNvNte24ag-hV9LPqLXvQARn3kVw
"></iframe>
	</div>
</body>
</html>