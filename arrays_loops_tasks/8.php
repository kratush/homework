<?php
$array = array(1,2,3,4,5,6,7,8,9);
$string = null;

foreach ($array as $value) {
    $string .= $value;
}
echo $string;