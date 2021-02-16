<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:24:26
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/orders.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c07a6db747_53484738',
  'file_dependency' => 
  array (
    'caccf69902eeccbe7e88723a21bab24035501e74' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/orders.tpl',
      1 => 1577430541,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:scriptolution_newside.tpl' => 1,
  ),
),false)) {
function content_5e53c07a6db747_53484738 ($_smarty_tpl) {
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
/js/indexes.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1><?php echo $_smarty_tpl->tpl_vars['lang157']->value;?>
</h1>
                    <h4><?php echo $_smarty_tpl->tpl_vars['lang223']->value;?>
</h4>
					<div class="whiteBox inside">
						<div class="block inside">
							<span class="number"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders?s=active&b=<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['countd']->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang190']->value;?>
</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders?s=review&b=<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['countc']->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang224']->value;?>
</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders?s=completed&b=<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['countb']->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang202']->value;?>
</span>
						</div>
						<div class="block inside last">
							<span class="number"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders?s=cancelled&b=<?php echo $_smarty_tpl->tpl_vars['b']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['counta']->value;?>
</a></span>
							<span class="descr"><?php echo $_smarty_tpl->tpl_vars['lang203']->value;?>
</span>
						</div>
					</div>
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td colspan="2" style="text-align:left;"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders?s=<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
&b=id&a=<?php if ($_smarty_tpl->tpl_vars['a']->value == "asc") {?>desc<?php } else { ?>asc<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
</a></td>
									<td><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders?s=<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
&b=date&a=<?php if ($_smarty_tpl->tpl_vars['a']->value == "asc") {?>desc<?php } else { ?>asc<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang360']->value;?>
</a></td>
									<td><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/orders?s<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
=&b=status&a=<?php if ($_smarty_tpl->tpl_vars['a']->value == "asc") {?>desc<?php } else { ?>asc<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang191']->value;?>
</a></td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->tpl_vars['o']->value) == "0") {?>
                            <tr>
                                <td colspan="4">
                                <?php echo $_smarty_tpl->tpl_vars['lang225']->value;?>

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
								<tr>
									<td class="status-star">
                                    	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
">#<?php echo $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
</a>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsis"> 
                                        	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']);?>
</a>
										</div>
									</td>
									<td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time_added']),$_smarty_tpl);?>
</td>
                                    <?php if ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "0") {?>
                                    <td class="status waiting_for_reqs" title="<?php echo $_smarty_tpl->tpl_vars['lang361']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang362']->value;?>
</div></td> 
                                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "1") {?>
                                        <?php $_smarty_tpl->assign('late' , insert_late (array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stime'], 'days' => $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['days']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->tpl_vars['late']->value == "1") {?>
                                        <td class="status late_delivery" title="<?php echo $_smarty_tpl->tpl_vars['lang364']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang363']->value;?>
</div></td>
                                        <?php } else { ?>
                                        <td class="status in_progress" title="<?php echo $_smarty_tpl->tpl_vars['lang366']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang365']->value;?>
</div></td>
                                        <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "2") {?>
                                    <td class="status buyer_cancelled" title="<?php echo $_smarty_tpl->tpl_vars['lang367']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang203']->value;?>
</div></td>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "3") {?>
                                    <td class="status seller_cancelled" title="<?php echo $_smarty_tpl->tpl_vars['lang369']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang368']->value;?>
</div></td>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "4") {?>
                                    <td class="status delivered" title="<?php echo $_smarty_tpl->tpl_vars['lang370']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang201']->value;?>
</div></td>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "5") {?>
                                    <td class="status completed" title="<?php echo $_smarty_tpl->tpl_vars['lang371']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang202']->value;?>
</div></td>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "6") {?>
                                        <?php $_smarty_tpl->assign('late' , insert_late (array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['stime'], 'days' => $_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['days']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->tpl_vars['late']->value == "1") {?>
                                        <td class="status late_delivery" title="<?php echo $_smarty_tpl->tpl_vars['lang364']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang363']->value;?>
</div></td>
                                        <?php } else { ?>
                                        <td class="status dispute" title="<?php echo $_smarty_tpl->tpl_vars['lang372']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang320']->value;?>
</div></td>
                                        <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['o']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['status'] == "7") {?>
                                    <td class="status buyer_cancelled" title="<?php echo $_smarty_tpl->tpl_vars['lang374']->value;?>
"><div><?php echo $_smarty_tpl->tpl_vars['lang373']->value;?>
</div></td>
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
</div><?php }
}
