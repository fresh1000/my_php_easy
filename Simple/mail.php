<?php
	$message = "lololo";
	$to = "i-ura@yandex.ru";
	$subject = "Treok";
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	$from = "asd@mail.ru";
	$headers = "From: $from\r\nReply to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
	mail ($to, $subject, $message);