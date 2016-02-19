<?php
$arr = array();

for ($i = 1; $i <= 100; $i++) {
    $arr[] = rand(1, 100);
}
echo 'Массив: <pre>';
print_r ($arr);
echo "<br>";

$arr2 = 1;
$count = count($arr);

echo "Элементы массива у которых не парный индекс: <br>";

for ($i = 0; $i < $count; $i++) {
    if ($i % 2 == 0) {
        $arr2 *= $arr[$i];
    }
    elseif ($i % 2 != 0){
        echo "$arr[$i]<br>";
    }
}
echo "<br>Произведение элементов у которых парные индексы - $arr2";

