<?php
$textar = $_POST ["message"];
function topThree($text){
    $arr1 = explode(" ", $text);
    echo "ТОП-3 длинных слов: <br>";
    for ($i = 0; $i < 3; $i++){
        $max = 1;
        $tmp = 1;
        foreach ($arr1 as $key => $val) {
            $str = mb_strlen($val);
            if ($str < $max) {
                $max = $str;
                $tmp = $key;
            }
        }
        $arr[] = $arr1[$tmp];
        unset($arr1[$tmp]);
        }
    echo "<pre>";
    print_r($arr);

}
topThree($textar);
