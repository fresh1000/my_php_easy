<?php
header("Content-Type: text/html; charset=utf-8");
if(!setcookie("MyDate", date("d.m.Y, H:i:s"))){
	echo "failed set MyDate cookie";
	exit();
}
if(!setcookie("MyNumber", "555", time()+60)){
	echo "failed set MyNumber cookie";
	exit();
}


$cnt = 0;

if (isset($_COOKIE['Mortal'])) {
	$cnt = $_COOKIE['Mortal'] + 1;
	
} else {
	$cnt = 0;
}

setcookie("Mortal", $cnt, 0x6FFFFFFF);

echo "<p> Вы посещали эту страницу <b>".@$_COOKIE['Mortal']."</b> раз";
echo "</br><form onsubmit=\"document.cookie = 'Mortal=0';\"><input type=\"submit\" value=\"Сбросить\"></form>";
echo @$_COOKIE['MyDate'];
echo "<br>";
echo @$_COOKIE['MyNumber'];
echo "<br>";
echo "<a href=\"test.php\">test.php</a>";


?>