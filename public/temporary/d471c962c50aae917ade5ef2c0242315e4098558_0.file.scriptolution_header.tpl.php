<?php
/* Smarty version 3.1.29, created on 2020-03-02 09:24:16
  from "/home4/o8txizzi/public_html/themes/scriptolution_header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d17101b8af6_99939443',
  'file_dependency' => 
  array (
    'd471c962c50aae917ade5ef2c0242315e4098558' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/scriptolution_header.tpl',
      1 => 1582543467,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_rtl.tpl' => 1,
    'file:scriptolution_colorbox.tpl' => 1,
    'file:scriptolution_tooltip.tpl' => 1,
    'file:scriptolution_dotcom_notifications.tpl' => 1,
    'file:scriptolution_co_bit1.tpl' => 1,
    'file:scriptolution_co_bit2.tpl' => 1,
    'file:fiverrscript_dotcom_notifications.tpl' => 1,
    'file:scriptolution_co_bit2_responsive.tpl' => 1,
    'file:scriptolution_co_bit1_responsive.tpl' => 1,
    'file:scriptolution_colorbox2.tpl' => 1,
  ),
),false)) {
function content_5e5d17101b8af6_99939443 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
    <title><?php if ($_smarty_tpl->tpl_vars['mtitle']->value != '') {
echo $_smarty_tpl->tpl_vars['mtitle']->value;
} else {
if ($_smarty_tpl->tpl_vars['pagetitle']->value != '') {
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['site_name']->value;
}?></title>
	<meta name="description" content="<?php if ($_smarty_tpl->tpl_vars['mdesc']->value != '') {
echo $_smarty_tpl->tpl_vars['mdesc']->value;
} else {
if ($_smarty_tpl->tpl_vars['pagetitle']->value != '') {
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php }
if ($_smarty_tpl->tpl_vars['metadescription']->value != '') {
echo $_smarty_tpl->tpl_vars['metadescription']->value;?>
 - <?php }
echo $_smarty_tpl->tpl_vars['site_name']->value;
}?>">
	<meta name="keywords" content="<?php if ($_smarty_tpl->tpl_vars['mtags']->value != '') {
echo $_smarty_tpl->tpl_vars['mtags']->value;
} else {
if ($_smarty_tpl->tpl_vars['pagetitle']->value != '') {
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
,<?php }
if ($_smarty_tpl->tpl_vars['metakeywords']->value != '') {
echo $_smarty_tpl->tpl_vars['metakeywords']->value;?>
,<?php }
echo $_smarty_tpl->tpl_vars['site_name']->value;
}?>">   
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolution_style_v7.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolution_countries.php" media="screen" rel="stylesheet" type="text/css" />  
    <?php echo '<script'; ?>
 type="text/javascript">
    var base_url = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
";
	<?php echo '</script'; ?>
>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/favicon.ico" />
    <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <?php echo '<script'; ?>
 type="text/javascript" src="https://apis.google.com/js/plusone.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
        sQuery = jQuery.noConflict(true);
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.customSelect.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/scriptolution.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/scriptolution_notifications.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['rtl']->value == "1") {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_rtl.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_colorbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
    <?php if ($_smarty_tpl->tpl_vars['scriptolutionhome']->value == "1") {?><link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolution_style_v7_home.css" media="screen" rel="stylesheet" type="text/css" /><?php }?>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jscriptolution.js"><?php echo '</script'; ?>
>
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolutionresponse.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div id="loadme"></div>
<?php if ($_smarty_tpl->tpl_vars['enable_fc']->value == "1") {?>
<div id="fb-root"></div>

<?php echo '<script'; ?>
 src="https://connect.facebook.net/en_US/all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  FB.init({appId: '<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe('auth.login', function(response) {
  });	  
<?php echo '</script'; ?>
>

<?php }
if ($_SESSION['USERID'] != '') {?>

<?php echo '<script'; ?>
 type="text/javascript">
function loadContent(elementSelector, sourceURL) {
$(""+elementSelector+"").load(""+sourceURL+"");
}
<?php echo '</script'; ?>
>

<?php }?>
<div class="header">
	<div class="centerwrap relative">
    	<div class="headertop">
        	<div class="scriptolutionmenubutton"><a href="javascript:void();" onclick="scriptolution_newtoggle('scriptolutionmobilenav');"><i class="fa fa-bars"></i></a></div>
        	<div class="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
" /></a></div>
            <div class="search">                
                <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/search" id="search_form" method="get">
                <input name="query" type="text" class="textbox scriptolutiontextbox20"/>
                <input type="hidden" name="c" id="scriptolution_search_cat" value="0" />
                <input type="submit" value="" class="searchbtn" />
                </form>
            </div>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_dotcom_notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ($_SESSION['USERID'] != '') {?>
            <div class="logoutheader">
    	  		<div class="usernamebox droparrow">
                	<?php $_smarty_tpl->assign('myprofilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>
                	<div class="userimage"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['myprofilepicture']->value;?>
" alt="<?php echo $_SESSION['USERNAME'];?>
" height="25px" width="25px" class="scriptolutionradius3" /></a></div>
              		<p><?php echo $_smarty_tpl->tpl_vars['lang29']->value;?>
</p>
           	  		<div class="clear"></div>
                    <div class="dropdownbox">
                    	<ul>
                        	<?php if ($_smarty_tpl->tpl_vars['enable_ref']->value == "1") {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myreferrals"><?php echo $_smarty_tpl->tpl_vars['lang512']->value;?>
</a></li><?php }?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bookmarks"><?php echo $_smarty_tpl->tpl_vars['lang30']->value;?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/settings"><?php echo $_smarty_tpl->tpl_vars['lang31']->value;?>
</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:loadContent('#loadme', '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/log_out');"><?php echo $_smarty_tpl->tpl_vars['lang27']->value;?>
</a></li>
                        </ul>
                    </div>
              	</div>
       	  		<div class="textdropdown sublinks 111">
               		<p><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_gigs"><?php echo $_smarty_tpl->tpl_vars['lang156']->value;?>
 <span class="arrow"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                    <div class="dropdownbox">
                    	<ul>
                        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new"><?php echo $_smarty_tpl->tpl_vars['lang55']->value;?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_gigs"><?php echo $_smarty_tpl->tpl_vars['lang153']->value;?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_orders"><?php echo $_smarty_tpl->tpl_vars['lang154']->value;?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->tpl_vars['lang155']->value;?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/purchases"><?php echo $_smarty_tpl->tpl_vars['lang461']->value;?>
</a></li>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_co_bit1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/requests"><?php echo $_smarty_tpl->tpl_vars['lang632']->value;?>
</a></li>
                        </ul>
                    </div>
                </div>
          		<div class="textdropdown sublinks">
               		<p><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance"><?php echo $_smarty_tpl->tpl_vars['lang158']->value;?>
 <span class="arrow"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                    <div class="dropdownbox">
                    	<ul>
                        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/newrequest"><?php echo $_smarty_tpl->tpl_vars['lang621']->value;?>
</a></li>
                        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myrequests"><?php echo $_smarty_tpl->tpl_vars['lang629']->value;?>
</a></li>
                        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders"><?php echo $_smarty_tpl->tpl_vars['lang157']->value;?>
</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance"><?php echo $_smarty_tpl->tpl_vars['lang159']->value;?>
</a></li>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_co_bit2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        </ul>
                    </div>
                </div>
                <?php $_smarty_tpl->assign('snctr' , insert_scriptolutionnotificationcounter (array('value' => 'a'),$_smarty_tpl), true);?>
                <div class="massage <?php if ($_smarty_tpl->tpl_vars['snctr']->value > "0") {?>scriptolutionheadernotifycntcolor<?php } else { ?>scriptolutionheadernotifycnt<?php }?>">
                	<a href="#" onclick="scriptolutions_fiverrscript_toggleit('scriptolution-notifications-popup');"><i id="scriptolution-master" class="fa fa-bell-o" style="padding-top: 7px;"></i></a>
                </div>
                
                <div class="todo leftborder">
                	<?php $_smarty_tpl->assign('msgc' , insert_msg_cnt (array('value' => 'var'),$_smarty_tpl), true);?>
                	<p><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox"><?php echo $_smarty_tpl->tpl_vars['lang28']->value;?>
</a> <span><?php echo $_smarty_tpl->tpl_vars['msgc']->value;?>
</span></p>
                </div>
            	<div class="clear"></div>
          	</div> 
            <?php } else { ?>
        	<div class="headeright">
            	<ul>
                	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['lang0']->value;?>
</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login"><?php echo $_smarty_tpl->tpl_vars['lang2']->value;?>
</a></li>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/signup" class="join"><?php echo $_smarty_tpl->tpl_vars['lang1']->value;?>
</a></li>
                </ul>
            </div>
            <?php }?>
            <div class="textdropdown sublinks">
                <p><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=<?php echo $_SESSION['c'];?>
"><?php echo $_SESSION['c'];?>
 <span class="arrow"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                <div class="dropdownbox">
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=INR">INR</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=USD">USD</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=EUR">EUR</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=JPY">JPY</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=GBP">GBP</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=AUD">AUD</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=CAD">CAD</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=CHF">CHF</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=CNY">CNY</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=SEK">SEK</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=NZD">NZD</a></li>
                        <!-- <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=LKR">LKR</a></li>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?c=BDT">BDT</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
	<div class="subnav">
    	<div class="centerwrap">
        	<ul>
            	<?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
</a>
                	<?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']),$_smarty_tpl), true);?>
                    <?php if (count($_smarty_tpl->tpl_vars['subcat']->value) > "0") {?>
                	<div class="menubox">
                    	<div class="menulist">
                        	<ul>
                            	<?php
$__section_sc_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sc']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc'] : false;
$__section_sc_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['subcat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sc_1_total = $__section_sc_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = new Smarty_Variable(array());
if ($__section_sc_1_total != 0) {
for ($__section_sc_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] = 0; $__section_sc_1_iteration <= $__section_sc_1_total; $__section_sc_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']++){
?>
                            	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['name']);?>
</a></li>
                                <?php
}
}
if ($__section_sc_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = $__section_sc_1_saved;
}
?>
                            </ul>
                        </div>
                    </div>
                    <?php }?>
                </li>
                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                <li class="submenu-right"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories"><?php echo $_smarty_tpl->tpl_vars['lang557']->value;?>
</a></li>
            </ul>
        </div>
    </div>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:fiverrscript_dotcom_notifications.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>
<div class="nav-scriptolution" id="scriptolutionmobilenav" style="display:none">
	<div class="scriptolution-dotcom-mobile-dropdown" id="dropdown-menu">
    	<div class="scriptolutionclose-nav" onclick="scriptolution_newtoggle('scriptolutionmobilenav');">×</div>
        <div class="searchforscriptolutionmobleonly">
        	<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/search" method="get">
            <input name="query" type="text" class="textbox scriptolutiontextbox18 scriptolutionwidth80"/>
            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang504']->value;?>
" class="ascriptolutiongreenbutton" style="border: 0px;" />
            </form>
            <hr>
        </div>
        <?php if ($_SESSION['USERID'] != '') {?>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox"><?php echo $_smarty_tpl->tpl_vars['lang28']->value;?>
 <span><?php echo $_smarty_tpl->tpl_vars['msgc']->value;?>
</span></a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/notifications"><?php echo $_smarty_tpl->tpl_vars['lang544']->value;
if ($_smarty_tpl->tpl_vars['snctr']->value > "0") {?> <span><?php echo $_smarty_tpl->tpl_vars['snctr']->value;?>
</span><?php }?></a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance"><?php echo $_smarty_tpl->tpl_vars['lang158']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/newrequest"><?php echo $_smarty_tpl->tpl_vars['lang621']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myrequests"><?php echo $_smarty_tpl->tpl_vars['lang629']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders"><?php echo $_smarty_tpl->tpl_vars['lang157']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance"><?php echo $_smarty_tpl->tpl_vars['lang159']->value;?>
</a>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_co_bit2_responsive.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_gigs"><?php echo $_smarty_tpl->tpl_vars['lang156']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new"><?php echo $_smarty_tpl->tpl_vars['lang55']->value;?>
</a></li>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_gigs"><?php echo $_smarty_tpl->tpl_vars['lang153']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_orders"><?php echo $_smarty_tpl->tpl_vars['lang154']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->tpl_vars['lang155']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/purchases"><?php echo $_smarty_tpl->tpl_vars['lang461']->value;?>
</a>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_co_bit1_responsive.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/requests"><?php echo $_smarty_tpl->tpl_vars['lang632']->value;?>
</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_SESSION['USERNAME'])),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->tpl_vars['lang29']->value;?>
</a>
        <?php if ($_smarty_tpl->tpl_vars['enable_ref']->value == "1") {?><a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myreferrals"><?php echo $_smarty_tpl->tpl_vars['lang512']->value;?>
</a><?php }?>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bookmarks"><?php echo $_smarty_tpl->tpl_vars['lang30']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/settings"><?php echo $_smarty_tpl->tpl_vars['lang31']->value;?>
</a>
        <a class="scriptolutionfiverrscriptitem" href="javascript:loadContent('#loadme', '<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/log_out');"><?php echo $_smarty_tpl->tpl_vars['lang27']->value;?>
</a>
        <?php } else { ?>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['lang0']->value;?>
</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login"><?php echo $_smarty_tpl->tpl_vars['lang2']->value;?>
</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem join" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/signup"><?php echo $_smarty_tpl->tpl_vars['lang1']->value;?>
</a>
        <?php }?>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['scriptolutionhome']->value == "1") {
if ($_SESSION['USERID'] == '') {?>
<div class="banner">
    <div class="centerwrap relative">
    	<div class="bannertext">
        	<h2><?php echo $_smarty_tpl->tpl_vars['lang104']->value;?>
</h2>
            <h2><?php echo $_smarty_tpl->tpl_vars['lang102']->value;?>
</h2>
            <div class="find-service">                
                <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/search" method="get">
                <input name="query" type="text" placeholder="What do you need for Filming?" class="findbox"/>
                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang556']->value;?>
" class="findbtn"/>
                </form>
                <div class="clear"></div>
            </div>
            <p><a class='inline' href="#inline1" title="<?php echo $_smarty_tpl->tpl_vars['lang419']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang419']->value;?>
</a></p>
            <div class="topnavbg"></div>
        </div>
        <div class="scriptolutionmobilecats">
            <div class="btn-list-space">
                <select class="btn outline-only white" onchange="javascript:location.href = this.value;">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['lang524']->value;?>
</option>
                    <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                    <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
</option>
                    <?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']),$_smarty_tpl), true);?>
                    <?php if (count($_smarty_tpl->tpl_vars['subcat']->value) > "0") {?>
                        <?php
$__section_sc_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sc']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc'] : false;
$__section_sc_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['subcat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sc_3_total = $__section_sc_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = new Smarty_Variable(array());
if ($__section_sc_3_total != 0) {
for ($__section_sc_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] = 0; $__section_sc_3_iteration <= $__section_sc_3_total; $__section_sc_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']++){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['seo']);?>
">- <?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['name']);?>
</option>
                        <?php
}
}
if ($__section_sc_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = $__section_sc_3_saved;
}
?>
                    <?php }?>
                    <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                </select>
            </div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_colorbox2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else { ?>
		<div class="scriptolutionmobilecats">
            <div class="btn-list-space <?php if ($_SESSION['USERID'] != '') {?>scriptolutionaddwhitebg<?php }?>">
                <select class="btn outline-only white" onchange="javascript:location.href = this.value;">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['lang524']->value;?>
</option>
                    <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                    <?php
$__section_i_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total != 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
</option>
                    <?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']),$_smarty_tpl), true);?>
                    <?php if (count($_smarty_tpl->tpl_vars['subcat']->value) > "0") {?>
                        <?php
$__section_sc_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sc']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc'] : false;
$__section_sc_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['subcat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sc_5_total = $__section_sc_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = new Smarty_Variable(array());
if ($__section_sc_5_total != 0) {
for ($__section_sc_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] = 0; $__section_sc_5_iteration <= $__section_sc_5_total; $__section_sc_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']++){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['seo']);?>
">- <?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['name']);?>
</option>
                        <?php
}
}
if ($__section_sc_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = $__section_sc_5_saved;
}
?>
                    <?php }?>
                    <?php
}
}
if ($__section_i_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_4_saved;
}
?>
                </select>
            </div>
            <div class="scriptolution60"></div>
        </div>
<?php }
}
}
}
