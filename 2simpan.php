<?php
include '2konek.php';
//menyimpan data kedalam variabel
$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$pesan = $_POST['pesan'];
//query sql untuk insert data
$query="INSERT INTO kontak SET id='$id',nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat',kota='$kota'pesan='$pesan'";
mysqli_query($koneksi, $query);
//mengalihkan halaman tampil.php
header("location:2tampil.php");
?>