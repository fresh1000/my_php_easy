<?php
header("Content-Type: text/html; charset=utf-8");
  $fl = fopen("testfile.txt", 'w') or die("Erorr");

  $text = <<<_END
  Строка 1
  Строка 2
  Строка 3
  _END;
  fwrite($fl, $text) or die("Erorr");
  fclose($fl);
  echo "Done";
 ?>
