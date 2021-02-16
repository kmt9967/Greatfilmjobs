<?php
/* Smarty version 3.1.29, created on 2020-03-06 06:03:11
  from "/home4/o8txizzi/public_html/dev/themes/scriptolution_feat_cats.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e622def6c75f7_47798262',
  'file_dependency' => 
  array (
    '8119276d1a6a4c461a6ee618d86362dab428832a' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/scriptolution_feat_cats.tpl',
      1 => 1577430530,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e622def6c75f7_47798262 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_mb_truncate')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.mb_truncate.php';
?>
		<?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_home_featcats']->value == "1") {?>
		<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolution_feat_cats.css" media="screen" rel="stylesheet" type="text/css" />
        <div class="scriptolutionsmain1" style="top:-20px;">        	
            <div class="scriptolution-h-header"><?php echo $_smarty_tpl->tpl_vars['lang551']->value;?>
</div>
            <div class="scriptolution-s-small"><?php echo $_smarty_tpl->tpl_vars['lang552']->value;?>
</div>
        </div>
        <div class="scriptolutionsmain2" style="top:-20px;"> 
            <div style="clear:both;"></div>
            <?php $_smarty_tpl->assign('scriptolutionfeatcs' , insert_get_scriptolution_featcats (array('value' => 'a'),$_smarty_tpl), true);?>
        	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] <= $__section_i_0_total; $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
            <div class="scriptolutionsblock <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['iteration'] : null)%3 == 0) {?>last<?php }?>">
                <div class="songperson">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
?s=p"><img <?php if ($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_catimage'] == "scriptolution_default_category.jpg") {?>src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/scriptolution_default_category.jpg"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['scriptolutioncaturl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_catimage'];?>
?<?php echo time();?>
"<?php }?> alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
" width="285" height="145" /></a>
                </div>
                <p>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
?s=p"><?php echo mb_strtoupper(smarty_modifier_mb_truncate(stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']),60,"...",'UTF-8'), 'UTF-8');?>
</a>                    
                </p>
                <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/categories/<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['seo']);?>
?s=p">
                <ul class="scriptolution-t-tags" style="padding-top:5px;">
                	<?php if ($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_cattag1'] != '') {?><li><?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_cattag1']);?>
</li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_cattag2'] != '') {?><li><?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_cattag2']);?>
</li><?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_cattag3'] != '') {?><li><?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionfeatcs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_cattag3']);?>
</li><?php }?>
                </ul>
                </a>
            </div>
            <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
        </div>
        <div style="clear:both;"></div>
		<?php }
}
}
