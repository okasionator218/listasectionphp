<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>página de boas vindas do usuário</title>
</head>
<body>
<?php

session_start();


if (!isset($_SESSION['usuario_logado'])) {
   
    header("Location: listasession4.php");
    exit;
}


echo "<h2>Bem-vindo, " . $_SESSION['usuario_logado'] . "!</h2>";
?>

</body>
</html>