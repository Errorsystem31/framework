<?php 
// koneksi ke databese 
require 'Functions.php';

$result= mysqli_query($conn, "SELECT * FROM pengguna");





 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar penunjung</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
	<th>No.</th>
	
	<th>Nama Lengkap</th>
	<th>Jenis Kelamin</th>
	<th>Usia</th>
	<th>Anak Nomor</th>
	<th>Alamat</th>
	<th>Nomor Telepon</th>
	<th>Asal Sekolah</th>
	<th>Agama</th>
</tr>

<?php $i= 1;  ?>
 
 <?php while($row = mysqli_fetch_assoc($result)): ?>
<tr>
	<td><?= $i;?></td>
	
	<td><?= $row["Nama_Lengkap"];?></td>
	<td><?= $row["Jenis_Kelamin"];?></td>
	<td><?= $row["Usia"];?></td>
	<td><?= $row["Anak_Nomor"];?></td>
	<td><?= $row["Alamat"];?></td>
	<td><?= $row["Nomor_Telepon"];?></td>
	<td><?= $row["Asal_Sekolah"];?></td>
	<td><?= $row["Agama"];?></td>


</tr>
<?php $i++; ?>
<?php endwhile; ?>
</table>


</body>
</html>