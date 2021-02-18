@extends('layout.header')
@section('content')

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="full-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="https://www.greatfilmjobs.com/dev/newrequest" id="new_gig" method="post">
                        	<h1>Post a Request</h1>
                            <div style="clear:both"></div>
                            
                            <div class="whiteBox">
                                <div class="iscriptolution">
                                    <div class="scriptolution-irequest-holder">
                                        <div class="scriptolutiontxt">Describe the service you're looking for, be as detailed as possible. </div>
                                        <div class="scriptolutionf">
                                        	<textarea class="requesttext" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"></textarea>
                                        </div>
                                        <div style="clear:both; padding-top:5px;"></div>
                                    </div>
                                </div>
                                <div class="scriptolutionclear"></div>
                                
                                <div class="scriptolutionotherrequestinfo">
                                	<div class="form-entry">
                                        <div class="column-l">
                                          <label class="editgigformtitle" for="gig_category">Category</label>
                                        </div>
                                        <div class="column-r">
                                          <select class="requesttext2" id="gig_category_id" name="gcat"><option value="0">Please select</option>
                                                                                                                                <option value="78">Animation &amp; Video</option>
                                                                                                                                                                                            <option value="83">- After Effects</option>
                                                                                                <option value="86">- Animated Characters &amp; Modeling</option>
                                                                                                <option value="90">- Audio Stocks</option>
                                                                                                <option value="82">- Editing &amp; Post Production</option>
                                                                                                <option value="88">- Games Developers</option>
                                                                                                <option value="80">- Intro &amp; Animated Logos</option>
                                                                                                <option value="84">- Lyrics &amp; Music Videos</option>
                                                                                                <option value="91">- Others - Video &amp; Animation</option>
                                                                                                <option value="81">- Promotional &amp; Branded Videos</option>
                                                                                                <option value="85">- Spokespersons &amp; Testimonials</option>
                                                                                                <option value="87">- Video Greetings</option>
                                                                                                <option value="89">- Video Stocks</option>
                                                                                                <option value="79">- Whiteboard &amp; Explainer Videos</option>
                                                                                                                                                                                  <option value="30">Art Direction</option>
                                                                                                                                                                                            <option value="38">- Animals</option>
                                                                                                <option value="32">- Animatronics  Puppets</option>
                                                                                                <option value="35">- Arts &amp; Crafts</option>
                                                                                                <option value="220">- asif</option>
                                                                                                <option value="7">- Costumes</option>
                                                                                                <option value="33">- Costumes  Rental / Sale</option>
                                                                                                <option value="4">- Dummy Props</option>
                                                                                                <option value="34">- Fashion Designers</option>
                                                                                                <option value="37">- Handmade Jewellery</option>
                                                                                                <option value="221">- hhhh</option>
                                                                                                <option value="29">- Locations</option>
                                                                                                <option value="8">- Makeup</option>
                                                                                                <option value="59">- Others - Art Direction</option>
                                                                                                <option value="5">- Props</option>
                                                                                                <option value="6">- Sets</option>
                                                                                                <option value="3">- Special Effects</option>
                                                                                                <option value="31">- Storyboarding</option>
                                                                                                <option value="36">- Styling &amp; Beauty</option>
                                                                                                <option value="11">- Vehicles</option>
                                                                                                                                                                                  <option value="42">Artistes / Models</option>
                                                                                                                                                                                            <option value="12">- Ambiance Actors</option>
                                                                                                <option value="48">- Anchors</option>
                                                                                                <option value="52">- Choreographers</option>
                                                                                                <option value="47">- Comedians</option>
                                                                                                <option value="51">- Dancers</option>
                                                                                                <option value="44">- Female</option>
                                                                                                <option value="46">- Female Child</option>
                                                                                                <option value="49">- Junior Artistes</option>
                                                                                                <option value="43">- Male</option>
                                                                                                <option value="45">- Male Child</option>
                                                                                                <option value="60">- Others - Artistes / Models</option>
                                                                                                <option value="50">- Stunt People</option>
                                                                                                                                                                                  <option value="62">Business</option>
                                                                                                                                                                                            <option value="71">- Box Office Reports / Reviews</option>
                                                                                                <option value="66">- Branding Services</option>
                                                                                                <option value="72">- Business - Others</option>
                                                                                                <option value="65">- Business Plans</option>
                                                                                                <option value="68">- Business Tips</option>
                                                                                                <option value="70">- Career Advice</option>
                                                                                                <option value="67">- Financial Consulting</option>
                                                                                                <option value="28">- Legal Consulting</option>
                                                                                                <option value="64">- Market Research</option>
                                                                                                <option value="69">- Presentations</option>
                                                                                                <option value="63">- Virtual Assistants</option>
                                                                                                                                                                                  <option value="77">Crew</option>
                                                                                                                                                                                            <option value="169">- Art Director</option>
                                                                                                <option value="194">- Artist</option>
                                                                                                <option value="174">- Asst Director</option>
                                                                                                <option value="198">- Audio Engineer</option>
                                                                                                <option value="190">- Best Boy</option>
                                                                                                <option value="189">- Boom Operator</option>
                                                                                                <option value="175">- Camera Operator</option>
                                                                                                <option value="199">- Choreopgrapher</option>
                                                                                                <option value="173">- Cinematographer</option>
                                                                                                <option value="200">- Composer</option>
                                                                                                <option value="184">- Costume Designer</option>
                                                                                                <option value="203">- Countinuity</option>
                                                                                                <option value="201">- Designer</option>
                                                                                                <option value="171">- Director</option>
                                                                                                <option value="219">- Dolly Grip</option>
                                                                                                <option value="214">- Drivers</option>
                                                                                                <option value="170">- Electrician</option>
                                                                                                <option value="197">- Executive Producer</option>
                                                                                                <option value="217">- Focus Puller</option>
                                                                                                <option value="216">- Gaffer</option>
                                                                                                <option value="213">- Generator Operator</option>
                                                                                                <option value="215">- Grip</option>
                                                                                                <option value="196">- Hair Dresser</option>
                                                                                                <option value="211">- Helpers</option>
                                                                                                <option value="218">- Key Grip</option>
                                                                                                <option value="210">- Lighting Designer</option>
                                                                                                <option value="191">- Lighting Technician</option>
                                                                                                <option value="181">- Line Producer</option>
                                                                                                <option value="182">- Location Manager</option>
                                                                                                <option value="202">- Location Scouter</option>
                                                                                                <option value="185">- Make-up Artist</option>
                                                                                                <option value="212">- Outdoor Unit Technicians</option>
                                                                                                <option value="177">- Post-Production</option>
                                                                                                <option value="172">- Producer</option>
                                                                                                <option value="180">- Production Assistant</option>
                                                                                                <option value="192">- Production Coordinator</option>
                                                                                                <option value="188">- Script Supervisor</option>
                                                                                                <option value="187">- Set Decorator</option>
                                                                                                <option value="179">- Sound</option>
                                                                                                <option value="208">- Sound Editor</option>
                                                                                                <option value="178">- Sound Mixer</option>
                                                                                                <option value="205">- Special Effects Supervisor</option>
                                                                                                <option value="206">- Stunt Coordinator</option>
                                                                                                <option value="195">- Stunt Performer</option>
                                                                                                <option value="193">- Technician</option>
                                                                                                <option value="186">- TV Writer</option>
                                                                                                <option value="176">- Unit Production Manager</option>
                                                                                                <option value="207">- Utility Sound Technician</option>
                                                                                                <option value="204">- Videographer</option>
                                                                                                <option value="183">- Visual Effects</option>
                                                                                                <option value="209">- Visual Effects Supervisor</option>
                                                                                                                                                                                  <option value="39">Equipment</option>
                                                                                                                                                                                            <option value="41">- Audio</option>
                                                                                                <option value="10">- Cameras</option>
                                                                                                <option value="40">- Cranes</option>
                                                                                                <option value="9">- Lights</option>
                                                                                                <option value="61">- Other Equipments</option>
                                                                                                                                                                                  <option value="2">Graphics &amp; Design</option>
                                                                                                                                                                                            <option value="112">- 3D &amp; 2D Models</option>
                                                                                                <option value="110">- Banner Ads</option>
                                                                                                <option value="107">- Book Covers &amp; Packaging</option>
                                                                                                <option value="103">- Business Cards &amp; Stationery</option>
                                                                                                <option value="105">- Cartoons &amp; Caricatures</option>
                                                                                                <option value="106">- Flyers &amp; Posters</option>
                                                                                                <option value="104">- Illustrations</option>
                                                                                                <option value="115">- Infographics</option>
                                                                                                <option value="117">- Invitations</option>
                                                                                                <option value="102">- Logo Design</option>
                                                                                                <option value="118">- Others - Graphics &amp; Design</option>
                                                                                                <option value="111">- Photoshop Editing</option>
                                                                                                <option value="114">- Presentation Design</option>
                                                                                                <option value="109">- Social Media Design</option>
                                                                                                <option value="113">- T-Shirts</option>
                                                                                                <option value="116">- Vector Tracing</option>
                                                                                                <option value="108">- Web &amp; Mobile Design</option>
                                                                                                                                                                                  <option value="53">Lifestyle</option>
                                                                                                                                                                                            <option value="57">- Cooking Recipes</option>
                                                                                                <option value="55">- Diet &amp; Weight Loss</option>
                                                                                                <option value="56">- Health &amp; Fitness</option>
                                                                                                <option value="54">- Relationship Advice</option>
                                                                                                                                                                                  <option value="76">Music &amp; Audio</option>
                                                                                                                                                                                            <option value="97">- Jingles &amp; Drops</option>
                                                                                                <option value="93">- Mixing &amp; Mastering</option>
                                                                                                <option value="100">- Music Direction</option>
                                                                                                <option value="101">- Others - Music &amp; Audio</option>
                                                                                                <option value="94">- Producers &amp; Composers</option>
                                                                                                <option value="96">- Session Musicians &amp; Singers</option>
                                                                                                <option value="95">- Singer - Songwriters</option>
                                                                                                <option value="98">- Sound Effects</option>
                                                                                                <option value="99">- Sound Recordist / Sound Assist</option>
                                                                                                <option value="92">- Voice Over</option>
                                                                                                                                                                                  <option value="1">Others</option>
                                                                                                                                                                                                                                                                              <option value="74">Promotion</option>
                                                                                                                                                                                            <option value="162">- Banner Advertising</option>
                                                                                                <option value="150">- Content Marketing</option>
                                                                                                <option value="158">- Domain Research</option>
                                                                                                <option value="152">- Email Marketing</option>
                                                                                                <option value="164">- Flyers &amp; Handouts</option>
                                                                                                <option value="165">- Hold Your Sign</option>
                                                                                                <option value="166">- Human Billboards</option>
                                                                                                <option value="146">- InFilm Branding</option>
                                                                                                <option value="156">- Influencer Marketing</option>
                                                                                                <option value="157">- Local Listings</option>
                                                                                                <option value="154">- Marketing Strategy</option>
                                                                                                <option value="159">- Mobile Advertising</option>
                                                                                                <option value="160">- Music Promotion</option>
                                                                                                <option value="168">- Others - Promotion</option>
                                                                                                <option value="163">- Outdoor Advertising</option>
                                                                                                <option value="167">- Pet Models</option>
                                                                                                <option value="161">- Radio Advertising</option>
                                                                                                <option value="153">- SEM</option>
                                                                                                <option value="148">- SEO</option>
                                                                                                <option value="147">- Social Media Marketing</option>
                                                                                                <option value="151">- Video Advertising</option>
                                                                                                <option value="155">- Web Analytics</option>
                                                                                                <option value="149">- Web Traffic</option>
                                                                                                                                                                                  <option value="73">Software</option>
                                                                                                                                                                                            <option value="140">- Convert Files</option>
                                                                                                <option value="139">- Data Analysis &amp; Reports</option>
                                                                                                <option value="141">- Databases</option>
                                                                                                <option value="137">- Desktop Applications</option>
                                                                                                <option value="135">- Ecommerce</option>
                                                                                                <option value="144">- Gaming</option>
                                                                                                <option value="136">- Mobile Apps &amp; Web</option>
                                                                                                <option value="145">- Others - Programming &amp; Tech</option>
                                                                                                <option value="143">- QA</option>
                                                                                                <option value="138">- Support &amp; IT</option>
                                                                                                <option value="142">- User Testing</option>
                                                                                                <option value="134">- Web Programming</option>
                                                                                                <option value="133">- Website Builders &amp; CMS</option>
                                                                                                <option value="132">- WordPress</option>
                                                                                                                                                                                  <option value="75">Writing &amp; Translation</option>
                                                                                                                                                                                            <option value="127">- Articles &amp; Blog Posts</option>
                                                                                                <option value="125">- Business Copywriting</option>
                                                                                                <option value="124">- Creative Writing</option>
                                                                                                <option value="130">- Legal writing</option>
                                                                                                <option value="131">- Others - Writing &amp; Translation</option>
                                                                                                <option value="128">- Press Releases</option>
                                                                                                <option value="122">- Proofreading &amp; Editing</option>
                                                                                                <option value="126">- Research &amp; Summaries</option>
                                                                                                <option value="121">- Resumes &amp; Cover Letters</option>
                                                                                                <option value="119">- Script Writing</option>
                                                                                                <option value="120">- Song Writing / Lyricist</option>
                                                                                                <option value="129">- Transcription</option>
                                                                                                <option value="123">- Translation</option>
                                                                                                                                                                                </select>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle">Budget</label>
                                        </div>
                                        <div class="column-r">
                                          <span class="spartfour">₹</span><input class="textb" name="gprice" size="5" type="text" value="">                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>
                                    
                                    <div class="estimate">
                                        <div class="column-l">
                                          <label class="editgigformtitle">Delivery</label>
                                        </div>
                                        <div class="column-r">
                                          <input class="textb" name="gdays" size="2" type="text" value="">&nbsp;<span class="spartfour">days</span>
                                          <div class="daysdetails">Once you place your order, when would you like your service delivered?</div>
                                        </div>
                                    </div>
                                    <div class="scriptolutionclear"></div>                                    
                                    
                              </div>
                                
                                
                                
                            </div>
                            <div style="clear:both"></div>                    
                            <div class="scriptolutionclear"></div>                            

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="Submit" class="scriptolutionbluebutton">
                                <input type="hidden" name="subform" value="1">
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

@endsection