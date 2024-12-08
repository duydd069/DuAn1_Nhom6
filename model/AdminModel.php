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
        ,categories.description AS description
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

    public function addUser($data) {
        $query = "INSERT INTO accounts (name, user_image, birth, email, phone, sex, address, password, role_id, status) VALUES (:name, :user_image, :birth, :email, :phone, :sex, :address, :password, :role_id, :status)";
        $stmt = $this->conn->prepare($query);
        
        // Liên kết các tham số
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':user_image', $data['user_image']);
        $stmt->bindParam(':birth', $data['birth']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':sex', $data['sex']);
        $stmt->bindParam(':address', $data['address']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':role_id', $data['role_id']);
        $stmt->bindParam(':status', $data['status']);
        
        // Thực thi câu lệnh
        return $stmt->execute();
    }


    public function deleteCategoryById($id) {
        $stmt = $this->conn->prepare("DELETE FROM categories WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function deleteUserById($id) {
        $stmt = $this->conn->prepare("DELETE FROM accounts WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    public function deleteOrderById($id) {
        $stmt = $this->conn->prepare("DELETE FROM orders WHERE id = :id");
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

    public function getCategoryById($id) {
        $sql = "SELECT * FROM categories WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getOrderById($id) {
        $sql = "SELECT * FROM orders WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function getUserById($id) {
        $sql = "SELECT * FROM accounts WHERE id = :id";
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
    
    public function updateCategoryById($id, $data) {
        $sql = "
            UPDATE categories
            SET category = :category,
                description = :description
            WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':category', $data['category'], PDO::PARAM_STR);
        $stmt->bindParam(':description', $data['description'], PDO::PARAM_STR);
        $stmt->execute();
    }
    
    public function updateOrderById($id, $data) {
        $sql = "
            UPDATE orders
            SET 
                account_id = :account_id,
                recipient_name = :recipient_name,
                recipient_email = :recipient_email,
                recipient_phone = :recipient_phone,
                recipient_address = :recipient_address,
                order_date = :order_date,
                total_amount = :total_amount,
                payment_method_id = :payment_method_id,
                note = :note,
                status_id = :status_id
            WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':account_id', $data['account_id'], PDO::PARAM_INT);
        $stmt->bindParam(':recipient_name', $data['recipient_name'], PDO::PARAM_STR);
        $stmt->bindParam(':recipient_email', $data['recipient_email'], PDO::PARAM_STR);
        $stmt->bindParam(':recipient_phone', $data['recipient_phone'], PDO::PARAM_STR);
        $stmt->bindParam(':recipient_address', $data['recipient_address'], PDO::PARAM_STR);
        $stmt->bindParam(':order_date', $data['order_date'], PDO::PARAM_STR);
        $stmt->bindParam(':total_amount', $data['total_amount'], PDO::PARAM_STR);
        $stmt->bindParam(':payment_method_id', $data['payment_method_id'], PDO::PARAM_INT);
        $stmt->bindParam(':note', $data['note'], PDO::PARAM_STR);
        $stmt->bindParam(':status_id', $data['status_id'], PDO::PARAM_INT);
        $stmt->execute();
    }
    
    public function updateUserById($id, $data) {
        $sql = "
            UPDATE accounts
            SET 
                name = :name,
                user_image = :user_image,
                birth = :birth,
                email = :email,
                phone = :phone,
                sex = :sex,
                address = :address,
                password = :password,
                role_id = :role_id,
                status = :status
            WHERE id = :id
        ";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $data['name'], PDO::PARAM_STR);
        $stmt->bindParam(':user_image', $data['user_image'], PDO::PARAM_STR);
        $stmt->bindParam(':birth', $data['birth'], PDO::PARAM_STR);
        $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':phone', $data['phone'], PDO::PARAM_STR);
        $stmt->bindParam(':sex', $data['sex'], PDO::PARAM_INT);
        $stmt->bindParam(':address', $data['address'], PDO::PARAM_STR);
        $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);
        $stmt->bindParam(':role_id', $data['role_id'], PDO::PARAM_INT);
        $stmt->bindParam(':status', $data['status'], PDO::PARAM_INT);
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