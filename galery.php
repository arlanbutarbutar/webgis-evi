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
                <div class="img-box" style="border-radius: 20px;">
                  <img src="assets/images/galeri/<?= $row['foto_galeri'] ?>" style="border-radius: 20px;" alt="">
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