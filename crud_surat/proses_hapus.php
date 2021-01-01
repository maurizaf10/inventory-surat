<?php 
include '../koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM surat WHERE id = '$id'") or die(mysqli_error($koneksi));
if($query) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal dihapus'); window.location='index.php';</script>";
}

?>