<?php
$a = 200;
$b = 45;
$operator = '/';

switch ($operator) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        if ($b == 0) {
            echo "На 0 делить нельзя";
        } else echo $a / $b;
        break;
    case '%':
        if ($b == 0) {
            echo "На 0 делить нельзя";
        } else echo $a % $b;
        break;
}