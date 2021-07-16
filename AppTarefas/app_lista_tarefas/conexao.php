<?php

class Conexao{

    private $host = 'localhost';
    private $banco = 'app_tarefas';
    private $usuario = 'root';
    private $senha = '';


    public function Conectar(){
        try {

            $conexao = new PDO(
                "mysql:host=$this->host;dbname=$this->banco",
                "$this->usuario",
                "$this->senha",
            );

            return $conexao;

        } catch (PDOException $e) {
            echo '<p>' .$e->getMessage(). '</p>';
        }
    }
}
