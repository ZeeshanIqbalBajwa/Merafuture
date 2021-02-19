<?php

class dbconfig{

    private $host='localhost';
    private $dbName='search';
    private $user='root';
    private $pass='';
    

    public function connect(){
        try{
            $con= new PDO('mysql:host='.$this->host. ' ;dbname=' . $this->dbNme, $this->user, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
            echo 'Database Error:' . $e->getMessage();


    }

}}
?>
