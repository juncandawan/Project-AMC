<?php
	include('connection.php');	
	
	if(isset($_POST['login_button']))
	{
		$user = ($_POST['username']);
		$pass = ($_POST['password']);
	}
	if(!$_POST['username'] | !$_POST['password'])
	{
		echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Fill out all fields!')
		window.location.href='loginPage.php'
		
		</SCRIPT>");
		exit();
	}
		$query = "SELECT username, password FROM sysadmin_tbl WHERE username ='$user' AND password ='$pass'";
		$result = mysqli_query($link,$query) or die ("Query failed!!". mysql_error());
		$count = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
	
	if($count > 0)
	{
		echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Logged in Successfully!!')
		window.location.href='navigation.php'
		</SCRIPT>");
		exit();
	}
	else
	{
		echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Invalid Username or Password!!')
		window.location.href='loginPage.php'
		</SCRIPT>");
		exit();
	}
?>

