@extends('layout.header')
@section('content')

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1>Conversations Inbox</h1>
                    <h4>Communicate with other users</h4>
                    
                    <div class="table-title">
                    	<div class="left">
                        	<a href="https://www.greatfilmjobs.com/dev/inbox?o=time&amp;a=0" class=" whiteBtnselected">All</a>
                            <a href="https://www.greatfilmjobs.com/dev/inbox?s=unread&amp;o=time&amp;a=0" class=" whiteBtn">Unread</a>
                            <a href="https://www.greatfilmjobs.com/dev/inbox?s=archived&amp;o=time&amp;a=0" class=" whiteBtn">Archived</a>
                        </div>
                    	<div class="right">
                            <select id="conversations_quick_navigation">
                            	                            	<option>Everyone</option>
                                                                <option style="font-weight: bold;" value="o=time&amp;a=0&amp;s=all&amp;u=694">rahulraval</option>
                                                                                            </select>
                        </div>
                    </div>
                       					
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;">
                                    	<a href="https://www.greatfilmjobs.com/dev/inbox?o=name&amp;s=all&amp;a=1">&nbsp;Recipient</a>
                                    </td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
									<td>
                                    	<a href="https://www.greatfilmjobs.com/dev/inbox?o=time&amp;s=all&amp;a=1" class="ascending">▼&nbsp;Updated</a>
                                    </td>
								</tr>
							</thead>
							<tbody>
                                                        	                                                                    	                                                                                                                                                                <tr>
                                            <td class="status-star">
                                                <a href="https://www.greatfilmjobs.com/dev/conversations/rahulraval">rahulraval</a>
                                            </td>
                                            <td class="ellipsis-wrap">
                                            	<div class="ellipsis"> 
                                                <a href="https://www.greatfilmjobs.com/dev/conversations/rahulraval">thank you for the order</a>
                                                </div>
                                            </td>
                                            <td>
                                                                                            </td>
                                            <td>May 12</td>                          
                                        </tr>
                                		                                    
                                                                 
														</tbody>
						</table>
					</div>
					<div class="clear"></div>	
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