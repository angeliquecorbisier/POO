<?php  

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'testexo');


class DBConnection {
    public $_con;
    function __construct(){
        $this->_con = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);      
        if ($this->_con->connect_error) die('Database error -> ' . $this->_con->connect_error);
    }
    // return Connection
    function returnConnection() {
        return $this->_con;
    }
}
  
?>  