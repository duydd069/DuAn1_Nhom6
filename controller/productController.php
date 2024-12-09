<?php
class ProductsController
{
   public function ListProduct(){
        $data = (new Product )->all();
        $categories =(new Category)->all();
        view('client/product/product',['data'=>$data ,'categories'=>$categories]);
   }
   public function show()
   {
       $cate_id = $_GET['cate_id'];
       $data = (new Product)->ProductInCate($cate_id);
       $categories = (new Category)->all();
       view("client/product/productList", ['data' => $data, 'categories' => $categories]);
   }
   public function DetailProduct()
   {
      
       $id = $_GET['id'];
       $products = (new Product())->findOne($id);
       $categories = (new Category)->all();
      
       $limit = (new Product())->limit($products['cate_id']); 
       $like = (new Product())->like();
       $comments = (new Comment())->comnent($id);
       view('client/product/productDetaill', ['products' => $products, 'categories' => $categories, 'comments'=>$comments, 'limit'=>$limit, 'like'=>$like]);
   }
   public function productDetail() {
    if (isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $productDetail = new Product();
        $product = $productDetail->getProductById($id);
        include 'views/client/shop/product-detail.php';
    }
   }
//    public function insert()
//    {
   
      

          
//            $product_id = $_POST['product_id'];
//            $comments = $_POST['comments'];
         
       
//         (new Comment())->insert($comments, $product_id, $id,$thoigian);
//         header("location: index.php?ctl=detail&masp=$masp");

//    }
}