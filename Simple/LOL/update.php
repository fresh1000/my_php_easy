<?php
  $fh = fopen("testfile.txt", 'r+') or die("Erorr");
  $text = fgets($fh);

  fseek($fh, 0, SEEK_END);
  fwrite($fh, "$text") or die("Erorr");
  fclose($fh);
  echo "Done";
 ?>
