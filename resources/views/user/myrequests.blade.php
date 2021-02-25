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
                                @foreach ($req as $x)
                                <tr>
									<td class="status-star">
                                        <div class="scriptolutionviewrequest3">
                                        	<?php $date=($x->time_added)+ (7 * 24 * 60 * 60); echo date('d/M/y',$date); ?>
                                        </div>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsissuggest"> 
                                        	<div class="scriptolutionviewrequest1">
                                        		{{$x->scriptolutiondesc}}
                                            </div>
                                            <div class="scriptolutionviewrequest2">
                                            	<span>Delivery: {{$x->scriptolutiondays}} days</span>
                                                                                                <span>Budget: ₹{{$x->scriptolutionprice}} </span>
                                            </div>
										</div>
									</td>
                                    <td class="actionstatus">
                                        <?php $count=App\Models\Offer::where('REQUESTID','=',$x->REQUESTID)->get();
										$count=$count->count();
										?>
                                    	<a class="offersbuttonscriptolution" href="/viewoffers?ID=3">{{$count}} Offers</a>
                                        <div style="clear:both; padding-top:15px;"></div>
                                        <a class="newscriptolutionredbutton" href="/myrequest_del/{{$x->REQUESTID}}">Delete</a>
                                    </td>
								</tr>
                                                                <tr>
                                    <td colspan="3">
                                       <div></div>
                                    </td>
                                </tr>
                                   @endforeach                             														</tbody>
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
			@include('layout.sidebar')
                
		</div>    
	</div>
</div>


@endsection