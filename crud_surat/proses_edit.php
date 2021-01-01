<?php 
include '../koneksi.php';

$id = $_POST['id'];
$no_surat = $_POST['no_surat'];
$nama_surat = $_POST['nama_surat'];
$kategori_surat = $_POST['kategori_surat'];
$ketersediaan = $_POST['ketersediaan'];
$status_fisik = $_POST['status_fisik'];
$perusahaan = $_POST['perusahaan'];

$query = mysqli_query($koneksi, "UPDATE surat SET id='$id', no_surat='$no_surat', nama_surat='$nama_surat', kategori_surat='$kategori_surat', ketersediaan='$ketersediaan', status_fisik='$status_fisik', perusahaan='$perusahaan' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

?>