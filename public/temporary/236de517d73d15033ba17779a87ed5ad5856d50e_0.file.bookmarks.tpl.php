<?php
/* Smarty version 3.1.29, created on 2020-02-24 08:23:09
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/bookmarks.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53ce3d1514e2_98133005',
  'file_dependency' => 
  array (
    '236de517d73d15033ba17779a87ed5ad5856d50e' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/bookmarks.tpl',
      1 => 1577430540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:scriptolution_bit_last3_my.tpl' => 1,
    'file:scriptolution_newside.tpl' => 1,
  ),
),false)) {
function content_5e53ce3d1514e2_98133005 ($_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/mainscriptolution.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.corner.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/indexes.js" type="text/javascript"><?php echo '</script'; ?>
> 

<style>
.songslist h1 {
  float: left;
  width: 100%;
  font-size: 39px;
  font-family: 'latobold', sans-serif;
  color: #424242;
  margin-bottom: 15px;
}
</style>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15 scriptolutionbookmarks">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">

                <div class="songslist">
                    <h1><?php echo $_smarty_tpl->tpl_vars['lang30']->value;?>
</h1>
                    <div class="cusongslist">
                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_last3_my.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
                        <div class="clear"></div>
                    </div>
                    <div align="center">
                        <div class="paging">
                            <div class="p1">
                                <ul>
                                    <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear" style="padding-bottom:20px;"></div>
                </div>
  
			</div>
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_newside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>    
	</div>
</div><?php }
}
