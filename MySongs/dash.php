<?php 
include "start.php";
if($logedin){
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
	<center><img src="images/mysongslogo.jpg" width="100%"></center>
    <!-- Wrapper -->
    <div class="wrapper">
    	<!-- Scrollable -->
    	<div class="scrollable">
        <!-- Webbu Tiles -->
        <div class="webbutiles">
       
        <?php
		$get = mysql_query("select bi97n_community_users.avatar, bi97n_users.username from bi97n_community_users, bi97n_users where bi97n_community_users.userid=bi97n_users.id && bi97n_users.id='$uid' ");
		if(mysql_num_rows($get)>0){
			$avatar = mysql_result($get,0,'avatar');
			$username = mysql_result($get,0,'username');
		}else $avatar="";
		if($avatar == "")
			$avatar[2] = "default.png"; 
		else
			$avatar = explode('/',$avatar);
	?>
        
        <!-- Slider Tile Sample / Double Horizontal Tile Sample (double-box) = double H / Double v Box-->
        <div class='tile white double-box'>
		<center><a href='photo.php' ><img width='100%' src='avatars/<?php echo $avatar[2]; ?>'></img><h5><?php echo $username; ?></h5></a></center>
        </div>
        <!-- Slider Tile Sample End -->
        
        
        <!-- Blue Tile Sample -->
        <a class='tile TBlue iconmain' href='add.php'>
        <div class='boxContent'>
            <img src='images/demo_content/sampleicons/addsong.png' class='resimgicon' alt=''/>
		</div>
            <!-- Tile Name -->
            <div class='tilename'>
                <div class='name'>&nbsp;</div>
            </div>
        </a>
        <!-- / Blue Tile Sample -->
		
		<!-- Dark Green Tile Sample -->
        <a class='tile TOrange iconmain' href='rhyme.html'>
        <div class='boxContent'>
            <!-- Tile Icon -->
            <img src='images/demo_content/sampleicons/findrhymes.png' class='resimgicon' alt=''/>
        </div>    
        <div class='tilename'>
        	<!-- Tile Name -->
            <div class='name'>&nbsp;</div>
        </div>
        </a>
        <!-- / Dark Green Tile Sample -->
        

                <!-- Dark Green Tile Sample -->
        <a class='tile TDarkRed iconmain' href='change_pass.php'>
        <div class='boxContent'>
            <!-- Tile Icon -->
            <img src='images/demo_content/sampleicons/updateinfo.png' class='resimgicon' alt=''/>
        </div>
        <div class='tilename'>
        	<!-- Tile Name -->
            <div class='name'>&nbsp;</div>
        </div>
        </a>
        <!-- / Dark Green Tile Sample -->
		
		
		<!-- Dark Green Tile Sample -->
        <a class='tile TDarkGreen iconmain' href='kick.php'>
        <div class='boxContent'>
            <!-- Tile Icon -->
            <img src='images/demo_content/sampleicons/logout.png' class='resimgicon' alt=''/>
        </div>
        <div class='tilename'>
        	<!-- Tile Name -->
            <div class='name'>&nbsp;</div>
        </div>
        </a>
        <!-- / Dark Green Tile Sample -->
		
		

<?php
	$get = mysql_query("select * from songs where uid = '$uid'");
	for($c=0;$c<mysql_num_rows($get);$c++){
		$id = mysql_result($get,$c,'id');
		$title = mysql_result($get,$c,'title');
?>
    <!-- Dark Purple Tile Sample -->
        <a class='tile TDarkPurple iconmain' href='view.php?id=<?php echo $id; ?>'>
        <div class='boxContent'>
        	<!-- Tile Icon -->
            <img src='' class='resimgicon' alt=''/>
        </div>
        
        <div class='tilename'>
        	<!-- Tile Name -->
            <div class='name'><?php echo $title; ?></div>
        </div>
        </a>
<?php
	}
?>
       </div>
       <!-- / Webbu Tiles -->
       </div>
       <!-- / Scrollable -->
    </div>
	<!-- / Wrapper -->
    
    
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
}else kick();
include "end.php";
?>
