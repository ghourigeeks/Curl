<?php
$url = 'http://localhost:8000/api/update_cities/34?name=dsadas&lat=243.33&lng=23442.33';

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_PUT, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($curl);

echo "<pre>";
print_r($data);
echo "</pre>";

curl_close($curl);

