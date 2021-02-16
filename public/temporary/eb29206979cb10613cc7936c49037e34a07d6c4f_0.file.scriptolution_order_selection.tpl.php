<?php
/* Smarty version 3.1.29, created on 2020-05-04 06:07:14
  from "/home4/o8txizzi/public_html/dev/themes/scriptolution_order_selection.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eafe952a33121_76062497',
  'file_dependency' => 
  array (
    'eb29206979cb10613cc7936c49037e34a07d6c4f' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/scriptolution_order_selection.tpl',
      1 => 1577430511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view_order_bit_ship.tpl' => 1,
    'file:view_order_bit_extras.tpl' => 1,
    'file:view_order_bit.tpl' => 1,
  ),
),false)) {
function content_5eafe952a33121_76062497 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['p']->value['price2'] > "0") {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_order_bit_ship.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['p']->value['scriptolutionhasextras'] == "1") {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_order_bit_extras.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php } else {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_order_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
