<?php
/* Smarty version 3.1.29, created on 2020-03-19 09:43:08
  from "/home4/o8txizzi/public_html/dev/themes/scriptolution_error7.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e7376ecd874a7_59565591',
  'file_dependency' => 
  array (
    '77ac395ea31c2153efbfa92ec245ec60edcabf87' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/scriptolution_error7.tpl',
      1 => 1577430525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7376ecd874a7_59565591 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
<div class='scriptolution_error'>
	<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
<div class='scriptolution_success'>
    <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
</div>
<?php }
if ($_smarty_tpl->tpl_vars['snotice']->value != '') {?>
<div class='scriptolution_notice'>
    <p><?php echo $_smarty_tpl->tpl_vars['snotice']->value;?>
</p>
</div>
<?php }
}
}
