<?php

require_once '../config/config.php';
class Database{
    public $host = HOST;
    public $user_name = USERNAME;
    public $password = PASSWORD;
    public $data_base = DATABASE;
    public $link;
    public $error;

public function __construct(){
    
    $this->dbconnect();
}

    public function dbconnect(){
        $this->link = mysqli_connect($this->host,$this->user_name,$this->password,$this->data_base);
        if(!$this->link){
            $this->error = "Database connection failed";
            return false;
        }
    } 
}

?>