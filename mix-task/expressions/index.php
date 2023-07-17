<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Cleaner.php" method="post">
  <label for="input">Input string:</label>
  <input type="text" id="input" name="input" required><br>
  <label for="method">Cleaning method:</label>
  <select id="method" name="method">
    <option value="numeric">Remove non-numeric characters</option>
    <option value="alpha_space">Remove non-alphabet and non-space characters</option>
  </select><br>
    <input type="submit" value="Clean">
</form>
</body>
</html>