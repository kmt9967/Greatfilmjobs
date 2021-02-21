<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
    <title>GreatFilmJobs.com: Buy. Sell. Have fun! - GreatFilmJobs.com</title>
	<meta name="description" content="GreatFilmJobs.com: Buy. Sell. Have fun! - GreatFilmJobs.com for all kinds of MicroJobs! Buy. Sell. Have fun! - GreatFilmJobs.com">
  
    <link href="/css/scriptolution_style_v7.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="/css/scriptolution_style_v7_user.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="/css/scriptolution_countries.php" media="screen" rel="stylesheet" type="text/css" />  
    <script type="text/javascript">
    var base_url = "";
	</script>
    <link rel="icon" href="/favicon.ico" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=8" />
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script>
        sQuery = jQuery.noConflict(true);
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
    <script src="/js/jquery.customSelect.js"></script>
	<script src="/js/mainscriptolution.js"></script>
    <script src="/js/jquery.js"></script>
    <script src="/js/scriptolution.js"></script>
    <script src="/js/scriptolution_notifications.js"></script>
        	<link rel="stylesheet" href="/colorbox/colorbox.css" />
	<script src="/colorbox/jquery.colorbox.js"></script>
    
    <script>
		$(document).ready(function(){
			sQuery(".inline").colorbox({inline:true, width:"400px"});
		});
	</script>
     
    	<link rel="stylesheet" type="text/css" href="/css/tooltipster.css" />
    <script type="text/javascript" src="/js/jquery.tooltipster.min.js"></script>
    
    <script>
        sQuery(document).ready(function() {
            sQuery('.tooltip').tooltipster();
        });
		sQuery.fn.tooltipster('setDefaults', {
		  position: 'bottom',
		  animation: 'fade',
		   delay: 200,
		   theme: 'tooltipster-scriptolution',
		   touchDevices: false,
		   trigger: 'hover'
		});		

    </script>
     
    <link href="/css/scriptolution_style_v7_home.css" media="screen" rel="stylesheet" type="text/css" />    <script src="/js/jscriptolution.js"></script>
    <link href="/css/scriptolutionresponse.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">


    <style>
        span.ID {
        background-position: -256px -229px !important;
    }
    span.country {
        position: relative;
        display: inline-block;
        background: url(https://www.greatfilmjobs.com/dev/images/scriptolution_flags.png) no-repeat 0px 12px;
        height: 11px;
        width: 17px;
        vertical-align: middle;
        margin: 1px 0 0 0;
    }
        </style>
</head>
<body>
<div id="loadme"></div>
<div id="fb-root"></div>

<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
  FB.init({appId: '1750802685183844', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe('auth.login', function(response) {
  });	  
</script>

<div class="header">
	<div class="centerwrap relative">
    	<div class="headertop">
        	<div class="scriptolutionmenubutton"><a href="javascript:void();" onclick="scriptolution_newtoggle('scriptolutionmobilenav');"><i class="fa fa-bars"></i></a></div>
        	<div class="logo"><a href="/"><img src="/images/scriptolution_logo.png" alt="GreatFilmJobs.com" /></a></div>
            <div class="search">                
                <form action="/search" id="search_form" method="get">
                <input name="query" type="text" class="textbox scriptolutiontextbox20"/>
                <input type="hidden" name="c" id="scriptolution_search_cat" value="0" />
                <input type="submit" value="" class="searchbtn" />
                </form>
            </div>
            
            


  @if(isset(auth()->user()->id))
            <div class="logoutheader">
                <div class="usernamebox droparrow">
                                      <div class="userimage"><a href="/user/{{auth()->user()->username}}"><img src="/images/membersprofilepic/thumbs/{{auth()->user()->profilepicture}}" alt="{{auth()->user()->username}}" height="25px" width="25px" class="scriptolutionradius3" /></a></div>
                    <p>Profile</p>
                       <div class="clear"></div>
                  <div class="dropdownbox">
                      <ul>
                                                      <li><a href="/bookmarks">Stuff I Like</a></li>
                          <li><a href="/settings">Settings</a></li>
                          <li class="divider"></li>
                          <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
                         </a><form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>
                      </ul>
                  </div>
                </div>
                   <div class="textdropdown sublinks 111">
                     <p><a href="/myjobs">Seller <span class="arrow"><img src="/images/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                  <div class="dropdownbox">
                      <ul>
                          <li><a href="/create_job">Create a Job</a></li>
                          <li><a href="/myjobs">My Jobs</a></li>
                          <li><a href="/manage_order">Manage Sales</a></li>
                          <li><a href="/balance">Revenues</a></li>
                          <li><a href="/purchases">Purchases</a></li>
                           
                          <li><a href="/buyer_request">Buyer Requests</a></li>
                      </ul>
                  </div>
              </div>
                <div class="textdropdown sublinks">
                     <p><a href="/balance">Buyer <span class="arrow"><img src="/images/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                  <div class="dropdownbox">
                      <ul>
                          <li><a href="/post_request">Post a Request</a></li>
                          <li><a href="/myrequests">My Requests</a></li>
                          <li><a href="/orders">My Shopping</a></li>
                          <li><a href="/payment">Payments</a></li>
                          
                      </ul>
                  </div>
              </div>
                              <div class="massage scriptolutionheadernotifycntcolor">
                  <a href="#" onclick="scriptolutions_fiverrscript_toggleit('scriptolution-notifications-popup');"><i id="scriptolution-master" class="fa fa-bell-o" style="padding-top: 7px;"></i></a>
              </div>
              
              <div class="todo leftborder">
                                      <p><a href="/inbox">Inbox</a> <span>0</span></p>
              </div>
              <div class="clear"></div>
            </div> 

    @else
        <div class="headeright">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/login">Sign In</a></li>
                <li><a href="/signup" class="join">Join</a></li>
            </ul>
        </div>

    @endif

                        <div class="textdropdown sublinks">
                <p><a href="/?c=PKR">PKR <span class="arrow"><img src="/images/scriptolution_navdroparrow.png" alt="" /></span></a></p>
                <div class="dropdownbox">
                    <ul>
                        <li><a href="/?c=INR">INR</a></li>
                        <li><a href="/?c=USD">USD</a></li>
                        <li><a href="/?c=EUR">EUR</a></li>
                        <li><a href="/?c=JPY">JPY</a></li>
                        <li><a href="/?c=GBP">GBP</a></li>
                        <li><a href="/?c=AUD">AUD</a></li>
                        <li><a href="/?c=CAD">CAD</a></li>
                        <li><a href="/?c=CHF">CHF</a></li>
                        <li><a href="/?c=CNY">CNY</a></li>
                        <li><a href="/?c=SEK">SEK</a></li>
                        <li><a href="/?c=NZD">NZD</a></li>
                        <!-- <li><a href="/?c=LKR">LKR</a></li>
                        <li><a href="/?c=BDT">BDT</a></li> -->
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
	<div class="subnav">
    	<div class="centerwrap">
        	<ul>
                @php($cat = App\Models\Categories::select('CATID','name')->where('parent','=',0)->orderBy("name","asc")->take(10)->get()) 
            @foreach($cat as $x)

                
            	<li><a href="/categories/Cinematography---Animation">{{htmlspecialchars_decode($x->name)}}</a>
                @if($x->name!="Others")
                <div class="menubox">
                    	<div class="menulist">
                        	<ul> @php($data = App\Models\Categories::select('name')->where('parent', '=', $x->CATID)->
                                get())
                                @foreach($data as $d)
                            	    <li><a href="/categories/{{str_replace(' ', '', htmlspecialchars_decode($d->name))}}">{{htmlspecialchars_decode($d->name)}}</a></li>
                                @endforeach                 
                                </ul>
                        </div>
                    </div>
                @endif
                                    </li>
                            	
             @endforeach                   <li class="submenu-right"><a href="/categories">More</a></li>
            </ul>
        </div>
    </div>
    
</div>
<div class="nav-scriptolution" id="scriptolutionmobilenav" style="display:none">
	<div class="scriptolution-dotcom-mobile-dropdown" id="dropdown-menu">
    	<div class="scriptolutionclose-nav" onclick="scriptolution_newtoggle('scriptolutionmobilenav');">×</div>
        <div class="searchforscriptolutionmobleonly">
        	<form action="/search" method="get">
            <input name="query" type="text" class="textbox scriptolutiontextbox18 scriptolutionwidth80"/>
            <input type="submit" value="Search" class="ascriptolutiongreenbutton" style="border: 0px;" />
            </form>
            <hr>
        </div>
                <a class="scriptolutionfiverrscriptitem" href="/">Home</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem" href="/login">Sign In</a>
        <hr>
        <a class="scriptolutionfiverrscriptitem join" href="/signup">Join</a>
        	</div>
</div>
<div>@yield('content')</div>
<div class="footer">
	<div class="centerwrap footertop">
    	<div class="footerbg"></div>
    	<div style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: black">
    	

      	 	<center>Copyright &copy; 2016 <a href="http://www.greatfilmjobs.com">GreatFilmJobs.com</a>. Powered by Madhu Rebba Design, Inc., Florida, USA <br> <a href="http://www.greatfilmjobs.com">Home</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_k2&view=item&layout=item&id=133&Itemid=1191&lang=en" target="_blank">About Us</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_fss&view=main&Itemid=1270&lang=en" target="_blank">Help & Support</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_fss&view=ticket&Itemid=1277&lang=en" target="_blank">Support Tickets</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_fss&view=faq&Itemid=1278&lang=en" target="_blank">FAQs</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_k2&view=item&layout=item&id=131&Itemid=522&lang=en" target="_blank">Terms of Service</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_k2&view=item&layout=item&id=130&Itemid=521&lang=en" target="_blank">Privacy Policy</a> | <a href="http://greatfilmjobs.com/presales/index.php?option=com_contact&view=contact&id=1&Itemid=1192&lang=en" target="_blank">Contact Us</a></center>
        
</div>
        <div class="clear"></div>
    </div>
    <div class="scriptolutionfooterlang">
    <center>                        <form name="langselect" id="langselect" method="post">                        
                            <select name="language" onChange="document.langselect.submit()" style="font-family: Tahoma, Verdana; font-size: 11px"> 
                                <option value="english" selected >English</option> 
                                <option value="spanish" >Español</option> 
                                <option value="french" >Français</option> 
                                <option value="portuguese" >Português</option>
                                <option value="hebrew" >עברית</option>
                                <option value="german" >Deutsch</option>
                                <option value="arabic" >العربية</option>
                                <option value="chinese" >中文</option>
                                <option value="russian" >русский</option>
                            </select>
                        </form></center>
    </div>
</div>
</body>
</html>