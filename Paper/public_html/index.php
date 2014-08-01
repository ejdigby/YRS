<?php

	include 'assets/error.php';
	
        if(isset($_COOKIE['username']) AND isset($_COOKIE['uid'])) {
        	if ($_COOKIE['ulvl'] == 0 ){
        		header('Location: /cloggedin/');
        	} else if ($_COOKIE['ulvl'] == 1) {
        		header('Location: /ploggedin/');
        	} else {
     			header('Location: /mloggedin/'); 
			}
		}
 	//include 'assets/conf.php';
	$pagename = "Dashboard";
	$dirnm = 1;
?>
<html>
<head>
<?php include 'assets/head.php'; ?>
<body>
	<header>
		<div id="pagename"><h1>Login</h1></div>
	</header>
	<div id="wrap">
		<div id="content">
			<div id="form">
			
			<form method="post" action="loginaction.php">
			<div id="Logo"><img src="Images/logo.png"></div>
			<br>
			<div id="inputs">
			<div id="Username">
				<h1 class="User/Pass">Username:</h1>
			</div><br>
				<input type="text" name="username" id="username" class="UserPass">
				
			<br>
			<div id="Password">
				<h1 class="User/Pass">Password:</h1>
			</div><br>
				<input type="password" name="password" id="password" class="UserPass">
				
			<input type="submit" value="Login" class="Button">
			</div>
			</form>
		</div>
		</div>
	</div>
</body>
</html>

