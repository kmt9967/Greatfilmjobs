<?php
/* Smarty version 3.1.29, created on 2020-02-24 00:59:06
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/index_scriptolutionreq.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53662aab1859_74141240',
  'file_dependency' => 
  array (
    '72591df029ff05d6e4c11ece6f6bec644d5b8e69' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/index_scriptolutionreq.tpl',
      1 => 1577430532,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53662aab1859_74141240 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.truncate.php';
?>
        <div class="whiteBox homescriptolutionreq">
            <h1><?php echo $_smarty_tpl->tpl_vars['lang632']->value;?>
</h1>
            <div class="scriptolution-table myrequests">
                <table>
                    <thead>
                        <tr>
                            <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang158']->value;?>
</td>
                            <td style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang630']->value;?>
</td>
                            <td class="scriptolutionmhide" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang631']->value;?>
</td>
                            <td class="scriptolutionmhide" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['lang623']->value;?>
</td>
                            <td class="scriptolutionmhide"><?php echo $_smarty_tpl->tpl_vars['lang625']->value;?>
</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $_smarty_tpl->assign('newscriptolutions' , insert_afewscriptolutionrequests (array('value' => 'a'),$_smarty_tpl), true);?>
                    <?php if (count($_smarty_tpl->tpl_vars['newscriptolutions']->value) == "0") {?>
                    <tr>
                        <td colspan="5">
                        <?php echo $_smarty_tpl->tpl_vars['lang633']->value;?>

                        <div class="scriptolutionpaddingbottom10"></div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/newrequest" class="sendascriptolutionoffer"><?php echo $_smarty_tpl->tpl_vars['lang621']->value;?>
</a>
                        </td>
                    </tr>
                    <?php } else { ?>
                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['newscriptolutions']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_0_iteration == $__section_i_0_total);
?>
                        <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
                        <tr>
                            <td class="status-star">
                                <div class="scriptolutionviewrequest3">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),15,"...",true);?>
</a>
                                </div>
                            </td>
                            <td class="ellipsis-wrap">
                                <div class="ellipsissuggest"> 
                                    <div class="scriptolutionviewrequest1">
                                        <?php echo stripslashes($_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondesc']);?>

                                    </div>
                                </div>
                            </td>
                            <td class="scriptolutionmhide">
                                <div class="offersbuttonscriptolutionnopointer" href=""><?php $_smarty_tpl->assign('socnt' , insert_scriptolutionoffercnt (array('value' => 'a', 'REQUESTID' => $_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['REQUESTID']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['socnt']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['socnt']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang640']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang631']->value;
}?></div>
                            </td>
                            <td class="scriptolutionmhide">
                                <?php echo $_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondays'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang131']->value;?>

                            </td>
                            <td class="scriptolutionmhide">
                                <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value != "1") {
echo $_smarty_tpl->tpl_vars['lang197']->value;
}
echo $_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutionprice'];
if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang197']->value;
}?>
                            </td>
                        </tr>
                        <tr>
                            <td class="scriptolutionmunhide">
                                <div class="offersbuttonscriptolutionnopointer"><?php echo $_smarty_tpl->tpl_vars['socnt']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['socnt']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang640']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang631']->value;
}?></div>
                            </td>
                            <td class="scriptolutionmunhide">
                                <?php echo $_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondays'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang131']->value;?>

                                <span style="margin-right:30px;"></span>
                                <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value != "1") {
echo $_smarty_tpl->tpl_vars['lang197']->value;
}
echo $_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutionprice'];
if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang197']->value;
}?>
                            </td>
                        </tr>
                        <tr>
                            <td class="scriptolutiontopborder0" colspan="2">
                                <a class="sendascriptolutionoffer" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/sendoffer?REQID=<?php echo $_smarty_tpl->tpl_vars['newscriptolutions']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['REQUESTID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang634']->value;?>
</a>
                            </td>
                        </tr>
                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] : null)) {?>
                        <tr>
                            <td colspan="5">
                               <div></div>
                            </td>
                        </tr>
                        <?php } else { ?>
                        <tr>
                            <td colspan="5" class="scriptolutiontdhrline">
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
            
            <div align="center">
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/requests" class="agreenbutton"><?php echo $_smarty_tpl->tpl_vars['lang649']->value;?>
</a>
            </div>
                
        </div>
        <div class="clear"></div>            <?php }
}
