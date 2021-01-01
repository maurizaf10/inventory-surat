<?php 
include '../../koneksi.php';

$id = $_POST['id'];
$nama_perusahaan = $_POST['nama_perusahaan'];
$alamat_perusahaan = $_POST['alamat_perusahaan'];
$no_telp = $_POST['no_telp'];
$email = $_POST['no_telp'];

$query = mysqli_query($koneksi, "UPDATE perusahaan SET id='$id', nama_perusahaan='$nama_perusahaan', alamat_perusahaan='$alamat_perusahaan', no_telp='$no_telp', email='email' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>