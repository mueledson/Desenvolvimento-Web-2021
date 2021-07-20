<?php

    require "../app_lista_tarefas/Tarefa.service.php";
    require "../app_lista_tarefas/conexao.php";
    require "../app_lista_tarefas/Tarefa.model.php";
    
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefaService = new TarefaService($conexao, $tarefa);
    $tarefaService->Inserir();

    header('Location: nova_tarefa.php?inclusao=1');

?>