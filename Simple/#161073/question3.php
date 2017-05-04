<?php
$arr = range(10, 50, 10);
print_r($arr);
unset($arr[3]);
sort($arr);
print_r($arr);