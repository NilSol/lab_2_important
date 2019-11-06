<?php

session_start();

$products = array (
1=> array('name'=>'Apple ', 'price'=>1000),
2=>array ('name'=>'Sumsung ', 'price'=>850),
3=>array('name'=>'Xiaomi ', 'price'=>300),
4=>array('name'=>'Meizu ', 'price'=>500),
);

function delete($id)
{
    unset($_SESSION['cart']['items'][$id]);
    calc();
}
function calc()
{
    $_SESSION['cart']['sum'] = 0;
    foreach ($_SESSION['cart']['items'] as $id => $item) {
        $_SESSION['cart']['sum'] += $item['price'] * $item['count'];
    }
}

