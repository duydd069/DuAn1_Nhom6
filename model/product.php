<<<<<<< HEAD
<<<<<<< HEAD
<?php
class Product {
    public $conn = null;

    public function __construct() {
        $this->conn = connection();  // Giả sử connection() là hàm kết nối CSDL
    }

    public function product()
    {
            // lấy 6 sp mới nhất theo trường id.
            $stmt = $this->conn->prepare('SELECT * FROM products');
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC); // lấy tất cả.
    }

    public function getProductById($id) {
        $sql = "SELECT * FROM products WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Trả về sản phẩm hoặc null nếu không tìm thấy
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

            public function categories()
            {
                $stmt = $this->conn->prepare("SELECT * FROM categories ORDER BY id DESC");
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);  // hiện ra tất cả các dữ liệu trong danhmuc từ mã mới nhất.
            }

            public function timkiem($product_name)
            {
                $product_name = "%" . $product_name . "%";  // Add wildcards to search
                $stmt = $this->conn->prepare("SELECT * FROM products WHERE product_name LIKE :product_name LIMIT 6");
                $stmt->bindParam(':product_name', $product_name, PDO::PARAM_STR);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            

=======
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
>>>>>>> 5dab4341debeadb4e3e20cabd606d4dd20a04848
=======
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
>>>>>>> 5dab4341debeadb4e3e20cabd606d4dd20a04848
}