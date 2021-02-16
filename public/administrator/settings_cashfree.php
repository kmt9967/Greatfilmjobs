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

include("../include/config.php");
include_once("../include/functions/import.php");
verify_login_admin();

if($_POST['submitform'] == "1")
{
	//
	if($_POST['scriptolutiontoken'] != $_SESSION['scriptolutiontoken'])
	{
		$error = "Error: Invalid security token";	
	}
	else
	{
			$arr = array("enable_cashfree", "cashfree_mode", "cashfree_secret_key","cashfree_app_id");
			//print_r($_POST);
			foreach ($arr as $value)
			{
				//print_r($_POST[$value]);
				$sql = "update config set value='".mysqli_real_escape_string($conn->_connectionID, scriptolution_dotcom_data($_POST[$value]))."' where setting='$value'";
				$rows = $conn->execute($sql)->_numOfRows;
				if($rows == 0 ){
					$sql = "INSERT INTO config (`setting`,`value`) VALUES ('".$value."','".mysqli_real_escape_string($conn->_connectionID, scriptolution_dotcom_data($_POST[$value]))."')";
					$conn->execute($sql);
				}

				Stemplate::assign($value,strip_mq_gpc($_POST[$value]));
			}
			$message = "Cashfree Settings Successfully Saved.";
			Stemplate::assign('message',$message);
	}
	//
}

//
$scriptolutiontoken = NewScriptolutionToken();
Stemplate::assign('scriptolutiontoken',$scriptolutiontoken);
$_SESSION['scriptolutiontoken'] = $scriptolutiontoken;
//

$mainmenu = "2";
$submenu = "13";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/settings_cashfree.tpl");
STemplate::display("administrator/global_footer.tpl");
?>