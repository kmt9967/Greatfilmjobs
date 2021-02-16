<?php
/* Smarty version 3.1.29, created on 2020-03-19 09:44:23
  from "/home4/o8txizzi/public_html/dev/themes/new_multiples.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e737737e14ec5_67913246',
  'file_dependency' => 
  array (
    'ea8677b04b129dc1c0ecac2894f937a7bcce56e6' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/new_multiples.tpl',
      1 => 1577430521,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e737737e14ec5_67913246 ($_smarty_tpl) {
?>
									<style>.multipleoption{font-size:20px!important;padding:0;margin:0}.showmultiple{background:white;color:#464646;margin-top:20px;width:94%;padding:10px!important}#multiplemore{display:none}.multipleping-selection-form{margin-top:5px!important;background:white}.multipleping-settings{font-size:16px;letter-spacing:-0.04em;line-height:30px}</style>
                                      <div class="row showmultiple">
                                        <p class="multipleoption">
                                            <input id="multipleme" name="multipleme" onclick="scriptolutiontoggle('multiplemore', 'multipleme')" type="checkbox" value="1" /> 
                                        <?php echo $_smarty_tpl->tpl_vars['lang483']->value;?>

                                        </p>
                                        <div id="multiplemore">
                                            <div id="multipleping" class="multipleping-selection-form">
												<div class="multipleping-settings">
													<?php echo $_smarty_tpl->tpl_vars['lang484']->value;?>
  
                                                    <select id="multiplemax" name="multiplemax" class="textthree">
                                                    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 2; $__section_i_0_iteration <= 24; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" <?php if ($_smarty_tpl->tpl_vars['multiplemax']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>selected<?php }?>><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
</option>
                                                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                                    </select>
												</div>
											</div>
                                        </div>
                                    </div><?php }
}
