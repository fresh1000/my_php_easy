<?php
//question 1
$fruits = array('orange', 'apple', 'mango', 'banana');
sort($fruits);
foreach ($fruits as $key => $val) {
    $val = strtoupper($val);
    echo ($val."<br>");
}
echo("<br>");

//question 2
$word = array('fox', 'jump', 'quick', 'brown', 'lazy', 'dog');
echo("The ".$word[2]." ".$word[3]." ".$word[0]." ".$word[1]."s "." over the ".$word[4]." ".$word[5].".");
echo("<br>");
echo("<br>");

//question 3
$arr = range(10, 50, 10);
print_r($arr);
unset($arr[3]);
sort($arr);
print_r($arr);
echo("<br>");
echo("<br>");

//question 4
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
echo("<br>");
echo("<br>");

//question 5
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo($color["holes"][5]."<br>");
echo($color["color"]["a"]);
echo("<br>");
echo("<br>");

//question 6
$str = "The quick brown jumps.";
$str = substr_replace($str, " fox ", 16, 0);
echo($str);
echo("<br>");
echo("<br>");

//question 7
$str = "230037";
$str = substr_replace($str, ":", 2, 0);
$str = substr_replace($str, ":", 5, 0);
echo($str);
?>