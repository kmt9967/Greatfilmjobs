<?php
/* Smarty version 3.1.29, created on 2020-03-19 09:52:30
  from "/home4/o8txizzi/public_html/dev/themes/track_files.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e73791ef1bce8_97230297',
  'file_dependency' => 
  array (
    '409b1d7585698939cf1c87d9ace2f5ba02b32de8' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/track_files.tpl',
      1 => 1577430533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e73791ef1bce8_97230297 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['scriptolutionfileinfo']->value['FID'] > "0") {
$_smarty_tpl->assign('fd' , insert_file_details (array('value' => 'a', 'fid' => $_smarty_tpl->tpl_vars['scriptolutionfileinfo']->value['FID']),$_smarty_tpl), true);
$__section_x_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_x']) ? $_smarty_tpl->tpl_vars['__smarty_section_x'] : false;
$__section_x_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['fd']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_x_0_total = $__section_x_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_x'] = new Smarty_Variable(array());
if ($__section_x_0_total != 0) {
for ($__section_x_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] = 0; $__section_x_0_iteration <= $__section_x_0_total; $__section_x_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']++){
$_smarty_tpl->assign('afs' , insert_gfs (array('value' => 'a', 'fid' => $_smarty_tpl->tpl_vars['fd']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['FID']),$_smarty_tpl), true);?>
<div class="padding5"></div>
<div class="files">
  <ul>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/files/<?php echo md5($_smarty_tpl->tpl_vars['fd']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['FID']);
echo $_smarty_tpl->tpl_vars['fd']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['s'];?>
/<?php echo $_smarty_tpl->tpl_vars['fd']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fname'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['fd']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_x']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_x']->value['index'] : null)]['fname'];?>
 <b>[<?php echo $_smarty_tpl->tpl_vars['afs']->value;?>
]</b></a></li>
  </ul>
</div>
<?php
}
}
if ($__section_x_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_x'] = $__section_x_0_saved;
}
}
}
}
