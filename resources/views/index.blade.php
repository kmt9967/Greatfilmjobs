

@extends('layout.header')

@section('content')

@if(!isset(auth()->user()->id))
    <div class="banner">
        <div class="centerwrap relative">
            <div class="bannertext">
                <h2>Buy. Sell. Have fun!</h2>
                <h2>Share what you can do.</h2>
                <div class="find-service">                
                    <form action="/search" method="get">
                    <input name="query" type="text" placeholder="What do you need for Filming?" class="findbox"/>
                    <input type="submit" value="Find Services" class="findbtn"/>
                    </form>
                    <div class="clear"></div>
                </div>
                <p><a class='inline' href="#inline1" title="How does it work?">How does it work?</a></p>
                <div class="topnavbg"></div>
            </div>
            <div class="scriptolutionmobilecats">
                <div class="btn-list-space">
                    <select class="btn outline-only white" onchange="javascript:location.href = this.value;">
                        <option value="">Categories</option>
                                                                <option value="/categories/Cinematography---Animation">Animation &amp; Video</option>
                                                                                            <option value="/categories/AfterEffects(templates)">- After Effects</option>
                                                    <option value="/categories/AnimatedCharactersModeling">- Animated Characters &amp; Modeling</option>
                                                    <option value="/categories/AudioStocks">- Audio Stocks</option>
                                                    <option value="/categories/EditingPostProduction">- Editing &amp; Post Production</option>
                                                    <option value="/categories/GamesDevelopers">- Games Developers</option>
                                                    <option value="/categories/IntroAnimatedLogos">- Intro &amp; Animated Logos</option>
                                                    <option value="/categories/LyricsMusicVideos">- Lyrics &amp; Music Videos</option>
                                                    <option value="/categories/Others-VideoAnimation">- Others - Video &amp; Animation</option>
                                                    <option value="/categories/PromotionalBrandedVideos">- Promotional &amp; Branded Videos</option>
                                                    <option value="/categories/SpokespersonsTestimonials">- Spokespersons &amp; Testimonials</option>
                                                    <option value="/categories/VideoGreetings">- Video Greetings</option>
                                                    <option value="/categories/VideoStocks">- Video Stocks</option>
                                                    <option value="/categories/WhiteboardExplainerVideos">- Whiteboard &amp; Explainer Videos</option>
                                                                                        <option value="/categories/ArtDirection">Art Direction</option>
                                                                                            <option value="/categories/Animals">- Animals</option>
                                                    <option value="/categories/AnimatronicsPuppets">- Animatronics  Puppets</option>
                                                    <option value="/categories/ArtsCrafts">- Arts &amp; Crafts</option>
                                                    <option value="/categories/">- asif</option>
                                                    <option value="/categories/Costumes">- Costumes</option>
                                                    <option value="/categories/CostumesRental-Sale">- Costumes  Rental / Sale</option>
                                                    <option value="/categories/Fake-Props-for-Film-Shooting">- Dummy Props</option>
                                                    <option value="/categories/FashionDesigners">- Fashion Designers</option>
                                                    <option value="/categories/HandmadeJewellery">- Handmade Jewellery</option>
                                                    <option value="/categories/">- hhhh</option>
                                                    <option value="/categories/Film-Shooting-Locations">- Locations</option>
                                                    <option value="/categories/Makeup">- Makeup</option>
                                                    <option value="/categories/OthersinArtDirection">- Others - Art Direction</option>
                                                    <option value="/categories/Properties-for-film-shooting">- Props</option>
                                                    <option value="/categories/Event-Film-and-TV-Set-Elements">- Sets</option>
                                                    <option value="/categories/Film-Shooting-Special-Effects">- Special Effects</option>
                                                    <option value="/categories/Storyboarding">- Storyboarding</option>
                                                    <option value="/categories/StylingBeauty">- Styling &amp; Beauty</option>
                                                    <option value="/categories/Vehicles">- Vehicles</option>
                                                                                        <option value="/categories/Artistes-Models">Artistes / Models</option>
                                                                                            <option value="/categories/Living-crowd">- Ambiance Actors</option>
                                                    <option value="/categories/Anchors">- Anchors</option>
                                                    <option value="/categories/Choreographers">- Choreographers</option>
                                                    <option value="/categories/Comedians">- Comedians</option>
                                                    <option value="/categories/Dancers">- Dancers</option>
                                                    <option value="/categories/Female">- Female</option>
                                                    <option value="/categories/FemaleChild">- Female Child</option>
                                                    <option value="/categories/JuniorArtistes">- Junior Artistes</option>
                                                    <option value="/categories/Male">- Male</option>
                                                    <option value="/categories/MaleChild">- Male Child</option>
                                                    <option value="/categories/OthersinArtistes-Models">- Others - Artistes / Models</option>
                                                    <option value="/categories/StuntPeople">- Stunt People</option>
                                                                                        <option value="/categories/Business">Business</option>
                                                                                            <option value="/categories/BoxOfficeReports-Reviews">- Box Office Reports / Reviews</option>
                                                    <option value="/categories/BrandingServices">- Branding Services</option>
                                                    <option value="/categories/BusinessOthers">- Business - Others</option>
                                                    <option value="/categories/BusinessPlans">- Business Plans</option>
                                                    <option value="/categories/BusinessTips">- Business Tips</option>
                                                    <option value="/categories/CareerAdvice">- Career Advice</option>
                                                    <option value="/categories/FinancialConsulting">- Financial Consulting</option>
                                                    <option value="/categories/Legal-Consulting">- Legal Consulting</option>
                                                    <option value="/categories/MarketResearch">- Market Research</option>
                                                    <option value="/categories/Presentations">- Presentations</option>
                                                    <option value="/categories/VirtualAssistants">- Virtual Assistants</option>
                                                                                        <option value="/categories/Crew">Crew</option>
                                                                                            <option value="/categories/ArtDirectors">- Art Director</option>
                                                    <option value="/categories/Artist">- Artist</option>
                                                    <option value="/categories/AsstDirector">- Asst Director</option>
                                                    <option value="/categories/AudioEngineer">- Audio Engineer</option>
                                                    <option value="/categories/BestBoy">- Best Boy</option>
                                                    <option value="/categories/BoomOperator">- Boom Operator</option>
                                                    <option value="/categories/CameraOperator">- Camera Operator</option>
                                                    <option value="/categories/Choreopgrapher">- Choreopgrapher</option>
                                                    <option value="/categories/Cinematographer">- Cinematographer</option>
                                                    <option value="/categories/Composer">- Composer</option>
                                                    <option value="/categories/CostumeDesigner">- Costume Designer</option>
                                                    <option value="/categories/Countinuity">- Countinuity</option>
                                                    <option value="/categories/Designer">- Designer</option>
                                                    <option value="/categories/Director">- Director</option>
                                                    <option value="/categories/DollyGrip">- Dolly Grip</option>
                                                    <option value="/categories/Drivers">- Drivers</option>
                                                    <option value="/categories/Electricians">- Electrician</option>
                                                    <option value="/categories/ExecutiveProducer">- Executive Producer</option>
                                                    <option value="/categories/Focuspuller">- Focus Puller</option>
                                                    <option value="/categories/Gaffer">- Gaffer</option>
                                                    <option value="/categories/GeneratorOperator">- Generator Operator</option>
                                                    <option value="/categories/Grip">- Grip</option>
                                                    <option value="/categories/HairDresser">- Hair Dresser</option>
                                                    <option value="/categories/Helpers">- Helpers</option>
                                                    <option value="/categories/KeyGrip">- Key Grip</option>
                                                    <option value="/categories/LightingDesigner">- Lighting Designer</option>
                                                    <option value="/categories/Lightingtechnician">- Lighting Technician</option>
                                                    <option value="/categories/LineProducer">- Line Producer</option>
                                                    <option value="/categories/LocationManager">- Location Manager</option>
                                                    <option value="/categories/LocationScouter">- Location Scouter</option>
                                                    <option value="/categories/Make-upartist">- Make-up Artist</option>
                                                    <option value="/categories/OutdoorUnitTechnicians">- Outdoor Unit Technicians</option>
                                                    <option value="/categories/Post-Production">- Post-Production</option>
                                                    <option value="/categories/Producer">- Producer</option>
                                                    <option value="/categories/ProductionAssistant">- Production Assistant</option>
                                                    <option value="/categories/ProductionCoordinator">- Production Coordinator</option>
                                                    <option value="/categories/Scriptsupervisor">- Script Supervisor</option>
                                                    <option value="/categories/SetDecorator">- Set Decorator</option>
                                                    <option value="/categories/Sound">- Sound</option>
                                                    <option value="/categories/SoundEditor">- Sound Editor</option>
                                                    <option value="/categories/SoundMixer">- Sound Mixer</option>
                                                    <option value="/categories/SpecialEffectsSupervisor">- Special Effects Supervisor</option>
                                                    <option value="/categories/StuntCoordinator">- Stunt Coordinator</option>
                                                    <option value="/categories/StuntPerformer">- Stunt Performer</option>
                                                    <option value="/categories/Technician">- Technician</option>
                                                    <option value="/categories/TVWriter">- TV Writer</option>
                                                    <option value="/categories/UnitProductionManager">- Unit Production Manager</option>
                                                    <option value="/categories/UtilitySoundTechnician">- Utility Sound Technician</option>
                                                    <option value="/categories/Videographer">- Videographer</option>
                                                    <option value="/categories/VisualEffects">- Visual Effects</option>
                                                    <option value="/categories/VisualEffectsSupervisor">- Visual Effects Supervisor</option>
                                                                                        <option value="/categories/Equipment">Equipment</option>
                                                                                            <option value="/categories/Audio">- Audio</option>
                                                    <option value="/categories/Cameras">- Cameras</option>
                                                    <option value="/categories/Cranes">- Cranes</option>
                                                    <option value="/categories/Lights">- Lights</option>
                                                    <option value="/categories/OtherEquipments">- Other Equipments</option>
                                                                                        <option value="/categories/Graphics-Design">Graphics &amp; Design</option>
                                                                                            <option value="/categories/3D2DModels">- 3D &amp; 2D Models</option>
                                                    <option value="/categories/BannerAds">- Banner Ads</option>
                                                    <option value="/categories/BookCoversPackaging">- Book Covers &amp; Packaging</option>
                                                    <option value="/categories/BusinessCardsStationery">- Business Cards &amp; Stationery</option>
                                                    <option value="/categories/CartoonsCaricatures">- Cartoons &amp; Caricatures</option>
                                                    <option value="/categories/FlyersPosters">- Flyers &amp; Posters</option>
                                                    <option value="/categories/Illustrations">- Illustrations</option>
                                                    <option value="/categories/Infographics">- Infographics</option>
                                                    <option value="/categories/Invitations">- Invitations</option>
                                                    <option value="/categories/LogoDesign">- Logo Design</option>
                                                    <option value="/categories/Others-GraphicsDesign">- Others - Graphics &amp; Design</option>
                                                    <option value="/categories/PhotoshopEditing">- Photoshop Editing</option>
                                                    <option value="/categories/PresentationDesign">- Presentation Design</option>
                                                    <option value="/categories/SocialMediaDesign">- Social Media Design</option>
                                                    <option value="/categories/T-Shirts">- T-Shirts</option>
                                                    <option value="/categories/VectorTracing">- Vector Tracing</option>
                                                    <option value="/categories/WebMobileDesign">- Web &amp; Mobile Design</option>
                                                                                        <option value="/categories/Lifestyle">Lifestyle</option>
                                                                                            <option value="/categories/CookingRecipes">- Cooking Recipes</option>
                                                    <option value="/categories/DietWeightLoss">- Diet &amp; Weight Loss</option>
                                                    <option value="/categories/HealthFitness">- Health &amp; Fitness</option>
                                                    <option value="/categories/RelationshipAdvice">- Relationship Advice</option>
                                                                                        <option value="/categories/MusicAudio">Music &amp; Audio</option>
                                                                                            <option value="/categories/JinglesDrops">- Jingles &amp; Drops</option>
                                                    <option value="/categories/MixingMastering">- Mixing &amp; Mastering</option>
                                                    <option value="/categories/MusicDirection">- Music Direction</option>
                                                    <option value="/categories/Others-MusicAudio">- Others - Music &amp; Audio</option>
                                                    <option value="/categories/ProducersComposers">- Producers &amp; Composers</option>
                                                    <option value="/categories/SessionMusiciansSingers">- Session Musicians &amp; Singers</option>
                                                    <option value="/categories/Singer-Songwriters">- Singer - Songwriters</option>
                                                    <option value="/categories/SoundEffects">- Sound Effects</option>
                                                    <option value="/categories/SoundRecordist-SoundAssist">- Sound Recordist / Sound Assist</option>
                                                    <option value="/categories/VoiceOver">- Voice Over</option>
                                                                                        <option value="/categories/all-other-services">Others</option>
                                                                                    <option value="/categories/Promotion">Promotion</option>
                                                                                            <option value="/categories/BannerAdvertising">- Banner Advertising</option>
                                                    <option value="/categories/ContentMarketing">- Content Marketing</option>
                                                    <option value="/categories/DomainResearch">- Domain Research</option>
                                                    <option value="/categories/EmailMarketing">- Email Marketing</option>
                                                    <option value="/categories/FlyersHandouts">- Flyers &amp; Handouts</option>
                                                    <option value="/categories/HoldYourSign">- Hold Your Sign</option>
                                                    <option value="/categories/HumanBillboards">- Human Billboards</option>
                                                    <option value="/categories/InFilmBranding">- InFilm Branding</option>
                                                    <option value="/categories/InfluencerMarketing">- Influencer Marketing</option>
                                                    <option value="/categories/LocalListings">- Local Listings</option>
                                                    <option value="/categories/MarketingStrategy">- Marketing Strategy</option>
                                                    <option value="/categories/MobileAdvertising">- Mobile Advertising</option>
                                                    <option value="/categories/MusicPromotion">- Music Promotion</option>
                                                    <option value="/categories/Others-Promotion">- Others - Promotion</option>
                                                    <option value="/categories/OutdoorAdvertising">- Outdoor Advertising</option>
                                                    <option value="/categories/PetModels">- Pet Models</option>
                                                    <option value="/categories/RadioAdvertising">- Radio Advertising</option>
                                                    <option value="/categories/SEM">- SEM</option>
                                                    <option value="/categories/SEO">- SEO</option>
                                                    <option value="/categories/SocialMediaMarketing">- Social Media Marketing</option>
                                                    <option value="/categories/VideoAdvertising">- Video Advertising</option>
                                                    <option value="/categories/WebAnalytics">- Web Analytics</option>
                                                    <option value="/categories/WebTraffic">- Web Traffic</option>
                                                                                        <option value="/categories/Programming---Tech">Software</option>
                                                                                            <option value="/categories/ConvertFiles">- Convert Files</option>
                                                    <option value="/categories/DataAnalysisReports">- Data Analysis &amp; Reports</option>
                                                    <option value="/categories/Databases">- Databases</option>
                                                    <option value="/categories/Desktopapplications">- Desktop Applications</option>
                                                    <option value="/categories/Ecommerce">- Ecommerce</option>
                                                    <option value="/categories/Gaming">- Gaming</option>
                                                    <option value="/categories/MobileAppsWeb">- Mobile Apps &amp; Web</option>
                                                    <option value="/categories/Others-ProgrammingTech">- Others - Programming &amp; Tech</option>
                                                    <option value="/categories/QA">- QA</option>
                                                    <option value="/categories/SupportIT">- Support &amp; IT</option>
                                                    <option value="/categories/UserTesting">- User Testing</option>
                                                    <option value="/categories/WebProgramming">- Web Programming</option>
                                                    <option value="/categories/WebsiteBuildersCMS">- Website Builders &amp; CMS</option>
                                                    <option value="/categories/WordPress">- WordPress</option>
                                                                                        <option value="/categories/WritingTranslation">Writing &amp; Translation</option>
                                                                                            <option value="/categories/ArticlesBlogPosts">- Articles &amp; Blog Posts</option>
                                                    <option value="/categories/BusinessCopywriting">- Business Copywriting</option>
                                                    <option value="/categories/CreativeWriting">- Creative Writing</option>
                                                    <option value="/categories/Legalwriting">- Legal writing</option>
                                                    <option value="/categories/Others-WritingTranslation">- Others - Writing &amp; Translation</option>
                                                    <option value="/categories/PressReleases">- Press Releases</option>
                                                    <option value="/categories/ProofreadingEditing">- Proofreading &amp; Editing</option>
                                                    <option value="/categories/ResearchSummaries">- Research &amp; Summaries</option>
                                                    <option value="/categories/ResumesCoverLetters">- Resumes &amp; Cover Letters</option>
                                                    <option value="/categories/ScriptWriting">- Script Writing</option>
                                                    <option value="/categories/SongWriting-Lyricist">- Song Writing / Lyricist</option>
                                                    <option value="/categories/Transcription">- Transcription</option>
                                                    <option value="/categories/Translation">- Translation</option>
                                                                                    </select>
                </div>
            </div>
        </div>
    </div>
@endif
<style>
#inline1 {
	font-family:"Merriweather Sans", sans-serif;
}
</style>

<div class="scriptolutionhowitworks" style='display:none'>
    <div id="inline1" style="padding:10px;">
        <center><h1>How To Sell</h1></center>
        <br />
        <p>Create a new job for a service you can offer.</p>
        <br />
        <p>Share your job using our social bookmarking tools.</p>
        <br />
        <p>You will be notified when someone orders your job.</p>
        <br />
        <p>After you deliver your work we will credit your account with 80% on billing.</p>
        <br />
        <p>Withdraw your earnings to your Paypal account.</p>
        <br />
        <p>Spend your money!</p>
        <br /><br />
        
        <center><h1>How To Buy</h1></center>
        <br />
        <p>Find a job you like and place an order.</p>
        <br />
        <p>Pay for your job using Paypal or a credit card.</p>
        <br />
        <p>Track the seller's progress, communicate and exchange files.</p>
        <br />
        <p>Receive your finished work.</p>
        <br />
        <p>You can request fixes from the seller if it is not what you wanted.</p>
        <br />
        <p>Provide feedback on the seller and job.</p>
    </div>
</div>
<div class="bodybg ">
	<div class="bodyshadow">

        <div class="whitebody @if(isset(auth()->user()->id)) scriptolutionpaddingtop55 @endif">
        <link href="/css/scriptolution_feat_cats.css" media="screen" rel="stylesheet" type="text/css" />
        <div class="scriptolutionsmain1" style="top:-20px;">        	
            <div class="scriptolution-h-header"></div>
            <div class="scriptolution-s-small">FEATURED CATEGORIES</div>
        </div>
        <div class="scriptolutionsmain2" style="top:-20px;"> 
            <div style="clear:both;"></div>
    @php($block = App\Models\Categories::select('scriptolution_cattag1','scriptolution_cattag2','scriptolution_cattag3','scriptolution_catimage','name','seo')->where('scriptolution_featuredcat','=',1)->orderBy('name','desc')->get()) 
            @foreach ($block as $x)
                
            @php($name=htmlspecialchars_decode($x->name))
                <div class="scriptolutionsblock ">
                <div class="songperson">
                    <a href="/categories/{{$name}}?s=p"><img src="/images/scriptolution-cat-imgs/{{$x->scriptolution_catimage}}?1613322127" alt="{{$name}}" width="285" height="145" /></a>
                </div>
                <p>
                    <a href="/categories/{{$name}}?s=p">{{$name}}</a>                    
                </p>
                <a href="/categories/{{$x->seo}}">
                <ul class="scriptolution-t-tags" style="padding-top:5px;">
                	<li>{{$x->scriptolution_cattag1}}</li>                    <li>{{$x->scriptolution_cattag2}}</li>                    <li>{{$x->scriptolution_cattag3}}</li>                </ul>
                </a>
                </div>
                @endforeach 
                    </div>
        <div style="clear:both;"></div>
		
            <div class="cusongs" style="padding-top:10px;">
                <div class="cusongtitle">
                    <h3>Filter by:</h3>
                    <p>
                                                <a href="?s=dz" class="active">Date</a> 
                                                                        <a href="?s=p" >Popularity</a> 
                                                                        <a href="?s=r" >Rating</a>
                         
                                                <a href="?s=c" >Price</a> 
                                                                        <a href="?s=e" >Express Jobs</a> 
                                                             
                    </p>
                    
                    <div class="topright">
                                                <a href="/?page=1"><img src="/images/leftbox.png" /></a>
                        <a href="/?page=1&sdisplay=list"><img src="/images/rightbox_hover.png" /></a>
                                            </div>
                
                    <div class="clear"></div>
                </div>
                <div class="cusongslist">
                    @php($block = App\Models\Posts::select('gtitle','p1','PID','USERID')->orderBy('gtitle','desc')->get()) 
                    @foreach ($block as $x)
                    
                        <div class="cusongsblock ">
                            <div class="songperson">
                            	<a href="/{{$x->seo}}/{{$x->PID}}/{{$x->gtitle}}"><img src="/pics/t3/{{$x->p1}}" alt="{{$x->p1}}" width="214" height="132" /></a>
                                                                                                                            </div>
                            <div class="price 222">
                                <?php $value=$x->price;
                                     echo $value*159.05;
                                     ?></div>
                            <p>
                            	                            	<a href="/{{$x->seo}}/{{$x->PID}}/{{$x->gtitle}}">I will {{$x->gtitle}} 
                                      <?php $value=$x->price;
                                     echo $value*159.05;
                                     ?></a>
                            </p> @php($u= App\Models\User::select('username','profilepicture','country')->where('id','=',$x->USERID)->get()) 
                               <?php if($u[0]->profilepicture!=null) 
                                        {$pic=$u[0]->profilepicture; }
                                        else{ $pic="noprofilepicture.gif"; }
                               ?>
                                                        <div class="userdata">
                                <div class="userimg"><a href="/user/{{$u[0]->username}}"><img width="25px" height="25px" src="/images/membersprofilepic/thumbs/{{$pic}}" alt="{{$u[0]->username}}" /></a></div>
                                <div class="username"><a href="/user/{{$u[0]->username}}">{{$u[0]->username}}</a></div>
                                <div class="otherdetails">
                                    <span class="usercount"></span>
                                    <ul>
                                    	<li><a href="#"><img src="/images/scriptolution_user_rate_full.png" /></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_full.png" /></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_full.png" /></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_full.png" /></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_full.png" /></a></li>
                                    </ul>
                                    <span class="flag"><span class="country {{$u[0]->country}}" ></span></span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach                                                    
                           
                                        
                                        <div class="clear"></div>
                </div>
                <div align="center">
                                                        </div>
                <div class="clear" style="padding-bottom:20px;"></div>
                
            </div>
            
                    <div class="whiteBox homescriptolutionreq">
            <h1>Buyer Requests</h1>
            <div class="scriptolution-table myrequests">
                <table>
                    <thead>
                        <tr>
                            <td style="text-align:left;">Buyer</td>
                            <td style="text-align:left;">Request</td>
                            <td class="scriptolutionmhide" style="text-align:left;">Offers</td>
                            <td class="scriptolutionmhide" style="text-align:left;">Delivery</td>
                            <td class="scriptolutionmhide">Budget</td>
                        </tr>
                    </thead>
                    <tbody>
                                                                                                                <tr>
                            <td class="status-star">
                                <div class="scriptolutionviewrequest3">
                                    <a href="/user/fatrin99">fatrin99</a>
                                </div>
                            </td>
                            <td class="ellipsis-wrap">
                                <div class="ellipsissuggest"> 
                                    <div class="scriptolutionviewrequest1">
                                        srdf
                                    </div>
                                </div>
                            </td>
                            <td class="scriptolutionmhide">
                                <div class="offersbuttonscriptolutionnopointer" href="">0 Offers</div>
                            </td>
                            <td class="scriptolutionmhide">
                                2 days
                            </td>
                            <td class="scriptolutionmhide 1">
                                                                
                                19606                            </td>
                        </tr>
                        <tr>
                            <td class="scriptolutionmunhide">
                                <div class="offersbuttonscriptolutionnopointer">0 Offers</div>
                            </td>
                            <td class="scriptolutionmunhide 2">
                                2 days
                                <span style="margin-right:30px;"></span>
                                                                19606                            </td>
                        </tr>
                        <tr>
                            <td class="scriptolutiontopborder0" colspan="2">
                                <a class="sendascriptolutionoffer" href="/sendoffer?REQID=3">Send an offer</a>
                            </td>
                        </tr>
                                                <tr>
                            <td colspan="5">
                               <div></div>
                            </td>
                        </tr>
                                                                                        </tbody>
                </table>
            </div>
            
            <div align="center">
                <a href="/requests" class="agreenbutton">More Buyer Requests</a>
            </div>
                
        </div>
        <div class="clear"></div>            
            
            <div class="noteworthy">
                <h2>Random Jobs</h2>
                                                <div class="newgirl">
                    <div class="newgirlimg"><a href="/Transcription/2917/quality-transcript-audio-and-video"><img class="scriptolutionradius3" src="/pics/t4/2917-1.png?1613322127" alt="quality transcript audio and video" width="134" height="82" /></a></div>
                    <div class="newdetails">
                        <h3><a href="/Transcription/2917/quality-transcript-audio-and-video">I will quality transcript audio... 
                                                    797</a></h3>
                        <p> Hello,      I am Rahul,      I can quality transcript any audio / video having... <a href="/Transcription/2917/quality-transcript-audio-and-video">Read more</a></p>
                        <h5>by <a href="/user/rahulraval">rahulraval</a>&nbsp;<span class="country US" title="United States of America"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                                                <div class="newgirl">
                    <div class="newgirlimg"><a href="/Translation/2918/quality-translate-from-English-Hindi-Gujarati"><img class="scriptolutionradius3" src="/pics/t4/2918-1.png?1613322127" alt="quality translate from English-Hindi-Gujarati" width="134" height="82" /></a></div>
                    <div class="newdetails">
                        <h3><a href="/Translation/2918/quality-translate-from-English-Hindi-Gujarati">I will quality translate from... 
                                                    797</a></h3>
                        <p> Hello,      I am Rahul,     I am able to quality translate your document form... <a href="/Translation/2918/quality-translate-from-English-Hindi-Gujarati">Read more</a></p>
                        <h5>by <a href="/user/rahulraval">rahulraval</a>&nbsp;<span class="country US" title="United States of America"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                                                <div class="newgirl">
                    <div class="newgirlimg"><a href="/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room"><img class="scriptolutionradius3" src="/pics/t4/2913-1.jpg?1613322127" alt="I Will Do Interior Design For Your Room" width="134" height="82" /></a></div>
                    <div class="newdetails">
                        <h3><a href="/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room">I will I Will Do Interior Design... 
                                                    956</a></h3>
                        <p>I'm Graphic Design &amp; Interior Design with 10 years of experience using sketchup, v-ray and... <a href="/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room">Read more</a></p>
                        <h5>by <a href="/user/fatrin99">fatrin99</a>&nbsp;<span class="country ID" title="Indonesia"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                            </div>
            <div class="noteworthy">
                <h2>Top Rated Jobs</h2>
                                                <div class="newgirl">
                    <div class="newgirlimg"><a href="/Transcription/2917/quality-transcript-audio-and-video"><img class="scriptolutionradius3" src="/pics/t4/2917-1.png?1613322127" alt="quality transcript audio and video" width="134" height="82" /></a></div>
                    <div class="newdetails">
                        <h3><a href="/Transcription/2917/quality-transcript-audio-and-video">I will quality transcript audio... 
                                                    797</a></h3>
                        <p> Hello,      I am Rahul,      I can quality transcript any audio / video having... <a href="/Transcription/2917/quality-transcript-audio-and-video">Read more</a></p>
                        <h5>by <a href="/user/rahulraval">rahulraval</a>&nbsp;<span class="country US" title="United States of America"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                                                <div class="newgirl">
                    <div class="newgirlimg"><a href="/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room"><img class="scriptolutionradius3" src="/pics/t4/2913-1.jpg?1613322127" alt="I Will Do Interior Design For Your Room" width="134" height="82" /></a></div>
                    <div class="newdetails">
                        <h3><a href="/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room">I will I Will Do Interior Design... 
                                                    956</a></h3>
                        <p>I'm Graphic Design &amp; Interior Design with 10 years of experience using sketchup, v-ray and... <a href="/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room">Read more</a></p>
                        <h5>by <a href="/user/fatrin99">fatrin99</a>&nbsp;<span class="country ID" title="Indonesia"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                                                <div class="newgirl">
                    <div class="newgirlimg"><a href="/Translation/2918/quality-translate-from-English-Hindi-Gujarati"><img class="scriptolutionradius3" src="/pics/t4/2918-1.png?1613322127" alt="quality translate from English-Hindi-Gujarati" width="134" height="82" /></a></div>
                    <div class="newdetails">
                        <h3><a href="/Translation/2918/quality-translate-from-English-Hindi-Gujarati">I will quality translate from... 
                                                    797</a></h3>
                        <p> Hello,      I am Rahul,     I am able to quality translate your document form... <a href="/Translation/2918/quality-translate-from-English-Hindi-Gujarati">Read more</a></p>
                        <h5>by <a href="/user/rahulraval">rahulraval</a>&nbsp;<span class="country US" title="United States of America"></span></h5>
                    </div>
                    <div class="clear"></div>
                </div>
                            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
@endsection