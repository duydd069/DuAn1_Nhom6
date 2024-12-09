<?php
class Category {
    public $con= null;
    public function __construct()
    {
        $this->con=connection(); 
    }
    public function all(){
        $sql="SELECT * FROM categories ORDER BY id DESC";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}