-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2019 at 12:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpk_pdf`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `tlpn` text NOT NULL,
  `subject` text NOT NULL,
  `pesan` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `tlpn`, `subject`, `pesan`, `created_at`, `status`) VALUES
(2, 'test 2 ', 'bilkisismail07@gmail.com', '089898989898', 'test test', 'ini adalah test terimakasih', '2019-06-21 19:50:47', 0),
(3, 'test 2 ', 'bilkisismail07@gmail.com', '089898989898', 'test test', 'ini adalah test terimakasih', '2019-06-21 19:35:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `name`) VALUES
(1, 'Anak'),
(2, 'Dunia Usaha'),
(3, 'Panduan Pendidikan AntiKorupsi'),
(4, 'Politik'),
(5, 'Umum');

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `sub_kategori` enum('Pendidikan Dasar dan Menengah','Pendidikan Tinggi') DEFAULT NULL,
  `pdf_thumb` text NOT NULL,
  `pdf_title` text NOT NULL,
  `pdf_desc` text NOT NULL,
  `pdf_size` double NOT NULL,
  `pdf_url` text NOT NULL,
  `pdf_name` text NOT NULL,
  `pdf_modal` text NOT NULL,
  `pdf_read_count` int(11) NOT NULL,
  `pdf_download_count` int(11) NOT NULL,
  `pdf_status_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `kategori_id`, `sub_kategori`, `pdf_thumb`, `pdf_title`, `pdf_desc`, `pdf_size`, `pdf_url`, `pdf_name`, `pdf_modal`, `pdf_read_count`, `pdf_download_count`, `pdf_status_id`) VALUES
(1, 1, '', 'output_pdf/Anak/Bangga/cover.jpg', 'Bangga', 'Ini pagi yang menyenangkan bagi para lebah.\r\nHari ini, bunga-bunga bermekaran di lereng Gunung Rinjani.\r\nSemua lebah bersemangat terbang ke sana untuk mengisap madu.\r\nMereka berbaris rapi dan berlomba-lomba ke tempat tujuan.\r\nTapi, kupu-kupu datang dan menggoda ratu lebah.\r\n</br></br>\r\nKatanya, ratu lebah beristirahat saja. Tidak perlu bekerja seperti yang lain.\r\nKan, sudah banyak prajurit yang bekerja. Ratu lebah menjadi bimbang.\r\nPerlukah dia bersantai-santai saja sementara yang lain bekerja?', 1.3, 'output_pdf/Anak/Bangga/Bangga.pdf', 'Bangga.pdf', 'readPdfBangga', 0, 0, 1),
(9, 1, NULL, 'output_pdf/Anak/Batik Rilo/cover.png', 'Batik Rilo', 'Membatik itu asyik, lho! Ayah akan mengikuti pameran batik sebentar lagi.\r\nRilo ingin sekali membantu. Tapi, kenapa canting Rilo tidak mengeluarkan malam,ya?\r\nBerkali-kali Rilo mencoba, tidak ada jejak di atas kainnya. Mungkin Rilo harus mengganti canting.\r\n<br/><br/>\r\nKetika Rilo menggunakan canting yang lebih besar, ups! Cantingnya tumpah!\r\nMalamnya mengotori batik yang sudah dilukis, membuat semuanya berantakan.\r\nAyah tidak akan bisa mengikuti pameran kalau semua batiknya hancur seperti ini.\r\n<br/><br/>\r\nHaruskah Rilo mengaku? Atau dia pura-pura tidak tahu saja?', 2.1, 'output_pdf/Anak/Batik Rilo/Batik Rilo.pdf', 'Batik Rilo.pdf', 'readPdfBatikRilo', 0, 0, 1),
(10, 1, NULL, 'output_pdf/Anak/Berani Jujur Yuk/cover.jpg', 'Berani Jujur Yuk!', 'Tepung Ibu habis. Ibu perlu untuk membuat chaikue. Ken bisa bantu Ibu untuk membelikan tepung seharga Rp 45 ribu. Ibu memberi Ken uang Rp 50 ribu. Nanti kembaliannya Rp 5 ribu. \r\n</br></br>\r\nSesampampainya di warung, Ken menerima kembalian lima ribu tapi berjumlah dua. Jadinya uang kembaliannya kebanyakan. Kalau gitu Ken bisa membeli es krim. Eh, tapi bolehkah begitu?', 1.3, 'output_pdf/Anak/Berani Jujur Yuk/Berani Jujur Yuk!.pdf', 'Berani Jujur Yuk!.pdf', 'readPdfBeraniJujurYuk', 0, 0, 1),
(11, 1, NULL, 'output_pdf/Anak/Bintang untuk Dafi/cover.jpg', 'Bintang untuk Dafi', 'Besok di sekolah ada ulangan. Jika ingin mendapat bintang, Dafi harus belajar dengan giat.\r\n</br></br>\r\nDafi pun duduk di meja belajar, membuka buku, tapi ...\r\nUgh, susah. Belajar itu membosankan.\r\n</br></br>\r\nDafi ingin main handphone saja supaya bisa semangat belajar lagi. Main ..... main ..... main .....\r\n</br></br>\r\nYa ampun, sudah terlalu malam! Dafi belum belajar sama sekali!\r\nBgaimana ini? Apakah Dafi masih bisa mendapatkan Bintang dalam ulangan besok?', 0.7, 'output_pdf/Anak/Bintang untuk Dafi/Bintang untuk Dafi.pdf', 'Bintang untuk Dafi.pdf', 'readPdfBintangUntukDafi', 0, 0, 1),
(12, 1, NULL, 'output_pdf/Anak/Celengan Ayam/cover.jpg', 'Celengan Ayam', 'Azkia dan Tira ingin menabung. Mereka ingin menabung lewat celengan ayam.\r\nTapi, tidak ada celengan ayam tersedia. Katanya, Bu Tejo akan membuatnya.\r\n</br></br>\r\nMemangnya bisa dibuat sendiri?\r\n</br></br>\r\nTernyata bisa! Azkia dan Tira membantu Bu Tejo mencampur tanah liat, membuat cetakan, hingga menjemur. Ternyata tidak mudah.\r\nSeperti apa sih membuat celengan ayam sendiri? Kita intip Azkia dan Tira membuat celengan ayam, yuk!', 1.8, 'output_pdf/Anak/Celengan Ayam/Celengan Ayam.pdf', 'Celengan Ayam.pdf', 'readPdfCelenganAyam', 0, 0, 1),
(13, 1, NULL, 'output_pdf/Anak/Dakon/cover.jpg', 'Dakon', 'Ayo main Dakon bersama Ela dan Aya! Tapi, kenapa Aya menang terus, ya? Ela sebal karena dia kalah lagi kalah lagi. Main sekali lagi pun, Aya menang lagi.\r\n</br></br>\r\n\'\'Pasti Aya curang! Ela tidak mau main lagi.\'\'</br>\r\n\'\'Kita main yang lain, bagaimana?\'\' tawar Aya.\r\n</br></br>\r\nEla tidak mau. Kecuali ketika Aya mengajaknya bermain engklek. Dan, benar saja, ada sesuatu yang disimpan Aya selama ini, makanya Aya selalu menang. Wah, kira-kira apa itu?', 1.1, 'output_pdf/Anak/Dakon/Dakon.pdf', 'Dakon.pdf', 'readPdfDakon', 0, 0, 1),
(14, 1, NULL, 'output_pdf/Anak/Juara Kejujuran Jilid 1/cover.jpg', 'Juara Kejujuran Jilid 1', 'Buku ini merupakan salah satu hasil karya peserta \'\'Anti-Corruption Teacher Supercamp 2016: Guru Menulis Antikorupsi\'\', yang penulisannya dibimbing oleh para mentor yang ahli di bidangnya. Secara detail karya yang dihasilkan peserta dari kegiatan ini berjumlah 50 buah, yaitu cerita bergambar (8 judul buku), cerpen anak (8 judul), komik (18 judul), dan naskah skenario film remaja (17 judul).', 1, 'output_pdf/Anak/Juara Kejujuran Jilid 1/Juara Kejujuran Jilid 1.pdf', 'Juara Kejujuran Jilid 1.pdf', 'readPdfJuaraKejujuranJilidSatu', 0, 0, 1),
(15, 1, NULL, 'output_pdf/Anak/Juara Kejujuran Jilid 2/cover.png', 'Juara Kejujuran Jilid 2', 'Buku ini merupakan salah satu hasil karya peserta \'\'Anti-Corruption Teacher Supercamp 2016: Guru Menulis Antikorupsi\'\', yang penulisannya dibimbing oleh para mentor yang ahli di bidangnya. Secara detail karya yang dihasilkan peserta dari kegiatan ini berjumlah 50 buah, yaitu cerita bergambar (8 judul buku), cerpen anak (8 judul), komik (18 judul), dan naskah skenario film remaja (17 judul).', 1.2, 'output_pdf/Anak/Juara Kejujuran Jilid 2/Juara Kejujuran Jilid 2.pdf', 'Juara Kejujuran Jilid 2.pdf', 'readPdfJuaraKejujuranJilidDua', 0, 0, 1),
(16, 1, NULL, 'output_pdf/Anak/Modo Tak Mau Menari/cover.jpg', 'Modo Tak Mau Menari', 'Modo tak mau menari Rangkuk Alu.</br>\r\nApakah betul karena ia sakit gigi?</br>\r\nUntung Modo punya teman-teman yang baik.</br>\r\nMereka tak membiarkan Modo sedih.</br>\r\nANAK JUJUR pasti disenangi teman.', 1, 'output_pdf/Anak/Modo Tak Mau Menari/Modo Tak Mau Menari.pdf', 'Modo Tak Mau Menari.pdf', 'readPdfModoTakMauMenari', 0, 0, 1),
(17, 1, '', 'output_pdf/Anak/Mukena Mita/cover.jpg', 'Mukena Mita', 'Mita ingin punya mukena baru. Mukena teman Mita lebih cantik.&lt;/br&gt;\r\nTapi, Ibu bilang mukena Mita masih bisa dipakai. Huh, Mita jadi sebal.&lt;/br&gt;\r\nPadahal mukena Mita kan sudah kucel, lusuh, dan kusam.&lt;/br&gt;\r\n&lt;/br&gt;\r\nPokoknya Mita mau ngambek saja!&lt;/br&gt;\r\nJadi, ketika Ibu memanggil, Mita mau pura-pura tidur saja.&lt;/br&gt;\r\nLalu, ketika Ibu keluar kamar, Mita akan kabur. Rencana bagus.&lt;/br&gt;\r\nMita sebaiknya main di rumah Weni. Pokoknya Mita mau ngambek saja.&lt;/br&gt;\r\n&lt;/br&gt;\r\nKira-kira, dengan begitu, Mita akan mendapat mukena baru tidak ya?', 1.5, 'output_pdf/Anak/Mukena Mita/Mukena Mita.pdf', 'Mukena Mita.pdf', 'readPdfMukenaMita', 0, 0, 1),
(18, 1, NULL, 'output_pdf/Anak/Piknik di Kumbinesia/cover.jpg', 'Piknik di Kumbinesia', 'Gara-gara Ayi, piknik di Kumbinesia</br>\r\ntak lagi menyenangkan. Ini tidak bisa dibiarkan.</br>\r\nAyi harus diingatkan Apa yang dilakukan teman-teman</br>\r\n</br>\r\nAyi untuk membuatnya jera?', 0.9, 'poutput_pdfdf/Anak/Piknik di Kumbinesia/Piknik di Kumbinesia.pdf', 'Piknik di Kumbinesia.pdf', 'readPdfPiknikDiKumbinesia', 0, 0, 1),
(19, 1, NULL, 'output_pdf/Anak/Si Empunya Telur/cover.jpg', 'Si Empunya Telur', 'Kisah tentang seekor bebek putih dan ayam hutan yang kandangnya berdekatan.\r\n</br></br>\r\nAta, si ayam hutan, hanya bisa bertelur enam butir saja.</br>\r\nSementara Betih, si bebek putih, bisa bertelur sampai sembilan.</br>\r\nAta ingin sekali seperti Betih. Memiliki telur yang banyaaak ...!\r\n</br></br>\r\nMeski iri, Ata dan Betih berteman baik. Mereka sering mencari makan bersama.</br>\r\nSampai suatu hari, kandang mereka disenggol anak-anak pesepeda.\r\n</br></br>\r\nTelur mereka sekarang bercampur.\r\n</br></br>\r\nYa ampun, yang mana telurnya Ata dan mana telurnya Betih, ya?\r\n</br></br>\r\nMereka harus memisahkannya segera,</br>\r\nkarena telur-telur itu sudah mulai menetas!</br>\r\nBisakah Ata dan Betih menyelesaikan kekacauan ini?', 0.5, 'output_pdf/Anak/Si Empunya Telur/Si Empunya Telur.pdf', 'Si Empunya Telur.pdf', 'readPdfSiEmpunyaTelur', 0, 0, 1),
(20, 1, NULL, 'output_pdf/Anak/Suatu Hari di Museum Seni/cover.jpg', 'Suatu Hari di Museum Seni', 'Wah, mentimun model lukisan hilang!</br>\r\nAyo kejar pencurinya! Dia berpindah-pindah dari satu lukisan ke lukisan lain.</br>\r\nUntung Kumbi dan teman-temannya cerdik.', 1.2, 'output_pdf/Anak/Suatu Hari di Museum Seni/Suatu Hari di Museum Seni.pdf', 'Suatu Hari di Museum Seni.pdf', 'readPdfSuatuHariDiMuseumSeni', 0, 0, 1),
(21, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 1/cover.png', 'Modul Integritas Bisnis 01: Dasar Hukum Tentang Korupsi Terkait Sektor Bisnis', 'Modul Dasar Hukum Tentang Korupsi Terkait Sektor Bisnis ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar tentang konsep korupsi, jenis-jenis korupsi, dan dasar hukum tindak pidana korupsi baik berdasarkan hukum nasional maupun internasional, serta contoh-contoh kasus tindak pidana korupsi yang melibatkan sektor bisnis.', 1, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 1/Modul Integritas Bisnis 1.pdf', 'Modul Integritas Bisnis 1 - Dasar Hukum Tentang Korupsi Terkait Sektor Bisnis.pdf', 'readPdfModulIntegritasBisnisSatuDasarHukumTentangKorupsiTerkaitSektorBisnis', 0, 0, 1),
(22, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 2/cover.png', 'Modul Integritas Bisnis 02: Praktik Korupsi Dilihat Dari Sisi Kelembagaan', 'Modul Praktik Korupsi Dilihat Dari Sisi Kelembagaan ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar tentang praktik korupsi yang melibatkan sektor bisnis/swasta dilihat dari aspek kelembagaan.', 1.1, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 2/Modul Integritas Bisnis 2.pdf', 'Modul Integritas Bisnis 2 - Praktik Korupsi Dilihat Dari Sisi Kelembagaan.pdf', 'readPdfModulIntegritasBisnisDuaPraktikKorupsiDilihatDariSisiKelembagaan', 0, 0, 1),
(23, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 3/cover.png\r\n', 'Modul Integritas Bisnis 03: Dampak Sosial Korupsi', 'Modul Dampak Sosial Korupsi ini dibuat dengan tujuan agar masyarakat umum mampu menguraikan dengan baik dan benar tentang konsep, penyebab, perkembangan, dan dampak sosial akibat dari tindak pidana korupsi yang terjadi di Indonesia.', 0.8, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 3/Modul Integritas Bisnis 3.pdf', 'Modul Integritas Bisnis 3 - Dampak Sosial Korupsi.pdf', 'readPdfModulIntegritasBisnisTigaDampakSosialKorupsi', 0, 0, 1),
(24, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 4/cover.png', 'Modul Integritas Bisnis 04: Cara Mencegah Korupsi Pada Korporasi: Praktik dan Strategi', 'Modul Cara Mencegah Korupsi pada Korporasi: Praktik dan Strategi ini dibuat dengan tujuan agar masyarakat umum mampu menerapkan praktik dan strategi mencegah korupsi pada korporasi.', 1, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 4/Modul Integritas Bisnis 4.pdf', '', 'readPdfModulIntegritasBisnisEmpatCaraMencegahKorupsiPadaKorporasiPraktikDanStrategi', 0, 0, 1),
(25, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 5/cover.png', 'Modul Integritas Bisnis 05: Insentif dan Sanksi Pada Korporasi', 'Modul Insentif dan Sanksi pada Korporasi ini dibuat dengan tujuan agar masyarakat umum mampu menerapkan sistem insentif dan sanksi pada korporasi/perusahaan yang melakukan tindak pidana korupsi.', 0.3, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 5/Modul Integritas Bisnis 5.pdf', 'Modul Integritas Bisnis 5 - Insentif dan Sanksi Pada Korporasi.pdf', 'readPdfModulIntegritasBisnisLimaInsentifDanSanksiPadaKorporasi', 0, 0, 1),
(26, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 6/cover.png', 'Modul Integritas Bisnis 06: Elemen-elemen Program Antikorupsi Bagi Korporasi', 'Modul Elemen-elemen Program Antikorupsi bagi Korporasi ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar dan melaksanakan elemen-elemen program antikorupsi baik dari sisi internal dan eksternal korporasi maupun aksi kolektif program antikorupsi yang dilakukan bersama-sama oleh korporasi.', 0.8, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 6/Modul Integritas Bisnis 6.pdf', 'Modul Integritas Bisnis 6 - Elemen-elemen Program Antikorupsi Bagi Korporasi', 'readPdfModulIntegritasBisnisEnamElemenelemenProgramAntikorupsiBagiKorporasi', 0, 0, 1),
(27, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 7/cover.png', 'Modul Integritas Bisnis 07: Pengelolaan Konflik Kepentingan', 'Modul Pengelolaan Konflik Kepentingan ini dibuat dengan tujuan agar masyarakat umum mampu menerapkan strategi pengelolaan konflik kepentingan sebagai kunci dalam membangun integritas korporasi.', 0.7, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 7/Modul Integritas Bisnis 7.pdf', 'Modul Integritas Bisnis 7 - Pengelolaan Konflik Kepentingan.pdf', 'readPdfModulIntegritasBisnisTujuhPengelolaanKonflikKepentingan', 0, 0, 1),
(28, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 8/cover.png', 'Modul Integritas Bisnis 08: Managing Gift', 'Modul Managing Gift ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar serta menerapkan managing gift yang dapat meminimalisir konflik kepentingan serta resiko terjadinya korupsi pada korporasi.', 0.8, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 8/Modul Integritas Bisnis 8.pdf', 'Modul Integritas Bisnis 8 - Managing Gift.pdf', 'readPdfModulIntegritasBisnisDelapanManagingGift', 0, 0, 1),
(29, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 9/cover.png', 'Modul Integritas Bisnis 09: Best Practice Compliance / Integrity Development', 'Modul Best Practice Compliance/Integrity Development ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar serta menerapkan best practice compliance/integrity development pada korporasi.', 0.7, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 9/Modul Integritas Bisnis 9.pdf', 'Modul Integritas Bisnis 9 - Best Practice Compliance  Integrity Development.pdf', 'readPdfModulIntegritasBisnisSembilanBestPracticeComplianceIntegrityDevelopment', 0, 0, 1),
(30, 2, NULL, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 10/cover.png', 'Modul Integritas Bisnis 10: Wawancara Investigatif', 'Modul Wawancara Investigatif ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar serta menerapkan wawancara investigatif bagi korporasi.', 0.8, 'output_pdf/Dunia Usaha/Modul Integritas Bisnis 10/Modul Integritas Bisnis 10.pdf', 'Modul Integritas Bisnis 10 - Wawancara Investigatif.pdf', 'readPdfModulIntegritasBisnisSepuluhWawancaraInvestigatif', 0, 0, 1),
(31, 3, 'Pendidikan Dasar dan Menengah', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/99+1 Model Pembelajaran Antikorupsi/cover.jpg', '99+1 Model Pembelajaran Antikorupsi', 'Apa yang akan terjadi dengan masa depan Indonesia jika anak-anak Indonesia tumbuh menjadi pribadi yang antikorupsi? Bagaimana cara menumbuhkan kejujuran dalam diri anak/remaja/mahasiswa? Bagaimana cara menjadikan para peserta didik menjadi Gen Aksi (Generasi Antikorupsi)? Hal-hal ini menjadi sebuah mimpi yang harus diwujudkan dalam negeri ini dan kebanyakan yang berhasil mewujudkan impian tersebut adalah mereka yang memiliki visi misi kuat, ibarat sebuah kompas yang akan membantu menentukan arah yang harus dilakukan.\r\n<br/><br/>\r\nMateri dalam buku ini merupakan materi pilihan yang didapat dari lomba Inovasi Pembelajaran antikorupsi yang diadakan oleh KPK pada tahun 2014 dengan peserta guru atau tenaga pengajar disemua jenjang level pendidikan di Indonesia. Guru dan tenaga pengajar tersebut memberikan Pembelajaran kreatif= IDE + DO IT (Induksi, Diskusi, Eksplorasi, Dokumentasi, Internalisasi, Teladan) yang dapat diterapkan di lingkungan pendidikan.\r\n<br/><br/>\r\nBuku yang berisi model-model pembelajaran antikorupsi yang inovatif dan mudah ini, diharapkan dapat menjadi salah satu sumber inspirasi dan dapat diterapkan di lingkungan sekolah atau pendidikan. Sehingga akan tercipta sumber daya manusia yang membangun nilai-nilai lingkungan sekolah yang menyenangkan dan berintegritas.', 1.2, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/99+1 Model Pembelajaran Antikorupsi/99+1 Model Pembelajaran Antikorupsi.pdf', '99+1 Model Pembelajaran Antikorupsi-min.pdf', 'readPdfModelPembelajaranAntikorupsi', 0, 0, 1),
(32, 3, 'Pendidikan Dasar dan Menengah', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn/cover.jpg', 'Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn untuk Jenjang Pendidikan Dasar dan Menengah', 'Untuk memudahkan para Guru atau Pendidik dalam mengimplementasikan pembelajaran antikorupsi, diperlukan integrasi dengan mata pelajaran tertentu yang erat kaitannya dengan nilai-nilai antikorupsi, yaitu mata pelajaran Pendidikan Pancasila dan Kewarganegaraan (PPKn). Oleh karena itu, KPK menyusun panduan Insersi Pendidikan Antikorupsi melalui Mata Pelajaran PPKn ini sebagai pegangan bagi Guru atau Pendidik di Satuan Pendidikan Dasar dan Menengah.\r\n</br></br>\r\nPanduan ini bersifat umum untuk penguatan nilai-nilai antikorupsi di setiap jenjang pendidikan dengan pelibatan seluruh elemen agar dapat lebih memahami, menyadari, meyakini, serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah dan lingkungan. Keniscayaan akan generasi ke depan yang memiliki karakter moral sesuai nilai-nilai antikorupsi, akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan tetapi juga adanya pengkondisian yang dipraktikkan secara nyata melalui sikap dan perilaku yang baik.', 0.6, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn/Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn.pdf', 'Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn untuk Jenjang Pendidikan Dasar dan Menengah-min.pdf', 'readPdfInsersiPendidikanAntikorupsiMelaluiMataPelajaranPpknUntukJenjangPendidikanDasarDanMenengah', 0, 0, 1),
(33, 3, 'Pendidikan Dasar dan Menengah', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi SD Kelas1_3/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SD/MI Kelas 1-3', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk  Pendidikan Dasar dan Menengah: Tingkat SD/MI Kelas 1-3 dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan.\r\n</br></br>\r\nKeniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.7, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi SD Kelas1_3/Modul Penguatan Nilai Antikorupsi SD Kelas1_3.pdf', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SD _ MI Kelas 1-3-min.pdf', 'ModulPenguatanNilaiAntikorupsiSD_MIKelas1_3', 0, 0, 1),
(34, 3, 'Pendidikan Dasar dan Menengah', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi SD Kelas 4_6/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SD/MI Kelas 4-6', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk Pendidikan Dasar dan Menengah: Tingkat SD/MI Kelas 4-6 dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan.\r\n</br></br>\r\nKeniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.7, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi SD Kelas 4_6/Modul Penguatan Nilai Antikorupsi SD_Kelas 4_6.pdf', 'Modul Penguatan Nilai Antikorupsi SD_Kelas 4_6.pdf', 'ModulPenguatanNilai_NilaiAntikorupsiTingkatSD_MIKelas4_6', 0, 0, 1),
(35, 3, 'Pendidikan Dasar dan Menengah', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi Tingkat SMP/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SMP/MTS', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk Pendidikan dasar dan Menengah: Tingkat SMP/MTS dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan.\r\n</br></br>\r\nKeniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.6, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi Tingkat SMP/Modul Penguatan Nilai Antikorupsi Tingkat SMP.pdf', 'Pendidikan Dasar dan Menengah/Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SMP _ MTS-min.pdf', 'ModulPenguatanNilaiAntikorupsiTingkatSMP', 0, 0, 1),
(36, 3, 'Pendidikan Dasar dan Menengah', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi Tingkat_SMA/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SMA/MA/SMK/MAK', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk Pendidikan dasar dan Menengah: Tingkat SMA/MA/SMK/MAK dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan.\r\n</br></br>\r\nKeniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.7, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Dasar dan Menengah/Modul Penguatan Nilai Antikorupsi Tingkat_SMA/Modul Penguatan Nilai Antikorupsi Tingkat_SMA.pdf', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SMA, MA, SMK _ MAK-min.pdf', 'ModulPenguatanNilaiAntikorupsiTingkatSMA', 0, 0, 1),
(37, 3, 'Pendidikan Tinggi', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Buku Panduan Dosen Pembelajaran Pendidikan Anti Korupsi/cover.png', 'Buku Panduan Dosen: Pembelajaran Pendidikan Anti Korupsi Untuk Perguruan Tinggi', 'Buku panduan ini berisikan panduan dosen untuk mengajarkan materi-materi yang terdapat dalam buku Pendidikan Anti Korupsi. \r\n</br></br>\r\nBuku ini merupakan kebutuhan penting untuk mewujudkan tujuan dan terlaksananya mata kuliah Pendidikan Anti Korupsi di Perguruan Tinggi. ', 3.3, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Buku Panduan Dosen Pembelajaran Pendidikan Anti Korupsi/Buku Panduan Dosen Pembelajaran Pendidikan Anti Korupsi.pdf', 'Buku Panduan Dosen Pembelajaran Pendidikan Anti Korupsi Untuk Perguruan Tinggi.pdf', 'readPdfBukuPanduanDosenPembelajaranPendidikanAntiKorupsiUntukPerguruanTinggi', 0, 0, 1),
(38, 3, 'Pendidikan Tinggi', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Integrity Story/cover.png\r\n', 'Integrity Story', 'Integrity Story adalah sebuah buku yang merangkum perjalanan generasi muda khususnya mahasiswa untuk menjadi generasi muda antikorupsi. Agar perjalanan dalam terus menyerukan perlawanan terhadap korupsi terus tercatat sepanjang masa, terus dikenang dan diceritakan hingga anak-cucu, maka rekam perjalanan itu ke dalam Integrity Story. Buku ini juga berguna sebagai properti atau media tulis dalam orientasi mahasiswa baru supaya nilai-nilai antikorupsi seperti pengenalan integritas, kejujuran, keberanian dalam menyuarakan gerakan pemberantasan korupsi tertanam dalam diri mahasiswa.\r\n</br></br>\r\nBuku ini sengaja dibuat dengan konsep yang tidak biasa, karena dilandasi semangat untuk terus kreatif dan mandiri dalam bergerak.', 2.2, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Integrity Story/Integrity Story.pdf', 'Integrity Story.pdf', 'readPdfIntegrityStory', 0, 0, 1),
(39, 4, NULL, 'output_pdf/Politik/Buku Panduan Sistem Integritas Partai Politik/cover.jpg', 'Buku Panduan Sistem Integritas Partai Politik', 'Buku panduan ini disarikan dari Kertas Posisi Sistem Integritas Partai Politik (SIPP) yang disusun oleh Direktorat Pendidikan dan Pelayanan Masyarakat (Dikyanmas) KPK bekerjasama dengan Pusat Penelitian Politik Lembaga Ilmu Pengetahuan Indonesia (P2P-LIPI) sebagai media edukasi bagi partai politik (parpol) khususnya dan masyarakat luas pada umumnya dalam memahami SIPP. Implementasi SIPP diharapkan dapat menjadi acuan dalam mewujudkan politik yang berintegritas di Indonesia.\r\n</br></br>\r\nMelalui buku ini KPK berharap dapat memberikan kontribusi dalam mendorong terwujudnya sistem politik yang berintegritas di Indonesia.', 0.7, 'output_pdf/Politik/Buku Panduan Sistem Integritas Partai Politik/Buku Panduan Sistem Integritas Partai Politik.pdf', 'Buku Panduan Sistem Integritas Partai Politik.pdf', 'readpdfBukuPanduanSistemIntegritasPartaiPolitik', 0, 0, 1),
(40, 4, NULL, 'output_pdf/Politik/Kertas Posisi Sistem Integritas Partai Politik/cover.png', 'Kertas Posisi Sistem Integritas Partai Politik', 'Dalam rangka membangun dan melembagakan sistem integritas partai politik di Indonesia, naskah kertas posisi ini berusaha memberi gambaran utuh namun ringkas mengenai apa yang dimaksud dengan sistem integritas, ruang lingkup, indikator dan instrumen sistem integritas, serta langkah-langkah dan strategi yang diperlukan untuk mengimplementasikannya dalam kehidupan partai politik.\r\n</br></br>\r\nSetelah melalui diskusi, diseminasi dan masukan berharga dari para pemimpin partai politik diharapkan naskah ini dapat menjadi bahan baku bagi pembangunan sistem integritas partai politik yang pada akhirnya diimplementasikan sebagai kebijakan yang memandu sikap, perilaku dan tindakan partai politik dalam meningkatkan kualitas demokrasi dan pemerintahan di Indonesia. Harapannya, masyarakat menjadi lebih percaya politik sebagai sarana untuk mewujudkan tujuan bernegara, dengan terciptanya perpolitikan yang berintegritas.', 0.5, 'output_pdf/Politik/Kertas Posisi Sistem Integritas Partai Politik/Kertas Posisi Sistem Integritas Partai Politik.pdf', 'Kertas Posisi Sistem Integritas Partai Politik.pdf', 'readPdfKertasPosisiSistemIntegritasPartaiPolitik', 0, 0, 1),
(41, 4, NULL, 'output_pdf/Politik/Naskah Kode Etik Politisi dan Partai Politik/cover.png', 'Naskah Kode Etik Politisi dan Partai Politik', 'Buku Kode Etik Politisi dan Partai Politik  ini dibuat agar menjadi acuan bagi semua politisi dan partai politik dalam menjalankan peran dan fungsi mereka. Jika kelompok kepentingan dalam kategori organisasi asosiasional dan institusional saja memiliki kode etik, adalah suatu keniscayaan bagi parpol dan politisi juga harus memiliki pedoman etik.\r\n</br></br>\r\nRangkuman kode etik ini diperlukan agar setiap politisi dan partai politik  memiliki pegangan mengenai apa saja yang boleh dan tidak boleh, serta apa yang harus dilakukan oleh politisi dan parpol  dalam menjalankan peran dan fungsi mereka.\r\n</br></br>\r\nKode etik ini merupakan hasil ramuan dari berbagai kode etik yang telah dimiliki beberapa partai politik di Indonesia, kode etik yang dimiliki oleh organisasi/asosiasi/institusi advokad dan jurnalis Indonesia, dan kode etik parpol dan politisi yang ada di beberapa negara, seperti Inggris, Australia, Jerman, Kanada, India, dan Korea Selatan. Selain itu, naskah ini juga bersumber dari masukan kalangan akademisi, politisi, aktivis mahasiswa, birokrasi daerah, dan aktivis sosial dan politik.', 1.1, 'output_pdf/Politik/Naskah Kode Etik Politisi dan Partai Politik/Naskah Kode Etik Politisi dan Partai Politik.pdf', 'Naskah Kode Etik Politisi dan Partai Politik.pdf', 'readPdfNaskahKodeEtikPolitisiDanPartaiPolitik', 0, 0, 1),
(42, 4, NULL, 'output_pdf/Politik/Panduan Rekrutmen _ Kaderisasi Partai Politik Ideal di Indonesia/cover.png\r\n', 'Panduan Rekrutmen & Kaderisasi Partai Politik Ideal di Indonesia', 'Kita semua berharap perkembangan politik dan kepartaian di tanah air akan melahirkan politisi dan kader-kader partai yang cerdas dan berintegritas. Jangan sampai adigium bahwa politisi itu sama saja di mana-mana terus menghantui kita.\r\n</br></br>\r\nDalam rangka mendorong perbaikan organisasi partai politik ke depan yang lebih ideal penyusunan buku panduan partai politik dan kaderisasi ideal ini dilakukan dengan harapan dapat dimanfaatkan oleh setiap orang, khususnya pegiat politik, politisi, pengurus partai, dan generasi muda yang ingin menjadi kader partai politik.', 1.4, 'output_pdf/Politik/Panduan Rekrutmen _ Kaderisasi Partai Politik Ideal di Indonesia/Panduan Rekrutmen _ Kaderisasi Partai Politik Ideal di Indonesia.pdf', 'Panduan Rekrutmen _ Kaderisasi Partai Politik Ideal di Indonesia.pdf', 'readPdfPanduanRekrutmenKaderisasiPartaiPolitikIdealDiIndonesia', 0, 0, 1),
(43, 5, NULL, 'output_pdf/Umum/Buku Saku Antikorupsi untuk Pemeluk Agama Islam/cover.jpg', 'Buku Saku Antikorupsi untuk Pemeluk Agama Islam', 'Buku saku ini  berisi pasal-pasal hukum pidana dan padanan dalil hukum dari kitab suci. Buku saku kedua ini menggunakan pendekatan berbeda, yakni narasi ringan nan padat demi meningkatkan pemahaman di samping dalil-dalil Al-Quran dan Hadits Nabi Muhammad SAW yang melarang korupsi.', 1.3, 'output_pdf/Umum/Buku Saku Antikorupsi untuk Pemeluk Agama Islam/Buku Saku Antikorupsi untuk Pemeluk Agama Islam.pdf', 'Buku Saku Antikorupsi untuk Pemeluk Agama Islam.pdf', 'readPdfBukuSakuAntikorupsiUntukPemelukAgamaIslam', 0, 0, 1),
(44, 5, NULL, 'output_pdf/Umum/Buku Saku Antikorupsi untuk Pemeluk Agama Katolik/cover.jpg', 'Buku Saku Antikorupsi untuk Pemeluk Agama Katolik', 'Buku ini bukanlah uraian lengkap tentang korupsi, melainkan butir-butir pemikiran dan harapan yang lahir dari hari studi dalam Sidang Tahunan Konferensi Waligereja Indonesia tahun 2016 tentang korupsi.\r\n</br></br>\r\nKarena korupsi sebagai kejahatan sosial telah menggerogoti sendi-sendi hidup bersama, para Uskup merasa perlu untuk mengajak masyarakat untuk turut aktif dalam pencegahan dan pemberantasan korupsi serta pendidikan dan gerakan antikorupsi. Semoga semua yang dapat dilakukan sebagai sikap antikorupsi mendorong kita untuk mewujudkan iman Kristiani dengan baik dan benar, serta jujur dan tulus dalam keluarga, sekolah, tempat kerja, dan Gereja.', 0.2, 'output_pdf/Umum/Buku Saku Antikorupsi untuk Pemeluk Agama Katolik/Buku Saku Antikorupsi untuk Pemeluk Agama Katolik.pdf', 'Buku Saku Antikorupsi untuk Pemeluk Agama Katolik.pdf', 'readPdfBukuSakuAntikorupsiUntukPemelukAgamaKatolik', 0, 0, 1),
(45, 5, NULL, 'output_pdf/Umum/Jihad Nahdlatul Ulama Melawan Korupsi/cover.jpg', 'Jihad Nahdlatul Ulama Melawan Korupsi', 'Korupsi adalah tindakan memporak-porandakan keadilan. Implikasi korupsi adalah terjadinya kerusakan, terlanggarnya hak asasi manusia, pemiskinan, kehancuran tatanan kehidupan, dan sebagainya. Hal inilah yang diperangi oleh semua agama. Karena itu, agama tidak bisa dijadikan tempat berlindung para koruptor.', 1.1, 'output_pdf/Umum/Jihad Nahdlatul Ulama Melawan Korupsi/Jihad Nahdlatul Ulama Melawan Korupsi.pdf', 'Jihad Nahdlatul Ulama Melawan KorupsiJihad Nahdlatul Ulama Melawan Korupsi.pdf', 'readPdfJihadNahdlatulUlamaMelawanKorupsi', 0, 0, 1),
(46, 5, NULL, 'output_pdf/Umum/Memahami untuk Membasmi/cover.png', 'Memahami untuk Membasmi', 'Mengetahui jenis perbuatan yang bisa dikategorikan sebagai korupsi adalah upaya dini untuk mencegah agar seseorang tidak melakukan korupsi. Buku ini sengaja diterbitkan dengan tujuan agar masyarakat dapat memahami dengan lebih mudah dan lebih tepat tentang jenis korupsi sebagaimana dimaksud oleh undang-undang.\r\n</br></br>\r\nFormat penyajian berbentuk matrik unsur tindak pidana korupsi yang memuat unsur-unsur dari setiap jenis tindak pidana korupsi dimaksudkan agar masyarakat lebih mudah memahami bagaimana cara menganalisis suatu perbuatan. Tujuannya, masyarakat dapat menyimpulkan apakah perbuatan tersebut merupakan tindak pidana korupsi. Pada akhirnya, masyarakat dapat lebih mudah memahami perbuatan yang harus kita hindari, yaitu korupsi.', 0.3, 'output_pdf/Umum/Memahami untuk Membasmi/Memahami untuk Membasmi.pdf', 'Memahami untuk Membasmi.pdf', 'readPdfMemahamiUntukMembasmi', 0, 0, 1),
(47, 5, NULL, 'output_pdf/Umum/Orange Juice for Integrity/cover.png', 'Orange Juice for Integrity', 'Dalam buku ini, terurai kisah-kisah para tokoh bangsa dengan integritas tinggi tatkala dihadapkan pada pilihan antara kepentingan negara dan kepentingan pribadi atau keluarga. Ibarat jus jeruk yang demikian menyegarkan saat kita berada di gurun, seperti itu pula kisah mereka bagi kita yang hidup pada zaman penuh kasus korupsi ini.\r\n</br></br>\r\nPara tokoh yang diangkat kisahnya dalam buku ini memilih hidup sederhana bukan karena tidak mampu, bukan pula karena tidak bisa kaya. Mereka memilih opsi itu karena fokus dalam menjalankan amanat rakyat, bukan fokus memperkaya diri. Menjadi abdi negara dan rakyat bukan berarti mencari kehidupan dengan memanfaatkan kekayaan negara dan rakyat. Menoleh pada deretan tokoh yang ada di buku ini, kita patut menarik napas lega dan berbangga hati.\r\n</br></br>\r\nSetidaknya, mereka membuktikan bahwa negeri ini pernah memiliki pemimpin-pemimpin yang amanah, jujur, sederhana, dan sangat bertanggung jawab. Mereka adalah fakta bahwa bangsa kita tidaklah memiliki budaya korupsi sejak lama. Dari mereka, kita bisa optimistis, menjadi pribadi berintegritas dan amanah bukanlah kemustahilan bagi kita. Persoalannya, maukah kita meneladani jejak langkah mereka?', 5.6, 'output_pdf/Umum/Orange Juice for Integrity/Orange Juice for Integrity.pdf', 'Orange Juice for Integrity.pdf', 'readPdfOrangeJuiceForIntegrity', 0, 0, 1),
(48, 5, NULL, 'output_pdf/Umum/Pahami Dulu Baru Lawan/cover.jpg', 'Pahami Dulu Baru Lawan', 'Dalam dunia militer ada prinsip terkenal yang dalam bahasa anak mudanya kira-kira berbunyi, \"Mau menang perang! Kenali dulu siapa musuh lo.\" Seandainya perang yang kita omongin di sini adalah perang melawan korupsi, hampir bisa dipastiin kalo kita bakal kalah. Penyebabnya gampang saja, karena masih banyak orang yang nggak tau apa sebenarnya korupsi itu. Untuk ngatasin masalah itulah, buku ini dibuat.', 14.8, 'output_pdf/Umum/Pahami Dulu Baru Lawan/Pahami Dulu Baru Lawan.pdf', 'Pahami Dulu Baru Lawan.pdf', 'readPdfPahamiDuluBaruLawan', 0, 0, 1),
(49, 5, NULL, 'output_pdf/Umum/Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi/cover.png', 'Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi', 'Buku panduan ini berfungsi sebagai acuan bagi Direktorat Pendidikan dan Pelayanan Masyarakat (Dikyanmas) KPK untuk menentukan langkah-langkah yang lebih efektif dan efisien dalam upaya pelibatan komunitas untuk pencegahan korupsi melalui aksi kolaborasi komunitas, masyarakat dan pemerintah daerah. Sehingga upaya pencegahan korupsi dan penanaman semangat anti korupsi dapat terjadi secara optimal.\r\n</br></br>\r\nBuku akan terbagi ke dalam 3 bagian besar. Bagian pertama akan membahas mengenai langkah-langkah yang untuk mengidentifikasi segmen komunitas/pemerintah daerah mana yang perlu disasar oleh KPK dalam menyukseskan gerakan ini. Bagian kedua akan memaparkan mengenai strategi komunikasi apa yang harus digunakan untuk menarik segmen yang sudah ditargetkan. Sedangkan bagian ketiga akan menjelaskan program pengembangan seperti apa yang cocok untuk mengembangkan segmen agar pencegahan korupsi dapat berjalan secara maksimal.', 0.6, 'output_pdf/Umum/Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi/Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'readPdfPanduanSingkatAksiPelibatanKomunitasDalamPencegahanKorupsi', 0, 0, 1),
(50, 5, NULL, 'output_pdf/Umum/Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi/cover.png\r\n', 'Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi', 'Buku panduan ini berfungsi sebagai acuan bagi Direktorat Pendidikan dan Pelayanan Masyarakat (Dikyanmas) KPK untuk menentukan langkah-langkah yang lebih efektif dan efisien dalam upaya pelibatan komunitas untuk pencegahan korupsi melalui aksi kolaborasi komunitas, masyarakat dan pemerintah daerah. Sehingga upaya pencegahan korupsi dan penanaman semangat anti korupsi dapat terjadi secara optimal.\r\n</br></br>\r\nBuku akan terbagi ke dalam 3 bagian besar. Bagian pertama akan membahas mengenai langkah-langkah yang untuk mengidentifikasi segmen komunitas/pemerintah daerah mana yang perlu disasar oleh KPK dalam menyukseskan gerakan ini. Bagian kedua akan memaparkan mengenai strategi komunikasi apa yang harus digunakan untuk menarik segmen yang sudah ditargetkan. Sedangkan bagian ketiga akan menjelaskan program pengembangan seperti apa yang cocok untuk mengembangkan segmen agar pencegahan korupsi dapat berjalan secara maksimal.', 0.6, 'output_pdf/Umum/Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi/Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'readPanduanStrategiAksiPelibatanKomunitasDalamPencegahanKorupsi', 0, 0, 1),
(51, 5, NULL, 'output_pdf/Umum/Saujana Di Antara Pilihan/cover.jpg', 'Saujana: Di Antara Pilihan', 'Korupsi kini menjadi momok yang mengancam kesehatan mental masyarakat. Para pelaku bisa muncul darimana pun termasuk para pegawai negara. Seolah telah mafhum adanya: tindakan melawan hukum; menyalahgunaan kewenangan; kesempatan; memperkaya diri sendiri; memperkaya orang lain; dan merugikan perekonomian negara dilakukan banyak orang. Secara tidak wajar dan tidak legal, pegawai negara menyalahgunakan kepercayaan masyarakat yang dikuasakan kepada mereka demi keuntungan sepihak. Di antara kebutuhan, tekanan, kesempatan, dan rasionalisasi tinggi, semua orang bisa terjebak dalam lingkaran membudaya.\r\n</br></br>\r\nPara tokoh pegawai negara dalam antologi cerpen Saujana: Di Antara Pilihan bermotif humanis dalam berlaku. Di antara kenyataan hidup yang serba abu-abu, para tokoh: hakim; penyidik; birokrat; auditor dihadapkan untuk menentukan sikap agar menetapkan diri pada garis hitam atau putih. Sebuah potret kehidupan budaya masyarakat Indonesia yang selalu berada di antara pilihan.', 0.5, 'output_pdf/Umum/Saujana Di Antara Pilihan/Saujana Di Antara Pilihan.pdf', 'Saujana Di Antara Pilihan.pdf', 'readPdfSaujanaDiAntaraPilihan', 0, 0, 1),
(52, 5, NULL, 'output_pdf/Umum/Semua BISA ber-AKSI Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan/cover.jpg', 'Semua BISA ber-AKSI: Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan ', 'Ber-AKSI itu artinya...</br>\r\nBerantas Korupsi Tiada Henti</br>\r\nBerani Melawan Korupsi</br>\r\nBerperilaku Antikorupsi</br>\r\nBerbudaya Antikorupsi</br>\r\nBersikap Antikorupsi</br>\r\nBerpikir Antikorupsi</br>\r\n(Anda punya ide lain?)', 17.1, 'output_pdf/Umum/Semua BISA ber-AKSI Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan/Semua BISA ber-AKSI Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan.pdf', 'Semua BISA ber-AKSI Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan.pdf', 'readPdfSemuaBisaAksiPanduanMemberantasKorupsiDenganMudahDanMenyenangkan', 0, 0, 1),
(53, 5, NULL, 'output_pdf/Umum/Suara dari Kelas Kecil/cover.jpg', 'Suara dari Kelas Kecil', 'Kegiatan \'\'Teacher Supercamp 2015: Guru Menulis Antikorupsi\'\' menghasilkan 25 karya guru terpilih dari seluruh Indonesia yang sangat kaya warna dalam menyampaikan sejak dini nilai-nilai antikorupsi, seperti jujur, peduli, mandiri, disiplin, tanggung jawab, kerja keras, sederhana, berani, dan adil dengan cara yang ringan, menghibur, sarat makna, serta tidak menggurui. Nilai-nilai tersebut diterjemahkan dalam bentuk kumpulan cerpen, naskah drama, esai, puisi, dan komik strip yang bisa dimanfaatkan untuk memperkaya literasi dan pembelajaran antikorupsi denganvi segmentasi remaja. Selain itu, penggambaran dan pesan-pesan nilai-nilai antikorupsi diramu dan diinternalisasikan dalam setiap tindakan dan ucapan para tokoh, sehingga para remaja dapat lebih mudah menerima atau mencerna makna atau pesan di dalamnya.\r\n</br></br>\r\nHarapannya, buku ini dapat memperkaya khazanah dunia literasi yang saat ini telah ada dan dapat menjadi salah satu acuan bahan literasi di sekolah dalam format cerpen, komik, puisi, naskah drama, dan essai yang sarat akan nilai-nilai antikorupsi.', 3.1, 'output_pdf/Umum/Suara dari Kelas Kecil/Suara dari Kelas Kecil.pdf', 'Suara dari Kelas Kecil.pdf', 'readPdfSuaraDariKelasKecil', 0, 0, 1),
(54, 1, NULL, 'output_pdf/Anak/KOMIK KISAH KASUS DISEKOLAH/cover.jpg', 'Kisah Kasus di Sekolah', 'Korupsi berawal dari kekuasaan-kekuasaan yang mengabaikan suara hati, dan ketika suara hati diabaikan, kekacauan tejadi.\r\n</br></br>\r\nMaharani, Harley, Prio, dan Hendro beserta seluruh siswa SMP 2001 adalah korban dari kekacauan ini. Seringkali banyak jenis iuran gelap dengan kedok dana sekolah. Banyak menjadikan siswa dari golongan pas-pasan menjeit hatinya.\r\n</br></br>\r\nBekerjasama dengan pemburu koruptor, membuat kasus di sekolah semakin jelas. Tidak lain adalah ulah kepala sekolah yang bekejasama dengan antek-anteknya melakukan korupsi, kolusi, dan nepotisme tanpa pandang bulu.', 20.5, 'output_pdf/Anak/54/PDF KOMIK KISAH KASUS DISEKOLAH.pdf', 'PDF KOMIK KISAH KASUS DISEKOLAH.pdf', 'KomikKisahKasusDiSekolah', 0, 0, 1),
(55, 1, NULL, 'output_pdf/Anak/KOMIK PEMBURU KORUPTOR/cover.jpg', 'Pemburu Koruptor - Pajak Bukan Palak', 'Tara menjadi korban kekacauan yang terjadi di kantor ayahnya. Ayah Tara yang bekerja di kantor pajak diceritakan menjadi terkucil diantara teman-temannya yang korup. Ayah Tara adalah tipikal orang yang jujur, tidak korupsi dan bekerja berdasarkan aturan. Akibatnya, ayah Tara tertekan, stress.\r\n</br></br>\r\nSebagai anak yang berbakti, Tara ingin meluruskan hal ini bersama Imel. Mereka berdua bekerjasama dengan Tifa yang jenius untuk memburu para koruptor di kantor pajak.', 27.4, 'output_pdf/Anak/KOMIK PEMBURU KORUPTOR/KOMIK PEMBURU KORUPTOR.pdf', 'KOMIK PEMBURU KORUPTOR.pdf', 'KomikPemburuKoruptor', 0, 0, 1),
(56, 3, 'Pendidikan Tinggi', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Strategi Jitu Kampanye Integritas ala Mahasiswa/cover.png', 'Strategi Kampanye Integritas Ala Mahasiswa', 'Dalam beberapa tahun terakhir, Komisi Pemberantasan Korupsi (KPK) telah mengadakan Festival Integritas Kampus atau yang lebih dikenal dengan FIK. FIK merupakan wadah yang dibangun oleh KPK dalam bentuk kampanye sosial integritas dengan tujuan mengajak kamu sebagai mahasiswa untuk berperan secara aktif dalam menyebarkan nilai-nilai integritas. FIK menjadi bentuk nyata pergerakan mahasiswa dalam upaya pencegahan korupsi melalui kegiatan kampanye sosial integritas kampus yang efektif.\r\n</br></br>\r\nBuku panduan ini dibuat oleh KPK agar kampanye sosial integritas dapat dijalankan oleh kamu sebagai mahasiswa agar mampu memberikan solusi terhadap permasalahan integritas yang ada di sekitar kamu. Semoga buku ini dapat memberikan inspirasi bagi kamu untuk melakukan perubahan sosial melalu kegiatan kampanye sosial yang akan kamu lakukan bersama teman-teman kamu di lingkungan kampus.', 5.2, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Strategi Jitu Kampanye Integritas ala Mahasiswa/Strategi Jitu Kampanye Integritas ala Mahasiswa.pdf', 'Strategi Jitu Kampanye Integritas ala Mahasiswa.pdf', 'StrategiKampanyeIntegritasalaMahasiswa', 0, 0, 1),
(57, 5, NULL, 'output_pdf/Umum/Dari Gentar Menjadi Tegar/cover.png', 'Dari Gentar Menjadi Tegar', 'Kegiatan SENI INDONESIA BERKABUNG yang digagas oleh gabungan akademisi dari Universitas Sanata Dharma, Institut Seni Indonesia, Universitas Duta Wacana, Universitas Gadjah Mada, dan seniman Yogyakarta adalah serangkaian kegiatan seni beragam bidang dan seminar yang diselenggarakan untuk mengkritisi situasi sosial dan politik yang terjadi di Indonesia saat ini.\r\n</br></br>\r\nDari Gentar Menjadi Tegar, program seni ini meliputi Pameran Seni Rupa, Festival Musik, Lomba Puisi, Lomba Teater Mahasiswa, Lomba dan Pameran Poster Perjuangan, serta seminar yang dilangsungkan di beberapa kampus di Yogyakarta, yaitu Universitas Sanata Dharma, Kampus Pascasarjana Institut Seni Indonesia Yogyakarta, Fakultas Arsitektur dan Disain Universitas Duta Wacana, dan Pusat Kebudayaan Koesnadi Hardjasoemantri UGM.', 14.7, 'output_pdf/Umum/Dari Gentar Menjadi Tegar/Dari Gentar Menjadi Tegar.pdf', 'Dari Gentar Menjadi Tegar.pdf', 'DariGentarMenjadiTegar', 0, 0, 1),
(58, 5, NULL, 'output_pdf/Umum/Pantang Korupsi Sampai Mati!/cover.jpg', 'Pantang Korupsi Sampai Mati!', 'Korupsi adalah kata yang demikian akrab di telinga kita. Hampir setiap hari, kata itu muncul dalam diskusi dan berita-berita di media massa. Salah satu sebabnya tentu saja kasus-kasus korupsi yang seolah tiada henti. Apalagi sebagian melibatkan tokoh-tokoh negeri.\r\n</br></br>\r\nSebut saja beberapa menteri, pemimpin daerah, dan anggota dewan. Ini menjadi sebuah ironi karena dalam kehidupan berbangsa dan bernegara, sejatinya korupsi adalah musuh bersama. Namun faktanya, korupsi seolah tak terkendali dan malah menjadi-jadi. Alih-alih menjadi musuh, korupsi seperti sudah menjadi sahabat sejati dan kewajaran. Salah satu faktor yang membuat perlawanan  terhadap korupsi menjadi seolah tumpul adalah ketidaktahuan kita terhadap korupsi itu sendiri.\r\n</br></br>\r\nPadahal, dalam ilmu peperangan ada pepatah yang mengatakan, ketahuilah musuhmu. Dalam upaya memberikan pengetahuan yang cukup mengenai musuh bernama korupsi inilah buku ini dibuat. Melalui buku ini, berusaha menjelaskan secara gamblang namun tanpa bertele-tele tentang hal-hal yang dinyatakan oleh peraturan perundang-undangan sebagai tindak pidana korupsi. Kami berharap, dengan pemahaman yang jauh lebih baik, kita bisa berteriak lantang, \"pantang korupsi sampai mati\" dan pada akhirnya korupsi bisa dihabisi.', 53.8, 'output_pdf/Umum/Pantang Korupsi Sampai Mati!/Pantang Korupsi Sampai Mati!.pdf', 'Pantang Korupsi Sampai Mati!.pdf', 'PantangKorupsiSampaiMati', 0, 0, 1),
(59, 3, 'Pendidikan Tinggi', 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Pendidikan Anti Korupsi untuk Perguruan Tinggi/cover.jpg', 'Pendidikan Anti Korupsi untuk Perguruan Tinggi', 'Korupsi dipandang sebagai kejahatan luar biasa (extra ordinary crime) yang oleh karena itu memerlukan upaya luar biasa pula untuk memberantasnya. Upaya pemberantasan korupsi - yang terdiri dari dua bagian besar, yaitu penindakan dan pencegahan - tidak akan pernah berhasil optimal jika hanya dilakukan oleh pemerintah saja tanpa melibatkan peran serta masyarakat. Oleh karena itu tidaklah berlebihan jika mahasiswa - sebagai salah satu bagian penting dari masyarakat yang merupakan pewaris masa depan - diharapkan dapat terlibat aktif dalam upaya pemberantasan korupsi di Indonesia.\r\n</br></br>\r\nPeran aktif mahasiswa diharapkan lebih difokuskan pada upaya pencegahan korupsi dengan ikut membangun budaya antikorupsi di masyarakat. Mahasiswa diharapkan dapat berperan sebagai agen perubahan dan motor penggerak gerakan antikorupsi di masyarakat. Untuk dapat berperan aktif, mahasiswa perlu dibekali dengan pengetahuan yang cukup tentang seluk beluk korupsi dan pemberantasannya. Yang tidak kalah penting, untuk dapat berperan aktif mahasiswa harus dapat memahami dan menerapkan nilai-nilai antikorupsi dalam kehidupan sehari-hari.\r\n</br></br>\r\nBuku Ajar Pendidikan Antikorupsi ini berisikan bahan ajar dasar yang dapat dikembangkan sesuai dengan kondisi dan kebutuhan Perguruan Tinggi dan Program Studi masing-masing.', 56, 'output_pdf/Panduan Pendidikan Antikorupsi/Pendidikan Tinggi/Pendidikan Anti Korupsi untuk Perguruan Tinggi/Pendidikan Anti Korupsi untuk Perguruan Tinggi.pdf', 'Pendidikan Anti Korupsi untuk Perguruan Tinggi.pdf', 'PendidikanAnti KorupsiUntuk PerguruanTinggi', 0, 0, 1),
(60, 2, NULL, 'output_pdf/Dunia Usaha/Panduan cegah korupsi/cover.jpg', 'Panduan Cegah Korupsi Untuk Dunia Usaha', 'Berdasarkan Pasal 4 ayat (2) poin c Perma No. 13 Tahun 2016, bahwa salah satu bentuk kesalahan korporasi yang terkait dengan pertanggungjawaban pidana adalah jika korporasi tidak melakukan upaya pencegahan, mencegah dampak yang lebih besar, dan memastikan kepatuhan terhadap ketentuan hukum yang berlaku guna menghindari terjadinya tindak pidana. Oleh karenanya panduan yang berisi langkah-langkah pencegahan korupsi ini di rancang bersifat sederhana dan praktis sehingga dapat menjadi acuan dan pedoman minimum bagi korporasi yang dapat diadopsi serta dikembangkan sesuai dengan kebutuhan korporasi', 1.2, 'output_pdf/Dunia Usaha/Panduan cegah korupsi/Panduan cegah korupsi.pdf', 'Panduan cegah korupsi.pdf', 'PanduanCegahKorupsi', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(2256) NOT NULL,
  `color` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `color`) VALUES
(1, 'Ada', 'success'),
(2, 'Perbaikan', 'warning'),
(3, 'Tidak Ada', 'danger');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE `sub_kategori` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`id`, `name`) VALUES
(1, NULL),
(2, 'Pendidikan Dasar dan Menengah'),
(3, 'Pendidikan Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('kpk12345', '$2y$10$zAw6nEUq2DUk45BSzqGHH.xCVMDmedw1miqB5YX.ygy.6EV9MLhsq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
