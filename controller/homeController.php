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
                        $products = (new Product())->product();


            return view('client/home/home',['products' => $products]);
        }

            public function cate() {
                $products= new Product();
                $data = $products->all();
                $categories=(new Category)->all();
                View('client/home/home',["data"=>$data,'categories'=>$categories]);
            }
        

        
        


    }