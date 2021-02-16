{if $smarty.session.USERID eq $p.USERID}   
<a href="{$baseurl}/edit?id={$p.PID}" class="hugeGreenBtn hoverMe 1ggg">{$lang141|upper}</a>
{elseif $smarty.session.USERID GT "0"}
<a onclick="document.newextform.submit();" href="#" class="hugeGreenBtn hoverMe 2sds">{$lang107|upper}</a>
<div class="order-extras">    
    <h1 style="font-size:24px; color:green">{$langs10}</h1>
    <small>{$langs11}</small>
    <form action="{$baseurl}/ordershipping.php?id={$p.PID}" method="post" name="newextform" id="newextform">
        <ul class="order-extras-list">
            <li>
                <input type="radio" name="scriptolutionbuy" value="1" />
                <span class="desc">
                    {$scriptolutionshipto}:
                </span>
                <span class="right">
                    {assign var=price value=$p.scriptolutionship1*$smarty.session.cur}
                    {if $scriptolution_cur_pos eq "1"}{$price|string_format:"%d"}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$price|string_format:"%d"}{/if}</span>
            </li>
            <li>
                <input type="radio" name="scriptolutionbuy" value="2" checked="checked" />
                <span class="desc">
                    {$langs9}:
                </span>
                <span class="right">
                    {assign var=price value=$p.scriptolutionship2*$smarty.session.cur}
                    {if $scriptolution_cur_pos eq "1"}{$price|string_format:"%d"}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$price|string_format:"%d"}{/if}</span>
            </li>
        </ul>
    </form>                                                  
</div>
{else}
<a href="{$baseurl}/login?r={insert name=get_redirect value=a assign=rurl PID=$p.PID seo=$p.seo gtitle=$title}{$rurl|stripslashes}" class="hugeGreenBtn hoverMe 3qwqwqw">{$lang107|upper}</a>
{/if}