<?php
use GuzzleHttp\Client;

class reCAPTCHA {

	const BASE_API_URL = 'https://www.google.com/recaptcha/api/siteverify';
	const THRESHOLD = .5;

	private $client;
	private string $secretKey;

	public function __construct ($secretKey) {

		$this->secretKey = $secretKey;

		$this->client = $this->createClient();
	}

	private function createClient () {

		return new Client();
	}

	public function isValid(string $token, float $threshold = self::THRESHOLD) {

		$options = [
			'form_params' => [
				'secret' => $this->secretKey,
				'response' => $token,
				'remoteip' => $_SERVER['REMOTE_ADDR']
			]
		];

		$response = $this->client->post(self::BASE_API_URL, $options);

		$validation = json_decode($response->getBody());

		if ($validation->success && $validation->score >= $threshold) {

			return true;
		}
		else {

			return false;
		}
	}
}
