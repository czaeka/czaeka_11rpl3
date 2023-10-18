<!DOCTYPE html>
<html>
<head>
	<title>TOKO KELONTONG CZAEKA</title>
</head>
<body>
 
	<h2>Toko Kelontong</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA BARANG</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>namabarang</td>
					<td>
						<input type="hidden" name="namabarang" value="<?php echo $d['namabarang']; ?>">
						<input type="text" name="kodebarang" value="<?php echo $d['kodebarang']; ?>">
					</td>
				</tr>
				<tr>
					<td>stokbarang</td>
					<td><input type="number" name="stokbarang" value="<?php echo $d['stokbarang']; ?>"></td>
				</tr>
				<tr>
					<td>satuanbarang</td>
				
                <td><input type="text" name="satuanbarang" value="<?php echo $d['satuanbarang']; ?>"></td>
				
    </tr>
    <tr><td>namabarang :</td><td>
                        <select name="namabarang">
                            <option value="mi instan">mi indomi</option>
                            <option value="es jeruk">nutrisari</option>
                            <option value="es teh">teh sari wangi</option>
                            <option value="coklat">chocolatos</option>
                            <option value="icecream">walls</option>
                        </select>
				<tr>
            <tr><td>restock</td><td>
                        <input type="radio" name="ya" value="ya">ya
                        <input type="radio" name="tidak" value="tidak">tidak
                    </td></tr>

    
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>