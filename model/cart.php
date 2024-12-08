<?php
require_once 'commons/env.php'; // Đảm bảo bạn chỉnh đúng đường dẫn
require_once 'commons/function.php';

class Cart {
    private $conn;

    public function __construct() {
        $this->conn = connection(); // Sử dụng hàm connection từ function.php
    }

    /**
     * Lấy toàn bộ giỏ hàng theo account_id, kết hợp với thông tin sản phẩm và tài khoản
     * @param int $account_id
     * @return array
     */
    public function getAllCarts() {
        $query = "
            SELECT 
                carts.id AS cart_id,
                carts.account_id,
                carts.quantity,
                products.product_name AS product_name,
                products.product_price AS product_price,
                products.image AS product_image,
                accounts.name AS account_username,
                accounts.email AS account_email
            FROM carts
            INNER JOIN products ON carts.product_id = products.id
            INNER JOIN accounts ON carts.account_id = accounts.id
        ";
    
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
    
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    

    /**
     * Thêm sản phẩm vào giỏ hàng
     * @param int $account_id
     * @param int $product_id
     * @return bool
     */
    public function addToCart($account_id, $product_id) {
        $query = "INSERT INTO carts (account_id, product_id) VALUES (:account_id, :product_id)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':account_id', $account_id, PDO::PARAM_INT);
        $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
        return $stmt->execute();
    }

    /**
     * Xóa sản phẩm khỏi giỏ hàng
     * @param int $id
     * @return bool
     */
    public function removeFromCart($id) {
        $query = "DELETE FROM carts WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function updateQuantity($cart_id, $quantity) {
        $query = "UPDATE carts SET quantity = :quantity WHERE id = :cart_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT);
        $stmt->bindParam(':cart_id', $cart_id, PDO::PARAM_INT);
    
        return $stmt->execute();
    }
    
}
