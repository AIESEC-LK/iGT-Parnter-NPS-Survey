<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new Google_Client();
$client->setApplicationName('Google Sheets and PHP');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/credentials.json');
$sheet_service = new Google_Service_Sheets($client);

$remap = [
	'UOC' => 'CC',
	'UOK' => 'CN',
	'UOM' => 'CS',
	'UOP' => 'KANDY',
	'UOR' => 'RUHUNA'
];

$spreadsheetIds = [
	'CC' => "18leTgwainsQbMsziTWjaoATpJEn47VINhqAtdxjuUW0",
	'CN' => "1fXQfjE7sVK9fo-nZ8-rv-GlHFEhPOobIJ_5rSmlH_4g",
	'CS' => "1RDuQ6N0ytwdGLPM4ITBlNgPcfKKyxmaMx63eW6TLTvw",
	'USJ' => "1tYMVHU5SMi-MFLXV-oUyXdilrhcZ3uRD2GNPjFv8wQk",
	'KANDY' => "1EoP8BXCQAc_KT9HmdsPjAKjwWN-VubT_u4b76zHI6WU",
	'RUHUNA' => "1ET8ckHODdHQLyG_68qeYGQzB0IGAR7FkwftynB5pEhQ",
	'SLIIT' => "1YYdLytKQFEaHGIPeqT1ZdN-JTPCFCOiNqwUznY8rSuM",
	'NSBM' => "1mB4k2aOPR65c-wX9SJ45BIJGgzpYzovE1kTNJU4zM4E",
	'NIBM' => "1cKmaIQddrBXy5wUYxlrItDRQVMs317_lIMfBuESQUX0"
];

// Other
$spreadsheetId = "1alNyWlG18zCFInfczWloEZRmQbQ7JYeTu-5yC0ttiP8";

function append($values, $entity)
{
	$entity = strtoupper($entity);

	global $sheet_service;
	global $remap;
	global $spreadsheetId;
	global $spreadsheetIds;

	if (array_key_exists($entity, $remap)) {
		$entity = $remap[$entity];
	}

	if (array_key_exists($entity, $spreadsheetIds)) {
		$spreadsheetId = $spreadsheetIds[$entity];
	}

	$entity_values = $values;
	array_splice($entity_values[0], 1, 1); 	// Remove ip_address from values
	$body = new Google_Service_Sheets_ValueRange([
		'values' => $entity_values
	]);

	$all_values = $values;
	array_splice($all_values[0], 2, 0, [$entity]);
	$all_body = new Google_Service_Sheets_ValueRange([
		'values' => $all_values
	]);

	$params = [
		'valueInputOption' => 'USER_ENTERED'
	];

	$range = 'Sheet1';

	//Append to all sheet
	$result = $sheet_service->spreadsheets_values->append(
		"1CDx1AUefpIIJz17hg3-AnbSzIFD6y5s5h5L_wrKbeko",
		$range,
		$all_body,
		$params
	);

	//Append to entity sheet (or other)
	$result = $sheet_service->spreadsheets_values->append($spreadsheetId, $range, $body, $params);
	if ($result->getUpdates()->getUpdatedCells() == 7) {
		return true;
	}

	return false;
}
