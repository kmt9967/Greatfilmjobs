<?php
/* Smarty version 3.1.29, created on 2020-03-19 03:13:21
  from "/home4/o8txizzi/public_html/dev/themes/administrator/show_message.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e731b91da9e01_25884179',
  'file_dependency' => 
  array (
    'b3a89fa56222669b2a26983ad005f838eee49b8c' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/show_message.tpl',
      1 => 1577432762,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e731b91da9e01_25884179 ($_smarty_tpl) {
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
