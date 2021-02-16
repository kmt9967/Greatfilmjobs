<?php
/* Smarty version 3.1.29, created on 2020-05-13 10:46:16
  from "/home4/o8txizzi/public_html/dev/themes/scriptolutionrequests.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ebc08385dcc47_04761858',
  'file_dependency' => 
  array (
    'f2a4cb9bdfc8be43b31a57529e4bbc14f6645ef2' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/scriptolutionrequests.tpl',
      1 => 1583474775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
  ),
),false)) {
function content_5ebc08385dcc47_04761858 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.truncate.php';
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 newgray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="scriptolution-no-side">
				<div class="whiteBox padding15 scriptolutionshop">
                	<div id="scriptolution_dotcom_shop">					
                    <h1><?php echo $_smarty_tpl->tpl_vars['lang632']->value;?>
</h1>
                    </div>
                    <?php echo '<script'; ?>
 language="JavaScript" type="text/JavaScript"> 
					function Scriptolution_dotcom_jumpMenu(targ,selObj,restore){
					  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
					  if (restore) selObj.selectedIndex=0; 
					} 
					<?php echo '</script'; ?>
>
                    <div class="scripto_lution_rcatwrapper">
                      <select onChange="Scriptolution_dotcom_jumpMenu('parent',this,0)" class="text" id="scriptolution_req_cat" name="scriptolution_req_cat">
                      <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/requests"><?php echo $_smarty_tpl->tpl_vars['lang66']->value;?>
</option>
                      <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                      <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_0_iteration == $__section_i_0_total);
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/requests?c=<?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']);?>
" <?php if ($_smarty_tpl->tpl_vars['scriptolution_req_cat']->value == $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']) {?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
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
                            <option value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/requests?c=<?php echo $_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['CATID'];?>
" <?php if ($_smarty_tpl->tpl_vars['scriptolution_req_cat']->value == $_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['CATID']) {?>selected="selected"<?php }?>>- <?php echo stripslashes($_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['name']);?>
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
                            <?php if (count($_smarty_tpl->tpl_vars['posts']->value) == "0") {?>
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
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['posts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_i']->value['last'] = ($__section_i_2_iteration == $__section_i_2_total);
?>
                                <?php $_smarty_tpl->assign('title' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
								<tr>
									<td class="status-star">
                                        <div class="scriptolutionviewrequest3">
                                        	<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username'])),$_smarty_tpl);?>
"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),15,"...",true);?>
</a>
                                        </div>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsissuggest"> 
                                        	<div class="scriptolutionviewrequest1">
                                        		<?php echo stripslashes($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondesc']);?>

                                            </div>
										</div>
									</td>
                                    <td class="scriptolutionmhide">
                                    	<div class="offersbuttonscriptolutionnopointer" href=""><?php $_smarty_tpl->assign('socnt' , insert_scriptolutionoffercnt (array('value' => 'a', 'REQUESTID' => $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['REQUESTID']),$_smarty_tpl), true);
echo $_smarty_tpl->tpl_vars['socnt']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['socnt']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang640']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang631']->value;
}?></div>
                                    </td>
                                    <td class="scriptolutionmhide">
                                    	<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondays'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang131']->value;?>

                                    </td>
                                    <td class="scriptolutionmhide">
                                        <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutionprice']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutionprice']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                    	<?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value != "1") {
echo $_SESSION['csyumbol'];
}
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_SESSION['csyumbol'];
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
                                    	<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutiondays'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang131']->value;?>

                                    	<span style="margin-right:30px;"></span>
                                        <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutionprice']*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable($_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolutionprice']*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                    	<?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value != "1") {
echo $_SESSION['csyumbol'];
}
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_SESSION['csyumbol'];
}?>
                                    </td>
								</tr>
                                <tr>
                                    <td class="scriptolutiontopborder0" colspan="2">
                                    	<a class="sendascriptolutionoffer" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/sendoffer?REQID=<?php echo $_smarty_tpl->tpl_vars['posts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['REQUESTID'];?>
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
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
							<?php }?>
							</tbody>
						</table>
					</div>
					<div class="clear"></div>
                    <div align="center">
                        <div class="paging">
                            <div class="p1">
                                <ul>
                                    <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>				
				</div>
			</div>
		</div>    
	</div>
</div><?php }
}
