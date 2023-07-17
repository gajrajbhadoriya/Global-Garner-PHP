<html>
  <head>
    <title>Rating-System</title>
    <style>
      table {
        text-align: center;
        border: 3px solid green;
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <a><h1>Rate-Product</h1></a>
      <table>
        <tr>
          <td>Username</td>
          <td>
            <input type="text" name="username" placeholder="Enter first number" />
          </td>
        </tr>
        <tr>
          <td>
            <select name="product_name">
              <option value="">Product_name</option>
              <option value="samsung">Samsung</option>
              <option value="nokia">Nokia</option>
              <option value="redmi">Redmi</option>
              <option value="apple">Apple</option>
            </select>
          </td>
        </tr>
        <tr>
          <td>
            <select name="rating">
              <option value="">Rating</option>
              <option value="bad">Bad</option>
              <option value="good">Good</option>
              <option value="average">Average</option>
              <option value="verygood">Very Good</option>
            </select>
          </td>
        </tr>
        <tr>
        <td>feedback</td>
          <td>
            <input type="textarea" name="feedback" placeholder="feedback" />
          </td> 
        </tr>
        <tr>
          <td>
            <button type="submit" name="submit">Submit</button>
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>

<?php 
include "config.php";
  if (isset($_POST['submit'])) {
    $userName = $_POST['username'];
    $productName = $_POST['product_name'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
    $sql = "INSERT INTO `users`(`username`, `product_name`, `rating`, `feedback`) VALUES ('$userName','$productName','$rating','$feedback')";

    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "New record created successfully.";
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    } 
    $conn->close(); 
  }

?>

<!DOCTYPE html>
<html>
<body>
<h2>Add Product</h2>
<form action="" method="POST">
  <fieldset>
    <legend>Add Product</legend>
    :<br>
    <input type="text" name="username">
    <br>
    Product NAme:<br>
    <input type="text" name="product_name">
    <br>
    Email:<br>
    <input type="email" name="email">
    <br>
    Password:<br>
    <input type="password" name="password">
    <br>
    Gender:<br>
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Female">Female
    <br><br>
    <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>