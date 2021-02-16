<?php
/* Smarty version 3.1.29, created on 2020-05-06 09:28:00
  from "/home4/o8txizzi/public_html/dev/themes/administrator/settings_cashfree.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eb2bb607c2ee5_28996628',
  'file_dependency' => 
  array (
    '1c9b68513d2a1d0c0046292ac8c551073d521ef6' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/settings_cashfree.tpl',
      1 => 1588771577,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/settings_scriptolution1.tpl' => 1,
    'file:administrator/show_message.tpl' => 1,
  ),
),false)) {
function content_5eb2bb607c2ee5_28996628 ($_smarty_tpl) {
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
                                <a href="settings_levels.php" id="isoft_group_20" name="group_20" title="Job Levels Settings" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Job Levels Settings
                                    </span>
                                </a>
                                <div id="isoft_group_20_content" style="display:none;"></div>
                            </li>
                            
                            <li >
        						<a href="settings_paypal.php" id="isoft_group_1" name="group_1" title="PayPal Settings" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        PayPal Settings
                                    </span>
        						</a>
                                
        						<div id="isoft_group_1_content" style="display:none;"></div>
    						</li>
                            <li >
                                <a href="settings_cashfree.php" id="isoft_group_13" name="group_13" title="Cashfree Settings" class="tab-item-link">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Cashfree Settings
                                    </span>
                                </a>
                                <div id="isoft_group_13_content" style="display:none;">
                                    
                                    <div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Cashfree Settings</h4>
                                            <div class="form-buttons">

                                            </div>
                                        </div>

                                        <fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                                <table cellspacing="0" class="form-list">
                                                <tbody>                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Enable Cashfree</label></td>
                                                        <td class="value">
                                                            <select id="enable_cashfree" name="enable_cashfree" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['enable_cashfree']->value == "1") {?>selected<?php }?>>Yes</option>
                                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['enable_cashfree']->value == "0") {?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ALLOW BUYERS TO PAY USING Cashfree]</td>
                                                        <td><small></small></td>
                                                    </tr>

                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Test Mode</label></td>
                                                        <td class="value">
                                                            <select id="cashfree_mode" name="cashfree_mode" class=" required-entry required-entry select" type="select">
                                                            <option value="1" <?php if ($_smarty_tpl->tpl_vars['cashfree_mode']->value == "1") {?>selected<?php }?>>Yes</option>
                                                            <option value="0" <?php if ($_smarty_tpl->tpl_vars['cashfree_mode']->value == "0") {?>selected<?php }?>>No</option>
                                                            </select>
                                                        </td>
                                                        <td><small></small></td>
                                                    </tr>
                                                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Cashfree Secret Key</label></td>
                                                        <td class="value">
                                                            <input id="cashfree_secret_key" name="cashfree_secret_key" value="<?php echo $_smarty_tpl->tpl_vars['cashfree_secret_key']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <!-- <td class="scope-label">[E-MAIL ADDRESS PAYPAL PAYMENTS ARE SENT TO]</td> -->
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Cashfree App ID</label></td>
                                                        <td class="value">
                                                            <input id="cashfree_app_id" name="cashfree_app_id" value="<?php echo $_smarty_tpl->tpl_vars['cashfree_app_id']->value;?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <!-- <td class="scope-label">[E-MAIL ADDRESS PAYPAL NOTIFICATIONS ARE SENT TO]</td> -->
                                                        <td><small></small></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            <input type="hidden" name="scriptolutiontoken" value="<?php echo $_smarty_tpl->tpl_vars['scriptolutiontoken']->value;?>
" />
                                        </fieldset>
                                    </div>
                                </div>
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
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_13', []);
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
                               <h3 class="icon-head head-products">Settings - Cashfree Settings</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Save Changes</span></button>			
                                </p>
                            </div>
                            
                            <form action="settings_cashfree.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div><?php }
}
