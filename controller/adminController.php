<?php 
    class AdminController
    {
        public function dashboard() {
            return view("admin/report/report");
        }
        /// Product

        public function listProduct()
        {
        $products = (new home)->listProducts();
        include 'views/admin/product/list.php';
        }

        public function formAddProduct() {
        include "views/admin/product/create.php";
        }

        
        

        /// Category

        public function listCategory() {
            $categories = (new home)->getCategories();
            include 'views/admin/category/list.php';
            include 'views/admin/product/create.php';
        }
        public function category() {
            return view("admin/category/list");
        }

        public function formAddCategory() {
            include "views/admin/category/create.php";
        }

        /// Order

        public function order(){
            $orders = (new home)->getOrders();
            include 'views/admin/order/list.php';
        }
        public function formAddOrder(){
            include "views/admin/order/create.php";
        }

        /// User

        public function user(){
            $users = (new home)->getUsers();
            include 'views/admin/user/list.php';
        }
        public function formAddUser(){
            include "views/admin/user/create.php";
        }

    }