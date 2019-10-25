<?php



if(!$_POST) exit;



function tommus_email_validate($email) { return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email); }


$name = $_POST['name']; $email = $_POST['email']; $comments = $_POST['comments']; $phone = $_POST['phone']; $room = $_POST['room']; $start = $_POST['start']; $end = $_POST['end']; $adults = $_POST['adults']; $children = $_POST['children'];



if(trim($name) == '') {

	exit('<div class="error_message">Please enter your name.</div>');

} else if(trim($email) == '') {

	exit('<div class="error_message">Please enter a valid email address.</div>');

} else if(!tommus_email_validate($email)) {

	exit('<div class="error_message">You have entered an invalid e-mail address.</div>');
	
} else if(trim($phone) == '') {

	exit('<div class="error_message">Please enter your phone number.</div>');

} else if(trim($start) == '') {

	exit('<div class="error_message">Please choose a date.</div>');
	
} else if(trim($end) == '') {

	exit('<div class="error_message">Please choose a date.</div>');
	
} else if( strpos($email, 'href') !== false ) {

	exit('<div class="error_message">You have entered an invalid e-mail address.</div>');
	
} else if( strpos($email, '[url') !== false ) {

	exit('<div class="error_message">You have entered an invalid e-mail address.</div>');

} if(get_magic_quotes_gpc()) { $email = stripslashes($email); }



$address = 'mail@yourdomainhere.com';



$e_subject = 'A reservation from ' . $name . '.';

$e_body = "You have been contacted by $name through your reservation form, with the following details." . "\r\n" . "\r\n";

$e_content = "\"Full Name: $name\"" . "\r\n" . "\r\n" . "\"Email Address: $email\"" . "\r\n" . "\r\n" . "\"Phone Number: $phone\"" . "\r\n" . "\r\n" . "\"Room: $room\"" . "\r\n" . "\r\n" . "\"Arrival Date: $start\"" . "\r\n" . "\r\n" . "\"Departure Date: $end\"" . "\r\n" . "\r\n" . "\"Adults: $adults\"" . "\r\n" . "\r\n" . "\"Children: $children\"" . "\r\n" . "\r\n";

$e_reply = "You can contact $name via email: $email or by phone: $phone";



$msg = wordwrap( $e_body . $e_content . $e_reply, 70 );



$headers = "From: $email" . "\r\n";

$headers .= "Reply-To: $email" . "\r\n";

$headers .= "MIME-Version: 1.0" . "\r\n";

$headers .= "Content-type: text/plain; charset=utf-8" . "\r\n";

$headers .= "Content-Transfer-Encoding: quoted-printable" . "\r\n";



if(mail($address, $e_subject, $msg, $headers)) { echo "<fieldset><div id='success_page'><h5>Request Sent!</h5><p>You will receive a confirmation by email shortly.</p></div></fieldset>"; }