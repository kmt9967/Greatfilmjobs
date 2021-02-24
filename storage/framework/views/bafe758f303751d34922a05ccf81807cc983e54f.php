
<?php $__env->startSection('content'); ?>
<div class="bodybg scriptolutionpaddingtop15">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth842">
		<div class="inner-wrapper scriptolutionwidth842 scriptolutioneditpages">
			<div class="left-side scriptolutionwidth842" style="margin-top: 10px !important;">
            	
				<div class="whiteBox twoHalfs padding0 noborder scriptolutionwidth800">
                    <div id="scriptolutionPostForm"> 
                        <form action="/settings" enctype="multipart/form-data" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="scriptolutionpadding20">
                            	<h1>Settings</h1>
                                <div class="form-entry">
                                
                            		<?php echo e($user->username); ?>: Your public profile page is here: 
                                	<a style="color: #45b5dc;" href="/user/<?php echo e($user->username); ?>"><?php echo ($_SERVER['SERVER_NAME']); ?>/user/<?php echo e($user->username); ?></a>
                                </div>
                                <div class="scriptolutionclear"></div>
                                
                                
                                
                                 <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="fname">Full Name</label>
                                    </div>
                                    <div class="column-r">
                                    	<input class="text" id="fname" name="fname" size="30" type="text" value="<?php echo e($user->fullname); ?>" />
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="email">Email</label>
                                    </div>
                                    <div class="column-r">
                                    	<input class="text" id="email" name="email" size="30" type="text" value="<?php echo e($user->email); ?>" />
                                    	                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                  
                                  
                                                                    <div class="form-entry">
                                  	<div class="column-l">
                                      <label class="editgigformtitle" for="paypal">Paypal Account Email</label>
                                    </div>
                                    <div class="column-r">
                                    	<input class="text" id="paypal" name="paypal" size="30" type="text" value="<?php echo e($user->pemail); ?>" />
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>
                                                                    
                                <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="country">Country</label>
                                    </div>
                                    <div class="column-r">
                                      
                                      <?php echo $__env->make('data.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>

                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="details">Something about you</label>
                                    </div>
                                    <div class="column-r">
                                      <textarea class="text" cols="74" id="details" name="details" rows="6"><?php echo e($user->description); ?></textarea>
                                    </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>

                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="scriptolutionuserslogan">Profile Slogan</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="scriptolutionuserslogan" name="scriptolutionuserslogan" size="30" type="text" value="<?php echo e($user->scriptolutionuserslogan); ?>" />
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  
                                                                    <div class="form-entry">
                                  		<div class="column-l">
                                          <label class="editgigformtitle">Profile Picture</label>
                                          <br />
                                          <br />
                                          <img src="/images/membersprofilepic/<?php echo e($user->profilepicture); ?>" width="150" height="100" />
                                        </div>
                                        <div class="column-r">
                                          <div class="image-info">
                                            <input id="gphoto" name="gphoto" size="30" type="file" class="text" />
                                            <ul class="image-tip">
                                              <li>Acceptable formats: jpeg, jpg, gif and png</li>
                                            </ul>
                                          </div>
                                        </div>
                                  </div>
                              	  <div class="scriptolutionclear"></div>                                
                              </div>

                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="Update" class="scriptolutionbluebutton" />
                                <input type="hidden" name="subform" value="1" />
                                <input type="hidden" name="scriptolutiontoken" value="3d06979baa7303286bf9cc5c6803167f" />
                            </div>
                        </form>
                            
                            
                            
                            
                            <form action="settings" class="reset-form" id="edit_pass_673" method="post">
                              <?php echo csrf_field(); ?>
                            <div class="scriptolutionpadding20">
                            	<h1>Change Password</h1>
                				<div class="scriptolutionclear"></div>
                                <div class="form-entry1">
                                    
                                </div>
                                
                                <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="pass">New Password</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="pass" name="pass" size="30" type="password" />
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                  
                                  <div class="form-entry">
                                    <div class="column-l">
                                      <label class="editgigformtitle" for="password">Confirm New</label>
                                    </div>
                                    <div class="column-r">
                                      <input class="text" id="pass2" name="pass2" size="30" type="password" />
                                    </div>
                                  </div>
                                  <div class="scriptolutionclear"></div>
                                
                            </div>
                            <div class="row form-entry scriptolutionpadding20" align="center">
                                <input type="submit" value="Change" class="scriptolutionbluebutton" />
                            </div>
                            <input type="hidden" name="subpass" value="1" />
                            <input type="hidden" name="scriptolutiontoken" value="3d06979baa7303286bf9cc5c6803167f" />
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
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/user/settings.blade.php ENDPATH**/ ?>