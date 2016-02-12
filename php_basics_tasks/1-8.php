<?php
//1
$name = "Катя";
//2
$age = "fhhth";
//3
echo "Меня зовут $name <br>";
//4
echo "Мне $age лет";
echo "<br>";

//5
if ($age >= 18 && $age <= 59){
    echo "Вам еще работать и работать";
}
//6
elseif ($age > 59){
    echo "Вам пора на пенсию";
}
//7
elseif($age > 0 && $age <= 17) {
    echo "Вам еще рано работать";
}
//8
elseif($age <= 0 || $age !== (int)$age) {
    echo "Неизвестный возраст";
}
