<?php

class ProductModel
{
    public $conn = null;

    public function __construct() {
        $this->conn = connection(); 
    }

    public function getAllProducts()
    {
        // Example query to fetch products
        $query = "SELECT * FROM products"; // Adjust table name and fields as necessary
        $result = $this->conn->query($query);
        
        return $result->fetchAll(PDO::FETCH_ASSOC); // Return results as an associative array
    }
}