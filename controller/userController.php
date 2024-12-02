 <?php 
    class UserController
    {

        public function form_login()
        {
            return view("client/my/login");

        }

        public function login()
        {
            $nguoidung = (new User())->user_login();
            if($nguoidung)
            {
                $_SESSION['user'] = $nguoidung;
                $_SESSION['loi'] = "chúc mừng bạn đã đăng nhập thành công" .$nguoidung['name'];
                header("location: index.php?ctl=list");
                die();
            }else{
                $_SESSION['loi'] = "sai email hoặc mật khẩu vui lòng thử lại";
                header("location: index.php?ctl=form_login");
                die();
            }
        }


        
        
        
    
        public function logout(): never
        {
                unset($_SESSION['tentk']);
                header('location: index.php?ctl=login');
                die();
        }
    } 