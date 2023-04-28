<?php
echo '<h2 class="title">Задача 4.</h2>';
echo '<p>Удалить элемент из приведенного выше массива PHP. После удаления элемента целочисленные ключи должны быть нормализованы.</p>';
$x = array(1, 2, 3, 4, 5);
echo "<p>Начальное состояние массива: </p>";
var_dump($x);
echo "<br>";
echo "<p>Ответ: </p>";
unset($x[3]);
$x=array_values($x);
var_dump($x);
echo "<br>";
unset($x[1]);
$x=array_values($x);
var_dump($x);
?>