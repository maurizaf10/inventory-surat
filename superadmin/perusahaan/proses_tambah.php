<?php 
include '../../koneksi.php';

$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat_perusahaan = $_POST['alamat_perusahaan'];
$no_telp = $_POST['no_telp'];
$email = $_POST['no_telp'];

$query = mysqli_query($koneksi, "INSERT INTO perusahaan (nama_perusahaan, alamat_perusahaan, no_telp, email) VALUES ('$nama_perusahaan', '$alamat_perusahaan', '$no_telp', '$email')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>