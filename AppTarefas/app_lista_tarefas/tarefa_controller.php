<?php

    require "Tarefa.service.php";
    require "conexao.php";
    require "Tarefa.model.php";

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);

    echo '<pre>';
    print_r($tarefaService);
    echo '</pre>';
?>