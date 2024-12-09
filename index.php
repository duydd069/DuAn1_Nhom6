<?php 
        session_start();
        require_once "./commons/env.php";
        require_once "./commons/function.php";

        require_once "./controller/userController.php";
        require_once "./controller/blogController.php";
        require_once "./controller/myController.php";
        require_once "./controller/homeController.php";
        require_once "./controller/payController.php";
        require_once "./controller/productController.php";
        require_once "./controller/adminController.php";
        require_once "./controller/shopController.php";
        require_once "./controller/cartController.php";



        require_once './model/AdminModel.php';
        require_once './model/user.php';
        require_once './model/Category.php';
        require_once './model/Product.php';

        require_once './model/cart.php';

        $ctl = $_GET['ctl'] ?? "";
        match($ctl)
        {
            '',
            'home'                      =>(new HomeController)->home(), 
            'form_login'                =>(new UserController)->form_login(),
            'dashboard'                 =>(new AdminController)->dashboard(),
            'formAddProduct'            =>(new AdminController)->formAddProduct(),
            'category'                  =>(new AdminController)->category(),
            'formAddCategory'           =>(new AdminController)->formAddCategory(),
            'order'                     =>(new AdminController)->order(),
            'formAddOrder'              =>(new AdminController)->formAddOrder(),
            'user'                      =>(new AdminController)->user(),
            'formAddUser'               =>(new AdminController)->formAddUser(),
            'listProduct'               =>(new AdminController)->listProduct(),
            'deleteUser'                =>(new AdminController)->deleteUser(),
            'deleteProduct'             =>(new AdminController)->deleteProduct(),
            'formEditProduct'           =>(new AdminController)->formEditProduct(),
            'updateProduct'             =>(new AdminController)->updateProduct(),
            'deleteCategory'            =>(new AdminController)->deleteCategory(),
            'report'                    =>(new AdminController)->report(),


            'home'                      =>(new HomeController)->home(),
            'detail'                    =>(new HomeController)->home(),
            'product_detail'            =>(new ProductsController)->productDetail(),
            'shop'                      =>(new ShopController)->shop(),
            'blog'                      =>(new BlogController)->blog(),
            'login'                     =>(new UserController)->login(), // đã xong    
            'logout'                    =>(new UserController)->logout(), // dã xong
            'password'                  =>(new UserController)->forget_pass(), // dã xong
            'register'                  =>(new UserController)->Register(), // đã xong
            // 'edituser'                  => (new UserController)->editUser(),
            'serach'                    =>(new HomeController)->search(),




            'C'        =>(new MyController)->address(),
            'my-account-edit'           =>(new MyController)->edit(),
            'userDetail'                =>(new UserController)->userDetail(),
            'formDEditUser'             =>(new UserController)->formDEditUser(),
            'updateDUser'                =>(new UserController)->updateDUser(),
            'my-account-orders-details' => (new MyController)->details(),
            'my-account-orders'         => (new MyController)->orders(),
            'my-account-wishlist'       =>(new MyController)->wishlist(),
            'my-account'                =>(new MyController)->account(),


            'about-us' => (new CartController)->about(),
            '404' => (new CartController)->un404(),


















        };