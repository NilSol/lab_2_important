<?php
require 'session_array.php';
$forename = $_SESSION['login'];
if(isset($_POST['language'])) {
    switch ($_POST['language']) {
        case 'ru':
            $ru_1 = $tongue['ru'][1];
            $ru_2 = $tongue['ru'][2];
            break;
        case 'ua':
            $ru_1 = $tongue['ua'][1];
            $ru_2 = $tongue['ua'][2];
            break;
        case 'en':
            $ru_1 = $tongue['en'][1];
            $ru_2 = $tongue['en'][2];
            break;
        case 'it':
            $ru_1 = $tongue['it'][1];
            $ru_2 = $tongue['it'][2];
            break;
        case 'iv':
            $ru_1 = $tongue['iv'][1];
            $ru_2 = $tongue['iv'][2];
            break;

    }
    $word_1 = $ru_1;
    $word_2 = $ru_2;
}
else {
    $lang = $users[$_SESSION['user_id']]['lang'];
    $word_1 =  $tongue[$lang][1];
    $word_2 = $tongue[$lang][2];
}
if(isset($_POST['submit']))
{
    __exit();
}
?>
<!DOCTYPE html>
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
        <h1 class="display-4"><?php echo $forename . ', '. $word_1 ?></h1>
        <p class="lead"><?php echo $word_2?></p>
    </div>
    <div>
    </div>
</div>
<form method="POST">
    <div class="select-arrow"></div>
    <button type="submit" name="submit" class="btn btn-outline-primary">Log out</button>
</form>

<!-- Следущее задание-->
<form action="" method="post" align = 'left'>
    <div class="select-arrow"></div>
    <b> Выберите товар: </b>
    <div class="form-wrap">
        <div>
            <select name="product" required  autofocus>
                <option value="">Товар</option>
                <option value="ap">Apple</option>
                <option value="su">Sumsung</option>
                <option value="xi">Xiaomi</option>
                <option value="me">Meizu</option>
            </select>
            <div class="select-arrow"></div>
            <b>Выбирите количиства товара: </b>
            <input type="number"   name="salary" required min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
            <p> <input TYPE="submit" value ="Посчиттать" class="btn btn-outline-primary"></p>
</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
