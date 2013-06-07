<?php
require_once('browser-detective.php');
detect_browser('http://collaborationkingdom.com/dash',false,false,false,true,false,true,false,true,true,true,true);
?>

<?php 
include "start.php";
//check for already loged in users and redirect 
if(isset($_SESSION['user_id'])) echo "<meta http-equiv='Refresh' content='0; url=dash.php'>";
else{
?>

<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->
    <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
    
    <!-- Loading Message -->
    <div class="spinnerbg">
    <div id="spinner">
        <span id="first" class="ball"></span>
        <span id="second" class="ball"></span>
        <span id="third" class="ball"></span>
    </div>
    </div>

    <!-- /Loading Message -->
<table width='100%'>
<tr><td align='center'><br />
<center><img src="images/mysongslogo.jpg" width="100%"></center>
<div style="background-color: green; border:1px solid #33FF22; width:300px;">
	<form method='POST' action='login.php'>
	<table>
	<tr><td colspan='2' align='center'><h1>MySongs</h1><p style="font-size:8px; margin-top: -10px;">(By Collaborationkingdom.com)</p><h4>Login</h4><hr style="margin-top: -8px;" /></td></tr>
	<?php
	if(isset($_GET['error'])) echo"<tr><td colspan='2' align='center'><div style='background-color:pink;color:red;border:1px solid red;'>".$_GET['error']."</div><br /></td></tr>";
	?>
	<tr><td><label>Username: </label></td><td><input type='text' name='username' spaceholder="Username / Email" /></td></tr>
	<tr><td><label>Password: </label></td><td><input type='password' name='password' spaceholder='******' /></td></tr>	
	<tr><td align='center' colspan='2'><input type='submit' value='Login' /></td></tr>
	</table>	
	</form>
<br />
</div>
</td></tr>
</table>
    
	<script src='js/loadanim.js' type='text/javascript'></script><!-- Loading Animation -->
	<script src='js/main.js' type='text/javascript'></script><!-- Main Styles -->
	<script src='js/vendor/zepto.min.js' type='text/javascript'></script>
    
    <!-- Add home bubble -->
    <link href='css/add2home.css' id='add2home-css' media='all' rel='stylesheet' type='text/css'>
    <script src='js/add2home.js' type='text/javascript'></script>
    <!-- / Add home bubble -->
    
    
    <!--  Google Analytic Code for use
    <script>
    var _gaq=[['_setAccount','0'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    -->
    
</body>
</html>
<?php
}
include "end.php";
?>
