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

        public function addCategory() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Lấy dữ liệu từ form
                $category_name = $_POST['category_name'];
                $description = $_POST['description'];
                
                // Kiểm tra dữ liệu đầu vào
                if (!empty($category_name)) {
                    $data = [
                        'category_name' => $category_name,
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