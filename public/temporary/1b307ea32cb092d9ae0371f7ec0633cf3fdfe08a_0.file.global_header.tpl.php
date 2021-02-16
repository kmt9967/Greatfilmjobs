<?php
/* Smarty version 3.1.29, created on 2020-05-06 09:22:20
  from "/home4/o8txizzi/public_html/dev/themes/administrator/global_header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eb2ba0c433663_63250097',
  'file_dependency' => 
  array (
    '1b307ea32cb092d9ae0371f7ec0633cf3fdfe08a' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/global_header.tpl',
      1 => 1588770916,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/global_header_scriptolution1.tpl' => 1,
    'file:administrator/global_header_scriptolutionlb.tpl' => 1,
  ),
),false)) {
function content_5eb2ba0c433663_63250097 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.date_format.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Admin Panel - <?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php echo '<script'; ?>
 type="text/javascript">
        var BLANK_URL = '<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/js/blank.html';
        var BLANK_IMG = '<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/js/spacer.gif';
        var BASE_URL = '<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/index.php';
        var SKIN_URL = '<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/js/';
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/js/prototype.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/js/events.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/js/tabs.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/js/tools.js" type="text/javascript"><?php echo '</script'; ?>
>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/reset.css" media="all"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/boxes.php" media="all"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/menu.php" media="screen, projection"></link>
    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/iestyles.css" media="all"></link>
    <![endif]-->
    <!--[if lt IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/below_ie7.css" media="all"></link>
    <![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/ie7.php" media="all"></link>
    <![endif]-->
</head>

<body id="html-body">

	<div class="wrapper">
        <div class="header">
        
            <div class="header-top">
    			<a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/home.php"><img src="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/images/logo.png" alt="Logo" class="logo"/></a>
    			<div class="header-right">
                    <p class="super">
                        Logged in as <?php echo $_SESSION['ADMINUSERNAME'];?>
<span class="separator">|</span><?php echo smarty_modifier_date_format(time(),"%A, %B %e, %Y");?>
<span class="separator">|</span><a href="logout.php" class="link-logout">Log Out</a>
                    </p>
            	</div>
			</div>
            
        	<div class="clear"></div>

            <div class="nav-bar">
            	<ul id="nav">
                	<li  class="  <?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == '' || $_smarty_tpl->tpl_vars['mainmenu']->value == "1") {?>active<?php }?>  level0"> <a href="home.php" class="active"><span>Home</span></a></li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "2") {?>active<?php }?> parent level0"> <a href="#" onclick="return false" class=""><span>Settings</span></a>
                    	<ul >
                    		<li  class="   level1"> <a href="settings_general.php" class=""><span>General Settings</span></a></li>
                    		<li  class="   level1"> <a href="settings_meta.php"   class=""><span>Meta Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_static.php"   class=""><span>Static Pages</span></a></li>
                            <li  class="   level1"> <a href="settings_payment.php"   class=""><span>Payment Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_packs.php"   class=""><span>Payment Packs</span></a></li>
                            <li  class="   level1"> <a href="settings_levels.php"   class=""><span>Job Levels Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_paypal.php"   class=""><span>PayPal Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_cashfree.php"   class=""><span>Cashfree Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_scriptolution_stripe.php"   class=""><span>Stripe Settings</span></a></li>
                            <li  class="   level1"> <a href="settings_alertpay.php"   class=""><span>Payza Settings</span></a></li>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/global_header_scriptolution1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <li  class="   last level1"> <a href="settings_referrals.php"   class=""><span>Referral Settings</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "3") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Categories</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="cat_manage.php"   class=""><span>Manage Categories</span></a></li>
                            <li  class="   last level1"> <a href="cat_add.php"   class=""><span>Add Category</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "4") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Gigs</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="gigs_manage.php"   class=""><span>Manage Gigs</span></a></li>
                            <li  class="   level1"> <a href="gigs_validate.php"   class=""><span>Validate Gigs</span></a></li>
                            <li  class="   last level1"> <a href="gigs_deleted.php"   class=""><span>Deleted Gigs</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "5") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Orders</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="orders_manage.php"   class=""><span>Manage Orders</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "6") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Payments</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="payments_manage.php"   class=""><span>Manage Payments</span></a></li>
                            <li  class="   level1"> <a href="payments_featured.php"   class=""><span>Feature Gig Payments</span></a></li>
                            <li  class="   last level1"> <a href="payments_clear.php"   class=""><span>Clear Payments</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "8") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Withdrawals</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="wd_validate.php"   class=""><span>Validate Withdrawals</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "9") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Requests</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="requests_manage.php"   class=""><span>Manage Requests</span></a></li>
                            <li  class="   last level1"> <a href="requests_validate.php"   class=""><span>Validate Requests</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "7") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Members</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="members_manage.php"   class=""><span>Manage Members</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "10") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Reports</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="reports_messages.php"   class=""><span>Reported Messages</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "14") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Conversations</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="conversations_manage.php"   class=""><span>Manage Conversations</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "15") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Feedback</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="feedback_manage.php"   class=""><span>Manage Feedback</span></a></li>
                            <li  class="   last level1"> <a href="feedback_add.php"   class=""><span>Add Fake Feedback</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "11") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Ads</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="ads_manage.php"   class=""><span>Standard Ads</span></a></li>
                            <li  class="   last level1"> <a href="ads_create.php"   class=""><span>Create Standard Ad</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "13") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Bans</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="bans_ip.php"   class=""><span>IP Banning</span></a></li>
                            <li  class="   level1"> <a href="bans_ip_add.php"   class=""><span>Add IP</span></a></li>
                            <li  class="   level1"> <a href="bans_words.php"   class=""><span>Banned Words</span></a></li>
                            <li  class="   last level1"> <a href="bans_words_add.php"   class=""><span>Add Word</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "16") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Files</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="files.php"   class=""><span>All Files</span></a></li>
                            <li  class="   level1"> <a href="files_manage.php"   class=""><span>Conversation Files</span></a></li>
                            <li  class="   last level1"> <a href="files_orders.php"   class=""><span>Order Files</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "17") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Referrals</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="referrals_manage.php"   class=""><span>Manage Referrals</span></a></li>
                            <li  class="   last level1"> <a href="referrals_validate.php"   class=""><span>Validate Referrals</span></a></li>
                        </ul>
                    </li>
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "18") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Launch</span></a>
                    	<ul >
                            <li  class="   last level1"> <a href="invites.php"   class=""><span>Requested Invites</span></a></li>
                        </ul>
                    </li>
					<li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "12") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Admins</span></a>
                    	<ul >
                            <li  class="   level1"> <a href="admins_manage.php"   class=""><span>Manage Administrators</span></a></li>
                            <li  class="   last level1"> <a href="admins_create.php"   class=""><span>Create Administrator</span></a></li>
                        </ul>
                    </li>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/global_header_scriptolutionlb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    
                    <li onmouseover="Element.addClassName(this,'over')" onmouseout="Element.removeClassName(this,'over')" class="<?php if ($_smarty_tpl->tpl_vars['mainmenu']->value == "22") {?>active<?php }?>   parent level0"> <a href="#"  onclick="return false" class=""><span>Local Bank</span></a>
		    	<ul >
		    		<li  class="   level1"> <a href="local_settings.php"   class=""><span>Local Bank Settings</span></a></li>
		    		<li  class="   last level1"> <a href="local_validate.php"   class=""><span>Validate Local Payments</span></a></li>
		    	</ul>
</li>
                    
                </ul>
			</div>
        </div>
		
        <?php global $config; echo @file_get_contents("http://www.scriptolution.com/updates/fiver/index.php?v=".$config['ver']);
}
}
