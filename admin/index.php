<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>Inventory <span>Surat</span></h3>
      </div>
      <div class="right_area">
        <a href="../logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="1.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </center>
      <a href="../dashboard/index"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="../crud_surat/index.php"><i class="fas fa-table"></i><span>Surat Masuk</span></a>
      <a href="../crud_surat_keluar/index.php"><i class="fas fa-table"></i><span>Surat Keluar</span></a>
      <a href="../crud_peminjaman/index.php"><i class="fas fa-table"></i><span>Peminjaman Surat</span></a>
      <a href="../crud_karyawan/index.php"><i class="fas fa-table"></i><span>Karyawan</span></a>
      
    </div>
    <!--sidebar end-->

    <div class="content">
      
    </div>

</body>
</html>