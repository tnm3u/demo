<?php
// fetch.php — Playlist Proxy

header("Content-Type: text/plain; charset=utf-8");
header("Access-Control-Allow-Origin: *");

$url = $_GET['url'] ?? '';
if (!$url || !filter_var($url, FILTER_VALIDATE_URL)) {
    http_response_code(400);
    exit("Invalid URL");
}

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_ENCODING       => "", // handle gzip
    CURLOPT_USERAGENT      => "Mozilla/5.0 IPTV Player",
    CURLOPT_TIMEOUT        => 20,
]);

$data = curl_exec($ch);

if ($data === false) {
    http_response_code(500);
    exit("Failed to fetch playlist");
}

curl_close($ch);
echo $data;