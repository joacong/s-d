<?php
	include('variables.php');

	$to = $contact_email;
	$subject = "Mensaje de contacto";
	$message = "<h3>Nuevo mensaje de contacto</h3>
				<strong>Email:</strong>".$_POST['email']."<br />
				<strong>Mensaje</strong><br />".$_POST['message']."<br />";
	echo $message;

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= "Reply-To: ".$_POST['email'];

	mail($to,$subject,$message,$headers);

?>