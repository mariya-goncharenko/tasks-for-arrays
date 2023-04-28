<?php
echo '<h2 class="title">Задача 6.</h2>';
echo '<p>Напишите скрипт PHP, который декодирует следующую строку JSON.</p>';
function task6($value,$key)
{
echo "$key : $value"."<br>";
}


$a ='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';

$json = json_decode($a,true);
echo "<p>Ответ: </p>";
array_walk_recursive($json,"task6");
?>