<?php
echo '<h2 class="title">Задача 5.</h2>';
echo '<p>Напишите сценарий PHP, чтобы получить первый элемент указанного выше массива.</p>';
$color = array (4 => 'white', 6 => 'green', 11 => 'red');
echo "<p>Начальное состояние массива: </p>";
var_dump($color);
echo "<br>";
echo "<p>Ответ: $color[4]</p>";
?>