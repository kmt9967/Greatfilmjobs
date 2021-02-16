<?php
/* Smarty version 3.1.29, created on 2020-02-24 14:00:27
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_bit_last3.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e541d4b8e1704_09632807',
  'file_dependency' => 
  array (
    '9a333e36cfc6eec93eb48a84dd34dfc8a2ba618d' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_bit_last3.tpl',
      1 => 1577702052,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_bit_yt_small.tpl' => 1,
    'file:scriptolution_bit_instant.tpl' => 1,
    'file:scriptolution_bit_express.tpl' => 1,
  ),
),false)) {
function content_5e541d4b8e1704_09632807 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_mb_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.mb_truncate.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.truncate.php';
?>
						<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
                        <div class="cusongsblock <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null)%3 == 0) {?>last<?php }?>">
                            <div class="songperson">
                            	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t3/<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p1'];?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']);?>
" width="214" height="132" /></a>
                                <?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['feat'] == "1") {?><span class="featured"><?php echo $_smarty_tpl->tpl_vars['lang526']->value;?>
</span><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['toprated'] == "1") {?><span class="rated"><?php echo $_smarty_tpl->tpl_vars['lang525']->value;?>
</span><?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['youtube'] != '') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_yt_small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
                            </div>
                            <div class="price"><?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
}?></div>
                            <p>
                            	<?php if ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['days'] == "0") {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} elseif ($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['days'] == "1") {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_express.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
                            	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),90,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
}?></a>
                            </p>                            
                            <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);?>
                            <div class="userdata">
                                <div class="userimg"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><img width="25px" height="25px" src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['profilepicture']->value;?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
" /></a></div>
                                <div class="username"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),20,"...",true);?>
</a></div>
                                <div class="otherdetails">
                                    <span class="usercount"></span>
                                    <ul>
                                    	<?php $_smarty_tpl->assign('scriptolutionstars' , insert_scriptolution_rating_stars (array('value' => 'a', 'scriptolutionuserid' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['scriptolutionstars']->value;?>

                                    </ul>
                                    <span class="flag"><span class="country <?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country'];?>
" title="<?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['userc']->value;?>
"></span></span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
}
}
