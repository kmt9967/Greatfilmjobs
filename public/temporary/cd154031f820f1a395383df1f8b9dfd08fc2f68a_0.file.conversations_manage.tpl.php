<?php
/* Smarty version 3.1.29, created on 2020-02-24 08:31:51
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/administrator/conversations_manage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53d047d13118_68909018',
  'file_dependency' => 
  array (
    'cd154031f820f1a395383df1f8b9dfd08fc2f68a' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/administrator/conversations_manage.tpl',
      1 => 1577432759,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/show_message.tpl' => 1,
  ),
),false)) {
function content_5e53d047d13118_68909018 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.truncate.php';
?>
<div class="middle" id="anchor-content">
    <div id="page:main-container">
        <div class="columns ">
            <div class="side-col" id="page:left">
            	<h3>Conversations</h3>
                <ul id="isoft" class="tabs">
                    <li >
                        <a href="conversations_manage.php" id="isoft_group_1" name="group_1" title="Manage Conversations" class="tab-item-link ">
                            <span>
                                <span class="changed" title=""></span>
                                <span class="error" title=""></span>
                                Manage Conversations
                            </span>
                        </a>
                        <div id="isoft_group_1_content" style="display:none;">
                            <div class="entry-edit">
                                <div class="entry-edit-head">
                                	<h4 class="icon-head head-edit-form fieldset-legend">Manage Conversations</h4>
                                	<div class="form-buttons">
                                	</div>
                                </div>
                                <div>
                                    <div id="customerGrid">
                                        <table cellspacing="0" class="actions">
                                            <tr>
                                                <td class="pager">
                                                Showing <?php if ($_smarty_tpl->tpl_vars['total']->value > 0) {
echo $_smarty_tpl->tpl_vars['beginning']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['ending']->value;?>
 of <?php }
echo $_smarty_tpl->tpl_vars['total']->value;?>
 Conversations
                                                </td>
                                            	<td class="export a-right"></td>
                                                <td class="filter-actions a-right">
                                                <button id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='conversations_manage.php'" style=""><span>Reset Filter</span></button>
                                                <button id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>
                                                </td>
                                            </tr>
                                        </table>
                                        <div class="grid">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="data" id="customerGrid_table">
                                                    <col width="50" width="100px" />
                                                    <col width="150" />
                                                    <col />
                                                    <col width="200" />
                                                    <thead>
                                                        <tr class="headings">
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=MID&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "MID") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&msgfrom=<?php echo $_smarty_tpl->tpl_vars['msgfrom']->value;?>
&msgto=<?php echo $_smarty_tpl->tpl_vars['msgto']->value;?>
&msg=<?php echo $_smarty_tpl->tpl_vars['msg']->value;
}?>" name="id" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "MID") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Message ID</span></a></span></th>
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=msgfrom&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "msgfrom") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&msgfrom=<?php echo $_smarty_tpl->tpl_vars['msgfrom']->value;?>
&msgto=<?php echo $_smarty_tpl->tpl_vars['msgto']->value;?>
&msg=<?php echo $_smarty_tpl->tpl_vars['msg']->value;
}?>" name="msgfrom" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "msgfrom") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Sender</span></a></span></th>
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=msgto&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "msgto") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&msgfrom=<?php echo $_smarty_tpl->tpl_vars['msgfrom']->value;?>
&msgto=<?php echo $_smarty_tpl->tpl_vars['msgto']->value;?>
&msg=<?php echo $_smarty_tpl->tpl_vars['msg']->value;
}?>" name="msgto" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "msgto") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Receiver</span></a></span></th>
                                                            <th ><span class="nobr"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=msg&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "msg") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&msgfrom=<?php echo $_smarty_tpl->tpl_vars['msgfrom']->value;?>
&msgto=<?php echo $_smarty_tpl->tpl_vars['msgto']->value;?>
&msg=<?php echo $_smarty_tpl->tpl_vars['msg']->value;
}?>" name="msg" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "msg") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Message</span></a></span></th>
                                                            <th class=" no-link last"><span class="nobr">Action</span></th>
                                                            </tr>
                                                            <tr class="filter">
                                                            <th >
                                                            <div class="range">
                                                            <div class="range-line">
                                                            <span class="label">From:</span>
                                                            <input type="text" name="fromid" id="fromid" value="<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
" class="input-text no-changes"/>
                                                            </div>
                                                            <div class="range-line">
                                                            <span class="label">To : </span>
                                                            <input type="text" name="toid" id="toid" value="<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
" class="input-text no-changes"/>
                                                            </div>
                                                            </div>
                                                            </th>
                                                            <th ><input type="text" name="msgfrom" id="msgfrom" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['msgfrom']->value);?>
" class="input-text no-changes"/></th>
                                                            <th ><input type="text" name="msgto" id="msgto" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['msgto']->value);?>
" class="input-text no-changes"/></th>
                                                            <th ><input type="text" name="msg" id="msg" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['msg']->value);?>
" class="input-text no-changes"/></th>
                                                            <th class=" no-link last">
                                                            <div style="width: 100%;">&nbsp;</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['results']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                        <tr id="" >
                                                            <td align="center"><?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
</td>
                                                            <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['msgfrom']),30,"...",true);?>
</td>
                                                            <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['msgto']),30,"...",true);?>
</td>
                                                            <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']),200,"...",true);?>
</td>
                                                            <td class=" last"><a href="conversations_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=<?php echo $_smarty_tpl->tpl_vars['sortby']->value;?>
&sorthow=<?php echo $_smarty_tpl->tpl_vars['sorthow']->value;
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&msgfrom=<?php echo $_smarty_tpl->tpl_vars['msgfrom']->value;?>
&msgto=<?php echo $_smarty_tpl->tpl_vars['msgto']->value;?>
&msg=<?php echo $_smarty_tpl->tpl_vars['msg']->value;
}?>&delete=1&DMID=<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">Delete Message</a></td>
                                                        </tr>
                                                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                                        <tr>
                                                        <td colspan="5">
                                                        <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            <?php echo '<script'; ?>
 type="text/javascript">
            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_1', []);
            <?php echo '</script'; ?>
>
            </div>
            <div class="main-col" id="content">
                <div class="main-col-inner">
                    <div id="messages">
                    <?php if ($_smarty_tpl->tpl_vars['message']->value != '' || $_smarty_tpl->tpl_vars['error']->value != '') {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/show_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <?php }?>
                    </div>
                
                    <div class="content-header">
                    	<h3 class="icon-head head-products">Conversations - Manage Conversations</h3>
                    </div>
                
                    <form action="conversations_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                        <input type="hidden" id="submitform" name="submitform" value="1" >
                        <div style="display:none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
