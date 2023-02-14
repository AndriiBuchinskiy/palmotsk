<?php
session_start();

?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
<title>Document</title>
</head>
<body>
<ui>
    <li>
        <img width="100px" src="https://content1.rozetka.com.ua/goods/images/big_tile/277025795.jpg" alt="">
        <form action="action2.php" method="post">
            <label for="product">Samsung Galaxy M13 , 6700 грн</label>
            <input type="hidden" name="product" value="Samsung Galaxy M13">
            <input type="hidden" name="test1" value="6700">
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="send1">Send</button>
        </form>
    </li>
    <li>
        <img width="100px" src="https://content1.rozetka.com.ua/goods/images/big_tile/263855197.jpg" alt="">
        <form action="action2.php" method="post">
            <label for="product">Samsung Galaxy M53, 15000 грн</label>
            <input type="hidden" name="product" value="Samsung Galaxy M53">
            <input type="hidden" name="test1" value="15000">
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="send1">Send</button>
        </form>
    </li>
    <li>
        <img width="100px" src="https://content2.rozetka.com.ua/goods/images/big_tile/284844060.jpg" alt="">
        <form action="action2.php" method="post">
            <label for="product">Aplle Watch SE, 13700 грн</label>
            <input type="hidden" name="product" value="Apple Watch SE">
            <input type="hidden" name="test1" value="13700">
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="send1">Send</button>
        </form>
    </li>
    <li>
        <img width="100px" src="https://content2.rozetka.com.ua/goods/images/big_tile/295068014.jpg" alt="">
        <form action="action2.php" method="post">
            <label for="product">Asus Vivobook, 30 000 грн</label>
            <input type="hidden" name="product" value="Asus Vivobook">
            <input type="hidden" name="test1" value="30000">
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="send1">Send</button>
        </form>
    </li>
    <li>
        <img width="100px" src="https://content1.rozetka.com.ua/goods/images/big_tile/37399337.png" alt="">
        <form action="action2.php" method="post">
            <label for="product">Aplle iPhone 11, 24500 грн</label>
            <input type="hidden" name="product" value="Apple iPhone 11">
            <input type="hidden" name="test1" value="24500">
            <button class="w-100 btn btn-lg btn-primary" type="submit" name="send1">Send</button>
        </form>
    </li>

</ui>
<div>Загальна сума покупки: <?php

   if(isset ($_SESSION['test1']))
    {
        $item = (int)$_SESSION['test1'] + (int)$_POST['test1'];
        echo  $item;
    }
   else echo 0;

    ?> грн
</div>
<div> Ви додали до кошика: <?php
    if(isset($_SESSION['products'])){
        $arrProd = json_decode($_SESSION['products']);
        foreach ($arrProd as $item){
            echo $item . ', ';
        }
    }
    else echo "Empty"
    ?>

</div>
<?php
$prod = array();
$allProducts = array();
$item = $_POST['test1'];

if(isset($_SESSION['products'])){
    $allProducts = json_decode($_SESSION['products']);
}
$itemProd = $_POST['product'];
var_dump($itemProd);
$allProducts[] = $itemProd;
$_SESSION['products'] = json_encode($allProducts);

$_SESSION['test1'] = json_decode($_SESSION['products']);
?>

</body>

</html>