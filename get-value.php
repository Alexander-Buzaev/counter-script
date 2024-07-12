<?php
// Проверка наличия файла с значением счётчика
if (!file_exists('counter.txt')) {
    file_put_contents('counter.txt', 0);
}

// Получение текущего значения счётчика
$counterValue = file_get_contents('counter.txt');
echo $counterValue;
?>
