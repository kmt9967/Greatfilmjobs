<?php
/* Smarty version 3.1.29, created on 2020-03-02 16:06:20
  from "/home4/o8txizzi/public_html/themes/scriptolution_footer_nobottom.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e5d754ce33847_86259281',
  'file_dependency' => 
  array (
    '1057ae58d2dd063c316ba545f5732b0262acbe84' => 
    array (
      0 => '/home4/o8txizzi/public_html/themes/scriptolution_footer_nobottom.tpl',
      1 => 1577430520,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:lang.tpl' => 1,
  ),
),false)) {
function content_5e5d754ce33847_86259281 ($_smarty_tpl) {
?>
<div class="footer">
	<div class="centerwrap footertop">
	
	
    	<div style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: black">
    	

      	 	<center>Copyright &copy; 2016 <a href="http://www.greatfilmjobs.com">GreatFilmJobs.com</a>. Powered by Madhu Rebba Design, Inc., Florida, USA <br> <a href="http://www.greatfilmjobs.com">Home</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_k2&view=item&layout=item&id=133&Itemid=1191&lang=en" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang416']->value;?>
</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_fss&view=main&Itemid=1270&lang=en" target="_blank">Help & Support</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_fss&view=ticket&Itemid=1277&lang=en" target="_blank">Support Tickets</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_fss&view=faq&Itemid=1278&lang=en" target="_blank">FAQs</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_k2&view=item&layout=item&id=131&Itemid=522&lang=en" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang253']->value;?>
</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_k2&view=item&layout=item&id=130&Itemid=521&lang=en" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang415']->value;?>
</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_contact&view=contact&id=1&Itemid=1192&lang=en" target="_blank"><?php echo $_smarty_tpl->tpl_vars['lang417']->value;?>
</a><?php if ($_smarty_tpl->tpl_vars['enable_levels']->value == "1" && $_smarty_tpl->tpl_vars['price_mode']->value == "3") {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/levels">| <?php echo $_smarty_tpl->tpl_vars['lang500']->value;?>
</a></li><?php }?></center>

</div>               
        
        
        <div class="clear"></div>
    </div>
    <div class="scriptolutionfooterlang">
    <center><?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:lang.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</center>
    </div>
</div>
<?php if ($_smarty_tpl->tpl_vars['viewpage']->value == "1") {
echo '<script'; ?>
 type="text/javascript" src="//assets.pinterest.com/js/pinit.js"><?php echo '</script'; ?>
>
<?php }?>
</body>
</html><?php }
}
