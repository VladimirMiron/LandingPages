<?php 

	$name = $_POST['name'];
	$email = $_POST['email'];

	$message = $_POST['message'];


	$subject = "=?utf-8?8?".base64_encode("Weazel Company")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type:text/html;chraset=utf-8\r\n";

	mail('vova.miron.2@gmail.com', $subject, $message ,$headers);

 ?>