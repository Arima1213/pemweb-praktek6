<?php
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

      $_SESSION["nama"] = $nama;
      $_SESSION["email"] = $email;
      
      // redirect ke halaman welcome
      header("Location: welcome.php");
  }
?>
