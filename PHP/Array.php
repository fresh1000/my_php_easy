<?php
	$array = array(array(12, 45, 54),array(32),array(24, 19));

	for ($i = 0; $i < count($array); $i++) { 
		for ($j = 0; $j < count($array[$i]); $j++) {
			echo $array[$i][$j]." | ";
		}
		echo "<br />";
	}