<?php
/**
 * mailer.php
 *
 * This file handles secure mail transport using the Swiftmailer
 * library with Google reCAPTCHA integration.
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 * @author Adel Moreno <amoreno28@cnm.edu>
 **/

// require all composer dependencies
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");

// require mail-config.php
require_once("mail-config.php");

// verify user's reCAPTCHA input
$recaptcha = new \ReCaptcha\ReCaptcha($secret);
$resp = $recaptcha->verify($_POST["g-recaptcha-response"], $_SERVER["REMOTE_ADDR"]);

try {
	// if there's a reCAPTCHA error, throw an exception
	if (!$resp->isSuccess()) {
		throw(new Exception("reCAPTCHA error!"));
	}

	/**
	 * Sanitize the inputs from the form: name, email, subject, and message.
	 **/
	$name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$subject = filter_input(INPUT_POST, "subject", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
	$message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

	// create Swift message
	$swiftMessage = new Swift_Message();

	/**
	 * Attach the sender to the message.
	 **/
	$swiftMessage->setFrom([$email => $name]);

	/**
	 * Attach the recipients to the message.
	 **/
	$recipients = ["adelsilvahurley@gmail.com" => "Adel Moreno"];
	$swiftMessage->setTo($recipients);

	// attach the subject line to the message
	$swiftMessage->setSubject($subject);

	/**
	 * Attach the actual message to the message.
	 **/
	$swiftMessage->setBody($message, "text/html");
	$swiftMessage->addPart(html_entity_decode($message), "text/plain");

	/**
	 * Send the Email via SMTP.
	 *
	 * @see http://swiftmailer.org/docs/sending.html Sending Messages - Documentation - SwitftMailer
	 **/
	$smtp = new Swift_SmtpTransport("localhost", 25);
	$mailer = new Swift_Mailer($smtp);
	$numSent = $mailer->send($swiftMessage, $failedRecipients);

	/**
	 * The send method returns the number of recipients that accepted the Email.
	 * If the number attempted !== number accepted it's an Exception.
	 **/
	if($numSent !== count($recipients)) {
		// The $failedRecipients parameter passed in the send() contains an array of the Emails that failed.
		throw(new RuntimeException("unable to send email"));
	}

	// report a successful send!
	echo "<div class=\"alert alert-success\" role=\"alert\">Success! Email sent.</div>";

} catch(Exception $exception) {
	echo "<div class=\"alert alert-danger\" role=\"alert\">Unable to send email: " . $exception->getMessage() . "</div>";
}