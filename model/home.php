<?php 

class home{
    public $conn = null;
    public function __construct()
    {
        // liên kết database.
        $this->conn = connection(); 
    }

    public function home()
    {
        $stmt = $this->conn->prepare("SELECT * FROM products ORDER BY id LIMIT 6");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addProduct($id, $product_name, $product_price, $discount_price, $image, $quantity, $views, $import_date, $description, $category_id, $status) {
        // Chuẩn bị câu lệnh SQL để thêm sản phẩm
        $stmt = $this->conn->prepare("
            INSERT INTO products (id, product_name, product_price, discount_price, image, quantity, views, import_date, description, category_id, status) 
            VALUES (:id, :product_name, :product_price, :discount_price, :image, :quantity, :views, :import_date, :description, :category_id, :status)
        ");

        // Liên kết các tham số
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':product_name', $product_name);
        $stmt->bindParam(':product_price', $product_price);
        $stmt->bindParam(':discount_price', $discount_price);
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':quantity', $quantity);
        $stmt->bindParam(':views', $views);
        $stmt->bindParam(':import_date', $import_date);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category_id', $category_id);
        $stmt->bindParam(':status', $status);

        // Thực thi câu lệnh
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}