<?php
// Проверка наличия файла с значением счётчика
if (!file_exists('counter.txt')) {
    file_put_contents('counter.txt', 0);
}

// Увеличение значения счётчика
$counterValue = file_get_contents('counter.txt');
$counterValue++;
file_put_contents('counter.txt', $counterValue);

// Возврат нового значения счётчика (необязательно)
echo $counterValue;
?>
