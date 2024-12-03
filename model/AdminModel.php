<?php 

class home{
    public $conn = null;
    public function __construct()
    {
        // liên kết database.
        $this->conn = connection(); 
    }

    public function getCategories() {
        $sql = "SELECT categories.id AS id,
        categories.category AS category_name 
        FROM categories";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $listCategories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $listCategories;
    }
 
    public function listProducts()
    {
    $sql = "SELECT
        products.id AS id,
        products.product_name AS product_name,
        products.product_price AS product_price,
        products.discount_price AS discount_price,
        products.image AS image,
        products.quantity AS quantity,
        products.views AS views,
        products.import_date AS import_date,
        products.description AS description,
        categories.id AS category_id,
        products.status AS status
    FROM products
    LEFT JOIN categories ON products.category_id = categories.id";

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();
    $listProducts = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $listProducts; // Không cần nhóm sản phẩm khi chỉ lấy thông tin sản phẩm
    }

    // public function addProduct($id, $product_name, $product_price, $discount_price, $image, $quantity, $views, $import_date, $description, $category_id, $status) {
    //     // Chuẩn bị câu lệnh SQL để thêm sản phẩm
    //     $stmt = $this->conn->prepare("
    //         INSERT INTO products (id, product_name, product_price, discount_price, image, quantity, views, import_date, description, category_id, status) 
    //         VALUES (:id, :product_name, :product_price, :discount_price, :image, :quantity, :views, :import_date, :description, :category_id, :status)
    //     ");

    //     // Liên kết các tham số
    //     $stmt->bindParam(':id', $id);
    //     $stmt->bindParam(':product_name', $product_name);
    //     $stmt->bindParam(':product_price', $product_price);
    //     $stmt->bindParam(':discount_price', $discount_price);
    //     $stmt->bindParam(':image', $image);
    //     $stmt->bindParam(':quantity', $quantity);
    //     $stmt->bindParam(':views', $views);
    //     $stmt->bindParam(':import_date', $import_date);
    //     $stmt->bindParam(':description', $description);
    //     $stmt->bindParam(':category_id', $category_id);
    //     $stmt->bindParam(':status', $status);

    //     // Thực thi câu lệnh
    //     if ($stmt->execute()) {
    //         return true;
    //     } else {
    //         return false;
    //     }
    // }
    
}