<?php
class Product {
    public $conn = null;

    public function __construct() {
        $this->conn = connection();  // Giả sử connection() là hàm kết nối CSDL
    }

    public function product()
    {
            // lấy 6 sp mới nhất theo trường id.
            $stmt = $this->conn->prepare('SELECT * FROM products');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // lấy tất cả.
    }

}