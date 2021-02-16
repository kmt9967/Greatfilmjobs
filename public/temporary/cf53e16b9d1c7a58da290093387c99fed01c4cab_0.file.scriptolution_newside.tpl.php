<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:23:42
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_newside.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c04ece5380_57758678',
  'file_dependency' => 
  array (
    'cf53e16b9d1c7a58da290093387c99fed01c4cab' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_newside.tpl',
      1 => 1577430515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_newside_co.tpl' => 1,
    'file:scriptolution_co_side_bit.tpl' => 1,
  ),
),false)) {
function content_5e53c04ece5380_57758678 ($_smarty_tpl) {
?>
<div class="right-side">
    <div class="sidebarBlock">
        <h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang577']->value, 'UTF-8');?>
</h3>
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new" class="greenBtn"><span><?php echo $_smarty_tpl->tpl_vars['lang55']->value;?>
</span></a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/newrequest" class="greenBtn"><span><?php echo $_smarty_tpl->tpl_vars['lang621']->value;?>
</span></a></li>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_newside_co.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </ul>
    </div>
    <?php if ($_SESSION['USERID'] > "0") {?>
    <div class="sidebarBlock">
        <h2><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang158']->value, 'UTF-8');?>
</h2>
        <ul>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myrequests"><?php echo $_smarty_tpl->tpl_vars['lang629']->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders"><?php echo $_smarty_tpl->tpl_vars['lang157']->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance"><?php echo $_smarty_tpl->tpl_vars['lang159']->value;?>
</a></li>
        </ul>
    </div>
    <div class="sidebarBlock">
        <h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang156']->value, 'UTF-8');?>
</h3>
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_gigs"><?php echo $_smarty_tpl->tpl_vars['lang153']->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_orders"><?php echo $_smarty_tpl->tpl_vars['lang154']->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/balance?tab=sales"><?php echo $_smarty_tpl->tpl_vars['lang155']->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/purchases"><?php echo $_smarty_tpl->tpl_vars['lang461']->value;?>
</a></li>
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_co_side_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/requests"><?php echo $_smarty_tpl->tpl_vars['lang632']->value;?>
</a></li>
        </ul>
    </div>
    <?php }?>
    <div class="sidebarBlock noBorder">
        <h3><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang29']->value, 'UTF-8');?>
</h3>
        <ul>
            <?php if ($_smarty_tpl->tpl_vars['enable_ref']->value == "1") {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myreferrals"><?php echo $_smarty_tpl->tpl_vars['lang512']->value;?>
</a></li><?php }?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bookmarks"><?php echo $_smarty_tpl->tpl_vars['lang30']->value;?>
</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/settings"><?php echo $_smarty_tpl->tpl_vars['lang31']->value;?>
</a></li>
        </ul>
    </div>	
</div><?php }
}
