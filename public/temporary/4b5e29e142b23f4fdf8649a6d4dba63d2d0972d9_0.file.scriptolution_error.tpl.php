<?php
/* Smarty version 3.1.29, created on 2020-03-02 10:37:32
  from "/home4/o8txizzi/public_html/themes/scriptolution_error.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d283ca9b3d0_24207753',
  'file_dependency' => 
  array (
    '4b5e29e142b23f4fdf8649a6d4dba63d2d0972d9' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/scriptolution_error.tpl',
      1 => 1577430527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5d283ca9b3d0_24207753 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
<div class='flash_error'>
	<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
<div class='flash_notice'>
    <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
</div>
<?php }
}
}
