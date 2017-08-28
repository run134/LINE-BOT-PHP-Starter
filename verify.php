
<?php
$access_token = 'HJEuCizrTpoVa3PZGr8huiCIfHmkIo47Pq2RYzQ1dC0R/58u/R11ViFhl4URwtalXtWz1zjf68SA8tFMBVxHiJQSEIXu+H2SeSTz+Te8KqTS2pGRDV/6oSIYNnsvNvKLYpOgzZn5EC1xwF55fL7MeQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
