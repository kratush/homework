<?php
$height = 16;
for($i = 1; $i <= $height; $i++){
    echo str_repeat('&nbsp;',$height-$i);
    echo str_repeat('*',$i)."<br>";
}
for($j = ($height-1); $j >= 1; $j--){
    echo str_repeat('&nbsp;',$height-$j);
    echo str_repeat('*',$j)."<br>";
}