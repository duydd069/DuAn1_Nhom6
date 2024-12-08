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

        require_once './model/AdminModel.php';
        require_once './model/user.php';
        require_once './model/ProductModel.php';

        $ctl = $_GET['ctl'] ?? "report";
        match($ctl)
        {
            '',
            'home'                      =>(new HomeController)->home(),
            'form_login'                =>(new UserController)->form_login(),
            'login'                     =>(new UserController)->login(),
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
            'addOrder'                  =>(new AdminController)->addOrder(),
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

            'blog-detail'               => (new BlogController)->detail(),
            'blog-grid'                 => (new BlogController)->grid(),
            'blog-list'                 =>(new BlogController)->list(),
            'blog-sidebar-left'         =>(new BlogController)->left(),
            'blog-sidebar-right'        =>(new BlogController)->right(),

            'my-account-address'        =>(new MyController)->address(),
            'my-account-edit'           =>(new MyController)->edit(),
            'my-account-orders-details' => (new MyController)->details(),
            'my-account-orders'         => (new MyController)->orders(),
            'my-account-wishlist'       =>(new MyController)->wishlist(),
            'my-account'                =>(new MyController)->account(),
            'login'                     =>(new UserController)->login(),

            'home-02'                   =>(new HomeController )->home2(),
            'home-03'                   =>(new HomeController )->home3(),
            'home-04'                   =>(new HomeController )->home4(),
            'home-05'                   =>(new HomeController )->home5(),
            'home-06'                   =>(new HomeController )->home6(),
            'home-07'                   =>(new HomeController )->home7(),
            'home-08'                   =>(new HomeController )->home8(),

            'home-accessories'          =>(new HomeController )->home2(),
            'home-activewear'           =>(new HomeController )->accessories(),
            'home-baby'                 =>(new HomeController )->baby(),
            'home-decor'                =>(new HomeController )->decor(),
            'home-dog-accessories'      =>(new HomeController )->dog_accessories(),
            'home-electronic'           =>(new HomeController )->electronic(),
            'home-furniture-02'         =>(new HomeController )->furniture_02(),
            'home-furniture'            =>(new HomeController )->furniture(),
            'home-giftcard'             =>(new HomeController )->giftcard(),
            'home-glasses'              =>(new HomeController )->glasses(),
            'home-grocery'              =>(new HomeController )->grocery(),
            'home-handbag'              =>(new HomeController )->handbag(),
            'home-headphone'            =>(new HomeController )->jewerly(),
            'home-jewerly'              =>(new HomeController )->kids(),
            'home-kids'                 =>(new HomeController )->kids(),
            'home-kitchen-wear'         =>(new HomeController )->kitchen_wear(),
            'home-men'                  =>(new HomeController )->men(),
            'home-multi-brand'          =>(new HomeController )->multi_brand(),
            'home-paddle-boards'        =>(new HomeController )->paddle_boards(),
            'home-phonecase'            =>(new HomeController )->phonecase(),
            'home-pod-store'            =>(new HomeController )->pod_store(),
            'home-search'               =>(new HomeController )->search(),
            'home-setup-gear'           =>(new HomeController )->setup_gear(),
            'home-skateboard'           =>(new HomeController )->skateboard(),
            'home-skincare'             =>(new HomeController )->skincare(),
            'home-sneaker'              =>(new HomeController )->sneaker(),
            'home-sock'                 =>(new HomeController )->sock(),
            'home-stroller'             =>(new HomeController )->stroller(),
            'home-tee'                  =>(new HomeController )->tee(),

            'payment-confirmation'                  =>(new PayController )->confirmation(),
            'payment-failure'                       =>(new PayController )->failure(),
            'privacy-policy'                        =>(new PayController )->policy(),


            'product-3d'                            =>(new  ProductController)->product_3d(),
            'product-advanced-types'                =>(new  ProductController)->product_advanced_types(),
            'product-bottom-thumbnails'             =>(new  ProductController)->product_bottom_thumbnails(),
            'product-color-swatch'                  =>(new  ProductController)->product_color_swatch(),
            'product-complimentary'                 =>(new  ProductController)->product_complimentary(),
            'product-description-accordion'         =>(new  ProductController)->product_description_accordion(),
            'product-description-list'              =>(new  ProductController)->product_quick_order_list(),
            'product-description-vertical'          =>(new  ProductController)->product_description_vertical(),
            'product-detail'                        =>(new  ProductController)->product_detail(),
            'product-drawer-sidebar'                =>(new  ProductController)->product_drawer_sidebar(),
            'product-frequently-bought-together-2'  =>(new  ProductController)->product_frequently_bought_together_2(),

            'product-frequently-bought-together'    =>(new  ProductController)->product_frequently_bought_together(),
            'product-giftcard'                      =>(new  ProductController)->product_giftcard(),
            'product-grid-1'                        =>(new  ProductController)->product_grid_1(),
            'product-grid-2'                        =>(new  ProductController)->product_grid_2(),
            'product-images-grouped'                =>(new  ProductController)->product_images_grouped(),
            'product-no-zoom'                       =>(new  ProductController)->product_no_zoom(),
            'product-notification'                  =>(new  ProductController)->product_notification(),
            'product-options-customizer'            =>(new  ProductController)->product_options_customizer(),
            'product-photoswipe-popup'              =>(new  ProductController)->product_photoswipe_popup(),
            'product-pickup'                        =>(new  ProductController)->product_pickup(),
            'product-pre-orders'                    =>(new  ProductController)->product_pre_orders(),
            'product-quick-order-list'              =>(new  ProductController)->product_quick_order_list(),
            'product-rectangle-color'               =>(new  ProductController)->product_rectangle_color(),
            'product-rectangle'                     =>(new  ProductController)->product_rectangle(),
            'product-right-thumbnails'              =>(new  ProductController)->product_bottom_thumbnails(),
            'product-stacked'                       =>(new  ProductController)->product_stacked(),
            'product-style-01'                      =>(new  ProductController)->product_style_01(),
            'product-style-02'                      =>(new  ProductController)->product_style_02(),
            'product-style-03'                      =>(new  ProductController)->product_style_03(),
            'product-style-04'                      =>(new  ProductController)->product_style_04(),
            'product-style-05'                      =>(new  ProductController)->product_style_05(),
            'product-style-06'                      =>(new  ProductController)->product_style_06(),
            'product-style-07'                      =>(new  ProductController)->product_style_07(),
            'product-style-list'                    =>(new  ProductController)->product_style_list(),
            'product-swatch-dropdown-color'         =>(new  ProductController)->swatch_dropdown_color(),
            'product-swatch-dropdown'               =>(new  ProductController)->swatch_dropdown_color(),
            'product-swatch-image-rounded'          =>(new  ProductController)->swatch_image_rounded(),
            'product-swatch-image'                  =>(new  ProductController)->swatch_image(),
            'product-upsell-features'               =>(new  ProductController)->upsell_features(),
            'product-video'                         =>(new  ProductController)->product_video(),
            'product-zoom-magnifier'                =>(new  ProductController)->zoom_magnifier(),
            'product-zoom-popup'                    =>(new  ProductController)->product_photoswipe_popup(),















        };