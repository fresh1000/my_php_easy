<?php 
	$arr = [2 ,12 ,34 ,3434 ,32 ,98 ,232 ,18 , 45];
	$res = array();

	for ($i = count($arr); $i >= 0; $i--) { 
		$res = $arr[$i];
		echo $res." <br />";
	}

