

@extends('layout.header')

@section('content')
<div class="bodybg scriptolutionpaddingtop15 scriptolutionloginpage">
	<div class="whitebody scriptolutionpaddingtop30 scriptolutionwidth482">
		<div class="inner-wrapper scriptolutionwidth442">
			<div class="left-side scriptolutionwidth442">
				<div class="whiteBox twoHalfs padding15 scriptolutionwidth400">
					<h1>Login</h1>
                    <div id="scriptolutionForm">
                        <form action="/login" method="post">  
                            @csrf
                            <div class="form-entry">
                                <label for="email">Email</label>
                                <input  type="email" class="text" id="email"  name="email"  tabindex="1"  value="" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                            <div class="form-entry">
                                <div class="form-label">
                                    <label for="password">Password</label>
                                    <span> <a href="/forgotpassword" style="text-decoration:none">forgot password</a></span>
                                   
                                </div>
                                <input class="text" id="password" name="password" size="30" tabindex="2" type="password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
@endsection
