<?php

    if (!empty($_POST[':usuario']) && !empty($_POST[':senha'])) {
        
        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $usuario = 'root';
        $senha = '';

        try {
            $conexao = new PDO($dsn, $usuario, $senha);

            //query
            $query = "SELECT * from tb_usuarios where";
            $query .= "email = '{$_POST['usuario']}'";
            $query .= "AND senha = '{$_POST['senha']}'";

            echo $query;

            $stmt = $conexao->query($query);
            $usuario = $stmt->fetch();

            echo '<hr/>';

            echo '<pre>';
            echo($usuario);
            echo '</pre>'; 

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