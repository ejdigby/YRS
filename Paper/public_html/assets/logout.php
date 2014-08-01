<?php
	// Deletes all the cookies
  setcookie("username","", time()-3600);
   setcookie("uid","", time()-3600);
   setcookie("ulvl","", time()-3600);
   // Reddirects to homepage
	header('Location: /');  
   ?>