<?php 
include '../koneksi.php';

$id_surat = $_POST['id_surat'];
$id_perusahaan = $_POST['id_perusahaan'];
$tanggal_keluar = $_POST['tanggal_keluar'];
$tujuan = $_POST['tujuan'];

$query = mysqli_query($koneksi, "INSERT INTO surat_keluar (id_surat, id_perusahaan, tanggal_keluar, tujuan) VALUES ('$id_surat', '$id_perusahaan', '$tanggal_keluar', '$tujuan')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>