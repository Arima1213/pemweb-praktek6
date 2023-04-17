<?php
  session_start();

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $age = $_POST["age"];
    $blood_group = $_POST["blood_group"];

    
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["dob"] = $dob;
        $_SESSION["address"] = $address;
        $_SESSION["age"] = $age;
        $_SESSION["blood_group"] = $blood_group;
      
        // redirect ke halaman welcome
        header("Location: kondisi2.php");
      
  }
?>