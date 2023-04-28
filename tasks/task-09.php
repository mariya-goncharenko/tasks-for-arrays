<?php
echo '<h2 class="title">Задача 9.</h2>';
echo '<p>Напишите PHP-скрипт для расчета и отображения средней температуры, пяти самых низких и самых высоких температур.</p>';
$temp = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65 , 64, 68, 73, 75, 79, 73);
echo "<p>Начальное состояние массива: </p>";
var_dump($temp);
echo "<br>";

echo "<p>Ответ: </p>";

$sum = array_sum($temp);
$count = count($temp);
$mean = $sum/$count;
$intmean=(int)$mean;

echo "<p>Средняя температура:  $intmean </p>";
$i=0;
echo "<p>Список семи самых низких температур: ";
while($i<6) {
    asort($temp);
    $i++;
    echo "$temp[$i] "; 
};
echo "</p>";

$j=0;
echo "<p>Список семи самых высоких температур: ";
while($j<6) {
    rsort($temp);
    $j++;
    echo "$temp[$j] "; 
};
echo "</p>"
?>