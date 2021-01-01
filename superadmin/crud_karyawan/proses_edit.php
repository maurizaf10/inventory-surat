<?php 
include '../../koneksi.php';

$id = $_POST['id'];
$nama_karyawan = $_POST['nama_karyawan'];
$perusahaan = $_POST['perusahaan'];
$username = $_POST['username'];
$email = $_POST['email'];

$query = mysqli_query($koneksi, "UPDATE karyawan SET nama_karyawan='$nama_karyawan', perusahaan='$perusahaan', username='$username', email='$email' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>