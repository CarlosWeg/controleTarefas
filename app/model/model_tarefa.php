<?php

    require_once __DIR__ . '/../config/autoload.php';

    class Tarefa{
        private $oDataBase;

        public function __construct(){
            $this->oDataBase = new Database;
        }

        public function listar(){
            $sConsulta = "SELECT ID,
                                 DESCRICAO,
                                 STATUS
                            FROM TBTAREFA";

            $this->oDataBase->executarConsulta($sConsulta);
        }

        public function criar($sDescricao){
            $sComando = "INSERT INTO TBTAREFA
                                (DESCRICAO)
                         VALUES ($sDescricao";
        }

        public function atualizar($id){
            $sComando = "UPDATE TBTAREFA
                            SET STATUS = NOT STATUS
                          WHERE ID = $ID";
            
            $this->oDataBase->executarComando($sComando);
        }

        public function deletar($id){
            $sComando = "DELETE FROM TBTAREFA
                          WHERE ID = $ID";
            
            $this->oDataBase->executarComando($sComando);
        }

    }