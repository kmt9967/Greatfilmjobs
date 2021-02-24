
<?php $__env->startSection('content'); ?>

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
                            <a class="btn-suspend ascriptolutionbluebutton" href="#" name='status' value="suspend">SUSPEND</a>
                            <a class="btn-activate ascriptolutiongreenbutton" href="#" name='status' value="active" >ACTIVATE</a>
                            <a href="#" class="btn-delete ascriptolutionredbutton" name='status' value="delete"><span>DELETE</span></a>
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
                                	<form action="/manage_gig" id="gigs_form" method="post">
                                        <?php echo csrf_field(); ?>
                                        <?php ($post = App\Models\Posts::select('gtitle','p1','PID','USERID','price','active','viewcount','rev')->where('USERID','=',auth()->user()->id)->get()); ?>
          
                                        <?php ($seo= App\Models\Categories::select('seo')->where('CATID','=',$user->category)->get()); ?>
                                        
                                        <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    
                                                                                                
                                    <div class="newscriptolution newscriptolutionnewcolor">
                                        <div class="newscriptolutionimg responsivescriptolutionimages">
                                            <a href="/<?php echo e($seo); ?>/<?php echo e($block->PID); ?>/<?php echo e($block->gtitle); ?>"><img src="/pics/<?php echo e($block->p1); ?>" alt="<?php echo e($block->gtitle); ?>" width="162" height="100"></a>
                                                                                        <br>
                                            <a href="/edit/post/<?php echo e($block->PID); ?>" class="btn-edit">[Edit]</a>
                                            
                                                                                        <div class="scriptolutionpaddingtop5"></div>
                                            <a href="/feature/<?php echo e($block->PID); ?>" class="ascriptolutiongreenbutton" style="color:#FFF">Feature</a>
                                                                                        
                                        </div>
                                        <div class="newscriptolutiondetails width480 scriptolutionpaddingleft15">
                                            <h3>
                                            	 <input class="checkbox approved" id="gig_" name="gig[]" type="checkbox" value="<?php echo e($block->PID); ?>">
                                                             <a href="/<?php echo e($seo); ?>/<?php echo e($block->PID); ?>/<?php echo e($block->gtitle); ?>"><?php echo e($block->gtitle); ?> 
                                                                     for <?php $value=$block->price;
                                                                            echo $value*159.05;
                                                                                ?></a></h3>
                                            <div>                                               <?php if($block->active==1) {$color="limegreen"; $status="Approved and Active"; }elseif($block->active==2) {$color="orange"; $status ="Suspended";}
                                                                                                        elseif($block->active==4) {$color="orange"; $status ="Suspended by Admin";}else {$color="orange"; $status ="Awaiting for Approval
                                                                                                        ";} ?>
                                            	                                                <div style='color:<?php echo e($color); ?>;' >Status: <?php echo e($status); ?></div>
                                                                                            </div>
                                            <h5><a href="/manage_orders?status=in_progress">Active Sales:</a><span class="open-orders">0</span></h5>
                                            <h5><a href="/manage_orders?status=in_progress">Complete Sales:</a>0</h5>
                                            <h5>Viewed: <?php echo e($block->viewcount); ?></h5>
                                            <h5>Revenue: <span class="gains">
                                                  ₹<?php echo e($block->rev); ?></span></h5>
                                                  <input type="submit" id="btn" hidden>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <input type="hidden" id="status_" value="">
                                    </form>
                                </td>
                            </tr>
														</tbody>
						</table>
					</div>
                    <script>

                        $(document).ready(function(){
                            $(a[name ="status"]).click(function(){
                                $("#status_").value($(a[name ="status"]).value());
                                $("#btn").click();
                            });
                            
                        });
                    </script>
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
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/user/myjobs.blade.php ENDPATH**/ ?>