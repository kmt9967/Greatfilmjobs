<?php
/* Smarty version 3.1.29, created on 2020-03-20 08:57:36
  from "/home4/o8txizzi/public_html/dev/themes/administrator/gigs_manage.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e74bdc0e06d03_30692925',
  'file_dependency' => 
  array (
    'a54207fa82b8f2f326ebe849b1380dba41f9e1fc' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/gigs_manage.tpl',
      1 => 1577432770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/gigs_instant_bit.tpl' => 1,
    'file:administrator/gigs_extras_bit.tpl' => 1,
    'file:administrator/show_message.tpl' => 1,
  ),
),false)) {
function content_5e74bdc0e06d03_30692925 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once '/home4/o8txizzi/public_html/dev/scriptolution/libs/plugins/modifier.date_format.php';
?>
		<div class="middle" id="anchor-content">
            <div id="page:main-container">
				<div class="columns ">
                
					<div class="side-col" id="page:left">
    					<h3>Gigs</h3>
						
                        <ul id="isoft" class="tabs">
    						<li >
        						<a href="gigs_manage.php" id="isoft_group_1" name="group_1" title="Manage Gigs" class="tab-item-link ">
                                    <span>
                                        <span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Manage Gigs
                                    </span>
        						</a>
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                <div id="isoft_group_1_content" style="display:none;">
                                	<div class="entry-edit">
                                        <div class="entry-edit-head">
                                            <h4 class="icon-head head-edit-form fieldset-legend">Manage Gigs</h4>
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
 Gigs
                    		</td>
                			<td class="export a-right"></td>
            				<td class="filter-actions a-right">
                            	<button  id="id_ffba3971e132ae3d78c160244ea09b39" type="button" class="scalable " onclick="document.location.href='gigs_manage.php'" style=""><span>Reset Filter</span></button>
            					<button  id="id_56a0b03bf0b3be131176f3243cc289ff" type="button" class="scalable task" onclick="document.main_form.submit();" style=""><span>Search</span></button>        
                            </td>
        				</tr>
    					</table>
                        
                        <div class="grid">
							<div class="hor-scroll">
								<table cellspacing="0" class="data" id="customerGrid_table">
                                <col  width="120" />
                                <col   />
                                <col  width="100"  />
                                <col  width="100"  />
                                <col  width="100"  />
                                <col  width="125"  />
	    	    	        	<thead>
	            	                <tr class="headings">
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=PID&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "PID") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&gtitle=<?php echo $_smarty_tpl->tpl_vars['gtitle']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&active=<?php echo $_smarty_tpl->tpl_vars['active']->value;
}?>" name="id" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "PID") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">ID</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=gtitle&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "gtitle") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&gtitle=<?php echo $_smarty_tpl->tpl_vars['gtitle']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&active=<?php echo $_smarty_tpl->tpl_vars['active']->value;
}?>" name="gtitle" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "gtitle") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Title</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=username&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "username") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&gtitle=<?php echo $_smarty_tpl->tpl_vars['gtitle']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&active=<?php echo $_smarty_tpl->tpl_vars['active']->value;
}?>" name="username" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "username") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Poster</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=time_added&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "time_added") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&gtitle=<?php echo $_smarty_tpl->tpl_vars['gtitle']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&active=<?php echo $_smarty_tpl->tpl_vars['active']->value;
}?>" name="time_added" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "time_added") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Date Created</span></a></span></th>
                                        <th ><span class="nobr"><a href="gigs_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=active&sorthow=<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "active") {
if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>asc<?php } else { ?>desc<?php }
} else {
echo $_smarty_tpl->tpl_vars['sorthow']->value;
}
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&gtitle=<?php echo $_smarty_tpl->tpl_vars['gtitle']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&active=<?php echo $_smarty_tpl->tpl_vars['active']->value;
}?>" name="active" class="<?php if ($_smarty_tpl->tpl_vars['sortby']->value == "active") {?>sort-arrow-<?php if ($_smarty_tpl->tpl_vars['sorthow']->value == "desc") {?>desc<?php } else { ?>asc<?php }
} else { ?>not-sort<?php }?>"><span class="sort-title">Active</span></a></span></th>
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
                                        <th ><input type="text" name="gtitle" id="gtitle" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gtitle']->value);?>
" class="input-text no-changes"/></th>
                                        <th ><input type="text" name="username" id="username" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['username']->value);?>
" class="input-text no-changes"/></th>
                                        <th></th>
                                        <th ><input type="checkbox" name="active" id="active" <?php if ($_smarty_tpl->tpl_vars['active']->value == "on") {?>checked="checked"<?php }?>></th>
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
                                        <td class=" a-right "><?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
</td>
                                        <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['gtitle']),300,"...",true);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/gigs_instant_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subresults'=>$_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]), 0, true);
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:administrator/gigs_extras_bit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subresults'=>$_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]), 0, true);
?>
</td>
                                        <td class=" "><?php echo smarty_modifier_truncate(stripslashes($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['username']),20,"...",true);?>
</td>
                                        <td class=" "><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['time_added'],"%b %e, %Y");?>
</td>
                                        <td class=" "><?php if ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "1") {?>Active<?php } elseif ($_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['active'] == "0") {?>Not Active<?php } else { ?>Suspended<?php }?></td>
                                        <td class=" last"><a href="gigs_edit.php?PID=<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
">Edit</a>&nbsp;|&nbsp;<a href="gigs_manage.php?page=<?php echo $_smarty_tpl->tpl_vars['currentpage']->value;?>
&sortby=<?php echo $_smarty_tpl->tpl_vars['sortby']->value;?>
&sorthow=<?php echo $_smarty_tpl->tpl_vars['sorthow']->value;
if ($_smarty_tpl->tpl_vars['search']->value == "1") {?>&fromid=<?php echo $_smarty_tpl->tpl_vars['fromid']->value;?>
&toid=<?php echo $_smarty_tpl->tpl_vars['toid']->value;?>
&title=<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
&gtitle=<?php echo $_smarty_tpl->tpl_vars['gtitle']->value;?>
&username=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
&active=<?php echo $_smarty_tpl->tpl_vars['active']->value;
}?>&delete=1&PID=<?php echo $_smarty_tpl->tpl_vars['results']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['PID'];?>
">Delete</a></td>
                                	</tr>
                                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                    <tr>
                                    	<td colspan="6">
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
                                <a href="gigs_validate.php" id="isoft_group_2" name="group_2" title="Validate Gigs" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Validate Gigs
                                    </span>
                                </a>
                                <div id="isoft_group_2_content" style="display:none;"></div>
                            </li>
                            
                            <li >
                                <a href="gigs_deleted.php" id="isoft_group_3" name="group_3" title="Deleted Gigs" class="tab-item-link">
                                	<span>
                                    	<span class="changed" title=""></span>
                                        <span class="error" title=""></span>
                                        Deleted Gigs
                                    </span>
                                </a>
                                <div id="isoft_group_3_content" style="display:none;"></div>
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
                               <h3 class="icon-head head-products">Gigs - Manage Gigs</h3>
                            </div>
                            
                            <form action="gigs_manage.php" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div><?php }
}
