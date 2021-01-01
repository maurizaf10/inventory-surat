<?php 
include '../../koneksi.php';

$id = $_POST['id'];
$nama_admin = $_POST['nama_admin'];
$perusahaan = $_POST['perusahaan'];
$username = $_POST['username'];
$email = $_POST['email'];
$level = $_POST['level'];

$query = mysqli_query($koneksi, "UPDATE admin SET nama_admin='$nama_admin', perusahaan='$perusahaan', username='$username', email='$email', level='$level' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>