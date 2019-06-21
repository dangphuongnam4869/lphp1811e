<?php
// Kiem tra xem nguoi dung bam nut check chua ?
if (isset($_POST['checking'])) {
		# code...
	$number = $_POST['number'] ?? '';
		if(is_numeric($number)){  // is_numeric: kiem tra xem co phai la chuoi so hay ko
			if(myCheckNum($number)){
				header("Location:../checkNum.php?state=TRUE&num={$number}");
			}
			else {
				header("Location:../checkNum.php?state=Fail&num={$number}");
			}
		}
		else{
			header('Location:../checkNum.php?state=Fail1');
		}
	}
	function myCheckNum($myNum){
		if($myNum <= 1){
			return false;
		}else if($myNum == 2){
			return true;
		}else {
			$flag = true;
			for($i = 2; $i <= sqrt($myNum); $i++){
				if($myNum % $i == 0){
					$flag = false;
					break;
				}
			}
			return $flag;
		}
	}
	?>