<?php
/* Smarty version 3.1.29, created on 2020-03-19 03:12:37
  from "/home4/o8txizzi/public_html/dev/themes/administrator/admins_manage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e731b658cba64_30945742',
  'file_dependency' => 
  array (
    '4b674ec75c6fbd97539b66898d4ee10b0ce80b0a' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/admins_manage.tpl',
      1 => 1577432771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/show_message.tpl' => 1,
  ),
),false)) {
function content_5e731b658cba64_30945742 ($_smarty_tpl) {
?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Administrators</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="admins_manage.php" id="isoft_group_1" name="group_1" title="Manage Administrators" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Administrators
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Administrators</h4>
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
 Administrators
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='admins_manage.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="50"  width="100px"  />
                                <col   />
                                <col  width="150"  />
                                <col  width="100"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="admins_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=ADMINID&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "ADMINID") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&email=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;
}?>" name="id" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "ADMINID") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="admins_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=email&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "email") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&$toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&email=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;
}?>" name="email" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "email") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">E-Mail Address</span></a></span></th>
                                        <th ><span class="nobr"><a href="admins_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "username") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&$toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&email=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;
}?>" name="username" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "username") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Username</span></a></span></th>
                                        <th  class=" no-link last"><span class="nobr">Action</span></th>
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
                                        <th ><input type="text" name="email" id="email" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['email']->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['username']->value);?>
" class="input-text no-changes"/></th>
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
                                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ADMINID'];?>
</td>
                                        <td class=" "><?php echo stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['email']);?>
</td>
                                        <td class=" "><?php echo stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']);?>
</td>
                                        <td class=" last">
                                        	<a href="admins_edit.php?ADMINID=<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ADMINID'];?>
">Edit</a>&nbsp;|&nbsp;
                                            <a href="admins_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=<?php echo $_smarty_tpl->tpl_vars['sortby']->value;?>
&sorthow=<?php echo $_smarty_tpl->tpl_vars['sorthow']->value;
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&email=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;
}?>&delete=1&ADMINID=<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['ADMINID'];?>
">Delete</a>
                                        </td>
                                	</tr>
                                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                    <tr>
                                    	<td colspan="4">
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
                                <a href="admins_create.php" id="isoft_group_2" name="group_2" title="Create Administrator" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Create Administrator
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
                               <h3 class="icon-head head-products">Administrators - Manage Administrators</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable add" onclick="document.location.href='admins_create.php'" style=""><span>Create Administrator</span></button>			
                               </p>
                            </div>
                            
                            <form action="admins_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div><?php }
}
