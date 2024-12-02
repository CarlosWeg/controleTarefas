<?php

    class Tarefa{
        private $oDataBase;

        public function __construct(){
            $this->oDataBase = new Database;
        }

        public function obterTarefas(){
            $sConsulta = "SELECT ID,
                                 DESCRICAO,
                                 STATUS
                            FROM TBTAREFA";

            $this->oDataBase->executarConsulta($sConsulta);
        }

        public function criarTarefa($sDescricao){
            $sComando = "INSERT INTO TBTAREFA
                                (DESCRICAO)
                         VALUES ($sDescricao";
        }

        public function atualizarStatusTarefa($id){
            $sComando = "UPDATE TBTAREFA
                            SET STATUS = NOT STATUS
                          WHERE ID = $ID";
            
            $this->oDataBase->executarComando($sComando);
        }

        public function deletarTarefa($id){
            $sComando = "DELETE FROM TBTAREFA
                          WHERE ID = $ID";
            
            $this->oDataBase->executarComando($sComando);
        }

    }