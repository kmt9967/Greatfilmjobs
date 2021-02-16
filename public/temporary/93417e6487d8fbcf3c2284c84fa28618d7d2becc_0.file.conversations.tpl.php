<?php
/* Smarty version 3.1.29, created on 2020-03-20 08:58:14
  from "/home4/o8txizzi/public_html/dev/themes/conversations.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e74bde681b007_36566493',
  'file_dependency' => 
  array (
    '93417e6487d8fbcf3c2284c84fa28618d7d2becc' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/conversations.tpl',
      1 => 1577430521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:track_files.tpl' => 1,
    'file:conversation_bit.tpl' => 1,
  ),
),false)) {
function content_5e74bde681b007_36566493 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/function.math.php';
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.tools.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.uploadify.v2.1.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/swfobject.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.scrollTo-min.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.corner.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.qtip-1.0.0-rc3.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.hint.js" type="text/javascript"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/conversations.php" type="text/javascript"><?php echo '</script'; ?>
>
<link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolutionconvos.css" media="screen" rel="stylesheet" type="text/css" />

<style>
.message-toolkit {
	clear:both;
	float:right;
	font-size:12px;	
}
.related-gig a {
    color: #fff !important;
}
</style>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            
<div id="action-bar" class="mp-box action-bar-orders">
	<div class="box-row">
		<div class="action-steps cf">
			<div class="step">
                <div class="order-meta"> 
                    <h5>
                    <b>
                    <?php echo $_smarty_tpl->tpl_vars['lang235']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['u']->value['username'])),$_smarty_tpl);?>
"><?php echo stripslashes($_smarty_tpl->tpl_vars['u']->value['username']);?>
</a>
                    </b>
                    </h5>
                </div>
			</div>
		</div>
	</div>
</div>            
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">					
                    <?php if (count($_smarty_tpl->tpl_vars['m']->value) > "0") {?>
                      <h3 class="meta-details"> 
                        <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/inbox" method="post" name="arform" id="arform">                               
                        <input type="hidden" name="auid" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['USERID'];?>
"  />
                        <input type="hidden" name="subarc" value="1"  />
                        </form>
                        <a href="#" onclick="document.arform.submit()"><?php echo $_smarty_tpl->tpl_vars['lang236']->value;?>
</a> 
                      </h3>
                      <div>
                      <?php echo $_smarty_tpl->tpl_vars['lang237']->value;?>
 <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[0]['time']);?>
 
                        &bull;
                        <span id="conversation_update_info">
                          <?php echo $_smarty_tpl->tpl_vars['lang238']->value;?>
 <b><?php echo smarty_function_math(array('assign'=>"t1",'equation'=>"x-1",'x'=>count($_smarty_tpl->tpl_vars['m']->value)),$_smarty_tpl);
echo stripslashes($_smarty_tpl->tpl_vars['m']->value[$_smarty_tpl->tpl_vars['t1']->value]['mfrom']);?>
</b>
                        </span >                                   
                      </div>
                      <div style="padding-bottom:10px; clear:both"></div>
                      <?php }?>          
                    <div id="msgresults">
                        <?php $_smarty_tpl->assign('lasdel' , insert_last_delivery (array('value' => 'a', 'oid' => $_smarty_tpl->tpl_vars['o']->value['OID']),$_smarty_tpl), true);?>
                        <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['m']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                        <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['unread'] == "1") {?>
                        <?php if ($_SESSION['USERID'] == $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MSGTO']) {?>
                        <?php echo insert_mark_read(array('value' => 'a', 'mid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID']),$_smarty_tpl);?>

                        <?php }?>
                        <?php }?>
                        <?php $_smarty_tpl->assign('profilepicture' , insert_get_member_profilepicture (array('value' => 'var', 'USERID' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MSGFROM']),$_smarty_tpl), true);?>
                            <div class="db-main-table <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom'] != $_SESSION['USERNAME']) {?>yellowbg<?php }?>" id="message_<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">
                                <table>
                                    <tbody>
                                    <tr>
                                        <td class="leftitscriptolution width25">
                                            <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo insert_get_seo_profile(array('value' => 'a', 'username' => stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom'])),$_smarty_tpl);?>
" title="<?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom']);?>
"><img alt="<?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom']);?>
" src="<?php echo $_smarty_tpl->tpl_vars['membersprofilepicurl']->value;?>
/thumbs/<?php echo $_smarty_tpl->tpl_vars['profilepicture']->value;?>
?<?php echo time();?>
" class="scriptolutionuimage" /></a>
                                        </td>
                                        <td class="leftitscriptolution width75">                                
                                            <div class="milestone action reqbox" title="<?php echo $_smarty_tpl->tpl_vars['lang293']->value;?>
"> 
                                                <div class="status-label"></div> 
                                                <div class="mutual-status underway">
                                                    <?php if ($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'] > "0") {?>
                                                    <?php $_smarty_tpl->assign('gml' , insert_gig_details (array('value' => 'a', 'pid' => $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID']),$_smarty_tpl), true);?>
                                                    <?php
$__section_z_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_z']) ? $_smarty_tpl->tpl_vars['__smarty_section_z'] : false;
$__section_z_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['gml']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_z_1_total = $__section_z_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_z'] = new Smarty_Variable(array());
if ($__section_z_1_total != 0) {
for ($__section_z_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_z']->value['index'] = 0; $__section_z_1_iteration <= $__section_z_1_total; $__section_z_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_z']->value['index']++){
?>
                                                    <?php $_smarty_tpl->assign('ztitle' , insert_seo_clean_titles (array('value' => 'a', 'title' => $_smarty_tpl->tpl_vars['gml']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_z']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_z']->value['index'] : null)]['gtitle']),$_smarty_tpl), true);?>
                                                    <div class='scriptolution_notice'>                                            
                                                        <p class="related-gig">
                                                          <span><?php echo $_smarty_tpl->tpl_vars['lang239']->value;?>
 "<a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['gml']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_z']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_z']->value['index'] : null)]['seo']);?>
/<?php echo stripslashes($_smarty_tpl->tpl_vars['gml']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_z']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_z']->value['index'] : null)]['PID']);?>
/<?php echo $_smarty_tpl->tpl_vars['ztitle']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 <?php echo stripslashes($_smarty_tpl->tpl_vars['gml']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_z']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_z']->value['index'] : null)]['gtitle']);?>
 <?php echo $_smarty_tpl->tpl_vars['lang63']->value;
echo stripslashes($_smarty_tpl->tpl_vars['gml']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_z']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_z']->value['index'] : null)]['price']);?>
</a>"</span>
                                                        </p>
                                                    </div>
                                                    <?php
}
}
if ($__section_z_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_z'] = $__section_z_1_saved;
}
?>
                                                    <?php }?>
                                                    <h3><?php echo stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['mfrom']);?>
</h3>
                                                    <div class="padding5"></div>
                                                    <span><p><?php echo nl2br(stripslashes($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['message']));?>
</p></span>
                                                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:track_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('scriptolutionfileinfo'=>$_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]), 0, true);
?>

                                                </div> 
                                            </div>
                                            
                                            <div class="message-toolkit">
                                              <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/spam?id=<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
" class="spam_message"><?php echo $_smarty_tpl->tpl_vars['lang245']->value;?>
<span id="spam_message<?php echo $_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['MID'];?>
">&nbsp;<?php echo $_smarty_tpl->tpl_vars['lang246']->value;?>
</span></a>
                                              <br />
                                              <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['m']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time']);?>

                                            </div> 
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                    </div>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:conversation_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

					<div class="clear"></div>				
				</div>
			</div>
            
            <div class="right-side">
				<center>
                <?php echo insert_get_advertisement(array('AID' => 2),$_smarty_tpl);?>

                </center>	
			</div>
                        
		</div>    
	</div>
</div><?php }
}
