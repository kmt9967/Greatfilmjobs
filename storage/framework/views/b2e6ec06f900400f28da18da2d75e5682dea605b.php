
<?php $__env->startSection('content'); ?>
<div class="userbanner">
    <div class="centerwrap relative">
    	<div class="userbannertext">
        	<h3><?php echo strtoupper($user->username); ?> </h3>
            <h2><?php echo e($user->scriptolutionuserslogan); ?></h2>
            <div class="find-userrating">                
                <img src="/images/scriptolution_star_big_off.png"><img src="/images/scriptolution_star_big_off.png"><img src="/images/scriptolution_star_big_off.png"><img src="/images/scriptolution_star_big_off.png"><img src="/images/scriptolution_star_big_off.png">
                <div class="clear"></div>
            </div>
            <div class="usertopnavbg"></div>
        </div>
    </div>
</div>

<div class="bodybg">
	<div class="bodyshadow">
        <div class="whitebody">
        	
            
            <div class="paddinguser20">
                <div class="profile-image">
                                        <img alt="fatrin99" src="/images/membersprofilepic/<?php echo e($user->profilepicture); ?>" width="200" height="150">
                </div>
                
                <div class="scriptolutionsmain1">
                    <div class="scriptolution-jobsbyuser">About <?php echo e($user->username); ?></div>
                    <div class="pfloatleft">
                    	<?php echo e($user->description); ?>

                        <div class="clear" style="padding-bottom:20px;"></div>  
                                                <a class="agreenbutton" href="/conversations/<?php echo e($user->username); ?>">Contact</a>                                              
                                            </div>
                    <div class="otherinfo">
                        
                    	<i class="fa fa-globe"></i> Country:  <?php echo $__env->make('data.country_array', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                            <?php echo e($GLOBALS["country"][$user->country]); ?>

                        
                        <br>
                        <i class="fa fa-clock-o"></i> member since: <?php echo e($user->addtime); ?>

                                                                        <br>
                    </div>
                </div>
            </div>
                 
                 
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser">Jobs by <?php echo e($user->username); ?></div>
                <div class="cusongslist">
                    <?php ($post = App\Models\Posts::select('gtitle','p1','PID','USERID','price')->where('USERID','=',auth()->user()->id)->get()); ?>
          
                    <?php ($seo= App\Models\Categories::select('seo')->where('CATID','=',$user->category)->get()); ?>
                    <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $block): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    
                     <div class="cusongsblock ">
                            <div class="songperson">
                            	<a href="/<?php echo e($seo); ?>/<?php echo e($block->PID); ?>/<?php echo e($block->gtitle); ?>"><img src="/pics/<?php echo e($block->p1); ?>" alt="<?php echo e($block->gtitle); ?>" width="214" height="132"></a>
                                    </div>
                            <div class="price 222">
                                                            <?php $value=$block->price;
                                                             echo $value*159.05;
                                                            ?>
                                                            </div>
                            <p>
                            	<a href="/<?php echo e($seo); ?>/<?php echo e($block->PID); ?>/<?php echo e($block->gtitle); ?>"><?php echo e($block->gtitle); ?> 
                                    960</a>
                            </p>                            
                                                        <div class="userdata">
                                <div class="userimg"><a href="/user/<?php echo e($user->username); ?>"><img width="25px" height="25px" src="/images/membersprofilepic/thumbs/<?php echo e($user->profilepicture); ?>" alt="fatrin99"></a></div>
                                <div class="username"><a href="/user/<?php echo e($user->username); ?>"><?php echo e($user->username); ?></a></div>
                                <div class="otherdetails">
                                    <span class="usercount"></span>
                                    <ul>
                                    	<li><a href="#"><img src="/images/scriptolution_user_rate_blank.png"></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_blank.png"></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_blank.png"></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_blank.png"></a></li><li><a href="#"><img src="/images/scriptolution_user_rate_blank.png"></a></li>
                                    </ul>
                                    <span class="flag"><span class="country <?php echo e($user->country); ?>" title="<?php echo e($GLOBALS["country"][$user->country]); ?>"></span></span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>             
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            
            <div class="clear" style="padding-bottom:20px;"></div> 
            <center>
            <div class="scriptolutionmax375">
            
            </div>
            </center>
            <div class="clear" style="padding-bottom:20px;"></div>                    

            <div class="cusongs" style="padding-top:10px;">
                <div class="scriptolution-jobsbyuser">Reviews of <?php echo e($user->username); ?></div>
                <div class="cusongslist">
                
                    <div class="scriptolutionuserreviews">
                    	                    </div>   
                    
                    <div class="scriptolutionsecondad">
                    	<center>
                        
                        </center>
                    </div>
                                 
                    <div class="clear"></div>
                </div>
                <div class="clear" style="padding-bottom:20px;"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/user/profile.blade.php ENDPATH**/ ?>