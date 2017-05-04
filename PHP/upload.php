<?php
$all = "Name: ".$_POST['name']."<br/>"."Message:".$_POST['message']."<br/>";
$files = "result.txt";
if (!$handle = fopen($files, 'a')) {
	echo "Eror ($filename)";
	exit;
}
if (fwrite($handle, $all) === false) {
	echo "eror ($files)";
	exit;
} else {
	echo "Good";
}