<?php
if('login' == 'Vasisualiy' AND 'password' == '12345')
{
echo $tongue['ru'][0] . 'Vasisualiy';
}
if('login' == 'Afanasiy' AND 'password' == '54321'){}
if('login' == 'Petro' AND 'password' == 'EkUC42nzmu'){}
if('login' == 'Pedrolus' AND 'password' == 'Cogito_ergo_sum'){}
else{}
$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat '],
];
$tongue= [
    'ru' => ['Здравствуйте', 'Вы на главной странице' , 'Инструкия к использованию' ,'Не трогай меня и я не трону тебя'],
    'en' => ['Hello', 'You are on the main page', 'Instructions for use', 'Do not touch me and I will not touch you'],
    'ua' => ['Вітаємо','Ви на головній сторінці','Інструкція до використання','Чи не чіпай мене і я не трону тебе'],
    'it' =>['Ciao','Sei nella pagina principale','Istruzioni per l`uso','Non toccarmi e io non ti toccherò'],
]
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Welcome</title>
  </head>
  <body>
  <div class="jumbotron">
      <h1 class="display-4">$</h1>
      <p class="lead"><?php
if('login' == 'Vasisualiy' AND 'password' == '12345')
{
echo $tongue['ru'][0] . 'Vasisualiy';
}?>.</p>
      <hr class="my-4">
      <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>