<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc. 4 - session</title>
</head>
<body>
<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeUsuario = $_POST['nome_usuario'];
    $senha = $_POST['senha'];

   
    foreach ($_SESSION['usuarios'] as $usuario) {
        if ($usuario['nome_usuario'] === $nomeUsuario && password_verify($senha, $usuario['senha'])) {
            
            $_SESSION['usuario_logado'] = $nomeUsuario;
            
            header("Location: boas_vindas.php");
            exit;
        }
    }


    echo "Nome de usuário ou senha incorretos.";
}
echo '
    <h2>Login de Usuário</h2>
    <form method="POST" action="">
        Nome de Usuário: <input type="text" name="nome_usuario" required><br><br>
        Senha: <input type="password" name="senha" required><br><br>
        <input type="submit" value="Login">
    </form>
';
?>

</body>
</html>