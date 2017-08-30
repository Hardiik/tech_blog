<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Member Area</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="{{url('/Registration')}}" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required name="lname" autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required name="email" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span  class="req">*</span>
            </label>
            <input type="password"required name="pwd" autocomplete="off"/>
          </div>
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <button type="submit" class="button button-block" onclick="demo.showNotification('bottom','left')">Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="{{ url('/Login')}}" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
            </div>
          
             <div class="field-wrap">
             <label>
              Password<span class="req">*</span>
             </label>
             <input type="password" name="password" required autocomplete="off"/>
             </div>
             <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="submit" class="button" value="Login" button-block"/>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</body>
</html>
