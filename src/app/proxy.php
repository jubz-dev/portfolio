<?php
header("Content-Type: application/json");

require_once('../../config.php');

function getPublicIP() {
    // create & initialize a curl session
    $curl = curl_init();

    // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_URL, "http://httpbin.org/ip");

    // return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // curl_exec() executes the started curl session
    // $output contains the output string
    $output = curl_exec($curl);

    // close curl resource to free up system resources
    // (deletes the variable made by curl_init)
    curl_close($curl);

    $ip = json_decode($output, true);

    $result = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? $_SERVER['REMOTE_ADDR'] : $ip['origin']; 

    return $result;
}

// Secure API key retrieval (store in environment variables or config)
$apiKey = $_ENV['TRACK_API_KEY'];
$siteHashId = $_ENV['TRACK_SITEHASHID'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$visitorIP = getPublicIP();

// Prepare the request URL
$apiUrl = $_ENV['TRACK_URL'];
$queryParams = http_build_query([
    'siteHashId' => $siteHashId,
    'api_key' => $apiKey,
    'ip' => $visitorIP,
    'userAgent' => $userAgent,
]);

// Make API request using cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $apiUrl . "?" . $queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

// Return API response
http_response_code($httpCode);
echo $response;
?>
