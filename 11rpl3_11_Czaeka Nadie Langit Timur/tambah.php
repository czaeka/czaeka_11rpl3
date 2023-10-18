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
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>namabarang</td>
				<td><input type="text" name="namabarang"></td>
			</tr>
			<tr>
				<td>stokbarang</td>
				<td><input type="number" name="stokbarang"></td>
			</tr>
			<tr>
				<td>satuanbarang</td>
				<td><input type="text" name="satuanbarang"></td>
			</tr>
            <t<tr><td>namabarang :</td><td>
                        <select name="namabarang">
                            <option value="mi instan">mi indomi</option>
                            <option value="es jeruk">nutrisari</option>
                            <option value="es teh">teh sari wangi</option>
                            <option value="coklat">chocolatos</option>
                            <option value="icecream">walls</option>
                        </select>
            <tr><td>restock</td><td>
                        <input type="radio" name="ya" value="ya">ya
                        <input type="radio" name="tidak" value="tidak">tidak
                    </td></tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>