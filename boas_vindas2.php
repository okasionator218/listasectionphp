<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>boas vindas com cor</title>
</head>
<body>
<?php

session_start();


if (!isset($_SESSION['usuario_logado'])) {
   
    header("Location: listasession5.php");
    exit;
}


$cor = $_SESSION['cor_pagina'] ?? '#ffffff';


echo "
    <body style='background-color: $cor;'>
        <h2>Bem-vindo, " . $_SESSION['usuario_logado'] . "!</h2>
    </body>
";
?>


</body>
</html>