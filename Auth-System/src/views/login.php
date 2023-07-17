<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
  </head>
  <body>
    <h1>Login</h1>

    <?php if (isset($error)): ?>
      <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="/login">
      <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="/register">Register</a></p>
  </body>
</html>