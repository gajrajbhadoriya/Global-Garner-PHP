<?php
 
 require_once("./database/DBTransaction.php");
 require_once("./models/Product.php");


 $product = new Product("Apple", 5, 500);
 $sql  = "insert into product(name, qty, price) values (:name , :qty , :price)";
 $data = [
     'name'  => $product->name,
     'qty'   => $product->qty,
     'price' => $product->price,
    ];

 $db = new DBTransaction();
 $db->insertTransaction($sql, $data);
 $db->producTDelete();

?>