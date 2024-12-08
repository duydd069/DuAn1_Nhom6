<?php
class User {
    public $conn = null;

    public function __construct() {
        $this->conn = connection();  // Giả sử connection() là hàm kết nối CSDL
    }


    public function user_login($user)
    {
        $stmt = $this->conn->prepare("SELECT * FROM accounts WHERE email=:email");
        $stmt-> execute([':email' => $user]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // hiển thị dữ liệu mk khi người ta nhập email.
    public function passwhat($email)
    {
        $stmt = $this->conn->prepare("SELECT password FROM accounts WHERE email = :email");
        $stmt->execute([
            ':email' => $email,
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    // thêm dữ liệu vào 3 trường 2 trường kia để trỗng cũng dc.(đăng ký tài khoản)
    public function add($name, $password, $email, $phone) {
        // Check if the email already exists in the database
        $stmt = $this->conn->prepare("SELECT COUNT(*) FROM accounts WHERE email = :email");
        $stmt->execute([':email' => $email]);
        $emailExists = $stmt->fetchColumn(); // Returns the count of rows with this email
    
        if ($emailExists > 0) {
            // If email exists, return an error message (or throw an exception)
            throw new Exception("Email is already taken.");
        }
    
        // Proceed with the insert if the email is unique
        $stmt = $this->conn->prepare("INSERT INTO accounts(name, password, email, phone) VALUES (:name, :password, :email, :phone)");
        $stmt->execute([
            ':name' => $name,
            ':password' => $password,
            ':email' => $email,
            ':phone' => $phone
        ]);
    }
    
    
    
    

}
