<?php 
    class AdminController
    {
        public function dashboard() {
            return view("admin/report/report");
        }

        public function listProduct()
        {
        $products = (new home)->listProducts();
        include 'views/admin/product/list.php';
        }

        public function formAddProduct() {
        include "views/admin/product/create.php";
        }
        public function category() {
            return view("admin/category/list");
        }
        public function formAddCategory() {
            include "views/admin/category/create.php";
        }
        public function order(){
            return view("admin/order/list");
        }
        public function formAddOrder(){
            include "views/admin/order/create.php";
        }
        public function user(){
            return view("admin/user/list");
        }
        public function formAddUser(){
            include "views/admin/user/create.php";
        }

    }