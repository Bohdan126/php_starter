<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.09.18
 * Time: 9:55
 */

echo 'Мій день народжженя '. mktime(16, 14, 45, 07, 24, 1995);
echo '<br>';
echo 'Мій день народжженя '.date("M-d-Y", mktime(0, 0, 0, 07, 24, 1995));

echo '<hr>';
echo 'День народження мами '. mktime(0,0,0,9,11, 1971);
echo '<br>';
echo 'День народження мами '.date("M-d-Y", mktime(0,0,0,9,11, 1971));

echo '<hr>';
echo 'День народжженя тата '. mktime(0,0,0,6,22,1969);
echo '<br>';
echo 'День народжженя тата '.date("M-d-Y", mktime(0,0,0,6,22,1969));

echo '<hr>';

$dateTime = new DateTime();
$dateTime->setDate(1995,7,24);
echo 'Мій день народження '. $dateTime->format('Y-m-d');

echo '<hr>';
$dateTime2 = new DateTime();
$dateTime2->setDate(1971, 9,11);
echo 'День народження мами '. $dateTime2->format('Y-m-d');

echo '<hr>';
$dateTime3 = new DateTime();
$dateTime3->setDate(1969, 6,22);
echo 'День народження тата '. $dateTime3->format('Y-m-d');

echo '<hr>';
//var_dump($GLOBALS);
echo 'Ссилка на цю сторінку';
echo '<br>';
$url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
echo $url;