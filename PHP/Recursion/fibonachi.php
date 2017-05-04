<?php
	function fibonacci($a) {
		if($a < 3) {
			return 1;
		}else {
			return fibonacci($a-1) + fibonacci($a-2);
		}
	}

	for($a = 1; $a < 16; $a++) {
		echo (fibonacci($a)." ");
	}
	echo ("...\n");