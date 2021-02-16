<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:28:11
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/conversation_bit.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c15b67c3e0_37152356',
  'file_dependency' => 
  array (
    'eeff73c97be682b0d132ffdba686609d0106b86d' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/conversation_bit.tpl',
      1 => 1577430536,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolutionreupload.tpl' => 1,
  ),
),false)) {
function content_5e53c15b67c3e0_37152356 ($_smarty_tpl) {
?>
<div style="clear:both !important"></div>
<form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/sendmessage.php" class="nonajaxy" id="new_message" method="post">
<input type="hidden" name="submg" value="1" />
<input type="hidden" name="msgto" value="<?php echo $_smarty_tpl->tpl_vars['u']->value['USERID'];?>
" />
<input type="hidden" name="aboutid" value="<?php echo $_smarty_tpl->tpl_vars['aboutid']->value;?>
" />
<div class="content-text">
	<div class="whitelinks">
        <div style="float:left">
        <a class="scriptolutiondmessageme achtung message_toggler" id="cancel-order-lin" href="#"><?php echo $_smarty_tpl->tpl_vars['lang325']->value;?>
</a>
        </div> 
    </div>
	<div style="clear:both !important;"></div>
    <div style="margin-top:3px !important;"></div>              
    <div style="clear:both !important;"></div>  
    <div class="conv-write">
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
