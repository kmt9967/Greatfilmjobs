<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:27:01
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/view_order_bit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c115860b16_32353006',
  'file_dependency' => 
  array (
    'd1db449e746f4e239ceca0968eca6a8e51c84145' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/view_order_bit.tpl',
      1 => 1577430504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53c115860b16_32353006 ($_smarty_tpl) {
if ($_SESSION['USERID'] == $_smarty_tpl->tpl_vars['p']->value['USERID']) {?>   
<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit?id=<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" class="hugeGreenBtn hoverMe 1"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang141']->value, 'UTF-8');?>
</a>
<?php } elseif ($_SESSION['USERID'] > "0") {?>
<a onclick="document.ordermulti.submit();" href="#" class="hugeGreenBtn hoverMe 2"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang107']->value, 'UTF-8');?>
</a>
<?php } else { ?>
<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login?r=<?php $_smarty_tpl->assign('rurl' , insert_get_redirect (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['p']->value['PID'], 'seo' => $_smarty_tpl->tpl_vars['p']->value['seo'], 'gtitle' => $_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl), true);
echo stripslashes($_smarty_tpl->tpl_vars['rurl']->value);?>
" class="hugeGreenBtn hoverMe 3"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang107']->value, 'UTF-8');?>
</a>
<?php }?>

<?php if ($_SESSION['USERID'] > "0") {?>
    <?php if ($_smarty_tpl->tpl_vars['p']->value['scriptolution_add_multiple'] > "0") {?>
        <?php if ($_SESSION['USERID'] != $_smarty_tpl->tpl_vars['p']->value['USERID']) {?> 
        <div class="order-extras"> 
            <form name="ordermulti" id="ordermulti" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ordering.php" method="post">
            <span class="quantity">
                <?php echo $_smarty_tpl->tpl_vars['lang575']->value;?>
:
                <select class="customDropdown" id="multi" name="multi">
                    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['p']->value['scriptolution_add_multiple']+1) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_start = min(1, $__section_i_0_loop);
$__section_i_0_total = min(($__section_i_0_loop - $__section_i_0_start), $__section_i_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = $__section_i_0_start; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</option>
                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                </select>
            </span>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" />
            </form>
        </div>
        <?php }?>
    <?php } else { ?>
    <form name="ordermulti" id="ordermulti" action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ordering.php" method="post">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" />
    </form>
    <?php }
}?>

<?php }
}
