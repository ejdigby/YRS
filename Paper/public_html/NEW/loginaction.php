<?php 
`git pull`;
error_reporting( E_ALL );
ini_set( 'display_errors', 1 );
ini_set( 'html_errors', 'On' );
	include 'assets/sqlconf.php';

	$result = mysqli_query($con,"SELECT * FROM Users");
	

		while($row = mysqli_fetch_array($result)) {
			if ("$_POST[username]" == $row['Uname']) {
				$username = $row['Uname'];
				
				if ("$_POST[password]" == $row['Pword'] ) {
					$password = $row['Pword'];
					$uid = $row['Uid'];
					$ulevel = $row['ULevel'];
				}
				else {
					echo 'Password was wrong';
				}
				setcookie("username",$username);
				setcookie("uid", $uid);
				setcookie("ulvl", $ulevel);
				if ($ulevel == 0){
					header('Location: /cloggedin/');
				}
				elseif  ($ulevel == 1){
					header('Location: /ploggedin/');
				} else {
					header('Location: /mloggedin/');
				}
			} else {
					echo 'Username is wrong';
			}}
		}
			mysqli_close($con);
?>