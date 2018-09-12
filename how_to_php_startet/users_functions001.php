<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.09.18
 * Time: 9:38
 */

function sayHello($a = 'Привіт'){
    echo $a;
}

sayHello();

echo '<hr>';

function factorial($number) {
    if ($number < 2) {
        return $number;
    } else {
        return ($number * factorial($number-1));
    }
}


$b = factorial(4);
echo $b;

echo '<hr>';

$empty_array = function()
{
    return [];
};
print_r($empty_array());

echo '<hr>';

function returnText($text){
    return sayHello(). ' ' .$text;
}

$result = returnText('Бадян!');
echo $result;
