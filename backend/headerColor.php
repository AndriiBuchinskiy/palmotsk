<?php
$colors = array('помаранчевий' => 'orange', 'жовтий' => 'yellow', 'червоний' => 'red');
$bgсolor = '#fff';
if (isset($_COOKIE['bgcolor']) && in_array($_COOKIE['bgcolor'], $colors))
{
    $bgcolor = $_COOKIE['bgcolor'];
}
if (isset($_POST['bgcolor']) && in_array($_POST['bgcolor'], $colors))
{
    $bgcolor = $_POST['bgcolor'];
    setcookie('bgcolor',$bgcolor,0);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        .header{
            background: <?php echo $bgcolor; ?>;
            width: 100%;
            height: 150px;
        }
    </style>
</head>
<body>
<div class="header"></div>
<form method="POST" action=''>
    Виберіть колір шапки сайту
    <select name="bgcolor">
        <?php
        foreach($colors as $key => $value)
        {
            $selected_value = ($bgcolor == $value) ? ' selected="selected"' : '';
            echo '<option value="' . $value . '"' . $selected_value .'>' . $key . '</option>'. "<br>";
        }
        ?>
    </select>
    <input type="submit" value="Выбрать">
</form>
</body>
</html>