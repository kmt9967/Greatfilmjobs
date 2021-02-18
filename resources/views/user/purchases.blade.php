@extends('layout.header')
@section('content')

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1>Seller Purchases</h1>                    
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td style="text-align:left;">Date</td>
									<td>Order</td>
                                    <td>&nbsp;</td>
                                    <td>Status</td>
									<td>Net</td>
								</tr>
							</thead>
							<tbody>
                                                        <tr>
                                <td colspan="5">
                                You have not featured any of your jobs yet.
                                </td>
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