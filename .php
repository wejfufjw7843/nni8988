<?php
$menu = [
    1 => ["name" => "Паста карбонара", "price" => 300],
    2 => ["name" => "Стейк с гарниром", "price" => 500],
    3 => ["name" => "Салат Цезарь", "price" => 200],
    4 => ["name" => "Пицца Маргарита", "price" => 250]
];

$order = [];
$totalPrice = 0;

echo "МЕНЮ:\n";
foreach ($menu as $key => $item) {
    echo "{$key}. {$item['name']} - {$item['price']} руб.\n";
}

while (true) {
    $choice = (int) readline("Введите номер блюда (0 - закончить заказ): ");

    if ($choice === 0) {
        break;
    }

    if (isset($menu[$choice])) {
        $order[] = $menu[$choice];
        $totalPrice += $menu[$choice]['price'];
    } else {
        echo "Блюдо с номером $choice не найдено в меню.\n";
    }
}

echo "ВАШ ЗАКАЗ:\n";
foreach ($order as $item) {
    echo "- {$item['name']} - {$item['price']} руб.\n";
}
echo "ИТОГО: {$totalPrice} руб.\n";

?>