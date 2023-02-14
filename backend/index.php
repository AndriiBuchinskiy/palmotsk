<?php
require_once 'vendor/autoload.php';

session_start();


$counter = isset($_COOKIE['counter']) ? $_COOKIE['counter'] : 0;
$counter++;
setcookie("counter",$counter);

$lastVisit = date('d-m-Y');
setcookie('lastVisit', $lastVisit, time() + 3600*24*30);
        $lastArr = explode('-', $_COOKIE['lastVisit']);
        $newArr = explode('-', $lastVisit);

        echo 'Останній візит був ' . (mktime(0, 0, 0, $newArr[1], $newArr[0], $newArr[2]) - mktime(0, 0, 0, $lastArr[1], $lastArr[0], $lastArr[2])) / 86400 . ' днів тому.';

if (empty($_SESSION['time'])) {
    $_SESSION['time'] = time();
}


$_SESSION['test'] = 'test';
$_SESSION['some'] = 'Something';
echo "Session ", $_SESSION['test'];

if (isset($_POST['ageUser']) && isset($_POST['nameCity'])) {
    $_SESSION['ageUser'] = $_POST['ageUser'];
    $_SESSION['nameCity'] = $_POST['nameCity'];
}
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
    echo '<br>Ви ще не оновлювали сторінку</br>';
} else {
    $_SESSION['counter']++;   // последующие заходы
}
echo "Counter:",$_SESSION['counter'];


if(isset($_POST['nameCountry'])){
    $_SESSION['country'] = $_POST['nameCountry'];
}
if(!isset($_POST['emailUser'])) {
    $_POST['emailUser']= '';
}
$_SESSION['emailUser'] = $_POST['emailUser'];
echo "Ви відвідали наш сайт $counter разів";




?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>
</head>
<body class="text-center">


<div>Користувач зайшов <?php echo time() - $_SESSION['time']; ?> секунд назад</div>
<button><a href="test.php">link to test.php </a></button>
<button><a href="form.php">link to form.php </a></button>
<button><a href="headerColor.php">link to headerColor </a></button>
<button><a href="action2.php">Перехід на кошик товарів </a></button>
<form action="index.php" method="post">
    <p>Ваша країна <input type="text" name="nameCountry" /></p>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="send1">Send</button>
</form>
<form action="index.php" method="post">
    <p>Ім"я <input type="text" name="nameUsers"  /></p>
    <p>Прізвище <input type="text" name="ageUsers"/></p>
    <p>Пароль <input type="text" name="password"/></p>
    <p>Ваш email <input type="text" name="emailUser" value="<?= $_SESSION['emailUser'] ?>"/></p>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="send2">Send</button>
</form>


<form action="index.php" method="post">
    <p>Ім"я <input type="text" name="nameUser"  /></p>
    <p>Вік <input type="text" name="ageUser"/></p>
    <p>Місто <input type="text" name="nameCity"/></p>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="send">Send</button>
</form>
<form action="index.php" method="post">
    <p>
        <label for="date">Date Birthday: </label>
        <input type="date"  name="date1"/>
    </p>
    <p>
        <button type="submit" name="send3">Send</button>
    </p>
</form>
<?php if(!isset($_COOKIE['hideBanner'])){ ?>
    <div>Банер  реклами...</div>
    <form action="action.php" method="POST">
        <input type="submit" value="Більше не показувати" name="hide">
    </form>
<?php } ?>
<?php
$currentDate = date('d-m-Y');

if(!isset($_POST['date1']))
{
    $_POST['date1'] = date('0-0-0');
} else {
$_COOKIE['dateBr'] = $_POST['date1'];

if(new DateTime($currentDate) == new DateTime($_COOKIE['dateBr']) ){
 echo "Вітаємо з днем народження";
}
else {
    $dateDiff = date_diff(new DateTime($currentDate), new DateTime($_COOKIE['dateBr']))->days;
    echo "До вашого дня народження залишилось" . $dateDiff . "Днів";
}
}

?>
</body>
</html>

