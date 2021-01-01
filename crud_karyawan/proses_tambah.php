<?php 
include '../koneksi.php';

$nama_karyawan = $_POST['nama_karyawan'];
$email = $_POST['email'];
$perusahaan = $_POST['perusahan'];
$username = $_POST['username'];

$query = mysqli_query($koneksi, "INSERT INTO karyawan (nama_karyawan, email, perusahan, username) VALUES ('$nama_karyawan', '$email', '$perusahan', '$username')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>