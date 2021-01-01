<?php 
include '../../koneksi.php';

$nama_karyawan = $_POST['nama_karyawan'];
$perusahaan = $_POST['perusahaan'];
$username = $_POST['username'];
$password = md5($_POST['[password']);
$email = $_POST['email'];

$query = mysqli_query($koneksi, "INSERT INTO karyawan (nama_karyawan, perusahaan, username, password, email) VALUES ('$nama_karyawan', '$perusahaan', '$username', '$password', '$email')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>