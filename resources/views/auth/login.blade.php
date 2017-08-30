<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>MemberArea</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/login-style.css">
	  

  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
          <form  method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
	<div class="sign-in-htm">

        <div class="group">
		     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			    <label for="user" class="label">User ID(Email)</label>
				<input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required autofocus>
            	</div>
                @if ($errors->has('email'))
                <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
                </span>
                 @endif
            </div>
        

	   <div class="group">
	          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  
            		<label for="pass" class="label">Password</label>
					<input id="password" type="password" class="input" name="password" required>
				     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
        	 </div>
        </div>


		<div class="group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                 </div>
             </div>
        </div>
				
		<div class="group">
					<input type="submit" class="button" value="Sign In">
		</div>
	</form>
		<div class="hr"></div>
			<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
			</div>
	</div>

    <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

			<div class="sign-up-htm">
			    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
				  <div class="group">                        
					<label for="user" class="label" >Username</label>
					   <input id="name" type="text" class="input" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
				  </div>
			   </div>
				
			<div class="group">
                 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">   
					<label for="pass" class="label" >Email Address</label>
			         <input id="email" type="email" class="input" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                  </div>
			</div>

			<div class="group"> 
			    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">         
					<label for="pass" class="label" >Password</label>
				       <input id="password" type="password" class="input" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                           
				</div>
			</div>

			
			<div class="group"> 
			    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">         
					<label for="password-confirm" class="label" >Confirm Password</label>
				       <input id="password-confirm" type="password" class="input" name="password_confirmation" required>    
				</div>
			</div>

			
			
			
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
		  </form>			
			  <div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			 </div>
		</div>
	</div>
</div>
  
  
</body>
</html>
