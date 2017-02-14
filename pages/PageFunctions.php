<?php
	include('connection.php');
	
	function ChangePassword($currentPassword, $newPassword, $confirmedNewPassword)
	{
		Global $link;
		$isSuccess=true;
		$currentPass=mysqli_real_escape_string($link,$currentPassword);
		$newPass=mysqli_real_escape_string($link,$newPassword);
		$confirmedNewPass=mysqli_real_escape_string($link,$confirmedNewPassword);
		
		$query="SELECT * FROM sysadmin_tbl WHERE password='$currentPass'";
		$result=mysqli_query($link, $query) or die ("Failed to read sysadmin_tbl".mysqli_error());
		$rowsAffected=mysqli_num_rows($result);
		if($rowsAffected>0)
		{	
			if($newPass == $confirmedNewPass)
			{
			$updateQuery="UPDATE sysadmin_tbl SET password='$newPass' WHERE id='1'";
			$updateResult=mysqli_query($link,$updateQuery) or die ("Failed to update db table sysadmin_tbl".mysql_error());
			
			$isSuccess=true;
			}
			else($isSuccess=false);
			return($isSuccess);
		}
		else($isSuccess=false);
		return($isSuccess);
	}
	function UpdateDeducted($newUpdatedDeducted)
	{
		Global $link;
		$isSuccess=true;

		$newDeducted=mysqli_real_escape_string($link,$newUpdatedDeducted);
		
		$query="SELECT * FROM machines_tbl";
		$result=mysqli_query($link, $query) or die ("Failed to read machines_tbl".mysqli_error());
		$rowsAffected=mysqli_num_rows($result);
		if($rowsAffected>0)
		{
			$updateQuery="UPDATE machines_tbl SET deducted='$newDeducted' WHERE id='1'";
			$updateResult=mysqli_query($link,$updateQuery) or die ("Failed to update db table machines_tbl".mysqli_error());
			
			$isSuccess=true;
		}
		else($isSuccess=false);
		
		return($isSuccess);
	}


	function UpdateAccount($NewfirstName, $NewlastName, $Newemail, $NewhomeAddress, $NewphoneNumber)
	{
		Global $link;
		$NfirstName=mysqli_real_escape_string($link,$NewfirstName);
		$NlastName=mysqli_real_escape_string($link,$NewlastName);
		$Nemail=mysqli_real_escape_string($link,$Newemail);
		$NhomeAddress=mysqli_real_escape_string($link,$NewhomeAddress);
		$NphoneNumber=mysqli_real_escape_string($link,$NewphoneNumber);
		
		$query="SELECT * FROM account_tbl";
		$result=mysqli_query($link, $query) or die ("Failed to read account_tbl".mysqli_error());
		$rowsAffected=mysqli_num_rows($result);
		if($rowsAffected>0)
		{
			$updateQuery="UPDATE account_tbl SET fname='$NfirstName', lname='$NlastName', email='$Nemail', haddress='$NhomeAddress', pnum='$NphoneNumber' WHERE id='1'";
			$updateResult=mysqli_query($link,$updateQuery) or die ("Failed to update db table account_tbl".mysql_error());
			
			$isSuccess=true;
		}
		else($isSuccess=false);
		
		return($isSuccess);
	}
	
	function UpdateUsername($Newusername)
	{
		Global $link;
		$Nusername=mysqli_real_escape_string($link,$Newusername);
		
		$query="SELECT * FROM sysadmin_tbl";
		$result=mysqli_query($link, $query) or die ("Failed to read sysadmin_tbl".mysqli_error());
		$rowsAffected=mysqli_num_rows($result);
		if($rowsAffected>0)
		{
			$updateQuery="UPDATE sysadmin_tbl SET username='$Nusername' WHERE id='1'";
			$updateResult=mysqli_query($link,$updateQuery) or die ("Failed to update db table sysadmin_tbl".mysql_error());
			
			$isSuccess=true;
		}
		else($isSuccess=false);
		
		return($isSuccess);
	}
	function converCurrency($from,$to,$amount)
	{
		$url = "http://www.google.com/finance/converter?a=$amount&from=$from&to=$to"; 
		$request = curl_init(); 
		$timeOut = 0; 
		curl_setopt ($request, CURLOPT_URL, $url); 
		curl_setopt ($request, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt ($request, CURLOPT_USERAGENT,"Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1)"); 
		curl_setopt ($request, CURLOPT_CONNECTTIMEOUT, $timeOut); 
		$response = curl_exec($request); 
		curl_close($request); 
		return $response;
	} 
	function GetTerminalStatuses()
	{
		Global $link;
		$query="SELECT * FROM terminal_status_tbl";
		$result=mysqli_query($link,$query) or die("Failes to read db table: ".mysqli_error());
		return $result;
	}
	function UpdateCoins($New05cents, $New10cents, $New25cents, $New1Peso, $New5Peso, $New10Peso)
	{
		Global $link;
		$N05cents=mysqli_real_escape_string($link,$New05cents);
		$N10cents=mysqli_real_escape_string($link,$New10cents);
		$N25cents=mysqli_real_escape_string($link,$New25cents);
		$N1Peso=mysqli_real_escape_string($link,$New1Peso);
		$N5Peso=mysqli_real_escape_string($link,$New5Peso);
		$N10Peso=mysqli_real_escape_string($link,$New10Peso); 
		
		
		$query="SELECT * FROM inventorycoin_tbl";
		$result=mysqli_query($link, $query) or die ("Failed to read inventorycoin_tbl".mysqli_error());
		$rowsAffected=mysqli_num_rows($result);
		if($rowsAffected>0)
		{
			$updateQuery="UPDATE inventorycoin_tbl SET fivecents=fivecents+'$N05cents', tencents=tencents+'$N10cents', twentyfivecents=twentyfivecents+'$N25cents', one=one+'$N1Peso', five=five+'$N5Peso', ten=ten+'$N10Peso',  total = (fivecents * 0.05) + (tencents * 0.10) +  (twentyfivecents * 0.25) + (one * 1) + (five * 5) + (ten * 10) WHERE id='1'";
			$updateResult=mysqli_query($link,$updateQuery) or die ("Failed to update db table inventorycoin_tbl".mysql_error());
			
			$isSuccess=true;
		}
		else($isSuccess=false);
		
		return($isSuccess);
	}
    function UpdateBills($New20PHP, $New50PHP, $New100PHP, $New200PHP, $New500PHP, $New1000PHP)
    {
		Global $link;
		$N20PHP=mysqli_real_escape_string($link,$New20PHP);
		$N50PHP=mysqli_real_escape_string($link,$New50PHP);
		$N100PHP=mysqli_real_escape_string($link,$New100PHP);
		$N200PHP=mysqli_real_escape_string($link,$New200PHP);
		$N500PHP=mysqli_real_escape_string($link,$New500PHP);
		$N1000PHP=mysqli_real_escape_string($link,$New1000PHP);
		
		$query="SELECT * FROM inventorybill_tbl";
		$result=mysqli_query($link, $query) or die ("Failed to read account_tbl".mysqli_error());
		$rowsAffected=mysqli_num_rows($result);
		if($rowsAffected>0)
		{
			$updateQuery="UPDATE inventorybill_tbl SET twenty=twenty+'$N20PHP', fifty=fifty+'$N50PHP', onehundred=onehundred+'$N100PHP', twohundred=twohundred+'$N200PHP', fivehundred=fivehundred+'$N500PHP', onethou=onethou+'$N1000PHP', total = (twenty * 20) + (fifty * 50) + (onehundred * 100) + (twohundred * 200) + (fivehundred * 500) + (onethou * 1000) WHERE id=1";
			$updateResult=mysqli_query($link,$updateQuery) or die ("Failed to update db table inventorybill_tbl".mysql_error());
			
			$isSuccess=true;
		}
		else($isSuccess=false);
		
		return($isSuccess);
	}
?>