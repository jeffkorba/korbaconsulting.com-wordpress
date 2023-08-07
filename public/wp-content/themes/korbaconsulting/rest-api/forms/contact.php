<?php
function postContact (WP_REST_Request $request) {

	$reCAPTCHA = new reCAPTCHA(RECAPTCHA_SECRET_KEY);

	$isValid = $reCAPTCHA->isValid($request['token'], RECAPTCHA_THRESHOLD);

	if ($isValid) {
	
		$to = DEFAULT_EMAIL_ADDRESS;
		$subject = '[Auto-Notification] New Message';
		$message = 'A new message has been submitted through the korbaconsulting.com contact form:' . "\r\n\r\n";
		$message .= 'Full Name: ' . $request['fullName'] . "\r\n";
		$message .= 'Company: ' . $request['companyName'] . "\r\n";
		$message .= 'Email Address: ' . $request['emailAddress'] . "\r\n";
		$message .= 'Phone Number: ' . $request['phoneNumber'] . "\r\n";
		$message .= 'Message: ' . $request['message'];

		$success = wp_mail($to, $subject, $message);
		
		if ($success) {
		
			$message = 'Message delivery successful.';
			$code = 200;
		}
		else {
		
			$message = 'Message delivery failed.';
			$code = 500;
		}
	}
	else {
	
		$success = false;
		$message = 'reCAPTCHA token rejected.';
		$code = 500;
	}
	
	$payload = [
		'success' => $success,
		'message' => $message
	];

	$response = new WP_REST_Response($payload);
	$response->set_status($code);

	return $response;
}

add_action('rest_api_init', function () {

	register_rest_route('forms', '/contact/', [
		'methods' => 'POST',
		'callback' => 'postContact',
		'permission_callback' => '__return_true'
	]);
});