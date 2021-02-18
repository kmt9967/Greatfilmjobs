@extends('layout.header')
@section('content')
<div class="bodybg scriptolutionpaddingtop15">
    <div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
      <div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
        <div class="full-side scriptolutionwidth842">
          <div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                      <div id="scriptolutionPostForm"> 
                          <form action="https://www.greatfilmjobs.com/dev/new" enctype="multipart/form-data" id="new_gig" method="post">
                          
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
                                        <select class="text" id="gig_category_id" name="gcat"><option value="0">Please select</option>
                                                                                                                      <option value="78" >Animation &amp; Video</option>
                                                                                                                                                                              <option value="83" >- After Effects</option>
                                                                                          <option value="86" >- Animated Characters &amp; Modeling</option>
                                                                                          <option value="90" >- Audio Stocks</option>
                                                                                          <option value="82" >- Editing &amp; Post Production</option>
                                                                                          <option value="88" >- Games Developers</option>
                                                                                          <option value="80" >- Intro &amp; Animated Logos</option>
                                                                                          <option value="84" >- Lyrics &amp; Music Videos</option>
                                                                                          <option value="91" >- Others - Video &amp; Animation</option>
                                                                                          <option value="81" >- Promotional &amp; Branded Videos</option>
                                                                                          <option value="85" >- Spokespersons &amp; Testimonials</option>
                                                                                          <option value="87" >- Video Greetings</option>
                                                                                          <option value="89" >- Video Stocks</option>
                                                                                          <option value="79" >- Whiteboard &amp; Explainer Videos</option>
                                                                                                                                                                    <option value="30" >Art Direction</option>
                                                                                                                                                                              <option value="38" >- Animals</option>
                                                                                          <option value="32" >- Animatronics  Puppets</option>
                                                                                          <option value="35" >- Arts &amp; Crafts</option>
                                                                                          <option value="220" >- asif</option>
                                                                                          <option value="7" >- Costumes</option>
                                                                                          <option value="33" >- Costumes  Rental / Sale</option>
                                                                                          <option value="4" >- Dummy Props</option>
                                                                                          <option value="34" >- Fashion Designers</option>
                                                                                          <option value="37" >- Handmade Jewellery</option>
                                                                                          <option value="221" >- hhhh</option>
                                                                                          <option value="29" >- Locations</option>
                                                                                          <option value="8" >- Makeup</option>
                                                                                          <option value="59" >- Others - Art Direction</option>
                                                                                          <option value="5" >- Props</option>
                                                                                          <option value="6" >- Sets</option>
                                                                                          <option value="3" >- Special Effects</option>
                                                                                          <option value="31" >- Storyboarding</option>
                                                                                          <option value="36" >- Styling &amp; Beauty</option>
                                                                                          <option value="11" >- Vehicles</option>
                                                                                                                                                                    <option value="42" >Artistes / Models</option>
                                                                                                                                                                              <option value="12" >- Ambiance Actors</option>
                                                                                          <option value="48" >- Anchors</option>
                                                                                          <option value="52" >- Choreographers</option>
                                                                                          <option value="47" >- Comedians</option>
                                                                                          <option value="51" >- Dancers</option>
                                                                                          <option value="44" >- Female</option>
                                                                                          <option value="46" >- Female Child</option>
                                                                                          <option value="49" >- Junior Artistes</option>
                                                                                          <option value="43" >- Male</option>
                                                                                          <option value="45" >- Male Child</option>
                                                                                          <option value="60" >- Others - Artistes / Models</option>
                                                                                          <option value="50" >- Stunt People</option>
                                                                                                                                                                    <option value="62" >Business</option>
                                                                                                                                                                              <option value="71" >- Box Office Reports / Reviews</option>
                                                                                          <option value="66" >- Branding Services</option>
                                                                                          <option value="72" >- Business - Others</option>
                                                                                          <option value="65" >- Business Plans</option>
                                                                                          <option value="68" >- Business Tips</option>
                                                                                          <option value="70" >- Career Advice</option>
                                                                                          <option value="67" >- Financial Consulting</option>
                                                                                          <option value="28" >- Legal Consulting</option>
                                                                                          <option value="64" >- Market Research</option>
                                                                                          <option value="69" >- Presentations</option>
                                                                                          <option value="63" >- Virtual Assistants</option>
                                                                                                                                                                    <option value="77" >Crew</option>
                                                                                                                                                                              <option value="169" >- Art Director</option>
                                                                                          <option value="194" >- Artist</option>
                                                                                          <option value="174" >- Asst Director</option>
                                                                                          <option value="198" >- Audio Engineer</option>
                                                                                          <option value="190" >- Best Boy</option>
                                                                                          <option value="189" >- Boom Operator</option>
                                                                                          <option value="175" >- Camera Operator</option>
                                                                                          <option value="199" >- Choreopgrapher</option>
                                                                                          <option value="173" >- Cinematographer</option>
                                                                                          <option value="200" >- Composer</option>
                                                                                          <option value="184" >- Costume Designer</option>
                                                                                          <option value="203" >- Countinuity</option>
                                                                                          <option value="201" >- Designer</option>
                                                                                          <option value="171" >- Director</option>
                                                                                          <option value="219" >- Dolly Grip</option>
                                                                                          <option value="214" >- Drivers</option>
                                                                                          <option value="170" >- Electrician</option>
                                                                                          <option value="197" >- Executive Producer</option>
                                                                                          <option value="217" >- Focus Puller</option>
                                                                                          <option value="216" >- Gaffer</option>
                                                                                          <option value="213" >- Generator Operator</option>
                                                                                          <option value="215" >- Grip</option>
                                                                                          <option value="196" >- Hair Dresser</option>
                                                                                          <option value="211" >- Helpers</option>
                                                                                          <option value="218" >- Key Grip</option>
                                                                                          <option value="210" >- Lighting Designer</option>
                                                                                          <option value="191" >- Lighting Technician</option>
                                                                                          <option value="181" >- Line Producer</option>
                                                                                          <option value="182" >- Location Manager</option>
                                                                                          <option value="202" >- Location Scouter</option>
                                                                                          <option value="185" >- Make-up Artist</option>
                                                                                          <option value="212" >- Outdoor Unit Technicians</option>
                                                                                          <option value="177" >- Post-Production</option>
                                                                                          <option value="172" >- Producer</option>
                                                                                          <option value="180" >- Production Assistant</option>
                                                                                          <option value="192" >- Production Coordinator</option>
                                                                                          <option value="188" >- Script Supervisor</option>
                                                                                          <option value="187" >- Set Decorator</option>
                                                                                          <option value="179" >- Sound</option>
                                                                                          <option value="208" >- Sound Editor</option>
                                                                                          <option value="178" >- Sound Mixer</option>
                                                                                          <option value="205" >- Special Effects Supervisor</option>
                                                                                          <option value="206" >- Stunt Coordinator</option>
                                                                                          <option value="195" >- Stunt Performer</option>
                                                                                          <option value="193" >- Technician</option>
                                                                                          <option value="186" >- TV Writer</option>
                                                                                          <option value="176" >- Unit Production Manager</option>
                                                                                          <option value="207" >- Utility Sound Technician</option>
                                                                                          <option value="204" >- Videographer</option>
                                                                                          <option value="183" >- Visual Effects</option>
                                                                                          <option value="209" >- Visual Effects Supervisor</option>
                                                                                                                                                                    <option value="39" >Equipment</option>
                                                                                                                                                                              <option value="41" >- Audio</option>
                                                                                          <option value="10" >- Cameras</option>
                                                                                          <option value="40" >- Cranes</option>
                                                                                          <option value="9" >- Lights</option>
                                                                                          <option value="61" >- Other Equipments</option>
                                                                                                                                                                    <option value="2" >Graphics &amp; Design</option>
                                                                                                                                                                              <option value="112" >- 3D &amp; 2D Models</option>
                                                                                          <option value="110" >- Banner Ads</option>
                                                                                          <option value="107" >- Book Covers &amp; Packaging</option>
                                                                                          <option value="103" >- Business Cards &amp; Stationery</option>
                                                                                          <option value="105" >- Cartoons &amp; Caricatures</option>
                                                                                          <option value="106" >- Flyers &amp; Posters</option>
                                                                                          <option value="104" >- Illustrations</option>
                                                                                          <option value="115" >- Infographics</option>
                                                                                          <option value="117" >- Invitations</option>
                                                                                          <option value="102" >- Logo Design</option>
                                                                                          <option value="118" >- Others - Graphics &amp; Design</option>
                                                                                          <option value="111" >- Photoshop Editing</option>
                                                                                          <option value="114" >- Presentation Design</option>
                                                                                          <option value="109" >- Social Media Design</option>
                                                                                          <option value="113" >- T-Shirts</option>
                                                                                          <option value="116" >- Vector Tracing</option>
                                                                                          <option value="108" >- Web &amp; Mobile Design</option>
                                                                                                                                                                    <option value="53" >Lifestyle</option>
                                                                                                                                                                              <option value="57" >- Cooking Recipes</option>
                                                                                          <option value="55" >- Diet &amp; Weight Loss</option>
                                                                                          <option value="56" >- Health &amp; Fitness</option>
                                                                                          <option value="54" >- Relationship Advice</option>
                                                                                                                                                                    <option value="76" >Music &amp; Audio</option>
                                                                                                                                                                              <option value="97" >- Jingles &amp; Drops</option>
                                                                                          <option value="93" >- Mixing &amp; Mastering</option>
                                                                                          <option value="100" >- Music Direction</option>
                                                                                          <option value="101" >- Others - Music &amp; Audio</option>
                                                                                          <option value="94" >- Producers &amp; Composers</option>
                                                                                          <option value="96" >- Session Musicians &amp; Singers</option>
                                                                                          <option value="95" >- Singer - Songwriters</option>
                                                                                          <option value="98" >- Sound Effects</option>
                                                                                          <option value="99" >- Sound Recordist / Sound Assist</option>
                                                                                          <option value="92" >- Voice Over</option>
                                                                                                                                                                    <option value="1" >Others</option>
                                                                                                                                                                                                                                                        <option value="74" >Promotion</option>
                                                                                                                                                                              <option value="162" >- Banner Advertising</option>
                                                                                          <option value="150" >- Content Marketing</option>
                                                                                          <option value="158" >- Domain Research</option>
                                                                                          <option value="152" >- Email Marketing</option>
                                                                                          <option value="164" >- Flyers &amp; Handouts</option>
                                                                                          <option value="165" >- Hold Your Sign</option>
                                                                                          <option value="166" >- Human Billboards</option>
                                                                                          <option value="146" >- InFilm Branding</option>
                                                                                          <option value="156" >- Influencer Marketing</option>
                                                                                          <option value="157" >- Local Listings</option>
                                                                                          <option value="154" >- Marketing Strategy</option>
                                                                                          <option value="159" >- Mobile Advertising</option>
                                                                                          <option value="160" >- Music Promotion</option>
                                                                                          <option value="168" >- Others - Promotion</option>
                                                                                          <option value="163" >- Outdoor Advertising</option>
                                                                                          <option value="167" >- Pet Models</option>
                                                                                          <option value="161" >- Radio Advertising</option>
                                                                                          <option value="153" >- SEM</option>
                                                                                          <option value="148" >- SEO</option>
                                                                                          <option value="147" >- Social Media Marketing</option>
                                                                                          <option value="151" >- Video Advertising</option>
                                                                                          <option value="155" >- Web Analytics</option>
                                                                                          <option value="149" >- Web Traffic</option>
                                                                                                                                                                    <option value="73" >Software</option>
                                                                                                                                                                              <option value="140" >- Convert Files</option>
                                                                                          <option value="139" >- Data Analysis &amp; Reports</option>
                                                                                          <option value="141" >- Databases</option>
                                                                                          <option value="137" >- Desktop Applications</option>
                                                                                          <option value="135" >- Ecommerce</option>
                                                                                          <option value="144" >- Gaming</option>
                                                                                          <option value="136" >- Mobile Apps &amp; Web</option>
                                                                                          <option value="145" >- Others - Programming &amp; Tech</option>
                                                                                          <option value="143" >- QA</option>
                                                                                          <option value="138" >- Support &amp; IT</option>
                                                                                          <option value="142" >- User Testing</option>
                                                                                          <option value="134" >- Web Programming</option>
                                                                                          <option value="133" >- Website Builders &amp; CMS</option>
                                                                                          <option value="132" >- WordPress</option>
                                                                                                                                                                    <option value="75" >Writing &amp; Translation</option>
                                                                                                                                                                              <option value="127" >- Articles &amp; Blog Posts</option>
                                                                                          <option value="125" >- Business Copywriting</option>
                                                                                          <option value="124" >- Creative Writing</option>
                                                                                          <option value="130" >- Legal writing</option>
                                                                                          <option value="131" >- Others - Writing &amp; Translation</option>
                                                                                          <option value="128" >- Press Releases</option>
                                                                                          <option value="122" >- Proofreading &amp; Editing</option>
                                                                                          <option value="126" >- Research &amp; Summaries</option>
                                                                                          <option value="121" >- Resumes &amp; Cover Letters</option>
                                                                                          <option value="119" >- Script Writing</option>
                                                                                          <option value="120" >- Song Writing / Lyricist</option>
                                                                                          <option value="129" >- Transcription</option>
                                                                                          <option value="123" >- Translation</option>
                                                                                                                                                                  </select>
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
                                        <input class="text" id="scriptolutionjoblocation" name="scriptolutionjoblocation" type="text" value="" onFocus="geolocate()" />
                                        City: <input name="scriptolutioncity" class="textread scriptolutionauto" id="locality" disabled="true" readonly value=""></input>
                                        State: <input name="scriptolutionstate" class="textread scriptolutionauto" id="administrative_area_level_1" disabled="true" readonly value=""></input>
                                        Country: <input name="scriptolutioncountry" class="textread scriptolutionauto" id="country" disabled="true" readonly value=""></input>
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
                                                <img alt="no image" src="https://www.greatfilmjobs.com/dev/images/no_image.jpg?" />
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
                                                    <img alt="no image" src="https://www.greatfilmjobs.com/dev/images/no_image.jpg?" />
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
                                                                                                          </select> to ship to <select id="scriptolutionship1to" name="scriptolutionship1to" class="textfour">
                                                      <option   value="AF">Afghanistan</option>
                                                      <option   value="AX">Åland Islands</option>
                                                      <option   value="AL">Albania</option>
                                                      <option   value="DZ">Algeria</option>
                                                      <option   value="AS">American Samoa</option>
                                                      <option   value="AD">Andorra</option>
                                                      <option   value="AO">Angola</option>
                                                      <option   value="AI">Anguilla</option>
                                                      <option   value="AQ">Antarctica</option>
                                                      <option   value="AG">Antigua and Barbuda</option>
                                                      <option   value="AR">Argentina</option>
                                                      <option   value="AM">Armenia</option>
                                                      <option   value="AW">Aruba</option>
                                                      <option   value="AU">Australia</option>
                                                      <option   value="AT">Austria</option>
                                                      <option   value="AZ">Azerbaijan</option>
                                                      <option   value="BS">Bahamas</option>
                                                      <option   value="BH">Bahrain</option>
                                                      <option   value="BD">Bangladesh</option>
                                                      <option   value="BB">Barbados</option>
                                                      <option   value="BY">Belarus</option>
                                                      <option   value="BE">Belgium</option>
                                                      <option   value="BZ">Belize</option>
                                                      <option   value="BJ">Benin</option>
                                                      <option   value="BM">Bermuda</option>
                                                      <option   value="BT">Bhutan</option>
                                                      <option   value="BO">Bolivia</option>
                                                      <option   value="BA">Bosnia and Herzegovina</option>
                                                      <option   value="BW">Botswana</option>
                                                      <option   value="BV">Bouvet Island</option>
                                                      <option   value="BR">Brazil</option>
                                                      <option   value="IO">British Indian Ocean Territory</option>
                                                      <option   value="BN">Brunei Darussalam</option>
                                                      <option   value="BG">Bulgaria</option>
                                                      <option   value="BF">Burkina Faso</option>
                                                      <option   value="BI">Burundi</option>
                                                      <option   value="KH">Cambodia</option>
                                                      <option   value="CM">Cameroon</option>
                                                      <option   value="CA">Canada</option>
                                                      <option   value="CV">Cape Verde</option>
                                                      <option   value="KY">Cayman Islands</option>
                                                      <option   value="CF">Central African Republic</option>
                                                      <option   value="TD">Chad</option>
                                                      <option   value="CL">Chile</option>
                                                      <option   value="CN">China</option>
                                                      <option   value="CX">Christmas Island</option>
                                                      <option   value="CC">Cocos (Keeling) Islands</option>
                                                      <option   value="CO">Colombia</option>
                                                      <option   value="KM">Comoros</option>
                                                      <option   value="CG">Congo</option>
                                                      <option   value="CD">Congo, The Democratic Republic of The</option>
                                                      <option   value="CK">Cook Islands</option>
                                                      <option   value="CR">Costa Rica</option>
                                                      <option   value="CI">Cote D'ivoire</option>
                                                      <option   value="HR">Croatia</option>
                                                      <option   value="CU">Cuba</option>
                                                      <option   value="CY">Cyprus</option>
                                                      <option   value="CZ">Czech Republic</option>
                                                      <option   value="DK">Denmark</option>
                                                      <option   value="DJ">Djibouti</option>
                                                      <option   value="DM">Dominica</option>
                                                      <option   value="DO">Dominican Republic</option>
                                                      <option   value="EC">Ecuador</option>
                                                      <option   value="EG">Egypt</option>
                                                      <option   value="SV">El Salvador</option>
                                                      <option   value="GQ">Equatorial Guinea</option>
                                                      <option   value="ER">Eritrea</option>
                                                      <option   value="EE">Estonia</option>
                                                      <option   value="ET">Ethiopia</option>
                                                      <option   value="FK">Falkland Islands (Malvinas)</option>
                                                      <option   value="FO">Faroe Islands</option>
                                                      <option   value="FJ">Fiji</option>
                                                      <option   value="FI">Finland</option>
                                                      <option   value="FR">France</option>
                                                      <option   value="GF">French Guiana</option>
                                                      <option   value="PF">French Polynesia</option>
                                                      <option   value="TF">French Southern Territories</option>
                                                      <option   value="GA">Gabon</option>
                                                      <option   value="GM">Gambia</option>
                                                      <option   value="GE">Georgia</option>
                                                      <option   value="DE">Germany</option>
                                                      <option   value="GH">Ghana</option>
                                                      <option   value="GI">Gibraltar</option>
                                                      <option   value="GR">Greece</option>
                                                      <option   value="GL">Greenland</option>
                                                      <option   value="GD">Grenada</option>
                                                      <option   value="GP">Guadeloupe</option>
                                                      <option   value="GU">Guam</option>
                                                      <option   value="GT">Guatemala</option>
                                                      <option   value="GG">Guernsey</option>
                                                      <option   value="GN">Guinea</option>
                                                      <option   value="GW">Guinea-bissau</option>
                                                      <option   value="GY">Guyana</option>
                                                      <option   value="HT">Haiti</option>
                                                      <option   value="HM">Heard Island and Mcdonald Islands</option>
                                                      <option   value="VA">Holy See (Vatican City State)</option>
                                                      <option   value="HN">Honduras</option>
                                                      <option   value="HK">Hong Kong</option>
                                                      <option   value="HU">Hungary</option>
                                                      <option   value="IS">Iceland</option>
                                                      <option   value="IN">India</option>
                                                      <option   value="ID">Indonesia</option>
                                                      <option   value="IR">Iran, Islamic Republic of</option>
                                                      <option   value="IQ">Iraq</option>
                                                      <option   value="IE">Ireland</option>
                                                      <option   value="IM">Isle of Man</option>
                                                      <option   value="IL">Israel</option>
                                                      <option   value="IT">Italy</option>
                                                      <option   value="JM">Jamaica</option>
                                                      <option   value="JP">Japan</option>
                                                      <option   value="JE">Jersey</option>
                                                      <option   value="JO">Jordan</option>
                                                      <option   value="KZ">Kazakhstan</option>
                                                      <option   value="KE">Kenya</option>
                                                      <option   value="KI">Kiribati</option>
                                                      <option   value="KP">Korea, Democratic People's Republic of</option>
                                                      <option   value="KR">Korea, Republic of</option>
                                                      <option   value="KW">Kuwait</option>
                                                      <option   value="KG">Kyrgyzstan</option>
                                                      <option   value="LA">Lao People's Democratic Republic</option>
                                                      <option   value="LV">Latvia</option>
                                                      <option   value="LB">Lebanon</option>
                                                      <option   value="LS">Lesotho</option>
                                                      <option   value="LR">Liberia</option>
                                                      <option   value="LY">Libyan Arab Jamahiriya</option>
                                                      <option   value="LI">Liechtenstein</option>
                                                      <option   value="LT">Lithuania</option>
                                                      <option   value="LU">Luxembourg</option>
                                                      <option   value="MO">Macao</option>
                                                      <option   value="MK">Macedonia, The Former Yugoslav Republic of</option>
                                                      <option   value="MG">Madagascar</option>
                                                      <option   value="MW">Malawi</option>
                                                      <option   value="MY">Malaysia</option>
                                                      <option   value="MV">Maldives</option>
                                                      <option   value="ML">Mali</option>
                                                      <option   value="MT">Malta</option>
                                                      <option   value="MH">Marshall Islands</option>
                                                      <option   value="MQ">Martinique</option>
                                                      <option   value="MR">Mauritania</option>
                                                      <option   value="MU">Mauritius</option>
                                                      <option   value="YT">Mayotte</option>
                                                      <option   value="MX">Mexico</option>
                                                      <option   value="FM">Micronesia, Federated States of</option>
                                                      <option   value="MD">Moldova, Republic of</option>
                                                      <option   value="MC">Monaco</option>
                                                      <option   value="MN">Mongolia</option>
                                                      <option   value="ME">Montenegro</option>
                                                      <option   value="MS">Montserrat</option>
                                                      <option   value="MA">Morocco</option>
                                                      <option   value="MZ">Mozambique</option>
                                                      <option   value="MM">Myanmar</option>
                                                      <option   value="NA">Namibia</option>
                                                      <option   value="NR">Nauru</option>
                                                      <option   value="NP">Nepal</option>
                                                      <option   value="NL">Netherlands</option>
                                                      <option   value="AN">Netherlands Antilles</option>
                                                      <option   value="NC">New Caledonia</option>
                                                      <option   value="NZ">New Zealand</option>
                                                      <option   value="NI">Nicaragua</option>
                                                      <option   value="NE">Niger</option>
                                                      <option   value="NG">Nigeria</option>
                                                      <option   value="NU">Niue</option>
                                                      <option   value="NF">Norfolk Island</option>
                                                      <option   value="MP">Northern Mariana Islands</option>
                                                      <option   value="NO">Norway</option>
                                                      <option   value="OM">Oman</option>
                                                      <option   value="PK">Pakistan</option>
                                                      <option   value="PW">Palau</option>
                                                      <option   value="PS">Palestinian Territory, Occupied</option>
                                                      <option   value="PA">Panama</option>
                                                      <option   value="PG">Papua New Guinea</option>
                                                      <option   value="PY">Paraguay</option>
                                                      <option   value="PE">Peru</option>
                                                      <option   value="PH">Philippines</option>
                                                      <option   value="PN">Pitcairn</option>
                                                      <option   value="PL">Poland</option>
                                                      <option   value="PT">Portugal</option>
                                                      <option   value="PR">Puerto Rico</option>
                                                      <option   value="QA">Qatar</option>
                                                      <option   value="RE">Reunion</option>
                                                      <option   value="RO">Romania</option>
                                                      <option   value="RU">Russian Federation</option>
                                                      <option   value="RW">Rwanda</option>
                                                      <option   value="SH">Saint Helena</option>
                                                      <option   value="KN">Saint Kitts and Nevis</option>
                                                      <option   value="LC">Saint Lucia</option>
                                                      <option   value="PM">Saint Pierre and Miquelon</option>
                                                      <option   value="VC">Saint Vincent and The Grenadines</option>
                                                      <option   value="WS">Samoa</option>
                                                      <option   value="SM">San Marino</option>
                                                      <option   value="ST">Sao Tome and Principe</option>
                                                      <option   value="SA">Saudi Arabia</option>
                                                      <option   value="SN">Senegal</option>
                                                      <option   value="RS">Serbia</option>
                                                      <option   value="SC">Seychelles</option>
                                                      <option   value="SL">Sierra Leone</option>
                                                      <option   value="SG">Singapore</option>
                                                      <option   value="SK">Slovakia</option>
                                                      <option   value="SI">Slovenia</option>
                                                      <option   value="SB">Solomon Islands</option>
                                                      <option   value="SO">Somalia</option>
                                                      <option   value="ZA">South Africa</option>
                                                      <option   value="GS">South Georgia and The South Sandwich Islands</option>
                                                      <option   value="ES">Spain</option>
                                                      <option   value="LK">Sri Lanka</option>
                                                      <option   value="SD">Sudan</option>
                                                      <option   value="SR">Suriname</option>
                                                      <option   value="SJ">Svalbard and Jan Mayen</option>
                                                      <option   value="SZ">Swaziland</option>
                                                      <option   value="SE">Sweden</option>
                                                      <option   value="CH">Switzerland</option>
                                                      <option   value="SY">Syrian Arab Republic</option>
                                                      <option   value="TW">Taiwan, Province of China</option>
                                                      <option   value="TJ">Tajikistan</option>
                                                      <option   value="TZ">Tanzania, United Republic of</option>
                                                      <option   value="TH">Thailand</option>
                                                      <option   value="TL">Timor-leste</option>
                                                      <option   value="TG">Togo</option>
                                                      <option   value="TK">Tokelau</option>
                                                      <option   value="TO">Tonga</option>
                                                      <option   value="TT">Trinidad and Tobago</option>
                                                      <option   value="TN">Tunisia</option>
                                                      <option   value="TR">Turkey</option>
                                                      <option   value="TM">Turkmenistan</option>
                                                      <option   value="TC">Turks and Caicos Islands</option>
                                                      <option   value="TV">Tuvalu</option>
                                                      <option   value="UG">Uganda</option>
                                                      <option   value="UA">Ukraine</option>
                                                      <option   value="AE">United Arab Emirates</option>
                                                      <option   value="GB">United Kingdom</option>
                                                      <option   value="US">United States</option>
                                                      <option   value="UM">United States Minor Outlying Islands</option>
                                                      <option   value="UY">Uruguay</option>
                                                      <option   value="UZ">Uzbekistan</option>
                                                      <option   value="VU">Vanuatu</option>
                                                      <option   value="VE">Venezuela</option>
                                                      <option   value="VN">Viet Nam</option>
                                                      <option   value="VG">Virgin Islands, British</option>
                                                      <option   value="VI">Virgin Islands, U.S.</option>
                                                      <option   value="WF">Wallis and Futuna</option>
                                                      <option   value="EH">Western Sahara</option>
                                                      <option   value="YE">Yemen</option>
                                                      <option   value="ZM">Zambia</option>
                                                      <option   value="ZW">Zimbabwe</option>
                                                      </select> <br/>and&nbsp;<select id="scriptolutionship2" name="scriptolutionship2" class="textfour">
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
  <script src="https://www.greatfilmjobs.com/dev/trumbowyg/trumbowyg.min.js"></script>
  <link rel="stylesheet" href="https://www.greatfilmjobs.com/dev/trumbowyg/ui/trumbowyg.min.css">
  <script src="https://www.greatfilmjobs.com/dev/trumbowyg/plugins/colors/trumbowyg.colors.min.js"></script>
  <link rel="stylesheet" href="https://www.greatfilmjobs.com/dev/trumbowyg/plugins/colors/ui/trumbowyg.colors.min.css">
  
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