<?php
 session_start();
session_destroy();
session_unset();
 /* После того как пользователь ввел свои данные его перенаправляют на этот файл если данные верные,
  то идет приветствие если нет то файл перенаправляет на language.php*/
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>polyglot</title>
</head>
<body>
<?php
$users = array (
  array  ('login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'),
   array ('login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'),
   array ('login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'),
   array ('login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'),
   array ('login' => 'Sasha', 'password' => 'Ignorantia_non_excusat '),
);
$tongue= array(
        'ru' => array ('Здравствуйте', 'Вы на главной странице' ,'Не трогай меня и я не трону тебя'),
        'en' => array ('Hello', 'You are on the main page',  'Do not touch me and I will not touch you'),
        'ua' => array ('Вітаємо','Ви на головній сторінці', 'Чи не чіпай мене і я не трону тебе'),
        'it' =>array('Ciao','Sei nella pagina principale','Non toccarmi e io non ti toccherò'),
)
?>


<?php
$_SESSION['login'] = $_POST['login'];
$_SESSION['password'] = $_POST['password'];
 
foreach ($users as $key=>$value) {
    if ($value['login'] == $_POST['login'] && $value['password'] == $_POST['password'])
    {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['lang'] = $value['lang'];
        $_SESSION['user_id']=$key;
        break;
    }
    else
    {
        include 'call_forwarding.php';
    break;
    }
}
$forename = $_SESSION['login'];
  $lang = $users[ $_SESSION['user_id']]['lang'];
?>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><?php echo $forename . ' '. $tongue[$lang][0]; ?></h1
    </div>
</div>
<script type="text/javascript"> setTimeout(function(){
        window.location.href = 'google.com';
    }, 3 * 1000); </script>
</body>
</html>
