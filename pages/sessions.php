<?php?
	session_start();
	if(!isset($_SESSION['Type']))
	{
		header('location: index.php');
	}
?>