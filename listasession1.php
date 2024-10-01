<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc. 1 - session</title>
</head>
<body>
<?php

session_start();


if (isset($_SESSION['cont'])) {
    $_SESSION['cont']++;
} else {
    $_SESSION['cont'] = 1;
}


echo "Esta página foi acessada " . $_SESSION['cont'] . " vez(es).";
?>
</body>
</html>