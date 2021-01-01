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
        <h4>Admin</h4>
      </center>
      
      
    </div>
    <!--sidebar end-->

    <div class="content">
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>

      <h3 align="center">Daftar Admin</h3>
      <div class="button" align="right" >        
      </div>
        
      <div style="overflow: auto;">
        <table border="" class="table" width="1075px">
          <br/>
        <tr class="table-th">
          <th>NO</th>
          <th>Nama Admin</th>
          <th>Email</th>
          <th>Perusahaan</th>
          <th>Username</th>   
        </tr>
        <?php 
          include "../koneksi.php";
          $query = mysqli_query($koneksi, "SELECT * FROM admin") or die(mysqli_error($koneksi));
          $nomor = 1;
          while($data = mysqli_fetch_array($query)) { ?>
            <tr class="table-td">
              <td align="center"><?php echo $nomor++; ?>.</td>
              <td><?php echo $data['nama_admin']; ?></td>
              <td><?php echo $data['email']; ?></td>
              <td><?php echo $data['perusahaan']; ?></td>
              <td><?php echo $data['username']; ?></td>              
              </tr>
        <?php
        } ?>
        </table>
      </div>
    </div>

</body>
</html>