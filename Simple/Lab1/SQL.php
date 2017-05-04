<?php

$link = mysql_connect("localhost", "root", "")or die(mysql_error());
echo "Go";
$db = "CREATE DATABASE Market";
mysql_query($db) or die (mysql_error());
//mysql_select_db("Market", $link)or die(mysql_error());
//$createTable = "CREATE TABLE studata (god int, grup char(7), fio char(50));";
//mysql_query($createTable) or die(mysql_error());
echo "Done.";
mysql_close($link);