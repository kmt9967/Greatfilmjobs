


<?php $__env->startSection('content'); ?>


<div class="bodybg scriptolutionpaddingtop15 scriptolutionloginpage">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth482">
		<div class="inner-wrapper scriptolutionwidth442">
			<div class="left-side scriptolutionwidth442">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth400">
					<h1>Join</h1>
                    <div id="scriptolutionForm">
                        <form action="<?php echo e(route('register')); ?>" method="post">  
                            <?php echo csrf_field(); ?>
                            <div class="form-entry">
                                <label>Email</label>
                                <input class="text" id="email" name="email" size="30" type="text" value="" />
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-entry">
                                <label>Choose Username</label>
                                <input class="text username" id="username" maxlength="15" name="username" size="15" type="text" value="" />
                                <div id="status" class="username-validation"></div>
                                <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-entry">
                                <label class="style3">Choose Password</label>
                                <input class="text style1" id="password" name="password" size="30" type="password" value="" />
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                                                        <div class="form-entry">
                                <label class="style3">Are You Human?</label>
                                <script type="text/javascript" src="http://api.solvemedia.com/papi/challenge.script?k=rxM0Add9QYj6fbcgs58nL7-ivKWj8HqF"></script>

	<noscript>
  		<iframe src="http://api.solvemedia.com/papi/challenge.noscript?k=rxM0Add9QYj6fbcgs58nL7-ivKWj8HqF" height="300" width="500" frameborder="0"></iframe><br/>
  		<textarea name="adcopy_challenge" rows="3" cols="40"></textarea>
  		<input type="hidden" name="adcopy_response" value="manual_challenge"/>
	</noscript>
                            </div>
                                                                                    
                            <div class="form-entry">
                                <input type="submit" value="Submit" class="scriptolutionbluebutton" />
                                <input type="hidden" name="jsub" id="jsub" value="1" />
                                <div class="remember">
                                    <input class="checkbox" id="user_terms_of_use" name="user_terms_of_use" type="checkbox" value="1"  />
                                    <a href="/terms_of_service" target="_blank" style="text-decoration:none">I agree to the terms of service</a>
                                </div>
                            </div>
                            <input type="hidden" name="r" value="" />
                                                    </form>
                    </div>
					<div class="clear"></div>
				</div>
			</div>			
			<div class="clear"></div>
			<div id="scriptolutionFormLinks">
                <div class="scriptolutionloginsignuplink">
                    <a href="/login">Already a member? Sign In</a>
                </div>
            </div>
		</div>   
	</div>
</div>

<div class="social-wrap" align="center">
    <a href="https://www.facebook.com/dialog/permissions.request?app_id=1750802685183844&display=page&next=/&response_type=code&fbconnect=1&perms=email"><span>login via facebook</span></a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/member/signup.blade.php ENDPATH**/ ?>