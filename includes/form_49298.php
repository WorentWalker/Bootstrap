<?php	
	if(empty($_POST['name_49298']) && strlen($_POST['name_49298']) == 0 || empty($_POST['email_49298']) && strlen($_POST['email_49298']) == 0 || empty($_POST['message_49298']) && strlen($_POST['message_49298']) == 0)
	{
		return false;
	}
	
	$name_49298 = $_POST['name_49298'];
	$email_49298 = $_POST['email_49298'];
	$message_49298 = $_POST['message_49298'];
	$optin_49298 = $_POST['optin_49298'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_49298: $name_49298 \nEmail_49298: $email_49298 \nMessage_49298: $message_49298 \nOptin_49298: $optin_49298 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $email_49298";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>