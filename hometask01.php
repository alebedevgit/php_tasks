<?php
	echo "<p><strong>Создать переменную login, присвоить ей строковое значение. Вывести на экран фразу: \"Вы вошли под именем (значение переменной login)\" Удалите переменную login.</strong></p>";
	
	$login = "name";
	echo "<p>Вы вошли под именем $login</p>";
	unset($login);
	var_dump($login);

	echo "<p><strong>Даны два числа. Найдите сумму их квадратов.</strong></p>";

	$a = 1;
	$b = 2;
	$sum = $a**2 + $b**2;
	echo "<p>a = $a, b = $b</p><p>Сумма квадратов заданных чисел равна $sum</p>";


	echo "<p><strong>Рассчитать скорость движения машины и вывести её в удобочитаемом виде. <br>
		Вывод в км/ч, м/c. <br>
		Исходные данные: Пройденный путь - S; Время движения - t.</strong></p>";

	$S = 120;
	$t = 2;
	echo "Пройденный путь равен $S км <br>";
	echo "Время равно $t ч <br>";
	$v_kmh = $S/$t;
	$v_ms = $v_kmh*1000/3600;
	echo "Скорость равна $v_kmh км/ч или $v_ms м/с";

	echo "<p><strong>Создайте константу и присвойте ей значение. <br>
		Выведите значение созданной константы.<br>
		Попытайтесь изменить ее значение.</strong></p>";

	define("constanta", "Константа"); 
	var_dump(constanta);
	const constanta = "Новая константа";
	var_dump(constanta);
	

	echo "<p><strong>В переменной n хранится вещественное число с ненулевой дробной частью.<br>
		Необходимо округлить число n до ближайшего целого и вывести результат на экран.</strong></p>";

	$n = 2.3333;
	var_dump ($n);
	$n = round($n);
	echo "<br>После округления n стало равно $n";

	echo "<p><strong>В переменной n хранится натуральное трёхзначное число.<br>
		Необходимо вычислить и вывести на экран сумму цифр числа n.</p>";

	$n = 123;
	var_dump ($n);
	echo "<br>Сумма чисел $n равна ", $n%10 + ($n - $n%10)/10%10 + (($n - $n%10)/10 - ($n - $n%10)/10%10)/10;