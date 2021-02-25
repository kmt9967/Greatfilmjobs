
<?php $__env->startSection('content'); ?>
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
                                <?php $__currentLoopData = $req; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
									<td class="status-star">
                                        <div class="scriptolutionviewrequest3">
                                        	<?php $date=($x->time_added)+ (7 * 24 * 60 * 60); echo date('d/M/y',$date); ?>
                                        </div>
									</td>
									<td class="ellipsis-wrap">
										<div class="ellipsissuggest"> 
                                        	<div class="scriptolutionviewrequest1">
                                        		<?php echo e($x->scriptolutiondesc); ?>

                                            </div>
                                            <div class="scriptolutionviewrequest2">
                                            	<span>Delivery: <?php echo e($x->scriptolutiondays); ?> days</span>
                                                                                                <span>Budget: ₹<?php echo e($x->scriptolutionprice); ?> </span>
                                            </div>
										</div>
									</td>
                                    <td class="actionstatus">
                                        <?php $count=App\Models\Offer::where('REQUESTID','=',$x->REQUESTID)->get();
										$count=$count->count();
										?>
                                    	<a class="offersbuttonscriptolution" href="/viewoffers?ID=3"><?php echo e($count); ?> Offers</a>
                                        <div style="clear:both; padding-top:15px;"></div>
                                        <a class="newscriptolutionredbutton" href="/myrequest_del/<?php echo e($x->REQUESTID); ?>">Delete</a>
                                    </td>
								</tr>
                                                                <tr>
                                    <td colspan="3">
                                       <div></div>
                                    </td>
                                </tr>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                             														</tbody>
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
			<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
		</div>    
	</div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/user/myrequests.blade.php ENDPATH**/ ?>