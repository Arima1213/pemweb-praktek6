<!DOCTYPE html>
<html>
  <head>
    <title>Form Login</title>
  </head>
  <body>
    <h1>Form Biodata</h1>
    <form method="POST" action="login3.php">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" ><br><br>
      <label for="username">Username:</label>
      <input type="text" name="username" id="username" ><br><br>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" ><br><br>
      <label for="dob">Tanggal Lahir:</label>
      <input type="date" name="dob" id="dob"><br><br>
      <label for="address">Alamat:</label>
      <textarea name="address" id="address"></textarea><br><br>
      <label for="age">Umur:</label>
      <input type="number" name="age" id="age"><br><br>
      <label for="blood_group">Golongan Darah:</label>
      <input type="text" name="blood_group" id="blood_group"><br><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>