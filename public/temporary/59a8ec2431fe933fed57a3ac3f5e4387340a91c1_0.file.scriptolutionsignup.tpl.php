<?php
/* Smarty version 3.1.29, created on 2020-03-02 16:06:22
  from "/home4/o8txizzi/public_html/themes/scriptolutionsignup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d754e6dfdb2_39504180',
  'file_dependency' => 
  array (
    '59a8ec2431fe933fed57a3ac3f5e4387340a91c1' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/scriptolutionsignup.tpl',
      1 => 1577430515,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
  ),
),false)) {
function content_5e5d754e6dfdb2_39504180 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="bodybg scriptolutionpaddingtop15 scriptolutionloginpage">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth482">
		<div class="inner-wrapper scriptolutionwidth442">
			<div class="left-side scriptolutionwidth442">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth400">
					<h1><?php echo $_smarty_tpl->tpl_vars['lang1']->value;?>
</h1>
                    <div id="scriptolutionForm">
                        <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/signup" method="post">  
                            <div class="form-entry">
                                <label><?php echo $_smarty_tpl->tpl_vars['lang4']->value;?>
</label>
                                <input class="text" id="user_email" name="user_email" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_email']->value);?>
" />
                            </div>
                            <div class="form-entry">
                                <label><?php echo $_smarty_tpl->tpl_vars['lang5']->value;?>
</label>
                                <input class="text username" id="user_username" maxlength="15" name="user_username" size="15" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_username']->value);?>
" />
                                <div id="status" class="username-validation"></div>
                            </div>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->tpl_vars['lang6']->value;?>
</label>
                                <input class="text style1" id="user_password" name="user_password" size="30" type="password" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['user_password']->value);?>
" />
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['enable_captcha']->value == "3") {?>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->tpl_vars['lang7']->value;?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['scriptolutiongetplaythru']->value;?>

                            </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['enable_captcha']->value == "4") {?>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->tpl_vars['lang7']->value;?>
</label>
                                <?php echo $_smarty_tpl->tpl_vars['scriptolutionsolvemedia']->value;?>

                            </div>
                            <?php } elseif ($_smarty_tpl->tpl_vars['enable_captcha']->value == "2") {?>
							<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->tpl_vars['lang7']->value;?>
</label>
                                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptcha_pubkey']->value;?>
"></div>
                            </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['enable_captcha']->value == "1") {?>
                            <div class="form-entry">
                                <label class="style3"><?php echo $_smarty_tpl->tpl_vars['lang7']->value;?>
</label><br />
                                <img src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/include/captcha.php" style="border: 0px; margin:0px; padding:0px" id="cimg" />
                                <input class="text style2" id="captcha" name="user_captcha_solution" size="30" type="text" />
                            </div>
                            <?php }?>
                            
                            <div class="form-entry">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang46']->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="jsub" id="jsub" value="1" />
                                <div class="remember">
                                    <input class="checkbox" id="user_terms_of_use" name="user_terms_of_use" type="checkbox" value="1" <?php if ($_smarty_tpl->tpl_vars['user_terms_of_use']->value == "1") {?>checked="checked"<?php }?> />
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/terms_of_service" target="_blank" style="text-decoration:none"><?php echo $_smarty_tpl->tpl_vars['lang8']->value;?>
</a>
                                </div>
                            </div>
                            <input type="hidden" name="r" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value);?>
" />
                            <?php if ($_smarty_tpl->tpl_vars['enable_ref']->value == "1") {?><input type="hidden" name="ref" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['ref']->value);?>
" /><?php }?>
                        </form>
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
			<div id="scriptolutionFormLinks">
                <div class="scriptolutionloginsignuplink">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/login<?php if ($_smarty_tpl->tpl_vars['r']->value != '') {?>?r=<?php echo stripslashes($_smarty_tpl->tpl_vars['r']->value);
}?>"><?php echo $_smarty_tpl->tpl_vars['lang10']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lang2']->value;?>
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
