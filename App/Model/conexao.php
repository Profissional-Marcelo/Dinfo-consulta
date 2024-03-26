<?php 
    abstract Class conexao{
        private $servidor = 'mysql.memsolucoestecnologicas.com.br';
        private $user = 'memsolucoestec01';
        private $pass = 'Dinfo2024';
        private $banco = 'memsolucoestec01';
        public $conn;

        public function __construct(){
            $this->conexao();
        }

        private function conexao(){
            $this->conn = new mysqli($this->servidor, $this->user, $this->pass, $this->banco);
        }
    }
?>