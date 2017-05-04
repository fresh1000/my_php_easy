<?php
$login = $_POST["login"];
$pass = $_POST["pass"];

$loginOk = false;
$passOk = false;

$lines = file("secrets.txt", FILE_IGNORE_NEW_LINES);
for($i = 0; $i < count($lines); $i+=2) {
    if($lines[$i] == $login) {
        $loginOk = true;
        //echo "Login ok";
    }
}
for($i = 1; $i < count($lines); $i+=2) {
    if($lines[$i] == $pass) {
        $passOk = true;
        //echo "Pass ok";
    }
}

if($passOk && $loginOk) {
    echo "Logining succesfull";
    include('windows.html');
}else {
    include('registration.html');
}
//fclose($myfile);