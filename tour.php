<?php require_once("controller/script.php"); ?>
<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head><?php require_once("resources/header.php"); ?></head>

<body>
  <div class="hero_area">
    <?php require_once("resources/navbar.php"); ?>
  </div>
  <section class="service_section layout_padding" id="tour" style="margin-top: 100px;">
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
        <?php if (mysqli_num_rows($tbl_kategori) > 0) {
          while ($row = mysqli_fetch_assoc($tbl_kategori)) { ?>
            <a href="tour?kategori=<?= $row['nama_kategori'] ?>&id=<?= $row['id_kategori'] ?>" class="ml-5">
              <div class="box">
                <div class="img-box" style="border-radius: 20px;">
                  <?php $id_kategori = $row['id_kategori'];
                  $take_wisata = mysqli_query($conn, "SELECT * FROM tbl_wisata WHERE id_kategori='$id_kategori' ORDER BY id_wisata DESC LIMIT 1");
                  $row_w = mysqli_fetch_assoc($take_wisata); ?>
                  <img src="assets/images/wisata/<?= $row_w['foto_wisata'] ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;" alt="" class="img-1">
                  <img src="assets/images/wisata/<?= $row_w['foto_wisata'] ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px; transform: scale(1.1);" alt="" class="img-2">
                </div>
                <div class="name">
                  <h6>
                    <?= $row['nama_kategori'] ?>
                  </h6>
                </div>
              </div>
            </a>
            <div class="modal fade" id="tour<?= $row['id_wisata'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body p-3 pt-5 pb-5">
                    <h1><?= $row['judul'] ?></h1>
                    <img src="assets/images/wisata/<?= $row['foto_wisata'] ?>" style="width: 100%;" alt="">
                    <p class="text-dark pl-3 pr-3 pt-3 text-justify"><?= $row['deskripsi'] ?></p>
                  </div>
                </div>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </section>
  <section class="service_details_section layout_padding">
    <div class="container">
      <?php if (isset($_GET['kategori'])) {
        $id_kategori = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_GET['id']))));
        $nama_kategori = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_GET['kategori']))));
        $tbl_wisata = mysqli_query($conn, "SELECT * FROM tbl_wisata WHERE id_kategori='$id_kategori'");
        if (mysqli_num_rows($tbl_wisata) > 0) { ?>
          <div class="row">
            <div class="col-md-12">
              <h3 class="text-center"><?= $nama_kategori ?></h3>
              <div class="service_container layout_padding2 justify-content-center flex-wrap">
                <?php while ($row_data = mysqli_fetch_assoc($tbl_wisata)) { ?>
                  <a href="#" class="ml-5" data-toggle="modal" data-target="#tour<?= $row_data['id_wisata'] ?>">
                    <div class="box">
                      <div class="img-box" style="border-radius: 20px;">
                        <img src="assets/images/wisata/<?= $row_data['foto_wisata'] ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px;" alt="" class="img-1">
                        <img src="assets/images/wisata/<?= $row_data['foto_wisata'] ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px; transform: scale(1.1);" alt="" class="img-2">
                      </div>
                      <div class="name">
                        <h6>
                          <?= $row_data['judul'] ?>
                        </h6>
                      </div>
                    </div>
                  </a>
                  <div class="modal fade" id="tour<?= $row_data['id_wisata'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                          <h5 class="modal-title" id="exampleModalLabel"></h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body p-3 pt-5 pb-5">
                          <h1><?= $row_data['judul'] ?></h1>
                          <img src="assets/images/wisata/<?= $row_data['foto_wisata'] ?>" style="width: 100%;" alt="">
                          <p class="text-dark pt-1 text-justify"><?= $row_data['deskripsi'] ?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
      <?php }
      } ?>
    </div>
  </section>
  <?php require_once("resources/footer.php"); ?>

</body>
</body>

</html>