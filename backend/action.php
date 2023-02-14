<?php
if (isset($_POST['hide'])) {
    setcookie('hideBanner', true, time() + 60 * 60 * 24 * 30);
}
header('Location: http://localhost:85/index.php');