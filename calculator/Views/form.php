<html>
  <head>
    <title>Calculator</title>
    <style>
      table {
        text-align: center;
        border: 3px solid green;
      }
    </style>
  </head>
  <body>
    <form action="" method="post">
      <a><h1>Calculator</h1></a>
      <table>
        <tr>
          <td>first number</td>
          <td>
            <input type="text" name="num1" placeholder="Enter first number" />
          </td>
        </tr>
        <tr>
          <td>second number</td>
          <td>
            <input type="text" name="num2" placeholder="Enter second number" />
          </td>
        </tr>
        <tr>
          <td>
            <select name="operator">
              <option value="none">None</option>
              <option value="add">Add</option>
              <option value="subtract">Subtract</option>
              <option value="multiply">Multiply</option>
              <option value="divide">Divide</option>
            </select>
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
