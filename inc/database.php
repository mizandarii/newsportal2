<?php

class database {
    private $conn;
    private $host;
    private $user;
    private $password;
    private $basename;

    function __construct() {
        $this->host = 'localhost';
        $this->user = 'root';
        $this->password = '';
        $this->basename = 'newsportal';
        $this->connect();
    }
    function __destruct() {
        $this->disconnect();
    }


    fuction connect() {
        if (!$this->conn) {
            try{
                $this=>conn = new PDO('mysql:host'.$this->host.';dbname='$this->
                basename.'', $this->user, $this->password, array(PDO: : 
                MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
            }
            catch(Exception $e) {
                die('Connection failed : ' .$e->getMessage());
            }
        }
        return $this->conn;
    }
    function disconnect() {
        if($this->conn){
            $this->conn = null;
        }
    }
    function getOne($query) {
        $stmt = $this->conn->prepare($query);
        $stmt ->execute();
        $stmt ->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetch();
        return $response;
    }
    function getAll($query){
        $stmt = $this->conn->prepare($query);
        $stmt ->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $response = $stmt->fetchAll();
        return $response;
    }

    function executrRun($query){
        $response = $this->conn->exec($query);
        return $response;
    }
}