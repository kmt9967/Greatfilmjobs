
<?php $__env->startSection('content'); ?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="full-side scriptolutionwidth842">
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="/sendoffer/<?php echo e(request()->route('id')); ?>" id="new_gig" method="post">
                            <?php echo csrf_field(); ?>
                        	<h1>Send an offer</h1>
                            <div style="clear:both"></div>

                            <div class="reminderdesc"><?php $desc= App\Models\Buy_Req::select('scriptolutiondesc')->where('REQUESTID','=',request()->route('id'))->get(); ?> <?php echo e($desc[0]->scriptolutiondesc); ?></div>
                            <div style="clear:both"></div>
                            
                            <div class="whiteBox">
                            	<div class="iscriptolution">
                                    <div class="scriptolution-irequest-holder">
                                        <div class="scriptolutiontxt"><label class="editgigformtitle" for="gig_jobs">Select the job you want to offer the user to purchase</label> </div>
                                        <div class="scriptolutionf">
                                        	  <select class="requesttext2" name="gjobscriptolution">
                                              <option value="0">Please select</option>
                                              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option value="<?php echo e($x->PID); ?>"><?php echo e($x->gtitle); ?></option>
                                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                             </select>
                                        </div>
                                        <div style="clear:both; padding-top:5px;"></div>
                                    </div>
                                </div>
                                <div class="scriptolutionclear"></div>
                                
                                <div class="iscriptolution">
                                    <div class="scriptolution-irequest-holder">
                                        <div class="scriptolutiontxt"><label class="editgigformtitle" for="gig_category">Message</label></div>
                                        <div class="scriptolutionf">
                                        	<textarea class="requesttext" cols="74" id="gig_description" maxlength="450" name="gdesc" rows="6"></textarea>
                                        </div>
                                        <div style="clear:both; padding-top:5px;"></div>
                                    </div>
                                </div>
                                <div class="scriptolutionclear"></div>
                                
                                
                                
                                
                                
                            </div>
                            <div style="clear:both"></div>                    
                            <div class="scriptolutionclear"></div>                            

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="Send" class="scriptolutionbluebutton">
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
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter842"></div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/user/sendoffer.blade.php ENDPATH**/ ?>