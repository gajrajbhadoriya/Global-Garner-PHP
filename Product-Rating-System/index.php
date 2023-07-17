<?php

use App\Database\DBTransaction;
use App\Models\Product;

require_once __DIR__ . '/vendor/autoload.php';


$database = new DBTransaction();
$db = $database->getConnection();

// $product = new Product($db);
// if ($product->create($sql, $data)) {
//     echo "Product added successfully";
// } else {
//     echo "Unable to add product";
// }

$action = isset($_GET['action']) ? $_GET['action'] : 'list';

switch ($action) {
    case 'create':
        $item = new Product();
        if (isset($_POST['submit'])) {
            $item->name = $_POST['name'];
            $item->description = $_POST['description'];
            $item->save();
            header('Location: index.php');
            exit;
        }
        include 'views/edit_item.php';
        break;
    default:
        header('Location: index.php');
        exit;
}
