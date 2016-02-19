<?php
$arr = array();

for ($i = 0; $i <= 10; $i++) {
    $arr[] = rand(0, 10);
}
print_r ($arr);
echo "<br>";

$min = array_search(min ($arr), $arr);
$max = array_search(max ($arr), $arr);

$arr[$min] = max ($arr);
$arr[$max] = min ($arr);

print_r ($arr);