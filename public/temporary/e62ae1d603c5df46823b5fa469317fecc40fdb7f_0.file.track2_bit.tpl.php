<?php
/* Smarty version 3.1.29, created on 2020-05-12 01:07:28
  from "/home4/o8txizzi/public_html/dev/themes/track2_bit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5eba2f1092dca6_00880069',
  'file_dependency' => 
  array (
    'e62ae1d603c5df46823b5fa469317fecc40fdb7f' => 
    array (
      0 => '/home4/o8txizzi/public_html/dev/themes/track2_bit.tpl',
      1 => 1584711632,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolutionreupload.tpl' => 1,
  ),
),false)) {
function content_5eba2f1092dca6_00880069 ($_smarty_tpl) {
?>
<div style="clear:both !important"></div>
<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/send_track" class="nonajaxy" id="new_message" method="post">
<input type="hidden" name="submg" value="1" />
<input type="hidden" name="msgto" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['USERID'];?>
" />
<input type="hidden" name="oid" value="<?php echo $_smarty_tpl->tpl_vars['o']->value['OID'];?>
" />        
<input type="hidden" name="who" value="owner" />
<div class="content-text">
	<div class="whitelinks">
        <div style="float:left">
        <a class="scriptolutiondmessageme achtung message_toggler" id="cancel-order-lin" href="#"><?php echo $_smarty_tpl->tpl_vars['lang325']->value;?>
</a>
        <a class="scriptolutiondeliver achtung deliver_toggler" href="#"><?php echo $_smarty_tpl->tpl_vars['lang327']->value;?>
</a>
        </div> 
    	<div style="float:right"><a class="scriptolutionprobs achtung problems_toggler" id="cancel-order-link" href="#"><?php echo $_smarty_tpl->tpl_vars['lang326']->value;?>
</a></div> 
    </div>
	<div style="clear:both !important;"></div>
    <div style="margin-top:3px !important;"></div>              
    <div style="clear:both !important;"></div>  
    <div class="conv-write" id="scriptolutiondelivery">
        <div id="gotProbs" class="content-text">
            <div class="toolbox seller-order"> 
                <div id="problems_box" style="display:none;"> 
                    <div class="boxes"> 
                        <div class="box mutual-cancel first mutual_toggler">
                            <h3><input type="radio" class="radio_button" id="radio_mutual" name="<?php echo $_smarty_tpl->tpl_vars['lang330']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang330']->value;?>
"/> <span><?php echo $_smarty_tpl->tpl_vars['lang328']->value;?>
</span></h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['lang329']->value;?>
</p>
                          </div>
                          <div class="box force-cancel mid selected force_toggler">
                            <h3><input type="radio" class="radio_button" id="radio_force" name="<?php echo $_smarty_tpl->tpl_vars['lang332']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang332']->value;?>
"/> <span><?php echo $_smarty_tpl->tpl_vars['lang331']->value;?>
</span></h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['lang333']->value;?>
</p>
                          </div>
                          <div class="box notice last support_toggler">
                            <h3><input type="radio" class="radio_button" id="radio_support" name="<?php echo $_smarty_tpl->tpl_vars['lang334']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['lang334']->value;?>
"/> <span><?php echo $_smarty_tpl->tpl_vars['lang335']->value;?>
</span></h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['lang336']->value;?>
</p>
                          </div>
                    </div> 
                </div> 
            </div> 
            <div class="support-message" style="display:none">
            	<div style="clear:both !important"></div> 
                <h4 class="faq"><?php echo $_smarty_tpl->tpl_vars['lang337']->value;?>
</h4> 
                <div style="clear:both !important"></div>
                <ul class="faq" style="padding: 10px;"> 
                    <ul class="qa"> 
                        <li style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['lang338']->value;?>
</li> 
                        <li class="a"><?php echo $_smarty_tpl->tpl_vars['lang338']->value;?>
</li> 
                        <br />
                        <li style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['lang340']->value;?>
</li> 
                        <li class="a"><?php echo $_smarty_tpl->tpl_vars['lang341']->value;?>
</li> 
                        <br />
                        <li style="font-weight:bold"><?php echo $_smarty_tpl->tpl_vars['lang342']->value;?>
</li> 
                        <li class="a"><?php echo $_smarty_tpl->tpl_vars['lang343']->value;?>
</li>
                    </ul> 
                </ul> 
            </div> 
            <div style="clear:both !important"></div>
        </div>
        <div id="message_form_wrapper">
        	<header class="cf">
                <label class="js-message-label" style="color:#049BCF"><?php echo $_smarty_tpl->tpl_vars['lang439']->value;?>
</label>
            </header>
        	<div class="msg-error"><p id="message_validation_error"></p></div>
            <div class="write-wrap">
                <div class="write-row cf">
                    <textarea maxlength="1200" class="no-min-len" cols="75" id="message_body" name="message_body" rows="3"></textarea>
                    <input id="message_message_format" name="message_message_format" type="hidden" /> 
                </div>
                <div class="message-form-control">
                    <div class="write-controls cf">
                        <div class="send-button"> 
                            <div class="icn-submit"><input class="btn-standard btn-send-message send-small" name="commit" value="<?php echo $_smarty_tpl->tpl_vars['lang46']->value;?>
" type="submit"></div>
                            <div class="progress-indicator-icon-message" style="display:none"> 
                                <span class="sending"><?php echo $_smarty_tpl->tpl_vars['lang120']->value;?>
</span> 
                            </div>
                        </div>
                        <input type="file" name="image" />
                        <!--
                        <div class="attach-files">
                            <div class="attach-inner">
                                <div id="toggle-attach">
                                    <input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" />
                                    <input id="fileInput" name="fileInput" type="file" />                                             
                                </div>
                            </div>
                            <small class="attach-limit"></small>
                        </div>
                        -->
                    </div>
                </div>  
            </div>
            <div style="padding:10px;">
                <div class="files-added"> 
                    <span id="attached_file_name"></span> <b class="remove_attachment" style="cursor:pointer">x</b> 
                </div>
                <div style="clear:both"></div>
                <div style="color:#666; font-size:12px"><b><?php echo $_smarty_tpl->tpl_vars['lang255']->value;?>
</b>: <?php echo $_smarty_tpl->tpl_vars['lang256']->value;?>
</div>
                
                <link href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/css/scriptolutionuploadfile.css" rel="stylesheet">
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/jquery.uploadfile.min.js"><?php echo '</script'; ?>
>
                <div id="scriptolutionuploader">
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolutionreupload.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 
				</div>
                
            </div>
        </div>
    </div>	
</div>	
<input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" />			
</form> <?php }
}
