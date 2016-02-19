<?php
function getCommonWords($a, $b) {
    $arr = array();
    $arr1 = explode(' ', $a);
    $arr2 = explode(' ', $b);
    foreach ($arr1 as $val1) {
        foreach ($arr2 as $val2) {
            if ($val1 === $val2) {
                $arr[] = $val1;
            }
        }
    }
    $res = array_unique($arr);
    echo "<pre>";
    print_r($res);
    echo "</pre>";
}
$text1 = $_POST["message1"];
$text2 = $_POST["message2"];

getCommonWords($text1, $text2);

