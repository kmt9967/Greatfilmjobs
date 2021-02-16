<?php
/* Smarty version 3.1.29, created on 2020-03-20 09:02:04
  from "/home4/o8txizzi/public_html/dev/themes/user.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e74becc293209_74947955',
  'file_dependency' => 
  array (
    '8307d607571d8b690e7cbfdf7686466bd5e3b63c' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/user.tpl',
      1 => 1577430513,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_bit.tpl' => 1,
  ),
),false)) {
function content_5e74becc293209_74947955 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.date_format.php';
?>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['cssurl']->value;?>
/scriptolution_style_v7_user.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<div class="userbanner">
    <div class="centerwrap relative">
    	<div class="userbannertext">
        	<h3><?php echo stripslashes($_smarty_tpl->tpl_vars['uname']->value);?>
</h3>
            <h2><?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionuserslogan']->value);?>
</h2>
            <div class="find-userrating">                
                <?php $_smarty_tpl->assign('scriptolutionstars' , insert_scriptolution_userrating_stars_big (array('value' => 'a', 'scriptolutionpid' => $_smarty_tpl->tpl_vars['USERID']->value),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['scriptolutionstars']->value;?>

                <div class="clear"></div>
            </div>
            <div class="usertopnavbg"></div>
        </div>
    </div>
</div>

<div class="bodybg">
	<div class="bodyshadow">
        <div class="whitebody">
        	
            
            <div class="paddinguser20">
                <div class="profile-image">
                    <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['USERID']->value),$_smarty_tpl), true);?>
                    <img alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['uname']->value);?>
" src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['profilepicture']->value;?>
?<?php echo time();?>
" />
                </div>
                
                <div class="scriptolutionsmain1">
                    <div class="scriptolution-jobsbyuser"><?php echo $_smarty_tpl->tpl_vars['lang590']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['uname']->value);?>
</div>
                    <div class="pfloatleft">
                    	<?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['desc']->value));?>

                        <div class="clear" style="padding-bottom:20px;"></div>  
                        <?php if ($_SESSION['USERID'] > "0") {?>
                        <?php if ($_SESSION['USERID'] != $_smarty_tpl->tpl_vars['USERID']->value) {?>
                        <a class="agreenbutton" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['uname']->value)),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang400']->value;?>
</a>
                        <?php }?>
                        <?php } else { ?>
                        <a class="agreenbutton" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php $_smarty_tpl->assign('cvseo' , insert_get_seo_convo (array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['uname']->value)),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['cvseo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang400']->value;?>
</a>                                              
                        <?php }?>
                    </div>
                    <div class="otherinfo">
                    	<i class="fa fa-globe"></i> <?php echo $_smarty_tpl->tpl_vars['lang467']->value;?>
: <?php $_smarty_tpl->assign('usercc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->tpl_vars['ucountry']->value),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['usercc']->value;?>

                        <br />
                        <i class="fa fa-clock-o"></i> <?php echo $_smarty_tpl->tpl_vars['lang399']->value;?>
: <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['addtime']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['enable_levels']->value == "1" && $_smarty_tpl->tpl_vars['price_mode']->value == "3") {?>
                        <br />
                        <i class="fa fa-level-up"></i> <?php echo $_smarty_tpl->tpl_vars['lang499']->value;?>
: <?php echo stripslashes($_smarty_tpl->tpl_vars['level']->value);?>

                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['toprated']->value == "1") {?>
                        <br />
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['lang468']->value;?>
" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/topratedscriptolution.png" /> <?php echo $_smarty_tpl->tpl_vars['lang468']->value;?>

                        <?php }?>
                        <br />
                    </div>
                </div>
            </div>
                 
                 
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser"><?php echo $_smarty_tpl->tpl_vars['lang401']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['uname']->value);?>
</div>
                <div class="cusongslist">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            
            <div class="clear" style="padding-bottom:20px;"></div> 
            <center>
            <div class="scriptolutionmax375">
            <?php echo insert_get_advertisement(array('AID' => 1),$_smarty_tpl);?>

            </div>
            </center>
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser"><?php echo $_smarty_tpl->tpl_vars['lang591']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['uname']->value);?>
</div>
                <div class="cusongslist">
                
                    <div class="scriptolutionuserreviews">
                    	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['f']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/user/<?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
">
                        	<div class="review-image">
                                <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['USERID']),$_smarty_tpl), true);?>
                                <img alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['profilepicture']->value;?>
?<?php echo time();?>
" />
                            </div>
                            <div class="reviewinfo">
                        		<?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['comment']);?>

                                <br />
                                <div class="usercolorit"><?php echo stripslashes($_smarty_tpl->tpl_vars['f']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</div>
                            </div>
                        </a>
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                    </div>   
                    
                    <div class="scriptolutionsecondad">
                    	<center>
                        <?php echo insert_get_advertisement(array('AID' => 2),$_smarty_tpl);?>

                        </center>
                    </div>
                                 
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div><?php }
}
