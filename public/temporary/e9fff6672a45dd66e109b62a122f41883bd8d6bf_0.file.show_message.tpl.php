<?php
/* Smarty version 3.1.29, created on 2020-02-24 08:25:25
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/administrator/show_message.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53cec50d9581_67181239',
  'file_dependency' => 
  array (
    'e9fff6672a45dd66e109b62a122f41883bd8d6bf' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/administrator/show_message.tpl',
      1 => 1577432762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53cec50d9581_67181239 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
								<ul class="messages">
                                    <li class="error-msg">
                                    	<ul><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li></ul>
                                    </li>
                                </ul>
<?php }
if ($_smarty_tpl->tpl_vars['message']->value != '') {?>
								<ul class="messages">
                                	<li class="success-msg">
                                    	<ul><li><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</li></ul>
                                    </li>
                                </ul>
<?php }
}
}
