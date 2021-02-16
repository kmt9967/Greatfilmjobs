<?php
/**************************************************************************************************
| Fiverr Script
| http://www.fiverrscript.com
| webmaster@fiverrscript.com
|
|**************************************************************************************************
|
| By using this software you agree that you have read and acknowledged our End-User License 
| Agreement available at http://www.fiverrscript.com/eula.html and to be bound by it.
|
| Copyright (c) FiverrScript.com. All rights reserved.
|**************************************************************************************************/
$SCRIPTOLUTIONADMINPANEL = "1";
include("../include/config.php");
include_once("../include/functions/import.php");

if ($_SESSION['ADMINID'] != "" && $_SESSION['ADMINUSERNAME'] != "" && $_SESSION['ADMINPASSWORD'] != "")
{
	$redirect = $config['adminurl']."/home.php";
    header("location: $redirect");
}
else
{
	if($_POST['login']!="")
	{
		$adminusername = scriptolution_dotcom_data($_POST['username']);
		$adminpassword = scriptolution_dotcom_data($_POST['password']);
		if ($adminusername == "")
		{
			$error = "Error: Username not entered.";
		}
		elseif ($adminpassword == "")
		{
			$error = "Error: Password not entered.";
		}
		else
		{
			$encodedadminpassword = md5($adminpassword);
			$query="SELECT * FROM administrators WHERE username='".mysqli_real_escape_string($conn->_connectionID, $adminusername)."' AND password='".mysqli_real_escape_string($conn->_connectionID, $encodedadminpassword)."'";
			$executequery=$conn->execute($query);
			$getid = $executequery->fields['ADMINID'];
			$getusername = $executequery->fields['username'];
			$getpassword = $executequery->fields['password'];
	
			if (is_numeric($getid) && $getusername != "" && $getpassword != "" && $getusername == $adminusername && $getpassword == $encodedadminpassword)
			{
				$_SESSION['ADMINID'] = $getid;
				$_SESSION['ADMINUSERNAME'] = $getusername;
				$_SESSION['ADMINPASSWORD'] = $encodedadminpassword;
				$redirect = $config['adminurl']."/home.php";
				header("location: $redirect");
			}
			else
			{
				$error = "Invalid username/password entered.";
			}
		}
	}
	
	STemplate::assign('message',$message);
	STemplate::assign('error',$error);
	STemplate::display('administrator/index.tpl');
}

?>