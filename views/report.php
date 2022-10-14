<?php require_once("../controller/script.php");
require_once("redirect.php");
$_SESSION['page-name'] = "Laporan";
$_SESSION['page-url'] = "report";
?>

<!DOCTYPE html>
<html lang="en">

<head><?php require_once("../resources/dash-header.php") ?></head>

<body>
  <?php if (isset($_SESSION['message-success'])) { ?>
    <div class="message-success" data-message-success="<?= $_SESSION['message-success'] ?>"></div>
  <?php }
  if (isset($_SESSION['message-info'])) { ?>
    <div class="message-info" data-message-info="<?= $_SESSION['message-info'] ?>"></div>
  <?php }
  if (isset($_SESSION['message-warning'])) { ?>
    <div class="message-warning" data-message-warning="<?= $_SESSION['message-warning'] ?>"></div>
  <?php }
  if (isset($_SESSION['message-danger'])) { ?>
    <div class="message-danger" data-message-danger="<?= $_SESSION['message-danger'] ?>"></div>
  <?php } ?>
  <div class="container-scroller">
    <?php require_once("../resources/dash-topbar.php") ?>
    <div class="container-fluid page-body-wrapper">
      <?php require_once("../resources/dash-sidebar.php") ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <h2>Cetak Laporan Wisata</h2>
            </div>
          </div>
          <div class="row flex-grow mt-3">
            <?php if (mysqli_num_rows($cetak_kategori) > 0) {
              while ($row = mysqli_fetch_assoc($cetak_kategori)) { ?>
                <div class="col-lg-3 grid-margin stretch-card">
                  <div class="card bg-primary card-rounded">
                    <div class="card-body pb-3">
                      <h4 class="card-title card-title-dash text-white mb-3"><?= $row['nama_kategori'] ?></h4>
                      <div class="row">
                        <div class="col-sm-8">
                          <p class="text-white mb-1">Jumlah Tempat Wisata</p>
                          <h2 class="text-white">
                            <?php $id_kategori = $row['id_kategori'];
                            $check_wisata = mysqli_query($conn, "SELECT * FROM tbl_wisata WHERE id_kategori='$id_kategori'");
                            $count = mysqli_num_rows($check_wisata);
                            echo $count; ?>
                          </h2>
                        </div>
                        <div class="col-sm-4">
                          <form action="export-wisata.php" method="post">
                            <input type="hidden" name="id-kategori" value="<?= $row['id_kategori']; ?>">
                            <button type="submit" name="check-kategori" class="btn btn-primary btn-sm">
                              <i class="mdi mdi-file-excel" style="font-size: 20px;"></i>
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php }
            } ?>
          </div>
        </div>
        <?php require_once("../resources/dash-footer.php") ?>
</body>

</html>