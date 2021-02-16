{include file="scriptolution_error7.tpl"}  
{if $scriptolution_local eq "1"}
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal_form" name="paypal_form">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="{$paypal_email}">
<input type="hidden" name="item_name" value="#{$p.PID|stripslashes} - {$p.gtitle|stripslashes}">
<input type="hidden" name="item_number" value="{$p.IID|stripslashes}">
<input type="hidden" name="custom" value="{$smarty.session.USERID}">
<input type="hidden" name="amount" value="{$p.totalprice|stripslashes}">
<input type="hidden" name="currency_code" value="{$currency}">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="return" value="{$baseurl}/thank_you?g={$eid}">
<input type="hidden" name="cancel_return" value="{$baseurl}/">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="address_override" value="1">
<input type="hidden" name="notify_url" value="{$baseurl}/ipn_res.php">
</form>

<form action="" method="post" id="bal_form" name="bal_form">
<input type="hidden" name="subbal" value="1">
</form>                    

<form method="post" action="https://secure.payza.com/checkout" id="alertpay_form" name="alertpay_form">
<input type="hidden" name="ap_merchant" value="{$alertpay_email}"/>
<input type="hidden" name="ap_purchasetype" value="service"/>
<input type="hidden" name="ap_itemname" value="#{$p.PID|stripslashes}"/>
<input type="hidden" name="ap_amount" value="{$p.totalprice|stripslashes}"/>
<input type="hidden" name="ap_currency" value="{$alertpay_currency}"/>
<input type="hidden" name="ap_quantity" value="1"/>
<input type="hidden" name="ap_itemcode" value="{$smarty.session.USERID}"/>
<input type="hidden" name="ap_description" value="{$p.gtitle|stripslashes}"/>
<input type="hidden" name="ap_returnurl" value="{$baseurl}/thank_you?g={$eid}"/>
<input type="hidden" name="ap_cancelurl" value="{$baseurl}/"/>
<input type="hidden" name="apc_1" value="{$p.IID|stripslashes}"/>                        
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
                    {if $afunds LT $p.totalprice}
                        {if $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice}
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds gte $p.totalprice}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2>
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2> 
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds LT $p.totalprice}                                
                        <h1><strong>{$lang410}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>                                
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds gte $p.totalprice}
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice}                                
                        <h1><strong>{$lang410}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>                                 
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds gte $p.totalprice}
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2>
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {else}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {/if}
                    {else}
                        {if $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds gte $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds LT $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds gte $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2>  
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>   
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>                            
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds gte $p.totalpric AND $afunds gte $p.totalpricee}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2>  
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {else}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        <h2><a style="text-decoration:none" href="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}">{$langl0}</a></h2> 
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {/if}
                    {/if}
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
{else}
{if $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds LT $p.totalprice AND $afunds LT $p.totalprice}
      {if $enable_cashfree eq "0"}
            {literal}
                  <script type="text/javascript"> 
                  $(document).ready( function() {
                      $('#paypal_form').submit();
                  });
                  </script>
            {/literal}
      {/if}
{elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice AND $afunds LT $p.totalprice}
      {if $enable_cashfree eq "0"}
            {literal}
                  <script type="text/javascript"> 
                  $(document).ready( function() {
                      $('#alertpay_form').submit();
                  });
                  </script>
            {/literal}
      {/if}
{/if} 
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal_form" name="paypal_form">
<input type="hidden" name="cmd" value="_xclick">
<!-- <input type="hidden" name="cmd" value="_cart"> -->
<!-- <input type="hidden" name="business" value="info@briskwizards.tech"> -->
<input type="hidden" name="landing_page" value="billing">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="invoice" value="{$p.PID|stripslashes}">
<input type="hidden" name="business" value="{$paypal_email}">
<input type="hidden" name="item_name" value="#{$p.PID|stripslashes} - {$p.gtitle|stripslashes}">
<input type="hidden" name="item_number" value="{$p.IID|stripslashes}">
<input type="hidden" name="custom" value="{$smarty.session.USERID}">
<input type="hidden" name="amount" value="{$p.totalprice|stripslashes}">
<input type="hidden" name="currency_code" value="{$currency}">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="no_shipping" value="2">
<input type="hidden" name="rm" value="2">
<input type="hidden" name="return" value="{$baseurl}/thank_you?g={$eid}">
<input type="hidden" name="cancel_return" value="{$baseurl}/">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
<input type="hidden" name="address_override" value="1">
<input type="hidden" name="notify_url" value="{$baseurl}/ipn_res.php">
</form>

<form action="" method="post" id="bal_form" name="bal_form">
<input type="hidden" name="subbal" value="1">
</form>                    

<form method="post" action="https://secure.payza.com/checkout" id="alertpay_form" name="alertpay_form">
<input type="hidden" name="ap_merchant" value="{$alertpay_email}"/>
<input type="hidden" name="ap_purchasetype" value="service"/>
<input type="hidden" name="ap_itemname" value="#{$p.PID|stripslashes}"/>
<input type="hidden" name="ap_amount" value="{$p.totalprice|stripslashes}"/>
<input type="hidden" name="ap_currency" value="{$alertpay_currency}"/>
<input type="hidden" name="ap_quantity" value="1"/>
<input type="hidden" name="ap_itemcode" value="{$smarty.session.USERID}"/>
<input type="hidden" name="ap_description" value="{$p.gtitle|stripslashes}"/>
<input type="hidden" name="ap_returnurl" value="{$baseurl}/thank_you?g={$eid}"/>
<input type="hidden" name="ap_cancelurl" value="{$baseurl}/"/>
<input type="hidden" name="apc_1" value="{$p.IID|stripslashes}"/>                        
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
                    {if $afunds LT $p.totalprice}
                        {php}
                              session_start();
                              global $p,$scriptolutionuemail,$scriptolutionuname,$config,$conn,$eid;
                              $secretKey = $config['cashfree_secret_key'];
                              $appId = $config['cashfree_app_id'];
                              $url = ($config['cashfree_mode'] == 1 ? 'https://test.cashfree.com/billpay/checkout/post/submit' : 'https://www.cashfree.com/checkout/post/submit');
                              $orderId = $p[0]['IID'];
                              $orderAmount = $p[0]['totalprice']*$_SESSION['cur'];
                              $orderCurrency = "INR";
                              $orderNote = "#".$p[0]['PID'].' - '.$p[0]['gtitle'];
                              $customerName = scriptolutionuname;
                              $customerPhone = '9999999999';
                              $customerEmail = $scriptolutionuemail;
                              $returnUrl = $config[baseurl].'/order?item='.$orderId;
                              $notifyUrl = $config[baseurl].'/cash-notify.php';
                              $postData = array( 
                                    "appId" => $appId, 
                                    "orderId" => $orderId, 
                                    "orderAmount" => $orderAmount, 
                                    "orderCurrency" => $orderCurrency, 
                                    "orderNote" => $orderNote, 
                                    "customerName" => $customerName, 
                                    "customerPhone" => $customerPhone, 
                                    "customerEmail" => $customerEmail,
                                    "returnUrl" => $returnUrl,
                                    "notifyUrl" => $notifyUrl,
                              );
                              ksort($postData);
                              $signatureData = "";
                              foreach ($postData as $key => $value){
                                    $signatureData .= $key.$value;
                              }
                              $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
                              $signature = base64_encode($signature);
                        {/php}
                        <script type="text/javascript">
                              var status = '{php}echo $_POST["txStatus"]{/php}';
                              //console.log(status);
                              if(status != ''){
                                    if(status == 'SUCCESS'){
                                          $('#scriptolution_razorpay_form').trigger('submit');      
                                    }else{
                                          alert('Payment Could not be proceed. please try again later.');
                                    }
                              }
                        </script>
                        <form id="redirectForm" name="redirectForm" method="post" action="{php}echo $url;{/php}">
                            <input type="hidden" name="appId" value="{php} echo $appId;{/php}"/>
                            <input type="hidden" name="orderId" value="{php} echo $orderId;{/php}"/>
                            <input type="hidden" name="orderAmount" value="{php} echo $orderAmount;{/php}"/>
                            <input type="hidden" name="orderCurrency" value="{php} echo $orderCurrency;{/php}"/>
                            <input type="hidden" name="orderNote" value="{php} echo $orderNote;{/php}"/>
                            <input type="hidden" name="customerName" value="{php} echo $customerName;{/php}"/>
                            <input type="hidden" name="customerEmail" value="{php} echo $customerEmail;{/php}"/>
                            <input type="hidden" name="customerPhone" value="{php} echo $customerPhone;{/php}"/>
                            <input type="hidden" name="returnUrl" value="{php} echo $returnUrl;{/php}"/>
                            <input type="hidden" name="notifyUrl" value="{php} echo $notifyUrl;{/php}"/>
                            <input type="hidden" name="signature" value="{php} echo $signature{/php}"/>
                        </form>
                        {if $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice}
                        <!-- <h1 1><strong>{$lang410}</strong></h1> -->
                        <h1 4><strong>Your payment options</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <!-- <script src="//checkout.razorpay.com/v1/checkout.js" type="text/javascript"></script> -->
                        <!-- <script id="razorpay_payment-js" type="text/javascript">
                        $(function(){
                              var contact,email,name;
                              var options = {
                                  "key": "rzp_test_kSQNXGHgIVE9jS",
                                  "amount": "{$p.totalprice*$smarty.session.cur*100|stripslashes}",
                                  "currency": "{$smarty.session.c}",
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
                              </script> -->
                              <!-- <h2><a style="text-decoration:none" id="rzp-button1" href="#" >Pay using RazorPay</a></h2> -->

                              <!-- <button id="rzp-button1" class="razor-pay-btn opg-button opg-button-primary opg-button-large opg-margin-top opg-width-1-1" style="display: inline;">Pay Now</button> -->
                              {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                                    <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                              {/if}
                              {assign var=price value=$p.totalprice*$smarty.session.cur}
                              <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$price}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$price}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds gte $p.totalprice}
                        <h1 2><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2>
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds LT $p.totalprice}
                              {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                                    <h1 4><strong>Your payment options</strong></h1>
                                    <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>
                                    <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                                    <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                              {else}
                                    <h1 3><strong>{$lang259}</strong></h1> 
                                    <h2>{$lang258}</h2> 
                                    <div class="progress"></div>
                              {/if}
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds gte $p.totalprice}
                        <!-- <h1 4><strong>{$lang410}</strong></h1> -->
                        <h1 4><strong>Your payment options</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice}
                        <h1 5><strong>{$lang259}</strong></h1> 
                        <h2>{$lang258}</h2> 
                        <div class="progress"></div>
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds gte $p.totalprice}
                        <!-- <h1 6><strong>{$lang410}</strong></h1> -->
                        <h1 4><strong>Your payment options</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2>
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {else}
                        <h1 ><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2>
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {/if}
                    {else}
                        {if $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>                             

                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "1" AND $funds gte $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2>                             
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds LT $p.totalprice AND $afunds gte $p.totalprice}
                        <!-- <h1><strong>{$lang410}</strong></h1> -->
                        <h1 4><strong>Your payment options</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "1" AND $enable_alertpay eq "0" AND $funds gte $p.totalprice AND $afunds gte $p.totalprice}
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2> 
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds LT $p.totalprice AND $afunds gte $p.totalprice}
                        
                        <!-- <h1><strong>{$lang410}</strong></h1> -->
                        <h1 4><strong>Your payment options</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2>  
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}   
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>                            
                        {elseif $enable_paypal eq "0" AND $enable_alertpay eq "1" AND $funds gte $p.totalpric AND $afunds gte $p.totalpricee}
                        
                        <h1><strong>{$lang446}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2>  
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if} 
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {else}
                        
                        <h1><strong>{$lang550}</strong></h1>
                        <h2><a style="text-decoration:none" href="#" onclick="document.paypal_form.submit();">{$lang411}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.alertpay_form.submit();">{$lang447}</a></h2>
                        <h2><a style="text-decoration:none" href="#" onclick="document.bal_form.submit();">{$lang412}</a></h2> 
                        <h2><a style="text-decoration:none" href="#" onclick="document.scriptolution_mybal_form.submit();">{$lang518}</a></h2>  
                        {if $smarty.session.c eq "INR" AND $enable_cashfree eq "1"}
                              <h2><a style="text-decoration:none" id="cf-btn" href="#" onclick="document.redirectForm.submit();">Pay using Cashfree</a></h2>
                        {/if}
                        <h2>{$lang489}: {if $scriptolution_cur_pos eq "1"}{$p.totalprice}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$p.totalprice}{/if}</h2>
                        {/if}
                    {/if}
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
{/if}