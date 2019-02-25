<?php

if ($_POST["submit"]){
	$me = "mni9@njit.edu";
	$subject = $_POST["subject"];
	$message = $_POST["message"];
	$sender = $_POST["name"];
	$email = $_POST["email"]
	mail($me, $subject, $message, "From: $sender <$email>");
}

?>