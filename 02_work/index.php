<?php error_reporting (-1) ;

$goods = [
    [
        'title' => 'Nokia',
        'price' => 100,
        'qty' => 10,
    ],
    [
        'title' => 'Sony',
        'price' => 130,
        'qty' => 8,
    ],
    [
        'title' => 'Philips',
        'price' => 21500,
        'qty' => 15,
    ],
];

for ($i = 0; $i < count($goods); $i++) {

    echo "<pre> 
    Название товара: {$goods[$i]['title']},
    Цена: {$goods[$i]['price']},
    Количество: {$goods[$i]['qty']}
 </pre>";


};