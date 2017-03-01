<?php
$access_token = 'A4gfbNFB3z2GDcmIBRRQmEK6kkFJVjchXs+ljXDcqZCu52cbGfVvf0Tr66fAX/bpPVdlrVHTbjyA0oOr+P3flfcFj13kVU7K3XNEmZWxkzskQobvTWc/zlKQRMbfMoKGeOZmQ1r5SWM4WnnLZYN4OgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
