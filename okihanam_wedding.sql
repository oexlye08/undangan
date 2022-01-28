-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2021 at 11:12 AM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okihanam_wedding`
--

-- --------------------------------------------------------

--
-- Table structure for table `adat`
--

CREATE TABLE `adat` (
  `idAdat` int(11) NOT NULL,
  `penjelasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adat`
--

INSERT INTO `adat` (`idAdat`, `penjelasan`) VALUES
(1, '<i>\"Kami ingin melaluinya hanya bersama yang terdekat.\"</i>\r\n<br>\r\n<br>\r\n\r\nAkad nikah kami akan dilaksanakan pada hari Ahad, 19 Desember 2021 pukul 07.30 WIB. <br>\r\nResepsi akan dilaksanakan dihari yang sama pada pukul 13.00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `cerita`
--

CREATE TABLE `cerita` (
  `idCerita` int(11) NOT NULL,
  `judulCerita` varchar(30) NOT NULL,
  `isiCerita` text NOT NULL,
  `gambarCerita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cerita`
--

INSERT INTO `cerita` (`idCerita`, `judulCerita`, `isiCerita`, `gambarCerita`) VALUES
(1, 'Pertemuan Pertama', 'Tahun 2013 Dewan Ambalan, mempertemukan kami. Inilah awal bagi kami untuk saling mengenal satu sama lain. Berbagai kesibukan organisasi semakin mendekatkan kami.\r\n\r\nMeski begitu, memiliki hubungan romantis tidak sekalipun terbesit di benak kami.', 'WhatsApp Image 2021-11-21 at 17.52.03.jpeg'),
(2, 'Terpisah Jarak', '2016 menjadi tahun kelulusan kita. Hana pergi merantau ke Negeri Jiran, dan Oki mengadu nasib di Ibu Kota. \r\n\r\n3 tahun kami habiskan dengan menjalani hidup masing masing dengan kisah masing-masing. Tidak ada komunikasi berarti yang kami jalani. Jika ada, mungkin sekedar membalas story atau lemparan candaan di grup organisasi.', '5340749.jpg'),
(3, 'Pulang', 'Agustus 2019 menjadi awal mula lembaran baru. Hana pulang ke Indonesia. Semesta kembali mempertemukan kami.\r\n\r\nEntah bagaimana, semua berjalan begitu saja. Kami menjadi sering bertemu. Komunikasi yang tadinya seadanya menjadi semakin intens.', 'wake-speedboat-ocean.jpg'),
(4, 'Semakin Dekat', 'Memasuki tahun 2020, semua berpihak kepada kami. \r\n\r\nPertemuan demi pertemuan menjadi semakin sering terjadi. Pun kami menjadi semakin terbiasa menghabiskan waktu bersama. \r\n\r\nMenjelajahi berbagai tempat baru, mencoba berbagai makanan unik, bahkan sekedar bertemu untuk bertukar cerita.', 'WhatsApp Image 2021-11-21 at 17.26.06.jpeg'),
(5, 'Berselimut Rasa', 'Sepanjang tahun 2021 banyak cerita yang telah kami ukir berdua. \r\n\r\nBanyak menghabiskan waktu bersama membuat kami mau tak mau mengakui satu hal.\r\n\r\n\"Yang terjadi di antara kami, sudah lebih dari sekedar teman satu angkatan atau teman satu organisasi. \r\n\r\nKami telah memasuki ruang di mana kami tidak ingin saling melepaskan. Ruang itulah yang mengantarkan kami menuju gerbang kehidupan selanjutnya.', 'WhatsApp Image 2021-11-21 at 16.35.39.jpeg'),
(6, 'Janji Suci', '19 Desember 2021 sebuah janji akan kami ikrarkan.\r\n\r\nJanji yang atas izin-Nya tidak akan lagi memisahkan kami. Janji yang pada akhirnya menguatkan hati-hati kami.', 'WhatsApp Image 2021-11-21 at 17.16.42.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `data_wa`
--

CREATE TABLE `data_wa` (
  `ID_MSG` bigint(255) NOT NULL,
  `NO_WA` varchar(300) NOT NULL DEFAULT '',
  `FORMAT_WA` varchar(900) DEFAULT NULL,
  `ISI_WA` varchar(900) DEFAULT NULL,
  `TGL_INPUT` datetime DEFAULT NULL,
  `TGL_KIRIM` datetime DEFAULT NULL,
  `STATUS` varchar(100) DEFAULT NULL,
  `VAR_1` varchar(300) DEFAULT NULL,
  `VAR_2` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_wa`
--

INSERT INTO `data_wa` (`ID_MSG`, `NO_WA`, `FORMAT_WA`, `ISI_WA`, `TGL_INPUT`, `TGL_KIRIM`, `STATUS`, `VAR_1`, `VAR_2`) VALUES
(2147483736, '+6282120191493', '  Hallo [Var_1]', '  Hallo Angga Fantiyaaaa || Untuk Info Lebih Lanjut Klik http://weddinginvitation.masuk.web.id/ || Pesan dikirim Oleh Wedding Invitation || Develop By Angga & Devi & Fandi || Tubes Tekweb', '2020-06-11 19:00:48', '2020-06-11 19:01:31', 'SENT', 'Angga Fantiyaaaa', 'Padalarang'),
(2147483737, '+6281809121771', '  Hallo [Var_1]', '  Hallo Fantiya || Untuk Info Lebih Lanjut Klik http://weddinginvitation.masuk.web.id/ || Pesan dikirim Oleh Wedding Invitation || Develop By Angga & Devi & Fandi || Tubes Tekweb', '2020-06-11 19:01:11', '2020-06-11 19:01:32', 'SENT', 'Fantiya', 'Bandung Bagian Barat'),
(2147483738, '+6282120191493', '  Kepada YTH. [VAR_1], yang berada di [VAR_2] kami mengundang ke acara pernikahan kami yang dilaksanakan di Gedung Sasana Krida Unjani. Terima Kasih.', '  Kepada YTH. Fantiya, yang berada di Cimahi kami mengundang ke acara pernikahan kami yang dilaksanakan di Gedung Sasana Krida Unjani. Terima Kasih. || Untuk Info Lebih Lanjut Klik http://weddinginvitation.masuk.web.id/ || Pesan dikirim Oleh Wedding Invitation || Develop By Angga & Devi & Fandi || Tubes Tekweb', '2020-06-11 19:05:03', '2020-06-11 19:05:18', 'SENT', 'Fantiya', 'Cimahi');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `idGalery` int(11) NOT NULL,
  `judulPhoto` text NOT NULL,
  `namaFile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`idGalery`, `judulPhoto`, `namaFile`) VALUES
(24, '', '1.jpeg'),
(25, '', '2.jpeg'),
(26, '', '3.jpeg'),
(27, '', '4.jpeg'),
(28, '', '5.jpeg'),
(29, '', '6.jpeg'),
(30, '', 'a.jpeg'),
(31, '', 'b.jpeg'),
(32, '', 'c.jpeg'),
(33, '', 'd.jpeg'),
(34, '', 'e.jpeg'),
(35, '', 'f.jpeg'),
(36, '', 'g.jpeg'),
(37, '', 'h.jpeg'),
(38, '', 'i.jpeg'),
(39, '', 'j.jpeg'),
(40, '', 'k.jpeg'),
(41, '', 'l.jpeg'),
(42, '', 'm.jpeg'),
(43, '', 'n.jpeg'),
(44, '', 'o.jpeg'),
(45, '', 'p.jpeg'),
(46, '', 'q.jpeg'),
(47, '', 'r.jpeg'),
(48, '', 's.jpeg'),
(49, '', 't.jpeg'),
(50, '', 'u.jpeg'),
(51, '', 'v.jpeg'),
(52, '', 'w.jpeg'),
(53, '', 'x.jpeg'),
(54, '', 'y.jpeg'),
(55, '', 'z.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idPesan` int(11) NOT NULL,
  `namaPengirim` varchar(50) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`idPesan`, `namaPengirim`, `isi`) VALUES
(6, 'Angga', 'Semoga menjadi keluarga sakinah mawahdah warohmah'),
(7, 'Devi', 'Cepet punya anak yah'),
(8, 'Hermawan', 'Samawa Yah Kaka'),
(9, 'Angga', 'Semoga Menjadi Keluarga Yang Sakinah Mawadah Warohmah'),
(10, 'sads', 'sadsadsds');

-- --------------------------------------------------------

--
-- Table structure for table `resepsi`
--

CREATE TABLE `resepsi` (
  `idResepsi` int(11) NOT NULL,
  `namaPria` varchar(30) NOT NULL,
  `namaWanita` varchar(30) NOT NULL,
  `tglResepsi` date NOT NULL,
  `jamResepsi` time NOT NULL,
  `alamatResepsi` text NOT NULL,
  `namaGedung` text NOT NULL,
  `fileGambar` text NOT NULL,
  `gambarGedung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resepsi`
--

INSERT INTO `resepsi` (`idResepsi`, `namaPria`, `namaWanita`, `tglResepsi`, `jamResepsi`, `alamatResepsi`, `namaGedung`, `fileGambar`, `gambarGedung`) VALUES
(1, 'Oki', 'Hana', '2021-12-19', '13:00:22', 'Kediaman Mempelai Wanita', 'Dalem (rt 02 /  rw 01), Tegowanuh, Kaloran, Temanggung', 'LRM_EXPORT_20211116_114951.jpg', 'qrcode_4877789_.svg');

-- --------------------------------------------------------

--
-- Table structure for table `sambutan`
--

CREATE TABLE `sambutan` (
  `idSambutan` int(11) NOT NULL,
  `pembukaSambutan` text CHARACTER SET utf8 NOT NULL,
  `isiSambutan` text CHARACTER SET utf8 NOT NULL,
  `penutupSambutan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sambutan`
--

INSERT INTO `sambutan` (`idSambutan`, `pembukaSambutan`, `isiSambutan`, `penutupSambutan`) VALUES
(1, 'ÙˆÙŽÙ…ÙÙ†Û¡ Ø§Ù°ÙŠÙ°ØªÙÙ‡Ù–Û¤ Ø§ÙŽÙ†Û¡ Ø®ÙŽÙ„ÙŽÙ‚ÙŽ Ù„ÙŽÙƒÙÙ…Û¡ Ù…Ù‘ÙÙ†Û¡ Ø§ÙŽÙ†Û¡ÙÙØ³ÙÙƒÙÙ…Û¡ Ø§ÙŽØ²Û¡ÙˆÙŽØ§Ø¬Ù‹Ø§ Ù„Ù‘ÙØªÙŽØ³Û¡ÙƒÙÙ†ÙÙˆÛ¡Û¤Ø§ Ø§ÙÙ„ÙŽÙŠÛ¡Ù‡ÙŽØ§ ÙˆÙŽØ¬ÙŽØ¹ÙŽÙ„ÙŽ Ø¨ÙŽÙŠÛ¡Ù†ÙŽÙƒÙÙ…Û¡ Ù…Ù‘ÙŽÙˆÙŽØ¯Ù‘ÙŽØ©Ù‹ ÙˆÙ‘ÙŽØ±ÙŽØ­Û¡Ù…ÙŽØ©Ù‹â€‚ Ø• Ø§ÙÙ†Ù‘ÙŽ ÙÙÙ‰Û¡ Ø°Ù° Ù„ÙÙƒÙŽ Ù„ÙŽØ§Ù°ÙŠÙ°ØªÙ Ù„Ù‘ÙÙ‚ÙŽÙˆÛ¡Ù…Ù ÙŠÙ‘ÙŽØªÙŽÙÙŽÙƒÙ‘ÙŽØ±ÙÙˆÛ¡Ù†ÙŽ', 'Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir.', 'QS. Ar-Rum Ayat 21');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `idSosmed` int(11) NOT NULL,
  `ig` text NOT NULL,
  `twitter` text NOT NULL,
  `fb` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`idSosmed`, `ig`, `twitter`, `fb`) VALUES
(1, 'https://www.instagram.com/', 'https://twitter.com/', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tamuundangan`
--

CREATE TABLE `tamuundangan` (
  `idTamu` int(11) NOT NULL,
  `nama` varchar(90) NOT NULL,
  `noTelp` varchar(14) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `tamuundangan`
--
DELIMITER $$
CREATE TRIGGER `insertDataWa` AFTER INSERT ON `tamuundangan` FOR EACH ROW INSERT INTO data_wa 
SET
NO_WA = NEW.noTelp,
TGL_INPUT = CURRENT_TIMESTAMP(),
VAR_1 = NEW.nama,
VAR_2 = NEW.alamat
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jenisKelamin` varchar(1) NOT NULL,
  `alamat` text NOT NULL,
  `noTelp` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `jenisKelamin`, `alamat`, `noTelp`, `email`, `password`) VALUES
(1, 'Admin', 'L', 'Padang', '085361273485', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adat`
--
ALTER TABLE `adat`
  ADD PRIMARY KEY (`idAdat`);

--
-- Indexes for table `cerita`
--
ALTER TABLE `cerita`
  ADD PRIMARY KEY (`idCerita`);

--
-- Indexes for table `data_wa`
--
ALTER TABLE `data_wa`
  ADD PRIMARY KEY (`ID_MSG`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`idGalery`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idPesan`);

--
-- Indexes for table `resepsi`
--
ALTER TABLE `resepsi`
  ADD PRIMARY KEY (`idResepsi`);

--
-- Indexes for table `sambutan`
--
ALTER TABLE `sambutan`
  ADD PRIMARY KEY (`idSambutan`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`idSosmed`);

--
-- Indexes for table `tamuundangan`
--
ALTER TABLE `tamuundangan`
  ADD PRIMARY KEY (`idTamu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adat`
--
ALTER TABLE `adat`
  MODIFY `idAdat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cerita`
--
ALTER TABLE `cerita`
  MODIFY `idCerita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_wa`
--
ALTER TABLE `data_wa`
  MODIFY `ID_MSG` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483739;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `idGalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idPesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `resepsi`
--
ALTER TABLE `resepsi`
  MODIFY `idResepsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sambutan`
--
ALTER TABLE `sambutan`
  MODIFY `idSambutan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `idSosmed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tamuundangan`
--
ALTER TABLE `tamuundangan`
  MODIFY `idTamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
