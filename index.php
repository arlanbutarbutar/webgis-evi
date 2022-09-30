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

<head><?php require_once("resources/header.php"); ?></head>

<body>
  <div class="hero_area">
    <?php require_once("resources/navbar.php"); ?>
    <section class=" slider_section position-relative" style="margin-top: 100px;">
      <div class="slider_bg-container"></div>
      <div class="slider-container">
        <div class="detail-box">
          <h1 style="font-size: 42px;">
            Selamat Datang di SIG <br>
            Wisata Kab. Ngada
          </h1>
          <p>Bajawa adalah kecamatan yang juga menjadi ibukota dari Kabupaten Ngada, provinsi Nusa Tenggara Timur, Indonesia. Kota Bajawa terletak tepat di tengah pulau Flores yang berbatasan dengan Kabupaten Nagekeo dan Kabupaten Manggarai Timur. Kabupaten Ngada memiliki beberapa objek wisata yang menjadi daya tarik bagi para wisatawan. Objek wisata di Kabupaten Ngada meliputi wisata alam, wisata budaya, wisata minat khusus dan wisata buatan.</p>
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
        <div class="col-md-12" style="z-index: 5;">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                Struktur Organisasi
              </h2>
              <hr>
            </div>
            <style>
              .img-struktur-organisasi {
                width: 100%;
                transform: none;
                transition: 0.5s ease-in-out;
              }
    
              .img-struktur-organisasi:hover {
                transform: scale(2);
                margin-left: 50%;
              }
            </style>
            <img src="assets/images/struktur-organisasi.png" class="img-struktur-organisasi" alt="">
          </div>
        </div>
        <div class="col-md-12">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                Visi Misi
              </h2>
              <hr>
            </div>
            <ul>
              <li>
                <h6 class="text-dark">Visi</h6>
                <p>Sebagai destinasi pariwisata yang sejajar dan seimbang dengan destinasi pariwisata di kawasan NTT, yang berbasis budaya, alam dan ekosistem setempat yang berkembang secara berkesinambungan, berbasis masyarakat, dan berkemampuan mendorong pertumbuhan ekonomi kabupaten untuk membangun dan meningkatkan kesejahteraan masyarakat.</p>
              </li>
              <li>
                <h6 class="text-dark">Misi</h6>
                <ol>
                  <li>Membangun destinasi pariwisata, terutama ODTW budaya dan alam, fasilitas dan aksesibilitas yang memenuhi standar pelayanan pariwisata</li>
                  <li>Membangun industri pariwisata yang memenuhi standar pelayanan pariwisata, sesuai permintaan pasar wisata yang tidak mendegradasi kualitas budaya dan lingkungan setempat.</li>
                  <li>Membangun sistem pengelolaan pariwisata yang tangguh dan akuntabel, sehingga mampu mengelola kompleksitas pariwisata Ngada secara berkesinambungan dan konsisten.</li>
                  <li>Membangun pasar dan pemasaran pariwisata berdasar pada asas kejujuran informasi melalui promosi pariwisata yang logis dan strategis.</li>
                  <li>Membangun sumber daya manusia industri pariwisata, masyarakat dan stakeholder Ngada yang mempunyai etos dan budaya pariwisata sehingga mampu memberi pelayanan, penjelasan, kebanggan akan pariwisata dan mempertahankan kesinambungan kehidupan pariwisata demi kehidupan mereka.</li>
                </ol>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-12">
          <div class="detail-box">
            <div class="custom_heading-container">
              <h2>
                Data Kunjungan Wisata
              </h2>
              <hr>
            </div>
            <style type="text/css">
              table.tableizer-table {
                width: 100%;
                font-size: 14px;
                border: 1px solid #CCC;
                font-family: Arial, Helvetica, sans-serif;
              }
    
              .tableizer-table td {
                padding: 4px;
                margin: 3px;
                border: 1px solid #CCC;
              }
    
              .tableizer-table th {
                background-color: #104E8B;
                color: #FFF;
                font-weight: bold;
                text-align: center;
              }
            </style>
            <div style="overflow-x: auto;">
              <table class="tableizer-table">
                <thead>
                  <tr class="tableizer-firstrow">
                    <th>NO</th>
                    <th>Obyek Wisata Budaya</th>
                    <th>Jenis Wisata</th>
                    <th>2016</th>
                    <th>2017</th>
                    <th>2018</th>
                    <th>2019</th>
                    <th>2020</th>
                    <th>2021</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Perkampungan Tradisional Bena</td>
                    <td>Wisman</td>
                    <td> 7.273 </td>
                    <td> 8.046 </td>
                    <td> 9.700 </td>
                    <td> 12.202 </td>
                    <td> 3.816 </td>
                    <td> 3 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 6.840 </td>
                    <td> 11.659 </td>
                    <td> 10.757 </td>
                    <td> 13.411 </td>
                    <td> 5.662 </td>
                    <td> 4.181 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Anak - anak</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> 4.184 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 14.113 </td>
                    <td> 19.705 </td>
                    <td> 20.457 </td>
                    <td> 25.613 </td>
                    <td> 9.478 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Perkampungan Tradisional Luba</td>
                    <td>Wisman</td>
                    <td> 1.792 </td>
                    <td> 3.696 </td>
                    <td> 5.116 </td>
                    <td> 6.168 </td>
                    <td> 1.524 </td>
                    <td> 3 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 69 </td>
                    <td> 765 </td>
                    <td> 400 </td>
                    <td> 1.879 </td>
                    <td> 350 </td>
                    <td> 49 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 1.861 </td>
                    <td> 4.461 </td>
                    <td> 5.516 </td>
                    <td> 8.047 </td>
                    <td> 1.874 </td>
                    <td> 52 </td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Perkampungan Tradisional Tololela</td>
                    <td>Wisman</td>
                    <td> 1.182 </td>
                    <td> 1.287 </td>
                    <td> 97 </td>
                    <td> 1.438 </td>
                    <td> 18 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 248 </td>
                    <td> 287 </td>
                    <td> 653 </td>
                    <td> 189 </td>
                    <td> 56 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 1.430 </td>
                    <td> 1.574 </td>
                    <td> 750 </td>
                    <td> 1.627 </td>
                    <td> 74 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Perkampungan Tradisional Gurusina</td>
                    <td>Wisman</td>
                    <td> 1.893 </td>
                    <td> 2.577 </td>
                    <td> 988 </td>
                    <td> 207 </td>
                    <td>&nbsp;</td>
                    <td> 8 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 149 </td>
                    <td> 269 </td>
                    <td> 167 </td>
                    <td> 10 </td>
                    <td>&nbsp;</td>
                    <td> 21 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 2.042 </td>
                    <td> 2.846 </td>
                    <td> 1.155 </td>
                    <td> 217 </td>
                    <td> - </td>
                    <td> 29 </td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Perkampungan Tradisional Wogo</td>
                    <td>Wisman</td>
                    <td> 274 </td>
                    <td> 3 </td>
                    <td> 153 </td>
                    <td> 73 </td>
                    <td>&nbsp;</td>
                    <td> - </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 36 </td>
                    <td> 73 </td>
                    <td> 60 </td>
                    <td> 27 </td>
                    <td>&nbsp;</td>
                    <td> - </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 310 </td>
                    <td> 76 </td>
                    <td> 213 </td>
                    <td> 100 </td>
                    <td> - </td>
                    <td> - </td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td>Perkampungan Tradisional Bela</td>
                    <td>Wisman</td>
                    <td> 175 </td>
                    <td> 371 </td>
                    <td> 139 </td>
                    <td> 514 </td>
                    <td> 102 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> 20 </td>
                    <td>&nbsp;</td>
                    <td> 7 </td>
                    <td> 3 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 175 </td>
                    <td> 391 </td>
                    <td> 139 </td>
                    <td> 521 </td>
                    <td> 105 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td>Desa Legelapu</td>
                    <td>Wisman</td>
                    <td> 674 </td>
                    <td> 89 </td>
                    <td> 201 </td>
                    <td> 400 </td>
                    <td> 185 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> 74 </td>
                    <td> 91 </td>
                    <td> 112 </td>
                    <td> 26 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 674 </td>
                    <td> 163 </td>
                    <td> 292 </td>
                    <td> 512 </td>
                    <td> 211 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>Perkampungan Tradisional Belaraghi</td>
                    <td>Wisman</td>
                    <td> 622 </td>
                    <td> 766 </td>
                    <td> 709 </td>
                    <td> 891 </td>
                    <td> 324 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 40 </td>
                    <td> 57 </td>
                    <td> 142 </td>
                    <td> 220 </td>
                    <td> 34 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 662 </td>
                    <td> 823 </td>
                    <td> 851 </td>
                    <td> 1.111 </td>
                    <td> 358 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>9</td>
                    <td>Perkampungan Tradisional Tua Be'a</td>
                    <td>Wisman</td>
                    <td> 44 </td>
                    <td> 84 </td>
                    <td> 88 </td>
                    <td> 97 </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> 24 </td>
                    <td> 33 </td>
                    <td> 52 </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 44 </td>
                    <td> 108 </td>
                    <td> 121 </td>
                    <td> 149 </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>10</td>
                    <td>Sumber Air Panas Alam Mengeruda </td>
                    <td>Wisman</td>
                    <td> 3.498 </td>
                    <td> 2.347 </td>
                    <td> 7.342 </td>
                    <td> 12.202 </td>
                    <td> 1.128 </td>
                    <td> 58 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 50.358 </td>
                    <td> 51.154 </td>
                    <td> 81.715 </td>
                    <td> 82.670 </td>
                    <td> 44.441 </td>
                    <td> 50.835 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 53.856 </td>
                    <td> 53.501 </td>
                    <td> 89.057 </td>
                    <td> 94.872 </td>
                    <td> 45.569 </td>
                    <td> 50.893 </td>
                  </tr>
                  <tr>
                    <td>11</td>
                    <td>Taman Laut 17 Pulau</td>
                    <td>Wisman</td>
                    <td> 2.551 </td>
                    <td> 3.060 </td>
                    <td> 3.216 </td>
                    <td> 5.875 </td>
                    <td> 1.912 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 5.314 </td>
                    <td> 5.362 </td>
                    <td> 4.907 </td>
                    <td> 6.795 </td>
                    <td> 1.113 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 7.865 </td>
                    <td> 8.422 </td>
                    <td> 8.123 </td>
                    <td> 12.670 </td>
                    <td> 3.025 </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>12</td>
                    <td>Danau Wawomudha</td>
                    <td>Wisman</td>
                    <td> 236 </td>
                    <td> 278 </td>
                    <td> 132 </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 56 </td>
                    <td> 82 </td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 292 </td>
                    <td> 360 </td>
                    <td> 132 </td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisman</td>
                    <td> 1.649 </td>
                    <td> 3.687 </td>
                    <td> 3.979 </td>
                    <td> 4.169 </td>
                    <td> 1.377 </td>
                    <td> 6 </td>
                  </tr>
                  <tr>
                    <td>13</td>
                    <td>Sumber Air Panas Alam Malanage </td>
                    <td>Wisnus</td>
                    <td> 249 </td>
                    <td> 467 </td>
                    <td> 956 </td>
                    <td> 772 </td>
                    <td> 302 </td>
                    <td> 32 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 1.898 </td>
                    <td> 4.154 </td>
                    <td> 4.935 </td>
                    <td> 4.941 </td>
                    <td> 1.679 </td>
                    <td> 38 </td>
                  </tr>
                  <tr>
                    <td>14</td>
                    <td>Air Panas Boba Soka</td>
                    <td>Wisman</td>
                    <td> - </td>
                    <td> 16 </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> 7.664 </td>
                    <td> 5.553 </td>
                    <td> 5.112 </td>
                    <td> 7.522 </td>
                    <td> 3.900 </td>
                    <td> 1.455 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td> 7.664 </td>
                    <td> 5.569 </td>
                    <td> 5.112 </td>
                    <td> 7.522 </td>
                    <td> 3.900 </td>
                    <td> 1.455 </td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>Air Terjun Ogi - Kec. Bajawa</td>
                    <td>Wisman</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td> 652 </td>
                    <td> 1.030 </td>
                    <td> 104 </td>
                    <td> - </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td> 4.858 </td>
                    <td> 7.620 </td>
                    <td> 3.223 </td>
                    <td> 352 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> 5.510 </td>
                    <td> 8.650 </td>
                    <td> 3.327 </td>
                    <td> 352 </td>
                  </tr>
                  <tr>
                    <td>16</td>
                    <td>Manulalu</td>
                    <td>Wisman</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>17</td>
                    <td>Lekoena - Kec. Inerie</td>
                    <td>Wisman</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> 600 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> 600 </td>
                  </tr>
                  <tr>
                    <td>18</td>
                    <td>Watunariwowo</td>
                    <td>Wisman</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>19</td>
                    <td>Maghilewa</td>
                    <td>Wisman</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>20</td>
                    <td>Waebana Meze - Kec. Soa</td>
                    <td>Wisman</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>21</td>
                    <td>Pantai Pasir Putih - Kec. Inerie</td>
                    <td>Wisman</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>Patung Bunda Maria Ata Gae - Kec. Bajawa</td>
                    <td>Wisman</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td> - </td>
                    <td> - </td>
                    <td> - </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>23</td>
                    <td>Pantai Jodoh Aimere</td>
                    <td>Wisman</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Wisnus</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td> - </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Jumlah Wisman</td>
                    <td>&nbsp;</td>
                    <td> 21.189 </td>
                    <td> 26.218 </td>
                    <td> 32.512 </td>
                    <td> 45.266 </td>
                    <td> 10.490 </td>
                    <td> 78 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Jumlah Wisnus</td>
                    <td>&nbsp;</td>
                    <td> 71.697 </td>
                    <td> 75.935 </td>
                    <td> 109.851 </td>
                    <td> 121.286 </td>
                    <td> 60.185 </td>
                    <td> 57.525 </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>Jumlah</td>
                    <td>&nbsp;</td>
                    <td> 92.886 </td>
                    <td> 102.153 </td>
                    <td> 142.363 </td>
                    <td> 166.552 </td>
                    <td> 70.675 </td>
                    <td> 57.603 </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="about_section layout_padding" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="detail-box">
            <h6>
              Tentang
            </h6>
            <div class="custom_heading-container">
              <h2>
                Wisata Ngada
              </h2>
              <hr>
            </div>
            <p>
              <strong>Nama :Kristina Eufrasia Moi</strong><br>
              <strong>Nim :23118010</strong><br>
              <strong>Prodi :Ilmu Komputer</strong><br>
              <strong>Fakultas:Teknik</strong><br>
              <strong>Judul :Sistem Informasi Geografis Lokasi Pariwisata di Kabupaten Ngada Berbasis Mobil</strong><br><br>
              Tujuan dibuatkan website ini adalah untuk membantu dinas pariwisata dalam menyampaikan informasi tentang objek wisata yang ada diKabupaten Ngada kepada wisatawan lokal maupun wisatawan asing. Dan teknologi yang berkembang pesat saat ini adalah smartphone, sehingga pengguna lebih sering menggunakan smartphone untuk mencari informasi yang diperlukan karena di dasari oleh rasa nyaman dan sangat efisien dibandingkan dengan perangkat lain seperti laptop atau notebook.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php require_once("resources/footer.php"); ?>

</body>
</body>

</html>