<?php
	include('connection.php');
	include('PageFunctions.php');	
?>
<?php
	if(isset($_POST['updateTerminalBill_button']))
	{
		$New20PHP=$_POST['N20PHP'];
        $New50PHP=$_POST['N50PHP'];
        $New100PHP=$_POST['N100PHP'];
        $New200PHP=$_POST['N200PHP'];
        $New500PHP=$_POST['N500PHP'];
        $New1000PHP=$_POST['N1000PHP'];
		
		/*if(!$_POST['N20PHP'] | !$_POST['N50PHP'] | !$_POST['N100PHP'] | !$_POST['N200PHP'] | !$_POST['N500PHP'] | !$_POST['N1000PHP'])
			{
				echo("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Fill out BILLS Fields!')
				window.location.href='UpdateTerminalPage.php'	
				</SCRIPT>");
				exit();
			}*/
		
	
        if(UpdateBills($New20PHP, $New50PHP, $New100PHP, $New200PHP, $New500PHP, $New1000PHP))     
		{
                echo"<script>
                        alert('Update Successful!');
                        window.location.href='UpdateTerminalPage.php';
                        </script>";
        }
		else
		{
			echo"<script>
					alert('Update Failed!');
					window.location.href='UpdateTerminalPage.php';
					</script>";
		}
	}
?>