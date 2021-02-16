<?php
/* Smarty version 3.1.29, created on 2020-03-20 08:57:36
  from "/home4/o8txizzi/public_html/dev/themes/administrator/gigs_extras_bit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e74bdc0ef9203_22639515',
  'file_dependency' => 
  array (
    '96179583e4b727356561ecad4a879e6cb7d484de' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/gigs_extras_bit.tpl',
      1 => 1583474775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e74bdc0ef9203_22639515 ($_smarty_tpl) {
$_smarty_tpl->assign('extras' , insert_get_extras (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['subresults']->value['PID']),$_smarty_tpl), true);
if (count($_smarty_tpl->tpl_vars['extras']->value) > 0) {?>
<br /><b>THIS GIG HAS THE FOLLOWING EXTRAS: </b>
<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['extras']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
<br />- <?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etitle']);?>
 <?php echo $_smarty_tpl->tpl_vars['lange1']->value;?>
 <?php echo $_SESSION['csyumbol'];
echo stripslashes($_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eprice']);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/scriptolution_edit_extra.php?EID=<?php echo $_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['EID'];?>
">[EDIT]</a>
<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>	
<?php }
}
}
