<?php
$arr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$day = date ("l");

foreach ($arr as $value){
    if ($value == $day){
        echo "<b>$value" ."</b></br>";
    } else {
        echo $value."<br>";
    }
}