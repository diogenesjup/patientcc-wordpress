<?php

//Retrieve form data. 
//GET - user submitted data using AJAX
//POST - in case user does not support javascript, we'll use POST instead
$name = ($_GET['name']) ? $_GET['name'] : $_POST['name'];
$email = ($_GET['email']) ?$_GET['email'] : $_POST['email'];
$comments = ($_GET['comments']) ?$_GET['comments'] : $_POST['comments'];

//flag to indicate which method it uses. If POST set it to 1
if ($_POST) $post=1;

//Simple server side validation for POST data, of course, you should validate the email
if (!$name) $errors[count($errors)] = 'Please enter your name.';
if (!$email) $errors[count($errors)] = 'Please enter your email.'; 
if (!$comments) $errors[count($errors)] = 'Please enter your message.'; 

//If the errors array is empty, send the mail
if (!$errors) {

	// ====== Your mail here  ====== //
	$to = 'contato@patientcc.com';
	
    //Email from which you will receive email. must be on same domain to avoid spam
    $from_email = 'contato@patientcc.com';
    
	// Sender
	$from = $name . " <" . $from_email . ">";
	//subject and the html message
	$subject = 'Nossa mensagem vinda do site';	
	$message = '
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head></head>
	<body>
	<table>
		<tr><td>Name:</td><td>' . $name . '</td></tr>
		<tr><td>Email:</td><td>' . $email . '</td></tr>		
		<tr><td>Comments:</td><td>' . nl2br($comments) . '</td></tr>
	</table>
	</body>
	</html>';

	// Send the mail
	$result = sendmail($to, $subject, $message, $from);
	
	//if POST was used, display the message straight away
	if ($_POST) {
		if ($result) echo 'Thank you! We have received your message.';
		else echo 'Sorry, unexpected error. Please try again later';
		
	//else if GET was used, return the boolean value so that 
	//ajax script can react accordingly
	//1 means success, 0 means failed
	} else {
		echo $result;	
	}

// If the errors array has values
} else {}


// Simple mail function with HTML header
function sendmail($to, $subject, $comments, $from) {
	$headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'From: ' . $from . "\r\n";

	$result = mail($to,$subject,$comments,$headers);

	if ($result) return 1;
	else return 0;
}

header("Location: http://patientcc.com/2016/contato/?msg=ok");

?>