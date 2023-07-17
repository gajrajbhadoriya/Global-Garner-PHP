<?php 
use App\Database\DBTransaction;
// include ".\Database\DBTransaction.php";

//   if (isset($_POST['submit'])) {
//     $productId = $_POST['product_id'];
//     $productName = $_POST['product_name'];
//     $productQuantity = $_POST['product_quantity'];
//     $sql = "INSERT INTO `Product`(`product_id`, `product_name`, `product_quantity`) VALUES ('$productId','$productName','$productQuantity')";

//     $result = $pdo->prepare($sql);
//     if ($result == TRUE) {
//       echo "New record created successfully.";
//     }else{
//       echo "Error:". $sql . "<br>". $pdo->error;
//     } 
//     $pdo = null; 
//   }

?>

<!DOCTYPE html>
<html>
<body>
<h2>Add Product</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Add Product</legend>
    Product Id:<br>
    <input type="text" name="product_id" placeholder="Enter  Product Id">
    <br>
    Product Name:<br>
    <input type="text" name="product_name" placeholder="Product Name">
    <br>
    Product Quantity:<br>
    <input type="number" name="product_quantity" placeholder="Enter Product Quantity">
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>