<?php
    require ('helpers.php');
    function format_price ($num) {
        $num = ceil($num);
        if ($num < 1000) {
            $num = $num . " ₽";
            return $num;
        }
        $num = number_format($num, 0, ',', ' ');
        $num = $num . " ₽";
        return $num;
    }
    $categories = ["Ботинки", "Одежда", "Инструменты", "Разное"];
    $lots = [
        [
            'title' => '2014 Rossignol District Snowboard',
            'category' => 'Доски и лыжи',
            'price' => '10999',
            'URL' => 'img/lot-1.jpg'
        ],
        [
            'title' => 'DC Ply Mens 2016/2017 Snowboard',
            'category' => 'Доски и лыжи',
            'price' => '159999',
            'URL' => 'img/lot-2.jpg'
        ],
        [
            'title' => 'Крепления Union Contact Pro 2015 года размер L/XL',
            'category' => 'Крепления',
            'price' => '8000',
            'URL' => '	img/lot-3.jpg'
        ],
        [
            'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
            'category' => 'Ботинки',
            'price' => '10999',
            'URL' => 'img/lot-4.jpg'
        ],
        [
            'title' => 'Куртка для сноуборда DC Mutiny Charocal',
            'category' => 'Одежда',
            'price' => '7500',
            'URL' => 'img/lot-5.jpg'
        ],
        [
            'title' => 'Маска Oakley Canopy',
            'category' => 'Разное',
            'price' => '5400',
            'URL' => 'img/lot-6.jpg'           
        ]
    ];
    $content = include_template('main.php', ['categories' => $categories, 'lots' => $lots]);
    $page = include_template('layout.php', ['main' => $content, 'title' => 'Главная', 'user_name' => 'Дима', 'categories' => $categories]);
    echo $page;
?>
