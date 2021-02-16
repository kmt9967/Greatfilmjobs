<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:24:32
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolutionreupload.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c08017d2a4_59585713',
  'file_dependency' => 
  array (
    '82d3a0daa1688e3146316d6dcabad034cb40ceaf' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolutionreupload.tpl',
      1 => 1577430508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53c08017d2a4_59585713 ($_smarty_tpl) {
?>
                    <?php echo '<script'; ?>
>
                    $(document).ready(function()
                    {
                        sQuery("#fileuploader").uploadFile({
                        url:"<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/scriptolutionupload.php",
                        fileName:"fileInput",
                        maxFileCount:1,
                        showDelete: true,					
                        dragDropStr: "",
                        abortStr:"<?php echo $_smarty_tpl->tpl_vars['lang615']->value;?>
",
                        cancelStr:"<?php echo $_smarty_tpl->tpl_vars['lang614']->value;?>
",
                        doneStr:"<?php echo $_smarty_tpl->tpl_vars['lang616']->value;?>
",
                        multiDragErrorStr: "<?php echo $_smarty_tpl->tpl_vars['lang613']->value;?>
",
                        maxFileCountErrorStr:"<?php echo $_smarty_tpl->tpl_vars['lang613']->value;?>
",
                        uploadStr:"<?php echo $_smarty_tpl->tpl_vars['lang248']->value;?>
",
                        deletelStr:"<?php echo $_smarty_tpl->tpl_vars['lang185']->value;?>
",
                        
                        onSelect:function(files)
                        {	
                            document.getElementById('message_validation_error').innerHTML = ''; 
                            $('.msg-error').hide();
                            var allowupload = '0';
                            sQuery.ajax({
                                url: "<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/scriptolutionuploadcheck.php?scriptolutionsubmit=1&scriptolutionfilename=" + files[0].name,
                                async: false,
                                cache: false,
                                dataType: "html",
                                success: function(datar){
                                  allowupload = datar;
                                }
                            });
                            if(allowupload == "1")
                            {
                                return true;
                            }
                            else
                            {
                                document.getElementById('message_validation_error').innerHTML = "<?php echo $_smarty_tpl->tpl_vars['lang241']->value;?>
"; 
                                $('.msg-error').show();
                                return false;
                            }
                        },
                        deleteCallback: function (data, pd) {
                            $('#message_message_attachment_id').val('0');
                            pd.statusbar.hide();
                        },					
                        onSuccess:function(files,data,xhr,pd)
                        {
                            $('#message_message_attachment_id').val(data);
                        }
                        
                        });
                    });
                    <?php echo '</script'; ?>
>
                    <div id="fileuploader"></div> 
				<?php }
}
