<?php
	session_start();
	include 'database.php'; 
	$db = new database();
	include 'include/request.php'; 
	if(empty($_SESSION['user-role']))
	{
		$_SESSION['user-role']="";
	}
?>