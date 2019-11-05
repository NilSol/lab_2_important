<?php ?> <!-- если пользователя сюда перенаправели,то он не идентифицироваан, а значит ему нужно дать выбор язык,
 после этого пользователя отправляют на файл home_page.php -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>polyglot</title>
</head>
<body>
 <form method="post" action="home_page.php" align = 'middle'>
 <p><font size="5" color="red" face="Arial">Выбирите язык</font></p>
        <div class="form-wrap">
       <div>
            <select name="language" required  autofocus>
                <option value="">Выбирите язык</option>
                <option value="ru">Русский</option>
                <option value="en">English</option>
                <option value="ua">Український</option>
                <option value="it">Italiano</option>
                <option value="iv">Hebrew</option>
            </select>
            <div class="select-arrow"></div>
        <button type="submit" class="btn btn-outline-primary">Далее</button>
        </div>
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
