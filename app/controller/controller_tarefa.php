<?php

    require_once __DIR__ . '/../config/autoload.php';

    class TarefaController{
        private $tarefa;

        public function __construct(){
            $this->tarefa = new Tarefa();
        }

        public function listarTarefas(){
            return $this->tarefa->obterTarefas();
        }

        public function criarTarefa($sDescricao){
            $this->tarefa->criar($sDescricao);
        }

        public function removerTarefa($id){
            $this->tarefa->deletar($id);
        }

        public function atualizarStatus(){
            $this->tarefa->atualizar();
        }

    }