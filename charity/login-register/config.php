<?php
	$hostname = "localhost.3307";
	$username = "root";
	$password = "";
	$dbname = "MYSVS";
			
	//connect to phpmyadmin
	$connect = mysqli_connect($hostname,$username,$password) OR DIE ("Connection failed!");
	
				
	//connect to database
	$selectdb = mysqli_select_db($connect,$dbname) OR DIE("Database Connection failed!");
	
	//overall connect lol
	$db = mysqli_connect("localhost","root","","MYSVS"); 
	
			
?>