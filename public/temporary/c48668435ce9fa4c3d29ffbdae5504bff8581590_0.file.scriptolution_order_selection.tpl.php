<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:27:01
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_order_selection.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c115827301_13964606',
  'file_dependency' => 
  array (
    'c48668435ce9fa4c3d29ffbdae5504bff8581590' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_order_selection.tpl',
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
function content_5e53c115827301_13964606 ($_smarty_tpl) {
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
