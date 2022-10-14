-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Okt 2022 pada 09.27
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_gis_evi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$10$//KMATh3ibPoI3nHFp7x/u7vnAbo2WyUgmI4x0CVVrH8ajFhMvbjG', '2022-09-09 18:25:05', '2022-09-09 18:25:05'),
(4, 'dinaspariwisata', '$2y$10$n9xV/ZpA6agMXd9MMqXhJe/NuDYkDN2SGbscYcTr1Cko3nB4wHASW', '2022-10-09 18:34:19', '2022-10-09 18:34:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `deskripsi_galeri` text NOT NULL,
  `foto_galeri` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `id_wisata`, `deskripsi_galeri`, `foto_galeri`, `created_at`, `updated_at`) VALUES
(12, 12, 'Taman Wisata Alam Laut 17 Pulau', '-721730526.jpg', '2022-10-06 19:06:26', '2022-10-06 19:06:26'),
(13, 13, 'Watu Nariwowo', '978094392.jpg', '2022-10-06 19:15:10', '2022-10-06 19:15:10'),
(15, 15, 'Villa Manulalu', '277762736.jpg', '2022-10-06 19:27:30', '2022-10-08 02:03:11'),
(21, 21, 'Kampung Adat Bena', '-1260221785.jpg', '2022-10-06 20:00:07', '2022-10-06 20:00:07'),
(22, 22, 'Pantai Watulajar', '-1122015186.jpg', '2022-10-06 20:45:10', '2022-10-06 20:45:10'),
(23, 25, 'Hutan Alam Wolobobo', '331867539.jpg', '2022-10-06 20:46:21', '2022-10-06 20:46:21'),
(24, 24, 'Air Panas Mengeruda', '1559737300.jpg', '2022-10-06 20:47:39', '2022-10-06 20:47:39'),
(25, 26, 'Taman Doa Patung Bunda Maria Ratu Semesta Alam', '1786278637.jpg', '2022-10-06 20:53:20', '2022-10-06 20:53:20'),
(26, 27, 'Kampung Adat Gurusina', '228453513.jpg', '2022-10-06 20:57:59', '2022-10-06 20:57:59'),
(27, 28, 'Air Terjun Ogi', '315004967.jpg', '2022-10-06 21:06:36', '2022-10-06 21:06:36'),
(28, 29, 'Kemah Tabor Mataloko', '-1586352898.jpg', '2022-10-06 22:11:37', '2022-10-08 01:55:44'),
(29, 30, 'Sauna Alam Bhetopadhi', '-503100550.jpg', '2022-10-06 23:07:15', '2022-10-06 23:07:15'),
(30, 32, 'Kampung Adat Belaraghi', '-747233567.jpg', '2022-10-07 00:10:20', '2022-10-07 13:45:36'),
(31, 31, 'Kampung Adat Tololela', '-1284557835.jpg', '2022-10-07 00:11:51', '2022-10-07 00:11:51'),
(32, 33, 'Air Terjun Bheto Padhi', '619886097.jpg', '2022-10-07 11:11:11', '2022-10-07 11:11:11'),
(33, 34, 'Air Panas Boba', '986907289.jpg', '2022-10-07 11:51:50', '2022-10-07 11:51:50'),
(34, 35, 'Kampung Adat Nage', '-913074994.jpg', '2022-10-07 12:21:44', '2022-10-07 12:21:44'),
(35, 36, 'Kampung Adat Wogo', '-300533935.jpg', '2022-10-07 12:43:18', '2022-10-07 12:43:18'),
(36, 37, 'Stadion Lebijaga', '-1691258553.jpg', '2022-10-07 13:12:52', '2022-10-07 13:12:52'),
(37, 38, 'Kawah Gunung dan Danau Vulkanik Wawomudha', '614907143.jpg', '2022-10-07 15:40:13', '2022-10-07 15:40:13'),
(38, 39, 'Air Panas Nage', '1342165282.jpg', '2022-10-07 16:13:53', '2022-10-07 17:18:25'),
(39, 40, 'Air Terjun Waeroa', '-78646231.jpg', '2022-10-07 17:19:34', '2022-10-07 17:19:34'),
(40, 41, 'Sambinasi Torong Padang', '-33077916.jpg', '2022-10-07 17:49:16', '2022-10-07 17:49:16'),
(41, 42, 'Pantai Pasir Putih', '336971772.jpg', '2022-10-08 00:51:21', '2022-10-08 00:51:21'),
(43, 43, 'Gua Maria Fatima', '-1044272132.jpg', '2022-10-09 18:44:34', '2022-10-09 18:44:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(11, 'Wisata Alam', '2022-10-06 19:03:33', '2022-10-06 20:17:40'),
(12, 'Wisata Budaya', '2022-10-06 19:13:19', '2022-10-06 19:13:19'),
(14, 'Wisata Buatan', '2022-10-06 19:26:03', '2022-10-06 19:26:03'),
(34, 'Wisata Minat Khusus', '2022-10-07 12:54:04', '2022-10-07 12:54:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lokasi`
--

CREATE TABLE `tbl_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(225) NOT NULL,
  `deskripsi_lokasi` text NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lokasi`
--

INSERT INTO `tbl_lokasi` (`id_lokasi`, `nama_lokasi`, `deskripsi_lokasi`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(12, 'Taman Wisata Alam Laut 17 Pulau', 'Taman Wisata Alam Laut 17 Pulau terletak di Kecamatan Riung, Kabupaten Ngada, Nusa Tenggara Timur', '-8.380463566844078', '121.0023880004883', '2022-10-06 19:00:38', '2022-10-06 20:02:34'),
(13, 'Megalit Watu Nariwowo', 'Watu Nariwowwo terletak di Desa Beja, Kecamatan Bajawa, Kabupaten Ngada, Nusa Tenggara Timur', '-8.843686573291679', '120.95191955566408', '2022-10-06 19:08:27', '2022-10-06 20:09:35'),
(14, 'Air Terjun Ogi', 'Air Terjun Ogi terletak di Desa Pape, Kecamatan Bajawa, Kabupaten Ngada, Nusa Tenggara Timur', '-8.774135588896648', '121.00981235504152', '2022-10-06 19:19:17', '2022-10-06 19:19:17'),
(15, 'Villa Manulalu', 'Villa Manulalu terletak di Desa Tiwuriwu, Kecamatan Jerebuu, Kabupaten Ngada, Nusa Tenggara Timur.', '-8.8551357838035', '120.9877109527588', '2022-10-06 19:25:08', '2022-10-06 19:25:08'),
(16, 'Kampung Adat Gurusina', 'Kampung Adat Gurusina terletak di Desa Watumanu, Kecamatan Jerebuu, Kabupaten Ngada, Nusa Tenggara Timur', '-8.895639802315378', '120.99068820476533', '2022-10-06 19:30:21', '2022-10-06 19:30:21'),
(17, 'Taman Doa Patung Bunda Maria Ratu Semesta Alam', 'Taman Doa Patung Bunda Maria Ratu Semesta Alam terletak di Desa Beiwali, Kecamatan Bajawa, Kabupaten Ngada, Nusa Tenggara Timur', '-8.796698682746122', '120.93955993652345', '2022-10-06 19:35:48', '2022-10-06 19:35:48'),
(18, 'Hutan Alam Wolobobo', 'Hutan Alam Wolobobo terletak di Desa Turekisa, Kecamatan Golewa Barat, Kabupaten Ngada, Nusa Tenggara Timur', '-8.83545988371323', '120.98161697387697', '2022-10-06 19:42:10', '2022-10-06 19:42:10'),
(19, 'Air Panas Mengeruda', 'Air Panas Mengeruda terletak di Desa Mengeruda, Kecamatan Soa, Kabupaten Ngada, Nusa Tenggara Timur', '-8.709110594481404', '121.08796119689943', '2022-10-06 19:46:50', '2022-10-06 19:46:50'),
(20, 'Pantai Watulajar', 'Pantai Watulajar terletak di Desa Lengkosambi Barat, Kecamatan Riung, Kabupaten Ngada, Nusa Tenggara Timur', '-8.426696593251204', '121.12898826599123', '2022-10-06 19:52:15', '2022-10-06 19:52:15'),
(21, 'Kampung Adat Bena', 'Kampung Adat Bena terletak di Desa Tiwuriwu, Kecamatan Jerebuu, Kabupaten Ngada, Nusa Tenggara Timur', '-8.877174510211647', '120.98609089851381', '2022-10-06 19:57:29', '2022-10-06 19:57:29'),
(22, 'Kemah Tabor Mataloko', 'Kemah Tabor Mataloko terletak di  Desa Mataloko, Kecamatan Golewa, Kabupaten Ngada, Nusa Tenggara Timur', '-8.82576996488533', '121.05442285537721', '2022-10-06 21:40:56', '2022-10-06 21:40:56'),
(23, 'Sauna Alam Bhetopadhi', 'Sauna Alam Bhetopadhi terletak di Desa Bea Pawe, Kecamatan Golewa, Kabupaten Ngada, Nusa Tenggara Timur', '-8.875573858422698', '121.06890678405763', '2022-10-06 22:40:56', '2022-10-06 22:40:56'),
(24, 'Kampung Adat Belaraghi', 'Kampung Adat Belaraghi terletak di Desa Kaligejo, Kecamatan Aimere, Kabupaten Ngada, Nusa Tenggara Timur', '-8.770912177736285', '120.87020874023439', '2022-10-06 23:25:29', '2022-10-06 23:25:29'),
(25, 'Kampung Adat Tololela', 'Kampung Adat Tololela terletak di Desa Manubhara, Kecamatan Inerie, Kabupaten Ngada', '-8.89403923117308', '120.98275423049928', '2022-10-06 23:58:40', '2022-10-06 23:58:40'),
(27, 'Air Terjun Bheto Padhi', 'Air Terjun Bheto Padhi terletak di Desa Were I Kecamatan Golewa Barat, Nusa Tenggara Timur', '-8.878859957195322', '121.066632270813', '2022-10-07 11:01:27', '2022-10-07 11:01:27'),
(28, 'Air Panas Boba', 'Air Panas Boba terletak di Desa Boba, Kecamatan Golewa Selatan, Kabupaten Ngada, Nusa Tenggara', '-8.921110200415152', '121.07856273651124', '2022-10-07 11:21:49', '2022-10-07 11:21:49'),
(29, 'Kampung Adat Nage', 'Kampung Adat Nage terletak di Desa Dhariwali, Kecamatan Jerebuu, Kabupaten Ngada, Nusa Tenggara Timur', '-8.886131671090881', '121.00783824920656', '2022-10-07 12:06:09', '2022-10-07 12:06:09'),
(30, 'Kampung Adat Wogo', ' Kampung Adat Wogo terletak di desa Ratogesa, Kecamatan Golewa, Kabupaten Ngada, Nusa Tenggara Timur.', '-8.834526948557974', '121.05265259742738', '2022-10-07 12:31:35', '2022-10-07 12:31:35'),
(31, 'Stadion Lebijaga', 'Stadion Lebijaga terletak di Kelurahan Trikora, Kecamatan Bajawa, Kabupaten Ngda, Nusa Tenggara Timur', '-8.784441834080635', '120.9725832939148', '2022-10-07 12:52:27', '2022-10-07 12:52:27'),
(32, 'Kawah Gunung dan Danau Vulkanik Wawomudha', 'Kawah Gunung Wawomudha terletak di Kelurahan Susu, Kecamatan Bajawa, Kabupaten Ngada', '-8.740776172579766', '120.97668170928956', '2022-10-07 15:21:55', '2022-10-07 15:21:55'),
(33, 'Air Panas Nage', 'Air Panas Nage terletak di Desa Dariwali, Kecamatan Jerebuu, Kabupaten Ngada, Nusa Tenggara Timur', '-8.885495666885658', '121.00286006927492', '2022-10-07 16:07:26', '2022-10-07 16:07:26'),
(34, 'Air Terjun Waeroa', 'Air Terjun Waeroa terletak di Desa   Tiworiwu, Kecamatan Jerebuu, Kabupaten Ngada, Nusa Tenggara Timur', '-8.866966260219163', '120.99758148193361', '2022-10-07 16:43:38', '2022-10-07 16:43:38'),
(35, 'Sambinasi Torong Padang', 'Sambinasi Torong Padang terletak di Kecamatan Riung, Kabupaten Ngada, Nusa Tenggara Timur', '-8.373224564304737', '120.96565246582033', '2022-10-07 17:34:56', '2022-10-07 17:34:56'),
(36, 'Kawah Gunung Inerie', 'Kawah Gunung Inerie meliputi Kecamatan Bajawa, Kecamatan Jerebuu, Kecamatan Aimere dan Kecamatan Inerie', '-8.878414745537215', '120.95578193664552', '2022-10-07 18:15:50', '2022-10-07 18:15:50'),
(37, 'Pantai Pasir Putih (Enabhara)', 'Pantai Pasir Putih terletak di Desa Waebela, Kecamatan Inerie', '-8.936393706237947', '120.94058990478517', '2022-10-08 00:27:30', '2022-10-08 00:27:30'),
(39, 'Gua Maria Fatima', 'Gua Maria Fatima terletak di Desa Mengeruda, Kecamatan Soa, Kabupaten Ngada, Nusa Tenggara Timur', '-8.712101229373937', '121.08828306198122', '2022-10-09 11:36:44', '2022-10-09 11:36:44'),
(40, 'Taman Kerahiman', 'Taman Kerahiman terletak di Lengkosambi, Kecamatan Riung Kabupaten Ngada, Nusa Tenggara Timur', '-8.45462902378516', '121.14383697509767', '2022-10-09 13:37:14', '2022-10-09 13:37:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `pengunjung` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `pengunjung`, `updated_at`) VALUES
(1, 74, '2022-10-14 10:17:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_wisata`
--

CREATE TABLE `tbl_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_wisata` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_wisata`
--

INSERT INTO `tbl_wisata` (`id_wisata`, `id_kategori`, `id_lokasi`, `judul`, `deskripsi`, `foto_wisata`, `created_at`, `updated_at`) VALUES
(12, 11, 12, 'Taman Wisata Alam  Laut 17 Pulau', 'Taman Laut 17 Pulau Riung memiliki kekayaan fauna dan flora yang sangat beragam. Taman Laut 17 Pulau Riung memiliki alam yang sangat indah, birunya laut ditambah dengan heningnya suasana membuat tempat ini cocok untuk menjauhkan diri dari segala rutinitas yang ada. Hamparan pasir putih yang bersih menambah eksotiknya Taman Laut 17 Pulau Riung, selain itu bisa menyewa kapal untuk mengunjungi pulau-pulau yang ada.Disini kita juga dapat melihat kekayaan alam yang tersimpan dibawah laut, kegiatan snorkeling ataupun diving tak boleh dilewatkan. Taman Laut 17 Pulau Riung ini merupakan gugusan-gugusan dari beberapa pulau kecil dan besar yang membentang dari Toro Padang di sebelah barat hingga ke Pulau Pangsar di sebelah timur.Karena itu Taman Laut 17 Riung berada di antara 5 Desa, yakni Desa Sambinasi, Desa Namangase, Desa Benteng Tengah, Desa Tadho, serta Desa Lengkosambi. Fasilitas yang ada di Taman Laut 17 Pulau Riung sudah lengkap, yakni: â€¢	Penginapan atau homestay â€¢	Area parkir â€¢	Rumah makan â€¢	Tempat penyewaan perahu dan alat untuk snorkeling  Tiket masuk Taman Laut 17 Pulau Riung murah sekali, kamu hanya perlu mengeluarkan uang sebesar Rp. 5.000,- per orangnya untuk wisatawan domestik. Sedangkan untuk wisatawan mancanegara harus merogoh lebih dalam lagi yakni sebesar Rp. 100.000,- per orangnya. Jam buka Taman Laut 17 Pulau dibuka selama 7 hari seminggu dan 24 jam sehari, jadi kamu dapat mengunjunginya kapanpun kamu mau.', '-375689838.jpg', '2022-10-06 19:05:13', '2022-10-06 19:05:13'),
(13, 12, 13, 'Wisata Megalit Watu Nariwowo', 'Watu Nari Wowo dalam bahasa setempat artinya Batu yang Menari. Dari Kota Bajawa, bukit ini dapat diakses melalui Desa Langa yang berjarak 7 km ke arah selatan dengan jalan beraspal dan bisa dilalui oleh kendaraan roda empat. Waktu terbaik menikmati Gunung Ine Rie dari Watu Nari Wowo adalah ketika matahari terbit atau menjelang matahari terbenam. Wisata alam Watu Nariwowo ini terkenal akan panorama keindahannya hingga memikat banyak wisatawan untuk berkunjung ke tempat ini. Sebelum tiba di puncak bukit, pengunjung juga bisa melihat 3 buah kayu salib. Di belakangnya terdapat 2 tenda kecil bagi pengunjung yang ingin beristirahat.Jarak dari kota Bajawa ke tempat ini kurang lebih 12 kilometer dengan waktu tempuh sekitar 25 menit.Terdapat loket masuk yang dikelola oleh warga setempat termasuk parkir kendaraan yang cukup luas.', '2112680936.jpg', '2022-10-06 19:14:24', '2022-10-06 19:14:24'),
(15, 14, 15, 'Wisata Villa Manulalu', 'Lokasi Panorama Manulalu berada di Desa Tiworiwu, Manulalu, Bajawa. Jika pengunjung memulai perjalanan dari Kota Bajawa, pengunjung dapat mengambil arah ke Kampung Adat Bena, karena letak Panorama Manulalu searah dengan Bena. Dari Bena, arahkan saja kendaraan menanjak menuju ke arah atas punggungan bukit. Jika dari arah Bena maka lokasi panorama ini berada di sisi kanan jalan Di sekitar Panorama Manulalu juga tersedia beberapa fasilitas seperti kedai untuk menikmati hidangan minuman dan makanan dengan menu yang bervariatif. Bagi yang ingin bermalam juga tersedia penginapan bernama Manulalu Bed and Breakfast, berjenis vila dengan harga relatif terjangkau per malamnya. Lengkap dengan suasana khas pegunungan yang tentunya akan membuat pengunjungya betah berlama-lama menghabiskan waktunya di sana.  Untuk masuk ke dalam lokasi Panorama Manulalu ini setiap pengunjungnya akan dipungut tiket masuk seharga 2.000 rupiah', '-580183208.jpg', '2022-10-06 19:27:00', '2022-10-06 19:27:00'),
(21, 12, 21, 'Wisata Kampung Adat Bena', 'Menurut catatan sejarah Kampung  Bena sudah ada sejak 1200 tahun lalu. Kampung Bena memiliki 45 rumah adat dengan arsitektur yang unik dan indah. Di tengah perkampungan, batu megalitikum masih kokoh, bahkan diseluruh lokasi perkampungan ada batu dari masa megalitikum. Kampung ini berada di bawah kaki gunung Inerie, sisi selatan Kabupaten Ngada. Pintu masuknya berada di sisi utara. Sementara di sisi belakang (selatan) yang merupakan bagian tertinggi terdapat gazebo di tepi tebing untuk menikmati pemandangan ke arah perbukitan dan Laut Sawu di kejauhan.Akses menuju Kampung Bena dapat ditempuh dengan naik kendaraan sewa dari Bajawa dengan jarak tempuh sekitar 19 kilo meter ke arah selatan Bajawa Kampung Adat Gurusina adalah satu desa atau kampung adat tertua yang ada di Kecamatan Jerebuu, Kabupaten Ngada', '-1037717877.jpg', '2022-10-06 19:59:02', '2022-10-06 19:59:02'),
(22, 11, 20, 'Wisata Pantai Watulajar', 'Pantai watulajar memang belum di kenal oleh banyak orang tapi banyak wiasatawan yang berkunjung ke pantai ini termasuk para wiasatawan asing. Pantai ini terbentang oleh hamparan pasir yang bersih cocok dijadikan tempat untuk berjemur atau santai. Pesona pantainya sangat indah dan bentangan pantainya  sangat  luas dengan pesona pasir putih  yang sangat menawan. Ombak lautnya  tidak terlalu deras sangat direkomendasikan untuk  bermain  air laut atau sekedar untuk mandi.Jaraknya kurang lebih 15 km dari ibukota kecamatan Riung dengan waktu tempuh kurang lebih satu jam dengan menggunakan roda 2 atau roda 4 . Pantai ini sangat indah ,dari pantai ini kita dapat melihat sunset yang begitu indah dengan jelas . Pantai watulajar memang belum di kenal oleh banyak orang tapi banyak wiasatawan yang berkunjung ke pantai ini termasuk para wiasatawan asing. Pantai ini terbentang oleh hamparan pasir yang bersih cocok dijadikan tempat untuk berjemur atau santai . Di pinggir pantai watulajar juga tersdia  tempat penginapan bagi para wisatawan yang ingin mnginap. Sejauh ini pantai watulajar belum memiliki karcis masuk. Di dekat pantai watulajar terdapat juga sebuah pantai yang tidak kalah indanya dengan pantai watulajar yaitu pantai watusongkok ,pantai ini terletak sebelah Timur dari pantai watulajar.', '-1390153406.jpg', '2022-10-06 20:19:01', '2022-10-06 20:19:01'),
(24, 11, 19, 'Wisata Air Panas Mengeruda', 'Selain memiliki sumber air panas alami yang banyak diincar orang, tempat wisata NTT yang satu ini juga menarik minat wisatawan karena keindahan alam yang disuguhkan. Di tempat ini nampak pemandangan yang hijau dan rimbun. Hijaunya kawasan pemandian ini membuat pemandian Air Panas Mengeruda dikategorikan sebagai salah satu objek eko-wisata. Tempat wisata ini juga dilengkapi dengan berbagai fasilitas untuk mendukung kenyamanan pengunjung. Diantaranya yakni rumah makan, toilet, kawasan perkemahan serta hutan indah dengan jalan setapak yang bisa dimanfaatkan untuk berbagai ajang tracking maupun berkemah.Selain itu, wisata pemandian Air Panas Mengeruda ini terletak di lokasi yang strategis yakni di jalur perjalanan wisata. Banyak travel agent yang juga merekomendasikan tempat wisata ini sebagai paket tour travel mereka hingga ke Kelimutu. Biasaya sebelum menuju ke wisata Kelimutu pengunjung akan diajak untuk singgah di tempat pemandian air panas ini.Fasilitas Air Panas Mengeruda : Area parkir Gazebo Toilet Mushola Warung makan Loket penjualan tiket Tempat ganti Arena perkemahan. Jam Buka dan Harga Tiket Masuk Air Panas Mengeruda : Kawasan wisata pemandian Air Panas Mengeruda ini buka setiap hari mulai pukul 08.00 dan tutup pada pukul 18.00. Bagi pengunjung yang ingin mengadakan moment perkemahan bisa berkoordinasi langsung dengan pengelola tempat wisata.  Adapun biaya tiket masuk wisata pemandian air panas ini adalah Rp 2000 untuk anak-anak dan Rp 4.000 untuk dewasa.', '1559737300.jpg', '2022-10-06 20:40:18', '2022-10-06 20:40:18'),
(25, 11, 18, 'Wisata Hutan Alam Wolobobo', 'Bukit Wolobobo merupakan sebuah bukit dengan panorama alam yang sangat indah, Gunung Inerie yang gagah serta keadaan alam yang masih dihiasi pepohonan yang sangat rindang.Tempat wisata Bukit Wolobobo mempunyai fasilitas yang cukup lumayan, antara lain adanya lahan parkir, tempat beristirahat, serta rumah adat Nusa Tenggara Timur, yaitu lopo. Lopo adalah rumah adat tradisional NTT yang bentuknya sangat unik dan khas.Untuk memasukinya, kita dikenakan tarif Rp 5.000 per orang .Rute menuju Bukit Wolobobo tidaklah membingungkan, kita bisa berangkat dari Kota Bajawa dengan waktu 15 menit.Jam operasional Bukit Wolobobo dibuka setiap hari selama 24 jam nonstop, sehingga kamu dapat mengunjunginya kapan saja kamu inginkan.', '1416077123.jpg', '2022-10-06 20:43:37', '2022-10-06 20:43:37'),
(26, 14, 17, 'Wisata Taman Doa Patung Bunda Maria  Ratu Semesta Alam', 'Patung Bunda Maria di Bajawa  berada di atas bukit Wolowio yakni kawasan perbukitan yang hijau dan indah yang memiliki ketinggian 1.400 Mdpl. Tinggi Patung Bunda Maria di puncak bukit Wolowio adalah sekitar 14 meter. Sementara tempat duduknya setinggi 3 meter. Jadi, keseluruhan tinggi Patung Bunda Maria di puncak Wolowio adalah 17 meter. Patung Bunda Maria ini terbuat dari beton berdiri setinggi sekitar 17 meter dan diletakan tepat di atas bukit Wolowio, puncak gunung Ata Gae.Kawasan wisata bukit wolowio ini merupakan kawasan wisata religi bagi umat narsani namun tempat ini juga terbuka untuk umum atau bisa dikunjungi oleh siapa saja.Untuk akses ke lokasi Patung Bunda Maria yang ada di bukit Wolowio ini sangat mudah sekali. Untuk sampai ke area parkiran, bisa di tempuh lagsung dengan ojek atau sewa mobil.', '355677925.jpg', '2022-10-06 20:52:24', '2022-10-06 20:52:24'),
(27, 12, 16, 'Wisata Kampung Adat Gurusina', 'Gurusina justru ditemukan oleh seorang misionaris Belanda pada 1934. Saat itu posisi desa masih berada di puncak Gunung Inerie, baru pada 1942 dipindahkan ke dataran yang lebih rendah. Jauh sebelum ditemukan oleh orang Belanda, Gurusina sudah berdiri kurang lebih 50 abad yang lalu. Bahkan Gurusina dianggap sebagai desa tertua di Flores. Gurusina dihuni oleh tiga suku besar, yakni Kabi, Agoazi, dan Agokae. Ketiga suku tersebut tinggal di 33 rumah adat yang terbuat dari bambu dan alang-alang. Keunikan Gurusina terletak pada sisi tradisional dengan sejarah era megalitikumnya, terutama yang paling ikonik karena batu megalitikumnya berdiri tegak di tengah kampung. Dalam penataan pemukiman, warga Gurusina membangun rumahnya berjajar berhadap-hadapan, sehingga terlihat unik', '228453513.jpg', '2022-10-06 20:57:21', '2022-10-06 20:57:21'),
(28, 11, 14, 'Wisata Air Terjun Ogi', 'Air Terjun Ogi adalah sebuah air terjun cantik dengan ketinggian sekitar 80 m. Pemandangan alam yang tersaji di sekitar area air terjun pun nampak hijau karena dihiasai dengan berbagai pepohonan rimbun serta persawahan warga. Hal ini menjadikan objek wisata ini sangat cocok dikunjungi untuk menyegarkan badan karena memiliki udara yang sejuk dan menyegarkan.Dengan hijaunya pemandangan yang tersaji membuat air terjun seperti tersembur keluar dari balik pepohonan hijau dan kemudian jatuh ke kolam. Kolamnya cukup luas dan bisa dijadikan sebagai tempat berenang bagi para pengunjung. Kemudian, tersedia pula gazebo sederhana bagi pengunjung untuk beristirahat sejenak atau bahkan menghabiskan makan siang bersama sambil menikmati bunyi gemericik air terjun.Gazebo tersebut terletak tidak jauh dari kolam air terjun. Pihak pengelola telah menyedikan sebanyak 4 buah pondok, 2 diantaranya memiliki atap, sedangkan yang lainnya hanya memiliki tempat duduk dan meja saja. Lokasi Air Terjun Ogi  terletak di Kelurahan Fobata, Kecamatan Bajawa, Kabupaten Ngada, Nusa Tenggara Timur. Jarak dari Kota Bajawa ke tempat wisata ini kurang lebih 8 kilometer, dengan waktu tempuh sekitar 20 menit. Rute menuju Air Terjun Ogi sangat mudah dilalui, disamping lokasinya yang tidak terlalu jauh dari pusat kota, akses jalannya pun sudah beraspal.Selama perjalanan pengunjung tidak akan menjumpai papan penunjuk arah menuju Air Terjun Ogi, lokasinya dekat dengan area pesawahan warga. Jalur menuju lokasi Air Terjun Ogi dapat dilalui oleh kendaraan roda dua maupun roda empat, Setelah memakirkan kendaraan, pengunjung harus berjalan sekitar 400 meter, jalannya pun sudah bagus sehingga mudah untuk dilalui dan tidak ada halangan yang berarti. Jam operasional Air Terjun Ogi dibuka setiap hari Senin hingga Minggu selama 24 jam nonstop. Dengan demikian pengunjung bisa leluasa mengatur waktunya sesuai dengan kesempatan yang dimiliki. Tiket Air Terjun Ogi dibedakan menjadi: â€¢	Pengunjung dewasa membayar Rp. 5.000 per orang â€¢	Untuk anak-anak sebesar Rp. 3.000 per orang â€¢	Sedangkan untuk wisatawan mancanegara harus membayar sebesar Rp. 20.000 per orang â€¢	Tiket parkir motor membayar Rp. 3.000 per unit â€¢	Parkir mobil sebesar Rp. 5.000 per unit Fasilitas umum yang ada di sekitar Air Terjun Ogi terdiri dari: â€¢	Area parkir yang dapat menampung mobil dan motor â€¢	Gazebo serta beberapa tempat duduk di sekitar air terjun â€¢	Warung sederhana ', '1745275719.jpg', '2022-10-06 21:06:02', '2022-10-06 21:06:02'),
(29, 14, 22, 'Wisata Kemah Tabor Mataloko', 'Kemah Tabor Mataloko didirikan pada tahun 1932 sebagai rumah tinggal para misionaris khususnya dari ordo Societas Verbi Divini (SVD), salah satu ordo Gereja Katolik di Roma sehingga terdapat patung pendiri ordo, Santo Arnoldus Jansen berdiri tegak di depan gedung ini. Rumah Retret Kemah Tabor ini pernah menjadi tempat sementara pendidikan calon iman sebelum dipindahkan ke Ledalero pada tahun 1937. Pada tahun 1943, Jepang menduduki Seminari Tinggi Ledalero. Karena semua pater dan profesor berkebangsaan Belanda diinternir, maka para frater mahasiswa filsafat dan teologi dipindahkan ke Mataloko.Setelah Indonesia merdeka tahun 1945, begitu situasi politik stabil, Seminari Tinggi yang beraktivitas di Mmataloko di kembalikan ke daerah Ledalero.Selain itu rumah ini dulunya di sebut Rumah Tinggi karena berkaitan dengan konstruksi dua lantai yang beda dengan rumah-rumah di sekitar yang masih satu lantai. Berdiri di lereng pegunungan dengan hawa sejuk membuat bangunan berlantai dua dan membentuk huruf U sering di penuhi kabut, sehingga suasananya seperti di Eropa. Keindahan Kemah Tabor dilengkapi dengan pohon cemara yang berjejer setinggi bangunan itu. Pohon cemara menjulang tinggi dengan dengan ditemani beberapa pohon berbentuk sislinder di sepanjang jalan depan gedung. Rumput Jepang di halaman berwarna hijau cerah dan bunga-bunga khas Eropa di tanam dengan rapi di sisi timur bangunan. Keindahan inilah yang layak menjadikan Kemah Tabor sebagai wisata Rohani terbesar di pulau Flores.', '-1777012136.jpg', '2022-10-06 22:10:56', '2022-10-08 01:56:24'),
(30, 14, 23, 'Wisata Sauna Alam Bhetopadhi', 'Sauna Alam Bhetopadhi memiliki ciri khas air terjun yang membuncah dari hutan bambu dan sejuknya air yang keluar diantara  celah rumpun bambu. Pemandian uap atau Bheto Padhi  Sauna, diibangun dengan rancangan mandi sauna, kemudian tahap pendinginan di air terjun yang ketinggiannya sekitar 20 meter. Untu tahap sauna , telah disiapkan lima unit bangunan dari batu , berbentuk bundar dan batu ini akan dipanaskan terlebih dahulu. Untuk melengkapi sauna, dirancang kain tradisional berlapis dua dengan kerangka terbuat dari bahan bambu. Fungsinya untuk meutupi pengunjung yang telah berada di dalam bangunan batu yang telah dipanaskan dan disirami air panas.', '-503100550.jpg', '2022-10-06 23:04:59', '2022-10-06 23:04:59'),
(31, 12, 25, 'Wisata Kampung Adat Tololela', 'Kampung adat Tololela berada di Desa Manubhara, Kecamatan Inerie, Kabupaten Ngada,  terletak pada dua lahan datar di perbukitan di bawah kaki gunung Inerie. Kampung Tololela ini berjarak sekitar satu jam dengan kendaraan bermotor dari kota Bajawa, melalui banyak hutan-hutan bambu dan kebun-kebun milik masyarakat setempat. Tidak seperti kampung Bena dan Gurusina yang cukup dekat dari jalan raya, Tololela agak terpencil dan jalannya menanjak selama 15 menit dengan kendaraan bermotor dari tepi jalan Gurusina. Selain itu, desa ini juga bisa dicapai dengan trekking melalui hutan dari Desa Bena selama satu jam. Pintu masuk Kampung Tololela yang berada di sudut desa hanya memiliki jalan masuk umum yang bisa dicapai dengan berjalan kaki selama satu jam dari kampung Bena atau jalan aspal yang sudah rusak dari arah kampung Gurusina. Untuk memenuhi kebutuhan akan ruang transisi, Tololela belum memiliki gapura bata nua yang resmi sebagai pintu masuk pengunjung.', '-627429638.jpg', '2022-10-07 00:08:17', '2022-10-07 00:08:17'),
(32, 12, 24, 'Wisata Kampung Adat Belaraghi', 'Kampung Adat Belaraghi terletak di lereng Bukit Belaraghi, dari sinilah kampun  ini memiliki nama itu. Awalnya kampung ini terletak di puncak Bukit Belaraghi, namun pada 1950-an kampung ini mengalami kebakaran hebat yang membuat kampung ini akhirnya dipindahkan ke lereng. Meskipun sudah direlokasi tetapi lokasi kampung lama masih kerap dikunjungi oleh wisatawan, atau sering disebut dengan Kampung Belaraghi Lama.Akses jalan ke desa ini juga terbilang cukup sulit, karena desa jalanan di desa ini masih berbatu, menanjak dan belum beraspal. Kesulitan medan membuat kendaraan roda empat tidak bisa melaluinya, sehingga turis harus berjalan kaki untuk mencapai desa ini. Akses jalan semakin sulit bila turis ingin mencapai Belaraghi Lama.Kompleks pemukiman warga Belarghi juga terbilang unik. Mereka membangun rumah dengan pola saling berhadapan dan berderet sejajar di kiri dan kanan jalan, membentang dari arah timur laut ke barat daya. Di tengah-tengah pemukiman merupakan ruang publik untuk melaksanakan kegiatan ada.', '-983828833.jpg', '2022-10-07 00:09:38', '2022-10-07 00:09:38'),
(33, 11, 27, 'Wisata Air Terjun Bheto Padhi', 'Air Terjun Bheto Padhi (Jembatan Batu) menjadi destinasi pariwisata baru dan menarik bagi siapa saja yang ingin mencari ketenangan batin dan keindahan alam. Dibaluti kabut tipis dan pemandang hijau pepohonan, pesona air terjun Bheto Padhi akan mengahapus rasa lelah pengunjung saat meyaksikan pesona surga kecil di lereng bukit yang memanjakan mata dan menawan hati. Selama perjalanan menuju air terjun, para pengunjung akan menuruni seribu anak tangga sembari menikmati dinding batu alami dan pepohonan hijau. Tak hanya itu para pengunjung juga akan menikmati ratusan sarang lebah madu yang bergantung di dinding batu.Air terjun Padha Watu sendiri menyajikan arsitektur menarik berupa tangga batu alami yang membingkai air terjun. Selain itu, tangganya tersusun dari bebatuan alami yang dibalut sedikit lumut hijau.   Bagi pengunjung yang menggunakan kendaraan baik roda dua maupun empat harus menitipkan kendaraan di pos penitipan dan melanjutkan perjalanan dengan berjalan kaki. Para pengunjung hanya merogoh karcis sebesar Rp. 5.000 untuk bisa menikmati keindahan surga kecil air terjun Bheto Padhi.. ', '619886097.jpg', '2022-10-07 11:10:32', '2022-10-07 11:10:32'),
(34, 11, 28, 'Wisata Air Panas Boba', 'Kawasan air panas Boba persis dekat dengan pesisir pantai selatan di Ngada. Di Air Panas Boba ini tersedia kolam alamiah dengan luas sekitar 20 meter per segi dengan kedalaman setengah meter. Permandian ini direkomendasikan untuk dikunjungi sore atau di pagi hari. Jika pada siang hari suhu airnya sangat panas. Usai menikmati air panas ini, pengunjung juga menikmati air dingin yang telah disediakan di kamar mandi.Untuk masuk di kenakan tarif 3.000 untuk anak-anak dan 5.000 untuk dewasa. Dan untuk mencapai kawasan ini sangatlah mudah, bisa dijangkau dengan menggunakan kendaraan bermotor dari Kota Bajawa sekitar satu hingga dua jam perjalanan.', '1332704052.jpg', '2022-10-07 11:51:15', '2022-10-07 12:55:03'),
(35, 12, 29, 'Wisata Kampung Adat Nage', 'Kampung Tradisional Nage ditetapkan sebagai situs benda cagar budaya dan kampung megalit pada tahun 1997 silam. Karena keunikan dan keaslian budaya yang terus dipelihara dan diwariskan secara turun temurun, sehingga kampung adat ini ditetapkan sebagai kampung megalit benda budaya. Keunikan-keunikan obyek wisata budaya Kampung Nage ini antara lain, Reba Nage (ritual adat syukuran hasil panen) dan ritual adat luka. Daerah Ngada memiliki kebiasaan syukuran hasil panen atau reba, tapi di Kampung Nage berbeda. Selain itu, ritus adat luka (ritus adat dan tarian serta nyanyian yang menceritakan kembali orang Ngada dari Cina Selatan).  Di kampung ini terdapat peninggalan sejarah baik dalam bentuk legenda yang tervisualisasikan dalam benda-benda alam (batu dan sebagainya) maupun benda-benda kepurbakalaan. Sebagian rumah di kampung ini sudah banyak berubah ke arah yang lebih modern seperti menggunakan atap seng namun tetap menjaga keaslian kekhasannya seperti konstruksi bangunan maupun ukiran-ukirannya. Jarak dari kota Bajawa Â± 21 km. Tidak tersedia penginapan di sekitar obyek wisata ini. Apabila anda ingin lebih lama menikmati suasana obyek wisata ini, anda dapat menginap di rumah-rumah tradisional milik penduduk. Tidak ada rumah makan atau restoran di sekitar obyek wisata ini sehingga anda disarankan membawa makanan sendiri. Tetapi tersedia makanan ringan dan makanan lokal yang dijual oleh penduduk setempat. Untuk menjangkau obyek wisata ini anda dapat menggunakan angkutan umum dengan rute Bajawa-Jerebuu namun jadwalnya tidak reguler sehingga anda mempunyai pilihan lain seperti menggunakan jasa travel atau ojek maupun kendaraan pribadi.', '-913074994.jpg', '2022-10-07 12:20:55', '2022-10-07 12:20:55'),
(36, 12, 30, 'Wisata Kampung Adat Wogo', 'Kampung Adat Wogo berada di lahan hamparan tanah dan lahan pertanian dan berbentuk segi empat memanjang dengan bangunannya berada di tengah-tengah, dan di sepanjang areal, menyebar dan tidak beraturan.Bangunan tersebut merupakan budaya megalit berupa hamparan bebatuan megalit yang masih tertata rapi. Hamparan batu ini merupakan kuburan nenek moyang. Selain itu, hamparan batu ini juga digunakan untuk upacara adat. Setiap bangunan memiliki artefak yang terdiri atas meja altar batu yang disebut Ture oleh masyarakat sekitar. Kemudian, terdapat serpihan-serpihan batu pada pinggir areal yang digunakan sebagai pembatas kampung. Untuk menjangkau objek wisata Wogo, pengunjung dapat menggunakan angkutan umum dengan rute Bajawa-Mataloko, menggunakan jasa travel atau jasa ojek.arak dari Kota Bajawa ke Desa Adat Wogo adalah sekitar 16 km dengan waktu tempuh kurang lebih 25 menit.', '107725517.jpg', '2022-10-07 12:42:26', '2022-10-07 12:42:26'),
(37, 34, 31, 'Wisata Stadion Lebijaga', 'Stadion Lebijaga berada di pusat kota Bajawa  sehingga pengunjung tidak kesulitan untuk mencari lokasi  wisata yang satu ini. Di tempat ini terdapat tempat spot untuk foto  dan tersedia lahan parkir yang luas. ', '-2016359164.jpg', '2022-10-07 13:12:18', '2022-10-07 14:16:50'),
(38, 11, 32, 'Wisata Kawah Gunung dan Danau Vulkanik Wawomudha', 'Kawah Wawomudha merupakan tempat wisata alam yang terbentuk sejak 11 tahun lalu akibat letusan gunung Wawomudha`yang meludeskan seluruh lereng serta perkebunan warga.Indah dan menakjubkan berada di Tempat Wisata Kawah Wawomudha ini. Letusan Gunung Wawomudha meninggalkan tiga kawah kecil yang istimewanya disetiap lubang kawah memiliki warna air yang berbeda-beda yang sepintas mirip dengan Kawah Danau Kelimutu. Sehingga banyak wisatawan yang datang ketempat ini sering menyebutnya dengan Danau Mini Kelimutu karena kemiripannya. Untuk menuju kawah ini, Anda tidak harus berlelah-lelah untuk mendaki dan menjelajahi hutan pegunungan sebab akses menuju Kawah Wawomudha terbilang cukup mudah. Dengan berkendara sepanjang 6 kilometer selama sekitar 15 menit Anda sudah dapat sampai ke tempat wisata ini dari pusat kota Bajawa.  Panorama indah selama perjalanan menuju kawah dengan pohon pinus dan cemara disepanjang jalan menjadi daya tarik lain bagi kawasan wisata Kawah Wawomudha ini. Bau belerang khas kawah tidak terasa menyengat hidung Anda karena telah dinetralisir oleh bau khas pohon pinus yang segar yang mendominasi udara sekitar kawah. Untuk menikmati pemandangan indah yang lebih sempurna di kawasan Kawah Wawomudha, Sebaiknya Anda tidak datang pada pagi hari saat musim hujan karena semua area wisata ini akan tertutup oleh kabut tebal, Jadi sebaiknya Anda datang pada saat musim kemarau tiba dimana cuaca pagi akan terlihat cerah sehingga pemandangan kawah akan terlihat sangat indah dan menakjubkan.', '978597046.jpg', '2022-10-07 15:39:11', '2022-10-07 17:14:22'),
(39, 11, 33, 'Wisata Air Panas Nage', 'Keberadaan air panas Nage memang masih kalah populer oleh objek wisata air panas Mengeruda. Namun jangan salah, selain lokasinya sangat alami, Nage juga memiliki keanehan yang sangat langka dimiliki daerah lain. Yaitu, airnya ada dua rasa, panas dan dingin. Hal itu terjadi karena ke sungai ini mengalir air panas dari gunung api dan di sisi lain mengalir pula air dingin dari sumber lain.Sebagaimana air panas dari gunung api, air di Sungai Nage juga mengandung sulfur. tak heran jika air Nage dipercaya memiliki banyak khasiat, di antaraya menyembuhkan pegal linu, penyakit kulit, rematik dan membuat badan lebih fit serta lebih segar. Lokasi Nage sekitar 30 kilometer dari Kota Bajawa, atau sekitar 2 km dari Kantor Kecamatan Jerebu. Kondisi jalannya sudah bagus. Bagi pengunjung yang membawa kendaraan sendiri, di sini sudah tersedia tempat parkir. ', '880699904.jpg', '2022-10-07 16:13:17', '2022-10-07 16:13:17'),
(40, 11, 34, 'Wisata Air Terjun Waeroa', 'Air terjun Waeroa memiliki suasan alam yang begitu kental dan air yang sangat dingin sekali.Pemandangan air terjun waeroa sangat asri dan alami .Umumnya, harga tiket untuk masuk tempat wisata berbeda antara hari libur, minggu atau hari biasa. Saat weekday, harga tiket masuk Air Terjun Waeroa adalah Rp15,000.00. Sementara saat weekend, harga tiket masuk Air Terjun Waeroa adalah Rp15,000.00', '-78646231.jpg', '2022-10-07 16:58:27', '2022-10-07 16:58:27'),
(41, 11, 35, 'Wisata Alam Sambinasi Torong Padang', 'Padang Sabana di Riung, Kabupaten Ngada ini, memiliki betangan alam yang indah, satwa liar dan legenda.Torong Padang yang luasnya sekitar 800 hektar dengan garis pantai 13, 53 Kilometer, memiliki vegetasi seperti hutan musim, sabana, hutan bakau, padang garam. Dalam bahasa setempat, Torong artinya tanjung. Torong Padang bisa diartikan tanjung berpadang sabana, karena sebagian besar kawasan ini terdiri dari hamparan sabana. Torong Padang  berada sekitar 39 Km ke arah barat Riung dan sekitar 28 Km masuk Buntal dan kondisi jalan yang masih belum beraspal ', '-1405354002.jpg', '2022-10-07 17:48:36', '2022-10-07 17:48:36'),
(42, 11, 37, 'Wisata Pantai Pasir Putih Enabhara', 'Pantai pasir putih yang landai dengan ombak yang tinggi menjadi daya tarik tersendiri. Fenomena alam berupa gelombang laut yang pecah di dinding-dinding karang menyebabkan semburan air laut pecah ke udara menyerupai bunga (water blow). Tidak jauh dari lokasi pantai pasir putih ini terdapat Gua penginggalan Jepang yang digunakan sebagai tempat persembunyian pada masa peperangan.Tidak ada penÂ­ginapan di sekitar obyek wisata. Jika anda menÂ­ginap, anda harus ke AimÂ­ere karÂ­ena jarak antÂ­ara WaeÂ­bela ke AimÂ­ere cukup dekat. PenÂ­ginapan AimÂ­ere, penÂ­ginapan Agogo, penÂ­ginapan Bata BaÂ­hari menÂ­jadi piÂ­liÂ­han anda dengan harga mulai dari Rp.75.000.Di sekitar Desa WaeÂ­bela tidak terseÂ­dia temÂ­pat makan seÂ­hingga anda disÂ­arankan memÂ­bawa makanan sendiri. ApÂ­abÂ­ila ingin memÂ­perÂ­oleh makanan, anda harus ke AimÂ­ere. Di sana terseÂ­dia temÂ­pat makan sepÂ­erti Rumah Makan Agogo, Rumah Makan SingÂ­galang, Bakso Solo dan Samudra.Ada dua jalur untuk menÂ­capai obyek wisata ini. Dapat ditemÂ­puh dengan rute BaÂ­jawa-JereÂ­buu-WaeÂ­bela maupun BaÂ­jawa-AimÂ­ere-WaeÂ­bela. Kedua rute ini dapat diÂ­capai dengan mengÂ­gunÂ­akan anÂ­gkutan umum, travel maupun ojek dan kendaraan pribadi. Untuk menuju Pantai EnÂ­abhara, anda harus berÂ­jalan kaki atau mengÂ­gunÂ­akan jasa perahu motor dengan jarak temÂ­puh Â±30 menit dari WaeÂ­bela .', '1855778664.jpg', '2022-10-08 00:50:41', '2022-10-08 00:50:41'),
(43, 14, 39, 'Wisata Gua Maria Fatima', 'Gua Maria Fatima merupakan salah satu tempat wisata rohani favorit di Kabupaten Ngada. Gua in terbuat dari batu alam lalu ditahtakan patung Bunda Maria dengan tinggi kira-kira satu meter. Wisata rohani satu ini terpancak megah diatas gugusan bukit. Para peziarah  akan menyusuri anak tangga sebelum tiba dipuncaknya. Rerindangan pohon beringin dan kolam yang dekat wisata Air Panas Mengeruda semakin menyejukan hati peziarah sembari menikmati kekhusyukan Maria Fatima. Fasilitas dan taman hias disekitar gua masih terawat dan terlihat asri, dan lampu-lampu hias sepanjang taman membuat peziarah merasa nyaman. Di depan Patung Bunda Maria, ada tempat untuk membakar lilin dan juga terdapat tempat parkir yang cukup luas bagi peziarah yang membawa kendaraan pribadi. ', '-1044272132.jpg', '2022-10-09 13:22:49', '2022-10-09 13:22:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `tbl_galeri_ibfk_1` (`id_wisata`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indeks untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `tbl_lokasi`
--
ALTER TABLE `tbl_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD CONSTRAINT `tbl_galeri_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tbl_wisata` (`id_wisata`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_wisata`
--
ALTER TABLE `tbl_wisata`
  ADD CONSTRAINT `tbl_wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_wisata_ibfk_2` FOREIGN KEY (`id_lokasi`) REFERENCES `tbl_lokasi` (`id_lokasi`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
