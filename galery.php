<?php require_once("controller/script.php"); ?>
<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head><?php require_once("resources/header.php"); ?></head>

<body>
  <div class="hero_area">
    <?php require_once("resources/navbar.php"); ?>
  </div>
  <section class="portfolio_section" id="galery" style="margin-top: 150px;">
    <div class="container">
      <div class="custom_heading-container">
        <h2>
          Galeri
        </h2>
        <hr>
      </div>
      <div class="layout_padding2-top">
        <div class="row">
          <?php if (mysqli_num_rows($tbl_galeri) > 0) {
            while ($row = mysqli_fetch_assoc($tbl_galeri)) { ?>
              <div class="col-md-4">
                <a href="#" class="ml-5" data-toggle="modal" data-target="#tour<?= $row['id_galeri'] ?>">
                  <div class="img-box" style="border-radius: 20px;">
                    <img src="assets/images/galeri/<?= $row['foto_galeri'] ?>" style="border-radius: 20px;" alt="">
                  </div>
                </a>
                <div class="modal fade" id="tour<?= $row['id_galeri'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body p-3 pt-5 pb-5">
                        <img src="assets/images/galeri/<?= $row['foto_galeri'] ?>" style="width: 100%;" alt="">
                        <small class="text-dark pl-3 pr-3 pt-3 text-justify"><?= $row['deskripsi_galeri'] ?></small>
                        <?php $id_wisata = $row['id_wisata'];
                        $take_wisata = mysqli_query($conn, "SELECT * FROM tbl_wisata WHERE id_wisata='$id_wisata'");
                        $data_wisata = mysqli_fetch_assoc($take_wisata); ?>
                        <h4 class="font-weigth-bold mt-3"><?= $data_wisata['judul'] ?></h4>
                        <p class="text-dark pt-1 text-justify"><?= $data_wisata['deskripsi'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          <?php }
          } ?>
        </div>
      </div>
    </div>
  </section>
  <?php require_once("resources/footer.php"); ?>

</body>
</body>

</html>