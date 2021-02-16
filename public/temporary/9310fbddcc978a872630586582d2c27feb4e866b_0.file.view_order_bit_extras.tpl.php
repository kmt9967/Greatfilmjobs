<?php
/* Smarty version 3.1.29, created on 2020-03-06 01:06:18
  from "/home4/o8txizzi/public_html/themes/view_order_bit_extras.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e61e85aacd3a5_61853245',
  'file_dependency' => 
  array (
    '9310fbddcc978a872630586582d2c27feb4e866b' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/view_order_bit_extras.tpl',
      1 => 1583474775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e61e85aacd3a5_61853245 ($_smarty_tpl) {
if ($_SESSION['USERID'] == $_smarty_tpl->tpl_vars['p']->value['USERID']) {?>   
<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit?id=<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" class="hugeGreenBtn hoverMe 11111"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang141']->value, 'UTF-8');?>
</a>
<?php } elseif ($_SESSION['USERID'] > "0") {?>
<a onclick="document.newextform.submit();" href="#" class="hugeGreenBtn hoverMe 22222">
    <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['p']->value['price']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['p']->value['price']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
    <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang107']->value, 'UTF-8');?>
 (<?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {?><span id="newordext"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);?>
</span><?php echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];?>
<span id="newordext"><?php echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);?>
</span><?php }?>)</a>
<?php } else { ?>
<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login?r=<?php $_smarty_tpl->assign('rurl' , insert_get_redirect (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['p']->value['PID'], 'seo' => $_smarty_tpl->tpl_vars['p']->value['seo'], 'gtitle' => $_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl), true);
echo stripslashes($_smarty_tpl->tpl_vars['rurl']->value);?>
" class="hugeGreenBtn hoverMe 33333"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang107']->value, 'UTF-8');?>
</a>
<?php }
if ($_smarty_tpl->tpl_vars['p']->value['scriptolutionhasextras'] == "1") {
$_smarty_tpl->assign('extras' , insert_get_extras (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['p']->value['PID']),$_smarty_tpl), true);
if (count($_smarty_tpl->tpl_vars['extras']->value) > 0) {?>
	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['extras']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>	
    <input type="hidden" id="newe<?php echo $_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['EID'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eprice'];?>
" />
    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>	
    
    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
    function newtoggleextras() 
    {	
        var newetotal = <?php echo $_smarty_tpl->tpl_vars['p']->value['price'];?>
;
        $('#newextrachecks :checked').each(function() 
        {
            var newtemper = $(this).val();
            var newtemped = $('#newe'+newtemper).val();
            newetotal += parseInt(newtemped);		
        });
        $('#newordext').html(newetotal);
    }
    <?php echo '</script'; ?>
>
    
    <div class="order-extras" id="newextrachecks">
    <small>* <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lange4']->value, 'UTF-8');?>
</small>
    <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orderextras.php" method="post" name="newextform" id="newextform">
        <ul class="order-extras-list">
            <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['extras']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <li>
                <input onclick="newtoggleextras();" name="gextras[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['EID'];?>
" />
                <span class="desc">
                    <?php echo stripslashes($_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['etitle']);?>

                </span>
                <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eprice']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = true;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['extras']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['eprice']*$_SESSION['cur'], true);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {?>
                <span class="right">+<?php echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];?>
</span>
                <?php } else { ?>
                <span class="right">+<?php echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);?>
</span>
                <?php }?>
            </li>
            <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
            <input name="EPID" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['p']->value['PID'];?>
" />        
        </ul>
    </form>
    </div>
<?php }
}
}
}
