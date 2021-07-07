<?php

$ch = curl_init();
$getid = $_GET['image_url'];
$data = array('image' => "$getid");
curl_setopt($ch, CURLOPT_URL, 'https://api.deepai.org/api/nsfw-detector');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);

$headers = array();
$headers[] = 'Api-Key: 2eafb2bf-243c-4098-9d72-cac2a90d8d2c';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Image url is wrong api by @Sylixx @SylixTeam';
}
else {
    echo $result;
}
curl_close($ch);
