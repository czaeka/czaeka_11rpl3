<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
$jurusan = $_POST['kelamin'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat','$jurusan','$kelamin')");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>