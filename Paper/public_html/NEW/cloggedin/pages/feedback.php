<?php
	
	include '../../assets/conf.php';
	$pagename = "Dashboard";
?>

<!DOCTYPE html>
<!-- This will be the managers dashbaord -->
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Paper - Feedback</title>
</head>
<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<h1>Were you satisfied with your delivery?</h1>
			<br>
			<form>
				<div id="Answer"><input type="radio" name="yes/no" value="yes" class="Radio">Yes</div>
				<div id="Answer"><input type="radio" name="yes/no" value="no" class="Radio">No</div>
			</form>
			<br>
			<h1>Comment (optional):</h1>
			<br>
			<form>
				<div id="Rating">
					<input type="radio" name="0" class="Radio">0
					<input type="radio" name="1" class="Radio">1
					<input type="radio" name="2" class="Radio">2
					<input type="radio" name="3" class="Radio">3
					<input type="radio" name="4" class="Radio">4
					<input type="radio" name="5" class="Radio">5
					<input type="radio" name="6" class="Radio">6
					<input type="radio" name="7" class="Radio">7
					<input type="radio" name="8" class="Radio">8
					<input type="radio" name="9" class="Radio">9
					<input type="radio" name="10" class="Radio">10
				</div>
			</form>
			<br>
			<h1>Comment (optional):</h1>
			<br>
			<form>
				<div id="Comment">
					<input type="text" name="Feedback" class="CommentBox">
				</div>
			</form>
			<input type="submit" value="Submit" class="Button">
		</div>
	</div>
</body>
</html>

