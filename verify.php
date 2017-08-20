<?php
$access_token = '/RqyLq22gMx2T6AfLKe/gNw8oZOc+au0OAHiQrVF7hwvqLHKWsU4GH8Req6cUHsBj4MF5i9LW0E3qSTHkPg8ZVE8fXB95KnBgR+c9nhT/0izqNnt95KLXGkMvlvjMxDK/v8DnfJskQr6SM8P8ezbcgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
