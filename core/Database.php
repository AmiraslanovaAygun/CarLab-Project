<?php

namespace core;

 use PDO;
 use PDOException;
class Database{

    private $connection;

    public function __construct(array $db){
        $this->connection = $this -> getConnection($db);
    }
    public function getConnection(array $db){
        $db = (object)$db;
      try{
          $pdo = new PDO("mysql:host=$db->host; dbname=$db->database", $db->username, $db->password);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          return $pdo;
      }
      catch(PDOException $e){
          echo "Connection failed: " . $e->getMessage();
      }
    }

    public function getConnectionInstance()
    {
        return $this->connection;
    }
}
