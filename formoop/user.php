<?php
include "dbconnection.php";
class User
{
    protected $db;
    private $_id; 
    private $_username;
    private $_email;
    private $_password;
    public function setid($id) {
        $this->_id = $id;
    }
    public function setUsername($username) {
        $this->_username = $username;
    }
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setPassword($password) {
        $this->_password = $password;
    }
    
    public function __construct() {
        $this->db = new DBConnection();
        $this->db = $this->db->returnConnection();
    }
    // Inscription
    public function inscription() {

            $query = "INSERT INTO users (username,email,password) VALUES(:username,:email,:password)";
            $result = $this->db->query($query) or die($this->db->error);                
            return true;
      
    }
    
    
 
       
}

?>