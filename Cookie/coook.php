<?php
header("Content-Type: text/html; charset=utf-8");

if (isset($_COOKIE['Mortal'])) {
	$cnt = $_COOKIE['Mortal'] + 1;
	
} else {
	$cnt = 0;
}

setcookie("Mortal", $cnt, 0x6FFFFFFF);

echo "<p> Вы посещали эту страницу <b>".@$_COOKIE['Mortal']."</b> раз";
echo "</br><form onsubmit=\"document.cookie = 'Mortal=0';\"><input type=\"submit\" value=\"Сбросить\"></form>";
?>