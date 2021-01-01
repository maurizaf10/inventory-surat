<?php 
    $koneksi = mysqli_connect("localhost","root","","surat_login");
 
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>