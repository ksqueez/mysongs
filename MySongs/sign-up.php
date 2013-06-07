<!DOCTYPE html>
<html lang="en"  class="body-error"><head>
    <meta charset="utf-8">
    <title>Day Login Form - Sign Up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/login.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

    
  </head>

  <body style='background-color:black;'>

        <div id="wrapper">
            <div id="login">
                <form action="signup.php" class="form-login" method="post"> 
                    <div class="content-login">
                        <div class="header">
                            <span><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Up</center></span>

                        </div>
                        
                        <div class="avatar"><img src="images/avatar.png" alt=""></div>
                        
                        <div class="inputs">
<?php if(isset($_GET['error'])) if ($_GET['error']==1) echo"<center><h4 style='color:red'> Username already in use</h4></center>"; elseif($_GET['error']==2) echo "<center><h4 style='color:red'>Email already in use</h4></center>"; else echo"<center><h4 style='color:red'>Passwords didn't Match</h4></center>"; ?>
                            <input name="name" type="text" required placeholder="Name" />
                            <input name="username" type="text" required placeholder="Username" />
                            <input name="email" type="email" required placeholder="Email" />

                            <input name="password" type="password" required placeholder="Password" />
                            <input name="password2" type="password" required placeholder="Retype password" />
                        </div>
                        
                        <div class="link-1">
                            <input type="checkbox" id="c2" name="cc" checked="checked" />
                            <label for="c2"><span></span> I agree to the Terms of Service?</label>
                        </div>
                        <div class="clear"></div>
                        
                        <div class="button-login"><input type="submit" value="Sign Up"></div>
                    </div>
                    
<br><br>
                    
                   
                </form>

            </div>
     
       <div class="clear"></div>  
    <div class="link-to-page">Have an account? <a href="index.php">Sign in now!</a></div>      
    </div>
    
  </body>
</html>

