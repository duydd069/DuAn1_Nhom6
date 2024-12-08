<?php
require_once 'model/cart.php';

class CartController {
    public function index() {
        $cartModel = new Cart();

        // Lấy toàn bộ giỏ hàng (không lọc theo account_id)
        $cartItems = $cartModel->getAllCarts();

        // Gọi giao diện và truyền dữ liệu giỏ hàng
        include 'views/client/cart/viewcart.php';
    }

    public function add() { 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cartModel = new Cart();
            $account_id = $_POST['account_id'];
            $product_id = $_POST['product_id'];
            $cartModel->addToCart($account_id, $product_id);
            header("Location: /");
        }
    }
    public function updateCart() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['quantity'], $_POST['cart_id'])) {
            $cartModel = new Cart();
            $cartId = $_POST['cart_id'];
            $quantity = $_POST['quantity'];

            $success = $cartModel->updateQuantity($cartId, $quantity);

            if ($success) {
                header('Location: index.php?ctl=cart');
                exit();
            } else {
                echo "Cập nhật thất bại";
            }
        }
    }

    public function delete($id) {
        $cartModel = new Cart();
        $cartModel->removeFromCart($id);
        header("Location: /");
    }
}