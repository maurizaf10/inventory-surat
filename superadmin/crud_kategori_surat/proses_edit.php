<?php 
include '../../koneksi.php';

$id = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];
$keterangan = $_POST['keterangan'];
$gambar = $_POST['gambar'];
$status = $_POST['status'];

$query = mysqli_query($koneksi, "UPDATE kategori_surat SET nama_kategori='$nama_kategori', keterangan='$keterangan', gambar='$gambar', status='$status' WHERE id='$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil diedit!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal diedit');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>