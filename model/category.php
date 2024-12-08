<<<<<<< HEAD
<?php
class Category{
    public $con= null;
    public function __construct()
    {
        $this->con=connection(); 
    }
    public function all(){
        $sql="SELECT * FROM categories ORDER BY cate_id DESC";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function find_one($cate_id){
        $sql="SELECT * FROM categories WHERE cate_id=$cate_id";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }
=======
<?php
class Category{
    public $con= null;
    public function __construct()
    {
        $this->con=connection(); 
    }
    public function all(){
        $sql="SELECT * FROM categories ORDER BY cate_id DESC";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function find_one($cate_id){
        $sql="SELECT * FROM categories WHERE cate_id=$cate_id";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;

    }
>>>>>>> 5dab4341debeadb4e3e20cabd606d4dd20a04848
}