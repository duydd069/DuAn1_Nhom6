<?php 
    class HomeController
    {
       
            public function cate() {
                $products= new Product();
                $data = $products->all();
                $categories=(new Category)->all();
                View('client/home/home',["data"=>$data,'categories'=>$categories]);
            }
        

        
        


    }