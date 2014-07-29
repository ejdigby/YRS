<?php
	setcookie("username","", time()-3600);
	setcookie("uid","", time()-3600);
	$_SESSION['Username'] = "";
	$_SESSION['Usedid'] = "";
	$_SESSION['Firstname'] = "";
	$_SESSION['Lastname'] = "";
	$_SESSION['Email'] = "";
	header('Location: /');
?>