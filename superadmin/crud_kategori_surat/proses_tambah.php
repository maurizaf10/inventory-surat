<?php 
include '../../koneksi.php';

$nama_kategori = $_POST['nama_kategori'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];
$status = $_POST['status'];

$query = mysqli_query($koneksi, "INSERT INTO kategori_surat (nama_kategori, keterangan, gambar, status) VALUES ('$nama_kategori', '$keterangan', '$gambar', '$status')") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>