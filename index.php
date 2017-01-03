<?php
$access_token = 'CdDYlY9qqNN7g64umv6/8UFdJE2x44h+8n2IdV74kiEY8OIftb9SMwqjr9O4VzEFu7Xh/V/Fkh5fVpqiGuzntROv/PocnPGQXtrN5i0azudzHYxapZqVnTpfrQZF2IxwqkRvkZFGyQ3GWbBUs0H2BAdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
