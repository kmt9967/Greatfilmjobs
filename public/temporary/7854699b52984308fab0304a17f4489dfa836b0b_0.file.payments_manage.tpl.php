<?php
/* Smarty version 3.1.29, created on 2020-05-06 06:07:07
  from "/home4/o8txizzi/public_html/dev/themes/administrator/payments_manage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eb28c4b1f4e02_69760420',
  'file_dependency' => 
  array (
    '7854699b52984308fab0304a17f4489dfa836b0b' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/payments_manage.tpl',
      1 => 1577432760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/show_message.tpl' => 1,
  ),
),false)) {
function content_5eb28c4b1f4e02_69760420 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.date_format.php';
?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Payments</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="payments_manage.php" id="isoft_group_1" name="group_1" title="Manage Payments" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Payments
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Manage Payments</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

                                        <div>
        			<div id="customerGrid">
        				<table cellspacing="0" class="actions">
        				<tr>
                    		<td class="pager">
                            	Showing <?php if ($_smarty_tpl->tpl_vars['total']->value > 0) {
echo $_smarty_tpl->tpl_vars['beginning']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['ending']->value;?>
 of <?php }
echo $_smarty_tpl->tpl_vars['total']->value;?>
 Payments
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='payments_manage.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="120" />
                                <col  width="100"  />
                                <col  width="150"  />
                                <col  width="150"  />
                                <col  width="300"  />
                                <col  width="100"  />
                                <col   />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="payments_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=ID&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "ID") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&OID=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&PAYPAL=<?php echo $_smarty_tpl->tpl_vars['PAYPAL']->value;
}?>" name="id" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "ID") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=OID&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "OID") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&OID=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&PAYPAL=<?php echo $_smarty_tpl->tpl_vars['PAYPAL']->value;
}?>" name="OID" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "OID") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Order ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "username") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&OID=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&PAYPAL=<?php echo $_smarty_tpl->tpl_vars['PAYPAL']->value;
}?>" name="username" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "username") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Buyer</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=time&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "time") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&OID=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&PAYPAL=<?php echo $_smarty_tpl->tpl_vars['PAYPAL']->value;
}?>" name="time" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "time") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Payment Date</span></a></span></th>
                                        <th ><span class="nobr"><a href="payments_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=PAYPAL&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "PAYPAL") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&OID=<?php echo $_smarty_tpl->tpl_vars['OID']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&PAYPAL=<?php echo $_smarty_tpl->tpl_vars['PAYPAL']->value;
}?>" name="PAYPAL" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "PAYPAL") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Payment Method</span></a></span></th>
                                        <th  class=" no-link last"><span class="nobr">Price</span></th>
                                        <th  class=" no-link last"><span class="nobr">Status</span></th>
	                	            </tr>
	            	            	<tr class="filter">
                                        <th >
                                            <div class="range">
                                                <div class="range-line">
                                                    <span class="label">From:</span> 
                                                    <input type="text" name="fromid" id="fromid" value="<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
" class="input-text no-changes"/>
                                                </div>
                                                <div class="range-line">
                                                    <span class="label">To : </span>
                                                    <input type="text" name="toid" id="toid" value="<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
" class="input-text no-changes"/>
                                                </div>
                                            </div>
                                        </th>
                                        <th ><input type="text" name="OID" id="OID" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['OID']->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['username']->value);?>
" class="input-text no-changes"/></th>
                                        <th></th>
                                        <th ></th>
                                        <th ></th>
                                        <th  class=" no-link last">
                                            <div style="width: 100%;">&nbsp;</div>
                                        </th>
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
                                    <tr id="" >
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ID'];?>
</td>
                                        <td class=" " align="center"><a href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/orders_manage.php?page=1&sortby=OID&sorthow=desc&fromid=<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
&toid=<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['OID'];?>
</a></td>
                                        <td align="center"><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),20,"...",true);?>
</td>
                                        <td align="center"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time'],"%b %e, %Y");?>
</td>
                                        <td class=" " style="background-color:#FFC">
                                        	<b>
                                            <?php if ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fiverrscriptdotcom_local'] == "1") {?>
                                            	Local Bank Payment
                                            <?php } elseif ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['fiverrscriptdotcom_available'] == "1") {?>
                                            	Available Balance
                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PAYPAL'] > "0") {?>
                                                <?php $_smarty_tpl->assign('pa' , insert_get_trans_id (array('value' => 'a', 'id' => $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PAYPAL']),$_smarty_tpl), true);?>
                                                <?php if ($_smarty_tpl->tpl_vars['pa']->value[0]['memo'] == "alertpay") {?>AlertPay<?php } else { ?>PayPal<?php }?> (Transaction ID: <?php echo $_smarty_tpl->tpl_vars['pa']->value[0]['txn_id'];?>
)
                                                <?php } else { ?>
                                                Account Balance
                                                <?php }?>
                                            <?php }?>
                                            </b>
                                        </td>
                                        <td><?php if ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['t'] == "0") {?>-<?php }?>$<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['price'];?>
</td>
                                        <td class=" last"><?php if ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['t'] == "0") {?>Reversal<?php } else {
if ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['cancel'] == "1") {?>Cancelled<?php } elseif ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['wd'] == "1") {?>Cleared<?php } else { ?>Not Cleared<?php }
}?></td>
                                	</tr>
                                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                    <tr>
                                    	<td colspan="7">
                                        <?php echo $_smarty_tpl->tpl_vars['pagelinks']->value;?>

                                        </td>
                                    </tr>
	    	    	    		</tbody>
								</table>
                            </div>
                        </div>
					</div>
				</div>
									</div>
								</div>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                               
                                
                                
                                
    						</li>
                            
                            <li >
                                <a href="payments_featured.php" id="isoft_group_3" name="group_3" title="Feature Gig Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Feature Gig Payments
                                    </span>
                                </a>
                                <div id="isoft_group_3_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="payments_clear.php" id="isoft_group_2" name="group_2" title="Clear Payments" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Clear Payments
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
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
                               <h3 class="icon-head head-products">Payments - Manage Payments</h3>
                            </div>
                            
                            <form action="payments_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div><?php }
}
