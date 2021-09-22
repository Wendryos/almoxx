<?php 

class Connection {
    protected $host;
    protected $dbname;
    protected $user;
    protected $pass;
    public    $dbConnection;

    public function __construct() {
            $this->host   = 'localhost';
            $this->dbname = '__database';
            $this->user   = 'root';
            $this->pass   = ''; 

    }

    public function getConnection() {

        try { 

            $dbConnection = new PDO("mysql: host={$this->host}; dbname={$this->dbname};", $this->user, $this->pass);
            return $dbConnection;

        } catch (PDOException $error) {

            echo "Error: {$error->getMessage()}";
            
        }
    }

}


?>