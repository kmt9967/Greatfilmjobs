<?php
/* Smarty version 3.1.29, created on 2020-02-24 08:24:12
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/log_out.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53ce7cc41f21_09456015',
  'file_dependency' => 
  array (
    'e6d5d7622622199f9b949cdf220be0d7fa41532e' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/log_out.tpl',
      1 => 1577430523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53ce7cc41f21_09456015 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml"> 
<head>
</head>

<body>

<div id="fb-root"></div>
<?php if ($_smarty_tpl->tpl_vars['enable_fc']->value == "1" && $_SESSION['FB'] == "1") {?>

<?php echo '<script'; ?>
 src="http://connect.facebook.net/en_US/all.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  FB.init({appId: '<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
', status: true,
           cookie: true, xfbml: true});	 
  FB.logout(function(response) {
	window.location = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/logout"
  });
  
<?php echo '</script'; ?>
>

<?php } else { ?>

<?php echo '<script'; ?>
>
	window.location = "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/logout"  
<?php echo '</script'; ?>
>

<?php }?>

</body>
</html><?php }
}
