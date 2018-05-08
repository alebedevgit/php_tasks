<?php
echo "<p><strong>1. Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл).</strong></p>";
for ($i = 1; $i < 11; $i++) {
    for ($j = 1; $j < 11; $j++) {
        echo "$i * $j = ",$i * $j,"<br>";
    }
}


echo "<p><strong>2. Нарисуйте треугольник (или ромб) из символов *. 
Высота треугольника равна 15.</strong></p>";

$height = 15;
for($i=1; $i<=$height; $i++) {
    for($j=1; $j<=$i; $j++) {
        echo "* ";
    }
    echo "<br>";
}



echo "<p><strong>2. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите жирным. 
	Текущий день можно получить с помощью функции date.
	Название дней выводить по-русски</strong></p>";

$days = [
    'Monday'=>"Понедельник",
    'Tuesday'=>"Вторник",
    'Wednesday'=>"Среда",
    'Thursday'=>"Четверг",
    'Friday'=>"Пятница",
    'Saturday'=>"Суббота",
    'Sunday'=>"Воскресенье",
];
$currentDay = date('l');    

foreach ($days as $key => $value) {
    if ($key == $currentDay) {
        echo "<p><strong>$value</strong><p>";
    } else {
    echo "<p>$value</p>";
    }
}