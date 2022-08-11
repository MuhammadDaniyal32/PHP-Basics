	<?php
	if(ISSET($_POST['convert'])){
		$val = $_POST['val'];
		$digit = $_POST['digit'];
		$currency = $_POST['currency'];
		
		
		if($val=="PHP" && $currency=="USD"){
			$output = $digit * 170.52;
			echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
		}else if($val=="PHP" && $currency=="Euro"){
			$output = $digit * 63.62;
			echo"<center><label class='text-success' style='font-size:25px;'>&#8364;".$output."</label></center>";
		}else if($val=="PHP" && $currency=="PHP"){
			$output = $digit;
			echo"<center><label class='text-success' style='font-size:25px;'>&#8369;".$output."</label></center>";
		}else if($val=="PHP" && $currency=="Japanese Yen"){
			$output = $digit * 0.47;
			echo"<center><label class='text-success' style='font-size:25px;'>&#165;".$output."</label></center>";
		}else if($val=="PHP" && $currency=="Pound"){
			$output = $digit * 65.83;
			echo"<center><label class='text-success' style='font-size:25px;'>&#163;".$output."</label></center>";
		}else if($val=="USD" && $currency=="USD"){
			$output = $digit;
			echo"<center><label class='text-success' style='font-size:25px;'>$".$output."</label></center>";
		}else if($val=="USD" && $currency=="Euro"){
			$output = $digit*0.89;
			echo"<center><label class='text-success' style='font-size:25px;'>&#8364;".$output."</label></center>";
		}else if($val=="USD" && $currency=="PHP"){
			$output = $digit/51.52;
			echo"<center><label class='text-success' style='font-size:25px;'>&#8369;".$output."</label></center>";
		}else if($val=="USD" && $currency=="Japanese Yen"){
			$output = $digit*107.72;
			echo"<center><label class='text-success' style='font-size:25px;'>&#165;".$output."</label></center>";
		}else if($val=="USD" && $currency=="Pound"){
			$output = $digit*1.30;
			echo"<center><label class='text-success' style='font-size:25px;'>&#163;".$output."</label></center>";
		}
	}
?>