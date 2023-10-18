
<!DOCTYPE html>
<html>
<head>
	<title>TOKO KELONTONG CZAEKA</title>
</head>
<body>
 
	<h2>Toko Kelontong</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>idbarang</th>
			<th>kodeBarang</th>
			<th>namabarang</th>
			<th>satuanbarang</th>
			<th>stokbarang</th>
			<th>hargabarang</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['idbarang']; ?></td>
				<td><?php echo $d['kodebarang']; ?></td>
				<td><?php echo $d['namabarang']; ?></td>
				<td><?php echo $d['satuanbarang']; ?></td>
				<td><?php echo $d['stokbarang']; ?></td>
                <td><?php echo $d['hargabarang']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>