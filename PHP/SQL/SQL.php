<!DOCTYPE html>
<html>
 <head> 
   <meta charset="utf-8">
   <title>My site</title>
 </head>
 <body>

<?php


$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("my_bd");
mysql_query(" SET NAMES  'utf8' ");

if(!$connection || !$db) {
	exit(mysql_error());
}

$result = mysql_query(" SELECT * FROM news WHERE author = 'Юрий Иващенко' AND date = '2016-10-01' ORDER BY id DESC ");

mysql_close();
                      
while($row = mysql_fetch_assoc($result)){ 
	echo $row['title']."<br />";
	echo $row['text']."<br />";
	echo $row['date']."<br />";
	echo $row['time']."<br />";
	echo $row['author']."<br />";
 }

 ?>

 </body> 
</html>