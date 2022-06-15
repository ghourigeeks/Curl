<?php

$url = "http://localhost:8000/api/delete_cities/8";

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, $url);

curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($curl);

echo "<pre>";
print_r($data);
echo "</pre>";
 
curl_close($curl);



?>