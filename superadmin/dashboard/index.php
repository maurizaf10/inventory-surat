<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../admin/style.css">
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
        <a href="../../logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="../admin/1.png" class="profile_image" alt="">
        <h4>Super Admin</h4>
      </center>
      
      <a href="index.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="../crud_karyawan/index.php"><i class="fas fa-table"></i><span>Karyawan</span></a>
      <a href="../crud_admin/index.php"><i class="fas fa-table"></i><span>Admin Perusahaan</span></a>
      <a href="../pengajuan_peminjaman/index.php"><i class="fas fa-table"></i><span>Pengajuan Peminjaman</span></a>
      <a href="../daftar_peminjaman/index.php"><i class="fas fa-table"></i><span>Daftar Peminjaman</span></a>
      <a href="../crud_surat/index.php"><i class="fas fa-table"></i><span>Surat</span></a>
      <a href="../crud_kategori_surat/index.php"><i class="fas fa-table"></i><span>Kategori Surat</span></a>     
      <a href="../perusahaan/index.php"><i class="fas fa-table"></i><span>Perusahaan</span></a>
      <a href="../crud_surat_masuk/index.php"><i class="fas fa-table"></i><span>Surat Masuk</span></a>         
      <a href="../crud_surat_keluar/index.php"><i class="fas fa-table"></i><span>Surat Keluar</span></a>
            
      
    </div>
    <!--sidebar end-->

    <div class="content" align="center">
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>

      <h3>Selamat Datang di Website Inventory Surat<h3/>

      <?php
      include "../../koneksi.php";
      $queri1 = mysqli_query($koneksi,"SELECT * FROM karyawan");
      $queri2 = mysqli_query($koneksi,"SELECT * FROM admin");
      $queri3 = mysqli_query($koneksi,"SELECT * FROM surat");
      $queri4 = mysqli_query($koneksi,"SELECT * FROM perusahaan");
      $queri5 = mysqli_query($koneksi,"SELECT * FROM pengajuan_peminjaman");
      $queri6 = mysqli_query($koneksi,"SELECT * FROM peminjaman");
      

      $jml_karyawan = mysqli_num_rows($queri1);
      $jml_admin = mysqli_num_rows($queri2);
      $jml_surat = mysqli_num_rows($queri3);
      $jml_perusahaan = mysqli_num_rows($queri4);
      $jml_pengajuan_peminjaman = mysqli_num_rows($queri5);
      $jml_peminjaman = mysqli_num_rows($queri6);
      

      ?>

      <a href="../crud_karyawan/index.php">
        <div class="box1" ><?php echo number_format($jml_karyawan); ?> <br/> Total Karyawan</div>        
      </a>
      <a href="../crud_admin/index.php">
        <div class="box1" ><?php echo number_format($jml_admin); ?> <br/> Total Admin</div>        
      </a>
      <a href="../crud_surat/index.php">
        <div class="box1" ><?php echo number_format($jml_surat); ?> <br/> Total Surat</div>        
      </a>
      <a href="../perusahaan/index.php">
        <div class="box1" ><?php echo number_format($jml_perusahaan); ?> <br/> Total Perusahaan</div>        
      </a>
      <a href="../pengajuan_peminjaman/index.php">
        <div class="box1" ><?php echo number_format($jml_pengajuan_peminjaman); ?> <br/> Total Pengajuan Peminjaman</div>        
      </a>
      <a href="../daftar_peminjaman/index.php">
        <div class="box1" ><?php echo number_format($jml_peminjaman); ?> <br/> Total Peminjaman</div>        
      </a>
      
      

    </div>

</body>
</html>