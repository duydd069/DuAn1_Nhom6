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


        public function search()
        {
            // Initialize the products variable
            $products = [];
        
            // Check if the product_name exists and is not empty in the POST request
            if (isset($_POST['product_name']) && !empty($_POST['product_name'])) {
                $product_name = $_POST['product_name'];  // Get the search term
                $products = (new Product())->timkiem($product_name);  // Call the timkiem method from the Product model
            } else {
                // Redirect if no product_name was provided
                header('location: index.php?ctl=home');
                exit();  // Make sure we stop further script execution
            }
        
            // Fetch categories
            $categories = (new Product())->categories();
        
            // Pass the products and categories to the view
            view('client/home/search', [
                'products' => $products,
                'categories' => $categories,
            ]);
        }
        
    }