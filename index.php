<?php

    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $usuario = 'root';
    $senha = '';

    try {

        $conexao = new PDO($dsn, $usuario, $senha);

        $query = ' select*from tb_usuarios';

        // $stmt = $conexao->query($query);

        foreach( $conexao->query($query) as $chave => $valor){
            print_r($valor);
        }

        //     $lista_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // echo '<pre>';
        // print_r($lista_usuario);
        // echo'</pre>';


        //     foreach($lista_usuario as $key => $value){
        //         echo $value['nome'];
        //         echo '<hr>';
        //     }

    }catch (PDOException $e) {
         echo "Erro Code : .$e->getCode() ";
         echo "Mensagem: ' .$e->getMessage()";
         echo "Arquivo: '  .$e->getFile()";
    }