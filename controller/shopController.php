

<?php 
    class ShopController
    {
        public function shop()
        {

            $products = (new Product())->product();


            return view('client/shop/shop',['products' => $products]);
        }

    
    }