<?php 
        session_start();
        require_once "./commons/env.php";
        require_once "./commons/function.php";

        require_once "./controller/userController.php";
        require_once "./controller/blogController.php";
        require_once "./controller/myController.php";
        require_once "./controller/homeController.php";
        require_once "./controller/payController.php";
        require_once "./controller/adminController.php";
        require_once "./controller/shopController.php";

        require_once './model/AdminModel.php';
        require_once './model/user.php';

        $ctl = $_GET['ctl'] ?? "home";
        match($ctl)
        {
            '',
            'dashboard'                 =>(new AdminController)->dashboard(),
            'formAddProduct'            =>(new AdminController)->formAddProduct(),
            'addProduct'                =>(new AdminController)->addProduct(),
            'category'                  =>(new AdminController)->category(),
            'formAddCategory'           =>(new AdminController)->formAddCategory(),
            'addCategory'               =>(new AdminController)->addCategory(),
            'formEditCategory'          =>(new AdminController)->formEditCategory(),
            'updateCategory'            =>(new AdminController)->updateCategory(),
            'order'                     =>(new AdminController)->order(),
            'formAddOrder'              =>(new AdminController)->formAddOrder(),
            'formEditOrder'             =>(new AdminController)->formEditOrder(),
            'updateOrder'               =>(new AdminController)->updateOrder(),
            'deleteOrder'               =>(new AdminController)->deleteOrder(),
            'user'                      =>(new AdminController)->user(),
            'formAddUser'               =>(new AdminController)->formAddUser(),
            'addUser'                   =>(new AdminController)->addUser(),
            'formEditUser'              =>(new AdminController)->formEditUser(),
            'updateUser'                =>(new AdminController)->updateUser(),
            'listProduct'               =>(new AdminController)->listProduct(),
            'deleteUser'                =>(new AdminController)->deleteUser(),
            'deleteProduct'             =>(new AdminController)->deleteProduct(),
            'formEditProduct'           =>(new AdminController)->formEditProduct(),
            'updateProduct'             =>(new AdminController)->updateProduct(),
            'deleteCategory'            =>(new AdminController)->deleteCategory(),
            'report'                    =>(new AdminController)->report(),

            'home'                      =>(new HomeController)->home(),
            'detail'                      =>(new HomeController)->home(),
            'shop'              =>(new ShopController)->shop(),
            'blog'                 =>(new BlogController)->blog(),
            'login'                     =>(new UserController)->login(), // đã xong
            'logout'                    =>(new UserController)->logout(), // dã xong
            'password'                  =>(new UserController)->forget_pass(), // dã xong
            'register'                  =>(new UserController)->Register(), // đã xong




            'my-account-address'        =>(new MyController)->address(),
            'my-account-edit'           =>(new MyController)->edit(),
            'my-account-orders-details' => (new MyController)->details(),
            // 'my-account-orders'         => (new MyController)->orders(),
            'my-account-wishlist'       =>(new MyController)->wishlist(),
            'my-account'                =>(new MyController)->account(),


            'payment-confirmation'                  =>(new PayController )->confirmation(),
            'payment-failure'                       =>(new PayController )->failure(),
            'privacy-policy'                        =>(new PayController )->policy(),















        };