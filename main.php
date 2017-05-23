<!DOCTYPE html>
<?php
	$appid = "web592group03.appspot.com";
	$page = $_GET['p'];
	if($page=='') $page='main';
		$title = $page;
	function panel_include($title,$file,$ptype='default'){
		echo "<div class='panel panel-$ptype'>";
		echo "<div class='panel-heading'>$title</div>";
		echo "<div class='panel-body'>";
		if(file_exists($file)){
			include($file);
		}else{
			echo "ไม่พบไฟล์ $file";
		}
		echo "</div>";
		echo "</div>";
	}
	use google\appengine\api\cloud_storage\CloudStorageTools;
	function userpic($uid){
		global $appid;
		$userpic="gs://$appid/{$uid}.jpg";
		if(!file_exists($userpic)){
			return "user.png";
		}
		return CloudStorageTools::getImageServingUrl($userpic,["size"=>50]);
	}
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NONAME ENTERTAINMENT!</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
	<link rel="stylesheet" href="css/main.css">
    <link href="css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/icomoon-social.css">
	<link rel="stylesheet" href="fonts/font-awesome.min.css">
	
	<script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        
      <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
		<a class="navbar-brand"alt="Noname Entertainment"><img src="logo.png"></a>
            </div>

            <div class="collapse navbar-collapse">
            </div>
        </div>
		<! --/container -->
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(https://github.com/Inthiraporn/web592group03/blob/master/img/slides/1.jpg?raw=true)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                    <h2 class="animation animated-item-1">Welcome to<br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NONAME Entertainment!</h2>
                                <br>
								<br>
								<center><button type="button" class="btn btn-default" data-dismiss="modal"><a href="G03.php"><i class="fa fa-times"></i><h4>เข้าสู่เว็บไซต์</h4></button></center>
								</div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                
        
			

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>
