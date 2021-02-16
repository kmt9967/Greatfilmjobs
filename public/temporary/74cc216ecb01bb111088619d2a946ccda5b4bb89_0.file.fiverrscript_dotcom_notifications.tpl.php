<?php
/* Smarty version 3.1.29, created on 2020-03-02 09:24:16
  from "/home4/o8txizzi/public_html/themes/fiverrscript_dotcom_notifications.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d171030cba0_74991832',
  'file_dependency' => 
  array (
    '74cc216ecb01bb111088619d2a946ccda5b4bb89' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/fiverrscript_dotcom_notifications.tpl',
      1 => 1577430524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d171030cba0_74991832 ($_smarty_tpl) {
if ($_SESSION['USERID'] != '') {?>

<?php echo '<script'; ?>
>
$(document).click(function(e){
	if(e.target.id != 'scriptolution-master'){
   if($(e.target).closest('#scriptolution-notifications-popup').length != 0) return false;
   $('#scriptolution-notifications-popup').hide();
	}
});
$("#scriptolution-notifications-popup").click(function(e){
  e.stopPropagation();
});
<?php echo '</script'; ?>
>

<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolution_notifications.css" media="screen" rel="stylesheet" type="text/css" />  
<?php }
}
}
