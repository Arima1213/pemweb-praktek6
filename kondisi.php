<?php
  session_start();

  // jika nama atau email kosong, tampilkan pesan kesalahan
  if (empty($_SESSION["username"])) {
    echo "Data tidak lengkap! Silakan isi nama pada halaman login.";
    exit();
  }elseif(empty($_SESSION["email"])){
    echo "Data tidak lengkap! Silakan isi email pada halaman login.";
    exit();
  }elseif(empty($_SESSION["password"])){
    echo "Data tidak lengkap! Silakan isi password pada halaman login.";
    exit();
  }
  
  // jika nama dan email terisi, tampilkan halaman welcome
  $nama = $_SESSION["username"];
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
