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
        <a href="../logout.php" class="logout_btn">Logout</a>
      </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="../admin/1.png" class="profile_image" alt="">
        <h4>Admin</h4>
      </center>
      <a href="../dashboard/index.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
      <a href="../crud_karyawan/index.php"><i class="fas fa-table"></i><span>Karyawan</span></a>
      <a href="../crud_admin/index.php"><i class="fas fa-table"></i><span>Admin Perusahaan</span></a>
      <a href="../pengajuan_peminjaman/index.php"><i class="fas fa-table"></i><span>Pengajuan Peminjaman</span></a>
      <a href="../daftar_peminjaman/index.php"><i class="fas fa-table"></i><span>Daftar Peminjaman</span></a>
      <a href="../crud_surat/index.php"><i class="fas fa-table"></i><span>Surat</span></a>
      <a href="../crud_kategori_surat/index.php"><i class="fas fa-table"></i><span>Kategori Surat</span></a>     
      <a href="../perusahaan/index.php"><i class="fas fa-table"></i><span>Perusahaan</span></a>
      <a href="index.php"><i class="fas fa-table"></i><span>Surat Masuk</span></a>         
      <a href="../crud_surat_keluar/index.php"><i class="fas fa-table"></i><span>Surat Keluar</span></a> 
      
    </div>
    <!--sidebar end-->

    <div class="content">
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
      
      <div class="button" align="right" >
        <a href="index.php" class="example_a" rel="nofollow noopener">Lihat Semua Data</a>
      </div>
  
    <h3 align="center">Edit Data Surat Masuk</h3>
    <form action="proses_edit.php" method="post">
      <?php 
      include "../koneksi.php";
      $id = $_GET['id'];

      $query = mysqli_query($koneksi, "SELECT * FROM surat_masuk WHERE id = '$id'") or die(mysqli_error($koneksi));
      $data = mysqli_fetch_array($query);
      ?>    
      <table align="center">
        <tr>
          <td>ID Surat</td>
          <td>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" size="60" name="id_surat" value="<?php echo $data['id_surat'] ?>" required>
          </td>     
        </tr> 
        <tr>
          <td>ID Perusahaan</td>
          <td>
            <input type="text" size="60" name="id_perusahaan" value="<?php echo $data['id_perusahaan'] ?>" required>
          </td> 
        </tr>
        <tr>
          <td>Tanggal Masuk</td>
          <td>
            <input type="date" size="60" name="tanggal_masuk" value="<?php echo $data['tanggal_masuk'] ?>" required>
          </td> 
        </tr> 
        <tr>
          <td>Jumlah Surat</td>
          <td>
            <input type="text" size="60" name="jumlah_surat" value="<?php echo $data['jumlah_surat'] ?>" required>
          </td> 
        </tr> 
          <td></td>
          <td><button class="simpan" type="submit">Simpan</button></td>       
        </tr>       
      </table>
    </form>      
    </div>

</body>
</html>