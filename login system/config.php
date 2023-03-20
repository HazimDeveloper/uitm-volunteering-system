<?php
	$hostname = "localhost:3307";
	$username = "root";
	$password = "";
	$dbname = "MYSVS.UITM";
			
	//connect to phpmyadmin
	$connect = mysqli_connect($hostname, $username, $password, $dbname)
			OR DIE ("Connection failed!");

?>
}