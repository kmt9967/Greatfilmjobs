<?php
/* Smarty version 3.1.29, created on 2020-03-19 03:12:44
  from "/home4/o8txizzi/public_html/dev/themes/administrator/admins_edit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e731b6cd09e38_45175710',
  'file_dependency' => 
  array (
    'd5710c341720fd556de219eb068d28853c5efc29' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/admins_edit.tpl',
      1 => 1577432762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:administrator/show_message.tpl' => 1,
  ),
),false)) {
function content_5e731b6cd09e38_45175710 ($_smarty_tpl) {
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
                                            <h4 class="icon-head head-edit-form fieldset-legend">Edit Administrator</h4>
                                            <div class="form-buttons">

                                            </div>
                                    	</div>

										<fieldset id="group_fields4">
                                            <div class="hor-scroll">
                                            	<table cellspacing="0" class="form-list">
                                                <tbody>
                                                	<tr class="hidden">
                                                        <td class="label"><label for="name">Username </label></td>
                                                        <td class="value">
                                                        	<input id="username" name="username" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['admin']->value['username']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[ADMIN USERNAME]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                	<tr class="hidden">
                                                        <td class="label"><label for="name">Password </label></td>
                                                        <td class="value">
                                                        	<input id="password" name="password" value="" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[ONLY ENTER A PASSWORD IF YOU WISH TO CHANGE THE CURRENT PASSWORD]</td>
                                                            <td><small></small></td>
                                                    </tr>
                                                    <tr class="hidden">
                                                        <td class="label"><label for="name">E-Mail </label></td>
                                                        <td class="value">
                                                        	<input id="email" name="email" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['admin']->value['email']);?>
" class=" required-entry required-entry input-text" type="text"/>
                                                        </td>
                                                        <td class="scope-label">[ADMIN E-MAIL ADDRESS]</td>
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
                               <h3 class="icon-head head-products">Administrators - Edit Administrator</h3>
                               <p class="content-buttons form-buttons">
                                    <button  id="id_be616be1324d8ae4516f276d17d34b9c" type="button" class="scalable save" onclick="document.main_form.submit();" style=""><span>Submit</span></button>			
                                </p>
                            </div>
                            
                            <form action="admins_edit.php?ADMINID=<?php echo $_REQUEST['ADMINID'];?>
" method="post" id="main_form" name="main_form" enctype="multipart/form-data">
                            	<input type="hidden" id="submitform" name="submitform" value="1" >
                            	<div style="display:none"></div>
                            </form>
						</div>
					</div>
				</div>

                        </div>
        </div><?php }
}
