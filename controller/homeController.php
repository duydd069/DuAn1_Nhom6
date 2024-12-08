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

        public function detail()
        {

            return view('client/home/detail');
        }


        public function serach()
        {
    
            if(isset($_POST['product_name']) && !empty($_POST['product_name']))
            {
                $product_name = $_POST['product_name'];
                $search = (new Product())->timkiem($product_name);
            }else{
                header('location: index.php?ctl=home');
                die();
            }
    
            $categories = (new Product())->categories();
            
    
             view('client/home/serach',[
                'search' => $search,
                'categories'=> $categories,
                
            ]);
        }
    }