<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc. 2 - session</title>
</head>
<body>
<?php

session_start();

function calcularIdade($dataNascimento) {
 
    $nascimento = strtotime($dataNascimento);

    $agora = time();

    $diferencaseg = $agora - $nascimento;

    $idade = floor($diferencaseg / (60 * 60 * 24 * 365.25));

    return $idade;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['data_nascimento'] = $_POST['data_nascimento'];
}


if (isset($_SESSION['nome']) && isset($_SESSION['data_nascimento'])) {
    $nome = $_SESSION['nome'];
    $dataNascimento = $_SESSION['data_nascimento'];
    $idade = calcularIdade($dataNascimento);

 
    echo "Bem-vindo, $nome! Você tem $idade anos.";
} else {
 
    echo '
    <form method="POST" action="">
        Nome: <input type="text" name="nome" required><br>
        Data de Nascimento: <input type="date" name="data_nascimento" required><br>
        <input type="submit" value="Enviar">
    </form>
    ';
}
?>


</body>
</html>