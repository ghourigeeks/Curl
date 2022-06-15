<?php
$url = 'http://localhost:8000/api/fetch_cities/';
 
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
 
$data = curl_exec($curl);

echo "<pre>";
print_r($data);
echo "</pre>";
 
curl_close($curl);