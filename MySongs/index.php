<?php 
include "start.php";
//require_once('browser-detective.php');
//detect_browser('http://collaborationkingdom.com/dash',false,false,false,true,false,true,false,true,true,true,true);
//check for already loged in users and redirect 
if(isset($_SESSION['user_id'])) echo "<meta http-equiv='Refresh' content='0; url=dash.php'>";
else{
?>
<!DOCTYPE html>
<html lang="en"  class="body-error"><head>
    <meta charset="utf-8">
    <title>MySongs By CollaborationKingdom.com</title>
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
  <!-- Loading Message -->
    <div class="spinnerbg">
    <div id="spinner">
        <span id="first" class="ball"></span>
        <span id="second" class="ball"></span>
        <span id="third" class="ball"></span>
    </div>
    </div>

    <!-- /Loading Message -->

        <div id="wrapper">

                <form action="login.php" class="form-login" method="post"> 
  
                        <div class="header">
                            <br><center>Sign in</center>
                        </div>
                        
                        <div class="avatar"><img src="images/avatar.png" alt=""></div>
                        
                        <div class="inputs">
                            <input name="username" type="text" required placeholder="Username" />
                            <input name="password" type="password" required placeholder="Password" />
                
                        
                        <div class="link-1">
                            <input type="checkbox" id="c2" name="cc" checked="checked" />
                            <label for="c2"><span></span> Remember me</label>
                        </div>
                        <div class="link-2"><a href="forgot-password.html">Forgot Password?</a></div>
                        <div class="clear"></div>
                        
                        <div class="button-login"><input type="submit" value="Sign in"></div><br>
                    </div>
                    
                   <!-- <div class="footer-login">
                       <ul class="social-links">
                      	  <li class="twitter"><a href="#"><span>twitter</span></a></li>
                          <li class="google-plus"><a href="#"><span>google</span></a></li>
                          <li class="facebook"><a href="#"><span>facebook</span></a></li>
                       </ul>
                    </div>-->
                    
                   
                </form>

     <div class="clear"></div>  
   <div class="link-to-page">Don't  have an account? <a href="sign-up.html">Sign up now!</a></div>   
    </div>
<br><br><br>
    
	<script src='js/loadanim.js' type='text/javascript'></script><!-- Loading Animation -->
	<script src='js/main.js' type='text/javascript'></script><!-- Main Styles -->
	<script src='js/vendor/zepto.min.js' type='text/javascript'></script>
    
    <!-- Add home bubble -->
    <link href='css/add2home.css' id='add2home-css' media='all' rel='stylesheet' type='text/css'>
    <script src='js/add2home.js' type='text/javascript'></script>
    <!-- / Add home bubble -->
  </body>
</html>
<?php 
}
?>

