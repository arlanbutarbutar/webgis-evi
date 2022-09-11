<?php require_once("controller/script.php");
if (!isset($_SESSION['visitor'])) {
  $visitor = mysqli_query($conn, "SELECT * FROM tbl_pengunjung");
  $row = mysqli_fetch_assoc($visitor);
  $visit = $row['pengunjung'] + 1;
  $date = date("Y-m-d " . $time);
  mysqli_query($conn, "UPDATE tbl_pengunjung SET pengunjung='$visit', updated_at='$date' WHERE id_pengunjung='1'");
  $_SESSION['visitor'] = $visit;
}
?>
<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>GIS WISATA</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="assets/css/styles.css" rel="stylesheet" />
  <link href="assets/css/responsive.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
  <div class="hero_area">
    <header class="header_section" style="top: 0;position: fixed;width: 100%;z-index: 9999;">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="./">
            <img src="assets/images/logo-ngada.png" alt="">
            <span>
              GIS WISATA <br>
              <small>Lokasi Wisata Kab. Ngada</small>
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <ion-icon name="menu-outline" style="font-size: 40px; color: #fff;"></ion-icon>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-end">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="./">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#tour">Wisata</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#galery">Galeri</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#maps">Peta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#location">Lokasi</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a style="cursor: pointer;" onclick="window.location.href='auth/'" class="btn btn-light text-dark">Masuk</a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section class=" slider_section position-relative" style="margin-top: 100px;">
      <div class="slider_bg-container"></div>
      <div class="slider-container">
        <div class="detail-box">
          <h1 style="font-size: 42px;">
            Selamat Datang di GIS <br>
            Wisata Kab Ngada
          </h1>
          <p></p>
        </div>
        <div class="img-box">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="assets/images/kota-bajawa.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                Struktur Organisasi
              </h2>
              <hr>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                Visi Misi
              </h2>
              <hr>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                Data Kunjungan Wisata
              </h2>
              <hr>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php if (mysqli_num_rows($tbl_wisata) > 0) { ?>
    <section class="service_section layout_padding" id="tour">
      <div class="container">
        <div class="d-flex flex-column align-items-end">
          <div class="custom_heading-container">
            <hr>
            <h2>
              Wisata
            </h2>
          </div>
          <p>
            Rekomendasi Tempat Wisata di Ngada Paling Hits
          </p>
        </div>
      </div>
      <div class="container">
        <div class="service_container layout_padding2 justify-content-center flex-wrap">
          <?php
          while ($row = mysqli_fetch_assoc($tbl_wisata)) { ?>
            <a href="#" class="ml-5">
              <div class="box">
                <div class="img-box" style="border-radius: 20px;">
                  <img src="assets/images/wisata/<?= $row['foto_wisata'] ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;" alt="" class="img-1">
                  <img src="assets/images/wisata/<?= $row['foto_wisata'] ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px; transform: scale(1.1);" alt="" class="img-2">
                </div>
                <div class="name">
                  <h6>
                    <?= $row['judul'] ?>
                  </h6>
                </div>
              </div>
            </a>
          <?php } ?>
        </div>
      </div>
    </section>
  <?php }
  if (mysqli_num_rows($tbl_galeri) > 0) { ?>
    <section class="portfolio_section" id="galery">
      <div class="container">
        <div class="custom_heading-container">
          <h2>
            Galeri
          </h2>
          <hr>
        </div>
        <div class="layout_padding2-top">
          <div class="row">
            <?php while ($row = mysqli_fetch_assoc($tbl_galeri)) { ?>
              <div class="col-md-4">
                <div class="img-box" style="border-radius: 20px;">
                  <img src="assets/images/galeri/<?= $row['foto_galeri'] ?>" style="border-radius: 20px;" alt="">
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </section>
  <?php } ?>
  <section class="subscribe_section layout_padding mt-5" id="maps">
    <div class="container">
      <div class="row mt-5">
        <div class="col-md-2">
          <h2>
            Peta
          </h2>
        </div>
        <div class="col-md-10">
          <div id="map" style="width: 100%; height: 500px;"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="client_section layout_padding" id="location">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Lokasi
        </h2>
        <hr>
      </div>
      <div class="card border-0 shadow mt-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-borderless text-center">
              <thead>
                <tr>
                  <th scope="col">Nama Wisata</th>
                  <th scope="col">Lokasi</th>
                  <th scope="col">Deskripsi</th>
                  <th scope="col">Kategori</th>
                  <th scope="col">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php if (mysqli_num_rows($tbl_wisataAll) > 0) {
                  while ($row = mysqli_fetch_assoc($tbl_wisataAll)) { ?>
                    <tr>
                      <th scope="row"><?= $row['judul'] ?></th>
                      <td><?= $row['nama_lokasi'] ?></td>
                      <td><?= $row['deskripsi_lokasi'] ?></td>
                      <td><?= $row['nama_kategori'] ?></td>
                      <td><?= $row['deskripsi_kategori'] ?></td>
                    </tr>
                <?php }
                } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container-fluid footer_section">
    <p>
      &copy; <?= date("Y"); ?> All Rights Reserved By
      <a href="https://netmedia-framecode.com/">Netmedia Framecode</a>
    </p>
  </section>

  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  <script>
    var map = L.map('map').setView([-8.7878764207942, 120.97297277227273], 14);
    var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {}).addTo(map);

    <?php if (mysqli_num_rows($tbl_lokasi) > 0) {
      while ($row = mysqli_fetch_assoc($tbl_lokasi)) {
        $image = $row['image'];
        $nama = $row['nama_lokasi'];
        $deskripsi = $row['deskripsi_lokasi'];
    ?>
        L.marker([<?= $row['latitude'] ?>, <?= $row['longitude'] ?>]).bindPopup("<div><img src='assets/images/lokasi/<?= $image ?>' style='width: 100%;' alt=''><h4 style='margin-top: 5px;'><?= $nama ?></h4><p style='margin-top: -5px;'><?= $deskripsi ?></p></div>").addTo(map);
    <?php }
    } ?>
  </script>

</body>
</body>

</html>