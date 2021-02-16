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

$CATID = intval(scriptolution_dotcom_data($_REQUEST['CATID']));
Stemplate::assign('CATID',$CATID);
if($CATID > 0)
{
	if($_POST['submitform'] == "1")
	{
		$name = htmlentities(strip_tags($_REQUEST['name']), ENT_COMPAT, "UTF-8");
		$seo = htmlentities(strip_tags($_REQUEST['seo']), ENT_COMPAT, "UTF-8");
		$seo = str_replace("\/", "-", $seo);
		$seo = str_replace("/", "-", $seo);
		$seo = str_replace("&amp;", "-", $seo);
		$seo = str_replace("&", "-", $seo);
		$seo = str_replace(" ", "-", $seo);
		$details = scriptolution_dotcom_data($_POST['details']);
		$mtitle = scriptolution_dotcom_data($_POST['mtitle']);
		$mdesc = scriptolution_dotcom_data($_POST['mdesc']);
		$mtags = scriptolution_dotcom_data($_POST['mtags']);
		$scriptolution_featuredcat = intval(scriptolution_dotcom_data($_POST['scriptolution_featuredcat']));
		$scriptolution_cattag1 = scriptolution_dotcom_data($_POST['scriptolution_cattag1']);
		$scriptolution_cattag2 = scriptolution_dotcom_data($_POST['scriptolution_cattag2']);
		$scriptolution_cattag3 = scriptolution_dotcom_data($_POST['scriptolution_cattag3']);
		
		$parent = intval(scriptolution_dotcom_data($_POST['parent']));
		
		$sql = "update categories set parent='".mysqli_real_escape_string($conn->_connectionID, $parent)."', name='".mysqli_real_escape_string($conn->_connectionID, $name)."', seo='".mysqli_real_escape_string($conn->_connectionID, $seo)."', scriptolution_featuredcat='".mysqli_real_escape_string($conn->_connectionID, $scriptolution_featuredcat)."', scriptolution_cattag1='".mysqli_real_escape_string($conn->_connectionID, $scriptolution_cattag1)."', scriptolution_cattag2='".mysqli_real_escape_string($conn->_connectionID, $scriptolution_cattag2)."', scriptolution_cattag3='".mysqli_real_escape_string($conn->_connectionID, $scriptolution_cattag3)."', details='".mysqli_real_escape_string($conn->_connectionID, $details)."', mtitle='".mysqli_real_escape_string($conn->_connectionID, $mtitle)."', mdesc='".mysqli_real_escape_string($conn->_connectionID, $mdesc)."', mtags='".mysqli_real_escape_string($conn->_connectionID, $mtags)."' where CATID='".mysqli_real_escape_string($conn->_connectionID, $CATID)."'";
		$conn->execute($sql);
		
		
		
		
		$cimage = $_FILES['cimage']['tmp_name'];
		if($cimage != "")
		{
			$ext = substr(strrchr($_FILES['cimage']['name'], '.'), 1);
			$ext2 = strtolower($ext);
			if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
			{
				$theimageinfo = getimagesize($cimage);
				if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
				{
					$gstop = "1";
				}
				else
				{
					$gstop = "0";
				}
			}
			if($gstop == "0")
			{
				$thepp = $CATID;
				if($theimageinfo[2] == 1)
				{
					$thepp .= ".gif";
				}
				elseif($theimageinfo[2] == 2)
				{
					$thepp .= ".jpg";
				}
				elseif($theimageinfo[2] == 3)
				{
					$thepp .= ".png";
				}

				$myvideoimgnew=$config['scriptolutioncatdir']."/o-".$thepp;
				if(file_exists($myvideoimgnew))
				{
					unlink($myvideoimgnew);
				}
				move_uploaded_file($cimage, $myvideoimgnew);
				do_resize_image($myvideoimgnew, "285", "145", false, $config['scriptolutioncatdir']."/".$thepp);
				if(file_exists($config['scriptolutioncatdir']."/".$thepp))
				{
					$query = "UPDATE categories SET scriptolution_catimage='".mysqli_real_escape_string($conn->_connectionID, $thepp)."' WHERE CATID='".mysqli_real_escape_string($conn->_connectionID, $CATID)."'";
					$conn->execute($query);
				}
			}
		}
		
		
		
		$bigimage = $_FILES['bigimage']['tmp_name'];
		if($bigimage != "")
		{
			$ext = substr(strrchr($_FILES['bigimage']['name'], '.'), 1);
			$ext2 = strtolower($ext);
			if($ext2 == "jpeg" || $ext2 == "jpg" || $ext2 == "gif" || $ext2 == "png")
			{
				$theimageinfo = getimagesize($bigimage);
				if($theimageinfo[2] != 1 && $theimageinfo[2] != 2 && $theimageinfo[2] != 3)
				{
					$gstop = "1";
				}
				else
				{
					$gstop = "0";
				}
			}
			if($gstop == "0")
			{
				$thenewpp = $CATID;
				if($theimageinfo[2] == 1)
				{
					$thenewpp .= ".gif";
				}
				elseif($theimageinfo[2] == 2)
				{
					$thenewpp .= ".jpg";
				}
				elseif($theimageinfo[2] == 3)
				{
					$thenewpp .= ".png";
				}
				
				$myvideoimgnew=$config['scriptolutioncatdir']."/bigo-".$thenewpp;
				if(file_exists($myvideoimgnew))
				{
					unlink($myvideoimgnew);
				}
				move_uploaded_file($bigimage, $myvideoimgnew);
				do_resize_image($myvideoimgnew, "1010", "298", false, $config['scriptolutioncatdir']."/big-".$thenewpp);
				if(file_exists($config['scriptolutioncatdir']."/bigo-".$thenewpp))
				{
					$query = "UPDATE categories SET scriptolution_bigimage='big-".mysqli_real_escape_string($conn->_connectionID, $thenewpp)."' WHERE CATID='".mysqli_real_escape_string($conn->_connectionID, $CATID)."'";
					$conn->execute($query);
				}
			}
		}
		
		
		
		$message = "Category Successfully Edited.";
		Stemplate::assign('message',$message);
	}

	$query = $conn->execute("select * from categories where CATID='".mysqli_real_escape_string($conn->_connectionID, $CATID)."' limit 1");
	$category = $query->getrows();
	Stemplate::assign('category', $category[0]);
}

$mainmenu = "3";
$submenu = "1";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
STemplate::display("administrator/global_header.tpl");
STemplate::display("administrator/cat_edit.tpl");
STemplate::display("administrator/global_footer.tpl");
?>