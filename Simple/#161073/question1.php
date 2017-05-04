<?php
$fruits = array('orange', 'apple', 'mango', 'banana');
sort($fruits);
foreach ($fruits as $key => $val) {
    $val = strtoupper($val);
    echo ($val."<br>");
}
?>