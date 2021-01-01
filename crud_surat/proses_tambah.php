<?php 
include '../koneksi.php';

$no_surat = $_POST['no_surat'];
$nama_surat = $_POST['nama_surat'];
$kategori_surat = $_POST['kategori_surat'];
$ketersediaan = $_POST['ketersediaan'];
$status_fisik = $_POST['status_fisik'];
$perusahaan = $_POST['perusahaan'];

$query = mysqli_query($koneksi, "INSERT INTO surat (no_surat, nama_surat, kategori_surat, ketersediaan, status_fisik, perusahaan) VALUES ('$no_surat', '$nama_surat', '$kategori_surat', '$ketersediaan', '$status_fisik', '$perusahaan')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

?>