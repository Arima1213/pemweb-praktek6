<!DOCTYPE html>
<html>
  <head>
    <title>Form Login</title>
  </head>
  <body>
    <h1>Form Login</h1>
    <form method="POST" action="login.php">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" required><br><br>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" required><br><br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" required><br><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
