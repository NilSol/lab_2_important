<?php
require 'cart.php';
require 'session_array.php';
$product = $_POST['product'];
$count = $_POST['count'];
$product = $products[$product];
$_SESSION['cart']['sum'] += $product['price'] * $count;
$_SESSION['cart']['items'][] = ['name' => $product['name'], 'count' => $count, 'price' => $product['price']];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>polyglot</title>
</head>
<body>
<form action="add.php" method="post" align = 'left' enctype="multipart/form-data">
    <div class="select-arrow"></div>
    <b><?php echo $word_3 = $tongue[$lang][5]; ?></b>
            <select name="product" required  autofocus>
                <option value=""><?php echo $word_4 = $tongue[$lang][3]; ?></option>
                <?php foreach ($products as $id => $type) { ?>
                    <option value="<?php echo $id ?>"><?php echo $type['name'] ?></option>
                <?php } ?>
            </select>
            <div class="select-arrow"></div>
            <b><?php echo $word_5 = $tongue[$lang][4]; ?></b>
            <input type="number"   name="count" required min="1" max="9999" maxlength="4" oninput="this.value=this.value.slice(0,this.maxLength||1/1);this.value=(this.value   < 1) ? (1/1) : this.value;"/>
            <p> <input TYPE="submit" value ="<?php echo $word_6 = $tongue[$lang][6]; ?>" class="btn btn-outline-primary"></p>
</form>

<pre>
    <div style="color:brown;">
        <?php echo  $word_12 = $tongue[$lang][12] . ' ' . $_SESSION['cart']['sum'];?>
<table>
        <?php foreach($_SESSION['cart']['items'] as $item){
            echo '<tr><td>'. $item['name']. '</td><td>'. $item['price']. '</td></tr>';
        }?>
        </table>
    </div>
      <button onclick='location.href="list.php"'> <?php echo $word_11 = $tongue[$lang][11]; ?></button>
</pre>
<form method="post">
    <div class="select-arrow"></div>
    <button type="submit" name="submit" class="btn btn-outline-primary">Log out</button>
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
