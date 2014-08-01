<?php
	
	include '../../assets/conf.php';
	include '../../assets/sqlconf.php';
	$pagename = "View Feedback";
	$dirnm = 3;
	$nor = 0;

	function calcservicerating($total, $numberofrows) {
		$finalrating =  $numberofrows / $total;
		$finalrating = $finalrating * 100;
		$finalrating = round($finalrating);
		$finalrating .= "%";
		return $finalrating;
	}

	function calcsatisfactionrating($yes, $numberofrows) {
		$finalsatisfactionrating =  $yes / $numberofrows;
		$finalsatisfactionrating = $finalsatisfactionrating * 100;
		$finalsatisfactionrating = round($finalsatisfactionrating);
		$finalsatisfactionrating .= "%";
		return $finalsatisfactionrating;
	}

?>
<html>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>

	<div id="wrap">
		<div id="content">
			<h1>Feedback</h1>
			<br>
			<table>
				<tr>
					<th>Name</th>
					<th>Date Added</th>
					<th>Satisfied?</th>
					<th>Rating</th>
					<th>Comment</th>
					
				</tr>
				<?php
					$result = mysqli_query($con, "SELECT * FROM Feedback");
					$totaltrating = 0;
					$satisfactionyes = 0;
					$satisfactionno = 0;
						while($row = mysqli_fetch_array($result)) {
								$nor ++;
								
								echo "<tr>";
								echo "<td>", $row['Uname'], "</td>";
								echo "<td>", $row['DateAdded'], "</td>";
								echo "<td>", $row['Satisfaction'], "</td>";
								echo "<td>", $row['Rating'], "</td>";
								echo "<td>", $row['Comment'] ,"</td>";
								echo "</tr>";
								$totaltrating = $totaltrating + $row['Rating'];

								if ($row['Satisfaction'] == "yes"){
									$satisfactionyes ++;
								}
						}
				?>
			</table>
			<br>
			<br>
			<h1>Satisfaction Rate:</h1>
			
			<?php echo calcsatisfactionrating($satisfactionyes, $nor); ?>
			<br>
			<h1>Service Rating:</h1>
			<?php echo calcservicerating($totaltrating, $nor); ?>
		</div>
	</div>
</body>
</html>