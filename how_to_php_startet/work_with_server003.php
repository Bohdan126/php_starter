<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 14.09.18
 * Time: 11:37
 */

$ch = curl_init('https://www.youtube.com/');
curl_setopt  ($ch, CURLOPT_HEADER, true);
curl_exec($ch); // выполняем запрос curl
curl_close($ch);
