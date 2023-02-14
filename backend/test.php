<?php
require_once 'vendor/autoload.php';
session_start();
echo $_SESSION['some'];

echo "Country user:",$_SESSION['country'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <button><a href="index.php">Next page</a></button>
    <form action="test.php" method="post">
        <p>Ім"я <input type="text" name="nameUsers"  /></p>
        <p>Прізвище <input type="text" name="ageUsers"/></p>
        <p>Пароль <input type="text" name="password"/></p>
        <p>Ваш email <input type="text" name="emailUser" value="<?= $_SESSION['emailUser'] ?>"/></p>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
    </form>
</head>
<body class="text-center">


</body>
</html>


