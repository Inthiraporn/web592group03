<?php
    use google\appengine\api\users\UserService;
    global $appid,$page,$title;
    $phpfile="G03_body_$page.php";
    if(file_exists($phpfile)){
		include($phpfile);
		}else{
			$htmlfile = "gs://$appid/$page.html";
			if(file_exists($htmlfile)){
				readfile($htmlfile);
				}
				if (UserService::isCurrentUserAdmin()){
					echo "<br><a href='Login.php?p=edit&file=$page.html' class='btn btn-default'>Edit</a>";
					} 
					include("G03_feedback.php");
					}
					?> 
