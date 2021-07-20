<?php 

class TarefaService{

    private $conexao;
    private $tarefa;

    public function __construct(Conexao $conexao, Tarefa $tarefa){
        $this->conexao = $conexao->Conectar();
        $this->tarefa = $tarefa;
    }
    public function Inserir(){ // CREATE / criar
        $query = 'INSERT INTO tb_tarefas(tarefa) VALUES(:tarefa)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
        $stmt->execute();
    }
    public function Recuperar(){// READ / leitura   
    }
    public function Atualizar(){// UPDATE / atualizar   
    }
    public function Remover(){// DELETE / remover
    }
}