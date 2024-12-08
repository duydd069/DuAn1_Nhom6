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
        require_once './model/comment.php';
        require_once './model/cart.php';

        $ctl = $_GET['ctl'] ?? "";
        match($ctl)
        {
            '',
            'home'                      =>(new HomeController)->cate(), 
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
            

           'cart'                     =>(new CartController)->index(),
            'update_cart' => (new CartController)->updateCart(),
            'deleteFromCart' => (new CartController)->deleteFromCart(),
    
            'login'                     =>(new UserController)->login(),


            'payment-confirmation'                  =>(new PayController )->confirmation(),
            'payment-failure'                       =>(new PayController )->failure(),
            'privacy-policy'                        =>(new PayController )->policy(),


            'product'                               =>(new  ProductsController)->ListProduct(),
            "productList"                           =>(new ProductsController)->show(),
            "productDetaill"                           =>(new ProductsController)->DetailProduct(),

            // 'category'                               =>(new  CategoryController)->cate(),

<<<<<<< HEAD
<<<<<<< HEAD
            'C'        =>(new MyController)->address(),
            'my-account-edit'           =>(new MyController)->edit(),
            'userDetail'                =>(new UserController)->userDetail(),
            'formDEditUser'             =>(new UserController)->formDEditUser(),
            'product_detail'            =>(new ShopController)->productDetail(),
            'updateDUser'                =>(new UserController)->updateDUser(),
            'my-account-orders-details' => (new MyController)->details(),
            'my-account-orders'         => (new MyController)->orders(),
            'my-account-wishlist'       =>(new MyController)->wishlist(),
            'my-account'                =>(new MyController)->account(),


            'about-us' => (new CartController)->about(),
            '404' => (new CartController)->un404(),



=======
            
            // 'shop-collection-sub'     =>(new ShopController)->shopCollectionSub(),
            // 'shop-women'     =>(new ShopController)->shop_women(),
>>>>>>> 5dab4341debeadb4e3e20cabd606d4dd20a04848
=======
            
            // 'shop-collection-sub'     =>(new ShopController)->shopCollectionSub(),
            // 'shop-women'     =>(new ShopController)->shop_women(),
>>>>>>> 5dab4341debeadb4e3e20cabd606d4dd20a04848















        };