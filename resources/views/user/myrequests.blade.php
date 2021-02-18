@extends('layout.header')
@section('content')
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">					
                    <h1>My Requests</h1>
					<div class="scriptolution-table myrequests">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;">Date</td>
                                    <td style="text-align:left;">Request</td>
                                    <td>Action</td>
								</tr>
							</thead>
							<tbody>
                                                        	                                								<tr>
									<td class="status-star">
                                        <div class="scriptolutionviewrequest3">
                                        	Dec 25, 2020
                                        </div>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsissuggest"> 
                                        	<div class="scriptolutionviewrequest1">
                                        		srdf
                                            </div>
                                            <div class="scriptolutionviewrequest2">
                                            	<span>Delivery: 2 days</span>
                                                                                                <span>Budget: ₹8928</span>
                                            </div>
										</div>
									</td>
                                    <td class="actionstatus">
                                    	<a class="offersbuttonscriptolution" href="https://www.greatfilmjobs.com/dev/viewoffers?ID=3">0 Offers</a>
                                        <div style="clear:both; padding-top:15px;"></div>
                                        <a class="newscriptolutionredbutton" href="https://www.greatfilmjobs.com/dev/myrequests?del=1&amp;ID=3">Delete</a>
                                    </td>
								</tr>
                                                                <tr>
                                    <td colspan="3">
                                       <div></div>
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