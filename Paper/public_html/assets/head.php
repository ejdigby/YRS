<?php 
	// This sets where to get the css from. ../css or css/
	if ($dirnm == 3) {
		//if it is in the third directory use this path
		$csslink = "../css/style.css";
	}
	else {
		//if it is in any other directory use this path
		$csslink = "css/style.css";
	}
?>

<head>
	<!-- Sets the title from the variable $pagename which is set on each invidual pages -->
	<title>Paper - <?php echo $pagename; ?></title>
	<!-- Sets style sheet using the varibale csslink which is determined above. -->
	 <link rel="stylesheet" type="text/css" href=" <?php echo $csslink;?> ">
	 <!-- Sets charset so we dont get those weird signs -->
	<meta charset="UTF-8">

</head> 