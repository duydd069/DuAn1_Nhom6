<?php 
    class UserController
    {

        public function form_login()
        {
            return view("client/my/login");

        }

        public function login()
        {
            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                // var_dump($_POST);
                $username = $_POST['email'];
                $password = $_POST['password'];
                $nguoidung= (new User)->user_login(user: $username);
    
                if($nguoidung)
                {
                    if($nguoidung['password'] == $password)
                    {
                        $_SESSION['email'] = $nguoidung;
                        header("location: index.php?ctl=home");
                        die();
                    }else
                    {
                        $erro['email'] = "Tài khoản không tôn tại.";
                    }
                }else
                {
                    $erro['password'] = " mật khẩu không đúng.";
                }
            }
            return view(view: 'client/my/login');
        }
  
        public function userDetail() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $userDetail = new User(); 
                $user = $userDetail->getDUserById($id); // Cần thêm phương thức getUserById() vào model
                include 'views/client/my/userDetail.php';
            }
        }

        public function formDEditUser() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $userDetail = new User(); 
                $user = $userDetail->getDUserById($id); 
                include 'views/client/my/formEditUser.php';
            } else {
                // Xử lý trường hợp không có ID
                echo "No user ID provided.";
                exit;
            }
        }
        
        public function updateDUser() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = (int)$_POST['id']; // Lấy ID người dùng từ form
                
                $data = [
                    'name' => $_POST['name'],
                    'user_image' => $_POST['user_image'],
                    'birth' => $_POST['birth'],
                    'email' => $_POST['email'],
                    'phone' => $_POST['phone'],
                    'address' => $_POST['address'],
                    'status' => $_POST['status'],
                    'password' => $_POST['password'] // Lấy mật khẩu từ form
                ];
        
                $homeModel = new User();
                if ($homeModel->updateDUserById($id, $data)) {
                    header("Location: ?ctl=userDetail&id=$id");
                    exit;
                } else {
                    echo "Error updating user information.";
                }
            } else {
                echo "Invalid request method.";
            }
        }

        public function logout(): never
        {
                unset($_SESSION['email']);
                header('location: index.php?ctl=home');
                die();
        }

        public function forget_pass()
        {
            $thongbao = '';
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                $email = $_POST['email'] ?? '';
        
                // Kiểm tra email có được cung cấp hay không
                if ($email) {
                    $nguoidung = (new User())->passwhat($email);
        
                    if ($nguoidung) {
                        $thongbao = "Mật khẩu của bạn là: " .   ($nguoidung['password']);
                    } else {
                        $thongbao = "Không tìm thấy email trong cơ sở dữ liệu.";
                    }
                } else {
                    $thongbao = "Vui lòng nhập email.";
                }
            }
        
            // Chuyển thông báo đến view
            return view(view: 'client/my/login', data: ['thongbao' => $thongbao]);
        }


        public function Register() {
            $thongbao = "";  // Khởi tạo biến thông báo
            if ($_SERVER['REQUEST_METHOD'] == "POST") {
                // Thu thập dữ liệu từ form
                $name = $_POST['name'];
                $matkhau = $_POST['password'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
        
                // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
                // $hashedPassword = password_hash($matkhau, PASSWORD_DEFAULT);
        
                try {
                    // Gọi phương thức add từ User model để thêm người dùng vào cơ sở dữ liệu
                    (new User())->add($name, $matkhau, $email, $phone);
                    $thongbao = "Đăng ký thành công! Chào mừng bạn đến với hệ thống.";  // Thông báo thành công
                } catch (Exception $e) {
                    // Nếu có lỗi, ví dụ email đã tồn tại, hiển thị thông báo lỗi
                    $thongbao = $e->getMessage();  // Thông báo lỗi (ví dụ: "Email đã được sử dụng.")
                }
            } else {
                $thongbao = "Vui lòng nhập đầy đủ thông tin để đăng ký.";
            }
        
            // Trả về view với thông báo
            return view('client/my/register', ['thongbao' => $thongbao]);
        }
        
        
        
        

        public function add(): void
        {   


        }


    } 