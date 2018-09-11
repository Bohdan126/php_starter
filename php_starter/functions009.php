<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.09.18
 * Time: 15:16
 */

$login = 'Rollins';

if (empty($login)){
    echo 'Значення пусте';
} else{
    echo strlen($login);
    echo '<br>';
    echo substr("$login", 0, 3);
    echo '<br>';
}

$email = substr('b.mykhalchuk@internetdevels.com', 0, 10);
echo $email;
echo '<br>';

$clean = array("a", "k", "h");
echo $cleanedtext = str_replace($clean, "", $email);

