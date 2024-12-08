<?php 
    class HomeController
    {
        public function home()
        {
            // session_start();

            // if (!isset($_SESSION['user'])) {
            //     header('Location: index.php?ctl=login');  // Nếu không có người dùng trong session, chuyển hướng về trang login
            //     die();
            // }

            return view('client/home/home');
        }

        public function detail()
        {
            return view('client/home/detail');
        }
    }