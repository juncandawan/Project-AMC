<?php 
	//database credentials
	$dbHost = "sql6.freemysqlhosting.net";
	$dbUser = "sql6139821";
	$dbPass = "kzbDV5bbbd";
	$dbName = "sql6139821";
	
	$link = mysqli_connect($dbHost,$dbUser,$dbPass, $dbName); 
	if(!$link) 
	{ 
		die('Could not connect to MySQL: ' . mysqli_error()); 
	} 	
	$db = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    if(!$db) 
	{
		 die('Error Connecting to MySQL DataBase:' . mysqli_error());
	}
?>












