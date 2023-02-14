<?php
require_once 'vendor/autoload.php';
session_start();
echo $_SESSION['some'];

if(!isset($_SESSION['ageUser']) && !isset($_SESSION['nameCity']))
{
    $_SESSION['ageUser'] = '';
    $_SESSION['nameCity'] = '';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <button><a href="index.php">link to index</a></button>
    <button><a href="logout.php">Logout page</a></button>
</head>


<form action="index.php" method="post">
    <p>Ім"я <input type="text" name="nameUser" /></p>
    <p>Вік <input type="text" name="ageUser" value="<?= $_SESSION['ageUser'] ?>"/></p>
    <p>Місто  <input type="text" name="nameCity" value="<?= $_SESSION['nameCity'] ?>"/></p>
    <button class="w-100 btn btn-lg btn-primary" type="submit" >Send</button>
</form>

<body class="text-center">

</body>
</html>

