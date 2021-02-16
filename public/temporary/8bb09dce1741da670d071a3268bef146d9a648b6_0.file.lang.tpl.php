<?php
/* Smarty version 3.1.29, created on 2020-03-06 06:03:11
  from "/home4/o8txizzi/public_html/dev/themes/lang.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e622def7cf689_86973541',
  'file_dependency' => 
  array (
    '8bb09dce1741da670d071a3268bef146d9a648b6' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/lang.tpl',
      1 => 1577430509,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e622def7cf689_86973541 ($_smarty_tpl) {
?>
                        <form name="langselect" id="langselect" method="post">                        
                            <select name="language" onChange="document.langselect.submit()" style="font-family: Tahoma, Verdana; font-size: 11px"> 
                                <option value="english" <?php if ($_SESSION['language'] == "english") {?>selected<?php }?> >English</option> 
                                <option value="spanish" <?php if ($_SESSION['language'] == "spanish") {?>selected<?php }?>>Español</option> 
                                <option value="french" <?php if ($_SESSION['language'] == "french") {?>selected<?php }?>>Français</option> 
                                <option value="portuguese" <?php if ($_SESSION['language'] == "portuguese") {?>selected<?php }?>>Português</option>
                                <option value="hebrew" <?php if ($_SESSION['language'] == "hebrew") {?>selected<?php }?>>עברית</option>
                                <option value="german" <?php if ($_SESSION['language'] == "german") {?>selected<?php }?>>Deutsch</option>
                                <option value="arabic" <?php if ($_SESSION['language'] == "arabic") {?>selected<?php }?>>العربية</option>
                                <option value="chinese" <?php if ($_SESSION['language'] == "chinese") {?>selected<?php }?>>中文</option>
                                <option value="russian" <?php if ($_SESSION['language'] == "russian") {?>selected<?php }?>>русский</option>
                            </select>
                        </form><?php }
}
