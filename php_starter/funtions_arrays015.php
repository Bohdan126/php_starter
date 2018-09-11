<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.09.18
 * Time: 15:27
 */

$arr = [4, 2, 6, 8, 3, 9, 15];

sort($arr);

print_r($arr);

echo '<br>';

$a = count($arr);

$arr_end = array_fill(6, $a, $a );

print_r($arr_end);

array_push($arr, $arr_end);

echo '<br>';

print_r($arr);

