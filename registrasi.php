<html>
<head>
  <title>Data Saya</title>
  <style type="text/css">
        body {
            background: blue;
            color: white;
            font-weight: bold;
        }
        h2 {
            background: white;
            color: black;
        }
        h3 {
            background: white;
            color: black;
        }
        a {
        	color: red;
        }
    </style> 
</head>
<body>
  <h2><center>Informasi Anda</center></h2>
  <td>
<?php
include 'koneksi2.php';
$lengkap = $_POST['lengkap'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$hp = $_POST['hp'];
 
mysqli_query("INSERT INTO user VALUES('$lengkap','$nama','$umur','$jk','$agama','$ttl','$alamat','$email','$hp')");

if (mysqli_connect_errno()){
echo "Nama Lengkap: ".$_POST['lengkap']."<br>";
echo "Nama: ".$_POST['nama']."<br>";
echo "Umur: ".$_POST['umur']."<br>";
echo "Jenis Kelamin: ".$_POST['jk']."<br>";
echo "Agama: ".$_POST['agama']."<br>";
echo "Tempat Dan Tanggal Lahir: ".$_POST['ttl']."<br>";
echo "Alamat: ".$_POST['alamat']."<br>";
echo "Email: ".$_POST['email']."<br>";
echo "No.HP: ".$_POST['hp']."<br>";
}
?>
<br>
<h3><center>Daftar Nama Calon Siswa Baru 2020</center></h3>
<a href="datapdfku.php">Lihat lanjut.......</a>
</body>
</html>