<?php
class User {
    public $conn = null;

    public function __construct() {
        $this->conn = connection(); 
    }

    public function user_login($user)
    {
        $stmt = $this->conn->prepare("SELECT * FROM accounts WHERE email=:email");
        $stmt-> execute([':email' => $user]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

}
