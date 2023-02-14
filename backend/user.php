<?php
require_once 'vendor/autoload.php';
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

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
<body class="text-center">

<main class="form-signin">
    <h1 class="h3 mb-3 fw-normal">You are</h1>

    <div class="form-floating">
        <?php echo $_GET['name'] ?>
    </div>
    <div class="form-floating">
        <?php echo $_GET['surname'] ?>
    </div>
    <div class="form-floating">
        <?php echo $_GET['role'] ?>
    </div>

    <div class="form-floating">
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit"><a href="index.php">Back</a></button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
</main>



</body>
</html>
