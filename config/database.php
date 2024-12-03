<?php

    require_once __DIR__ . '/../config/autoload.php';

    class Database{
        private $sHost = '127.0.0.1';
        private $sPort = '5432';
        private $sUsername = 'postgres';
        private $sPassword = 'postgres';
        private $sDbName = 'lista_tarefas';
        private $oConexao;

        public function connectarBD(){
            $sConexao = "host = $sHost;
                         port = $sPort;
                         user = $sUsername;
                         password = $sPassowrd;
                         dbname = $sDbName";

            $this->conexao = pg_connect($sConexao);
        }

        public function obterConexao(){
            if ($this->oConexao === null){ 
                $this->conectarBD();
            }
            return $this->oConexao;
        }

        public function executarConsulta($sConsulta){
            $oResultado = pg_query($this->obterConexao(), $sConsulta);
            $aData = [];

            while ($aResultado = pg_fetch_assoc($oResultado)){
                $aData[] = $aResultado;
            }

            return $aData;

        }

        public function executarComando($sComando){
            pg_escape_string($sComando);
            return pg_query($this->obterConexao(),$sComando);
        }

    }