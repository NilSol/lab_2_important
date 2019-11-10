<?php
require 'session_array.php';
 /* После того как пользователь ввел свои данные его перенаправляют на этот файл если данные верные,
  то идет приветствие, а потом на home_page_add.php если нет то файл перенаправляет на language.php*/
foreach ($users as $key=>$value)
{
        if ($_POST['login'] == $value['login'] && $_POST['password'] == $value['password'])
        {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['lang'] = $value['lang'];
            $_SESSION['user_id'] = $key;
            break;
        }

    if (!empty($value['lang']))
    {
        $_SESSION['login'] = $_POST['login'];
        header('Location: language.php');
        exit();
    }

        if($key === (count($users) - 1))
        {
            __exit();
        }
}
$forename = $_SESSION['login'];
$lang = $users[ $_SESSION['user_id']]['lang'];
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
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><?php echo $forename . ' '. $tongue[$lang][0]; ?></h1
    </div>
</div>
<script type="text/javascript"> setTimeout(function(){
        window.location.href = 'home_page.php';
    }, 3 * 1000); </script>
</body>
</html>
