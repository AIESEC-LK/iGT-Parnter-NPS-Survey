<?php

header('Access-Control-Allow-Origin: *');

include_once "config.php";
include_once "sheets.php";

if (
	!isset($_POST['company']) ||
	!isset($_POST['email']) ||
	!isset($_POST['designation']) ||
	!isset($_POST['rad']) ||
	!isset($_POST['reason']) ||
	!isset($_POST['improve']) ||
	!isset($_POST['recommend']) ||
	!isset($_POST['g-recaptcha-response'])
) {
	$output = json_encode(array('type' => 'fail', 'text' => "Incomplete form"));
	die($output);
}

if (!isset($_POST['entity'])) {
	$_POST['entity'] = "Others";
}

$email = $_POST['email'];
$designation = $_POST['designation'];
$company = $_POST['company'];
$rad = $_POST['rad'];
$reason = $_POST['reason'];
$improve = $_POST['improve'];
$contact = $_POST['recommend'];

$entity = $_POST['entity'];

$ip_address = $_SERVER['REMOTE_ADDR'];

$gcaptcha = $_POST['g-recaptcha-response'];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
	'secret' => $gcaptcha_private,
	'response' => $gcaptcha,
	'remoteip' => $_SERVER['REMOTE_ADDR']
);

$curlConfig = array(
	CURLOPT_URL => $url,
	CURLOPT_POST => true,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_POSTFIELDS => $data
);

$ch = curl_init();
curl_setopt_array($ch, $curlConfig);
$response = curl_exec($ch);
curl_close($ch);

$jsonResponse = json_decode($response);

/*
    if (!$jsonResponse || !$jsonResponse->success === true) {
        $output = json_encode(array('type' => 'fail', 'text' => "Captcha invalid"));
        die($output);
    }
    */

$date = new DateTime("now", new DateTimeZone('Asia/Colombo'));
$timestamp = $date->format('Y-m-d H:i:s');

$res = append([[$timestamp, $ip_address, $email, $designation, $company, $rad, $reason, $improve]], $entity);

if ($res) {
	$output = json_encode(array('type' => 'success', 'text' => "Details successfully submitted."));
	die($output);
} else {
	$output = json_encode(array('type' => 'fail', 'text' => "An unknown error occurred."));
	die($output);
}
