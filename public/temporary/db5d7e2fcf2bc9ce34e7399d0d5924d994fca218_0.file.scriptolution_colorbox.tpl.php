<?php
/* Smarty version 3.1.29, created on 2020-02-24 00:59:06
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_colorbox.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53662a684853_90339481',
  'file_dependency' => 
  array (
    'db5d7e2fcf2bc9ce34e7399d0d5924d994fca218' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_colorbox.tpl',
      1 => 1577430517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53662a684853_90339481 ($_smarty_tpl) {
?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/colorbox/colorbox.css" />
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/colorbox/jquery.colorbox.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
		$(document).ready(function(){
			sQuery(".inline").colorbox({inline:true, width:"400px"});
		});
	<?php echo '</script'; ?>
>
    <?php }
}
