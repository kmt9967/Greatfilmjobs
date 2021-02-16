<?php
/* Smarty version 3.1.29, created on 2020-03-14 01:14:48
  from "/home4/o8txizzi/public_html/dev/themes/administrator/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e6c684827d0f9_04259679',
  'file_dependency' => 
  array (
    'ed8735e98c1755f962dcc17e91d7950dfae90deb' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/administrator/index.tpl',
      1 => 1577432752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6c684827d0f9_04259679 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en">
<head>
    <title><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
 Admin Panel</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" ></meta>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/reset.css" media="all"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/boxes.php" media="all"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/menu.php" media="screen, projection"></link>
    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/iestyles.css" media="all"></link>
    <![endif]-->
    <!--[if lt IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/below_ie7.css" media="all"></link>
    <![endif]-->
    <!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/css/ie7.php" media="all"></link>
    <![endif]-->
</head>
<body id="page-login" onload="document.forms.loginForm.username.focus();">
    <div class="login-container">
        <div class="login-box">
            <form method="post" action="" id="loginForm">

                <fieldset class="login-form">
                    <h2>Log in to Admin Panel</h2>
                    <div id="messages">
                    	<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
                        <ul class="messages"><li class="error-msg"><ul><li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li></ul></li></ul> 
                        <?php }?>                   
                    </div>
                    <div class="input-box input-left"><label for="username">User Name:</label><br/>
                        <input type="text" id="username" name="username" value="" class="required-entry input-text"/></div>
                    <div class="input-box input-right"><label for="login">Password:</label><br/>

                        <input type="password" id="password" name="password" class="required-entry input-text" value="" /></div>
                    <div class="clear"></div>
                    <div class="form-buttons" style="margin-right:8px;">
                        <a class="left" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
">[ Back To Fiverr Script ]</a>
                        <input onclick="loginForm.submit()" type="submit" name="login" id="login" class="form-button" src="<?php echo $_smarty_tpl->tpl_vars['adminurl']->value;?>
/images/btn_login.gif" value="Login"/></div>
                </fieldset>
                <p class="legal">Copyright &copy; 2016 FiverrScript.com.</p>
				<input type="hidden" name="login" value="Login" />
            </form>
            <div class="bottom"></div>
        </div>
    </div>
</body>
</html><?php }
}
