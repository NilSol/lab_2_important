<?php
require 'session_array.php';
_session();
 /* После того как пользователь ввел свои данные его перенаправляют на этот файл если данные верные,
  то идет приветствие, а потом на home_page.php если нет то файл перенаправляет на language.php*/
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
}
 if($value['login'] !== $_POST['login'] && $value['password'] !== $_POST['password'])
    {
        require 'call_forwarding.php';
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
        window.location.href = 'home_page.php';
    }, 3 * 1000); </script>
</body>
</html>
