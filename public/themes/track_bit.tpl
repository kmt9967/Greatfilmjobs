<div style="clear:both !important"></div>
<form action="{$baseurl}/send_track" class="nonajaxy" id="new_message" method="post" enctype="multipart/form-data">
<input type="hidden" name="submg" value="1" />
<input type="hidden" name="msgto" value="{$o.owner}" />
<input type="hidden" name="oid" value="{$o.OID}" />
<div class="content-text">
<div class="msg-error"><p id="message_validation_error"></p></div>
    <div class="conv-write">
        <header class="cf">
        	{if $o.status eq "0"} <label class="js-message-label" style="color:#049BCF">{$lang274}</label>{/if}
        </header>
        <div class="write-wrap">
            <div class="write-row cf">
                <textarea maxlength="1200" class="no-min-len" cols="75" id="message_body" name="message_body" rows="3"></textarea>
                <input id="message_message_format" name="message_message_format" type="hidden" /> 
                <input type="hidden" name="who" value="buyer" />
            </div>
            <div class="message-form-control">
                <div class="write-controls cf">
                    <div class="send-button"> 
                        <div class="icn-submit"><input class="btn-standard btn-send-message send-small" name="commit" value="{$lang46}" type="submit"></div>
                        <div class="progress-indicator-icon-message" style="display:none"> 
                            <span class="sending">{$lang120}</span> 
                        </div>
                    </div>
                    <input type="file" name="image" />
                    <!-- <div class="attach-files 1">
                        <div class="attach-inner">
                            <div id="toggle-attach">
                                <input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" />
                                <input id="fileInput" name="fileInput" type="file" style="display: block;" />                                             
                            </div>
                        </div>
                        <small class="attach-limit"></small>
                    </div> -->
                </div>
            </div>  
        </div>
        <div style="padding:10px;">
            <div class="files-added"> 
                <span id="attached_file_name"></span> <b class="remove_attachment" style="cursor:pointer">x</b> 
            </div>
            <div style="clear:both"></div>
            <div style="color:#666; font-size:12px"><b>{$lang255}</b>: {$lang256}</div>
            
            	<link href="{$baseurl}/css/scriptolutionuploadfile.css" rel="stylesheet">
                <script src="{$baseurl}/js/jquery.uploadfile.min.js"></script>
                <div id="scriptolutionuploader">
                    {include file='scriptolutionreupload.tpl'} 
				</div>
                
        </div>
    </div>	
</div>	
<input id="message_message_attachment_id" name="message_message_attachment_id" type="hidden" />			
</form>                