<?php
$login = $_POST["login"];

$loginMatch = false;

$lines = file("secrets.txt", FILE_IGNORE_NEW_LINES);
for ($i = 0; $i < count($lines); $i+=2) {
    if ($lines[$i] == $login) {
       	$loginMatch = true;
    }
}	

if(!$loginMatch){
    $myfile = fopen("secrets.txt", "a+") or die("Unable to open file!");
    fwrite($myfile,$_POST["login"].PHP_EOL);
    fwrite($myfile,$_POST["pass"].PHP_EOL);
    fclose($myfile);
    include('login_page.html');
}else {
    echo "Логин уже использован";
    include('registration.html');
}

