<?php
session_start();
if(isset($_SESSION['username'])){
    header("location: index.php");
}
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Pembayaran SPP Online</h1>
            <hr />
<form action="proseslogin.php" method="POST">
    <table>
        <tr>
        <form action="proses_login.php" method="post">
          <h3>Silahkan login</h3>
          <h6>Username:</h6>
          <input type="text" name="username" value="" class="form-control">
          <h6>Password:</h6>
          <input type="password" name="password" class="form-control"><br>
          <input type="submit" name="login" class="btn btn-success" value="LOG IN">
      </form>
            <td colspan="2">
                <center>Apakah anda seorang siswa? login 
                            <a href="login_siswa.php">disini</a>
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
    <div 
        class="col-md">
    </div>
  </div>
</body>
</html>