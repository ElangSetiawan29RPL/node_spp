<?php
session_start();
require_once("koneksi.php");
if(isset($_SESSION['nisn'])){
    header("location: index_siswa.php");
}
?>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
        <title>LOG IN</title>
    </head>
<body>
<div class="row" style="margin-top 200px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 5px 5px 6px -3px;padding: 100px;">

    <center>
    <h1>Silahkan Login</h1>
            <hr />
<form action="" method="POST">
    <table>
        <tr>
<?php
// Kita akan membuat proses login nya disini
if(isset($_POST['login'])){
    $nisn = $_POST['nisn'];
    $cari = mysqli_query($db, "SELECT * FROM siswa WHERE nisn='$nisn'");
    $hasil = mysqli_fetch_assoc($cari);
        // Jika data yang dicari kosong
        if(mysqli_num_rows($cari) == 0){
            echo "<td colspan='2'><center>NISN belum terdaftar!</center></td>";
        }else{
        // Jika nisn siswa sesuai dengan database maka akan redirect ke halaman utama dan akan dibuatkan sesi
            $_SESSION['nisn'] = $_POST['nisn'];
            header("location: index_siswa.php");
        }
}?>
             <h6> NISN : <h6>
            <input type="text" name="nisn">
            <td>
                <tr>
            <input type="submit" name="login" class="btn btn-success" value="LOG IN">
            </td>
                </tr>
        <tr>
            <td colspan="2"><center>Apakah anda seorang petugas? login 
                                    <a href="login.php">disini</a>
                            </center>
            </td>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                    crossorigin="anonymous"></script>
        </tr>
    </table>
</form>
</center>
</div>
    <div class="col-md"></div>
</body>
</html>