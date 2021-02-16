<?php
/* Smarty version 3.1.29, created on 2020-03-06 06:03:11
  from "/home4/o8txizzi/public_html/dev/themes/scriptolution_tooltip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e622def582311_36311693',
  'file_dependency' => 
  array (
    '326a6c26817f1099b3897dca9c417b956251fddc' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/scriptolution_tooltip.tpl',
      1 => 1577430539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e622def582311_36311693 ($_smarty_tpl) {
?>
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/tooltipster.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.tooltipster.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
>
        sQuery(document).ready(function() {
            sQuery('.tooltip').tooltipster();
        });
		sQuery.fn.tooltipster('setDefaults', {
		  position: 'bottom',
		  animation: 'fade',
		   delay: 200,
		   theme: 'tooltipster-scriptolution',
		   touchDevices: false,
		   trigger: 'hover'
		});		

    <?php echo '</script'; ?>
>
    <?php }
}
