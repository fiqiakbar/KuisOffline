<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK PESAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>
    body {
            background: #DAEAF1;
        }
    </style>
<body>
    <center><h1 >CETAK KESAN PESAN</h1></center>
<?php
include "koneksi.php";
$cetak = mysqli_query($conn, "SELECT * from pesanalumni ORDER BY name") or die("Proses cetak gagal" );

    echo "<table width='100%' cellpadding='2' cellspacing='0' border='1'>
    <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Tahun Lulus</th>
    <th>Pekerjaan</th>
    <th>Pesan</th>";
    $no=1;
    foreach($cetak as $hasil){
    echo "<tr>
    <td>$no</td>
    <td>".$hasil['Name']."</td>
    <td>".$hasil['Email']."</td>
    <td>".$hasil['Address']."</td>
    <td>".$hasil['TahunLulus']."</td>
    <td>".$hasil['Pekerjaan']."</td>
    <td>".$hasil['Message']."</td> 
    </tr>";
    $no++;
}
echo "</table>";
?>
<a text-align="justify" href="beranda.php">BERANDA</a>
</body>
</html>