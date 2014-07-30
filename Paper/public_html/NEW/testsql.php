<?php 

$con=mysqli_connect("localhost","gllry","chGcHr9QMhBUGdeK","gllry");
//$hsdpword =  md5($_POST['password']);
/*
$result = mysqli_query($con,"SELECT * FROM Users");
while($row = mysqli_fetch_array($result)) {
  if ("$_POST[username]" == $row['Uname']) {
  	$username = $row['Uname'];
  	if ("$_POST[password]" == $row['Pword']) {
		$password = $row['Pword'];*/
    
    $result = mysqli_query($con,"SELECT * FROM Users ");
    echo $result;
    /*   while($row = mysqli_fetch_array($result)) {
        $uid = $row['User_ID'];
    }
    $hour = time() + 3600;
    $year = time() + 315360000;
    if($_POST['remember']) {
      setcookie('remember_me', $_POST['username'], $year);
         setcookie("uid", $uid, $year);
      setcookie("username", $username, $year);
      }
      else{
      setcookie("uid", $uid);
      setcookie("username", $username); }
    header('Location: /logged_in/index.php');    
	}
	else {
  	echo"Paswords are incorrect";
  	}
  }
  else {
  	echo"User Name isnt correct";
  }
}*/
mysqli_close($con);?>