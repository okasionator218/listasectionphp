<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc. 3 - session</title>
</head>
<body>
<?php

session_start();

if (!isset($_SESSION['usuarios'])) {
    $_SESSION['usuarios'] = [];
}

function gerarId() {
    return count($_SESSION['usuarios']) + 1;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeUsuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];
    
 
    $idUsuario = gerarId();

    $_SESSION['usuarios'][] = [
        'id' => $idUsuario,
        'nome_usuario' => $nomeUsuario,
        'senha' => password_hash($senha, PASSWORD_DEFAULT)
    ];

    echo "Usuário ".$nomeUsuario." registrado com sucesso! Seu ID é: " . $idUsuario . "<br><br>";
}

echo '
    <h2>Registro de Usuário</h2>
    <form method="POST" action="">
        Nome de Usuário: <input type="text" name="nome_usuario" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" value="Registrar">
    </form>
';
?>

</body>
</html>