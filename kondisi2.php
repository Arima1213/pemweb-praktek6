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
  }elseif (empty($_SESSION["dob"])) {
    echo "Data tidak lengkap! Silakan isi tanggal lahir pada halaman login.";
    exit();
  }elseif (empty($_SESSION["address"])) {
    echo "Data tidak lengkap! Silakan isi alamat pada halaman login.";
    exit();
  }elseif (empty($_SESSION["age"])) {
    echo "Data tidak lengkap! Silakan isi umur pada halaman login.";
    exit();
  }elseif (empty($_SESSION["blood_group"])) {
    echo "Data tidak lengkap! Silakan isi golongan darah pada halaman login.";
    exit();
  }
  
  $email = $_SESSION["email"];
  $nama = $_SESSION["username"];
  $dob = $_SESSION["dob"];
  $address = $_SESSION["address"];
  $age = $_SESSION["age"];
  $blood = $_SESSION["blood_group"];
  $jam = date('H:i:s');
  $hari = date('l');
  $tanggal = date('d-m-Y');

  echo "Selamat datang, $nama! data sukses terkirim<br>";
  echo "Email: $email<br>";
  echo "tanggal lahir: $dob<br>";
  echo "alamat: $address<br>";
  echo "umur: $age<br>";
  echo "gol darah: $blood<br>";
  echo "data terkirim jam: $jam ";
  echo "hari: $hari ";
  echo "tanggal: $tanggal";
?>
