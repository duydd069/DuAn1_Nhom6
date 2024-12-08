<?php 
class UserController
{
    public function form_login()
    {
        return view("client/my/login");
    }

    public function login()
    {
        // Call the login method from the User model
        $user = (new User())->login();

        if ($user) {
            // Store user information in session
            $_SESSION['user'] = [
                'id' => $user['id'], // Assuming 'id' is a column in your accounts table
                'name' => $user['name'], // Assuming 'name' is another field
                'email' => $user['email'], // Store email if needed
            ];
            $_SESSION['message'] = "Chúc mừng bạn đã đăng nhập thành công, " . htmlspecialchars($user['name']);
            header("Location: index.php?ctl=home");
            exit();
        } else {
            $_SESSION['error'] = "Sai email hoặc mật khẩu, vui lòng thử lại.";
            header("Location: index.php?ctl=form_login");
            exit();
        }
    }

    public function logout(): never
    {
        // Clear user session data
        unset($_SESSION['user']);
        $_SESSION['message'] = "Bạn đã đăng xuất thành công."; // Optional logout message
        header('Location: index.php?ctl=login');
        exit();
    }
}