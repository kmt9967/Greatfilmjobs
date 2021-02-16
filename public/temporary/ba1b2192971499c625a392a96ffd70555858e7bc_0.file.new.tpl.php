<?php
/* Smarty version 3.1.29, created on 2020-02-24 07:18:46
  from "/home4/o8txizzi/dev.greatfilmjobs.com/themes/new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5e53bf2677dc67_51989926',
  'file_dependency' => 
  array (
    'ba1b2192971499c625a392a96ffd70555858e7bc' => 
    array (
      0 => '/home4/o8txizzi/dev.greatfilmjobs.com/themes/new.tpl',
      1 => 1582546655,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:scriptolution_error7.tpl' => 1,
    'file:new_instant.tpl' => 1,
    'file:new_js.tpl' => 1,
    'file:new_multiples.tpl' => 1,
    'file:new_extras.tpl' => 1,
    'file:new_ship.tpl' => 1,
    'file:scriptolutionmaps.tpl' => 1,
  ),
),false)) {
function content_5e53bf2677dc67_51989926 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolution_error7.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php echo '<script'; ?>
 type="text/javascript">                        
  $(document).ready(function(){
  $("#toggle-additional-visuals").click(function(){
    $("#additional-visuals").toggle('slow');
    $('html, body').animate({
    scrollTop: $("#additional-visuals").offset().top
    }, 200);
  });
  $('textarea').focus(function() { $(this).parent().parent().find('p.tip-text').css('visibility','visible') });
  $('textarea').blur(function() { $(this).parent().parent().find('p.tip-text').css('visibility','hidden') });
  });
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/js/mainscriptolution.js" type="text/javascript"><?php echo '</script'; ?>
>
                                
<div class="bodybg scriptolutionpaddingtop15">
  <div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
    <div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
      <div class="full-side scriptolutionwidth842">
        <div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/new" enctype="multipart/form-data" id="new_gig" method="post">
                        
                            <div class="postgigtop scriptolutionpadding20">
                                <div class="form-entry1">
                                    <div class="spartone"><?php echo $_smarty_tpl->tpl_vars['lang62']->value;?>
</div>
                                    <div class="sparttwo">
                                        <div class="spartthree">
                                        <input class="texta" id="gig_title" maxlength="200" name="gtitle" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gtitle']->value);?>
" />
                                        </div>
                                        <div class="spartfour">
                                            <?php if ($_smarty_tpl->tpl_vars['price_mode']->value == "0" || $_smarty_tpl->tpl_vars['price_mode']->value == "2") {?>
                                            <div style="padding-top:5px;">
                                            <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['price']->value;
echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;
echo $_smarty_tpl->tpl_vars['price']->value;
}?>
                                            </div>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['price_mode']->value == "1") {?>
                                            <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {
echo $_smarty_tpl->tpl_vars['lang589']->value;?>
 <input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gprice']->value);?>
" readonly /><?php echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang63']->value;?>
<input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gprice']->value);?>
" readonly /><?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['price_mode']->value == "3") {
$_smarty_tpl->assign('packs' , insert_get_packs (array('value' => 'a'),$_smarty_tpl), true);?>
                                            <?php if ($_smarty_tpl->tpl_vars['scriptolution_cur_pos']->value == "1") {?><select name="gprice" id="gprice" class="textb"><?php
$__section_p_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_p']) ? $_smarty_tpl->tpl_vars['__smarty_section_p'] : false;
$__section_p_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['packs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_0_total = $__section_p_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_0_total != 0) {
for ($__section_p_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_0_iteration <= $__section_p_0_total; $__section_p_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?><option value="<?php echo stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['ID']);?>
" <?php if ($_smarty_tpl->tpl_vars['PACID']->value == stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['ID'])) {?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice']);?>
</option><?php
}
}
if ($__section_p_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_p'] = $__section_p_0_saved;
}
?></select><?php echo $_smarty_tpl->tpl_vars['lang197']->value;
} else {
echo $_smarty_tpl->tpl_vars['lang197']->value;?>
<select name="gprice" id="gprice" class="textb"><?php
$__section_p_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_p']) ? $_smarty_tpl->tpl_vars['__smarty_section_p'] : false;
$__section_p_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['packs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_p_1_total = $__section_p_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_p'] = new Smarty_Variable(array());
if ($__section_p_1_total != 0) {
for ($__section_p_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] = 0; $__section_p_1_iteration <= $__section_p_1_total; $__section_p_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']++){
?><option value="<?php echo stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['ID']);?>
" <?php if ($_smarty_tpl->tpl_vars['PACID']->value == stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['ID'])) {?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->tpl_vars['packs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_p']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_p']->value['index'] : null)]['pprice']);?>
</option><?php
}
}
if ($__section_p_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_p'] = $__section_p_1_saved;
}
?></select><?php }?>
                                            <?php }?>
                                            
                                        </div>
                                        <!-- <div class="spartthree">
                                           <br/>
                                        </div> -->
                                        <div class="spartone" style="font-size: 20px;width: 100%;text-align: right;">
                                          Enter your desired money with currency
                                          <input class="textb" id="gprice" maxlength="3" name="prices" size="3" type="text" value="" /> 
                                            <select name="currency">
                                              <option value="INR">INR</option>
                                              <option value="USD">USD</option>
                                              <option value="EUR">EUR</option>
                                              <option value="JPY">JPY</option>
                                              <option value="GBP">GBP</option>
                                              <option value="AUD">AUD</option>
                                              <option value="CAD">CAD</option>
                                              <option value="CHF">CHF</option>
                                              <option value="CNY">CNY</option>
                                              <option value="SEK">SEK</option>
                                              <option value="NZD">NZD</option>
                                            </select>
                                            <?php echo '<script'; ?>
 type="text/javascript">
                                              $(document).ready(function($){
                                              //   alert('11');
                                                $(document).on('change','input[name="prices"], select[name="currency"]',function(){
                                                  var prices = $('input[name="prices"]').val(),
                                                      currency = $('select[name="currency"]').val();
                                                      $.ajax({
                                                        method: "POST",
                                                        url: "some.php",
                                                        data: { prices: prices, currency: currency }
                                                        })
                                                        .done(function( msg ) {
                                                        //alert( "Data Saved: " + msg );
                                                        $('input[name="gprice"]').attr('value',msg);
                                                      });
                                                });
                                              });
                                            <?php echo '</script'; ?>
>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['price_mode']->value == "0" || $_smarty_tpl->tpl_vars['price_mode']->value == "2") {?>
                                <div style="clear:both"></div>
                                <?php }?>
                                <div class="form-entry" align="center">
                                    <p class="max-chars-top"><?php echo $_smarty_tpl->tpl_vars['lang64']->value;?>
: <span class="gigtitlemax">200</span> (<?php echo $_smarty_tpl->tpl_vars['lang65']->value;?>
: <span class="gigtitleused">0</span>)</p>
                                </div>
                            </div>
                            <div class="scriptolutionclear"></div>

                            <div class="postgigbottom scriptolutionpadding20">
                                <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_category"><?php echo $_smarty_tpl->tpl_vars['lang66']->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <select class="text" id="gig_category_id" name="gcat"><option value="0"><?php echo $_smarty_tpl->tpl_vars['lang67']->value;?>
</option>
                                      <?php $_smarty_tpl->assign('c' , insert_get_categories (array(),$_smarty_tpl), true);?>
                                      <?php
$__section_i_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_i']) ? $_smarty_tpl->tpl_vars['__smarty_section_i'] : false;
$__section_i_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['c']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_2_total = $__section_i_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_2_total != 0) {
for ($__section_i_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_2_iteration <= $__section_i_2_total; $__section_i_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                                        <option value="<?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']);?>
" <?php if ($_smarty_tpl->tpl_vars['gcat']->value == $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']) {?>selected="selected"<?php }?>><?php echo stripslashes($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']);?>
</option>
                                        <?php if ($_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID'] != "0") {?>
                                            <?php $_smarty_tpl->assign('scats' , insert_get_subcategories (array('parent' => $_smarty_tpl->tpl_vars['c']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['CATID']),$_smarty_tpl), true);?>
                                            <?php
$__section_j_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_j']) ? $_smarty_tpl->tpl_vars['__smarty_section_j'] : false;
$__section_j_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['scats']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_j_3_total = $__section_j_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_j'] = new Smarty_Variable(array());
if ($__section_j_3_total != 0) {
for ($__section_j_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] = 0; $__section_j_3_iteration <= $__section_j_3_total; $__section_j_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']++){
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['CATID'];?>
" <?php if ($_smarty_tpl->tpl_vars['gcat']->value == $_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['CATID']) {?>selected="selected"<?php }?>>- <?php echo stripslashes($_smarty_tpl->tpl_vars['scats']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_j']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_j']->value['index'] : null)]['name']);?>
</option>
                                            <?php
}
}
if ($__section_j_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_j'] = $__section_j_3_saved;
}
?>
                                        <?php }?>
                                      <?php
}
}
if ($__section_i_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_i'] = $__section_i_2_saved;
}
?>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                              
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_description"><?php echo $_smarty_tpl->tpl_vars['lang69']->value;?>
</label>
                                      <p class="tip-text-static"><?php echo $_smarty_tpl->tpl_vars['lang70']->value;?>
</p>
                                      <p class="tip-text"><?php echo $_smarty_tpl->tpl_vars['lang71']->value;?>
<br/><br/><?php echo $_smarty_tpl->tpl_vars['lang72']->value;?>
</p>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"><?php echo stripslashes($_smarty_tpl->tpl_vars['gdesc']->value);?>
</textarea>
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle new-badge" for="gig_order_requirement"><?php echo $_smarty_tpl->tpl_vars['lang73']->value;?>
</label><br/>
                                      <p class="tip-text-static"><?php echo $_smarty_tpl->tpl_vars['lang74']->value;?>
</p>
                                      <p class="tip-text"><?php echo $_smarty_tpl->tpl_vars['lang75']->value;?>
</p>
                                    </div>
                                    <div class="column-r">
                                        <textarea class="text" cols="74" id="gig_order_requirement_attributes_body" maxlength="450" name="ginst" rows="10"><?php echo stripslashes($_smarty_tpl->tpl_vars['ginst']->value);?>
</textarea>
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="gig_tags"><?php echo $_smarty_tpl->tpl_vars['lang76']->value;?>
</label>
                                      <p class="tip-text-static"><?php echo $_smarty_tpl->tpl_vars['lang77']->value;?>
</p>
                                      <p class="tip-text"><?php echo $_smarty_tpl->tpl_vars['lang78']->value;?>
</p>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" id="gig_tag_list" maxlength="100" name="gtags" rows="2"><?php echo stripslashes($_smarty_tpl->tpl_vars['gtags']->value);?>
</textarea>
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  
                                  <?php if ($_smarty_tpl->tpl_vars['enablescriptolutionlocations']->value == "1") {?>
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="scriptolutionjoblocation"><?php echo $_smarty_tpl->tpl_vars['lang617']->value;?>
</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="scriptolutionjoblocation" name="scriptolutionjoblocation" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionjoblocation']->value);?>
" onFocus="geolocate()" />
                                      <?php echo $_smarty_tpl->tpl_vars['lang618']->value;?>
: <input name="scriptolutioncity" class="textread scriptolutionauto" id="locality" disabled="true" readonly value="<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutioncity']->value);?>
"></input>
                                      <?php echo $_smarty_tpl->tpl_vars['lang619']->value;?>
: <input name="scriptolutionstate" class="textread scriptolutionauto" id="administrative_area_level_1" disabled="true" readonly value="<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutionstate']->value);?>
"></input>
                                      <?php echo $_smarty_tpl->tpl_vars['lang467']->value;?>
: <input name="scriptolutioncountry" class="textread scriptolutionauto" id="country" disabled="true" readonly value="<?php echo stripslashes($_smarty_tpl->tpl_vars['scriptolutioncountry']->value);?>
"></input>
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  <?php }?>
                                  
                                  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:new_instant.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                      <div class="column-l">
                                          <label class="editgigformtitle"><?php echo $_smarty_tpl->tpl_vars['lang81']->value;?>
</label>
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input class="text" id="gig_photo" name="gphoto" size="20" type="file" />
                                            <ul class="image-tip">
                                              <li><?php echo $_smarty_tpl->tpl_vars['lang82']->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->tpl_vars['lang83']->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->tpl_vars['lang84']->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->tpl_vars['lang85']->value;?>
</li>
                                              <li><?php echo $_smarty_tpl->tpl_vars['lang86']->value;?>
</li>
                                            </ul>
                                          </div>
                                        </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>

                                <div class="additional-materials">
                                    <input type="button" name="more-photos" value="<?php echo $_smarty_tpl->tpl_vars['lang87']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['lang88']->value;?>
" class="scriptolutiongreenbutton" id="toggle-additional-visuals" />
                                    <div id="additional-visuals" style="display:none">
                                        <div class="form-entry">
                                        <div class="row">
                                        <div class="column-l">
                                          <div class="image-box">
                                              <img alt="no image" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/no_image.jpg?" />
                                          </div>
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input class="browsefile" id="gig_photo2" name="gphoto2" size="20" type="file" />
                                            <p><?php echo $_smarty_tpl->tpl_vars['lang86']->value;?>
</p>
                                          </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>                                            
                                        <div class="form-entry">
                                          <div class="row">
                                            <div class="column-l">
                                              <div class="image-box">
                                                  <img alt="no image" src="<?php echo $_smarty_tpl->tpl_vars['imageurl']->value;?>
/no_image.jpg?" />
                                              </div>
                                            </div>
                                            <div class="column-r">
                                              <div class="image-info">
                                                <input class="browsefile" id="gig_photo3" name="gphoto3" size="20" type="file" />
                                                <p><?php echo $_smarty_tpl->tpl_vars['lang86']->value;?>
</p>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>
                                        <div class="form-entry">
                                        <div id="youtube" class="row">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_youtube_url"><?php echo $_smarty_tpl->tpl_vars['lang89']->value;?>
</label><br/>(<?php echo $_smarty_tpl->tpl_vars['lang90']->value;?>
)
                                        </div>
                                        <div class="column-r">
                                          <input class="text" id="gig_youtube_url" name="gyoutube" size="30" type="text" value="<?php echo stripslashes($_smarty_tpl->tpl_vars['gyoutube']->value);?>
" />
                                        </div>
                                        </div>
                                        </div>
                                        <div class="scriptolutionclear"></div>
                                    </div>
                                </div>
                                  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:new_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:new_multiples.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:new_extras.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:new_ship.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                              </div>

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang46']->value;?>
" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                            </div>
                        </form>   
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
        <div class="footerbg scriptolutionfooter842"></div>
    </div>
</div>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/trumbowyg/trumbowyg.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/trumbowyg/ui/trumbowyg.min.css">
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/trumbowyg/plugins/colors/trumbowyg.colors.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['baseurl']->value;?>
/trumbowyg/plugins/colors/ui/trumbowyg.colors.min.css">

<?php echo '<script'; ?>
 type="text/javascript">                        
  $(document).ready(function(){
  sQuery('#gig_description').trumbowyg({
    fullscreenable: false,
    closable: false,
    btns: ['bold', '|', 'italic', '|', 'foreColor', '|', 'backColor', '|', 'orderedList']
  });
  });
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['enablescriptolutionlocations']->value == "1") {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:scriptolutionmaps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
