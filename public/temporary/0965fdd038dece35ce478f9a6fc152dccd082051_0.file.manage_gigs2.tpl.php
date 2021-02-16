<?php
/* Smarty version 3.1.29, created on 2020-02-24 08:22:12
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/manage_gigs2.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53ce047bd226_50258339',
  'file_dependency' => 
  array (
    '0965fdd038dece35ce478f9a6fc152dccd082051' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/manage_gigs2.tpl',
      1 => 1577430516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:scriptolution_bit_yt_small.tpl' => 1,
    'file:scriptolution_newside.tpl' => 1,
  ),
),false)) {
function content_5e53ce047bd226_50258339 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_mb_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.mb_truncate.php';
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
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1><?php echo $_smarty_tpl->tpl_vars['lang153']->value;?>
</h1>
                    
                    <div class="table-title">
                    	<div class="left">
                        	<span class="label"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang186']->value, 'UTF-8');?>
</span>
                        	<a href="#" class="select-all whiteBtn"><?php echo $_smarty_tpl->tpl_vars['lang187']->value;?>
</a>
                            <a href="#" class="select-none whiteBtn"><?php echo $_smarty_tpl->tpl_vars['lang188']->value;?>
</a>
                            <a href="#" class="select-suspended whiteBtn"><?php echo $_smarty_tpl->tpl_vars['lang189']->value;?>
</a>
                            <a href="#" class="select-active whiteBtn"><?php echo $_smarty_tpl->tpl_vars['lang190']->value;?>
</a>
                        </div>
                    	<div class="right">
                            <a class="btn-suspend ascriptolutionbluebutton" href="#"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang183']->value, 'UTF-8');?>
</a>
                            <a class="btn-activate ascriptolutiongreenbutton" href="#"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang184']->value, 'UTF-8');?>
</a>
                            <a href="#" class="btn-delete ascriptolutionredbutton"><span><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang185']->value, 'UTF-8');?>
</span></a>
                        </div>
                    </div>
                            					
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang585']->value;?>
</td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->tpl_vars['posts']->value) == "0") {?>
                            <tr>
                                <td>
                                <?php echo $_smarty_tpl->tpl_vars['lang584']->value;?>

                                </td>
                            </tr>
                            <?php } else { ?>
                            <tr>
                                <td style="text-align: left !important; white-space: normal !important;">
                                	<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_gigs" id="gigs_form" method="post">
                                    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                    <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>                        
                                    <div class="newscriptolution <?php if (!(1 & (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null))) {?>newscriptolutionnewcolor<?php }?>">
                                        <div class="newscriptolutionimg responsivescriptolutionimages">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t4/<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p1'];?>
?<?php echo time();?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']);?>
" width="162" height="100" /><?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['youtube'] != '') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_yt_small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></a>
                                            <?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['feat'] == "1") {?><span class="featured"><?php echo $_smarty_tpl->tpl_vars['lang526']->value;?>
</span><?php }?>
                                            <br />
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/edit?id=<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" class="btn-edit">[<?php echo $_smarty_tpl->tpl_vars['lang141']->value;?>
]</a>
                                            
                                            <?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['feat'] == "0") {?>
                                            <div class="scriptolutionpaddingtop5"></div>
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/feature?id=<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" class="ascriptolutiongreenbutton" style="color:#FFF"><?php echo $_smarty_tpl->tpl_vars['lang465']->value;?>
</a>
                                            <?php }?>
                                            
                                        </div>
                                        <div class="newscriptolutiondetails width480 scriptolutionpaddingleft15">
                                            <h3>
                                            	<?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "1") {?>
                                                <input class="checkbox approved" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" />
                                                <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "2") {?>
                                                <input class="checkbox suspended" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" />
                                                <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "0") {?>
                                                <input class="checkbox inactive" id="gig_" name="gig[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
" />
                                                <?php }?>
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),50,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']);
}?></a></h3>
                                            <div>
                                            	<?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "1") {?>
                                                <div style="color:limegreen;"><?php echo $_smarty_tpl->tpl_vars['lang191']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['lang192']->value;?>
</div>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "2") {?>
                                                <div style="color:orange;"><?php echo $_smarty_tpl->tpl_vars['lang191']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['lang193']->value;?>
</div>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "0") {?>
                                                <div style="color:orange;"><?php echo $_smarty_tpl->tpl_vars['lang191']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['lang194']->value;?>
</div>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "4") {?>
                                                <div style="color:orange;"><?php echo $_smarty_tpl->tpl_vars['lang191']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['lang502']->value;?>
</div>
                                                <?php }?>
                                            </div>
                                            <h5><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_orders?status=in_progress"><?php echo $_smarty_tpl->tpl_vars['lang195']->value;?>
:</a><span class="open-orders"><?php $_smarty_tpl->assign('ao' , insert_active_orders (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['ao']->value;?>
</span></h5>
                                            <h5><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/manage_orders?status=in_progress"><?php echo $_smarty_tpl->tpl_vars['lang196']->value;?>
:</a><?php $_smarty_tpl->assign('co' , insert_done_orders (array('value' => 'a', 'PID' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['co']->value;?>
</h5>
                                            <h5><?php echo $_smarty_tpl->tpl_vars['lang181']->value;?>
: <?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['viewcount']);?>
</h5>
                                            <h5><?php echo $_smarty_tpl->tpl_vars['lang198']->value;?>
: <span class="gains"><?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rev']);
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['rev']);
}?></span></h5>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                    <input type="hidden" name="subme" value="1" />
                                    </form>
                                </td>
                            </tr>
							<?php }?>
							</tbody>
						</table>
					</div>
					<div class="clear"></div>	
                    <div align="center">
                        <div class="paging">
                            <div class="p1">
                                <ul>
                                    <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>			
				</div>
                
                
			</div>
			<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_newside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		</div>    
	</div>
</div><?php }
}
