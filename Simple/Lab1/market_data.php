<?php
header("Content-Type: text/html; charset=utf-8");

$product = $_GET['product'];
$price = $_GET['price'];
$quantity = $_GET['quantity'];
$deliveryPrice = $_GET['deliveryPrice'];
$material = $_GET['material'];

$host = "localhost";
$user = "root";
$password = "";
$db = "Market";
 
$conn = mysql_connect($host, $user, $password) or die(mysql_error());

//$db = "CREATE DATABASE Market";
//mysql_query($db) or die (mysql_error());

mysql_select_db($db, $conn);

//$table = "CREATE TABLE product (id int PRIMARY KEY,product char(30), price double, quantity int, deliveryPrice double, material char(30))";
//mysql_query($table) or die(mysql_error());


$to      = 'i-ura@yandex.ru';
$subject = 'the subject';
$message = 'Name product: '.$product.' Price: $'.$price;
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

echo mail("i-ura@yandex.ru", "My Subject", $message);


$result = mysql_query("INSERT INTO product(product, price, quantity, deliveryPrice, material) VALUES('$product', '$price', '$quantity', '$deliveryPrice', '$material');");
if ($result == 'true') {
	echo "Ваши данные успешно добавлены";
}else {
	echo "Ваши данные не добавлены";
}
