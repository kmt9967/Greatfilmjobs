@extends('layout.header')
@section('content')


<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 newgray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="scriptolution-no-side">
				<div class="whiteBox padding15 scriptolutionshop">
                	<div id="scriptolution_dotcom_shop">	
									
                    <h1>Buyer Requests</h1>
                    </div>
                    <script language="JavaScript" type="text/JavaScript"> 
					function Scriptolution_dotcom_jumpMenu(targ,selObj,restore){
						window.location.href='/buyer_req/'+selObj.options[selObj.selectedIndex].value;
						
					} 
					</script>
                    <div class="scripto_lution_rcatwrapper">
                      <select onchange="Scriptolution_dotcom_jumpMenu('parent',this,0)" class="text" id="scriptolution_req_cat" name="scriptolution_req_cat">
                      <option value="/requests">Category</option>
                        @include('data.categories')                                 
                            </select>
                    </div>                                    
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
								
									
                                    @foreach ($req as $x)
										
									                	                                								<tr>
									<td class="status-star">
                                        <div class="scriptolutionviewrequest3">
											@php($name= App\Models\User::select('username')->where('id','=',$x->USERID)->get())
                                        	<a href="/user/{{$name[0]->username}}">{{$name[0]->username}}</a>
                                        </div>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsissuggest"> 
                                        	<div class="scriptolutionviewrequest1">
                                        		{{$x->scriptolutiondesc}}
                                            </div>
										</div>
									</td>
                                    <td class="scriptolutionmhide">
										<?php $count=App\Models\Offer::where('REQUESTID','=',$x->REQUESTID)->get();
										$count=$count->count();
										?>
                                    	<div class="offersbuttonscriptolutionnopointer" href="">{{$count}} Offers</div>
                                    </td>
                                    <td class="scriptolutionmhide">
                                    	{{$x->scriptolutiondays}}
                                    </td>
                                    <td class="scriptolutionmhide">
                                        {{$x->scriptolutionprice}}                                    </td>
								</tr>
                
                                <tr>
                                    <td class="scriptolutiontopborder0" colspan="2">
                                    	<a class="sendascriptolutionoffer" href="/sendoffer/{{$x->REQUESTID}}">Send an offer</a>
                                    </td>
								</tr>
								<tr>
                                    <td colspan="5">
                                       <div></div>
                                    </td>
                                </tr>
								@endforeach   
                                
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
		</div>    
	</div>
</div>

@endsection