<?php

function masuk($data)
{
  global $conn;
  $username = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['username']))));
  $password = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['password']))));

  // check account
  $checkAccount = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username='$username'");
  if (mysqli_num_rows($checkAccount) == 0) {
    $_SESSION['message-danger'] = "Maaf, akun yang anda masukan belum terdaftar.";
    $_SESSION['time-message'] = time();
    return false;
  } else if (mysqli_num_rows($checkAccount) > 0) {
    $row = mysqli_fetch_assoc($checkAccount);
    if (password_verify($password, $row['password'])) {
      $_SESSION['data-user'] = [
        'id' => $row['id_admin'],
        'username' => $row['username'],
      ];
    } else {
      $_SESSION['message-danger'] = "Maaf, kata sandi yang anda masukan salah.";
      $_SESSION['time-message'] = time();
      return false;
    }
  }
}

if (isset($_SESSION['data-user'])) {
  function imageTour()
  {
    $namaFile = $_FILES["image"]["name"];
    $ukuranFile = $_FILES["image"]["size"];
    $error = $_FILES["image"]["error"];
    $tmpName = $_FILES["image"]["tmp_name"];
    if ($error === 4) {
      $_SESSION['message-danger'] = "Pilih gambar terlebih dahulu!";
      $_SESSION['time-message'] = time();
      return false;
    }
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg', 'heic'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      $_SESSION['message-danger'] = "Maaf, file kamu bukan gambar!";
      $_SESSION['time-message'] = time();
      return false;
    }
    if ($ukuranFile > 2000000) {
      $_SESSION['message-danger'] = "Maaf, ukuran gambar terlalu besar! (2 MB)";
      $_SESSION['time-message'] = time();
      return false;
    }
    $namaFile_encrypt = crc32($namaFile);
    $encrypt = $namaFile_encrypt . "." . $ekstensiGambar;
    move_uploaded_file($tmpName, '../assets/images/wisata/' . $encrypt);
    return $encrypt;
  }
  function imageGalery()
  {
    $namaFile = $_FILES["image-galeri"]["name"];
    $ukuranFile = $_FILES["image-galeri"]["size"];
    $error = $_FILES["image-galeri"]["error"];
    $tmpName = $_FILES["image-galeri"]["tmp_name"];
    if ($error === 4) {
      $_SESSION['message-danger'] = "Pilih gambar terlebih dahulu!";
      $_SESSION['time-message'] = time();
      return false;
    }
    $ekstensiGambarValid = ['jpg', 'png', 'jpeg', 'heic'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      $_SESSION['message-danger'] = "Maaf, file kamu bukan gambar!";
      $_SESSION['time-message'] = time();
      return false;
    }
    if ($ukuranFile > 2000000) {
      $_SESSION['message-danger'] = "Maaf, ukuran gambar terlalu besar! (2 MB)";
      $_SESSION['time-message'] = time();
      return false;
    }
    $namaFile_encrypt = crc32($namaFile);
    $encrypt = $namaFile_encrypt . "." . $ekstensiGambar;
    move_uploaded_file($tmpName, '../assets/images/galeri/' . $encrypt);
    return $encrypt;
  }
  function addLocation($data)
  {
    global $conn;
    $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['nama']))));
    $deskripsi = $data['deskripsi'];
    $latitude = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['latitude']))));
    $longitude = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['longitude']))));
    mysqli_query($conn, "INSERT INTO tbl_lokasi(nama_lokasi,deskripsi_lokasi,latitude,longitude) VALUES('$nama','$deskripsi','$latitude','$longitude')");
    return mysqli_affected_rows($conn);
  }
  function editLocation($data)
  {
    global $conn, $time;
    $id_lokasi = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-lokasi']))));
    $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['nama']))));
    $deskripsi = $data['deskripsi'];
    $latitude = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['latitude']))));
    $longitude = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['longitude']))));
    $updated_at = date("Y-m-d " . $time);
    mysqli_query($conn, "UPDATE tbl_lokasi SET nama_lokasi='$nama', deskripsi_lokasi='$deskripsi', latitude='$latitude', longitude='$longitude', updated_at='$updated_at' WHERE id_lokasi='$id_lokasi'");
    return mysqli_affected_rows($conn);
  }
  function deleteLocation($data)
  {
    global $conn;
    $id_lokasi = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-lokasi']))));
    mysqli_query($conn, "DELETE FROM tbl_lokasi WHERE id_lokasi='$id_lokasi'");
    return mysqli_affected_rows($conn);
  }
  function addCategory($data)
  {
    global $conn;
    $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['nama']))));
    $deskripsi = $data['deskripsi'];
    mysqli_query($conn, "INSERT INTO tbl_kategori(nama_kategori,deskripsi_kategori) VALUES('$nama','$deskripsi')");
    return mysqli_affected_rows($conn);
  }
  function editCategory($data)
  {
    global $conn, $time;
    $id_kategori = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-kategori']))));
    $nama = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['nama']))));
    $deskripsi = $data['deskripsi'];
    $updated_at = date("Y-m-d " . $time);
    mysqli_query($conn, "UPDATE tbl_kategori SET nama_kategori='$nama', deskripsi_kategori='$deskripsi', updated_at='$updated_at' WHERE id_kategori='$id_kategori'");
    return mysqli_affected_rows($conn);
  }
  function deleteCategory($data)
  {
    global $conn;
    $id_kategori = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-kategori']))));
    mysqli_query($conn, "DELETE FROM tbl_kategori WHERE id_kategori='$id_kategori'");
    return mysqli_affected_rows($conn);
  }
  function addTour($data)
  {
    global $conn;
    $judul = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['judul']))));
    $deskripsi = $data['deskripsi'];
    $kategori = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['kategori']))));
    $lokasi = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['lokasi']))));
    $image = imageTour();
    if (!$image) {
      return false;
    }
    mysqli_query($conn, "INSERT INTO tbl_wisata(id_kategori,id_lokasi,judul,deskripsi,foto_wisata) VALUES('$kategori','$lokasi','$judul','$deskripsi','$image')");
    return mysqli_affected_rows($conn);
  }
  function editTour($data)
  {
    global $conn, $time;
    $id_wisata = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-wisata']))));
    $judul = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['judul']))));
    $deskripsi = $data['deskripsi'];
    $kategori = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['kategori']))));
    $lokasi = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['lokasi']))));
    $imageOld = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['imageOld']))));
    if (!empty($_FILES['image'])) {
      $image = imageTour();
      if (!$image) {
        return false;
      } else {
        unlink('../assets/images/wisata/' . $imageOld);
      }
    } else {
      $image = $imageOld;
    }
    $updated_at = date("Y-m-d " . $time);
    mysqli_query($conn, "UPDATE tbl_wisata SET id_kategori='$kategori', id_lokasi='$lokasi', judul='$judul', deskripsi='$deskripsi', foto_wisata='$image', updated_at='$updated_at' WHERE id_wisata='$id_wisata'");
    return mysqli_affected_rows($conn);
  }
  function deleteTour($data)
  {
    global $conn;
    $id_wisata = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-wisata']))));
    $image = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['image']))));
    unlink('../assets/images/wisata/' . $image);
    mysqli_query($conn, "DELETE FROM tbl_wisata WHERE id_wisata='$id_wisata'");
    return mysqli_affected_rows($conn);
  }
  function addGalery($data)
  {
    global $conn;
    $wisata = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['wisata']))));
    $deskripsi = $data['deskripsi'];
    $image = imageGalery();
    if (!$image) {
      return false;
    }
    mysqli_query($conn, "INSERT INTO tbl_galeri(id_wisata,deskripsi_galeri,foto_galeri) VALUES('$wisata','$deskripsi','$image')");
    return mysqli_affected_rows($conn);
  }
  function editGalery($data)
  {
    global $conn, $time;
    $id_galeri = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-galeri']))));
    $wisata = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['wisata']))));
    $deskripsi = $data['deskripsi'];
    $imageOld = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['imageOld']))));
    if (!empty($_FILES['image-galeri'])) {
      $image = imageGalery();
      if (!$image) {
        return false;
      } else {
        unlink('../assets/images/galeri/' . $imageOld);
      }
    } else {
      $image = $imageOld;
    }
    $updated_at = date("Y-m-d " . $time);
    mysqli_query($conn, "UPDATE tbl_galeri SET id_wisata='$wisata', deskripsi_galeri='$deskripsi', foto_galeri='$image', updated_at='$updated_at' WHERE id_galeri='$id_galeri'");
    return mysqli_affected_rows($conn);
  }
  function deleteGalery($data)
  {
    global $conn;
    $id_galeri = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-galeri']))));
    $image = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['image']))));
    unlink('../assets/images/galeri/' . $image);
    mysqli_query($conn, "DELETE FROM tbl_galeri WHERE id_galeri='$id_galeri'");
    return mysqli_affected_rows($conn);
  }
  function addUsers($data)
  {
    global $conn;
    $username = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['username']))));
    $checkAdmin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username='$username'");
    if (mysqli_num_rows($checkAdmin) > 0) {
      $_SESSION['message-danger'] = "Maaf, akun ini sudah didaftarkan!";
      $_SESSION['time-message'] = time();
      return false;
    }
    $password = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['password']))));
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO tbl_admin(username,password) VALUES('$username','$password')");
    return mysqli_affected_rows($conn);
  }
  function editUsers($data)
  {
    global $conn, $time;
    $id_admin = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-admin']))));
    $username = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['username']))));
    $usernameOld = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['usernameOld']))));
    if ($username != $usernameOld) {
      $checkAdmin = mysqli_query($conn, "SELECT * FROM tbl_admin WHERE username='$username'");
      if (mysqli_num_rows($checkAdmin) > 0) {
        $_SESSION['message-danger'] = "Maaf, akun ini sudah didaftarkan!";
        $_SESSION['time-message'] = time();
        return false;
      }
    }
    $password = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['password']))));
    $password = password_hash($password, PASSWORD_DEFAULT);
    $updated_at = date("Y-m-d " . $time);
    mysqli_query($conn, "UPDATE tbl_admin SET username='$username', password='$password', updated_at='$updated_at' WHERE id_admin='$id_admin'");
    return mysqli_affected_rows($conn);
  }
  function deleteUsers($data)
  {
    global $conn;
    $id_admin = htmlspecialchars(addslashes(trim(mysqli_real_escape_string($conn, $data['id-admin']))));
    mysqli_query($conn, "DELETE FROM tbl_admin WHERE id_admin='$id_admin'");
    return mysqli_affected_rows($conn);
  }
}
