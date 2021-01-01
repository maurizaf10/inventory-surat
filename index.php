<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <br/>
    <center><h2>Login Inventory Surat</h2></center>
    <!-- notifikasi -->
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<script>alert('Login gagal! username dan password salah!'); window.location='index.php';</script>";
            }
            else if($_GET['pesan'] == "logout"){
                echo "<script>alert('Anda berhasil logout!'); window.location='index.php';</script>";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "<script>alert('Anda harus login untuk mengakses halaman admin'); window.location='index.php';</script>";                
            }
        }
    ?>
    <br/>
    <div class="login">
    <br/>
        <form action="login.php" method="post">
            <div>
                <label>Username:</label>
                <input type="text" name="username" id="username" />
            </div>
            <div>
                <label>Password:</label>
                <input type="password" name="password" id="password"/>
            </div>          
            <div>
                <input type="submit" value="Login" class="tombol">
            </div>
        </form>
    </div>
    
</body>
</html>