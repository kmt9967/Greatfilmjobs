<?php
/* Smarty version 3.1.29, created on 2020-02-24 05:50:39
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_error7.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53aa7f542f35_39675246',
  'file_dependency' => 
  array (
    '9336a4aa0f9df9fcbf6037e02d5a026c993f5381' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_error7.tpl',
      1 => 1577430525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53aa7f542f35_39675246 ($_smarty_tpl) {
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
