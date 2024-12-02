<?php


    class Database{
        private $sHost = '127.0.0.1';
        private $sPort = '5432';
        private $sUsername = 'postgres';
        private $sPassword = 'postgres';
        private $sDbName = 'to_do_list';
        private $oConexao;

        public function connectarBD(){
            $sConexao = "host = $sHost;
                         port = $sPort;
                         user = $sUsername;
                         password = $sPassowrd;
                         dbname = $sDbName";
            pg_connect($sConexao);
        }

        public function obterConexao(){
            if ($this->oConexao === null){ 
                $this->oConexao = $this->conectarBD();
            }
            return $this->oConexao;
        }

    }