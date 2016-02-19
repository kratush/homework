<?php
$rows = 15;
$cows = 15;
$colors = array('red','yellow','blue','gray','maroon','brown','green');
echo "<table border='1'>";
    for ($tr = 0; $tr < $rows; $tr++){
        echo "<tr>";
        for($td = 0; $td < $cows; $td++){
            $colors_rand = array_rand ($colors);
            echo "<td bgcolor='$colors[$colors_rand]'>";
            echo rand();
            echo"</td>";
        }
        echo "</tr>";
    }
echo "</table>";
