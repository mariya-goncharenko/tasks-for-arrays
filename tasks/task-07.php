<?php
echo '<h2 class="title">Задача 7.</h2>';
echo '<p>Напишите скрипт PHP, который вставляет новый элемент в массив в любой позиции.</p>';
$arr = array (1,2,3,4,5);
echo "<p>Начальное состояние массива: </p>";
var_dump($arr);
$i=random_int(0, count($arr));
$arr[$i]= '$';
echo "<br>";
echo "<p>Ответ: </p>";
var_dump($arr);
?>