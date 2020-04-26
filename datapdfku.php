<?php
include('koneksi2.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"select * from tb_admin");
$html = '<center><h3>Daftar Calon Siswa Baru 2020</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama Lengkap</th>
 <th>Nama</th>
 <th>Umur</th>
 <th>Jenis Kelamin</th>
 <th>Agama</th>
 <th>Tempat Dan Tanggal Lahir</th>
 <th>Alamat</th>
 <th>Email</th>
 <th>No.Hp</th>
 </tr>';
$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['lengkap']."</td>
 <td>".$row['nama']."</td>
 <td>".$row['umur']."</td>
 <td>".$row['jk']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['ttl']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['email']."</td>
 <td>".$row['hp']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);

$dompdf->setPaper('A4', 'landscape');

$dompdf->render();

$dompdf->stream('Dataku.pdf');
?>