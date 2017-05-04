<?php
	function factorial($a){
		if($a == 0){
			return 1;
		}
		return factorial($a-1)*$a;
	}

	print_r(factorial(20));
