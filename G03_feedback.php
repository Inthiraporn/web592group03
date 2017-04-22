<?php
    use google\appengine\api\users\UserService;
    global $appid,$page,$title,$userdata; 
 
 // ไฟล์ ความคดิเห็นจะบันทกึไว้ในไฟล์ json ต า ม ชื่อ $page
// เ ช่น ห น้ า home ก็จะบันทกึขอ้มลูไว้ในไฟล์ home.json 
 
   $fbfile = "gs://$appid/$page.json";
   $fbdata = array(); 
 
  // ถ้ามีไฟล์ข้อมูลให้อ่านไฟล์มาแสดงผล  
   if(file_exists($fbfile)){
	   $fbjson = file_get_contents($fbfile);
	   $fbdata = json_decode($fbjson, true);
	   echo "<hr>";
	   foreach($fbdata as $fb){
		   $text = htmlspecialchars($fb['feedback']);
		   $time=date("d/m/Y H:i:s",$fb['time']); 
 
               //มีการเรียก userpic เพื่อแสดงภาพผู้ใช้
 $pic = userpic($fb['user']); 
 
   echo "<div class='row'>";
   echo "<div class='col-xs-1'><img src='$pic' width='48'></div>";
   echo "<div class='col-xs-10'>";
   echo "<a href='#'>$fb[name]</a><br>$text <br>";
   echo "</div>";
   echo "</div>";
   }
   }        //กรณีที่ผู้ใช้ login แล้วให้สามารถแสดงความคิดเห็นได้    
   $user  = UserService::getCurrentUser();
   if($user){
	   include("G03_feedback_add.php");
	   }
	   ?> 
 
 
