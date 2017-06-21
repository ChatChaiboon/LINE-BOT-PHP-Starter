<?php
$access_token = 'kqQ3jhXCO0erfnyGfDAbwrVLTCVO4uzmDlj95zJCBrMmSagd7VU887nbNa4+uwaq/DK96xySrqvcezviH9MQKusPTPAO8YUZvp7igFIceC7oPtOxS9A3m2nO2+8gJKU9geExJ+UIqL7n4s2Jt5FCWgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
