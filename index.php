<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO($dsn, $usuario, $senha);

        $query = ' select*from tb_usuarios ';

        $stmt = $conexao->query($query);
        $lista = $stmt->fetchAll(PDO::FETCH_OBJ);

        echo '<pre>';
        print_r($lista);
        echo'</pre>';

        echo $lista[1]->email;

    } catch (PDOException $e) {
        echo "Erro Code : .$e->getCode() ";
        echo "Mensagem: ' .$e->getMessage()";
        echo "Arquivo: '  .$e->getFile()";
    }