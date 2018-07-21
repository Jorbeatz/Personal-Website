<?php

require_once('../include/phpmailer/PHPMailerAutoload.php');

$toemails = array();

$toemails[] = array(
	'email' => 'jguntur@u.rochester.edu', // Your Email Address
	'name' => 'Jordy-Guntur' // Your Name
);

// Form Processing Messages
$message_success = 'Success! Your message was sent.';
$mail = new PHPMailer(true);

// If you intend you use SMTP, add your SMTP Code after this Line
$mail->IsSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Port = 587;
$mail->Username = 'jordy.guntur@gmail.com';
$mail->Password = 'Zangetsu1!';

echo $mail->ErrorInfo;

if( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	if( $_POST['quick-contact-form-email'] != '' ) {

		$name = $_POST['quick-contact-form-name'];
		$email = $_POST['quick-contact-form-email'];
		$message = $_POST['quick-contact-form-message'];
		$phone = $_POST['quick-contact-form-phone'];

		$subject = 'Message from jordyguntur.com - ' . $name;

		$mail->SetFrom( $email , $name );
		$mail->AddReplyTo( $email , $name );
		foreach( $toemails as $toemail ) {
			$mail->AddAddress( $toemail['email'] , $toemail['name'] );
		}
		$mail->Subject = $subject;

		$name = isset($name) ? "From: $name<br>" : '';
		$email = isset($email) ? "Email: $email<br>" : '';
		$phone = isset($phone) ? "Phone: $phone<br><br>" : '';
		$message = isset($message) ? "Message Body:<br> $message<br>" : '';

		$referrer = $_SERVER['HTTP_REFERER'] ? '<br><br><br>This e-mail was sent from a contact form on JordyGuntur: ' . $_SERVER['HTTP_REFERER'] : '';

		$body = "$name $email $phone $message $referrer";

		// Runs only when reCaptcha is present in the Contact Form
		// if( isset( $_POST['g-recaptcha-response'] ) ) {
		// 	$recaptcha_response = $_POST['g-recaptcha-response'];
		// 	$response = file_get_contents( "https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $recaptcha_response );

		// 	$g_response = json_decode( $response );

		// 	if ( $g_response->success !== true ) {
		// 		echo '{ "alert": "error", "message": "Captcha not Validated! Please Try Again." }';
		// 		die;
		// 	}
		// }

		// Uncomment the following Lines of Code if you want to Force reCaptcha Validation

		// if( !isset( $_POST['g-recaptcha-response'] ) ) {
		// 	echo '{ "alert": "error", "message": "Captcha not Submitted! Please Try Again." }';
		// 	die;
		// }

		$mail->MsgHTML( $body );
		$sendEmail = $mail->Send();
		header('Location: ../../contact.php?success=true');

		if( $sendEmail == true ):
			echo '{ "alert": "success", "message": "' . $message_success . '" }';
		else:
			echo '{ "alert": "error", "message": "Email <strong>could not</strong> be sent due to some Unexpected Error. Please Try Again later.<br /><br /><strong>Reason:</strong><br />' . $mail->ErrorInfo . '" }';
		endif;
	} else {
		echo '{ "alert": "error", "message": "Please <strong>Fill up</strong> all the Fields and Try Again." }';
	}
} else {
	echo '{ "alert": "error", "message": "An <strong>unexpected error</strong> occured. Please Try Again later." }';
}

?>
