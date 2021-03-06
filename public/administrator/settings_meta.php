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
	$arr = array("metadescription", "metakeywords");
	foreach ($arr as $value)
	{
		$sql = "update config set value='".mysqli_real_escape_string($conn->_connectionID, scriptolution_dotcom_data($_POST[$value]))."' where setting='$value'";
		$conn->execute($sql);
		Stemplate::assign($value,scriptolution_dotcom_data($_POST[$value]));
	}
	$message = "Meta Settings Successfully Saved.";
	Stemplate::assign('message',$message);
}

$mainmenu = "2";
$submenu = "5";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/settings_meta.tpl");
STemplate::display("administrator/global_footer.tpl");
?>