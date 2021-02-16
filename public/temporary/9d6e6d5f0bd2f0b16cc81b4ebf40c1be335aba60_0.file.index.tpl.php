<?php
/* Smarty version 3.1.29, created on 2020-02-24 00:59:06
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53662a945ab5_35884515',
  'file_dependency' => 
  array (
    '9d6e6d5f0bd2f0b16cc81b4ebf40c1be335aba60' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/index.tpl',
      1 => 1577701677,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_feat_cats.tpl' => 1,
    'file:scriptolution_bit_list.tpl' => 1,
    'file:scriptolution_bit.tpl' => 1,
    'file:index_scriptolutionreq.tpl' => 1,
    'file:scriptolution_bit_yt_small.tpl' => 2,
  ),
),false)) {
function content_5e53662a945ab5_35884515 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_mb_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.mb_truncate.php';
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.truncate.php';
?>
<div class="bodybg <?php if ($_SESSION['USERID'] > "0") {?>topspace<?php }?>">
	<div class="<?php if ($_SESSION['USERID'] == '') {?>bodyshadow<?php } else { ?>inshadow<?php }?>">
        <div class="whitebody <?php if ($_SESSION['USERID'] > "0") {?>scriptolutionpaddingtop55<?php }?>">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_feat_cats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <div class="cusongs" style="padding-top:10px;">
                <div class="cusongtitle">
                    <h3><?php echo $_smarty_tpl->tpl_vars['lang109']->value;?>
:</h3>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "d" || $_smarty_tpl->tpl_vars['s']->value == '') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=dz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang110']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=d<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "d" || $_smarty_tpl->tpl_vars['s']->value == "dz" || $_smarty_tpl->tpl_vars['s']->value == '') {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang110']->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "p") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=pz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang111']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=p<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "p" || $_smarty_tpl->tpl_vars['s']->value == "pz") {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang111']->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "r") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=rz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang112']->value;?>
</a>
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=r<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "r" || $_smarty_tpl->tpl_vars['s']->value == "rz") {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang112']->value;?>
</a>
                        <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "c") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=cz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang436']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=c<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "c" || $_smarty_tpl->tpl_vars['s']->value == "cz") {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang436']->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "e") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=ez<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang494']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=e<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "e" || $_smarty_tpl->tpl_vars['s']->value == "ez") {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang494']->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['price_mode']->value == "3") {?>
                        <?php echo '<script'; ?>
 language="JavaScript" type="text/JavaScript"> 
                        function Scriptolution_jumpMenu(targ,selObj,restore){
                          eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
                          if (restore) selObj.selectedIndex=0; 
                        } 
                        <?php echo '</script'; ?>
> 
                        &nbsp;&nbsp;&nbsp;
                        <?php $_smarty_tpl->assign('packs' , insert_get_packs (array('value' => 'a'),$_smarty_tpl), true);?>
                        <select onChange="Scriptolution_jumpMenu('parent',this,0)" style="font-size:16px; margin-top:1px; margin-left:2px;border: 1px;padding: 3px;">
                        <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang495']->value;?>
</option>
                        <?php
$__section_p_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_p']) ? $_smarty_tpl->tpl_vars['__smarty_section_p'] : false;
$__section_p_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['packs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_0_total = $__section_p_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_0_total != 0) {
for ($__section_p_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_0_iteration <= $__section_p_0_total; $__section_p_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
?s=o&p=<?php echo stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice']);
if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['p']->value == stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice'])) {?>selected="selected"<?php }?>> <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice']*stripslashes($_SESSION['cur']);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo $_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice']*stripslashes($_SESSION['cur']);
}?></option>
                        <?php
}
}
if ($__section_p_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_p'] = $__section_p_0_saved;
}
?>
                        </select>
                        <?php }?>             
                    </p>
                    
                    <div class="topright">
                        <?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/leftbox_hover.png" /></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/rightbox.png" /></a>
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/leftbox.png" /></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/rightbox_hover.png" /></a>
                        <?php }?>
                    </div>
                
                    <div class="clear"></div>
                </div>
                <div class="cusongslist">
                    <?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div style="padding-bottom:10px;"></div> 
                    <?php } else { ?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
                    <?php }?>
                    <div class="clear"></div>
                </div>
                <div align="center">
                    <?php if ($_smarty_tpl->tpl_vars['tpp']->value != '') {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['tpp']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;
if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="agreenbutton"><i class="fa fa-chevron-left"></i></a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['tnp']->value != '') {?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/?page=<?php echo $_smarty_tpl->tpl_vars['tnp']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;
if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="agreenbutton"><i class="fa fa-chevron-right"></i></a>
                    <?php }?>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
                
            </div>
            
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:index_scriptolutionreq.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            
            <div class="noteworthy">
                <h2><?php echo $_smarty_tpl->tpl_vars['lang529']->value;?>
</h2>
                <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['scriptolutionrand']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
                <div class="newgirl">
                    <div class="newgirlimg"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img class="scriptolutionradius3" src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t4/<?php echo $_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p1'];?>
?<?php echo time();?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']);?>
" width="134" height="82" /><?php if ($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['youtube'] != '') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_yt_small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></a></div>
                    <div class="newdetails">
                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),30,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo $_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
}?></a></h3>
                        <p><?php echo smarty_modifier_mb_truncate(preg_replace('!<[^>]*?>!', ' ', html_entity_decode(stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gdesc']),@constant('ENT_QUOTES'),'utf-8')),100,"...",'UTF-8');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang105']->value;?>
</a></p>
                        <h5><?php echo $_smarty_tpl->tpl_vars['lang414']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),20,"...",true);?>
</a>&nbsp;<span class="country <?php echo $_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country'];?>
" title="<?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->tpl_vars['scriptolutionrand']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['userc']->value;?>
"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
            </div>
            <div class="noteworthy">
                <h2><?php echo $_smarty_tpl->tpl_vars['lang530']->value;?>
</h2>
                <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['scriptolutionrating']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
                <div class="newgirl">
                    <div class="newgirlimg"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img class="scriptolutionradius3" src="<?php echo $_smarty_tpl->tpl_vars['purl']->value;?>
/t4/<?php echo $_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['p1'];?>
?<?php echo time();?>
" alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']);?>
" width="134" height="82" /><?php if ($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['youtube'] != '') {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_yt_small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?></a></div>
                    <div class="newdetails">
                        <h3><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),30,"...",'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo $_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price']*stripslashes($_SESSION['cur']);
}?></a></h3>
                        <p><?php echo smarty_modifier_mb_truncate(preg_replace('!<[^>]*?>!', ' ', html_entity_decode(stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gdesc']),@constant('ENT_QUOTES'),'utf-8')),100,"...",'UTF-8');?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang105']->value;?>
</a></p>
                        <h5><?php echo $_smarty_tpl->tpl_vars['lang414']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),20,"...",true);?>
</a>&nbsp;<span class="country <?php echo $_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country'];?>
" title="<?php $_smarty_tpl->assign('userc' , insert_country_code_to_country (array('value' => 'a', 'code' => $_smarty_tpl->tpl_vars['scriptolutionrating']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['country']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['userc']->value;?>
"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div><?php }
}
