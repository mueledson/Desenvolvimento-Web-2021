<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

    }catch (PDOException $e) {

         echo "Erro Code : .$e->getCode() ";
         echo "Mensagem: ' .$e->getMessage()";
         echo "Arquivo: '  .$e->getFile()";
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form action="#">

            <input type="text" placeholder="usuario">
            <br><br>
            <input type="password" placeholder="senha">
            <br><br>
            <button type="submit">Entrar</button>

        </form>
    </body>
</html>