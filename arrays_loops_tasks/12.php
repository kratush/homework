<?php
$n = 1000;
while ($n>50){
    $n /= 2;
}

$num = strlen($n);

echo "Количество итераций - $num<br>";
echo "Число - $n";
