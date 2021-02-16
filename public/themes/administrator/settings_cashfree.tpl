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
                                                            <option value="1" {if $enable_cashfree eq "1"}selected{/if}>Yes</option>
                                                            <option value="0" {if $enable_cashfree eq "0"}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td class="scope-label">[ALLOW BUYERS TO PAY USING Cashfree]</td>
                                                        <td><small></small></td>
                                                    </tr>

                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Test Mode</label></td>
                                                        <td class="value">
                                                            <select id="cashfree_mode" name="cashfree_mode" class=" required-entry required-entry select" type="select">
                                                            <option value="1" {if $cashfree_mode eq "1"}selected{/if}>Yes</option>
                                                            <option value="0" {if $cashfree_mode eq "0"}selected{/if}>No</option>
                                                            </select>
                                                        </td>
                                                        <td><small></small></td>
                                                    </tr>
                                                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Cashfree Secret Key</label></td>
                                                        <td class="value">
                                                            <input id="cashfree_secret_key" name="cashfree_secret_key" value="{$cashfree_secret_key}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <!-- <td class="scope-label">[E-MAIL ADDRESS PAYPAL PAYMENTS ARE SENT TO]</td> -->
                                                        <td><small></small></td>
                                                    </tr>
                                                    
                                                    <tr class="hidden">
                                                        <td class="label"><label for="status">Cashfree App ID</label></td>
                                                        <td class="value">
                                                            <input id="cashfree_app_id" name="cashfree_app_id" value="{$cashfree_app_id}" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <!-- <td class="scope-label">[E-MAIL ADDRESS PAYPAL NOTIFICATIONS ARE SENT TO]</td> -->
                                                        <td><small></small></td>
                                                    </tr>
                                                </tbody>
                                                </table>
                                            </div>
                                            <input type="hidden" name="scriptolutiontoken" value="{$scriptolutiontoken}" />
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
                            {include file="administrator/settings_scriptolution1.tpl"}
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
                        
						<script type="text/javascript">
                            isoftJsTabs = new varienTabs('isoft', 'main_form', 'isoft_group_13', []);
                        </script>
                        
					</div>
                    
					<div class="main-col" id="content">
						<div class="main-col-inner">
							<div id="messages">
                            {if $message ne "" OR $error ne ""}
                            	{include file="administrator/show_message.tpl"}
                            {/if}
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
        </div>