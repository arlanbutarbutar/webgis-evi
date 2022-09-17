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
        <?php if (mysqli_num_rows($tbl_wisata) > 0) {
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
        <?php }
        } ?>
      </div>
    </div>
  </section>
  <?php require_once("resources/footer.php"); ?>

</body>
</body>

</html>