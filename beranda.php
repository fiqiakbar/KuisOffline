<?php
 session_start();

 if(isset($_SESSION['username'])){

    $username = $_SESSION['username'];
 }else{
    header("location:index.php");
 }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN BERANDA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    body {
            padding-top: 20%;
            background: #CDF0EA;
        }
</style>
<center><body>
<p> Selamat Datang <?php echo $username;?> Pada Hari <?php echo date ("l, m-d-Y");?></p>
<br>
<br>
<div>
<span><a href="formpesanalumni.php" class="btn btn-secondary">INPUT KESAN PESAN</a></span>
<span><a href="cetakpesan.php" class="btn btn-success">LIHAT KESAN PESAN</a></span>
<span><a href="logout.php" class="btn btn-danger">LOG OUT</a></span>
</div>
</center>
</body>
</html>

