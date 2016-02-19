<?php
$max= $_POST ["number"];
$file = file("3.txt");
$arr = explode(" ", $file);

foreach( $arr as $key => $val) {
    if(strlen($val) <= $max) {
        echo $val . " ";
    }
}