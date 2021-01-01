<?php 
include '../koneksi.php';

$id_surat = $_POST['id_surat'];
$id_perusahaan = $_POST['id_perusahaan'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$jumlah_surat = $_POST['jumlah_surat'];

$query = mysqli_query($koneksi, "INSERT INTO surat_masuk (id_surat, id_perusahaan, tanggal_masuk, jumlah_surat) VALUES ('$id_surat', '$id_perusahaan', '$tanggal_masuk', '$jumlah_surat')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>