

<?php 
echo "hello";
	$tempuname = $_POST['username'];
	include 'assets/sqlconf.php';
if ($_POST['username'] == "") {
	echo "No Username Entered";
}
else {
	echo 'username entered';
}
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
else {
  echo "Connected!!";
}
		$result = mysqli_query($con,"SELECT * FROM Users WHERE Uname  = '$_POST[username]';");
		print_r($result);

		 $row = mysqli_fetch_array($result);
					 print $row['Uname'];
			 /*}
			if ("$_POST[username]" == $row['Uname']) {
				$username = $row['Uname'];
					if ("$_POST[password]" == $row['Pword'] ) {
						$password = $row['Pword'];
						$uid = $row['uid'];
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
			}
		*/
			mysqli_close($con);
?> 