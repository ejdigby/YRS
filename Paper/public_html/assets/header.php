<header>
		<div id="dashboard">
			<a href="/"><h1>Dashboard</h1></a>
		</div>
		<div id="pagename">
			<h1><?php echo $pagename; ?></h1>
		</div>
		<div id="logout">
				<a class="logout" href="/logout.php"><span ><?php  echo $_COOKIE['username']; ?></span></a>
		</div>
</header>