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

    public function addCategory($data) {
        $query = "INSERT INTO categories (category, description) VALUES (:category_name, :description)";
        $stmt = $this->conn->prepare($query);
        
        // Liên kết các tham số
        $stmt->bindParam(':category_name', $data['category_name']);
        $stmt->bindParam(':description', $data['description']);
        
        // Thực thi câu lệnh
        return $stmt->execute();
    }

    public function deleteCategoryById($id) {
        $stmt = $this->conn->prepare("DELETE FROM categories WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    
    public function deleteById($id) {
        // Xóa bình luận liên quan đến sản phẩm
        $stmt = $this->conn->prepare("DELETE FROM comments WHERE product_id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Xóa sản phẩm
        $stmt = $this->conn->prepare("DELETE FROM products WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    
    

    public function getById($id) {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    

    public function updateById($id, $data) {
        $sql = "
            UPDATE products
            SET product_name = :product_name,
                product_price = :product_price,
                quantity = :quantity,
                discount_price = :discount_price,
                import_date = :import_date,
                image = :image
            WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
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
    public function addProduct($data) {
        // Kiểm tra và xử lý giá trị import_date
        if (empty($data['import_date'])) {
            // Nếu không có giá trị, gán ngày hiện tại (hoặc giá trị mặc định khác)
            $data['import_date'] = date('Y-m-d H:i:s');  // Chuyển về định dạng ngày giờ chuẩn
        }
    
        // Câu lệnh SQL để thêm sản phẩm mới
        $query = "INSERT INTO products (product_name, product_price, quantity, discount_price, import_date, image, category_id, status, views, description)
                  VALUES (:product_name, :product_price, :quantity, :discount_price, :import_date, :image, :category_id, :status, :views, :description)";
    
        $stmt = $this->conn->prepare($query);
    
        // Bind các tham số với giá trị từ mảng $data
        $stmt->bindParam(':product_name', $data['product_name']);
        $stmt->bindParam(':product_price', $data['product_price']);
        $stmt->bindParam(':quantity', $data['quantity']);
        
        // Kiểm tra xem discount_price có giá trị hay không, nếu không gán NULL
        if ($data['discount_price'] === null) {
            $stmt->bindValue(':discount_price', null, PDO::PARAM_NULL);
        } else {
            $stmt->bindParam(':discount_price', $data['discount_price']);
        }
    
        // Bind các tham số còn lại
        $stmt->bindParam(':import_date', $data['import_date']);
        $stmt->bindParam(':image', $data['image']);
        $stmt->bindParam(':category_id', $data['category_id']);
        $stmt->bindParam(':status', $data['status']);
        $stmt->bindParam(':views', $data['views']);
        $stmt->bindParam(':description', $data['description']);
    
        // Thực thi câu lệnh
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    
    
    
}