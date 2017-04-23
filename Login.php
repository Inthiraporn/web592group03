<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
				<img src="logo.png"><a class="navbar-brand" href="main.php" alt="Noname Entertainment"></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="main.php">Home</a></li>
                    <li><a href="contact-us.html">Contact</a></li>
					<li><a href="#a1">About Us</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <!--/#main-slider-->

		<!-- Our Clients -->
	    <div class="section">
	    	<div class="container">
			
				<div class="section-title">
				<br>
				<br>
				<br>
				<br>
				<br>
				<a name = "#"><h1>Login or Register</h1></a>
				</div>
                <!doctype html> 
<!doctype html> 
<?php
error_reporting(0);
$appid = "web592group03.appspot.com";
$page  = $_GET['p'];
if($page=='') $page='Login';
$title = $page;
function panel_include($title,$file,$ptype='default'){
echo "<div class='panel panel-$ptype'>";
echo "<div class='panel-heading'>$title</div>";
echo "<div class='panel-body'>";
if(file_exists($file)){
include($file);
}else{
	echo "ไมพ่บไฟล์$file ";
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
		return CloudStorageTools::getImageServingUrl($userpic,["size"=>200]);
		} 
 
				 ?>
				 <html lang="en">
				 <head>
				 <meta charset="UTF-8">
				 <title><?= $page ?> </title>
				 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
				 <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
				 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> 
				 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> 
 
 </head>
 <body role="document">
 <div class="container">
 <div class="col-sm-3">
 <?php panel_include("User","user.php");
 ?>
 <?php panel_include("Menu","G03_menu.php");
 ?> </div> <div class="col-sm-9">
 <?php panel_include($title,"G03_body.php" ,"primary"); ?>
 </div>
 </div>
 </body>
 </html> 
 
			<div class="section">
			<div class="container">
				<div class="section-title">
				<br>
				<br>
				<br>
				<br>
				<a name="a1"><h1>ABOUT US</h1>
				</div>
			</div>
		</div>
<div class="section">
	    	<div class="container">
				<div class="row">
					<!-- Team Member -->
					<div class="col-md-3 col-sm-6">
						<div class="team-member">
							<!-- Team Member Photo -->
							<div class="team-member-image"><img src="https://github.com/Inthiraporn/web592group03/blob/master/team/1.jpg?raw=true" alt="Name Surname"></div>
							<div class="team-member-info">
								<ul>
									<!-- Team Member Info & Social Links -->
									<li class="team-member-name">
										Kanjana Saengrit
										<!-- Team Member Social Links -->
										<span class="team-member-social">
										<br>
											<a href="https://www.facebook.com/Bas.Kanjana.Saengrit?fref=ts"><i class="icon-facebook"></i></a>
										</span>
									</li>
									<li>Web Developer</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- End Team Member -->
					<div class="col-md-3 col-sm-6">
						<div class="team-member">
							<div class="team-member-image"><img src="https://github.com/Inthiraporn/web592group03/blob/master/team/2.jpg?raw=true" alt="Name Surname"></div>
							<div class="team-member-info">
								<ul>
									<li class="team-member-name">
										Pradiewradchada Peachaw
										<span class="team-member-social">
											<a href="https://www.facebook.com/gu.toey.dw"><i class="icon-facebook"></i></a>
										</span>
									</li>
									<li>Web Designer</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team-member">
							<div class="team-member-image"><img src="https://github.com/Inthiraporn/web592group03/blob/master/team/3.jpg?raw=true" alt="Name Surname"></div>
							<div class="team-member-info">
								<ul>
									<li class="team-member-name">
										Inthiraporn Chaichumpol
										<span class="team-member-social">
										<br>
											<a href="https://www.facebook.com/inthiraporn.chaichumpol?fref=ts"><i class="icon-facebook"></i></a>
										</span>
									</li>
									<li>Project Manager</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="team-member">
							<div class="team-member-image"><img src="https://github.com/Inthiraporn/web592group03/blob/master/team/4.jpg?raw=true" alt="Name Surname"></div>
							<div class="team-member-info">
								<ul>
									<li class="team-member-name">
										Piyaporn Tooltham
										<span class="team-member-social">
										<br>
											<a href="https://www.facebook.com/piyarporn.toontam?fref=ts"><i class="icon-facebook"></i></a>
										</span>
									</li>
									<li>Project Manager</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

<hr>

		

	    <!-- Footer -->
	    <div class="footer">
	    	<div class="container">
			
		    	<div class="row">
				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contact Us</h3>
		    			<p class="contact-us-details">
	        				<b>Address: Faculty of Science, KhonKaen University</b> <br/>
	        				<b>Phone:</b><br/>
	        			</p>
		    		</div>				
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Our Social Networks</h3>
						<div>
		    				<img src="img/icons/facebook.png" width="32" alt="Facebook">
		    				<img src="img/icons/twitter.png" width="32" alt="Twitter">
		    				<img src="img/icons/linkedin.png" width="32" alt="LinkedIn">
							<img src="img/icons/rss.png" width="32" alt="RSS Feed">
						</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>
