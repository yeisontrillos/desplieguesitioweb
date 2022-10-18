<?php
if(!defined('DB_SERVER')){
    require_once("../initialize.php");
}
class DBConnection{

    private $host = bbjcbjnpgu2fpipsyldv-mysql.services.clever-cloud.com;
    private $username = u2m7zkuoq3kfo7wn;
    private $password = Gl2llj9I06aTpZ2ZaKWl;
    private $database = bbjcbjnpgu2fpipsyldv;
    
    public $conn;
    
    public function __construct(){

        if (!isset($this->conn)) {
            
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        }    
        
    }
    public function __destruct(){
        $this->conn->close();
    }
}
?>