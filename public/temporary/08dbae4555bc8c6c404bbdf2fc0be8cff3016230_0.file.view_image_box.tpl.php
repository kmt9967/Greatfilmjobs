<?php
/* Smarty version 3.1.29, created on 2020-05-04 06:07:14
  from "/home4/o8txizzi/public_html/dev/themes/view_image_box.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eafe952944a26_97950999',
  'file_dependency' => 
  array (
    '08dbae4555bc8c6c404bbdf2fc0be8cff3016230' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/view_image_box.tpl',
      1 => 1577430519,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:view_vjs.tpl' => 1,
  ),
),false)) {
function content_5eafe952944a26_97950999 ($_smarty_tpl) {
?>
<ul id="carousel">
	<?php if ($_smarty_tpl->tpl_vars['p']->value['youtube'] != '') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:view_vjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
    <li class="carouselItem">
        <div class="carouselImage"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t3/<?php echo $_smarty_tpl->tpl_vars['p']->value['p1'];?>
?<?php echo time();?>
" width="678" height="458" /></div>
    </li>
    <?php if ($_smarty_tpl->tpl_vars['p']->value['p2'] != '') {?>
    <li class="carouselItem">
        <div class="carouselImage"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t3/<?php echo $_smarty_tpl->tpl_vars['p']->value['p2'];?>
?<?php echo time();?>
" width="678" height="458" /></div>
    </li>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['p']->value['p3'] != '') {?>
    <li class="carouselItem">
        <div class="carouselImage"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t3/<?php echo $_smarty_tpl->tpl_vars['p']->value['p3'];?>
?<?php echo time();?>
" width="678" height="458" /></div>
    </li>
    <?php }?>
</ul>
<?php }
}
