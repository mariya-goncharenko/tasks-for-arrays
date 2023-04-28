<?php
echo '<h2 class="title">Задача 1.</h2>';
echo '<p>Напишите скрипт PHP, который будет отображать цвета следующим образом: <br>
зеленый<br>
красный<br>
белый</p>';
$color = array ('white', 'green', 'red');
$list="<ul><li>$color[1]</li><li>$color[2]</li><li>$color[0]</li></ul>";

echo "<p>Ответ: </p>";
echo $list;
?>