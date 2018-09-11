<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.09.18
 * Time: 14:46
 */

$arr = [4, 2, 6, 8, 3, 9, 15];

$count_arr = count($arr); // =7

for ($i = 0; $i < $count_arr; $i++) {
    print_r($arr[$i]);
    echo '<br>';
}

echo '<hr>';

$arr2 = ['name' => 'milk',
    'price' => '20',
    'description' => 'Nise milk',
];

foreach ($arr2 as $k => $v){
    echo "[$k] => $v"  . ' <br/>';
}