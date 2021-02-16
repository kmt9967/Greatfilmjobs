<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:24:42
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/send_track.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c08a507ef5_10647369',
  'file_dependency' => 
  array (
    '0a2dfb428586b991403151de29f5dd8312fbceaa' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/send_track.tpl',
      1 => 1577430538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:track_files.tpl' => 3,
  ),
),false)) {
function content_5e53c08a507ef5_10647369 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.date_format.php';
?>
								<?php $_smarty_tpl->assign('lasdel' , insert_last_delivery (array('value' => 'a', 'oid' => $_smarty_tpl->tpl_vars['oid']->value),$_smarty_tpl), true);?>
                                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MSGFROM']),$_smarty_tpl), true);?>
                                <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['action'] == "mutual_cancellation_request") {?>
                                	<?php if ($_smarty_tpl->tpl_vars['who']->value == "buyer") {?>
                                        <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MSGFROM'] == $_SESSION['USERID']) {?>                            
                                        <div class="db-main-table warning" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td colspan="2">
                                                            <?php echo $_smarty_tpl->tpl_vars['lang286']->value;?>

                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FBC137" class="fa fa-exclamation-circle fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone action reqbox" title="<?php echo $_smarty_tpl->tpl_vars['lang293']->value;?>
"> 
                                                            <div class="status-label"></div> 
                                                            <div class="mutual-status underway">
                                                                <div class="padding5"></div>
                                                                <p><?php echo $_smarty_tpl->tpl_vars['lang287']->value;?>
: <?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p>
                                                                <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "0") {?>
                                                                <form name="abort<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
" method="post">
                                                                <input type="hidden" name="subabort" value="1">
                                                                <input type="hidden" name="AMID" value="<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                                                </form>
                                                                <div class="status-control"><?php echo $_smarty_tpl->tpl_vars['lang289']->value;?>

                                                                <div style="clear:both; padding-bottom:10px;"></div>
                                                                <a class="ascriptolutionredbutton" style="color:#fff" href="#" onclick="document.abort<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
.submit()"><?php echo $_smarty_tpl->tpl_vars['lang290']->value;?>
</a>
                                                                <div style="clear:both; padding-bottom:10px;"></div><?php echo $_smarty_tpl->tpl_vars['lang291']->value;?>
</div>
                                                                <?php }?>                                     
                                                            </div> 
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php } else { ?>  
                                        <div class="db-main-table warning" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td colspan="2">
                                                            <?php echo $_smarty_tpl->tpl_vars['lang288']->value;?>

                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FBC137" class="fa fa-exclamation-circle fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone action reqbox" title="<?php echo $_smarty_tpl->tpl_vars['lang293']->value;?>
"> 
                                                            <div class="status-label"></div> 
                                                            <div class="mutual-status underway">
                                                                <div class="padding5"></div>
                                                                <p><?php echo $_smarty_tpl->tpl_vars['lang287']->value;?>
: <?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p>
                                                                <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "0") {?>
                                                                <form name="decline<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
" method="post">
                                                                <input type="hidden" name="subdecline" value="1">
                                                                <input type="hidden" name="DMID" value="<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                                                </form>
                                                                <form name="accept<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
" method="post">
                                                                <input type="hidden" name="subaccept" value="1">
                                                                <input type="hidden" name="AMID" value="<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                                                </form>
                                                                <div class="status-control"><?php echo $_smarty_tpl->tpl_vars['lang291']->value;?>

                                                                <div style="clear:both; padding-bottom:10px;"></div>
                                                                <a class="ascriptolutionredbutton" style="color:#fff" href="#" onclick="document.decline<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
.submit()"><?php echo $_smarty_tpl->tpl_vars['lang296']->value;?>
</a> - <a class="ascriptolutiongreenbutton" style="color:#fff" href="#" onclick="document.accept<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
.submit()"><?php echo $_smarty_tpl->tpl_vars['lang301']->value;?>
</a></div>
                                                                <?php }?>                                        
                                                            </div> 
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "1") {?>
                                        <div class="db-main-table yellowbg" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FBC137" class="fa fa-times fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone warning" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ctime']);?>
">
                                                          <div class="mutual-status duedate"><span><span><?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CID'] == $_SESSION['USERID']) {
echo $_smarty_tpl->tpl_vars['lang297']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang298']->value;
}?></span></span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "2") {?>
                                        <div class="db-main-table redbg" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FB3737" class="fa fa-times fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone warning" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ctime']);?>
">
                                                          <div class="mutual-status duedate"><span><span><?php echo $_smarty_tpl->tpl_vars['lang303']->value;?>
</span></span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php }?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['who']->value == "owner") {?>
                                    	<?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MSGFROM'] == $_SESSION['USERID']) {?>
                                        <div class="db-main-table warning" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td colspan="2">
                                                            <?php echo $_smarty_tpl->tpl_vars['lang286']->value;?>

                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FBC137" class="fa fa-exclamation-circle fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone action reqbox" title="<?php echo $_smarty_tpl->tpl_vars['lang293']->value;?>
"> 
                                                            <div class="status-label"></div> 
                                                            <div class="mutual-status underway">
                                                                <div class="padding5"></div>
                                                                <p><?php echo $_smarty_tpl->tpl_vars['lang287']->value;?>
: <?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p>
                                                                <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "0") {?>
                                                                <form name="abort<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
" method="post">
                                                                <input type="hidden" name="subabort" value="1">
                                                                <input type="hidden" name="AMID" value="<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                                                </form>
                                                                <div class="status-control"><?php echo $_smarty_tpl->tpl_vars['lang289']->value;?>

                                                                <div style="clear:both; padding-bottom:10px;"></div>
                                                                <a class="ascriptolutionredbutton" style="color:#fff" href="#" onclick="document.abort<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
.submit()"><?php echo $_smarty_tpl->tpl_vars['lang290']->value;?>
</a>
                                                                <div style="clear:both; padding-bottom:10px;"></div><?php echo $_smarty_tpl->tpl_vars['lang291']->value;?>
</div>
                                                                <?php }?>                                     
                                                            </div> 
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php } else { ?>
                                        <div class="db-main-table warning" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <td colspan="2">
                                                            <?php echo $_smarty_tpl->tpl_vars['lang294']->value;?>

                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FBC137" class="fa fa-exclamation-circle fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone action reqbox" title="<?php echo $_smarty_tpl->tpl_vars['lang293']->value;?>
"> 
                                                            <div class="status-label"></div> 
                                                            <div class="mutual-status underway">
                                                                <div class="padding5"></div>
                                                                <p><?php echo $_smarty_tpl->tpl_vars['lang287']->value;?>
: <?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p>
                                                                <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "0") {?>
                                                                <form name="decline<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
" method="post">
                                                                <input type="hidden" name="subdecline" value="1">
                                                                <input type="hidden" name="DMID" value="<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                                                </form>
                                                                <form name="accept<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
" method="post">
                                                                <input type="hidden" name="subaccept" value="1">
                                                                <input type="hidden" name="AMID" value="<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                                                </form>
                                                                <div class="status-control"><?php echo $_smarty_tpl->tpl_vars['lang291']->value;?>

                                                                <div style="clear:both; padding-bottom:10px;"></div>
                                                                <a class="ascriptolutionredbutton" style="color:#fff" href="#" onclick="document.decline<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
.submit()"><?php echo $_smarty_tpl->tpl_vars['lang296']->value;?>
</a> - <a class="ascriptolutiongreenbutton" style="color:#fff" href="#" onclick="document.accept<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
.submit()"><?php echo $_smarty_tpl->tpl_vars['lang301']->value;?>
</a></div>
                                                                <?php }?>                                        
                                                            </div> 
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "1") {?>
                                        <div class="db-main-table yellowbg" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FBC137" class="fa fa-times fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone warning" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ctime']);?>
">
                                                          <div class="mutual-status duedate"><span><span><?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CID'] == $_SESSION['USERID']) {
echo $_smarty_tpl->tpl_vars['lang299']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang300']->value;
}?></span></span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "2") {?>
                                        <div class="db-main-table redbg" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td class="leftitscriptolution width25">
                                                        <i style="color:#FB3737" class="fa fa-times fa-3x"></i> 
                                                    </td>
                                                    <td class="leftitscriptolution width75">                                
                                                        <div class="milestone warning" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ctime']);?>
">
                                                          <div class="mutual-status duedate"><span><span><?php echo $_smarty_tpl->tpl_vars['lang302']->value;?>
</span></span></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php }?>
                                    <?php }?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['action'] == "seller_cancellation") {?>
                                	<?php if ($_smarty_tpl->tpl_vars['who']->value == "owner") {?>
                                    <div class="db-main-table redbg" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="leftitscriptolution width25">
                                                    <i style="color:#FB3737" class="fa fa-times fa-3x"></i> 
                                                </td>
                                                <td class="leftitscriptolution width75">                                
                                                    <div class="milestone cancel" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ctime']);?>
">
                                                      <div class="status-label"></div>
                                                      <div class="mutual-status duedate"><span><?php echo $_smarty_tpl->tpl_vars['lang305']->value;?>
<br /><?php echo $_smarty_tpl->tpl_vars['lang287']->value;?>
: <?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</span></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php }?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['action'] == "rejection") {?>
                                	<?php if ($_smarty_tpl->tpl_vars['who']->value == "buyer") {?>
                                    <div class="db-main-table redbg">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="leftitscriptolution width25">
                                                    <i style="color:#FB3737" class="fa fa-exclamation-triangle fa-3x"></i> 
                                                </td>
                                                <td class="leftitscriptolution width75">                                
                                                    <div class="milestone cancel" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']);?>
"> 
                                                      <div class="status-label"></div> 
                                                      <div class="mutual-status duedate"><span><?php echo $_smarty_tpl->tpl_vars['lang321']->value;?>
:<br /><?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</span></div> 
                                                    </div> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php } else { ?>
                                    <div class="db-main-table redbg">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="leftitscriptolution width25">
                                                    <i style="color:#FB3737" class="fa fa-exclamation-triangle fa-3x"></i> 
                                                </td>
                                                <td class="leftitscriptolution width75">                                
                                                    <div class="milestone cancel" title="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']);?>
"> 
                                                      <div class="status-label"></div> 
                                                      <div class="mutual-status duedate"><h3><?php echo $_smarty_tpl->tpl_vars['lang323']->value;?>
</h3><span><?php echo $_smarty_tpl->tpl_vars['lang324']->value;?>
:<br /><?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</span></div>
                                                    </div> 
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php }?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['action'] == "delivery") {?>
                                	<?php if ($_smarty_tpl->tpl_vars['who']->value == "buyer") {?>
                                     <div class="db-main-table deliverybox" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td class="leftitscriptolution width25">
                                                    <i style="color:#0ABA44" class="fa fa-check fa-4x"></i> 
                                                </td>
                                                <td class="leftitscriptolution width75">                                
                                                    <div class="milestone action reqbox"> 
                                                        <div class="status-label"></div> 
                                                        <div class="mutual-status underway">
                                                            <h3 style="font-size:36px"><?php echo $_smarty_tpl->tpl_vars['lang308']->value;?>
</h3>
                                                            <div class="padding5"></div>
                                                            <span><p><?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p></span>
                                                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:track_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('scriptolutionfileinfo'=>$_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]), 0, true);
?>

                                                        </div> 
                                                        <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'] == $_smarty_tpl->tpl_vars['lasdel']->value && $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reject'] == "0") {?>
                                                        <div class="delivery-footer" style="clear:both;"> 
                                                            <div class="padding5"></div><small>[<?php echo $_smarty_tpl->tpl_vars['lang307']->value;?>
]</small>                                               
                                                        </div> 
                                                        <?php }?>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php } else { ?>
                                    <div class="db-main-table deliverybox" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                    <table>
                                        <tbody>
                                        <tr>
                                            <td class="leftitscriptolution width25">
                                                <i style="color:#0ABA44" class="fa fa-check fa-4x"></i> 
                                            </td>
                                            <td class="leftitscriptolution width75">                                
                                                <div class="milestone action reqbox"> 
                                                    <div class="status-label"></div> 
                                                    <div class="mutual-status underway">
                                                        <h3 style="font-size:36px"><?php echo $_smarty_tpl->tpl_vars['lang306']->value;?>
</h3>
                                                        <div class="padding5"></div>
                                                        <span><p><?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p></span>
                                                        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:track_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('scriptolutionfileinfo'=>$_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]), 0, true);
?>

                                                    </div> 
                                                    <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'] == $_smarty_tpl->tpl_vars['lasdel']->value && $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['reject'] == "0") {?>
                                                    <div class="delivery-footer" style="clear:both;"> 
                                                        <div class="padding5"></div
                                                        ><small>[<?php echo $_smarty_tpl->tpl_vars['lang307']->value;?>
]</small>                                               
                                                    </div> 
                                                    <?php }?>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                    <?php }?>
                                <?php } else { ?>
                                    <div class="db-main-table reqbox" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
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
                                                    <div class="message-toolkit">
                                                      <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']);?>

                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['start'] == "1" && $_smarty_tpl->tpl_vars['USERID']->value == $_SESSION['USERID']) {?>
                                    <div class="db-main-table started">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <td>
                                                        <?php echo $_smarty_tpl->tpl_vars['lang277']->value;?>

                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>                       
                                                    <i style="color:#00668C" class="fa fa-fighter-jet fa-3x"></i>          
                                                    <div class="milestone okay" title="<?php echo $_smarty_tpl->tpl_vars['lang277']->value;?>
"> 
                                                      <div class="status-label"></div> 
                                                      <div class="mutual-status underway"><h3><?php echo $_smarty_tpl->tpl_vars['lang275']->value;?>
. <?php echo $_smarty_tpl->tpl_vars['lang277']->value;?>
</h3> 
                                                            <span>                                            
                                                                <span><?php echo $_smarty_tpl->tpl_vars['lang276']->value;?>
 <b><?php $_smarty_tpl->assign('deadline' , insert_get_deadline (array('value' => 'a', 'days' => $_smarty_tpl->tpl_vars['days']->value, 'time' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['deadline']->value;?>
</b></span>                                  
                                                            </span> 
                                                        </div> 
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <?php }?>
                                <?php }?>
								<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                <?php if ($_smarty_tpl->tpl_vars['who']->value == "buyer") {?>
                                    <?php $_smarty_tpl->assign('fbvl' , insert_fback (array('value' => 'a', 'oid' => $_smarty_tpl->tpl_vars['oid']->value),$_smarty_tpl), true);?>
                                    <?php if ($_smarty_tpl->tpl_vars['lasdel']->value > "0" && $_smarty_tpl->tpl_vars['fbvl']->value == "0") {?>
                                        <?php $_smarty_tpl->assign('stat' , insert_get_status (array('value' => 'a', 'oid' => $_smarty_tpl->tpl_vars['oid']->value),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->tpl_vars['stat']->value != "6") {?>
                                        <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['oid']->value;?>
" class="review_form" id="new_rating" method="post">
                                        <div class="db-main-table">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td>   
                                                        <h3 style="font-size:30px"><?php echo $_smarty_tpl->tpl_vars['lang310']->value;?>
</h3>                             
                                                          <div class="post-order-rating"> 
                                                            <input checked="checked" class="good-review-button" id="rating_value_1" name="ratingvalue" type="radio" value="1" /><i style="color:#0ABA44" class="fa fa-thumbs-up fa-2x"></i>
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input class="bad-review-button" id="rating_value_0" name="ratingvalue" type="radio" value="0" /><i style="color:#F99F2A" class="fa fa-thumbs-down fa-2x"></i> 
                                                          </div> 
                                                          <br clear="both"/> 
                                                          <div class="share-experience"> 
                                                            <textarea cols="35" id="rating_comment" maxlength="300" name="ratingcomment" rows="5" title="<?php echo $_smarty_tpl->tpl_vars['lang311']->value;?>
" placeholder="<?php echo $_smarty_tpl->tpl_vars['lang311']->value;?>
"></textarea> 
                                                            <br clear="all"/> 
                                                          </div> 
                                                          <div style="clear:both; padding-bottom:10px;"></div>
                                                            <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang46']->value;?>
" class="scriptolutionbluebutton" style="color:#FFF;display: inline;"  />
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <input type="hidden" name="subrat" value="1" /> 
                                        </form>
                                        <?php }?>
                                    <?php }?>
                                <?php }
}
}
