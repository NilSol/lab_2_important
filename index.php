<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>polyglot</title>
</head>
<body>
<?php
$users = [
    ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
    ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
    ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
    ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
    ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat ' ],
];
?>
<form action="" method="post">
    <p><select name = "select_tongue">
            <option value="ru">ru</option>
            <option value="en">en</option>
            <option value="ua">ua</option>
            <option value="it">it</option>
        </select></p>
</form>
<?php
if($_POST['select_tongue'] == "ru")
{
}
if($_POST['select_tongue'] == "en")
{

}
if($_POST['select_tongue'] == "ua")
{

}
if($_POST['select_tongue'] == "it")
{

}
?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>