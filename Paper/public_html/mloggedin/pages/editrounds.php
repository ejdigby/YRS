<?php
		include '../../assets/conf.php';
		include '../../assets/sqlconf.php';
		include '../../assets/error.php';
		$pagename = "Edit Rounds";
		$dirnm = 3;
		$i = 1;
		$ii = 0;
		$nor = 0;
		$locations = [];
		$waypoints= '';
		$result = mysqli_query($con, "SELECT * FROM Users WHERE Round = 1 ORDER BY uid ASC");
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
			<table>
				<tr>
					<th> Number</th>
					<th>Post Code</th>
					<th>Paper</th>
					<th>Notes</th>
				</tr>
				<h1 id="round">Round 1</h1>
				<?php 
				$rownmb = 1;
				$postcodes = [];
					while($row = mysqli_fetch_array($result)) {
						$nor ++;
						echo "<tr>";
						echo "<td>", $rownmb, "</td>";
						echo "<td>", $row['PCode'] ,"</td>";
						echo "<td>", $row['Paper'] ,"</td>";
						echo "<td>", $row['Notes'] ,"</td>";
						array_push($locations, $row['PCode']);
						array_push($postcodes, $row['PCode']);
						echo "</tr>";
						$rownmb ++;
					}
					$origin = str_replace(' ','',array_shift($locations));
					$destination = str_replace(' ','',array_pop($locations));

					foreach ($locations as $value) {
						$waypoints .= $value;
						$waypoints .= "|";
					}

					$waypoints = str_replace(' ', '', $waypoints);
					$waypoints = rtrim($waypoints,"|");
					// print_r($postcodes);
					// print_r($postcodes[0]);
					// print_r($postcodes[1]);
					// print_r($postcodes[2]);
					// print_r($postcodes[3]);

				?>
			</table>
			<form id="delete" method="post" action="deleteroundrow.php">
				Delete Row: <select name="row">
				<?php 
					while ($i <= $nor)  {
						 echo  '<option  value=', $postcodes[$ii] ,'>', $i, '</option>';
						 $ii = $i - 1;
						 print_r($ii);
						 echo ($postcodes[$ii]);
						 $i ++;
						 $ii ++;
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