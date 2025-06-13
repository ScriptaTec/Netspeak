<?php
$apiKey = 'AIzaSyDWd2R7IMDClGBQIxokDhW8EovFiE9ACZw';

$url = 'https://generativelanguage.googleapis.com/v1beta/models?key=' . $apiKey;

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode == 200) {
    $result = json_decode($response, true);
    echo "<h2>Modelos disponíveis:</h2>";
    echo "<pre>" . print_r($result['models'], true) . "</pre>";
} else {
    echo "Erro ao listar modelos. HTTP CODE: $httpCode";
    echo "<pre>" . print_r(json_decode($response, true), true) . "</pre>";
}
