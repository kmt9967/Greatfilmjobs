<?php $__env->startSection('content'); ?>
<div class="bodybg scriptolutionpaddingtop15 scriptolutionloginpage">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth482">
		<div class="inner-wrapper scriptolutionwidth442">
			<div class="left-side scriptolutionwidth442">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth400">
					<h1>Login</h1>
                    <div id="scriptolutionForm">
                        <form action="/login" method="post">  
                            <?php echo csrf_field(); ?>
                            <div class="form-entry">
                                <label for="email">Email</label>
                                <input  type="email" class="text" id="email"  name="email"  tabindex="1"  value="" />
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
                                <div class="form-label">
                                    <label for="password">Password</label>
                                    <span> <a href="/forgotpassword" style="text-decoration:none">forgot password</a></span>
                                   
                                </div>
                                <input class="text" id="password" name="password" size="30" tabindex="2" type="password" />
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
                            <div class="row">
                                <input type="submit" value="Sign In" class="scriptolutionbluebutton" />
                                <input type="hidden" name="jlog" id="jlog" value="1" />
                                <div class="remember">
                                    <input class="checkbox" id="l_remember_me" name="l_remember_me" type="checkbox" value="1" />
                                    <label for="l_remember_me">Remember me</label>
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
                    <a href="/signup">Not a member? Register Now</a>
                </div>
            </div>
		</div>   
	</div>
</div>
<div id="scriptolutionnobottom">
    <div class="centerwrap footertop">
        <div class="footerbg scriptolutionfooter482"></div>
    </div>
</div>
<div class="social-wrap" align="center">
    <a href="https://www.facebook.com/dialog/permissions.request?app_id=1750802685183844&display=page&next=/&response_type=code&ffbconnect=1&perms=email"><span>login via facebook</span></a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\greatfilmjob\resources\views/auth/login.blade.php ENDPATH**/ ?>