<?php
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

      $_SESSION["username"] = $username;
      $_SESSION["email"] = $email;
      $_SESSION["password"] = $password;
      
      // redirect ke halaman welcome
      header("Location: kondisi.php");
  }
?>
