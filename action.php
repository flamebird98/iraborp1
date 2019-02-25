<?php

if ($_POST["submit"]){
	$me = "mni9@njit.edu";
	$subject = $_GET["subject"];
	$message = $_GET["message"];
	$sender = $_GET["name"];
	$email = $_GET["email"]
	mail($me, $subject, $message, "From: $sender <$email>");
}

?>