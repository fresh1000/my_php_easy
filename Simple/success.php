<?php
	session_start();
	if($_GET["send"] == 1);
	echo "Done send on email: ".$_SESSION["to"];
?>