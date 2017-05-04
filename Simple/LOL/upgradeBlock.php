<?php
  $fh = fopen("testfile.txt", 'r+') or die("Erorr");
  $text = fgets($fh);

  if (flock($fh, LOCK_EX))
  {
    fseek($fh, 0,SEEK_END);
    fwrite($fh,"$text") or die("Erorr");
    flock($fh, LOCK_UN);
  }

  fclose($fh);
  echo "Done";
 ?>
