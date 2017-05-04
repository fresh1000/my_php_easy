<?php
$str = "The quick brown jumps.";
$str = substr_replace($str, " fox ", 16, 0);
echo($str);