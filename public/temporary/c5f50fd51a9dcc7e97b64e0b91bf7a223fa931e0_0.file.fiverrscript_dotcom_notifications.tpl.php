<?php
/* Smarty version 3.1.29, created on 2020-02-24 00:59:06
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/fiverrscript_dotcom_notifications.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53662a760fe9_79807839',
  'file_dependency' => 
  array (
    'c5f50fd51a9dcc7e97b64e0b91bf7a223fa931e0' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/fiverrscript_dotcom_notifications.tpl',
      1 => 1577430524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53662a760fe9_79807839 ($_smarty_tpl) {
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
