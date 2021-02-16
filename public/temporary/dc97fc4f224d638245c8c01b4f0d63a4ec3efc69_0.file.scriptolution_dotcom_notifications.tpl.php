<?php
/* Smarty version 3.1.29, created on 2020-02-24 00:59:06
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_dotcom_notifications.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53662a731515_60438991',
  'file_dependency' => 
  array (
    'dc97fc4f224d638245c8c01b4f0d63a4ec3efc69' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/scriptolution_dotcom_notifications.tpl',
      1 => 1577430518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e53662a731515_60438991 ($_smarty_tpl) {
if ($_SESSION['USERID'] != '') {?>
<div id="scriptolution-notifications-popup" style="display:none">
    <div id="scriptolutionNotifBox" class="scriptolutionNotifBox">
      <div id="scriptolutionNotifBox_top" class="scriptolutionNotifBox_sprite"></div>
      <div id="scriptolutionNotifBox_content">
        <?php $_smarty_tpl->assign('fiverrscript_dotcom_notification' , insert_get_scriptolution_notifications (array('value' => 'a', 'USERID' => $_SESSION['USERID']),$_smarty_tpl), true);?>      
        <?php if (count($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value) == "0") {?>
        <div id="scriptolutionNotifBox_none">
          <?php echo $_smarty_tpl->tpl_vars['lang543']->value;?>

        </div>
        <?php } else { ?>
		<?php
$__section_i_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total != 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
        <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "scriptolution_buyer_requirements") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang531']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "fiverrscript_dotcom_neworder") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang532']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "fiverrscript_dotcom_orderupdate") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang533']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "fiverrscript_dotcom_orderdelivered") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang534']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "fiverrscript_dotcom_orderdeliveryreject") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang535']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "fiverrscript_dotcom_orderfeedback") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang536']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "mutual_cancellation_request") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang537']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "seller_cancellation") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang538']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "scriptolution_abort_cancellation") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang539']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "scriptolution_accept_cancellation") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang540']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_type'] == "scriptolution_reject_cancellation") {?>
        <hr class="style-six" />
        <div style="padding:10px;">
        <a <?php if ($_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_unread'] == "1") {?>style="font-weight:bold"<?php }?> href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/track?id=<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
"><?php echo $_smarty_tpl->tpl_vars['lang541']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['lang140']->value;?>
 #<?php echo $_smarty_tpl->tpl_vars['fiverrscript_dotcom_notification']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['scriptolution_OID'];?>
)</a>
        </div>
        <?php }?>
        <?php
}
}
if ($__section_i_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_0_saved;
}
?>
        <hr class="style-six" />
        <div id="scriptolutionNotifBox_middle">
          <a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/notifications"><?php echo $_smarty_tpl->tpl_vars['lang542']->value;?>
</a>
        </div>
        <?php }?>
      </div>
      <div id="scriptolutionNotifBox_bottom" class="scriptolutionNotifBox_sprite"></div>
    </div>
</div>
<?php }
}
}
