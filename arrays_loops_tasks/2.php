<?php
$array = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($array as $value) {
    $result += $value;
}
echo $result;