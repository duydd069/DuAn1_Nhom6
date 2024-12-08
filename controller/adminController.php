<?php 
    class AdminController
    {
        public function dashboard() {
            return view("admin/report/report");
        }

        /// Xử lý ảnh

        private function upload_file($file)
        {
            if ($file['size'] > 0) {
            $targetDir = "public/admin/assets/images/";
            $targetFile = $targetDir . basename($file['name']);
            move_uploaded_file($file['tmp_name'], $targetFile);
            return $targetFile;
            }
                return "";
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

        public function addProduct() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Xử lý ảnh
                $imagePath = "";
                if (isset($_FILES['product_images']) && $_FILES['product_images']['size'] > 0) {
                    $imagePath = $this->upload_file($_FILES['product_images']);
                }
        
                // Lấy dữ liệu từ form
                $data = [
                    'product_name' => $_POST['product_name'],
                    'product_price' => $_POST['product_price'],
                    'quantity' => $_POST['quantity'],
                    'discount_price' => $_POST['discount_price'] !== '' ? $_POST['discount_price'] : null,
                    'import_date' => $_POST['schedule_date'] ?? null,
                    'image' => $imagePath,
                    'category_id' => $_POST['category_id'],
                    'status' => $_POST['status'],
                    'views' => $_POST['views'],
                    'description' => $_POST['description'],
                ];
        
                // Gọi model để thêm sản phẩm
                $homeModel = new home();
                $homeModel->addProduct($data);
        
                // Chuyển hướng sau khi thêm
                header("Location: ?ctl=listProduct");
            }
        }
        

        
        public function deleteProduct() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $homeModel = new home(); // Tạo instance
                $homeModel->deleteById($id); // Gọi qua instance
                header("Location: ?ctl=listProduct");
            }
        }
        
    
        public function formEditProduct() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $homeModel = new home(); // Tạo instance
                $product = $homeModel->getById($id); // Gọi qua instance
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
        
                $homeModel = new home(); // Tạo instance
                $homeModel->updateById($id, $data); // Gọi qua instance
                header("Location: ?ctl=listProduct");
            }
        }
        
        /////////////////////////////////////////// Category

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

        public function addCategory() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Lấy dữ liệu từ form
                $category = $_POST['category_name'];
                $description = $_POST['description'];
                
                // Kiểm tra dữ liệu đầu vào
                if (!empty($category)) {
                    $data = [
                        'category_name' => $category,
                        'description' => $description
                    ];
        
                    // Gọi model để thêm category
                    $homeModel = new home(); // Tạo instance của home model
                    $homeModel->addCategory($data); // Thêm category thông qua phương thức addCategory của model
        
                    // Chuyển hướng về danh sách category sau khi thêm thành công
                    header('Location: ?ctl=category'); 
                } else {
                    echo "Category name is required."; // Thông báo nếu tên danh mục không có
                }
            }
        }

        public function deleteCategory() {
            if (isset($_GET['id'])) {
                // Lấy ID từ tham số URL
                $id = (int)$_GET['id'];
        
                // Kiểm tra nếu ID hợp lệ

                    $homeModel = new home(); // Tạo instance của home model
                    $homeModel->deleteCategoryById($id); // Gọi phương thức trong model để xóa category theo ID
        
                    // Chuyển hướng về danh sách category sau khi xóa
                    header("Location: ?ctl=category");
                }
            else {
                echo "Category ID is required."; // Nếu không có ID, thông báo lỗi
            }
        }

        public function formEditCategory() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $homeModel = new home(); 
                $category = $homeModel->getCategoryById($id);
                include 'views/admin/category/formEditCategory.php';
            }
        }

        public function updateCategory() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = (int)$_POST['id'];
                $data = [
                    'category' => $_POST['category'],
                    'description' => $_POST['description']
                ];
        
                $homeModel = new home();
                $homeModel->updateCategoryById($id, $data);
                header("Location: ?ctl=category"); // Điều hướng sau khi cập nhật
            }
        }
        

        ///////////////////////////////////// Order

        public function order(){
            $orders = (new home)->getOrders();
            include 'views/admin/order/list.php';
        }
        public function formAddOrder(){
            include "views/admin/order/create.php";
        }



        public function formEditOrder() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $homeModel = new home(); 
                $order = $homeModel->getOrderById($id);
                include 'views/admin/order/formEditOrder.php';
            }
        }
        
        public function updateOrder() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = (int)$_POST['id'];
                $data = [
                    'account_id' => $_POST['account_id'],
                    'recipient_name' => $_POST['recipient_name'],
                    'recipient_email' => $_POST['recipient_email'],
                    'recipient_phone' => $_POST['recipient_phone'],
                    'recipient_address' => $_POST['recipient_address'],
                    'order_date' => $_POST['order_date'],
                    'total_amount' => $_POST['total_amount'],
                    'payment_method_id' => $_POST['payment_method_id'],
                    'note' => $_POST['note'],
                    'status_id' => $_POST['status_id']
                ];
        
                $homeModel = new home();
                $homeModel->updateOrderById($id, $data);
                header("Location: ?ctl=order"); // Điều hướng sau khi cập nhật
            }
        }
        

        public function deleteOrder() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $homeModel = new home(); // Tạo instance
                $homeModel->deleteOrderById($id); // Gọi qua instance
                header("Location: ?ctl=order");
            }
        }

        ///////////////////////////////////// User

        public function user(){
            $users = (new home)->getUsers();
            include 'views/admin/user/list.php';
        }
        public function formAddUser(){
            include "views/admin/user/create.php";
        }


        public function addUser() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $imagePath = "";
                if (isset($_FILES['user_image']) && $_FILES['user_image']['size'] > 0) {
                    $imagePath = $this->upload_file($_FILES['user_image']);
                }

                $data = [
                    'name' => $_POST['name'],
                    'user_image' => $imagePath,
                    'birth' => $_POST['birth'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'sex' => $_POST['sex'],
                    'address' => $_POST['address'],
                    'password' => $_POST['password'],
                    'role_id' => $role_id,
                    'status' => $status
                ];
        
                // Gọi model để thêm category
                $homeModel = new home(); // Tạo instance của home model
                $homeModel->addUser($data); // Thêm category thông qua phương thức addCategory của model
        
                // Chuyển hướng về danh sách category sau khi thêm thành công
                header('Location: ?ctl=user'); 
                } 
            }
        

        public function formEditUser() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $homeModel = new home(); 
                $user = $homeModel->getUserById($id); // Cần thêm phương thức getUserById() vào model
                include 'views/admin/user/formEditUser.php';
            }
        }
        
        public function updateUser() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = (int)$_POST['id'];
                $data = [
                    'name' => $_POST['name'],
                    'user_image' => $_POST['user_image'],
                    'birth' => $_POST['birth'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'sex' => $_POST['sex'],
                    'address' => $_POST['address'],
                    'password' => $_POST['password'],
                    'role_id' => $_POST['role_id'],
                    'status' => $_POST['status']
                ];
        
                $homeModel = new home();
                $homeModel->updateUserById($id, $data);
                header("Location: ?ctl=user"); // Điều hướng sau khi cập nhật
            }
        }

        public function deleteUser() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $homeModel = new home(); // Tạo instance
                $homeModel->deleteUserById($id); // Gọi qua instance
                header("Location: ?ctl=user");
            }
        }

        ///////////////////////////////////// Report

        public function report(){
            include "views/admin/report/report.php";
        }
    }