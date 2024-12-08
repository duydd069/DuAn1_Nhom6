<?php
class Product{
    public $con= null;
    public function __construct()
    {
        $this->con=connection(); 
    }
    public function all(){
        $sql="SELECT * FROM products ORDER BY id DESC";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function insert($data){
   
        $sql = "INSERT INTO products(product_name,product_price,discount_price,image,quantity,views,import_date,description,cate_id) VALUES (:product_name,:product_price,:discount_price,:image,:quantity,:views,:import_date,:description,:cate_id)";
        $stmt=$this->con->prepare($sql);
        $stmt->execute($data);
    }
    public function ProductInCate($cate_id){
        $sql="SELECT * FROM products WHERE cate_id=$cate_id ORDER BY id DESC";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    } 
    public function find_one1($id){
        $sql="SELECT * FROM products WHERE id=$id";   
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    // lấy ra 3 sp theo mã dm từ bất kỳ
    public function limit($cate_id)
    {
        $stmt = $this->con->prepare("SELECT * FROM products WHERE cate_id=$cate_id");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findOne($id)
    {
        $sql = "SELECT * FROM products WHERE id=$id";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function like()
    {
        $stmt = $this->con->prepare("SELECT * FROM products WHERE views ORDER BY views DESC LIMIT 6");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}