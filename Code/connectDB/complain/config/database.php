<?php

    class Database{
        private $host;
        private $dbName;
        private $username;
        private $password;
        private $port = '3306';
        private $charset = 'utf8';
        private $options;
        private $dsn;
        public $conn = null;

        function __construct(){
            require "loadENV.php";
            $DB_mode = $_ENV['DB_MODE'];
            if($DB_mode=='dev'){
                $this->host = $_ENV['DEV_DB_HOST'];
                $this->dbName = $_ENV['DEV_DB_NAME'];
                $this->username = $_ENV['DEV_DB_USERNAME'];
                $this->password = $_ENV['DEV_DB_PASSWORD'];
            }else if($DB_mode=='production'){
                $this->host = $_ENV['DB_HOST'];
                $this->dbName = $_ENV['DB_NAME'];
                $this->username = $_ENV['DB_USERNAME'];
                $this->password = $_ENV['DB_PASSWORD'];
            }
            
            $this->options = [
                \PDO::ATTR_ERRMODE =>\PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE =>\PDO::FETCH_ASSOC
            ];
            $this->dsn = "mysql:host=".$this->host.";dbname=".$this->dbName.";charset=".$this->charset.";port=".$this->port;
        }
        
        public function getConnectionWithStatus(){
            try{
                $this->conn = new PDO($this->dsn, $this->username, $this->password, $this->options);
                return array("conn"=>$this->conn,"msg"=>"Database Connected Successfully");
                
            }catch(PDOException $e){
                return array("conn"=>null,"msg"=>$e->getMessage());
            }
            
        }
        public function getConnection(){
            try{
                $this->conn = new PDO($this->dsn, $this->username, $this->password, $this->options);
                return $this->conn;
                
            }catch(PDOException $e){
                return null;
            }
            
        }
        function __destruct(){
            $this->conn = null;
        }
    }

?>