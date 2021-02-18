@extends('layout.header')
@section('content')

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1>My Jobs</h1>
                    
                    <div class="table-title">
                    	<div class="left">
                        	<span class="label">SELECT</span>
                        	<a href="#" class="select-all whiteBtn">All</a>
                            <a href="#" class="select-none whiteBtn">None</a>
                            <a href="#" class="select-suspended whiteBtn">Suspended</a>
                            <a href="#" class="select-active whiteBtn">Active</a>
                        </div>
                    	<div class="right">
                            <a class="btn-suspend ascriptolutionbluebutton" href="#">SUSPEND</a>
                            <a class="btn-activate ascriptolutiongreenbutton" href="#">ACTIVATE</a>
                            <a href="#" class="btn-delete ascriptolutionredbutton"><span>DELETE</span></a>
                        </div>
                    </div>
                            					
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;">Job</td>
								</tr>
							</thead>
							<tbody>
                                                        <tr>
                                <td style="text-align: left !important; white-space: normal !important;">
                                	<form action="https://www.greatfilmjobs.com/dev/manage_gigs" id="gigs_form" method="post">
                                                                                                
                                    <div class="newscriptolution ">
                                        <div class="newscriptolutionimg responsivescriptolutionimages">
                                            <a href="https://www.greatfilmjobs.com/dev/ArtDirectors/2919/do-a-thing"><img src="https://www.greatfilmjobs.com/dev/pics/t4/2919-1.png?1613502282" alt="do a thing" width="162" height="100"></a>
                                                                                        <br>
                                            <a href="https://www.greatfilmjobs.com/dev/edit?id=2919" class="btn-edit">[Edit]</a>
                                            
                                                                                        <div class="scriptolutionpaddingtop5"></div>
                                            <a href="https://www.greatfilmjobs.com/dev/feature?id=2919" class="ascriptolutiongreenbutton" style="color:#FFF">Feature</a>
                                                                                        
                                        </div>
                                        <div class="newscriptolutiondetails width480 scriptolutionpaddingleft15">
                                            <h3>
                                            	                                                <input class="checkbox inactive" id="gig_" name="gig[]" type="checkbox" value="2919">
                                                                                                <a href="https://www.greatfilmjobs.com/dev/ArtDirectors/2919/do-a-thing">I will do a thing 
                                                                                                        for $362</a></h3>
                                            <div>
                                            	                                                <div style="color:orange;">Status: Awaiting Approval</div>
                                                                                            </div>
                                            <h5><a href="https://www.greatfilmjobs.com/dev/manage_orders?status=in_progress">Active Sales:</a><span class="open-orders">0</span></h5>
                                            <h5><a href="https://www.greatfilmjobs.com/dev/manage_orders?status=in_progress">Complete Sales:</a>0</h5>
                                            <h5>Viewed: 1</h5>
                                            <h5>Revenue: <span class="gains">
                                                                                                ₹0</span></h5>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                                                                                
                                    <div class="newscriptolution newscriptolutionnewcolor">
                                        <div class="newscriptolutionimg responsivescriptolutionimages">
                                            <a href="https://www.greatfilmjobs.com/dev/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room"><img src="https://www.greatfilmjobs.com/dev/pics/t4/2913-1.jpg?1613502282" alt="I Will Do Interior Design For Your Room" width="162" height="100"></a>
                                                                                        <br>
                                            <a href="https://www.greatfilmjobs.com/dev/edit?id=2913" class="btn-edit">[Edit]</a>
                                            
                                                                                        <div class="scriptolutionpaddingtop5"></div>
                                            <a href="https://www.greatfilmjobs.com/dev/feature?id=2913" class="ascriptolutiongreenbutton" style="color:#FFF">Feature</a>
                                                                                        
                                        </div>
                                        <div class="newscriptolutiondetails width480 scriptolutionpaddingleft15">
                                            <h3>
                                            	                                                <input class="checkbox approved" id="gig_" name="gig[]" type="checkbox" value="2913">
                                                                                                <a href="https://www.greatfilmjobs.com/dev/Graphics-Design/2913/I-Will-Do-Interior-Design-For-Your-Room">I will I Will Do Interior Design For Your Room 
                                                                                                        for $435</a></h3>
                                            <div>
                                            	                                                <div style="color:limegreen;">Status: Approved and Active</div>
                                                                                            </div>
                                            <h5><a href="https://www.greatfilmjobs.com/dev/manage_orders?status=in_progress">Active Sales:</a><span class="open-orders">0</span></h5>
                                            <h5><a href="https://www.greatfilmjobs.com/dev/manage_orders?status=in_progress">Complete Sales:</a>0</h5>
                                            <h5>Viewed: 352</h5>
                                            <h5>Revenue: <span class="gains">
                                                                                                ₹0</span></h5>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                                                        <input type="hidden" name="subme" value="1">
                                    </form>
                                </td>
                            </tr>
														</tbody>
						</table>
					</div>
					<div class="clear"></div>	
                    <div align="center">
                        <div class="paging">
                            <div class="p1">
                                <ul>
                                    <li><span class="prev">previous page</span></li>&nbsp;<li><span class="active">1</span></li>&nbsp;<li><span class="next">next page</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>			
				</div>
                
                
			</div>
			<div class="right-side">
    <div class="sidebarBlock">
        <h3>ACTIONS</h3>
        <ul>
            <li><a href="https://www.greatfilmjobs.com/dev/new" class="greenBtn"><span>Create a Job</span></a></li>
            <li><a href="https://www.greatfilmjobs.com/dev/newrequest" class="greenBtn"><span>Post a Request</span></a></li>
            
        </ul>
    </div>
        <div class="sidebarBlock">
        <h2>BUYER</h2>
        <ul>
        	<li><a href="https://www.greatfilmjobs.com/dev/myrequests">My Requests</a></li>
            <li><a href="https://www.greatfilmjobs.com/dev/orders">My Shopping</a></li>
            <li><a href="https://www.greatfilmjobs.com/dev/balance">Payments</a></li>
        </ul>
    </div>
    <div class="sidebarBlock">
        <h3>SELLER</h3>
        <ul>
            <li><a href="https://www.greatfilmjobs.com/dev/manage_gigs">My Jobs</a></li>
            <li><a href="https://www.greatfilmjobs.com/dev/manage_orders">Manage Sales</a></li>
            <li><a href="https://www.greatfilmjobs.com/dev/balance?tab=sales">Revenues</a></li>
            <li><a href="https://www.greatfilmjobs.com/dev/purchases">Purchases</a></li>
            
            <li><a href="https://www.greatfilmjobs.com/dev/requests">Buyer Requests</a></li>
        </ul>
    </div>
        <div class="sidebarBlock noBorder">
        <h3>PROFILE</h3>
        <ul>
                        <li><a href="https://www.greatfilmjobs.com/dev/bookmarks">Stuff I Like</a></li>
            <li><a href="https://www.greatfilmjobs.com/dev/settings">Settings</a></li>
        </ul>
    </div>	
</div>
		</div>    
	</div>
</div>

@endsection