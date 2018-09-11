<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.09.18
 * Time: 8:47
 */

$a = "<span class='refnamediv'>
       <h1>htmlspecialchars</h1>
        <p>(PHP4, PHP5, PHP7)
        <span class\"dc-title\">Олег Ска</span></p>
        </div>";

$b = strip_tags($a);
echo $b;
echo '<br>';
echo strlen($b);