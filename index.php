<?php
$is_auth = rand(0, 1);

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

$user_name = 'Дима'; // укажите здесь ваше имя
?>
        <?php if($is_auth == 1): ?>
            <div class="user-menu__logged">
                <p><?=$user_name; ?></p>
                <a class="user-menu__bets" href="pages/my-bets.html">Мои ставки</a>
                <a class="user-menu__logout" href="#">Выход</a>
        <?php else: ?>
            <ul class="user-menu__list">
    <li class="user-menu__item">
      <a href="#">Регистрация</a>
    </li>
    <li class="user-menu__item">
      <a href="#">Вход</a>
    </li>
  </ul>
        <?php endif; ?>
            <?php 
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
            ?>
            <?php foreach ($lots as $lot): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?=$lot['URL']; ?>" width="350" height="260" alt="">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?=$lot['category']; ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?=$lot['title']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= format_price($lot['price']); ?></span>
                        </div>
                        <div class="lot__timer timer">
                            12:23
                        </div>
                    </div>
                </div>
            </li>
            <?php endforeach; ?>

            <?php foreach($categories as $category): ?>
            <li class="nav__item">
                <a href="pages/all-lots.html"><?=$category; ?></a>
            </li>
            <?php endforeach; ?>
