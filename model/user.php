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

    // hiện tất cả thông ti n user 
    public function all()
    {
        $stmt = $this->conn->prepare("SELECT * FROM accounts ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // lấy ra 1 sp theo ma id 
    public function find_one($id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM accounts WHERE id=$id");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function update($data)
{
    $stmt = $this->conn->prepare("UPDATE accounts SET name =:name, user_image = :user_image,birth= :birth, email  = :email , phone = :phone,sex=:sex, address:=address WHERE matk = :matk");
    $stmt->execute($data);
}

public function findByTentk($id)
{
    $stmt = $this->conn->prepare("SELECT * FROM accounts WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

    

}
