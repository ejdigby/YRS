<!-- This file contains the header source -->
<header>
		<div id="dashboard">
		<!-- Links back to the dashboard-->
			<a href="/"><h1>Dashboard</h1></a>
		</div>
		<div id="pagename">
			<!-- Prints pagename in the centre of the header -->
			<h1><?php echo $pagename; ?></h1>
		</div>
		<div id="logout">
				<!-- Links to the logout script. Shows username untill hovered over -->
				<a class="logout" href="/logout.php"><span ><?php  echo $_COOKIE['username']; ?></span></a>
		</div>
</header>