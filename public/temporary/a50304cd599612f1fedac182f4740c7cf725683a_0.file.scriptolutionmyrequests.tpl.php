<?php
/* Smarty version 3.1.29, created on 2020-02-24 08:22:21
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolutionmyrequests.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53ce0d59d386_20717997',
  'file_dependency' => 
  array (
    'a50304cd599612f1fedac182f4740c7cf725683a' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolutionmyrequests.tpl',
      1 => 1577430540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:scriptolution_newside.tpl' => 1,
  ),
),false)) {
function content_5e53ce0d59d386_20717997 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_modifier_mb_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.mb_truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">					
                    <h1><?php echo $_smarty_tpl->tpl_vars['lang629']->value;?>
</h1>
					<div class="scriptolution-table myrequests">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang110']->value;?>
</td>
                                    <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang630']->value;?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['lang581']->value;?>
</td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->tpl_vars['posts']->value) == "0") {?>
                            <tr>
                                <td colspan="3">
                                <?php echo $_smarty_tpl->tpl_vars['lang633']->value;?>

                                </td>
                            </tr>
                            <?php } else { ?>
                            	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_0_iteration == $__section_i_0_total);
?>
                                <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
								<tr>
									<td class="status-star">
                                        <div class="scriptolutionviewrequest3">
                                        	<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time_added']);?>

                                        </div>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsissuggest"> 
                                        	<div class="scriptolutionviewrequest1">
                                        		<?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondesc']),200,"...",'UTF-8');?>

                                            </div>
                                            <div class="scriptolutionviewrequest2">
                                            	<span><?php echo $_smarty_tpl->tpl_vars['lang623']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondays'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang131']->value;?>
</span>
                                                <span><?php echo $_smarty_tpl->tpl_vars['lang625']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value != "1") {
echo $_smarty_tpl->tpl_vars['lang197']->value;
}
echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutionprice'];
if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang197']->value;
}?></span>
                                            </div>
										</div>
									</td>
                                    <td class="actionstatus">
                                    	<a class="offersbuttonscriptolution" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/viewoffers?ID=<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['REQUESTID'];?>
"><?php $_smarty_tpl->assign('socnt' , insert_scriptolutionoffercnt (array('value' => 'a', 'REQUESTID' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['REQUESTID']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['socnt']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['socnt']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang640']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang631']->value;
}?></a>
                                        <div style="clear:both; padding-top:15px;"></div>
                                        <a class="newscriptolutionredbutton" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/myrequests?del=1&ID=<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['REQUESTID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang185']->value;?>
</a>
                                    </td>
								</tr>
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
                                <tr>
                                    <td colspan="3">
                                       <div></div>
                                    </td>
                                </tr>
                                <?php } else { ?>
                                <tr>
                                    <td colspan="3" class="scriptolutiontdhrline">
                                        <hr class="scriptolutionlighthr" />
                                    </td>
                                </tr>
                                <?php }?>
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
