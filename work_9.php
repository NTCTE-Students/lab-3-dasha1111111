<?php
$numbers = [10, 20, 30, 40, 50];

// Заданный элемент для поиска
$searchValue = 30;

// Ищем элемент в массиве
$index = array_search($searchValue, $numbers);

// Проверяем, найден ли элемент
if ($index !== false) {
    echo "Элемент $searchValue найден на индексе: $index\n";
} else {
    echo "Элемент $searchValue не найден в массиве.\n";
}
?>
