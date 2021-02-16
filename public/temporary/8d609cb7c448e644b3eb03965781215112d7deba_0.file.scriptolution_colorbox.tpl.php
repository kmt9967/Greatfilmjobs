<?php
/* Smarty version 3.1.29, created on 2020-03-06 06:03:11
  from "/home4/o8txizzi/public_html/dev/themes/scriptolution_colorbox.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e622def57f049_57907210',
  'file_dependency' => 
  array (
    '8d609cb7c448e644b3eb03965781215112d7deba' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/scriptolution_colorbox.tpl',
      1 => 1577430517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e622def57f049_57907210 ($_smarty_tpl) {
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
