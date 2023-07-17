<!DOCTYPE html>
<html>
  <head>
    <title>Register</title>
  </head>
  <body>
    <h1>Register</h1>

    <?php if (isset($error)): ?>
      <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="/register">
      <div>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Register</button>
    </form>

    <p>Already have an account? <a href="/login">Login</a></p>
  </body>
</html>