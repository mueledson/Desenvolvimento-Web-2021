<?php

    if (!empty($_POST['usuario']) && !empty($_POST['senha'])) {

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);

            //query
            $query = " SELECT * FROM tb_usuarios WHERE ";
            $query .= " email = :usuario";
            $query .= " AND senha = :senha";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['usuario']);
            $stmt->bindValue(':senha', $_POST['senha'], PDO::PARAM_INT);

            $stmt->execute();

            $usuario = $stmt->fetch();

            echo "<pre>";
            print_r($usuario);
            echo "</pre>";

        }catch (PDOException $e) {

            echo 'Erro Code:' .$e->getCode(). ' Mensagem ' .$e->getMessage();
        }
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="./login.php">
            <input type="text" placeholder="usuario" name="usuario">
            <br><br>
            <input type="password" placeholder="senha" name="senha">
            <br><br>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>