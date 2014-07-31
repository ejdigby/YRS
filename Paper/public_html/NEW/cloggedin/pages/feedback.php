<?php
	
	include '../../assets/conf.php';
	$pagename = "Feedback";
	$dirnm = 3;
?>
<html>
<head>
<?php include '../../assets/head.php'; ?>
<body>
	<?php include '../../assets/header.php'; ?>
	<div id="wrap">
		<div id="content">
			<h1>Were you satisfied with your delivery?</h1>
			<br>
			<form method="post" action="faction.php">
				<div id="Answer"><input type="radio" name="yesno" value="yes" class="Radio">Yes</div>
				<div id="Answer"><input type="radio" name="yesno" value="no" class="Radio">No</div>
			<br>
			<h1>Comment (optional):</h1>
			<br>
				<div id="Rating">
					<input type="radio" name="rating" value="0" class="Radio">0
					<input type="radio" name="rating" value="1" class="Radio">1
					<input type="radio" name="rating" value="2" class="Radio">2
					<input type="radio" name="rating" value="3" class="Radio">3
					<input type="radio" name="rating" value="4" class="Radio">4
					<input type="radio" name="rating" value="5" class="Radio">5
					<input type="radio" name="rating" value="6" class="Radio">6
					<input type="radio" name="rating" value="7" class="Radio">7
					<input type="radio" name="rating" value="8" class="Radio">8
					<input type="radio" name="rating" value="9" class="Radio">9
					<input type="radio" name="rating" value="10" class="Radio">10
				</div>
			<br>
			<h1>Comment (optional):</h1>
			<br>
				<div id="Comment">
					<input type="text" name="comment" class="CommentBox">
				</div>
			<input type="submit" value="Submit" class="Button">
			</form>
		</div>
	</div>
</body>
</html>

