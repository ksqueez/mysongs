<!DOCTYPE html>
<html lang="en"  class="body-error"><head>
    <meta charset="utf-8">
    <title>Day Login Form - Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/login.css" rel="stylesheet">
	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<style>
body{
 background-color: black;
}
</style>
    
  </head>

  <body>

        <div id="wrapper">

                <form action="login.php" class="form-login" method="post"> 
  
                        <div class="header">
                            <span>&nbsp;&nbsp;Sign in</span>
                        </div>
                        
                        <div class="avatar"><img src="images/avatar.png" alt=""></div>
                        
                        <div class="inputs">
                            <input name="username" type="text" required placeholder="Username" />
                            <input name="password" type="password" required placeholder="Password" />
                
                        
                        <div class="link-1">
                            <!--<input type="checkbox" id="c2" name="cc" checked="checked" />
                            <label for="c2"><span></span> Remember me</label>-->
                        </div>
                        <!--<div class="link-2"><a href="forgot-password.html">Forgot Password?</a></div>-->
                        <div class="clear"></div>
                        
                        <div class="button-login"><input type="submit" value="Sign in"></div>
                    </div>
                    
                    <div class="footer-login">
                       <ul class="social-links">
                      	  <li class="twitter"><a href="#"><span>twitter</span></a></li>
                          <li class="google-plus"><a href="#"><span>google</span></a></li>
                          <li class="facebook"><a href="#"><span>facebook</span></a></li>
                       </ul>
                    </div>
                    
                   
                </form>

     <div class="clear"></div>  
    <div class="link-to-page">Don't  have an account? <a href="sign-up.html">Sign up now!</a></div>      
    </div>
    
  </body>
</html>

