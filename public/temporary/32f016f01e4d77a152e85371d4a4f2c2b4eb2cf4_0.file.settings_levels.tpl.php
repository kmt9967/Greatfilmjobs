<?php
/* Smarty version 3.1.29, created on 2020-05-06 09:33:59
  from "/home4/o8txizzi/public_html/dev/themes/administrator/settings_levels.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eb2bcc7628910_43379155',
  'file_dependency' => 
  array (
    '32f016f01e4d77a152e85371d4a4f2c2b4eb2cf4' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/settings_levels.tpl',
      1 => 1588772036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/settings_scriptolution1.tpl' => 1,
    'file:administrator/show_message.tpl' => 1,
  ),
),false)) {
function content_5eb2bcc7628910_43379155 ($_smarty_tpl) {
?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Settings</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="settings_general.php" id="isoft_group_2" name="group_2" title="General Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        General Settings
                                    </span>
        						</a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
    						</li>
                            
                            <li >
                                <a href="settings_meta.php" id="isoft_group_9" name="group_9" title="Meta Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Meta Settings
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_static.php" id="isoft_group_11" name="group_11" title="Static Pages" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Static Pages
                                    </span>
                                </a>
                                <div id="isoft_group_11_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_payment.php" id="isoft_group_12" name="group_12" title="Payment Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Settings
                                    </span>
                                </a>
                                <div id="isoft_group_12_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_packs.php" id="isoft_group_5" name="group_5" title="Payment Packs" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payment Packs
                                    </span>
                                </a>
                                <div id="isoft_group_5_content" style="display:none;"></div>
                            </li>
                            
                            <li >
        						<a href="settings_levels.php" id="isoft_group_1" name="group_1" title="Job Levels Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Job Levels Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Job Levels Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>           
                                                	<?php if ($_smarty_tpl->tpl_vars['price_mode']->value != "3") {?> 
                                                    <tr class="hidden">
                                                        <td class="value" style="width:800px">
                                                        To enable job levels the Price Mode must first be set to "Price Set by Seller (Using Admin Price Packs)".
                                                        </td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="value" style="width:800px">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_payment.php">Click here to change the price mode.</a>
                                                        </td>
                                                    </tr>
                                                    <?php } else { ?>                                                                                            
                                                    <tr class="hidden">
                                                        <td class="label"><label for="enable_levels">Enable Job Levels </label></td>
                                                        <td class="value">
                                                            <select id="enable_levels" name="enable_levels" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['enable_levels']->value == "1") {?>selected<?php }?>>Yes</option>
                											<option value="0" <?php if ($_smarty_tpl->tpl_vars['enable_levels']->value == "0") {?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ENABLE THE JOB LEVELS SYSTEM]</td>
                                                        <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level1job">LEVEL 1 Job Limit</label></td>
                                                        <td class="value">
                                                        	<input id="level1job" name="level1job" value="<?php echo $_smarty_tpl->tpl_vars['level1job']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS LEVEL 1 USERS CAN POST PER 24 HOURS, LEAVE EMPTY FOR UNLIMITED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level2job">LEVEL 2 Job Limit</label></td>
                                                        <td class="value">
                                                        	<input id="level2job" name="level2job" value="<?php echo $_smarty_tpl->tpl_vars['level2job']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS LEVEL 2 USERS CAN POST PER 24 HOURS, LEAVE EMPTY FOR UNLIMITED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level3job">LEVEL 3 Job Limit</label></td>
                                                        <td class="value">
                                                        	<input id="level3job" name="level3job" value="<?php echo $_smarty_tpl->tpl_vars['level3job']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS LEVEL 3 USERS CAN POST PER 24 HOURS, LEAVE EMPTY FOR UNLIMITED]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"></td>
                                                        <td class="value" style="width:800px" colspan="3">
                                                        <a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/settings_packs.php">You can set which level members has access to add jobs for each payment pack when you add/edit that payment pack.<br />Click here to manage the payment packs.</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level2num">Jobs On Time For LEVEL 2</label></td>
                                                        <td class="value">
                                                        	<input id="level2num" name="level2num" value="<?php echo $_smarty_tpl->tpl_vars['level2num']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS THE USER NEEDS TO COMPLETE ON TIME TO MOVE FROM LEVEL 1 TO LEVEL 2]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level2rate">% Rating For LEVEL 2</label></td>
                                                        <td class="value">
                                                        	<input id="level2rate" name="level2rate" value="<?php echo $_smarty_tpl->tpl_vars['level2rate']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MINIMUM RATING, IN PERCENT, THE SELLER MUST HAVE TO MOVE FROM LEVEL 1 TO LEVEL 2]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level3num">Jobs On Time For LEVEL 3</label></td>
                                                        <td class="value">
                                                        	<input id="level3num" name="level3num" value="<?php echo $_smarty_tpl->tpl_vars['level3num']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[NUMBER OF JOBS THE USER NEEDS TO COMPLETE ON TIME TO MOVE FROM LEVEL 2 TO LEVEL 3]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="level3rate">% Rating For LEVEL 3</label></td>
                                                        <td class="value">
                                                        	<input id="level3rate" name="level3rate" value="<?php echo $_smarty_tpl->tpl_vars['level3rate']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[MINIMUM RATING, IN PERCENT, THE SELLER MUST HAVE TO MOVE FROM LEVEL 2 TO LEVEL 3]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <?php }?> 
                                                </tbody>
                                                </table>
                                            </div>
                                        </fieldset>
									</div>
								</div>
    						</li>                            
                            
                            <li >
                                <a href="settings_paypal.php" id="isoft_group_6" name="group_6" title="PayPal Settings" class="tab-item-link">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        PayPal Settings
                                    </span>
                                </a>
                                <div id="isoft_group_6_content" style="display:none;"></div>
                            </li>

                            <li >
                                <a href="settings_cashfree.php" id="isoft_group_6" name="group_6" title="Cashfree Settings" class="tab-item-link">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Cashfree Settings
                                    </span>
                                </a>
                                <div id="isoft_group_6_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_scriptolution_stripe.php" id="isoft_group_9" name="group_9" title="Stripe Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Stripe Settings
                                    </span>
                                </a>
                                <div id="isoft_group_9_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="settings_alertpay.php" id="isoft_group_7" name="group_7" title="Payza Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Payza Settings
                                    </span>
                                </a>
                                <div id="isoft_group_7_content" style="display:none;"></div>
                            </li>
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/settings_scriptolution1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <li >
                                <a href="settings_referrals.php" id="isoft_group_8" name="group_8" title="Referral Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Referral Settings
                                    </span>
                                </a>
                                <div id="isoft_group_8_content" style="display:none;"></div>
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
                               <h3 class="icon-head head-products">Settings - Job Levels Settings</h3>
                               <p class="content-buttons form-buttons">
                               <?php if ($_smarty_tpl->tpl_vars['price_mode']->value == "3") {?>
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                <?php }?>
                                </p>
                            </div>
                            
                            <form action="settings_levels.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div><?php }
}
