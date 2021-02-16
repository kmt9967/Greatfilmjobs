<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:27:50
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/order.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53c146d69924_26686725',
  'file_dependency' => 
  array (
    '7e8a71de2d89aebeb4e16b020e0876698e7aca9b' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/order.tpl',
      1 => 1578315846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
  ),
),false)) {
function content_5e53c146d69924_26686725 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
<?php if ($_smarty_tpl->tpl_vars['scriptolution_local']->value == "1") {?>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_form" name="paypal_form">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="<?php echo $_smarty_tpl->tpl_vars['paypal_email']->value;?>
">
<input type="hidden" name="item_name" value="#<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
">
<input type="hidden" name="item_number" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
">
<input type="hidden" name="custom" value="<?php echo $_SESSION['USERID'];?>
">
<input type="hidden" name="amount" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['totalprice']);?>
">
<input type="hidden" name="currency_code" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/thank_you?g=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">
<input type="hidden" name="cancel_return" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="address_override" value="1">
<input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ipn_res.php">
</form>

<form action="" method="post" id="bal_form" name="bal_form">
<input type="hidden" name="subbal" value="1">
</form>                    

<form method="post" action="https://secure.payza.com/checkout" id="alertpay_form" name="alertpay_form">
<input type="hidden" name="ap_merchant" value="<?php echo $_smarty_tpl->tpl_vars['alertpay_email']->value;?>
"/>
<input type="hidden" name="ap_purchasetype" value="service"/>
<input type="hidden" name="ap_itemname" value="#<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
"/>
<input type="hidden" name="ap_amount" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['totalprice']);?>
"/>
<input type="hidden" name="ap_currency" value="<?php echo $_smarty_tpl->tpl_vars['alertpay_currency']->value;?>
"/>
<input type="hidden" name="ap_quantity" value="1"/>
<input type="hidden" name="ap_itemcode" value="<?php echo $_SESSION['USERID'];?>
"/>
<input type="hidden" name="ap_description" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
"/>
<input type="hidden" name="ap_returnurl" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/thank_you?g=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
"/>
<input type="hidden" name="ap_cancelurl" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"/>
<input type="hidden" name="apc_1" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"/>                        
</form>

<form action="" method="post" id="scriptolution_mybal_form" name="scriptolution_mybal_form">
<input type="hidden" name="scriptolution_mybal" value="1">
</form>                              
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842 gray">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 scriptolutionwidth800">                    
                    <div id="scriptolutionOrderingForm" class="scriptolutionpadding20"> 
                    <?php if ($_smarty_tpl->tpl_vars['afunds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>                                
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang410']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>                                
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>                                
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang410']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>                                 
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } else { ?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php }?>
                    <?php } else { ?>
                        <?php if ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2>  
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>   
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>                            
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalpric'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalpricee']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2>  
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } else { ?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/bank_payment.php?item=<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"><?php echo $_smarty_tpl->tpl_vars['langl0']->value;?>
</a></h2> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php }?>
                    <?php }?>
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg gray scriptolutionfooter842"></div>
    </div>
</div>
<?php } else {
if ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>

<?php echo '<script'; ?>
 type="text/javascript"> 
$(document).ready( function() {
    $('#paypal_form').submit();
});
<?php echo '</script'; ?>
>

<?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>

<?php echo '<script'; ?>
 type="text/javascript"> 
$(document).ready( function() {
    $('#alertpay_form').submit();
});
<?php echo '</script'; ?>
>

<?php }?>  
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal_form" name="paypal_form">
<input type="hidden" name="cmd" value="_xclick">
<!-- <input type="hidden" name="cmd" value="_cart"> -->
<input type="hidden" name="business" value="info@briskwizards.tech">
<input type="hidden" name="landing_page" value="billing">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="invoice" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
">
<!-- <input type="hidden" name="business" value="<?php echo $_smarty_tpl->tpl_vars['paypal_email']->value;?>
"> -->
<input type="hidden" name="item_name" value="#<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
 - <?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
">
<input type="hidden" name="item_number" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
">
<input type="hidden" name="custom" value="<?php echo $_SESSION['USERID'];?>
">
<input type="hidden" name="amount" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['totalprice']);?>
">
<input type="hidden" name="currency_code" value="<?php echo $_smarty_tpl->tpl_vars['currency']->value;?>
">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="return" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/thank_you?g=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
">
<input type="hidden" name="cancel_return" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="address_override" value="1">
<input type="hidden" name="notify_url" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/ipn_res.php">
</form>

<form action="" method="post" id="bal_form" name="bal_form">
<input type="hidden" name="subbal" value="1">
</form>                    

<form method="post" action="https://secure.payza.com/checkout" id="alertpay_form" name="alertpay_form">
<input type="hidden" name="ap_merchant" value="<?php echo $_smarty_tpl->tpl_vars['alertpay_email']->value;?>
"/>
<input type="hidden" name="ap_purchasetype" value="service"/>
<input type="hidden" name="ap_itemname" value="#<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['PID']);?>
"/>
<input type="hidden" name="ap_amount" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['totalprice']);?>
"/>
<input type="hidden" name="ap_currency" value="<?php echo $_smarty_tpl->tpl_vars['alertpay_currency']->value;?>
"/>
<input type="hidden" name="ap_quantity" value="1"/>
<input type="hidden" name="ap_itemcode" value="<?php echo $_SESSION['USERID'];?>
"/>
<input type="hidden" name="ap_description" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['gtitle']);?>
"/>
<input type="hidden" name="ap_returnurl" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/thank_you?g=<?php echo $_smarty_tpl->tpl_vars['eid']->value;?>
"/>
<input type="hidden" name="ap_cancelurl" value="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/"/>
<input type="hidden" name="apc_1" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['p']->value['IID']);?>
"/>                        
</form>

<form action="" method="post" id="scriptolution_mybal_form" name="scriptolution_mybal_form">
<input type="hidden" name="scriptolution_mybal" value="1">
</form>
<form action="" method="post" id="scriptolution_razorpay_form" name="scriptolution_razorpay_form">
<input type="hidden" name="razorpay_mybal" value="1">
</form>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842 gray">
		<div class="inner-wrapper scriptolutionwidth842">
			<div class="left-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 scriptolutionwidth800">                    
                    <div id="scriptolutionOrderingForm" class="scriptolutionpadding20 222"> 
                    <?php if ($_smarty_tpl->tpl_vars['afunds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <?php if ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang410']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <?php echo '<script'; ?>
 src="//checkout.razorpay.com/v1/checkout.js" type="text/javascript"><?php echo '</script'; ?>
>
                        <?php echo '<script'; ?>
 id="razorpay_payment-js" type="text/javascript">
                        $(function(){
                              var contact,email,name;
                              var options = {
                                  "key": "rzp_test_kSQNXGHgIVE9jS",
                                  "amount": "<?php echo $_smarty_tpl->tpl_vars['p']->value['totalprice']*$_SESSION['cur']*stripslashes(100);?>
",
                                  "currency": "<?php echo $_SESSION['c'];?>
",
                                  "name": "",
                                  "description": "",
                                  "image": "",
                                  "handler": function (response){
                                   if(response.razorpay_payment_id){
                                       //jQuery('#btn_check').show();
                                       $('inout[name="razorpay_id"]').attr('value',response.razorpay_payment_id);
                                       $('#paymentstatus').attr('value','Success');
                                       $('#rzp-button1').hide();
                                       $('#scriptolution_razorpay_form').trigger('submit');
                                    }else{
                                          $('#btn_check').after('Please try again later, contact administrator for more information');
                                          $('#paymentstatus').attr('value','Failure');
                                          $('#rzp-button1').hide();
                                          $('#btn_check').trigger('click');
                                    }
                              },
                              "modal": {
                                    "ondismiss": function(){
                                          //swal("Oops!", "Please Confirm the Order Again.", "info");
                                    }
                              },
                              "prefill": {
                                  "email": email,
                                  "contact": contact
                              },
                              "theme": {
                                  "color": ""
                              }
                              };
                            condition= 1;
                            el_confirm = jQuery("#checkoutFormSubmit");
                            var btn_name=el_confirm.attr("name");

                            $(".cstmbtn").after("<button id=\"rzp-button1\" class=\"razor-pay-btn opg-button opg-button-primary opg-button-large opg-margin-top opg-width-1-1\" style=\"display:none;\">Pay Now</button>");

                                      // changes st
                                      console.log("condition  = "+condition);
                                      if(condition){
                                          $("button#rzp-button1").css("display","inline");
                                          $(".cstmbtn").css("display","None");
                                          var rzp1 = new Razorpay(options);
                                          $("#rzp-button1").click(function(e){

                                              rzp1.open();
                                              e.preventDefault();
                                        });
                                    }else{                      
                                          $("button#rzp-button1").css("display","none");
                                          $(".cstmbtn").css("display","inline");
                                    }
                                      }); //]]>
                              <?php echo '</script'; ?>
>
                              <h2><a style="text-decoration:none" id="rzp-button1" href="#" >Pay using RazorPay</a></h2>
                              <!-- <button id="rzp-button1" class="razor-pay-btn opg-button opg-button-primary opg-button-large opg-margin-top opg-width-1-1" style="display: inline;">Pay Now</button> -->
                              <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang259']->value;?>
</strong></h1> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang258']->value;?>
</h2> 
                        <div class="progress"></div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang410']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang259']->value;?>
</strong></h1> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang258']->value;?>
</h2> 
                        <div class="progress"></div>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang410']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } else { ?>
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2>
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php }?>
                    <?php } else { ?>
                    8
                        <?php if ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        9
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>                             

                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        10
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        11
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang410']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "1" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "0" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        12
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2> 
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value < $_smarty_tpl->tpl_vars['p']->value['totalprice'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalprice']) {?>
                        13
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang410']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2>     
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>                            
                        <?php } elseif ($_smarty_tpl->tpl_vars['enable_paypal']->value == "0" && $_smarty_tpl->tpl_vars['enable_alertpay']->value == "1" && $_smarty_tpl->tpl_vars['funds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalpric'] && $_smarty_tpl->tpl_vars['afunds']->value >= $_smarty_tpl->tpl_vars['p']->value['totalpricee']) {?>
                        14
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang446']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2>   
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php } else { ?>
                        15
                        <h1><strong><?php echo $_smarty_tpl->tpl_vars['lang550']->value;?>
</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang411']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang447']->value;?>
</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang412']->value;?>
</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();"><?php echo $_smarty_tpl->tpl_vars['lang518']->value;?>
</a></h2>  
                        <h2><?php echo $_smarty_tpl->tpl_vars['lang489']->value;?>
: <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;
echo $_smarty_tpl->tpl_vars['p']->value['totalprice'];
}?></h2>
                        <?php }?>
                    <?php }?>
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg gray scriptolutionfooter842"></div>
    </div>
</div>
<?php }
}
}
