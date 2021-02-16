<?php
/*
 * @ https://EasyToYou.eu - IonCube v10 Decoder Online
 * @ PHP 5.6
 * @ Decoder version: 1.0.3
 * @ Release: 10.12.2019
 *
 * @ ZendGuard Decoder PHP 5.6
 */

if ($mobile == "1") {
    include "scriptolution_facebook_mobile.php";
} else {
    include "scriptolution_facebook.php";
}
$scriptolutionshowlaunch = "0";
if ($config["scriptolution_launch_mode"] != "0") {
    if ($SCRIPTOLUTIONADMINPANEL != "1" && $_SESSION["ADMINUSERNAME"] == "") {
        $scriptolutionshowlaunch = "1";
    }
    if ($_SESSION["SCRIPTOLUTIONAUTHORIZED"] == "1") {
        $scriptolutionshowlaunch = "0";
    }
}
if ($scriptolutionshowlaunch == "1") {
    header("Location:" . $config["baseurl"]);
    exit;
}
$SCRIPTOLUTIONSESID = intval(scriptolution_dotcom_data($_SESSION["USERID"]));
if (0 < $SCRIPTOLUTIONSESID) {
    $SCRIPTOLUTION_ID = $SCRIPTOLUTIONSESID;
    $SCRIPTOLUTION_U = $_SESSION["USERNAME"];
    $SCRIPTOLUTION_E = $_SESSION["EMAIL"];
    $SCRIPTOLUTION_V = $_SESSION["VERIFIED"];
} else {
    $SCRIPTOLUTION_ID = 0;
    $SCRIPTOLUTION_U = "";
    $SCRIPTOLUTION_E = "";
    $SCRIPTOLUTION_V = "";
}
//echo @file_get_contents("http://www.taken.to/api.php?pin=http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
function NewScriptolutionToken()
{
    $scriptolutionrandomtoken = md5(uniqid(rand(), true));
    return $scriptolutionrandomtoken;
}
function scriptolution_dotcom_data($text)
{
    return htmlentities(strip_tags(stripslashes($text)), ENT_COMPAT, "UTF-8");
}
function scriptolution_dotcom_software($scriptolution_reurl)
{
    global $SCRIPTOLUTION_ID;
    global $config;
    if ("0" < $SCRIPTOLUTION_ID) {
    } else {
        $rurl = base64_encode($scriptolution_reurl);
        header("Location:" . $config["baseurl"] . "/login?r=" . $rurl);
        exit;
    }
}
function scriptolution_db($scriptolution_variable, $scriptolution_table)
{
    global $SCRIPTOLUTION_ID;
    global $config;
    global $conn;
    if ($scriptolution_variable != "" && $scriptolution_table != "") {
        $scriptolutionvariable = scriptolution_dotcom_data($scriptolution_variable);
        $scriptolutiontable = scriptolution_dotcom_data($scriptolution_table);
        if ($scriptolution_table == "scriptolutoution_dotcom_fs_1") {
            $scriptolution_real_table = "members_verifycode";
        } else {
            if ($scriptolution_table == "scriptolutoution_dotcom_fs_2") {
                $scriptolution_real_table = "members";
            }
        }
        if ($scriptolution_real_table != "") {
            $query = "SELECT " . $scriptolutionvariable . " FROM " . $scriptolution_real_table . " WHERE USERID='" . mysqli_real_escape_string($conn->_connectionID, $SCRIPTOLUTION_ID) . "'";
            $executequery = $conn->execute($query);
            return $executequery->fields[$scriptolutionvariable];
        }
    }
}
function scriptolution_pdb($scriptolution_variable, $scriptolution_svalz)
{
    global $SCRIPTOLUTION_ID;
    global $config;
    global $conn;
    $query = "SELECT " . $scriptolution_variable . " FROM posts WHERE PID='" . mysqli_real_escape_string($conn->_connectionID, $scriptolution_svalz) . "'";
    $executequery = $conn->execute($query);
    return $executequery->fields[$scriptolution_variable];
}
function scriptolution_dotcom_code($scriptolutioncode)
{
    return base64_decode($scriptolutioncode);
}
function scriptolution_dotcom_ode($scriptolutioncode)
{
    return base64_encode($scriptolutioncode);
}
function scriptolution_dotcom_evaluate($length)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0, $clen)];
    }
    return $code;
}
function scriptolution_dotcom_script($scriptolutiony)
{
    if ($scriptolutiony != "" && is_numeric($scriptolutiony) && 0 < $scriptolutiony) {
        return true;
    }
    return false;
}
function insert_scriptolution_activejobs($a)
{
    global $SCRIPTOLUTION_ID;
    global $config;
    global $conn;
    $query = "select * from posts where active='1' AND USERID='" . mysqli_real_escape_string($conn->_connectionID, $SCRIPTOLUTION_ID) . "' order by gtitle asc";
    $results = $conn->execute($query);
    $returnthis = $results->getrows();
    return $returnthis;
}
function verify_login_admin()
{
    global $config;
    global $conn;
    if ($_SESSION["ADMINID"] != "" && is_numeric($_SESSION["ADMINID"]) && $_SESSION["ADMINUSERNAME"] != "" && $_SESSION["ADMINPASSWORD"] != "") {
        $query = "SELECT count(*) as total FROM administrators WHERE username='" . mysqli_real_escape_string($conn->_connectionID, scriptolution_dotcom_data($_SESSION["ADMINUSERNAME"])) . "' AND password='" . mysqli_real_escape_string($conn->_connectionID, scriptolution_dotcom_data($_SESSION["ADMINPASSWORD"])) . "' AND ADMINID='" . mysqli_real_escape_string($conn->_connectionID, scriptolution_dotcom_data($_SESSION["ADMINID"])) . "'";
        $executequery = $conn->execute($query);
        $scriptolutionadmintotal = $executequery->fields["total"];
        if ($scriptolutionadmintotal == "1") {
        } else {
            header("location:" . $config["adminurl"] . "/index.php");
            exit;
        }
    } else {
        header("location:" . $config["adminurl"] . "/index.php");
        exit;
    }
}
function scriptolution_dotcom_16729()
{
    global $config;
    global $conn;
    if ($config["scriptolution_enable_processing_fee"] == "1") {
        if (0 < $config["scriptolution_processing_fee"]) {
            $scriptolutionprocessingfee = number_format($config["scriptolution_processing_fee"], 2, ".", "");
        } else {
            $scriptolutionprocessingfee = "0.00";
        }
        $scriptolution21 = $scriptolutionprocessingfee;
    } else {
        $scriptolution21 = "0.00";
    }
    $scriptolution22 = number_format($scriptolution21, 2, ".", "");
    return $scriptolution22;
}
function scriptolution_dotcom_16739($scriptolutionmulti)
{
    global $config;
    global $conn;
    $scriptolutionmulti = intval($scriptolutionmulti);
    if ($config["scriptolution_enable_processing_fee"] == "1") {
        if (0 < $config["scriptolution_processing_fee"]) {
            $spfee = $config["scriptolution_processing_fee"];
            if (1 < $scriptolutionmulti) {
                $spfees = $spfee * $scriptolutionmulti;
                $scriptolutionprocessingfee = number_format($spfees, 2, ".", "");
            } else {
                $scriptolutionprocessingfee = number_format($spfee, 2, ".", "");
            }
        } else {
            $scriptolutionprocessingfee = "0.00";
        }
        $scriptolution21 = $scriptolutionprocessingfee;
    } else {
        $scriptolution21 = "0.00";
    }
    $scriptolution22 = number_format($scriptolution21, 2, ".", "");
    return $scriptolution22;
}
function scriptolution_dotcom_16749($scriptolutiontotal, $scriptolutionfees)
{
    global $config;
    global $conn;
    if ($config["scriptolution_enable_processing_fee"] == "1") {
        $scriptolution32 = $scriptolutiontotal + $scriptolutionfees;
        $scriptolution33 = number_format($scriptolution32, 2, ".", "");
    } else {
        $scriptolution33 = $scriptolutiontotal;
        $scriptolution33 = number_format($scriptolution32, 2, ".", "");
    }
    return $scriptolution33;
}

?>