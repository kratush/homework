<?php
$a = '78';
$b = 78;
$c = "$a = $b";
$d = "$a != $b";

if ($a = $b){
    var_dump("Равны");
} else var_dump("Не равны");