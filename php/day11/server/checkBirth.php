<?php 
	if (isset($_POST['btnCheck'])) {
		# code...
		$birthday = $_POST['birthday'] ?? '';
		echo $birthday;
		if($birthday){
			//Co nhap ngay thang
			// Kiem tra cai ngay thangg ma nguoi dung gui len voi ngay thang hien tai
			// Lay ra duoc ngay/thang ma nguoi dung gui len khong quan tam den nam
			$arrBirth = explode('-',$birthday);
			$dayBirth =  $arrBirth[2];
			$monthBirth = $arrBirth[1];
			$yearNow = date('Y');
			$strBirth = $yearNow . '-' . $monthBirth . '-' . $dayBirth;
			$timeBirth = strtotime($strBirth);
			$timeToday = strtotime(date('y-m-d'));
			if($timeToday > $timeBirth){
				header("Location:../birthday.php?check=Pass");
			}else if($timeToday == $timeBirth){
				header("Location:../birthday.php?check=HPBD");
			}else{
				// Chua toi ngay sinh nhat
				// Tinh ra con bao nhieu ngay nua toi sinh nhat
				$ranDay = $timeBirth - $timeToday;
				$dayLeft = ceil($ranDay/86400);
				header("Location:../birthday.php?check={$dayLeft}"); 
			}
		}else{
			// Khong nhap
			header("Location:../birthday.php?state=Fail");
		}
	}
 ?>