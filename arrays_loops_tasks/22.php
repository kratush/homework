<?php
$star = "*";
$height = 20;

for ($i = 0; $i < $height; $i= $i + 2) {
    echo str_repeat($star,$i)."<br>";
}