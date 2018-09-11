<?php

/**
 * Class MyClass
 */

class MyClass
{
    public $num1;
    public $num2;
    public $operation;


    /**
     * @param $num1
     * @param $num2
     * @param $operation
     * @return float|int
     */
    public static function getNumb($num1, $num2, $operation)
    {
        switch ($operation) {
        case '+':
                $p = ($num1 + $num2);
            return $p;
                break;
        case '-':
                $p = ($num1 - $num2);
            return $p;
                break;
        case '*':
                $p = ($num1 * $num2);
            return $p;
                break;
        case '/':
                $p = ($num1 / $num2);
            return $p;
                break;
        default:
                echo 'Не відомий арифметичний оператор';
        }

    }//end getNumb()


}//end class


$a = 1;
echo MyClass::getNumb(5, 10, '+');
