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
    
    public static function deleteById($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public static function getById($id) {
        $db = Database::getInstance();
        $stmt = $db->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function updateById($id, $data) {
        $db = Database::getInstance();
        $stmt = $db->prepare("
            UPDATE products
            SET product_name = :product_name,
                product_price = :product_price,
                quantity = :quantity,
                discount_price = :discount_price,
                import_date = :import_date,
                image = :image
            WHERE id = :id
        ");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':product_name', $data['product_name'], PDO::PARAM_STR);
        $stmt->bindParam(':product_price', $data['product_price'], PDO::PARAM_STR);
        $stmt->bindParam(':quantity', $data['quantity'], PDO::PARAM_INT);
        $stmt->bindParam(':discount_price', $data['discount_price'], PDO::PARAM_STR);
        $stmt->bindParam(':import_date', $data['import_date'], PDO::PARAM_STR);
        $stmt->bindParam(':image', $data['image'], PDO::PARAM_STR);
        $stmt->execute();
    }

    public function getOrders() {
        $sql = "SELECT orders.id AS id,
        orders.order_code AS order_code,
        orders.account_id AS account_id,
        orders.recipient_name AS recipient_name,
        orders.recipient_email AS recipient_email,
        orders.recipient_phone AS recipient_phone,
        orders.recipient_address AS recipient_address,
        orders.order_date AS order_date,
        orders.total_amount AS total_amount,
        orders.payment_method_id AS payment_method_id,
        orders.note AS note,
        orders.status_id AS status_id
        FROM orders";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $listOrders = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $listOrders;
    }

    public function getUsers() {
        $sql = "SELECT accounts.id AS id,
        accounts.name AS name,
        accounts.user_image AS user_image,
        accounts.birth AS birth,
        accounts.email AS email,
        accounts.phone AS phone,
        accounts.sex AS sex,
        accounts.address AS address,
        accounts.password AS password,
        accounts.role_id AS role_id,
        accounts.status AS status
        FROM accounts";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $listUsers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        return $listUsers;
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