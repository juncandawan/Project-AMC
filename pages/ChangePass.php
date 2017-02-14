<?php
	include('connection.php');
	include('PageFunctions.php');	
?>
<?php	
	if(isset($_POST['changePass_button']))
	{
		$currentPassword=$_POST['currentPass'];
		$newPassword=$_POST['newPass'];
		$confirmedNewPassword=$_POST['confirmedNewPass'];
		
		if(!$_POST['currentPass'] | !$_POST['newPass'] | !$_POST['confirmedNewPass'])
			{
				echo("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Fill out all fields!')
				window.location.href='ChangePasswordPage.php'	
				</SCRIPT>");
				exit();
			}
		if(ChangePassword($currentPassword,$newPassword, $confirmedNewPassword)==true)
			{
				echo"<script>
				alert('Password Successfully Updated!');
				window.location.href='ChangePasswordPage.php';
				</script>";
			}
			else
			{
				echo"<script>
				alert('Update Failed! Password does not Match!');
				window.location.href='ChangePasswordPage.php';
				</script>";
			}
			
	}
?>