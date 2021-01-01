<?php 
include '../koneksi.php';

$id = $_POST['id'];
$nama_karyawan = $_POST['nama_karyawan'];
$email = $_POST['email'];
$perusahaan = $_POST['perusahan'];
$username = $_POST['username'];

$query = mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan='$nama_karyawan', email='$email', perusahan='$perusahan', username='$username' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>