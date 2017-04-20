<?php
     // ส่วนตั้งค่ำ เรียกใช้งำน UserService ของ Google
	 use google\appengine\api\users\User;
	 use google\appengine\api\users\UserService;
	 global  $user,$userdata,$appid; 
	 $user  = UserService::getCurrentUser();
	 if($user){
		  $uid = $user->getUserId();
		  $userfile  = "gs://$appid/user_$uid.json";
		  $userdata = array();
		  if(file_exists($userfile)){
			  // จะโหลดขอ้มลูในไฟล์json 
			  $filedata = file_get_contents($userfile);
			  $userdata = json_decode($filedata,true);
			  }else{
				  $userdata['nick']=$user->getNickname();
				  }   
		 $url = UserService::createLogoutUrl('/main.php');
		 //แสดงภาพผู้ใช้โดยการเรียกฟังก์ชัน userpic จากข้อที่ 1
		 echo "<img src='".userpic($uid)."' width='200'><br>";
		 echo $userdata['nick'];
		 echo "<br><a href='main.php?p=useredit'>Edit User</a>";
		 echo "<br><a href='$url'>Logout</a>";
		 }else{
			 $url = UserService::createLoginUrl('/main.php');
			 echo "<a href='$url'><h3>Login or Register</h3></a>";
			 } ?> 
			 	
		<body>		

 </body>
