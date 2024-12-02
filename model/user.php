<?php
class User {
    public $conn = null;

    public function __construct() {
        $this->conn = connection();  // Giả sử connection() là hàm kết nối CSDL
    }


    public function user_login(){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM accounts  WHERE `email`=? AND `password`=?";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email,$password]);
            return $stmt->fetch();
    }

}
