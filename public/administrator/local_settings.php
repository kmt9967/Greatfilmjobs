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
	$arr = array("scriptolution_local", "scriptolution_bankinfo");
	foreach ($arr as $value)
	{
		$sql = "update config set value='".mysql_real_escape_string(cleanit($_POST[$value]))."' where setting='$value'";
		$conn->execute($sql);
		Stemplate::assign($value,cleanit($_POST[$value]));
	}
	$message = "Local Bank Settings Successfully Saved.";
	Stemplate::assign('message',$message);
}

$mainmenu = "22";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/local_settings.tpl");
STemplate::display("administrator/global_footer.tpl");
?>