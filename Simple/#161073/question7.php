<?php
$str = "230037";
$str = substr_replace($str, ":", 2, 0);
$str = substr_replace($str, ":", 5, 0);
echo($str);
?>