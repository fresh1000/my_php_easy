<?php
	session_start();

	$num = (isset($_SESSION["num"])) ? $_SESSION["num"]: 0;
	$num++;
	 $_SESSION["num"] = $num;
	// setcookie("num", $num, time() + 4);
	echo "obnovil $num raz";
	// if(isset($_COOKIE["num"]))
	// 	echo "Done";
	// else
	// 	echo "No";
	// echo $_COOKIE["num"];
	session_destroy();
?>