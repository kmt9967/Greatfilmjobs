@extends('layout.header')
@section('content')

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1>Manage Sales</h1>
                    <h4>Track and manage your work</h4>
					<div class="whiteBox inside">
						<div class="block inside">
							<span class="number"><a href="https://www.greatfilmjobs.com/dev/manage_orders?s=active&amp;b=id&amp;a=desc">0</a></span>
							<span class="descr">Active Orders</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="https://www.greatfilmjobs.com/dev/manage_orders?s=delivered&amp;b=id&amp;a=desc">0</a></span>
							<span class="descr">Delivered</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="https://www.greatfilmjobs.com/dev/manage_orders?s=completed&amp;b=id&amp;a=desc">0</a></span>
							<span class="descr">Completed</span>
						</div>
						<div class="block inside last">
							<span class="number"><a href="https://www.greatfilmjobs.com/dev/manage_orders?s=cancelled&amp;b=id&amp;a=desc">0</a></span>
							<span class="descr">Cancelled</span>
						</div>
					</div>
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									<td colspan="2" style="text-align:left;"><a href="https://www.greatfilmjobs.com/dev/manage_orders?s=active&amp;b=id&amp;a=asc">Order</a></td>
									<td><a href="https://www.greatfilmjobs.com/dev/manage_orders?s=active&amp;b=date&amp;a=asc">Created</a></td>
									<td><a href="https://www.greatfilmjobs.com/dev/manage_orders?s=active&amp;b=status&amp;a=asc">Status</a></td>
								</tr>
							</thead>
							<tbody>
                                                        <tr>
                                <td colspan="4">
                                No orders available for display.
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