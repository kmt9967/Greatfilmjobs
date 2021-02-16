<?php
/* Smarty version 3.1.29, created on 2020-02-24 00:59:06
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_tooltip.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53662a68a762_37557852',
  'file_dependency' => 
  array (
    'c28bb44ccbe9e5dd8ba1de45a143de3fd4f876d7' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_tooltip.tpl',
      1 => 1577430539,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53662a68a762_37557852 ($_smarty_tpl) {
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
