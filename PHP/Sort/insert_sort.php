<?php
	$arr_size = 250;

	for ($i = 0; $i < $arr_size; $i++) 
		$arr[$i] = rand(0,250);

	for ($i=0; $i < $arr_size; $i++) { 
		$x = $arr[$i];
		for ($j = $i - 1;$j >= 0 && $arr[$j] > $x; $j--) { 
			$arr[$j + 1] = $arr[$j];
		}
		$arr[$j + 1] = $x;
	}

	for($i = 0; $i < count($arr); $i++) {
		echo $i."<br/>";
	}