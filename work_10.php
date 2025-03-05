<?php
$table = [
    ["Имя", "Возраст", "Город"],
    ["Иван", 18, "Москва"],
    ["Арина", 30, "Нижний Тагил"],
    ["Вика", 18, "Екатеринбург"]
];

// Начинаем выводить таблицу
echo "<table border='1' cellpadding='10' cellspacing='0'>";

// Перебираем строки массива
foreach ($table as $row) {
    echo "<tr>"; // Начинаем строку таблицы
    
    // Перебираем элементы строки
    foreach ($row as $cell) {
        echo "<td>" . htmlspecialchars($cell) . "</td>"; // Выводим ячейку
    }
    echo "</tr>";
}
echo "</table>";
?>
