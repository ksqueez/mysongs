<?php
<html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
    <head>
    <meta charset="utf-8"><!--[if IE]> <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>MySongs - Rhyming Dictionary</title>
    <meta content="Safe way to save your songs on your phone" name="description">
    <meta content="songs music" name="keywords">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    
    <!--[if IE]><link rel="stylesheet" type="text/css" href="css/font-awesome-ie7.css"><![endif]-->
    
    <!-- Shortcut Logos -->
    <link href="images/demo_content/metroentrance1.jpg" rel="apple-touch-icon-precomposed" sizes="114x114"><!-- Home logo -->
    <link href="images/demo_content/metroentrance57.jpg" rel="shortcut icon"><!-- Fav icon logo-->
    <!-- /Shortcut Logos -->
    
    <!-- Style -->
    <link href='css/style.css' id='styles-css' media='all' rel='stylesheet' type='text/css'>
    <!-- / Style -->
    
    <!-- Scripts -->
	<script src='http://code.jquery.com/jquery.min.js' type='text/javascript'></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src='js/bootstrap.min.js' type='text/javascript'></script>
    <script src='js/spinner.js' type='text/javascript'></script>
    <script src='js/jquery.mobile.customized.min.js' type='text/javascript'></script>
    <script src='js/vendor/modernizr-2.6.1.min.js' type='text/javascript'></script>
    <!-- / Scripts -->
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
	
    <!-- Wrapper -->
    <div class="wrapper">
    	<!-- Scrollable -->
    	<div class="scrollable">
            <header>
                <h1>Rhyming Dictionary</h1><a class="back-button linkbut" href="javascript:history.back(-1)"></a>
    
                <div class="line"></div>
            </header>
            
            <!-- Middle Content -->
            <div class="MiddleContent">
			
    <form action="javascript:RhymeBrainSubmit()">
    <input type=text id="RhymeBrainInput">
    <input type=submit value="Rhyme">
	</form>
	<script type="text/javascript">
    var RhymeBrainMaxResults = 50;
	</script>
	<script type="text/javascript" src="http://rhymebrain.com/external.js"></script>
	Rhyme results are provided by <a href="http://rhymebrain.com">RhymeBrain.com</a>

            </div>
            <!-- / Middle Content -->
        </div>
        <!-- / Scrollable -->
    </div>
    <!-- / Wrapper -->
    
	<script src='js/loadanim.js' type='text/javascript'></script><!-- Loading Animation -->
	<script src='js/main.js' type='text/javascript'></script><!-- Main Styles -->
	<script src='js/vendor/zepto.min.js' type='text/javascript'></script>
    
</body>
</html>
?>