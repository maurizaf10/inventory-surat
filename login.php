<?php 
    session_start();
    include 'koneksi.php';
 
    // menangkap data yang dikirim dari form login
    $username = $_POST['username'];
    $password = md5($_POST['password']);
 
    // menyeleksi data pada tabel admin dengan username dan password yang sesuai
    $login = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' and password='$password'");
 
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
 
    if($cek > 0){

        $data = mysqli_fetch_assoc($login);

        // cek jika user login sebagai superadmin
        if($data['level']=="superadmin"){
            
            //buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "superadmin";
            header("location:superadmin/dashboard/index.php");
        }

        // cek jika user login sebagai admin
        if($data['level']=="admin"){
            
            //buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "admin";
            header("location:dashboard/index.php");
        }
        
    }
    else{
        header("location:index.php?pesan=gagal");
    }
?>