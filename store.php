<?php
$url = 'http://localhost:8000/api/store_cities';

$curl = curl_init();

$fields = array(
    'name' => 'Test',
    'lat'  => '24.55',
    'lng'  => '55.33'
);

$fields_string = http_build_query($fields);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, TRUE);
curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

$data = curl_exec($curl);

echo "<pre>";
print_r($data);
echo "</pre>";

curl_close($curl);