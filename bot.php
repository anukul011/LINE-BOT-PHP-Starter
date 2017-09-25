<?php
$access_token = 'HQxTtGqXZheqlKDrBggH4CTFvtJsiYH9Z9KG1CFqrFh1VRrfDVcwJgnbaU08Vt6uhMf0qMAWsyCY7AeyjDfCtrspzVY3wMuCMnQ9eHNh7BNS4DWrFqZhmnJguhw/zA1sQkrWn4ZXZQHZtcMwiSLmZwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
