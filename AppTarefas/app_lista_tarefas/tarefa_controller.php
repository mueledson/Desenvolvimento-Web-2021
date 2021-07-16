<?php

    require "../Tarefa.service.php";
    require "./conexao.php";
    require "./Tarefa.model.php";

    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService();

?>