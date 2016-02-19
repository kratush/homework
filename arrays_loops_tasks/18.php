<?php
$arr = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$day1 = "Saturday";
$day2 = "Sunday";

foreach ($arr as $value){
        if ($value == $day1){
            echo "<b>$value" ."</b></br>";
        } elseif ($value == $day2){
        echo "<b>$value" ."</b></br>";
        } else {
            echo $value."<br>";
        }
}