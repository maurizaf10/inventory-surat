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
      <a href="../pengajuan_peminjaman/index.php"><i class="fas fa-table"></i><span>Pengajuan Peminjaman</span></a>
      <a href="../daftar_peminjaman/index.php"><i class="fas fa-table"></i><span>Daftar Peminjaman</span></a>
      <a href="index.php"><i class="fas fa-table"></i><span>Surat</span></a>
      <a href="../crud_kategori_surat/index.php"><i class="fas fa-table"></i><span>Kategori Surat</span></a>
      <a href="../crud_surat_masuk/index.php"><i class="fas fa-table"></i><span>Surat Masuk</span></a>         
      <a href="../crud_surat_keluar/index.php"><i class="fas fa-table"></i><span>Surat Keluar</span></a>
      
    </div>
    <!--sidebar end-->

    <div class="content">
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>

      <h3 align="center">Daftar Surat</h3>
      <div class="button" align="right" >
        <a href="form_tambah.php" class="example_a" rel="nofollow noopener">+ Data Baru</a>
      </div>
        
      <div style="overflow: auto;">
        <table border="" class="table" width="1075px">
          <br/>
        <tr class="table-th">
          <th>NO</th>
          <th>No Surat</th>
          <th>Nama Surat</th>
          <th>Kategori</th>
          <th>Perusahaan</th>
          <th>Ketersediaan</th>
          <th>Status Fisik</th>
          <th width="285px">Opsi</th>   
        </tr>
        <?php 
          include "../koneksi.php";
          $query = mysqli_query($koneksi, "SELECT * FROM surat") or die(mysqli_error($koneksi));
          $nomor = 1;
          while($data = mysqli_fetch_array($query)) { ?>
            <tr class="table-td">
              <td align="center"><?php echo $nomor++; ?>.</td>
              <td><?php echo $data['no_surat']; ?></td>
              <td><?php echo $data['nama_surat']; ?></td>
              <td><?php echo $data['kategori_surat']; ?></td>
              <td><?php echo $data['perusahaan']; ?></td>
              <td><?php echo $data['ketersediaan']; ?></td>
              <td><?php echo $data['status_fisik']; ?></td>
              <td width="90px" align="center">
              <a><button class="edit">Upload File</button></a>
              <a href="form_edit.php?id=<?php echo $data['id']; ?>"><button class="edit">Edit</button></a> 
              <a><button class="edit">Download</button></a>
              <a><button class="edit">Log</button></a> 
              <a><button class="edit">AKTIF</button></a>  

            </td>
            </tr>
        <?php
        } ?>
        </table>
      </div>
    </div>

</body>
</html>