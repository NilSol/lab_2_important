<?php
// Функция по удалению товара из корзины
require 'cart.php';
delete($_GET['id']);
header('Location:list.php');