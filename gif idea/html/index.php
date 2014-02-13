
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/script.js"></script>
	<script>
		$(document).ready(function() {
    		$("h2").mouseenter(function() {
    			$("h2").addClass("border");
    		});
    		$("h2").mouseleave(function() {
    			$("h2").removeClass();
    		});
		});
	</script>

</head>
<body>
    <h2>The test webpage for the practise project</h2>
    <form action="insert.php" method="post">
        Firstname: <input type="text" name="firstname">
        Lastname: <input type="text" name="lastname">
        Age: <input type="text" name="age">
        <input type="submit">
    </form>

	<h2>The test webpage for the practise project</h2>
	<form>
		<span style = "font-family:Helvetica;">Search:</span> <input type='text' name='name'></input>
	</form>
	<p>
		I am not entirely sure what I am meant to be putting here but right now it is only going to be this text since we can't do anything without a game plan. I also wanted to see what the font looked like too!
    </p>
    <div>Control Panel Concept 3000</div>

</body>
</html>