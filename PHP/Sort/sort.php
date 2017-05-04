<?php
	
	$arr_size = 25022;

	for ($i = 0; $i < $arr_size; $i++) 
		$arr[$i] = rand(0,25000);
	
	$t = true;

	while($t){
		$t = false;
		for ($i = 0; $i < $arr_size ; $i++) { 
			if ($arr[$i] > $arr[$i+1]) {
				$swap = $arr[$i+1];
				$arr[$i+1] = $arr[$i];
				$arr[$i] = $swap;
				$t = true;
			}
		}
	}

	print_r($arr);


















	// for ($i = 0; $i < $arr_size; $i++) { 
	// 	for ($j = 0; $j < $arr_size; $j++) { 
	// 		if($arr[$i] < $arr[$j]){
	// 			$hold = $arr[$i];
	// 			$arr[$i] = $arr[$j];
	// 			$arr[$j] = $hold;
	// 		}
	// 	}
	// }

 // 	print_r($arr);
	
	// for($i = 0; $i < count($arr) - 1; $i++) {
	// 	$swapped = false;
	// 	$j = 0;
	// 	while ( $j < count($arr) - 1) {
	// 		if ($arr[$j] > $arr[$j+1]) {
	// 			$c = $arr[$j];
	// 			$arr[$j] = $arr[$j+1];
	// 			$arr[$j+1] = $c;

	// 			$swapper = true;
	// 		}
	// 		++$j;
	// 	}
	// }

	// print_r($arr);
