<?php 
include '../koneksi.php';

$id = $_POST['id'];
$id_surat = $_POST['id_surat'];
$id_perusahaan = $_POST['id_perusahaan'];
$tanggal_keluar = $_POST['tanggal_keluar'];
$tujuan = $_POST['tujuan'];

$query = mysqli_query($koneksi, "UPDATE surat_keluar SET id_surat='$id_surat', id_perusahaan='$id_perusahaan', tanggal_keluar='$tanggal_keluar', tujuan='$tujuan' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>