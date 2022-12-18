<?php require_once("../controller/script.php");
require_once("redirect.php");
$_SESSION['page-name'] = "Kunjungan";
$_SESSION['page-url'] = "visit";
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
          <div class="row flex-row-reverse">
            <div class="col-lg-4">
              <div class="card card-rounded mt-3">
                <div class="card-body text-center">
                  <h4>Tambah Data Kunjungan</h4>
                  <form class="mt-3" action="" method="post" name="random_form">
                    <div class="mb-3">
                      <label for="wisata" class="form-label">Obyek Wisata</label>
                      <select class="form-select" name="id-wisata" aria-label="Default select example" required>
                        <option selected value="">Pilih Obyek Wisata</option>
                        <?php foreach ($select_wisata as $row_sw) : ?>
                          <option value="<?= $row_sw['id_wisata'] ?>"><?= $row_sw['judul'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <button type="submit" name="tambah-kunjungan" class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-8">
              <div class="card card-rounded mt-3">
                <div class="card-body">
                  <div class="table-responsive  mt-1">
                    <table class="table select-table text-center">
                      <thead>
                        <tr>
                          <th rowspan="2">#</th>
                          <th rowspan="2">Obyek Wisata</th>
                          <th rowspan="2">Jenis Wisata</th>
                          <th>Tahun</th>
                          <th>
                        <tr>
                          </th>
                          <?php $tahun = mysqli_query($conn, "SELECT DISTINCT tahun FROM tahun_kunjungan");
                          if (mysqli_num_rows($tahun) > 0) {
                            while ($row_tahun = mysqli_fetch_assoc($tahun)) { ?>
                              <th><?= $row_tahun['tahun'] ?></th>
                          <?php }
                          } ?>
                          <th colspan="2">Aksi</th>
                        </tr>
                        </tr>
                      </thead>
                      <tbody id="search-page">
                        <?php $no = 1;
                        if (mysqli_num_rows($data_kunjungan) == 0) { ?>
                          <tr>
                            <td colspan="5">Belum ada data galeri</td>
                          </tr>
                          <?php } else if (mysqli_num_rows($data_kunjungan) > 0) {
                          while ($row = mysqli_fetch_assoc($data_kunjungan)) { ?>
                            <tr>
                              <td><?= $no; ?></td>
                              <td><?= $row['judul'] ?></td>
                              <td>
                                <button type="button" class="btn btn-link p-0 text-decoration-none" data-bs-toggle="modal" data-bs-target="#tambah-kategori<?= $row['id_kunjungan'] ?>">
                                  <i class="mdi mdi-plus" style="font-size: 20px;"></i> Tambah
                                </button>
                                <div class="modal fade" id="tambah-kategori<?= $row['id_kunjungan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header border-bottom-0">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Jenis Wisata</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <form action="" method="post">
                                        <div class="modal-body">
                                          <div class="mb-3">
                                            <label for="kategori" class="form-label">Jenis Wisata</label>
                                            <select class="form-select" name="id-kategori" aria-label="Default select example" required>
                                              <option selected value="">Pilih Jenis Wisata</option>
                                              <?php foreach ($select_kategori as $row_sk) : ?>
                                                <option value="<?= $row_sk['id_kategori'] ?>"><?= $row_sk['nama_kategori'] ?></option>
                                              <?php endforeach; ?>
                                            </select>
                                          </div>
                                        </div>
                                        <div class="modal-footer justify-content-center border-top-0">
                                          <input type="hidden" name="id-kunjungan" value="<?= $row['id_kunjungan'] ?>">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                          <button type="submit" name="tambah-kategori-visit" class="btn btn-primary">Tambah</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                                <?php $id_kunjungan = $row['id_kunjungan'];
                                $kk = mysqli_query($conn, "SELECT * FROM kategori_kunjungan JOIN tbl_kategori ON kategori_kunjungan.id_kategori=tbl_kategori.id_kategori WHERE kategori_kunjungan.id_kunjungan='$id_kunjungan'");
                                if (mysqli_num_rows($kk) > 0) {
                                  while ($row_kk = mysqli_fetch_assoc($kk)) { ?>
                                    <p>
                                      <?= $row_kk['nama_kategori'] ?>
                                      <button type="button" class="btn btn-link btn-sm text-danger p-0" data-bs-toggle="modal" data-bs-target="#hapus<?= $row_kk['id_kategori_kunjungan'] ?>">
                                        <i class="mdi mdi-delete"></i>
                                      </button>
                                      <button type="button" class="btn btn-link p-0 text-decoration-none" style="font-size: 12px;" data-bs-toggle="modal" data-bs-target="#tambah-tahun<?= $row_kk['id_kategori_kunjungan'] ?>">
                                        <i class="mdi mdi-plus" style="font-size: 18px;"></i> Tahun
                                      </button>
                                    <div class="modal fade" id="hapus<?= $row_kk['id_kategori_kunjungan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title" id="exampleModalLabel"><?= $row_kk['nama_kategori'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            Anda yakin ingin menghapus jenis wisata <?= $row_kk['nama_kategori'] ?>?
                                          </div>
                                          <div class="modal-footer justify-content-center border-top-0">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="" method="POST">
                                              <input type="hidden" name="id-kk" value="<?= $row_kk['id_kategori_kunjungan'] ?>">
                                              <input type="hidden" name="namaOld" value="<?= $row_kk['nama_kategori'] ?>">
                                              <button type="submit" name="hapus-kategori-visit" class="btn btn-danger">Hapus</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="modal fade" id="tambah-tahun<?= $row_kk['id_kategori_kunjungan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Pengunjung/tahun</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <form action="" method="post">
                                            <div class="modal-body">
                                              <div class="mb-3">
                                                <label for="tahun" class="form-label">Tahun</label>
                                                <input type="year" name="tahun" class="form-control" id="tahun" placeholder="Tahun" required>
                                              </div>
                                              <div class="mb-3">
                                                <label for="pengunjung" class="form-label">Jumlah Kunjungan</label>
                                                <input type="number" name="pengunjung" class="form-control" id="pengunjung" placeholder="Jumlah Kunjungan" required>
                                              </div>
                                            </div>
                                            <div class="modal-footer justify-content-center border-top-0">
                                              <input type="hidden" name="id-kunjungan" value="<?= $row['id_kunjungan'] ?>">
                                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                              <button type="submit" name="tambah-pengunjung" class="btn btn-primary">Tambah</button>
                                            </div>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                    </p>
                                <?php }
                                }
                                ?>
                              </td>
                              <?php $id_kunjungan = $row['id_kunjungan'];
                              $tk = mysqli_query($conn, "SELECT * FROM tahun_kunjungan WHERE id_kunjungan='$id_kunjungan'");
                              if (mysqli_num_rows($tk) > 0) {
                                while ($row_tk = mysqli_fetch_assoc($tk)) { ?>
                                  <td>
                                    <p>
                                      <?= $row_tk['tahun'] . " (" . $row_tk['jumlah_kunjungan'] . " org)" ?>
                                      <button type="button" class="btn btn-link btn-sm text-danger p-0" data-bs-toggle="modal" data-bs-target="#hapus<?= $row_tk['id_tahun'] ?>">
                                        <i class="mdi mdi-delete"></i>
                                      </button>
                                    <div class="modal fade" id="hapus<?= $row_tk['id_tahun'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog">
                                        <div class="modal-content">
                                          <div class="modal-header border-bottom-0">
                                            <h5 class="modal-title" id="exampleModalLabel"><?= $row_tk['tahun'] ?></h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <div class="modal-body">
                                            Anda yakin ingin menghapus jenis wisata <?= $row_tk['tahun'] ?>?
                                          </div>
                                          <div class="modal-footer justify-content-center border-top-0">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <form action="" method="POST">
                                              <input type="hidden" name="id-tahun" value="<?= $row_tk['id_tahun'] ?>">
                                              <input type="hidden" name="namaOld" value="<?= $row_tk['tahun'] ?>">
                                              <button type="submit" name="hapus-pengunjung" class="btn btn-danger">Hapus</button>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    </p>
                                  </td>
                              <?php }
                              }
                              ?>
                              <td>
                                <button type="button" class="btn btn-warning btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#ubah<?= $row['id_kunjungan'] ?>" aria-expanded="false" aria-controls="ubah<?= $row['id_kunjungan'] ?>">
                                  <i class="mdi mdi-table-edit"></i>
                                </button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#hapus<?= $row['id_kunjungan'] ?>">
                                  <i class="mdi mdi-delete"></i>
                                </button>
                                <div class="modal fade" id="hapus<?= $row['id_kunjungan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header border-bottom-0">
                                        <h5 class="modal-title" id="exampleModalLabel"><?= $row['judul'] ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        Anda yakin ingin menghapus data kunjungan <?= $row['judul'] ?>?
                                      </div>
                                      <div class="modal-footer justify-content-center border-top-0">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                        <form action="" method="POST">
                                          <input type="hidden" name="id-kunjungan" value="<?= $row['id_kunjungan'] ?>">
                                          <input type="hidden" name="namaOld" value="<?= $row['judul'] ?>">
                                          <button type="submit" name="hapus-kunjungan" class="btn btn-danger">Hapus</button>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </td>
                            </tr>
                            <tr style="border-top: hidden;">
                              <td colspan="5">
                                <form action="" method="post">
                                  <div class="collapse" id="ubah<?= $row['id_kunjungan'] ?>">
                                    <div class="card card-body card-rounded">
                                      <div class="row g-3">
                                        <div class="col-sm-10">
                                          <label for="wisata" class="form-label">Obyek Wisata</label>
                                          <select class="form-select" name="id-wisata" aria-label="Default select example" required>
                                            <option selected value="">Pilih Obyek Wisata</option>
                                            <?php foreach ($select_wisata as $row_sw) : ?>
                                              <option value="<?= $row_sw['id_wisata'] ?>"><?= $row_sw['judul'] ?></option>
                                            <?php endforeach; ?>
                                          </select>
                                        </div>
                                        <div class="col-sm-2">
                                          <input type="hidden" name="id-kunjungan" value="<?= $row['id_kunjungan'] ?>">
                                          <input type="hidden" name="id-wisataOld" value="<?= $row['id_wisata'] ?>">
                                          <input type="hidden" name="namaOld" value="<?= $row['judul'] ?>">
                                          <button type="submit" name="ubah-kunjungan" class="btn btn-warning">Ubah</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              </td>
                            </tr>
                        <?php $no++;
                          }
                        } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php require_once("../resources/dash-footer.php") ?>
</body>

</html>