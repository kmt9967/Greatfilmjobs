<?php
/* Smarty version 3.1.29, created on 2020-05-12 01:13:59
  from "/home4/o8txizzi/public_html/dev/themes/sendmessage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eba309700fbf6_69422143',
  'file_dependency' => 
  array (
    '2a1f19cdce54911677a37da8b57625ac6ed885aa' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/sendmessage.tpl',
      1 => 1577430544,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:track_files.tpl' => 1,
  ),
),false)) {
function content_5eba309700fbf6_69422143 ($_smarty_tpl) {
?>

                            
                            <?php echo '<script'; ?>
 type="text/javascript">
							$(document).ready( function() {
								$('.milestone').corner("5px");
								$('.spam_message').click(function() {
								  $.post($(this).attr('href'), null, null, "script");
								  return false;
								  });
							})
							<?php echo '</script'; ?>
>
                            
                    		<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['unread'] == "1") {?>
                            <?php if ($_SESSION['USERID'] == $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MSGTO']) {?>
                            <?php echo insert_mark_read(array('value' => 'a', 'mid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID']),$_smarty_tpl);?>

                            <?php }?>
                            <?php }?>
                            <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MSGFROM']),$_smarty_tpl), true);?>
                            <div class="db-main-table <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom'] != $_SESSION['USERNAME']) {?>yellowbg<?php }?>" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="leftitscriptolution width25">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom'])),$_smarty_tpl);?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom']);?>
"><img alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['profilepicture']->value;?>
?<?php echo time();?>
" class="scriptolutionuimage" /></a>
                                        </td>
                                        <td class="leftitscriptolution width75">                                
                                            <div class="milestone action reqbox" title="<?php echo $_smarty_tpl->tpl_vars['lang293']->value;?>
"> 
                                                <div class="status-label"></div> 
                                                <div class="mutual-status underway">
                                                    <h3><?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom']);?>
</h3>
                                                    <div class="padding5"></div>
                                                    <span><p><?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p></span>
                                                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:track_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('scriptolutionfileinfo'=>$_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]), 0, true);
?>

                                                </div> 
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                          	<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?> 
                            <?php if ($_smarty_tpl->tpl_vars['notice']->value != '') {?>
                            <div class='scriptolution_error'>
                                <p><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</p>
                            </div>
                           	<div style="clear:both; padding-bottom:20px;"></div>
                            <?php }
}
}
