<?php
	include('connection.php');
	include('PageFunctions.php');	
?>
<?php
	if(isset($_POST['updateTerminalCoin_button']))
	{
		$New05cents=$_POST['N05cents'];
        $New10cents=$_POST['N10cents'];
        $New25cents=$_POST['N25cents'];
        $New1Peso=$_POST['N1Peso'];
        $New5Peso=$_POST['N5Peso'];
        $New10Peso=$_POST['N10Peso'];

		
		/*if(!$_POST['N05cents'] | !$_POST['N10cents'] | !$_POST['N25cents'] | !$_POST['N1Peso'] | !$_POST['N5Peso'] | !$_POST['N10Peso'])
			{
				echo("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Fill out COINS fields!')
				window.location.href='UpdateTerminalPage.php'	
				</SCRIPT>");
				exit();
			}*/
		
		if(UpdateCoins($New05cents, $New10cents, $New25cents, $New1Peso, $New5Peso, $New10Peso))
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