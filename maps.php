<?php require_once("controller/script.php");?>
<!DOCTYPE html>
<html style="scroll-behavior: smooth;">

<head><?php require_once("resources/header.php"); ?></head>

<body>
  <div class="hero_area">
    <?php require_once("resources/navbar.php"); ?>
  </div>
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
  <?php require_once("resources/footer.php"); ?>

</body>
</body>

</html>