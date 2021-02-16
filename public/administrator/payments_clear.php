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
$adminurl = $config['adminurl'];

//CLEAR
if($_POST['asub']=="1")
{
	$AID = intval(scriptolution_dotcom_data($_POST['AID']));
	$aseller = intval(scriptolution_dotcom_data($_POST['aseller']));
	$apay = number_format(scriptolution_dotcom_data($_POST['apay'], 2));
	if($AID > 0 && $aseller > 0 && $apay > 0)
	{
		$sql="UPDATE payments SET wd='1' WHERE ID='".mysqli_real_escape_string($conn->_connectionID, $AID)."'";
		$conn->Execute($sql);
		$sql="UPDATE members SET afunds=afunds+$apay WHERE USERID='".mysqli_real_escape_string($conn->_connectionID, $aseller)."'";
		$conn->Execute($sql);
		$message = "Payment successfully cleared.";
		Stemplate::assign('message',$message);
	}
}
//CLEAR

function insert_get_trans_id($a)
{
    global $conn;
	$query = "select txn_id, memo from paypal_table where id='".mysqli_real_escape_string($conn->_connectionID, $a[id])."'"; 
	$executequery=$conn->execute($query);
	$results = $conn->execute($query);
	$returnthis = $results->getrows();
	return $returnthis;
}

if($_REQUEST['sortby']=="OID")
{
	$sortby = "OID";
	$sort =" order by A.OID";
	$add1 = "&sortby=OID";
}
elseif($_REQUEST['sortby']=="username")
{
	$sortby = "username";
	$sort =" order by B.username";
	$add1 = "&sortby=username";
}
elseif($_REQUEST['sortby']=="time")
{
	$sortby = "time";
	$sort =" order by A.time";
	$add1 = "&sortby=time";
}
elseif($_REQUEST['sortby']=="PAYPAL")
{
	$sortby = "PAYPAL";
	$sort =" order by A.PAYPAL";
	$add1 = "&sortby=PAYPAL";
}
else
{
	$sortby = "ID";
	$sort =" order by A.ID";
	$add1 = "&sortby=ID";
}

if($_REQUEST['sorthow']=="asc")
{
	$sorthow ="asc";
	$add1 .= "&sorthow=asc";
}
else
{
	$sorthow ="desc";
	$add1 .= "&sorthow=desc";
}

//Search
$fromid = intval(scriptolution_dotcom_data($_REQUEST['fromid']));
$toid = intval(scriptolution_dotcom_data($_REQUEST['toid']));
$OID = scriptolution_dotcom_data($_REQUEST['OID']);
$username = scriptolution_dotcom_data($_REQUEST['username']);
$add1 .= "&fromid=$fromid&toid=$toid&OID=$OID&username=$username";
if($_POST['submitform'] == "1" || ($_REQUEST['fromid']!="" || $toid>0 || $OID!="" || $username!=""))
{
	if($fromid > 0)
	{
		$addtosql = "AND A.ID>='".mysqli_real_escape_string($conn->_connectionID, $fromid)."'";
		Stemplate::assign('fromid',$fromid);
	}
	else
	{
		$addtosql = "AND A.ID>'".mysqli_real_escape_string($conn->_connectionID, $fromid)."'";
	}
	if($toid > 0)
	{
		$addtosql .= "AND A.ID<='".mysqli_real_escape_string($conn->_connectionID, $toid)."'";
		Stemplate::assign('toid',$toid);
	}
	if($OID != "")
	{
		$addtosql .= "AND A.OID='".mysqli_real_escape_string($conn->_connectionID, $OID)."'";
		Stemplate::assign('OID',$OID);
	}
	if($username != "")
	{
		$addtosql .= "AND B.username like'%".mysqli_real_escape_string($conn->_connectionID, $username)."%'";
		Stemplate::assign('username',$username);
	}
	Stemplate::assign('search',"1");
}
//Search End

$page = intval(scriptolution_dotcom_data($_REQUEST['page']));
if($page=="")
{
	$page = "1";
}
$currentpage = $page;

if ($page >=2)
{
	$pagingstart = ($page-1)*$config['items_per_page'];
}
else
{
	$pagingstart = "0";
}

$queryselected = "select D.ctp, A.ID,B.username, C.cltime, D.USERID as seller from payments A, members B, orders C, posts D WHERE D.PID=C.PID AND A.OID=C.OID AND C.status='5' AND A.cancel='0' AND A.wd='0' AND A.ID>0 AND D.USERID=B.USERID $addtosql $sort $sorthow limit $config[maximum_results]";
$query2 = "select D.ctp, D.ctp2, D.ctp3, D.price2, D.price3, A.*,B.username, C.cltime, D.USERID as seller, C.IID from payments A, members B, orders C, posts D WHERE D.PID=C.PID AND A.OID=C.OID AND C.status='5' AND A.cancel='0' AND A.wd='0' AND A.ID>0 AND D.USERID=B.USERID $addtosql $sort $sorthow limit $pagingstart, $config[items_per_page]";
$executequeryselected = $conn->Execute($queryselected);
$totalposts = $executequeryselected->rowcount();	
if ($totalposts > 0)
{
	if($totalposts<=$config[maximum_results])
	{
		$total = $totalposts;
	}
	else
	{
		$total = $config[maximum_results];
	}
	$toppage = ceil($total/$config[items_per_page]);
	if($toppage==0)
	{
		$xpage=$toppage+1;
	}
	else
	{
		$xpage = $toppage;
	}
	$executequery2 = $conn->Execute($query2);	
	$results = $executequery2->getrows();
	$beginning=$pagingstart+1;
	$ending=$pagingstart+$executequery2->recordcount();
	$pagelinks="";
	$k=1;
	$theprevpage=$currentpage-1;
	$thenextpage=$currentpage+1;
	if ($currentpage > 0)
	{	
		if($currentpage > 1) 
		{
			$pagelinks.="<a href='$adminurl/payments_clear.php?page=1$add1' title='first page'>First</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/payments_clear.php?page=$theprevpage$add1'>Previous</a>&nbsp;";
		};
		$counter=0;
		$lowercount = $currentpage-5;
		if ($lowercount <= 0) $lowercount = 1;
		while ($lowercount < $currentpage)
		{
			$pagelinks.="<a href='$adminurl/payments_clear.php?page=$lowercount$add1'>$lowercount</a>&nbsp;";
			$lowercount++;
			$counter++;
		}
		$pagelinks.=$currentpage."&nbsp;";
		$uppercounter = $currentpage+1;
		while (($uppercounter < $currentpage+10-$counter) && ($uppercounter<=$toppage))
		{
			$pagelinks.="<a href='$adminurl/payments_clear.php?page=$uppercounter$add1'>$uppercounter</a>&nbsp;";
			$uppercounter++;
		}
		if($currentpage < $toppage) 
		{
			$pagelinks.="<a href='$adminurl/payments_clear.php?page=$thenextpage$add1'>Next</a>&nbsp;";
			$pagelinks.="<a href='$adminurl/payments_clear.php?page=$toppage$add1' title='last page'>Last</a>&nbsp;";
		};
	}
}
else
{
	$error = "No payments are ready to be cleared yet";
}

$mainmenu = "6";
$submenu = "2";
Stemplate::assign('mainmenu',$mainmenu);
Stemplate::assign('submenu',$submenu);
Stemplate::assign('sorthow',$sorthow);
Stemplate::assign('sortby',$sortby);
Stemplate::assign('currentpage',$currentpage);
STemplate::display("administrator/global_header.tpl");
STemplate::assign('beginning',$beginning);
STemplate::assign('ending',$ending);
STemplate::assign('pagelinks',$pagelinks);
STemplate::assign('total',$total+0);
STemplate::assign('results',$results);
Stemplate::assign('error',$error);
STemplate::display("administrator/payments_clear.tpl");
STemplate::display("administrator/global_footer.tpl");
?>