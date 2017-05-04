<?php
header("Content-Type: text/html; charset=utf-8");
  $fl = fopen("testfile.txt", 'r') or die("Erorr");
  $line = fread($fl,3);
  fclose($fl);
  echo ($line);
 ?>
