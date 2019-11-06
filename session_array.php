<?php
// В этом файле у нас функция для возврата в форму, массивы, и функции по работе с корзиной
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
    'ru' => array ('Здравствуйте', 'Вы на главной странице' ,'Не трогай меня и я не трону тебя', 'Товар', 'Выберите количество товара', 'Выберите товар', 'Посчитать', 'Дальше', 'Наименование', 'Количество', 'Удалить', 'Корзина покупок', 'К оплате','Вернуться в магазин','Платить'),
    'en' => array ('Hello', 'You are on the main page',  'Do not touch me and I will not touch you', 'Product', 'Choose quantity of goods', 'Choose product', 'To count', 'Next', 'Name', 'Amount', 'Delete','Shopping basket', 'To pay','Back to the store','To pay'),
    'ua' => array ('Вітаємо','Ви на головній сторінці', 'Ти не чіпай мене і я не трону тебе', 'Товар', 'Виберіть кількість товару', 'Виберіть товар', 'Порахувати', 'Далі', 'Найменування','Кількість','Вилучити','Корзина покупок', 'До оплати','Повернутися в магазин','Платити'),
    'iv' =>array('שלום','אתה נמצא בעמוד הראשי','אל תיגע בי ולא אגע בך', 'מוצר', 'בחר כמות סחורות', 'בחר מוצר', 'לספור', 'בהמשך','שם','כמות','מחק','עגלת קניות', 'לשלם','חזרה לחנות','לשלם'),
    'it' =>array('Ciao','Sei nella pagina principale','Non toccarmi e io non ti toccherò', 'Merce', 'Scegli la quantità di merce', 'Scegli il prodotto', 'Contare', 'Ulteriormente','Nome','Numero','Cancellare','Carrello della spesa', 'Da pagare','Torna al negozio','Da pagare'),
);
if(isset($_POST['language'])) {
    $lang = $_POST['language'];
    $word_1 = $tongue[$lang][1];
    $word_2 = $tongue[$lang][2];
    $word_3 = $tongue[$lang][5]; // Выберите товар
    $word_4 = $tongue[$lang][3]; // Товар
    $word_5 = $tongue[$lang][4]; // Выберите количество товара
    $word_6 = $tongue[$lang][6]; // Посчитать
    $word_7 = $tongue[$lang][7]; // Дальше
    $word_8 = $tongue[$lang][8]; // Наименование
    $word_9 = $tongue[$lang][9]; // Количество
    $word_10 = $tongue[$lang][10]; //Удалить
    $word_11 = $tongue[$lang][11]; // Корзина покупок
    $word_12 = $tongue[$lang][12]; // К оплате
    $word_13 = $tongue[$lang][13]; // Вернуться в магазин
    $word_14 = $tongue[$lang][14]; // Платить
}
else {
    $lang = $users[$_SESSION['user_id']]['lang'];
    $word_1 =  $tongue[$lang][1];
    $word_2 = $tongue[$lang][2];
    $word_3 = $tongue[$lang][5];
    $word_4 = $tongue[$lang][3];
    $word_5 = $tongue[$lang][4];
    $word_6 = $tongue[$lang][6];
    $word_7 = $tongue[$lang][7];
    $word_8 = $tongue[$lang][8];
    $word_9 = $tongue[$lang][9];
    $word_10 = $tongue[$lang][10];
    $word_11 = $tongue[$lang][11];
    $word_12 = $tongue[$lang][12];
    $word_13 = $tongue[$lang][13];
    $word_14 = $tongue[$lang][14];
}
?>
