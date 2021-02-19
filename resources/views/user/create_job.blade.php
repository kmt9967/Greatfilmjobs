@extends('layout.header')
@section('content')
<div class="bodybg scriptolutionpaddingtop15">
    <div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
      <div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
        <div class="full-side scriptolutionwidth842">
          <div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                      <div id="scriptolutionPostForm"> 
                          <form action="/create_job" enctype="multipart/form-data" id="new_gig" method="post">
                          @csrf
                              <div class="postgigtop scriptolutionpadding20">
                                  <div class="form-entry1">
                                      <div class="spartone">I will</div>
                                      <div class="sparttwo">
                                          <div class="spartthree">
                                          <input class="texta" id="gig_title" maxlength="200" name="gtitle" type="text" value="" />
                                          </div>
                                          <div class="spartfour">
                                                for $<input class="textb" id="gprice" maxlength="3" name="gprice" size="3" type="text" value="" readonly />                                                                                        
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
                                              <script type="text/javascript">
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
                                              </script>
                                          </div>
                                      </div>
                                  </div>
                                                                  <div class="form-entry" align="center">
                                      <p class="max-chars-top">maximum characters: <span class="gigtitlemax">200</span> (used: <span class="gigtitleused">0</span>)</p>
                                  </div>
                              </div>
                              <div class="scriptolutionclear"></div>
  
                              <div class="postgigbottom scriptolutionpadding20">
                                  <div class="form-entry">
                                      <div class="column-l">
                                        <label class="editgigformtitle" for="gig_category">Category</label>
                                      </div>
                                      <div class="column-r">
                                       @include('data.categories')                                                                                                                          </select>
                                      </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                
                                    <div class="form-entry">
                                      <div class="column-l">
                                        <label class="editgigformtitle" for="gig_description">Description</label>
                                        <p class="tip-text-static">Be as descriptive as possible.</p>
                                        <p class="tip-text">Provide samples and explain what you will and will not do.<br/><br/>Please also explain how many units, revisions, samples etc are included with your job.</p>
                                      </div>
                                      <div class="column-r">
                                        <textarea class="text" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"></textarea>
                                      </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="form-entry">
                                      <div class="column-l">
                                        <label class="editgigformtitle new-badge" for="gig_order_requirement">Instructions to Buyer</label><br/>
                                        <p class="tip-text-static">Give Buyer a head start.</p>
                                        <p class="tip-text">If you need to obtain information, files or other material from the buyer prior to starting your work, please add your instructions here. For example: Please send me your company name or Please send me the photo you need me to edit.</p>
                                      </div>
                                      <div class="column-r">
                                          <textarea class="text" cols="74" id="gig_order_requirement_attributes_body" maxlength="450" name="ginst" rows="10"></textarea>
                                      </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="form-entry">
                                      <div class="column-l">
                                        <label class="editgigformtitle" for="gig_tags">Tags</label>
                                        <p class="tip-text-static">Enter keywords that best describe your job, separate by spaces.</p>
                                        <p class="tip-text">Example: photoshop picture beauty</p>
                                      </div>
                                      <div class="column-r">
                                        <textarea class="text" id="gig_tag_list" maxlength="100" name="gtags" rows="2"></textarea>
                                      </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                                                      <div class="form-entry">
                                      <div class="column-l">
                                        <label class="editgigformtitle" for="scriptolutionjoblocation">Location</label>
                                      </div>
                                      <div class="column-r">
                                        {{-- <input class="text" id="scriptolutionjoblocation" name="scriptolutionjoblocation" type="text" value="" onFocus="geolocate()" /> --}}
                                        {{-- City: <input name="scriptolutioncity" class="textread scriptolutionauto" id="locality" disabled="true" readonly value=""></input>
                                        State: <input name="scriptolutionstate" class="textread scriptolutionauto" id="administrative_area_level_1" disabled="true" readonly value=""></input>
                                        Country: <input name="scriptolutioncountry" class="textread scriptolutionauto" id="country" disabled="true" readonly value=""></input> --}}
                                        City: <input name="scriptolutioncity" class="textread scriptolutionauto" id="locality"  value=""></input>
                                        State: <input name="scriptolutionstate" class="textread scriptolutionauto" id="administrative_area_level_1"  value=""></input>
                                        Country: <input name="scriptolutioncountry" class="textread scriptolutionauto" id="country"  value=""></input>
                                     
                                    </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                                                      
                                                                            <a name="options"></a>
                                          <div class="estimate" id="showdays">
                                              <div class="column-l">
                                                <label class="editgigformtitle" for="gig_expected_duration">Maximum Days To Complete</label>
                                              </div>
                                              <div class="column-r">
                                                <input class="text" id="gig_expected_duration" name="gdays" size="2" type="text" value="" />
                                                <div>Maximum duration for this job to complete. Time it will take you to complete your work. Consider time differences, your own free time and other engagements. Buyers are allowed to cancel late delivered orders.</div>
                                              </div>
                                              <div style="clear:both">
                                                  <a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showdays').hide();$('#showinstant').show();">Or click here to allow instant delivery (digital products only)</a>
                                              </div>
                                          </div>
                                          
                                          <div class="estimate" id="showinstant" style="display:none;">
                                              <div class="column-l">
                                                <label class="editgigformtitle" for="gig_instant_delivery">Instant Delivery</label>
                                              </div>
                                              <div class="column-r">
                                                  <div>Download Url:</div>
                                                    <input type="text" id="instanturl" size="50" name="instanturl" class="text" />
                                                    
                                                  <div>Or upload a file (rar or zip):</div>
                                                  <input type="file" size="20" id="instantfile" name="instantfile" class="text" />
                                              </div>
                                              <div style="clear:both">
                                                  <a style="text-decoration:none; font-size:16px" href="#options" onclick="$('#showinstant').hide();$('#showdays').show();">Return to maximum days</a>
                                              </div>
                                          </div>
                                          
                                          <div style="padding-bottom:20px;"></div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="form-entry">
                                        <div class="column-l">
                                            <label class="editgigformtitle">Add Image</label>
                                          </div>
                                          <div class="column-r">
                                            <div class="image-info">
                                              <input class="text" id="gig_photo" name="gphoto" size="20" type="file" />
                                              <ul class="image-tip">
                                                <li>Do not use images already in use by other jobs</li>
                                                <li>Image must be descriptive and relevant to your work</li>
                                                <li>Real work sample images sell many times more then others</li>
                                                <li>Never use other seller's images</li>
                                                <li>Acceptable formats: jpeg, jpg, gif and png</li>
                                              </ul>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
  
                                  <div class="additional-materials">
                                      <input type="button" name="more-photos" value="Add More Images / Add Video" class="scriptolutiongreenbutton" id="toggle-additional-visuals" />
                                      <div id="additional-visuals" style="display:none">
                                          <div class="form-entry">
                                          <div class="row">
                                          <div class="column-l">
                                            <div class="image-box">
                                                <img alt="no image" src="/images/no_image.jpg?" />
                                            </div>
                                          </div>
                                          <div class="column-r">
                                            <div class="image-info">
                                              <input class="browsefile" id="gig_photo2" name="gphoto2" size="20" type="file" />
                                              <p>Acceptable formats: jpeg, jpg, gif and png</p>
                                            </div>
                                          </div>
                                          </div>
                                          </div>
                                          <div class="scriptolutionclear"></div>                                            
                                          <div class="form-entry">
                                            <div class="row">
                                              <div class="column-l">
                                                <div class="image-box">
                                                    <img alt="no image" src="/images/no_image.jpg?" />
                                                </div>
                                              </div>
                                              <div class="column-r">
                                                <div class="image-info">
                                                  <input class="browsefile" id="gig_photo3" name="gphoto3" size="20" type="file" />
                                                  <p>Acceptable formats: jpeg, jpg, gif and png</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="scriptolutionclear"></div>
                                          <div class="form-entry">
                                          <div id="youtube" class="row">
                                          <div class="column-l">
                                            <label class="editgigformtitle" for="gig_youtube_url">YouTube Video</label><br/>(Optional)
                                          </div>
                                          <div class="column-r">
                                            <input class="text" id="gig_youtube_url" name="gyoutube" size="30" type="text" value="" />
                                          </div>
                                          </div>
                                          </div>
                                          <div class="scriptolutionclear"></div>
                                      </div>
                                  </div>
                                                                        
                                      <script language="javascript" type="text/javascript">
                                      function scriptolutiontoggle(obj, obbox) 
                                      {										
                                          if(obbox == 'multipleme')							
                                          {
                                              $('#extrasmore').hide();
                                              $('#shipmore').hide();
                                              if ($('#multipleme').is(":checked")) 
                                              {
                                                  $('#multiplemore').show();
                                                  if ($('#extrasme').is(":checked")) 
                                                  {
                                                      $("#extrasme").removeAttr("checked");
                                                  }
                                                  if ($('#shipme').is(":checked")) 
                                                  {
                                                      $("#shipme").removeAttr("checked");
                                                  }
                                              }
                                              else
                                              {
                                                  $('#multiplemore').hide();
                                              }
                                              
                                          }
                                          else if(obbox == 'extrasme')							
                                          {
                                              $('#multiplemore').hide();
                                              $('#shipmore').hide();
                                              if ($('#extrasme').is(":checked")) 
                                              {
                                                  $('#extrasmore').show();
                                                  if ($('#multipleme').is(":checked")) 
                                                  {
                                                      $("#multipleme").removeAttr("checked");
                                                  }
                                                  if ($('#shipme').is(":checked")) 
                                                  {
                                                      $("#shipme").removeAttr("checked");
                                                  }
                                              }
                                              else
                                              {
                                                  $('#extrasmore').hide();
                                              }
                                          }
                                          else if(obbox == 'shipme')							
                                          {
                                              $('#multiplemore').hide();
                                              $('#extrasmore').hide();
                                              if ($('#shipme').is(":checked")) 
                                              {
                                                  $('#shipmore').show();
                                                  if ($('#multipleme').is(":checked")) 
                                                  {
                                                      $("#multipleme").removeAttr("checked");
                                                  }
                                                  if ($('#extrasme').is(":checked")) 
                                                  {
                                                      $("#extrasme").removeAttr("checked");
                                                  }
                                              }
                                              else
                                              {
                                                  $('#shipmore').hide();
                                              }
                                          }
                                      }
                                      </script>
                                      
                                                                        <style>.multipleoption{font-size:20px!important;padding:0;margin:0}.showmultiple{background:white;color:#464646;margin-top:20px;width:94%;padding:10px!important}#multiplemore{display:none}.multipleping-selection-form{margin-top:5px!important;background:white}.multipleping-settings{font-size:16px;letter-spacing:-0.04em;line-height:30px}</style>
                                        <div class="row showmultiple">
                                          <p class="multipleoption">
                                              <input id="multipleme" name="multipleme" onclick="scriptolutiontoggle('multiplemore', 'multipleme')" type="checkbox" value="1" /> 
                                          Allow users to order more than one
                                          </p>
                                          <div id="multiplemore">
                                              <div id="multipleping" class="multipleping-selection-form">
                                                  <div class="multipleping-settings">
                                                      The maximum times a user can order this job is  
                                                      <select id="multiplemax" name="multiplemax" class="textthree">
                                                                                                          <option value="2" >2</option>
                                                                                                          <option value="3" >3</option>
                                                                                                          <option value="4" >4</option>
                                                                                                          <option value="5" >5</option>
                                                                                                          <option value="6" >6</option>
                                                                                                          <option value="7" >7</option>
                                                                                                          <option value="8" >8</option>
                                                                                                          <option value="9" >9</option>
                                                                                                          <option value="10" >10</option>
                                                                                                          <option value="11" >11</option>
                                                                                                          <option value="12" >12</option>
                                                                                                          <option value="13" >13</option>
                                                                                                          <option value="14" >14</option>
                                                                                                          <option value="15" >15</option>
                                                                                                          <option value="16" >16</option>
                                                                                                          <option value="17" >17</option>
                                                                                                          <option value="18" >18</option>
                                                                                                          <option value="19" >19</option>
                                                                                                          <option value="20" >20</option>
                                                                                                          <option value="21" >21</option>
                                                                                                          <option value="22" >22</option>
                                                                                                          <option value="23" >23</option>
                                                                                                          <option value="24" >24</option>
                                                                                                          <option value="25" >25</option>
                                                                                                          </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                                                        <style>.extrasoption{font-size:20px!important;padding:0;margin:0}.showextras{background:white;color:#464646;margin-top:20px;width:94%;padding:10px!important}#extrasmore{display:none}.extrasping-selection-form{margin-top:5px!important;background:white}.extrasping-settings{font-size:16px;letter-spacing:-0.04em;line-height:30px}</style>
                                        <div class="row showextras">
                                          <p class="extrasoption">
                                              <input id="extrasme" name="extrasme" onclick="scriptolutiontoggle('extrasmore', 'extrasme')" type="checkbox" value="1" /> 
                                          Add extras to this gig
                                          </p>
                                          <div id="extrasmore">
                                              <div id="extrasping" class="extrasping-selection-form">
                                                  <div class="extrasping-settings">
                                                      I will 
                                                      <input type="text" name="extra1" id="extra1" value="" style="width:300px;" class="textthree" />
                                                      for an extra
                                                      <select id="extraprice1" name="extraprice1" class="textthree">
                                                                                                          <option value="1" >
                                                                                                              ₹72</option>
                                                                                                          <option value="2" >
                                                                                                              ₹145</option>
                                                                                                          <option value="3" >
                                                                                                              ₹217</option>
                                                                                                          <option value="4" >
                                                                                                              ₹290</option>
                                                                                                          <option value="5" >
                                                                                                              ₹362</option>
                                                                                                          <option value="6" >
                                                                                                              ₹435</option>
                                                                                                          <option value="7" >
                                                                                                              ₹508</option>
                                                                                                          <option value="8" >
                                                                                                              ₹580</option>
                                                                                                          <option value="9" >
                                                                                                              ₹653</option>
                                                                                                          <option value="10" >
                                                                                                              ₹725</option>
                                                                                                          <option value="11" >
                                                                                                              ₹798</option>
                                                                                                          <option value="12" >
                                                                                                              ₹871</option>
                                                                                                          <option value="13" >
                                                                                                              ₹943</option>
                                                                                                          <option value="14" >
                                                                                                              ₹1016</option>
                                                                                                          <option value="15" >
                                                                                                              ₹1088</option>
                                                                                                          <option value="16" >
                                                                                                              ₹1161</option>
                                                                                                          <option value="17" >
                                                                                                              ₹1234</option>
                                                                                                          <option value="18" >
                                                                                                              ₹1306</option>
                                                                                                          <option value="19" >
                                                                                                              ₹1379</option>
                                                                                                          <option value="20" >
                                                                                                              ₹1451</option>
                                                                                                          <option value="21" >
                                                                                                              ₹1524</option>
                                                                                                          <option value="22" >
                                                                                                              ₹1596</option>
                                                                                                          <option value="23" >
                                                                                                              ₹1669</option>
                                                                                                          <option value="24" >
                                                                                                              ₹1742</option>
                                                                                                          <option value="25" >
                                                                                                              ₹1814</option>
                                                                                                          </select>
                                                      
                                                      <br />
                                                      I will 
                                                      <input type="text" name="extra2" id="extra2" value="" style="width:300px;" class="textthree" />
                                                      for an extra
                                                      <select id="extraprice2" name="extraprice2" class="textthree">
                                                                                                          <option value="1" >
                                                                                                              ₹72</option>
                                                                                                          <option value="2" >
                                                                                                              ₹145</option>
                                                                                                          <option value="3" >
                                                                                                              ₹217</option>
                                                                                                          <option value="4" >
                                                                                                              ₹290</option>
                                                                                                          <option value="5" >
                                                                                                              ₹362</option>
                                                                                                          <option value="6" >
                                                                                                              ₹435</option>
                                                                                                          <option value="7" >
                                                                                                              ₹508</option>
                                                                                                          <option value="8" >
                                                                                                              ₹580</option>
                                                                                                          <option value="9" >
                                                                                                              ₹653</option>
                                                                                                          <option value="10" >
                                                                                                              ₹725</option>
                                                                                                          <option value="11" >
                                                                                                              ₹798</option>
                                                                                                          <option value="12" >
                                                                                                              ₹871</option>
                                                                                                          <option value="13" >
                                                                                                              ₹943</option>
                                                                                                          <option value="14" >
                                                                                                              ₹1016</option>
                                                                                                          <option value="15" >
                                                                                                              ₹1088</option>
                                                                                                          <option value="16" >
                                                                                                              ₹1161</option>
                                                                                                          <option value="17" >
                                                                                                              ₹1234</option>
                                                                                                          <option value="18" >
                                                                                                              ₹1306</option>
                                                                                                          <option value="19" >
                                                                                                              ₹1379</option>
                                                                                                          <option value="20" >
                                                                                                              ₹1451</option>
                                                                                                          <option value="21" >
                                                                                                              ₹1524</option>
                                                                                                          <option value="22" >
                                                                                                              ₹1596</option>
                                                                                                          <option value="23" >
                                                                                                              ₹1669</option>
                                                                                                          <option value="24" >
                                                                                                              ₹1742</option>
                                                                                                          <option value="25" >
                                                                                                              ₹1814</option>
                                                                                                          </select>
                                                      
                                                      <br />
                                                      I will 
                                                      <input type="text" name="extra3" id="extra3" value="" style="width:300px;" class="textthree" />
                                                      for an extra
                                                      <select id="extraprice3" name="extraprice3" class="textthree">
                                                                                                          <option value="1" >
                                                                                                              ₹72</option>
                                                                                                          <option value="2" >
                                                                                                              ₹145</option>
                                                                                                          <option value="3" >
                                                                                                              ₹217</option>
                                                                                                          <option value="4" >
                                                                                                              ₹290</option>
                                                                                                          <option value="5" >
                                                                                                              ₹362</option>
                                                                                                          <option value="6" >
                                                                                                              ₹435</option>
                                                                                                          <option value="7" >
                                                                                                              ₹508</option>
                                                                                                          <option value="8" >
                                                                                                              ₹580</option>
                                                                                                          <option value="9" >
                                                                                                              ₹653</option>
                                                                                                          <option value="10" >
                                                                                                              ₹725</option>
                                                                                                          <option value="11" >
                                                                                                              ₹798</option>
                                                                                                          <option value="12" >
                                                                                                              ₹871</option>
                                                                                                          <option value="13" >
                                                                                                              ₹943</option>
                                                                                                          <option value="14" >
                                                                                                              ₹1016</option>
                                                                                                          <option value="15" >
                                                                                                              ₹1088</option>
                                                                                                          <option value="16" >
                                                                                                              ₹1161</option>
                                                                                                          <option value="17" >
                                                                                                              ₹1234</option>
                                                                                                          <option value="18" >
                                                                                                              ₹1306</option>
                                                                                                          <option value="19" >
                                                                                                              ₹1379</option>
                                                                                                          <option value="20" >
                                                                                                              ₹1451</option>
                                                                                                          <option value="21" >
                                                                                                              ₹1524</option>
                                                                                                          <option value="22" >
                                                                                                              ₹1596</option>
                                                                                                          <option value="23" >
                                                                                                              ₹1669</option>
                                                                                                          <option value="24" >
                                                                                                              ₹1742</option>
                                                                                                          <option value="25" >
                                                                                                              ₹1814</option>
                                                                                                          </select>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                    
                                      <style>.shipoption{font-size:20px!important;padding:0;margin:0}.showship{background:white;color:#464646;margin-top:20px;width:94%;padding:10px!important}#shipmore{display:none}.stip{display:block;color:green;margin:0 0 0 27px;color:red!important}.shipping-selection-form{margin-top:20px!important;background:white}.shipping-settings{font-size:16px;letter-spacing:-0.04em;line-height:30px}.shipping-quick-terms{margin:10px 0 0 0;color:gray}</style>
                                      <div class="row showship">
                                          <p class="shipoption">
                                              <input id="shipme" name="shipme" onclick="scriptolutiontoggle('shipmore', 'shipme')" type="checkbox" value="1" /> 
                                          This item requires shipping
                                          </p>
                                          <div id="shipmore">
                                              <p class="stip">
                                                  Charging shipping for items that are non-shippable will get your gig rejected.
                                              </p>
                                              <div id="shipping" class="shipping-selection-form">
                                                  <div class="shipping-settings">
                                                      I charge <select id="scriptolutionship1" name="scriptolutionship1" class="textfour">
                                                      <option value="">nothing</option>
                                                                                                          <option value="1" >₹1</option>
                                                                                                          <option value="2" >₹2</option>
                                                                                                          <option value="3" >₹3</option>
                                                                                                          <option value="4" >₹4</option>
                                                                                                          <option value="5" >₹5</option>
                                                                                                          <option value="6" >₹6</option>
                                                                                                          <option value="7" >₹7</option>
                                                                                                          <option value="8" >₹8</option>
                                                                                                          <option value="9" >₹9</option>
                                                                                                          <option value="10" >₹10</option>
                                                                                                          <option value="11" >₹11</option>
                                                                                                          <option value="12" >₹12</option>
                                                                                                          <option value="13" >₹13</option>
                                                                                                          <option value="14" >₹14</option>
                                                                                                          <option value="15" >₹15</option>
                                                                                                          <option value="16" >₹16</option>
                                                                                                          <option value="17" >₹17</option>
                                                                                                          <option value="18" >₹18</option>
                                                                                                          <option value="19" >₹19</option>
                                                                                                          <option value="20" >₹20</option>
                                                                                                          <option value="21" >₹21</option>
                                                                                                          <option value="22" >₹22</option>
                                                                                                          <option value="23" >₹23</option>
                                                                                                          <option value="24" >₹24</option>
                                                                                                          <option value="25" >₹25</option>
                                                                                                          <option value="26" >₹26</option>
                                                                                                          <option value="27" >₹27</option>
                                                                                                          <option value="28" >₹28</option>
                                                                                                          <option value="29" >₹29</option>
                                                                                                          <option value="30" >₹30</option>
                                                                                                          </select>
                                                                                                         
                                                        @include('data.country')
                                                                                                          <br/>and&nbsp;<select id="scriptolutionship2" name="scriptolutionship2" class="textfour">
                                                      <option value="">nothing</option>
                                                                                                          <option value="1" >₹1</option>
                                                                                                          <option value="2" >₹2</option>
                                                                                                          <option value="3" >₹3</option>
                                                                                                          <option value="4" >₹4</option>
                                                                                                          <option value="5" >₹5</option>
                                                                                                          <option value="6" >₹6</option>
                                                                                                          <option value="7" >₹7</option>
                                                                                                          <option value="8" >₹8</option>
                                                                                                          <option value="9" >₹9</option>
                                                                                                          <option value="10" >₹10</option>
                                                                                                          <option value="11" >₹11</option>
                                                                                                          <option value="12" >₹12</option>
                                                                                                          <option value="13" >₹13</option>
                                                                                                          <option value="14" >₹14</option>
                                                                                                          <option value="15" >₹15</option>
                                                                                                          <option value="16" >₹16</option>
                                                                                                          <option value="17" >₹17</option>
                                                                                                          <option value="18" >₹18</option>
                                                                                                          <option value="19" >₹19</option>
                                                                                                          <option value="20" >₹20</option>
                                                                                                          <option value="21" >₹21</option>
                                                                                                          <option value="22" >₹22</option>
                                                                                                          <option value="23" >₹23</option>
                                                                                                          <option value="24" >₹24</option>
                                                                                                          <option value="25" >₹25</option>
                                                                                                          <option value="26" >₹26</option>
                                                                                                          <option value="27" >₹27</option>
                                                                                                          <option value="28" >₹28</option>
                                                                                                          <option value="29" >₹29</option>
                                                                                                          <option value="30" >₹30</option>
                                                                                                          </select> to ship to everywhere else in the world.
                                                  </div>
                                                  <div class="shipping-quick-terms">
                                                      * Shipping charges will be added to the total cost of the gig.
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                </div>
  
                              <div class="row form-entry scriptolutionpadding20" align="center">
                                  <input type="submit" value="Submit" class="scriptolutionbluebutton" />
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
  <script src="/trumbowyg/trumbowyg.min.js"></script>
  <link rel="stylesheet" href="/trumbowyg/ui/trumbowyg.min.css">
  <script src="/trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
  <link rel="stylesheet" href="/trumbowyg/plugins/colors/ui/trumbowyg.colors.min.css">
  
  <script type="text/javascript">                        
    $(document).ready(function(){
    sQuery('#gig_description').trumbowyg({
      fullscreenable: false,
      closable: false,
      btns: ['bold', '|', 'italic', '|', 'foreColor', '|', 'backColor', '|', 'orderedList']
    });
    });
  </script>
  
  
  
  <script type="text/javascript">                        
    $(document).ready(function(){
      var input = document.getElementById('scriptolutionjoblocation');
      var options = {types: ['(cities)']};
      new google.maps.places.Autocomplete(input, options);
    });
    
    var placeSearch, autocomplete;
        var componentForm = {
          locality: 'long_name',
          administrative_area_level_1: 'short_name',
          country: 'long_name'
        };
  
        function initAutocomplete() {
          // Create the autocomplete object, restricting the search to geographical
          // location types.
          autocomplete = new google.maps.places.Autocomplete(
              /** @type {!HTMLInputElement} */(document.getElementById('scriptolutionjoblocation')),
              {types: ['geocode']});
  
          // When the user selects an address from the dropdown, populate the address
          // fields in the form.
          autocomplete.addListener('place_changed', fillInAddress);
        }
  
        function fillInAddress() {
          // Get the place details from the autocomplete object.
          var place = autocomplete.getPlace();
  
          for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
          }
  
          // Get each component of the address from the place details
          // and fill the corresponding field on the form.
          for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
              var val = place.address_components[i][componentForm[addressType]];
              document.getElementById(addressType).value = val;
            }
          }
        }
  
        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var geolocation = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
              };
              var circle = new google.maps.Circle({
                center: geolocation,
                radius: position.coords.accuracy
              });
              autocomplete.setBounds(circle.getBounds());
            });
          }
        }
  </script>
  
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFCanjNysDz9MiZTLxm4rguA-KiOV3TBY&libraries=places&signed_in=true&callback=initAutocomplete" async defer></script>
  


@endsection