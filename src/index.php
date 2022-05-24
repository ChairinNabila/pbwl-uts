<?php
// mulai session
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

//cek status login
if(!isset($_SESSION['status'])){
    header("location:login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Zakat</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/menu.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
        <div id="wrapper" class="active">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><img class="img-thumbnail" src="assets/img/download.png" alt="" style="width: 100px; height: 100px; margin-top:10px;border-radius: 20px 20px 20px 20px;"></li>
        </ul>
        <ul id="sidebar_menu" class="sidebar-nav" style="margin-top: 60px;">
            <li class="sidebar-brand"><a id="menu-toggle" href="index.php">Beranda<span id="main_icon"></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">     
            <li><a href="add_data.php">Input Data Zakat</a></li>
            <li><a href="list_data.php">Data Zakat</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
        </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              <p class="well lead" style="margin-top: 10px;">Beranda</p>
            </div>
          </div>
        </div>

        <div class="page-content inset">
          <div class="jumbotron" style="margin: 20px 20px 20px 20px; padding: 20px 20px 20px 20px">
              <h2 class="text-center">
              Aplikasi pendataan pembayaran zakat fitrah di Masjid Perjuangan 45
              </h2>
              <h3 class="text-center">
              Aplikasi ini berguna bagi masyarakat sekitar untuk mendata pembayaran zakat fitrah di Masjid 45.
              </h3>
              <br>
              <p>
              Masjid sederhana dengan sejuta nilai sejarah didalamnya adalah Masjid Perjuangan 45 di Medan, Sumatera Utara yang menjadi saksi bisu perjuangan pahlawan Indonesia untuk melawan penjajah. Masjid ini bukan sekedar pusat peribadatan kaum muslim namun juga sebagai monumen perjuangan bangsa. Masjid ini beralamat di Jl.Jl. Prof. HM. Yamin Sh No.51, Sei Kera Hilir II, Kec. Medan Perjuangan, Kota Medan, Sumatera Utara 20233. <br>
                  
              </p>
          </div>
        </div>
        
      </div>
      
    </div>
</body>
</html>