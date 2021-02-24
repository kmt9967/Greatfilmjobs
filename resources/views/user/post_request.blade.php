@extends('layout.header')
@section('content')

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="full-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="/post_request" id="new_gig" method="post">
                          @csrf
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
                                               @include("data.categories") </select>
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