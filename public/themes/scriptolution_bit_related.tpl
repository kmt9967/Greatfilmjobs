				<div class="scriptolutionrelated">
                    <div class="left">
                        <h2>{$lang136}</h2>
                    </div>
                    <div class="clear"></div>
                    {section name=i loop=$r}
                    {insert name=seo_clean_titles assign=title value=a title=$r[i].gtitle}
                    <div class="cusongsblock cusongsblockviewgig">
                        <div class="songperson">
                            <a href="{$baseurl}/{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$title}"><img src="{$purl}/t3/{$r[i].p1}" alt="{$r[i].gtitle|stripslashes}" width="214" height="132" /></a>
                            {if $r[i].feat eq "1"}<span class="featured">{$lang526}</span>{/if}
                            {if $r[i].toprated eq "1"}<span class="rated">{$lang525}</span>{/if}
                            {if $r[i].youtube ne ""}{include file="scriptolution_bit_yt_small.tpl"}{/if}
                        </div>
                        {assign var=price value=$r[i].price*$smarty.session.cur}
                        
                        <div class="price">{if $scriptolution_cur_pos eq "1"}{$lang589} {$price|string_format:"%d"}{$smarty.session.csyumbol}{else}{$price|string_format:"%d"}{/if}</div>
                        <p>
                            {if $r[i].days eq "0"}{include file='scriptolution_bit_instant.tpl'}{elseif $r[i].days eq "1"}{include file='scriptolution_bit_express.tpl'}{/if}
                            <a href="{$baseurl}/{$r[i].seo|stripslashes}/{$r[i].PID|stripslashes}/{$title}">{$lang62} {$r[i].gtitle|stripslashes|mb_truncate:90:"...":'UTF-8'} {if $scriptolution_cur_pos eq "1"}{$lang589} {$price|string_format:"%d"}{$smarty.session.csyumbol}{else}{$smarty.session.csyumbol}{$price|string_format:"%d"}{/if}</a>
                        </p>                            
                        {insert name=get_member_profilepicture assign=profilepicture value=var USERID=$r[i].USERID}
                        <div class="userdata">
                            <div class="userimg"><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$r[i].username|stripslashes}"><img width="25px" height="25px" src="{$membersprofilepicurl}/thumbs/{$profilepicture}" alt="{$r[i].username|stripslashes}" /></a></div>
                            <div class="username"><a href="{$baseurl}/{insert name=get_seo_profile value=a username=$r[i].username|stripslashes}">{$r[i].username|stripslashes|truncate:20:"...":true}</a></div>
                            <div class="otherdetails">
                                <span class="usercount"></span>
                                <ul>
                                    {insert name=scriptolution_rating_stars assign=scriptolutionstars value=a scriptolutionuserid=$r[i].USERID}{$scriptolutionstars}
                                </ul>
                                <span class="flag"><span class="country {$r[i].country}" title="{insert name=country_code_to_country value=a assign=userc code=$r[i].country}{$userc}"></span></span>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                    {/section}
                </div>