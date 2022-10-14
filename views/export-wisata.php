<?php require_once("../controller/script.php");
require_once("redirect.php");
$_SESSION['page-name'] = "Export Wisata";
$_SESSION['page-url'] = "export-wisata";

$id_kategori = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $_POST['id-kategori']))));
$wisata_cetak = mysqli_query($conn, "SELECT * FROM tbl_wisata 
  JOIN tbl_kategori ON tbl_wisata.id_kategori=tbl_kategori.id_kategori 
  JOIN tbl_lokasi ON tbl_wisata.id_lokasi=tbl_lokasi.id_lokasi 
  WHERE tbl_wisata.id_kategori=$id_kategori 
  ORDER BY tbl_wisata.id_wisata DESC
");
$name_kategori = mysqli_query($conn, "SELECT * FROM tbl_kategori WHERE id_kategori='$id_kategori'");
$row = mysqli_fetch_assoc($name_kategori);
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=" . $row['nama_kategori'] . ".xls");
?>

<center>
  <h3>Data <?= $row['nama_kategori'] ?> Kabupaten Ngada</h3>
</center>
<table border="1">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th>Judul</th>
      <th>Deskripsi</th>
      <th>Lokasi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (mysqli_num_rows($wisata_cetak) == 0) { ?>
      <tr>
        <th colspan="4">Belum ada data.</th>
      </tr>
      <?php }
    $no = 1;
    if (mysqli_num_rows($wisata_cetak) > 0) {
      while ($row = mysqli_fetch_assoc($wisata_cetak)) { ?>
        <tr>
          <th scope="row"><?= $no; ?></th>
          <td><?= $row['judul'] ?></td>
          <td><?= $row['deskripsi'] ?></td>
          <td><?= $row['nama_lokasi'] ?></td>
      <?php $no++;
      }
    } ?>
  </tbody>
</table>