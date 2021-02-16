<?php
/* Smarty version 3.1.29, created on 2020-03-02 16:06:20
  from "/home4/o8txizzi/public_html/themes/scriptolutionlogin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d754cdf1ff9_98844928',
  'file_dependency' => 
  array (
    'f1a4a4fe105825943beb35d8c2712cc052ee2bc7' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/scriptolutionlogin.tpl',
      1 => 1577430537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
  ),
),false)) {
function content_5e5d754cdf1ff9_98844928 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15 scriptolutionloginpage">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth482">
		<div class="inner-wrapper scriptolutionwidth442">
			<div class="left-side scriptolutionwidth442">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth400">
					<h1><?php echo $_smarty_tpl->tpl_vars['lang40']->value;?>
</h1>
                    <div id="scriptolutionForm">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login" method="post">  
                            <div class="form-entry">
                                <label for="l_username"><?php echo $_smarty_tpl->tpl_vars['lang36']->value;?>
</label>
                                <input class="text" id="l_username" maxlength="16" name="l_username" size="16" tabindex="1" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user_username']->value;?>
" />
                            </div>
                            <div class="form-entry">
                                <div class="form-label">
                                    <label for="l_password"><?php echo $_smarty_tpl->tpl_vars['lang37']->value;?>
</label>
                                    <span> <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/forgotpassword" style="text-decoration:none"><?php echo $_smarty_tpl->tpl_vars['lang39']->value;?>
</a></span>
                                </div>
                                <input class="text" id="l_password" name="l_password" size="30" tabindex="2" type="password" />
                            </div>
                            <div class="row">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang2']->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="jlog" id="jlog" value="1" />
                                <div class="remember">
                                    <input class="checkbox" id="l_remember_me" name="l_remember_me" type="checkbox" value="1" />
                                    <label for="l_remember_me"><?php echo $_smarty_tpl->tpl_vars['lang38']->value;?>
</label>
                                </div>
                            </div>
                            <input type="hidden" name="r" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value);?>
" />
                        </form>   
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
            <div id="scriptolutionFormLinks">
                <div class="scriptolutionloginsignuplink">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/signup<?php if ($_smarty_tpl->tpl_vars['r']->value != '') {?>?r=<?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value);
}?>"><?php echo $_smarty_tpl->tpl_vars['lang48']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang49']->value;?>
</a>
                </div>
            </div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter482"></div>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['enable_fc']->value == "1") {?>
<div class="social-wrap" align="center">
    <a href="https://www.facebook.com/dialog/permissions.request?app_id=<?php echo $_smarty_tpl->tpl_vars['FACEBOOK_APP_ID']->value;?>
&display=page&next=<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/&response_type=code&fbconnect=1&perms=email"><span><?php echo $_smarty_tpl->tpl_vars['lang469']->value;?>
</span></a>
</div>
<?php }
}
}
