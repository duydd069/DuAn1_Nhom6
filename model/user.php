<?php
class User {
    public $conn = null;

    public function __construct() {
        $this->conn = connection(); 
    }


    public function login(){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM accounts  WHERE `email`=? AND `password`=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email,$password]);
            return $stmt->fetch();
    }

}
