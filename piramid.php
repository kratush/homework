<?php
$height = 20;
for($i = 1; $i <= $height; $i++){
    echo str_repeat('&nbsp;',$height-$i);
    echo str_repeat('*',$i)."<br>";
}