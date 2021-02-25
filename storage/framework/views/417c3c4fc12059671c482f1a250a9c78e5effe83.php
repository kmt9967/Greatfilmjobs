
<?php $__env->startSection('content'); ?>

<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 gray">
		<div class="inner-wrapper">
			<div class="clear"></div>
			<div class="left-side">
				<div class="whiteBox twoHalfs padding15 scriptolutionshop">
					<h1>Manage Sales</h1>
                    <h4>Track and manage your work</h4>
					<?php 
					function status($x) {
  
						$post = App\Models\Orders::where('status','=',$x)->get();
						return $post->count();
					}
					?>
					<div class="whiteBox inside">
						<div class="block inside">
							<span class="number"><a href="/manage_orders?s=active&amp;b=id&amp;a=desc"><?php echo e(status(1)); ?></a></span>
							<span class="descr">Active Orders</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="/manage_orders?s=delivered&amp;b=id&amp;a=desc"><?php echo e(status(4)); ?></a></span>
							<span class="descr">Delivered</span>
						</div>
						<div class="block inside">
							<span class="number"><a href="/manage_orders?s=completed&amp;b=id&amp;a=desc"><?php echo e(status(5)); ?></a></span>
							<span class="descr">Completed</span>
						</div>
						<div class="block inside last">
							<span class="number"><a href="/manage_orders?s=cancelled&amp;b=id&amp;a=desc"><?php echo e(status(2)+status(3)+status(7)); ?></a></span>
							<span class="descr">Cancelled</span>
						</div>
					</div>
					<div class="db-main-table">
						<table>
							<thead>
								<tr>
									
									<td colspan="2" style="text-align:left;"><a href="/manage_orders">Order</a></td>
									<td><a href="/manage_orders">Created</a></td>
									<td><a href="/manage_orders">Status</a></td>
								</tr>
							</thead>
							<tbody>
								<?php
									$stat=array(1=>"Active", 2=>"Cancelled By You", 3=>"Cancelled By Buyer", 7=>"Cancelled by Admin" , 
												5=>"Completed" , 4=>"Delivered / Review Pending" , 0=>"Late");
										$color=array(1=>"blue", 2=>"orange", 3=>"red", 7=>"red" , 
											5=>"green" , 4=>"pink" , 0=>"red");
											?>
								<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									
								<?php ($status=$x->status); ?>
								
								<?php ($post = App\Models\Posts::select('gtitle','active')->where('PID','=',$x->PID)->get()); ?>
								
								<td class="status-star">
									<a href="/track/<?php echo e($x->OID); ?>">#<?php echo e($x->OID); ?></a>
								</td>
								<td class="ellipsis-wrap">
									<div class="ellipsis"> 
										<a href="/track/<?php echo e($x->OID); ?>"><?php echo e($post[0]->gtitle); ?></a>
									</div>
								</td>
										<td><a href="/manage_orders/<?php echo e($x->PID); ?>" ><?php $date=($x->time_added)+ (7 * 24 * 60 * 60); echo date('d/M/y',$date); ?></a></td>
										<td  ><div style="border-radius: 3px;  background-color:<?php echo e($color[$status]); ?>;"><a href="/manage_orders/<?php echo e($x->PID); ?>" style=" font-weight: bold; color:white"><?php 
										
										
										echo $stat[$status];
										
										?></a></div></td>
									</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								<tr>
								<?php if(!isset($orders)): ?>
								
								<td colspan="4">
                                No orders available for display.
                                </td>
								<?php endif; ?>
                            </tr>
                            							</tbody>
						</table>
					</div>
					<div class="clear"></div>				
				</div>
			</div>
			<?php echo $__env->make('layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</div>    
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/user/manage_order.blade.php ENDPATH**/ ?>