<?php
/* Smarty version 3.1.29, created on 2020-03-19 09:44:24
  from "/home4/o8txizzi/public_html/dev/themes/new_extras.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e737738024751_35015571',
  'file_dependency' => 
  array (
    '44b6b4de8b4219d6a86ad68a37ce88236b98f916' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/new_extras.tpl',
      1 => 1583474775,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e737738024751_35015571 ($_smarty_tpl) {
?>
									<style>.extrasoption{font-size:20px!important;padding:0;margin:0}.showextras{background:white;color:#464646;margin-top:20px;width:94%;padding:10px!important}#extrasmore{display:none}.extrasping-selection-form{margin-top:5px!important;background:white}.extrasping-settings{font-size:16px;letter-spacing:-0.04em;line-height:30px}</style>
                                      <div class="row showextras">
                                        <p class="extrasoption">
                                            <input id="extrasme" name="extrasme" onclick="scriptolutiontoggle('extrasmore', 'extrasme')" type="checkbox" value="1" /> 
                                        <?php echo $_smarty_tpl->tpl_vars['lange0']->value;?>

                                        </p>
                                        <div id="extrasmore">
                                            <div id="extrasping" class="extrasping-selection-form">
												<div class="extrasping-settings">
													<?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 
                                                    <input type="text" name="extra1" id="extra1" value="" style="width:300px;" class="textthree" />
                                                    <?php echo $_smarty_tpl->tpl_vars['lange1']->value;?>

                                                    <select id="extraprice1" name="extraprice1" class="textthree">
                                                    <?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 1; $__section_i_0_iteration <= 25; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" <?php if ($_smarty_tpl->tpl_vars['extraprice1']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>selected<?php }?>>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?></option>
                                                    <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
                                                    </select>
                                                    
                                                    <br />
                                                    <?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 
                                                    <input type="text" name="extra2" id="extra2" value="" style="width:300px;" class="textthree" />
                                                    <?php echo $_smarty_tpl->tpl_vars['lange1']->value;?>

                                                    <select id="extraprice2" name="extraprice2" class="textthree">
                                                    <?php
$__section_i_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 1; $__section_i_1_iteration <= 25; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" <?php if ($_smarty_tpl->tpl_vars['extraprice2']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>selected<?php }?>>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?></option>
                                                    <?php
}
}
if ($__section_i_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_1_saved;
}
?>
                                                    </select>
                                                    
                                                    <br />
                                                    <?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
 
                                                    <input type="text" name="extra3" id="extra3" value="" style="width:300px;" class="textthree" />
                                                    <?php echo $_smarty_tpl->tpl_vars['lange1']->value;?>

                                                    <select id="extraprice3" name="extraprice3" class="textthree">
                                                    <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 1; $__section_i_2_iteration <= 25; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                                    <option value="<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null);?>
" <?php if ($_smarty_tpl->tpl_vars['extraprice3']->value == (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>selected<?php }?>>
                                                        <?php if (isset($_smarty_tpl->tpl_vars['price'])) {$_smarty_tpl->tpl_vars['price'] = clone $_smarty_tpl->tpl_vars['price'];
$_smarty_tpl->tpl_vars['price']->value = (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)*$_SESSION['cur']; $_smarty_tpl->tpl_vars['price']->nocache = null;
} else $_smarty_tpl->tpl_vars['price'] = new Smarty_Variable((isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)*$_SESSION['cur'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'price', 0);?>
                                                    <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
echo $_SESSION['csyumbol'];
} else {
echo $_SESSION['csyumbol'];
echo sprintf("%d",$_smarty_tpl->tpl_vars['price']->value);
}?></option>
                                                    <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                                                    </select>
												</div>
											</div>
                                        </div>
                                    </div><?php }
}
