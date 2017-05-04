<?php
header("Content-Type: text/html; charset=utf-8");
$cmd = 'dir';
exec(escapeshellcmd($cmd), $output, $status);

if($status) echo "erorr";
else
{
  echo "<pre>";
  foreach($output as $line) echo htmlspecialchars("$line\n");
  echo "</pre>";
}
?>
