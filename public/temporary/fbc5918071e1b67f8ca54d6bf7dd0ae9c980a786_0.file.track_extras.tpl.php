<?php
/* Smarty version 3.1.29, created on 2020-03-19 09:51:47
  from "/home4/o8txizzi/public_html/dev/themes/track_extras.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e7378f3e155b1_32611776',
  'file_dependency' => 
  array (
    'fbc5918071e1b67f8ca54d6bf7dd0ae9c980a786' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/track_extras.tpl',
      1 => 1577430509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e7378f3e155b1_32611776 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['o']->value['IID'] > "0") {
$_smarty_tpl->assign('etas' , insert_get_extras_track (array('value' => 'a', 'OID' => $_smarty_tpl->tpl_vars['o']->value['OID']),$_smarty_tpl), true);
if ($_smarty_tpl->tpl_vars['etas']->value[0]['EID'] > "0" || $_smarty_tpl->tpl_vars['etas']->value[0]['EID2'] > "0" || $_smarty_tpl->tpl_vars['etas']->value[0]['EID3'] > "0") {?>
<b><?php echo $_smarty_tpl->tpl_vars['lange5']->value;?>
:</b>
<?php if ($_smarty_tpl->tpl_vars['etas']->value[0]['EID'] > "0") {
$_smarty_tpl->assign('ename' , insert_get_extra (array('value' => 'a', 'EID' => $_smarty_tpl->tpl_vars['etas']->value[0]['EID']),$_smarty_tpl), true);?>
<span><p>- <?php echo stripslashes($_smarty_tpl->tpl_vars['ename']->value);?>
</p></span>
<?php }
if ($_smarty_tpl->tpl_vars['etas']->value[0]['EID2'] > "0") {
$_smarty_tpl->assign('ename' , insert_get_extra (array('value' => 'a', 'EID' => $_smarty_tpl->tpl_vars['etas']->value[0]['EID2']),$_smarty_tpl), true);?>
<span><p>- <?php echo stripslashes($_smarty_tpl->tpl_vars['ename']->value);?>
</p></span>
<?php }
if ($_smarty_tpl->tpl_vars['etas']->value[0]['EID3'] > "0") {
$_smarty_tpl->assign('ename' , insert_get_extra (array('value' => 'a', 'EID' => $_smarty_tpl->tpl_vars['etas']->value[0]['EID3']),$_smarty_tpl), true);?>
<span><p>- <?php echo stripslashes($_smarty_tpl->tpl_vars['ename']->value);?>
</p></span>
<?php }
}
}
}
}
