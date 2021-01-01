<?php 
include '../koneksi.php';

$id = $_POST['id'];
$id_surat = $_POST['id_surat'];
$id_perusahaan = $_POST['id_perusahaan'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$jumlah_surat = $_POST['jumlah_surat'];

$query = mysqli_query($koneksi, "UPDATE surat_masuk SET id_surat='$id_surat', id_perusahaan='$id_perusahaan', tanggal_masuk='$tanggal_masuk', jumlah_surat='$jumlah_surat' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>