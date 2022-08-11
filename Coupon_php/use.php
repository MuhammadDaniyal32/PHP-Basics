<?php
 require_once'connection.php';
 if(isset($_POST['use'])){
	 
	 $coupon=$_POST['coupon'];
	 
	 $query=mysqli_query($con,"SELECT * FROM `coupon_tbl` WHERE `coupon_code`='$coupon'")or die(mysqli_error());
	 $row = mysqli_num_rows($query);
	 $fetch=mysqli_fetch_array($query);
	 if($row>0){
		 if($fetch['status']==''){
			 echo "<div>Coupon code activated!</div>";
			 mysqli_query($con,"UPDATE `coupon_tbl` SET `coupon_status`='Used' WHERE `coupon_id`='$fetch[coupon_id]'") or die(mysqli_error());
			 }
			 else{
				 echo "<div>Coupon code has been used!</div>";
				 }
		 }
	 else{
		 echo "<div>Your coupon is not available!</div>";
		 }
	 }
 


?>