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

    public function getDUserById($id) {
        $sql = "SELECT * FROM accounts WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateDUserById($id, $data) {
        global $db; // Kết nối đến cơ sở dữ liệu
    
        // Chuẩn bị câu lệnh SQL, không cập nhật mật khẩu nếu không có dữ liệu
        $sql = "UPDATE accounts SET 
                    name = :name, 
                    user_image = :user_image, 
                    birth = :birth, 
                    email = :email, 
                    phone = :phone, 
                    address = :address, 
                    status = :status" . 
                (isset($data['password']) && !empty($data['password']) ? ", password = :password" : "") . 
                " WHERE id = :id";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':user_image', $data['user_image']);
        $stmt->bindParam(':birth', $data['birth']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':address', $data['address']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':id', $id);
    

        
        return $stmt->execute();
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
