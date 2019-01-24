<?php
$access_token = 'IGP1cCGoyG8ki9iUSVs2zFOMjBrgMzXa2ba278mL7jyeDku4U9zCcElEcil+p9q13Crzu6dKzm2f3qvVOQ499g19bNuGVFXmwBTjSqCkFYt/b134CwWlmqtlx2VLmlk4lYWtXRZ8/xWj4oWg9R5I5wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
