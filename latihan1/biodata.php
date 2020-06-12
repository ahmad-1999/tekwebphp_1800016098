<?php  
$nama=$_POST['nama'];
$nim=$_POST['nim'];
$kelamin=$_POST['kelamin'];
$studi=$_POST['studi'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<body>
		<table width="400" border="1">
			<tr>
				<td>Nama</td>
				<td><?= $nama; ?></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><?= $nim; ?></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td><?= $kelamin; ?></td>
			</tr>

			<tr>
				<td>Program Studi</td>
				<td><?= $studi; ?></td>
			</tr>
		</table>
</body>
</html>