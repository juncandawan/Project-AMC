<?php
	include('connection.php');
	include('PageFunctions.php');	
?>
<?php
	if(isset($_POST['updateAcc_button']))
	{
		$NewfirstName=$_POST['NfirstName'];
        $NewlastName=$_POST['NlastName'];
        $Newemail=$_POST['Nemail'];
        $NewhomeAddress=$_POST['NhomeAddress'];
        $Newusername=$_POST['Nusername'];
        $NewphoneNumber=$_POST['NphoneNumber'];
		
		if(!$_POST['NfirstName'] | !$_POST['NlastName'] | !$_POST['Nemail'] | !$_POST['NhomeAddress'] | !$_POST['Nusername'] | !$_POST['NphoneNumber'])
			{
				echo("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Fill out field!')
				window.location.href='UpdateAccountPage.php'	
				</SCRIPT>");
				exit();
			}
		
		if(UpdateAccount($NewfirstName, $NewlastName, $Newemail, $NewhomeAddress, $NewphoneNumber))
        {
           if(UpdateUserName($Newusername))     
            {
                echo"<script>
                        alert('Account Successfully Updated!');
                        window.location.href='UpdateAccountPage.php';
                        </script>";
            }
            else
            {
                echo"<script>
                        alert('Update Failed!');
                        window.location.href='UpdateAccountPage.php';
                        </script>";
            }
        }
		else
		{
			echo"<script>
					alert('Update Failed!');
					window.location.href='UpdateAccountPage.php';
					</script>";
		}
	}
?>