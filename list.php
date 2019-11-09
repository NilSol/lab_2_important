<?php
// Это будет корзина, здесь будет отбражаться весь товар что выбрал пользователь
require 'cart.php';
require 'session_array.php';
if(isset($_POST['submit']))
{
    __exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>polyglot</title>
    <style>
        .inner {
            margin-left: auto;
            margin-right: auto;
            width: 35em;
        }
    </style>

    <style>
        .left {
            margin-left: 70%;
            width: 30em;
        }</style>
</head>
<body>
<br>
<div class="left">
    <form method="post">
        <button  type="submit" name="submit">Log out</button>
    </form>
</div>
<br>
<br>
<br>
<div class="inner">
    <h3  align="center">
        <?php echo $word_11 ?>
    </h3>
    <div>
        <table>
            <thead>
            <tr>
                <th> <?php echo $word_8 ?></th>
                <th><?php echo $word_9; ?></th>
                <th class="right aligned"><?php echo $word_10 ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($_SESSION['cart']['items'] as $id => $item) { ?>
                <tr>
                    <td width=70%><?php echo $item['name'] ?></td>
                    <td width=15%><?php echo $item['count'] ?></td>
                    <td width=15% class="right aligned"><a href='delete.php?id=<?php echo $id ?>'><?php echo $word_10 ?></a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <table>
            <td>
                <button onclick='location.href="add.php"'><?php echo $word_13 ?></button>
            </td>
            <td><h2
                    align="right"><?php echo $word_14 . ' ' . $_SESSION['cart']['sum']; ?></h2></td>
        </table>
    </div>
</div>
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