<?php
if(isset($_POST['checking'])){
	$year = $_POST['year'] ?? '';
	if(is_numeric($year)){
		if(myCheckYear($year)){
			header("Location:../checkYear.php?state=True&year={$year}");
		}
		else{
			header("Location:../checkYear.php?state=False&year={$year}");
		}
	}
	else{
		header("Location:../checkYear.php?state=Error");
	}
}
function myCheckYear($year){
	if($year%400==0){
		return true;
	}else if($year%4==0 && $year%100 != 0){
		return true;
	}else{
		return false;
	}
}
?>