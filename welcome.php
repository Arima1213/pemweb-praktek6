<?php
  session_start();

  $nama = $_SESSION["nama"];
  $email = $_SESSION["email"];
  $jam = date('H:i:s');
  $hari = date('l');
  $tanggal = date('d-m-Y');

  echo "Selamat datang, $nama!<br>";
  echo "Email: $email<br>";
  echo "Jam login: $jam<br>";
  echo "Hari login: $hari<br>";
  echo "Tanggal login: $tanggal<br>";
?>
