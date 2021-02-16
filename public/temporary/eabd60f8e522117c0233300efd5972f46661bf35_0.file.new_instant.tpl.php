<?php
/* Smarty version 3.1.29, created on 2020-03-19 09:44:23
  from "/home4/o8txizzi/public_html/dev/themes/new_instant.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e737737dd3752_67789628',
  'file_dependency' => 
  array (
    'eabd60f8e522117c0233300efd5972f46661bf35' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/new_instant.tpl',
      1 => 1577430525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e737737dd3752_67789628 ($_smarty_tpl) {
?>
                                        <a name="options"></a>
                                        <div class="estimate" id="showdays">
                                            <div class="column-l">
                                              <label class="editgigformtitle" for="gig_expected_duration"><?php echo $_smarty_tpl->tpl_vars['lang79']->value;?>
</label>
                                            </div>
                                            <div class="column-r">
                                              <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gdays']->value);?>
" />
                                              <div><?php echo $_smarty_tpl->tpl_vars['lang80']->value;?>
</div>
                                            </div>
                                            <div style="clear:both">
                                            	<a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showdays').hide();$('#showinstant').show();"><?php echo $_smarty_tpl->tpl_vars['langi1']->value;?>
</a>
                                            </div>
                                        </div>
                                        
                                        <div class="estimate" id="showinstant" style="display:none;">
                                            <div class="column-l">
                                              <label class="editgigformtitle" for="gig_instant_delivery"><?php echo $_smarty_tpl->tpl_vars['langi3']->value;?>
</label>
                                            </div>
                                            <div class="column-r">
                                            	<div><?php echo $_smarty_tpl->tpl_vars['langi4']->value;?>
:</div>
                                              	<input type="text" id="instanturl" size="50" name="instanturl" class="text" />
                                              	
                                                <div><?php echo $_smarty_tpl->tpl_vars['langi5']->value;?>
:</div>
                                                <input type="file" size="20" id="instantfile" name="instantfile" class="text" />
                                            </div>
                                            <div style="clear:both">
                                            	<a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showinstant').hide();$('#showdays').show();"><?php echo $_smarty_tpl->tpl_vars['langi2']->value;?>
</a>
                                            </div>
                                        </div>
                                        
                                        <div style="padding-bottom:20px;"></div><?php }
}
