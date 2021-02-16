<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:24:11
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolutionnewrequest.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c06b3604c0_10285941',
  'file_dependency' => 
  array (
    '372a7f988af081417d9d2cafdf64e958c62bd842' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolutionnewrequest.tpl',
      1 => 1577430533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
  ),
),false)) {
function content_5e53c06b3604c0_10285941 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript">                        
  $(document).ready(function(){
	$("#toggle-additional-visuals").click(function(){
	  $("#additional-visuals").toggle('slow');
	  $('html, body').animate({
		scrollTop: $("#additional-visuals").offset().top
	  }, 200);
	});
	$('textarea').focus(function() { $(this).parent().parent().find('p.tip-text').css('visibility','visible') });
	$('textarea').blur(function() { $(this).parent().parent().find('p.tip-text').css('visibility','hidden') });
  });
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/mainscriptolution.js" type="text/javascript"><?php echo '</script'; ?>
>
                                
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="full-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/newrequest" id="new_gig" method="post">
                        	<h1><?php echo $_smarty_tpl->tpl_vars['lang621']->value;?>
</h1>
                            <div style="clear:both"></div>
                            
                            <div class="whiteBox">
                                <div class="iscriptolution">
                                    <div class="scriptolution-irequest-holder">
                                        <div class="scriptolutiontxt"><?php echo $_smarty_tpl->tpl_vars['lang622']->value;?>
 </div>
                                        <div class="scriptolutionf">
                                        	<textarea class="requesttext" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"><?php echo stripslashes($_smarty_tpl->tpl_vars['gdesc']->value);?>
</textarea>
                                        </div>
                                        <div style="clear:both; padding-top:5px;"></div>
                                    </div>
                                </div>
                                <div class="scriptolutionclear"></div>
                                
                                <div class="scriptolutionotherrequestinfo">
                                	<div class="form-entry">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_category"><?php echo $_smarty_tpl->tpl_vars['lang66']->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <select class="requesttext2" id="gig_category_id" name="gcat"><option value="0"><?php echo $_smarty_tpl->tpl_vars['lang67']->value;?>
</option>
                                          <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                                          <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                            <option value="<?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']);?>
" <?php if ($_smarty_tpl->tpl_vars['gcat']->value == $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']) {?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
</option>
                                            <?php if ($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID'] != "0") {?>
                                                <?php $_smarty_tpl->assign('scats' , insert_get_subcategories (array('parent' => $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']),$_smarty_tpl), true);?>
                                                <?php
$__section_j_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['scats']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_1_total = $__section_j_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_1_total != 0) {
for ($__section_j_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_1_iteration <= $__section_j_1_total; $__section_j_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['CATID'];?>
" <?php if ($_smarty_tpl->tpl_vars['gcat']->value == $_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['CATID']) {?>selected="selected"<?php }?>>- <?php echo stripslashes($_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['name']);?>
</option>
                                                <?php
}
}
if ($__section_j_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_1_saved;
}
?>
                                            <?php }?>
                                          <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle"><?php echo $_smarty_tpl->tpl_vars['lang625']->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value != "1") {?><span class="spartfour"><?php echo $_smarty_tpl->tpl_vars['lang197']->value;?>
</span><?php }?><input class="textb" name="gprice" size="5" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gprice']->value);?>
" /><?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {?><span class="spartfour"><?php echo $_smarty_tpl->tpl_vars['lang197']->value;?>
</span><?php }?>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle"><?php echo $_smarty_tpl->tpl_vars['lang623']->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <input class="textb" name="gdays" size="2" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gdays']->value);?>
" />&nbsp;<span class="spartfour"><?php echo $_smarty_tpl->tpl_vars['lang131']->value;?>
</span>
                                          <div class="daysdetails"><?php echo $_smarty_tpl->tpl_vars['lang624']->value;?>
</div>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>                                    
                                    
                              </div>
                                
                                
                                
                            </div>
                            <div style="clear:both"></div>                    
                            <div class="scriptolutionclear"></div>                            

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang46']->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                            </div>
                        </form>   
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter842"></div>
    </div>
</div><?php }
}
