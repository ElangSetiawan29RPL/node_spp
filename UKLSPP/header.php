<h1 align="center">Selamat datang di Aplikasi Pembayaran SPP</h1>
            <hr />
<!-- Logika kita, Jika Level Admin Maka Fitur apa saja yang dapat diakses -->
<?php
$panggil = mysqli_query($db, "SELECT * FROM petugas WHERE username='$username'");
$hasil = mysqli_fetch_assoc($panggil);
  if($hasil['level'] == "Administrator"){ ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
        crossorigin="anonymous">
        <title></title>
    </head>

    <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -3px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index.php">Pembayaran SPP Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="siswa.php">Data Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="petugas.php">Data Petugas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="kelas.php">Data Kelas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="spp.php">Data SPP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="history.php">History Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">

<?p}else if($hasil['level'] == "Administrator"){ ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 4px 4px 5px -3px;">
      <div class="container-fluid">
        <a class="navbar-brand" href="./index_siswa.php">Pembayaran SPP Online</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="transaksi.php">Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="history.php">History Pembayaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="logout.php">LogOut</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container bg-light rounded" style="margin-top:10px">
<?php } ?>
            <hr />
    