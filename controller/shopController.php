

<?php 
    class ShopController
    {
        public function shop()
        {

            $products = (new Product())->product();


            return view('client/shop/shop',['products' => $products]);
        }
        public function productDetail() {
            if (isset($_GET['id'])) {
                $id = (int)$_GET['id'];
                $productDetail = new Product(); 
                $product = $productDetail->getProductById($id); 
                include 'views/client/shop/product-detail.php';
            }
        }
    }
