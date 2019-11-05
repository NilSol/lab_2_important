<?php

 function __exit()
 {
     session_destroy();
     session_unset();
     header('Location: form.php');
     exit();
 }
    session_start();

$users = array (
    array  ('login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'),
    array ('login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'),
    array ('login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'),
    array ('login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'),
    array ('login' => 'Nikita', 'password' => '0000', 'lang' => 'iv'),
    array ('login' => 'Sasha', 'password' => 'Ignorantia_non_excusat'),
);
$tongue= array(
    'ru' => array ('Здравствуйте', 'Вы на главной странице' ,'Не трогай меня и я не трону тебя'),
    'en' => array ('Hello', 'You are on the main page',  'Do not touch me and I will not touch you'),
    'ua' => array ('Вітаємо','Ви на головній сторінці', 'Ти не чіпай мене і я не трону тебе'),
    'iv' =>array('שלום','אתה נמצא בעמוד הראשי','אל תיגע בי ולא אגע בך'),
    'it' =>array('Ciao','Sei nella pagina principale','Non toccarmi e io non ti toccherò'),
);
?>
