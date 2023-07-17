<?php

namespace App\Models;

use PDO;

require_once __DIR__ . '/Database/DBTransaction.php';

class Product
{
    public $username;
    public $product_name;
    public $rating;
    public $feedback;
    public $pdo;
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getUserName($username)
    {
        return $username;
    }
    public function productName($product_name)
    {
        switch($product_name) {
            case 'samsung':
                return $product_name;
                break;
            case 'nokia':
                return $product_name;
                break;
            case 'redmi':
                return $product_name;
                break;
            case 'apple':
                return $product_name;
                break;
            default:
                return "Invalid product";
        }
    }

    public function rating($rating)
    {
        switch($rating) {
            case 'bad':
                return $rating;
                break;
            case 'good':
                return $rating;
                break;
            case 'average':
                return $rating;
                break;
            case 'verygood':
                return $rating;
                break;
            default:
                return "Invalid rating";
        }
    }

    public function getFeedBack($feedback)
    {
        return $feedback;
    }

    public function insertTransaction($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
        // $this->last_insert_id = $this->pdo->lastInsertId();
        // return $this->last_insert_id;
    }
    public function fetchData()
    {
        $sql = 'SELECT * FROM rating';
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $res = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        var_dump($stmt->fetchAll());

        // session_start();
        // $_SESSION['data'] = $data;

        // header('Location: Public/read.php');
    }
    public function create($productId,$productName,$productQuantity)
    {
        $stmt = $this->pdo->prepare("INSERT INTO product (product_id, product_name,product_quantity) VALUES (:product_id, :product_name, :product_quantity)");
        $stmt->execute(['product_id' => $productId, 'product_name' => $productName,'product_quantity' => $productQuantity]);
    }
}
