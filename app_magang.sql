-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2024 at 08:26 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_magang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int NOT NULL COMMENT 'ID unik,auto increment',
  `judul` varchar(225) NOT NULL COMMENT 'Judul berita',
  `konten` text NOT NULL COMMENT 'Isi lengkap berita',
  `gambar` varchar(225) DEFAULT NULL COMMENT 'Nama file gambar',
  `status` enum('draft','published') NOT NULL COMMENT 'Status berita',
  `tanggal` datetime DEFAULT NULL COMMENT 'Waktu berita dibuat'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int NOT NULL,
  `id_tipe` int NOT NULL,
  `nama_buku` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `diskon` decimal(10,0) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(50) NOT NULL,
  `harga` int NOT NULL,
  `denda` int NOT NULL,
  `pembatas` int NOT NULL,
  `sampul` int NOT NULL,
  `audiobook` int NOT NULL,
  `cdbook` int NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `genre` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_tipe`, `nama_buku`, `deskripsi`, `diskon`, `warna`, `tahun`, `status`, `harga`, `denda`, `pembatas`, `sampul`, `audiobook`, `cdbook`, `gambar`, `genre`) VALUES
(28, 0, 'TPID Kota Malang Kuatkan Kolaborasi dan Inovasi', 'Penjabat (Pj.) Wali Kota Malang Iwan Kurniawan mengapreasiasi kerja kolaboratif yang telah dilakukan oleh TPID sehingga inflasi di Kota Malang tetap terkendali. “Inflasi kita masih terkendali, secara year on year  di angka 1,22 persen, untuk month to month 0,24 persen. Artinya di penghujung tahun ini, kinerja stakeholder terkait khususnya TPID mampu mengendalikan inflasi dengan baik,” ujarnya.  Pj. Wali Kota Malang mendorong TPID untuk menyusun dan melaksanakan langkah strategis menyongsong akhir tahun 2024 sehingga inflasi tetap akan terkendali meski ada potensi kenaikan permintaan bahan-bahan pokok. “Nataru (Natal dan Tahun Baru) adalah salah satu momentum yang harus kita jaga dari potensi inflasi, dengan menerapkan langkah-langkah jangka pendek,” tegasnya.  Iwan pun menyatakan telah menetapkan road map untuk tahun 2025 sampai 2029. Road map ini diakuinya sesuai dengan arahan dan harapan Presiden untuk menyusun pedoman yang dapat diimplementasikan menjadi  langkah strategis. Road map ini juga didukung dengan beragam inovasi untuk mengendalikan inflasi. Salah satunya adalah program penanaman cabai yang dilakukan oleh Kodim 0833 Kota Malang yang bertujuan untuk membantu mencukupi kebutuhan masyarakat.  Selain itu, Iwan menuturkan bahwa pelaksanaan Gerakan Sosial Terpadu (Gesit) juga menjadi salah satu upaya Pemkot Malang yang tidak hanya untuk mengatasi inflasi, namun juga untuk mengatasi isu strategis lainnya yakni kemiskinan dan stunting. “Harapan saya dalam road map ini sudah tergambar setidaknya tiga inovasi, yakni Sekolah Peduli Inflasi, Kantor Peduli Inflasi, dan Sepasar Pedas. Tiga inovasi ini perlu diimplementasikan dengan baik dalam jangka panjang dan lebih banyak inovasi yang bisa dilakukan oleh Kota Malang,” sambungnya.  Dalam pengendalian inflasi di Kota Malang, Iwan menyampaikan bahwa Kota Malang menerapkan prinsip 4K, yakni keterjangkauan harga, ketersediaan pasokan, kelancaran distribusi, dan komunikasi efektif. 4K ini kemudian diimplementasikan menjadi sembilan langkah konkret, seperti pemantauan harga dan stok, rapat teknis TPID, menjaga pasokan kebutuhan pokok dan barang penting (bapokting), pencanangan gerakan menanam, melaksanakan operasi pasar murah, melaksanakan sidak pasar, koordinasi dengan daerah produsen, merealisasikan BTT untuk pengendalian inflasi, serta memberikan bantuan transport dari APBD.  “HLM yang kita lakukan hari ini menjadi salah satu langkah untuk menjalin komunikasi efektif. Kita melakukan koordinasi, memetakan masalah dan isu, lalu kita komunikasikan dengan stakeholder terkait, tidak hanya pemda dan forkopimda tetapi juga pelaku bisnis, pelaku usaha, dan masyarakat,” ungkapnya.  Kota Malang sebagai wilayah dengan luasan lahan pertanian terbatas, dikatakannya juga harus menjalin kerja sama antardaerah dalam rangka pemenuhan kebutuhan hasil pertanian. “Artinya intervensi untuk hasil pertanian ini kita harus kolaborasi dengan daerah lain sebagai penghasil pertanian untuk bisa mendistribusikan ke Kota Malang. Ini harus kita jaga. Jangan sampai pula kebijakan pengaturan lalu lintas di Nataru ini juga mengganggu kelancaran distribusi dan pasokan bahan pokok dan pertanian,” tegasnya.  Sebagai tindak lanjut HLM kali ini, dalam waktu dekat TPID Kota Malang akan melakukan pemantauan secara langsung terkait harga dan ketersediaan bahan pokok di beberapa pasar hingga pergudangan. (ari/yn)', '0', 'Ke-2', '12 Mei 1982', '1', 0, 0, 0, 0, 0, 0, '0758a36d51edf797cca8703edb4d43d4.jpg', 'Kegiatan Kelurahan'),
(30, 0, 'CUTI BULANAN', ',mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', '0', '-', '5 Agustus 2025', '1', 0, 0, 0, 0, 0, 0, 'fe59abc3dd1d8942ab6f5c2495484815.png', 'Informasi Kepegawaian'),
(31, 0, 'ungu', 'warna ungu lolipop', '0', 'Ke-1', '17 Agustus 2024', '0', 0, 0, 0, 0, 0, 0, 'Fitria_Riski_2210011_Proyek_AR.png', 'Pengumuman Resmi');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `username`, `alamat`, `gender`, `no_telepon`, `email`, `password`, `role_id`) VALUES
(4, 'Joko Santoso', 'joko', 'Jl. Satu Pekanbaru', 'laki-laki', '0653246512', '215654532767', 'ec6a6536ca304edf844d1d248a4f08dc', 2),
(5, 'Darmawan', 'darmawan', 'Jl. Dua Pekanbaru', 'laki-laki', '07617623', '1423477324723', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(6, 'Andi', 'andi', 'Jakarta', 'laki-laki', '0217687634', '12747657463', '827ccb0eea8a706c4c34a16891f84e7b', 2),
(7, 'Fitria Riski', 'admin', 'Pekanbaru', 'laki-laki', '065423624', '1764578345', '21232f297a57a5a743894a0e4a801fc3', 1),
(8, 'Bayu', 'bayu', 'Jl. Nangka Pekanbaru', 'laki-laki', '07612233', '14000756764735', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(9, 'Toni', 'toni', 'Bandung', 'laki-laki', '0835653243', '1753453265435', '81dc9bdb52d04dc20036dbd8313ed055', 2),
(10, 'mmm', 'mmm', 'mmmm', 'laki-laki', '000', '098765653', '9de37a0627c25684fdd519ca84073e34', 2),
(11, 'pipit', 'pipit', 'jl. pipit', 'perempuan', '098', '098', '5c40ee0ae05c339a9f8502d29a49541d', 2),
(12, 'vivit', 'admin', 'jl. vivit', 'perempuan', '0987', 'mediaagencysosial@gmail.com', '8accc5df262b008719e44e6bb6432382', 0),
(13, 'indah', 'indah', 'mbjhbjh', 'perempuan', '087', 'bjhbh', 'f3385c508ce54d577fd205a1b2ecdfb7', 2),
(14, 'yui', 'yui', 'jl. yui', 'perempuan', '876', 'yui@gmail.com', '4eff0335928a2d0e92f38ea9bb56d72b', 2),
(15, 'dilla', 'Dilla', 'jl. urip sumoharjo', 'perempuan', '081333978098', 'dillanumberi28@gmail.com', 'd1e6bcd9c4b932851068578b15af2bab', 2),
(16, 'indahh', 'indahh', 'jl. Urip Sumoharjo', 'perempuan', '098989898056', 'indahh@gmail.com', 'e32c34bf305e921962f3839686200f92', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rental`
--

CREATE TABLE `rental` (
  `id_rental` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_buku` int NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` varchar(120) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipe`
--

CREATE TABLE `tipe` (
  `id_tipe` int NOT NULL,
  `genre` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `genre_name` varchar(120) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe`
--

INSERT INTO `tipe` (`id_tipe`, `genre`, `genre_name`) VALUES
(9, 'Pengumuman Resmi', 'Pengumuman Resmi'),
(10, 'Kegiatan Kelurahan', 'Kegiatan Kelurahan'),
(11, 'Informasi Kepegawaian', 'Informasi Kepegawaian'),
(13, 'Kegiatan Masyarakat', 'Kegiatan Masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_rental` int NOT NULL,
  `id_customer` int NOT NULL,
  `id_buku` int NOT NULL,
  `tgl_rental` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `harga` varchar(120) NOT NULL,
  `denda` int NOT NULL,
  `total_denda` varchar(120) NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `status_pengembalian` varchar(50) NOT NULL,
  `status_rental` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(120) NOT NULL,
  `status_pembayaran` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_rental`, `id_customer`, `id_buku`, `tgl_rental`, `tgl_kembali`, `harga`, `denda`, `total_denda`, `tgl_pengembalian`, `status_pengembalian`, `status_rental`, `bukti_pembayaran`, `status_pembayaran`) VALUES
(3, 6, 9, '2021-01-15', '2021-01-16', '450000', 30000, '120000', '2021-01-20', 'Kembali', 'Selesai', '', 0),
(4, 6, 6, '2021-01-15', '2021-01-18', '400000', 30000, '60000', '2021-01-20', 'Kembali', 'Selesai', 'tugas.png', 1),
(5, 8, 10, '2021-01-18', '2021-01-19', '400000', 100000, '100000', '2021-01-20', 'Kembali', 'Selesai', '', 0),
(6, 6, 11, '2021-01-28', '2021-01-30', '300000', 25000, '25000', '2021-01-31', 'Kembali', 'Selesai', 'tugas2.png', 1),
(7, 9, 13, '2021-01-30', '2021-02-01', '350000', 25000, '25000', '2021-02-02', 'Kembali', 'Selesai', 'tugas2.png', 1),
(8, 11, 6, '2024-07-18', '2024-08-10', '400000', 30000, '480000', '2024-07-25', 'Kembali', 'Selesai', '', 0),
(9, 11, 17, '2024-07-26', '2024-07-27', '99999', 9999, '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', 'WhatsApp_Image_2024-05-26_at_14_15_39_f61fd8bc.jpg', 0),
(10, 11, 19, '2024-07-27', '2024-07-28', '5000', 78768, '472608', '2024-08-03', 'Kembali', 'Selesai', '', 0),
(11, 11, 20, '2024-07-27', '2024-07-28', '999', 87987, '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0),
(12, 11, 23, '2024-07-27', '2024-08-03', '0', 9000, '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0),
(13, 11, 20, '2024-07-27', '2024-08-06', '999', 87987, '0', '0000-00-00', 'Belum Kembali', 'Belum Selesai', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `rental`
--
ALTER TABLE `rental`
  ADD PRIMARY KEY (`id_rental`);

--
-- Indexes for table `tipe`
--
ALTER TABLE `tipe`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_rental`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int NOT NULL AUTO_INCREMENT COMMENT 'ID unik,auto increment';

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rental`
--
ALTER TABLE `rental`
  MODIFY `id_rental` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipe`
--
ALTER TABLE `tipe`
  MODIFY `id_tipe` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_rental` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
