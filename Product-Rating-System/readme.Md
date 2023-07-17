<?php
class Product {
  private $conn;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function create($product_name, $product_price) {
    $query = "INSERT INTO products (product_name, product_price) VALUES (:product_name, :product_price)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':product_price', $product_price);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
}

// Create database connection
$database = new PDO("mysql:host=localhost;dbname=testdb", "username", "password");

// Initialize product object
$product = new Product($database);

// Insert product data
$product_name = "iPhone XR";
$product_price = 799;
if ($product->create($product_name, $product_price)) {
  echo "Product added successfully";
} else {
  echo "Unable to add product";
}
?>

<?php
// Product.php
class Product {
  private $conn;

  public function __construct($db) {
    $this->conn = $db;
  }

  public function create($product_name, $product_price) {
    $query = "INSERT INTO products (product_name, product_price) VALUES (:product_name, :product_price)";
    $stmt = $this->conn->prepare($query);
    $stmt->bindParam(':product_name', $product_name);
    $stmt->bindParam(':product_price', $product_price);
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }
}
?>

<?php
// index.php
include_once 'config/database.php';
include_once 'models/Product.php';

$database = new Database();
$db = $database->getConnection();

$product = new Product($db);

$product_name = "iPhone XR";
$product_price = 799;
if ($product->create($product_name, $product_price)) {
  echo "Product added successfully";
} else {
  echo "Unable to add product";
}
?>