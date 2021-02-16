
              <div class="main-wrapper">
                <div id="main">
                  <div class="content">
                  {include file="error.tpl"}

                    <div class="section"> 
                      <div class="t">&nbsp;</div> 
                      <div class="c"> 
                        <div class="page"> 
                          <div class="to-payment"> 

                                <h1><strong>{$langl0}</strong></h1>
                                <div>{$langl1}</div>
                                <br />
                                <h2>{$langl2}</h2>
                                <p style="font-size:16px">
                                  {assign var=price value=$p.totalprice*$smarty.session.cur}
                                	{$lang489}: {if $scriptolution_cur_pos eq "1"}{$price|string_format:"%d"}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$price|string_format:"%d"}{/if}<br />
                                    {$langl3}: #{$p.IID|stripslashes}<br />
                                    {$scriptolution_bankinfo|nl2br|stripslashes}
                                </p>
                                <br />
                                
                                <h2 style="color:#0095C0">{$langl4}</h2>
                                <p style="font-size:16px">
                                	{$langl5}
                                </p>
                                <br />
                                
                                <h2 style="color:#0095C0">{$langl6}</h2>
                                <p style="font-size:16px">
                                	{$langl7}
                                </p>
                                <br />
                                
                                <h2 style="color:#0095C0">{$langl8}</h2>
                                <p style="font-size:16px">
                                	{$langl9}                                    
                                    
                                    <form action="{$baseurl}/bank_payment.php?item={$p.IID|stripslashes}" method="post" style="font-size:18px;">
                                    
                                    <input type="hidden" name="item_name" value="#{$p.PID|stripslashes} - {$p.gtitle|stripslashes}">
                                    <input type="hidden" name="item_number" value="{$p.IID|stripslashes}">
                                    <input type="hidden" name="amount" value="{$p.totalprice|stripslashes}">
                                    
                                    {$langl10}: <input type="text" name="pname" value="" style="width:300px; font-size:24px; float:none; padding:5px;">
                                    <div style="padding-bottom:15px;"></div>
                                    
                                    {$langl11}: <input type="text" name="pdate" value="" style="width:300px; font-size:24px; float:none; padding:5px;">
                                    <div style="padding-bottom:15px;"></div>
                                    
                                    {$langl12}:
                                    <textarea name="padditional" style="font-size:24px; float:none; padding:5px;"></textarea>
                                    <div style="padding-bottom:15px; clear:both;"></div>

                                    <input type="submit" value="{$lang46}" style="width:300px; font-size:24px; float:none;">
                                    <input type="hidden" name="subbank" value="1">
                                    </form>
                                </p>
                                <br />
                            
                          </div> 
                        </div> 
                      </div> 
                      <div class="b">&nbsp;</div> 
                    </div>
                    
                  </div>
                  {include file="side.tpl"}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>