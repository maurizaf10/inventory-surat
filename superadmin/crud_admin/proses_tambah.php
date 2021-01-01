<?php 
include '../../koneksi.php';

$nama_admin = $_POST['nama_admin'];
$perusahaan = $_POST['[perusahaan'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "INSERT INTO admin (nama_admin, perusahaan, username, password, email, level) VALUES ('$nama_admin', '$perusahaan', '$username', '$password', '$email', '$level')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>