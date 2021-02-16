<?php
/* Smarty version 3.1.29, created on 2020-02-24 06:10:38
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/administrator/home.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53af2e2738b3_92100016',
  'file_dependency' => 
  array (
    '0757cb5046fba2160812481779ed12462fb03961' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/administrator/home.tpl',
      1 => 1577432757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53af2e2738b3_92100016 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/dev.greatfilmjobs.com/scriptolution/libs/plugins/modifier.truncate.php';
?>
	<div class="middle" id="anchor-content">
    	<div id="page:main-container">
        	
            <div id="messages"></div>
            
            <div class="content-header">
                <table cellspacing="0">
                    <tr>
                        <td><h3 class="head-dashboard">Home</h3></td>
                    </tr>
                </table>
            </div>
            
			<div class="dashboard-container">
    			<p class="switcher">
                	<label for="store_switcher">Website Statistics</label>
				</p>
                  
				<table cellspacing="25" width="100%">
        		<tr>
            		<td>                                                
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Gig Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Gigs Awaiting Validation</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v1(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                            <tr>
                                            	<td class=" ">New Gigs</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v4(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                            <tr>
                                            	<td class=" ">Total Gigs</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v5(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Order Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Total Orders</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Gig Orders</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'orders'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Want Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Wants Awaiting Validation</td>
                                                <td class=" a-center last"><?php echo insert_get_total_v2(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                            <tr>
                                            	<td class=" ">Total Wants</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'wants'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                
            	</td>
                <td>                                                
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Category Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Total Categories</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Categories</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'categories'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Advertisement Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Total Ads</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Standard Advertisements</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'advertisements'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Member Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Total Members</td>
                                                <td class=" a-center last"><?php echo insert_get_total_m3(array(),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Payment Statistics</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   width="100"  />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Summary</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">Results</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            	<td class=" ">Total Payments</td>
                                                <td class=" a-center last"><?php echo insert_get_total_com(array('value' => 'var', 'table' => 'payments'),$_smarty_tpl);?>
</td>
                                        	</tr>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>
                
            	</td>
            	<td>
                        
                        <div class="entry-edit">
                    		<div class="entry-edit-head"><h4>Last 10 Members</h4></div>
                    		<fieldset class="np">
                                <div class="grid np">
                                    <table cellspacing="0" style="border:0;" id="lastOrdersGrid_table">
                                        <col   />
                                        <col   />
                                        <thead>
                                            <tr class="headings">
                                                <th  class=" no-link"><span class="nobr">Username</span></th>
                                                <th  class=" no-link a-center last"><span class="nobr">E-Mail Address</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['results']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                            <tr>
                                            	<td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),20,"...",true);?>
</td>
                                                <td class=" a-center last"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email']),50,"...",true);?>
</td>
                                        	</tr>
											<?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                        </tbody>
                                    </table>
                                </div>
							</fieldset>
                		</div>

            </td>
        </tr>
    </table>
</div>
                        </div>
        </div><?php }
}
