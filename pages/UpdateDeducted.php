<?php
	include('connection.php');
	include('PageFunctions.php');	
?>
<?php
	if(isset($_POST['updateDeducted_button']))
	{
		$newUpdatedDeducted=$_POST['newDeducted'];
		
		if(!$_POST['newDeducted'])
			{
				echo("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Fill out field!')
				window.location.href='UpdateDeductedPage.php'	
				</SCRIPT>");
				exit();
			}
		
		if(UpdateDeducted($newUpdatedDeducted))
		{
			echo"<script>
					alert('Dudected Amount Successfully Updated!');
					window.location.href='UpdateDeductedPage.php';
					</script>";
		}
		else
		{
			echo"<script>
					alert('Update Failed!');
					window.location.href='UpdateDeductedPage.php';
					</script>";
		}
	}
?>