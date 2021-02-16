<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:23:42
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/inbox.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c04ec76176_08337234',
  'file_dependency' => 
  array (
    'a87c031e139757c678b4e73ff726d3f6a09c67e5' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/inbox.tpl',
      1 => 1577430520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:scriptolution_newside.tpl' => 1,
  ),
),false)) {
function content_5e53c04ec76176_08337234 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.truncate.php';
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
/js/mainscriptolution.js" type="text/javascript"><?php echo '</script'; ?>
>  
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<style>
.unread-message{
	background: #fe0;
}
.table-title a.whiteBtnselected {
  display: inline-block;
  padding: 6px 8px;
  border-radius: 5px;
  border: 1px solid #EFECEC;
  background: #0CF;
  margin-left: 5px;
  font-size: 12px;
  color: #fff;
}
#conversations_quick_navigation{
	padding: 5px 10px 5px 10px;
  font-size: 16px;
}
</style>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1><?php echo $_smarty_tpl->tpl_vars['lang226']->value;?>
</h1>
                    <h4><?php echo $_smarty_tpl->tpl_vars['lang227']->value;?>
</h4>
                    
                    <div class="table-title">
                    	<div class="left">
                        	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox?o=<?php echo $_smarty_tpl->tpl_vars['o']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" class=" whiteBtn<?php if ($_smarty_tpl->tpl_vars['s']->value == "all" || $_smarty_tpl->tpl_vars['s']->value == '') {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang187']->value;?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox?s=unread&o=<?php echo $_smarty_tpl->tpl_vars['o']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" class=" whiteBtn<?php if ($_smarty_tpl->tpl_vars['s']->value == "unread") {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang228']->value;?>
</a>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox?s=archived&o=<?php echo $_smarty_tpl->tpl_vars['o']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
" class=" whiteBtn<?php if ($_smarty_tpl->tpl_vars['s']->value == "archived") {?>selected<?php }?>"><?php echo $_smarty_tpl->tpl_vars['lang229']->value;?>
</a>
                        </div>
                    	<div class="right">
                            <select id="conversations_quick_navigation">
                            	<?php if ($_smarty_tpl->tpl_vars['u']->value > "0") {?>
                                <option value="o=<?php echo $_smarty_tpl->tpl_vars['o']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
&s=<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang230']->value;?>
</option>
                                <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <option style="font-weight: bold;" value="o=<?php echo $_smarty_tpl->tpl_vars['o']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
&s=<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
&u=<?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']);?>
" selected="selected"><?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</option>
                                <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                <?php } else { ?>
                            	<option><?php echo $_smarty_tpl->tpl_vars['lang230']->value;?>
</option>
                                <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <option style="font-weight: bold;" value="o=<?php echo $_smarty_tpl->tpl_vars['o']->value;?>
&a=<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
&s=<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
&u=<?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</option>
                                <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                                <?php }?>
                            </select>
                        </div>
                    </div>
                       					
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;">
                                    	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox?o=name&s=<?php echo $_smarty_tpl->tpl_vars['s']->value;
if ($_smarty_tpl->tpl_vars['a']->value == "1") {?>&a=0<?php } else { ?>&a=1<?php }?>" <?php if ($_smarty_tpl->tpl_vars['o']->value == "name") {?>class="<?php if ($_smarty_tpl->tpl_vars['a']->value == "1") {?>descending<?php } else { ?>ascending<?php }?>"<?php }?>><?php if ($_smarty_tpl->tpl_vars['o']->value == "name") {
if ($_smarty_tpl->tpl_vars['a']->value == "1") {?>&#9650;<?php } else { ?>&#9660;<?php }
}?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang231']->value;?>
</a>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
									<td>
                                    	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox?o=time&s=<?php echo $_smarty_tpl->tpl_vars['s']->value;
if ($_smarty_tpl->tpl_vars['a']->value == "1") {?>&a=0<?php } else { ?>&a=1<?php }?>" <?php if ($_smarty_tpl->tpl_vars['o']->value == "time") {?>class="<?php if ($_smarty_tpl->tpl_vars['a']->value == "1") {?>descending<?php } else { ?>ascending<?php }?>"<?php }?>><?php if ($_smarty_tpl->tpl_vars['o']->value == "time") {
if ($_smarty_tpl->tpl_vars['a']->value == "1") {?>&#9650;<?php } else { ?>&#9660;<?php }
}?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang232']->value;?>
</a>
                                    </td>
								</tr>
							</thead>
							<tbody>
                            <?php if (count($_smarty_tpl->tpl_vars['m']->value) == "0") {?>
                            <tr>
                                <td colspan="4">
                                <?php echo $_smarty_tpl->tpl_vars['lang234']->value;?>

                                </td>
                            </tr>
                            <?php } else { ?>
                            	<?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                <?php if ($_smarty_tpl->tpl_vars['s']->value == "all") {?>
                                    	<?php if (isset($_smarty_tpl->tpl_vars["show"])) {$_smarty_tpl->tpl_vars["show"] = clone $_smarty_tpl->tpl_vars["show"];
$_smarty_tpl->tpl_vars["show"]->value = 1; $_smarty_tpl->tpl_vars["show"]->nocache = null;
} else $_smarty_tpl->tpl_vars["show"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "show", 0);?>
                                        <?php
$__section_j_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total != 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                        <?php if ($_smarty_tpl->tpl_vars['arc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['AID'] == $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars["show"])) {$_smarty_tpl->tpl_vars["show"] = clone $_smarty_tpl->tpl_vars["show"];
$_smarty_tpl->tpl_vars["show"]->value = 0; $_smarty_tpl->tpl_vars["show"]->nocache = null;
} else $_smarty_tpl->tpl_vars["show"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "show", 0);?>
                                        <?php }?>
                                        <?php
}
}
if ($__section_j_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_3_saved;
}
?>
                                        <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->tpl_vars['show']->value == "1" || $_smarty_tpl->tpl_vars['lur']->value == "1") {?>
                                        <tr>
                                            <td class="status-star">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</a>
                                            </td>
                                            <td class="ellipsis-wrap">
                                            	<div class="ellipsis"> 
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);
echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['lem']->value),50,"...",true);?>
</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['lur']->value == "1") {?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->tpl_vars['lang233']->value;?>
</span></div><?php }?>
                                            </td>
                                            <td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']),$_smarty_tpl);?>
</td>                          
                                        </tr>
                                		<?php }?>
                                    
                                <?php } elseif ($_smarty_tpl->tpl_vars['s']->value == "unread") {?>
                                		<?php
$__section_i_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_4_total = $__section_i_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_4_total != 0) {
for ($__section_i_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_4_iteration <= $__section_i_4_total; $__section_i_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <?php if (isset($_smarty_tpl->tpl_vars["show"])) {$_smarty_tpl->tpl_vars["show"] = clone $_smarty_tpl->tpl_vars["show"];
$_smarty_tpl->tpl_vars["show"]->value = 1; $_smarty_tpl->tpl_vars["show"]->nocache = null;
} else $_smarty_tpl->tpl_vars["show"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "show", 0);?>
                                        <?php
$__section_j_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_5_total = $__section_j_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_5_total != 0) {
for ($__section_j_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_5_iteration <= $__section_j_5_total; $__section_j_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                        <?php if ($_smarty_tpl->tpl_vars['arc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['AID'] == $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars["show"])) {$_smarty_tpl->tpl_vars["show"] = clone $_smarty_tpl->tpl_vars["show"];
$_smarty_tpl->tpl_vars["show"]->value = 0; $_smarty_tpl->tpl_vars["show"]->nocache = null;
} else $_smarty_tpl->tpl_vars["show"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "show", 0);?>
                                        <?php }?>
                                        <?php
}
}
if ($__section_j_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_5_saved;
}
?>
                                        <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->tpl_vars['show']->value == "1" && $_smarty_tpl->tpl_vars['lur']->value == "1") {?>
                                    	<tr>
                                            <td class="status-star">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</a>
                                            </td>
                                            <td class="ellipsis-wrap">
                                            	<div class="ellipsis"> 
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);
echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['lem']->value),50,"...",true);?>
</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['lur']->value == "1") {?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->tpl_vars['lang233']->value;?>
</span></div><?php }?>
                                            </td>
                                            <td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']),$_smarty_tpl);?>
</td>                          
                                        </tr>
                                        <?php }?>
                                    	<?php
}
}
if ($__section_i_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_4_saved;
}
?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['s']->value == "archived") {?>
                                		<?php
$__section_i_6_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_6_total = $__section_i_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_6_total != 0) {
for ($__section_i_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_6_iteration <= $__section_i_6_total; $__section_i_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <?php if (isset($_smarty_tpl->tpl_vars["show"])) {$_smarty_tpl->tpl_vars["show"] = clone $_smarty_tpl->tpl_vars["show"];
$_smarty_tpl->tpl_vars["show"]->value = 0; $_smarty_tpl->tpl_vars["show"]->nocache = null;
} else $_smarty_tpl->tpl_vars["show"] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "show", 0);?>
                                        <?php
$__section_j_7_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_7_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arc']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_7_total = $__section_j_7_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_7_total != 0) {
for ($__section_j_7_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_7_iteration <= $__section_j_7_total; $__section_j_7_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                        <?php if ($_smarty_tpl->tpl_vars['arc']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['AID'] == $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']) {?>
                                        <?php if (isset($_smarty_tpl->tpl_vars["show"])) {$_smarty_tpl->tpl_vars["show"] = clone $_smarty_tpl->tpl_vars["show"];
$_smarty_tpl->tpl_vars["show"]->value = 1; $_smarty_tpl->tpl_vars["show"]->nocache = null;
} else $_smarty_tpl->tpl_vars["show"] = new Smarty_Variable(1, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "show", 0);?>
                                        <?php }?>
                                        <?php
}
}
if ($__section_j_7_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_7_saved;
}
?>
                                        <?php $_smarty_tpl->assign('lur' , insert_last_unread (array('value' => 'a', 'uid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);?>
                                        <?php if ($_smarty_tpl->tpl_vars['show']->value == "1" && $_smarty_tpl->tpl_vars['lur']->value == "0") {?>
                                        <tr>
                                            <td class="status-star">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</a>
                                            </td>
                                            <td class="ellipsis-wrap">
                                            	<div class="ellipsis"> 
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php $_smarty_tpl->assign('lem' , insert_last_email (array('value' => 'a', 'uid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);
echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['lem']->value),50,"...",true);?>
</a>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['lur']->value == "1") {?><div class="unread-message" title="New message!"><span><?php echo $_smarty_tpl->tpl_vars['lang233']->value;?>
</span></div><?php }?>
                                            </td>
                                            <td><?php echo insert_get_time_to_days_ago(array('value' => 'a', 'time' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']),$_smarty_tpl);?>
</td>                          
                                        </tr>
                                        <?php }?>
                                    	<?php
}
}
if ($__section_i_6_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_6_saved;
}
?>
                                <?php }?>
                                <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
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
