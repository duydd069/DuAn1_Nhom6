<?php 
    class AdminController
    {
        public function dashboard() {
            return view("admin/report/report");
        }
        /// Product

        public function listProduct()
        {
        $products = (new home)->listProducts();
        include 'views/admin/product/list.php';
        }

        public function formAddProduct() {
        include "views/admin/product/create.php";
        }
        public function deleteProduct() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                ProductModel::deleteById($id);
                header("Location: ?ctl=productList");
            }
        }
    
        public function formEditProduct() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $product = ProductModel::getById($id);
                include 'views/admin/product/formEditProduct.php';
            }
        }
    
        public function updateProduct() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = (int)$_POST['id'];
                $data = [
                    'product_name' => $_POST['product_name'],
                    'product_price' => $_POST['product_price'],
                    'quantity' => $_POST['quantity'],
                    'discount_price' => $_POST['discount_price'],
                    'import_date' => $_POST['import_date'],
                    'image' => $_POST['image']
                ];
                ProductModel::updateById($id, $data);
                header("Location: ?ctl=productList");
            }
        }

        
        

        /// Category

        public function listCategory() {
            $categories = (new home)->getCategories();
            include 'views/admin/category/list.php';
            include 'views/admin/product/create.php';
        }
        public function category() {
            return view("admin/category/list");
        }

        public function formAddCategory() {
            include "views/admin/category/create.php";
        }

        /// Order

        public function order(){
            $orders = (new home)->getOrders();
            include 'views/admin/order/list.php';
        }
        public function formAddOrder(){
            include "views/admin/order/create.php";
        }

        /// User

        public function user(){
            $users = (new home)->getUsers();
            include 'views/admin/user/list.php';
        }
        public function formAddUser(){
            include "views/admin/user/create.php";
        }

    }