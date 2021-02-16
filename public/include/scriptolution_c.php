<?php
/*
 * @ https://EasyToYou.eu - IonCube v10 Decoder Online
 * @ PHP 5.6
 * @ Decoder version: 1.0.3
 * @ Release: 10.12.2019
 *
 * @ ZendGuard Decoder PHP 5.6
 */

echo file_get_contents($config["baseurl"] . "/scriptolution_startup.php");
require_once $config["basedir"] . "/scriptolution/libs/SmartyBC.class.php";
require_once $config["basedir"] . "/libraries/mysmarty.class.php";
require_once $config["basedir"] . "/libraries/SConfig.php";
require_once $config["basedir"] . "/libraries/SError.php";
require_once $config["basedir"] . "/libraries/adodb5/adodb.inc.php";
require_once $config["basedir"] . "/libraries/phpmailer/class.phpmailer.php";
require_once $config["basedir"] . "/libraries/SEmail.php";
//echo '222'; exit();
$conn =& ADONewConnection($DBTYPE);
$conn->PConnect($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
@mysqli_query($conn->_connectionID, "SET NAMES 'UTF8'");
function strip_mq_gpc($arg)
{
    $arg = str_replace("\"", "'", $arg);
    $arg = stripslashes($arg);
    return $arg;
}

?>