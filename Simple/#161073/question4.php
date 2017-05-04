<?php
$arr = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Alex"=>"40");
echo("a) ascending order sort by value "."<br>");
asort($arr);
print_r($arr);
echo("<br>");

$arr = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Alex"=>"40");
echo("b) ascending order sort by key  "."<br>");
ksort($arr);
print_r($arr);
echo("<br>");

$arr = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Alex"=>"40");
echo("c) descending order sorting by value   "."<br>");
arsort($arr);
print_r($arr);
echo("<br>");

$arr = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Alex"=>"40");
echo("b) descending order sorting by key "."<br>");
krsort($arr);
print_r($arr);