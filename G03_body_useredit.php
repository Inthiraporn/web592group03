<?php
   use google\appengine\api\users\User;
   use google\appengine\api\users\UserService;
   global $appid,$user,$userdata;
   if(!$user)
	   return; 
 
 if($_POST["nick"]){
	 $uid = $user->getUserId();
	 $userdata['nick']=$_POST['nick'];
	 $userdata['fname']=$_POST['fname']; 
     $userdata['lname']=$_POST['lname'];
	 $userdata['color']=$_POST['color'];
	 $userdata['Date']=$_POST['Date'];
	 if($_FILES['pic']['tmp_name']!=''){
         $userpic = "gs://$appid/{$uid}.jpg";
         move_uploaded_file($_FILES['pic']['tmp_name'],$userpic);
		 }       $json = json_encode($userdata, JSON_PRETTY_PRINT);
		 $userfile  = "gs://$appid/user_$uid.json";
		 file_put_contents($userfile,$json);
		 echo "<br>บันทึกเรียบร้อย  <a href='miam.php?p=edituser'>ตกลง</a>";
		 return;
		 }
		 ?>
		 <form method="post" action="" enctype="multipart/form-data">
		 <div class="form-group col-md-12" >
		 <label for="nick">Nick Name</label>
		 <input  class="form-control" type='text' name='nick' value="<?=$userdata['nick'] ?>">
		 </div>
		 <div class="form-group col-md-6">
		 <label for="file">First Name</label>
		 <input class="form-control" type='text' name='fname' value="<?=$userdata["fname"]?>">
		 </div> 
		 <div class="form-group col-md-6">
		 <label for="file">Last Name</label>
		 <input class="form-control" type='text' name='lname' value="<?=$userdata["lname"]?>">
		 </div>
		 <div class="form-group col-md-6">
		 <label for="file">สีที่ชอบ</label>
		 <input class="form-control" type='color' name='color' value="<?=$userdata["color"]?>">
		 </div>
		 <div class="form-group col-md-6">
		 <img class='img-circle'>
		 <label for="file">รูปภาพประจำตัว</label>
		 <input class="form-control" type='file' name='pic'>
		 </div>
         <div class="form-group col-md-6">
		 <label for="file">วันเกิด</label>
		 <input class="form-control" type='text' name='Date' value="<?=$userdata["Date"]?>">
		 </div>		 
 
<button class="btn btn-primary">  Save </button> </form> 