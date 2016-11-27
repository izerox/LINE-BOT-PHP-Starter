<?php
$access_token = 'slZ/3B9o5vfKOFWZFGU4pSQkwr+Rb53pqFHOSdII/4kNlxnboRwWe9E8jRiUScHErf2H1fjDpAUXCnPH0ezyCHdCS4C4mvLarDdu9wfDMdmFArFcLGXEt6xiVWXy/1b0aU8Lm3W3UC1fwZq4M+jQxAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
