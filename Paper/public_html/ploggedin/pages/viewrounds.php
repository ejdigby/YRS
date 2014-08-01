<?php

	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "View Rounds";
	$dirnm = 3;
	$locations = [];
	$waypoints= '';
?>
<html>
	<?php include '../../assets/head.php'; ?>
	<body>
		<?php include '../../assets/header.php'; ?>
		<div id="wrap">
			<div id="content">
				<!-- SELECT ALL FROM Rounds WHERE $_COOKIE USername = Pboy -->

				<table >
				<tr>
					<!-- <th>Paperboys</th>
					<th>Adresses</th>
					<th>Papers</th>
					<th>Notes</th> -->
					<th> Number</th>
					<th>Post Code</th>
					<th>Paper</th>
					<th>Delivered?</th>
				</tr>
				
				<h1 id="round">Round 1</h1>
				
				<?php 				
					$nor = 0;
			$result = mysqli_query($con, "SELECT * FROM Users WHERE Round = 1  ORDER BY uid ASC");

						while($row = mysqli_fetch_array($result)) {
							$nor ++;
							echo "<tr>";
								echo "<td>", $row['uid'], "</td>";
								echo "<td>", $row['PCode'] ,"</td>";
								echo "<td>", $row['Paper'] ,"</td>";
								array_push($locations, $row['PCode']);
								echo '<td><form method="post" action="deliverpaper.php"><input type="submit"  value="delivered"></form></td>';
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

				?>
			</table>
			<p id="total"> House Total = <?php echo $nor; ?> </p>
			<iframe id="map" width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/directions?origin=<?php echo $origin;?>&destination=<?php echo $destination; ?>&waypoints=<?php echo $waypoints; ?>&key=AIzaSyAsUbhkNvNte24ag-hV9LPqLXvQARn3kVw
"></iframe>
			</div>
		</div>