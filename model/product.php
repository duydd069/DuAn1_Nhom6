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

            public function categories()
            {
                $stmt = $this->conn->prepare("SELECT * FROM categories ORDER BY id DESC");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);  // hiện ra tất cả các dữ liệu trong danhmuc từ mã mới nhất.
            }

            public function timkiem($product_name)
            {
                $product_name = "%" . $product_name . "%";  // Add wildcards to search
                $stmt = $this->conn->prepare("SELECT * FROM products WHERE product_name LIKE :product_name LIMIT 6");
                $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            

}