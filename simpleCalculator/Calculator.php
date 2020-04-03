<?php

class Calculator
{
    public function calculate($num1, $num2)
    {

        if ($num1 >= PHP_INT_MAX || $num2 >= PHP_INT_MAX) {
            return "You're too big I can't take it!";
        }

        switch ($_REQUEST['_calculations']) {
            case "addition":
            {
                if ($num1 + $num2 >= PHP_INT_MAX) {
                    return 'Limit Exceeded';
                } else {
                    return $num1.' + '.$num2.' = ' . ($num1 + $num2);
                    break;
                }
            }
            case "minus":
            {
                if ($num1 - $num2 <= PHP_INT_MIN) {
                    return 'Limit Exceeded';
                } else {
                    return $num1.' - '.$num2.' = ' . ($num1 - $num2);
                    break;
                }
            }
            case "multiplication":
            {
                if ($num1 * $num2 >= PHP_INT_MAX) {
                    return 'Limit Exceeded';
                } else {
                    return $num1.' x '.$num2.' = ' . ($num1 * $num2);
                    break;
                }
            }
            case "divide":
            {
                if ($num2 == 0) {
                    return "You can't divide by zero";break;
                } else return $num1.' / '.$num2.' = ' . ($num1 / $num2);
                break;
            }
        }
    }
}