<?php
/* Smarty version 3.1.29, created on 2020-03-02 10:37:32
  from "/home4/o8txizzi/public_html/themes/tags.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d283ca5b7d3_05947769',
  'file_dependency' => 
  array (
    '81f2714cb0a412321da704c0fc857fb22b3daaa9' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/tags.tpl',
      1 => 1577430526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error.tpl' => 1,
    'file:scriptolution_bit_list_last3.tpl' => 1,
    'file:scriptolution_bit_last3.tpl' => 1,
  ),
),false)) {
function content_5e5d283ca5b7d3_05947769 ($_smarty_tpl) {
?>
<div class="bodybg topspace">
    <div class="ScriptolutionNoBox">
    	<div class="customsongs" style="padding: 25px 0 0;">
            <h3><?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
</h3>
        </div>
    </div>
    <div class="tagcloud" style="background:url(<?php echo $_smarty_tpl->tpl_vars['scriptolutioncaturl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptolution_bigimage']->value;?>
) no-repeat;">
        <h2><?php echo stripslashes($_smarty_tpl->tpl_vars['cname']->value);?>
</h2>
        <ul>
        	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tags']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = min(($__section_i_0_loop - 0), 10);
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != '' && $_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)] != $_smarty_tpl->tpl_vars['tag']->value) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
" class="tag">&nbsp;<?php echo stripslashes($_smarty_tpl->tpl_vars['tags']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]);?>
&nbsp;</a></li><?php }?>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
        </ul>
    </div>
	<div class="inshadow">
		<div class="whitebox">
            <div class="leftbar">
                <div class="allmusic">
                    <h3><?php echo $_smarty_tpl->tpl_vars['lang524']->value;?>
</h3>
                    <ul>                        
                        <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                        <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total != 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
"><?php if ($_smarty_tpl->tpl_vars['cid']->value == $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']) {?><font color="#689c2c"><?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
</font><?php } else {
echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);
}?></a></li>
                        <?php $_smarty_tpl->assign('subcat' , insert_get_subcategories (array('value' => 'var', 'parent' => $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']),$_smarty_tpl), true);?>
                        <?php if (count($_smarty_tpl->tpl_vars['subcat']->value) > "0") {?>
                            <?php
$__section_sc_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_sc']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc'] : false;
$__section_sc_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['subcat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_sc_2_total = $__section_sc_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = new Smarty_Variable(array());
if ($__section_sc_2_total != 0) {
for ($__section_sc_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] = 0; $__section_sc_2_iteration <= $__section_sc_2_total; $__section_sc_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']++){
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
">- <?php if ($_smarty_tpl->tpl_vars['cid']->value == $_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['name']) {?><font color="#689c2c"><?php echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['name']);?>
</font><?php } else {
echo stripslashes($_smarty_tpl->tpl_vars['subcat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_sc']->value['index'] : null)]['name']);
}?></a></li>
                            <?php
}
}
if ($__section_sc_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_sc'] = $__section_sc_2_saved;
}
?>
                        <?php }?>
                        <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                    </ul>
                </div>
                <div class="border"></div>
                <center><?php echo insert_get_advertisement(array('AID' => 2),$_smarty_tpl);?>
</center>
            </div>
            <div class="songslist">
                <div style="padding-bottom:15px;"></div>
                <div class="cusongtitle">
                	<h3><?php echo $_smarty_tpl->tpl_vars['lang109']->value;?>
:</h3>
                    <p>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "d" || $_smarty_tpl->tpl_vars['s']->value == '') {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=dz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang110']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=d<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "d" || $_smarty_tpl->tpl_vars['s']->value == "dz" || $_smarty_tpl->tpl_vars['s']->value == '') {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang110']->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "p") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=pz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang111']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=p<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "p" || $_smarty_tpl->tpl_vars['s']->value == "pz") {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang111']->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "r") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=rz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang112']->value;?>
</a>
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=r<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "r" || $_smarty_tpl->tpl_vars['s']->value == "rz") {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang112']->value;?>
</a>
                        <?php }?> 
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "c") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=cz<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang436']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=c<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['s']->value == "c" || $_smarty_tpl->tpl_vars['s']->value == "cz") {?>class="active"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang436']->value;?>
</a> 
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['s']->value == "e") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=ez<?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" class="active"><?php echo $_smarty_tpl->tpl_vars['lang494']->value;?>
</a> 
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
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
                        <select onChange="Scriptolution_jumpMenu('parent',this,0)" style="font-size:16px; margin-top:2px; margin-left:2px;">
                        <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang495']->value;?>
</option>
                        <?php
$__section_p_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_p']) ? $_smarty_tpl->tpl_vars['__smarty_section_p'] : false;
$__section_p_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['packs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_3_total = $__section_p_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_3_total != 0) {
for ($__section_p_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_3_iteration <= $__section_p_3_total; $__section_p_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?s=o&p=<?php echo stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice']);
if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>&sdisplay=list<?php }?>" <?php if ($_smarty_tpl->tpl_vars['p']->value == stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang197']->value;
echo stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice']);?>
</option>
                        <?php
}
}
if ($__section_p_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_p'] = $__section_p_3_saved;
}
?>
                        </select>
                        <?php }?>             
                    </p>
                    <div class="topright">
                        <?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/leftbox_hover.png" /></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/rightbox.png" /></a>
                        <?php } else { ?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/leftbox.png" /></a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/tags/<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['tag']->value);?>
?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;
echo $_smarty_tpl->tpl_vars['adds']->value;?>
&sdisplay=list"><img src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/rightbox_hover.png" /></a>
                        <?php }?>
                    </div>
                    <div class="clear"></div>
                </div>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <div class="cusongslist">
                    <?php if ($_smarty_tpl->tpl_vars['sdisplay']->value == "list") {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_list_last3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                    <div style="padding-bottom:10px;"></div> 
                    <?php } else { ?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_bit_last3.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                
                    <?php }?>
                    <div class="clear"></div>
                </div>
                <div align="center">
                    <div class="paging">
                        <div class="p1">
                            <ul>
                                <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            	<div class="rss-link"><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/rss}"><?php echo $_smarty_tpl->tpl_vars['lang108']->value;?>
</a></div>
            	<div class="clear" style="padding-bottom:20px;"></div>
            </div>
    		<div class="clear"></div>	
		</div>
	</div>
</div><?php }
}
