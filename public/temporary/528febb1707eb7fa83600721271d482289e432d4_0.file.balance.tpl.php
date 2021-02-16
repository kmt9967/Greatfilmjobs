<?php
/* Smarty version 3.1.29, created on 2020-05-12 01:09:05
  from "/home4/o8txizzi/public_html/dev/themes/balance.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eba2f71519154_73941827',
  'file_dependency' => 
  array (
    '528febb1707eb7fa83600721271d482289e432d4' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/balance.tpl',
      1 => 1583474775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:scriptolution_newside.tpl' => 1,
  ),
),false)) {
function content_5eba2f71519154_73941827 ($_smarty_tpl) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.corner.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/balance.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
                    <h1><?php echo $_smarty_tpl->tpl_vars['lang33']->value;?>
</h1>
                    <h4><?php echo $_smarty_tpl->tpl_vars['lang206']->value;?>
</h4>
                    
                    <div class="whiteBox inside" style="margin-bottom: 15px;">
						<div style="font-size: 20px; font-family: 'latobold', sans-serif; color: #444444;">
							<?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['funds']->value*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['funds']->value*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
						<?php echo $_smarty_tpl->tpl_vars['lang205']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?></div>
					</div>					
                    
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang110']->value;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
									<td><?php echo $_smarty_tpl->tpl_vars['lang389']->value;?>
</td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->tpl_vars['o']->value) == "0") {?>
                            <tr>
                                <td colspan="5">
                                <?php echo $_smarty_tpl->tpl_vars['lang210']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['lang211']->value;?>
</a>
                                </td>
                            </tr>
                            <?php } else { ?>
                            	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['o']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <?php $_smarty_tpl->assign('gtitle' , insert_get_gtitle (array('value' => 'a', 'oid' => $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID']),$_smarty_tpl), true);?>
								<tr>
									<td class="status-star">
                                    	<?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']),$_smarty_tpl);?>

									</td>
                                    <td>
                                    	<?php if ($_smarty_tpl->tpl_vars['gtitle']->value == '') {?>#<?php echo $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];
} else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
">#<?php echo $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
</a><?php }?>
                                    </td>
									<td class="ellipsis-wrap">
										<div class="ellipsis"> 
                                        	<?php if ($_smarty_tpl->tpl_vars['gtitle']->value == '') {
echo $_smarty_tpl->tpl_vars['lang384']->value;
} else {
echo stripslashes($_smarty_tpl->tpl_vars['gtitle']->value);
}?>
										</div>
									</td>
									<?php if ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['t'] == "1") {?>
									<?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                    <td class="status payment" title="<?php echo $_smarty_tpl->tpl_vars['lang385']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf('%d',$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf('%d',$_smarty_tpl->tpl_vars['price']->value);
}?>"><div><?php echo $_smarty_tpl->tpl_vars['lang387']->value;?>
</div></td>
                                    <?php } else { ?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                    <td class="status reversal" title="<?php echo $_smarty_tpl->tpl_vars['lang386']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?>"><div><?php echo $_smarty_tpl->tpl_vars['lang388']->value;?>
</div></td> 
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['scriptolution_enable_processing_fee']->value == "1") {?>
                                    	<?php if ($_smarty_tpl->tpl_vars['scriptolution_totalwfees3']->value != "0.00") {?>
                                        <td>
                                        	<?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_totalwfees3']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_totalwfees3']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?></td> 
                                        <?php } else { ?>
                                        <td>
                                        	<?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?></td> 
                                        <?php }?>
                                    <?php } else { ?>
                                    <td>
                                    	<?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                    <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?></td>                          
                                    <?php }?>
								</tr>
                                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
							<?php }?>
							</tbody>
						</table>
					</div>
					<div class="clear"></div>				
				</div>
			</div>
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_newside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>    
	</div>
</div>
       <?php }
}
