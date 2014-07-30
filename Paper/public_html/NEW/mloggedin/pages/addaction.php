<?php
include '../../assets/sqlconf.php';

$sql="INSERT INTO Customers (Uname, Pword, Post_Code, House_Number, Street, Round, Paper, Notes)
VALUES
('$_POST[name]','$_POST[pword]','$_POST[pcode]','$_POST[hnumb]','$_POST[street]','$_POST[round]','$_POST[papers]','$_POST[notes]')";

header('Location: cadded.php');   	
?>