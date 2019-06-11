-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 12:46 PM
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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'anak'),
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
(1, 1, NULL, 'pdf/Anak/1/cover.jpg', 'Bangga', 'Ini pagi yang menyenangkan bagi para lebah.\r\nHari ini, bunga-bunga bermekaran di lereng Gunung Rinjani.\r\nSemua lebah bersemangat terbang ke sana untuk mengisap madu.\r\nMereka berbaris rapi dan berlomba-lomba ke tempat tujuan.\r\nTapi, kupu-kupu datang dan menggoda ratu lebah.\r\n\r\nKatanya, ratu lebah beristirahat saja. Tidak perlu bekerja seperti yang lain.\r\nKan, sudah banyak prajurit yang bekerja. Ratu lebah menjadi bimbang.\r\nPerlukah dia bersantai-santai saja sementara yang lain bekerja?', 1.3, 'pdf/Anak/1/Bangga.pdf', 'Bangga.pdf', 'readPdfBangga', 80, 21, 1),
(9, 1, NULL, 'pdf/Anak/9/cover.png', 'Batik Rilo', 'Membatik itu asyik, lho! Ayah akan mengikuti pameran batik sebentar lagi.\r\nRilo ingin sekali membantu. Tapi, kenapa canting Rilo tidak mengeluarkan malam,ya?\r\nBerkali-kali Rilo mencoba, tidak ada jejak di atas kainnya. Mungkin Rilo harus mengganti canting.\r\n\r\nKetika Rilo menggunakan canting yang lebih besar, ups! Cantingnya tumpah!\r\nMalamnya mengotori batik yang sudah dilukis, membuat semuanya berantakan.\r\nAyah tidak akan bisa mengikuti pameran kalau semua batiknya hancur seperti ini.\r\n\r\nHaruskah Rilo mengaku?\r\nAtau dia pura-pura tidak tahu saja?', 2.1, 'pdf/Anak/9/Batik Rilo.pdf', 'Batik Rilo.pdf', 'readPdfBatikRilo', 25, 4, 1),
(10, 1, NULL, 'pdf/Anak/10/cover.jpg', 'Berani Jujur Yuk!', 'Tepung Ibu habis. Ibu perlu untuk membuat chaikue. Ken bisa bantu Ibu untuk membelikan tepung seharga Rp 45 ribu. Ibu memberi Ken uang Rp 50 ribu. Nanti kembaliannya Rp 5 ribu. \r\n\r\nSesampampainya di warung, Ken menerima kembalian lima ribu tapi berjumlah dua. Jadinya uang kembaliannya kebanyakan. Kalau gitu Ken bisa membeli es krim. Eh, tapi bolehkah begitu?', 1.3, 'pdf/Anak/10/Berani Jujur Yuk!.pdf', 'Berani Jujur Yuk!.pdf', 'readPdfBeraniJujurYuk', 17, 4, 1),
(11, 1, NULL, 'pdf/Anak/11/cover.jpg', 'Bintang untuk Dafi', 'Besok di sekolah ada ulangan. Jika ingin mendapat bintang, Dafi harus belajar dengan giat.\r\n\r\nDafi pun duduk di meja belajar, membuka buku, tapi .. .\r\nUgh, susah. Belajar itu membosankan.\r\n\r\nDafi ingin main handphone saja supaya bisa semangat belajar lagi. Main ..... main ..... main .....\r\n\r\nYa ampun, sudah terlalu malam! Dafi belum belajar sama sekali!\r\nBgaimana ini? Apakah Dafi masih bisa mendapatkan Bintang dalam ulangan besok?', 0.7, 'pdf/Anak/11/Bintang untuk Dafi.pdf', 'Bintang untuk Dafi.pdf', 'readPdfBintangUntukDafi', 11, 3, 1),
(12, 1, NULL, 'pdf/Anak/12/cover.jpg', 'Celengan Ayam', 'Azkia dan Tira ingin menabung. Mereka ingin menabung lewat celengan ayam.\r\nTapi, tidak ada celengan ayam tersedia. Katanya, Bu Tejo akan membuatnya.\r\n\r\nMemangnya bisa dibuat sendiri?\r\n\r\nTernyata bisa! Azkia dan Tira membantu Bu Tejo mencampur tanah liat,\r\nmembuat cetakan, hingga menjemur. Ternyata tidak mudah.\r\nSeperti apa sih membuat celengan ayam sendiri?\r\nKita intip Azkia dan Tira membuat celengan ayam, yuk!', 1.8, 'pdf/Anak/12/Celengan Ayam.pdf', 'Celengan Ayam.pdf', 'readPdfCelenganAyam', 4, 2, 1),
(13, 1, NULL, 'pdf/Anak/13/cover.jpg', 'Dakon', 'Ayo main Dakon bersama Ela dan Aya! Tapi, kenapa Aya menang terus, ya? Ela sebal karena dia kalah lagi kalah lagi. Main sekali lagi pun, Aya menang lagi.\r\n\r\nPasti Aya curang! Ela tidak mau main lagi.\r\n\'Kita main yang lain, bagaimana?\' tawar Aya.\r\n\r\nEla tidak mau. Kecuali ketika Aya mengajaknya bermain engklek. Dan, benar saja, ada sesuatu yang disimpan Aya selama ini, makanya Aya selalu menang. Wah, kira-kira apa itu?', 1.1, 'pdf/Anak/13/Dakon.pdf', 'Dakon.pdf', 'readPdfDakon', 3, 2, 1),
(14, 1, NULL, 'pdf/Anak/14/cover.jpg', 'Juara Kejujuran Jilid 1', 'Buku ini merupakan salah satu hasil karya peserta \'Anti-Corruption Teacher Supercamp 2016: Guru Menulis Antikorupsi\', yang penulisannya dibimbing oleh para mentor yang ahli di bidangnya. Secara detail karya yang dihasilkan peserta dari kegiatan ini berjumlah 50 buah, yaitu cerita bergambar (8 judul buku), cerpen anak (8 judul), komik (18 judul), dan naskah skenario film remaja (17 judul).', 1, 'pdf/Anak/14/Juara Kejujuran Jilid 1.pdf', 'Juara Kejujuran Jilid 1.pdf', 'readPdfJuaraKejujuranJilidSatu', 9, 2, 1),
(15, 1, NULL, 'pdf/Anak/15/cover.png', 'Juara Kejujuran Jilid 2', 'Buku ini merupakan salah satu hasil karya peserta \'Anti-Corruption Teacher Supercamp 2016: Guru Menulis Antikorupsi\', yang penulisannya dibimbing oleh para mentor yang ahli di bidangnya. Secara detail karya yang dihasilkan peserta dari kegiatan ini berjumlah 50 buah, yaitu cerita bergambar (8 judul buku), cerpen anak (8 judul), komik (18 judul), dan naskah skenario film remaja (17 judul).', 1.2, 'pdf/Anak/15/Juara Kejujuran Jilid 2.pdf', 'Juara Kejujuran Jilid 2.pdf', 'readPdfJuaraKejujuranJilidDua', 5, 1, 1),
(16, 1, NULL, 'pdf/Anak/16/cover.jpg', 'Modo Tak Mau Menari', 'Modo tak mau menari Rangkuk Alu.\r\nApakah betul karena ia sakit gigi?\r\nUntung Modo punya teman-teman yang baik.\r\nMereka tak membiarkan Modo sedih.\r\nANAK JUJUR pasti disenangi teman.', 1, 'pdf/Anak/16/Modo Tak Mau Menari.pdf', 'Modo Tak Mau Menari.pdf', 'readPdfModoTakMauMenari', 3, 1, 1),
(17, 1, NULL, 'pdf/Anak/17/cover.jpg', 'Mukena Mita', 'Mita ingin punya mukena baru. Mukena teman Mita lebih cantik.\r\nTapi, Ibu bilang mukena Mita masih bisa dipakai. Huh, Mita jadi sebal.\r\nPadahal mukena Mita kan sudah kucel, lusuh, dan kusam.\r\n\r\nPokoknya Mita mau ngambek saja!\r\n\r\nJadi, ketika Ibu memanggil, Mita mau pura-pura tidur saja.\r\nLalu, ketika Ibu keluar kamar, Mita akan kabur. Rencana bagus.\r\nMita sebaiknya main di rumah Weni. Pokoknya Mita mau ngambek saja.\r\n\r\nKira-kira, dengan begitu,\r\n\r\nMita akan mendapat mukena baru tidak ya?', 1.5, 'pdf/Anak/17/Mukena Mita.pdf', 'Mukena Mita.pdf', 'readPdfMukenaMita', 4, 2, 1),
(18, 1, NULL, 'pdf/Anak/18/cover.jpg', 'Piknik di Kumbinesia', 'Gara-gara Ayi, piknik di Kumbinesia\r\ntak lagi menyenangkan. Ini tidak bisa dibiarkan.\r\nAyi harus diingatkan Apa yang dilakukan teman-teman\r\n\r\nAyi untuk membuatnya jera?', 0.9, 'pdf/Anak/18/Piknik di Kumbinesia.pdf', 'Piknik di Kumbinesia.pdf', 'readPdfPiknikDiKumbinesia', 2, 1, 1),
(19, 1, NULL, 'pdf/Anak/19/cover.jpg', 'Si Empunya Telur', 'Kisah tentang seekor bebek putih dan ayam hutan yang kandangnya berdekatan.\r\n\r\nAta, si ayam hutan, hanya bisa bertelur enam butir saja.\r\nSementara Betih, si bebek putih, bisa bertelur sampai sembilan.\r\nAta ingin sekali seperti Betih. Memiliki telur yang banyaaak ...!\r\n\r\nMeski iri, Ata dan Betih berteman baik. Mereka sering mencari makan bersama.\r\nSampai suatu hari, kandang mereka disenggol anak-anak pesepeda.\r\n\r\nTelur mereka sekarang bercampur.\r\n\r\nYa ampun, yang mana telurnya Ata dan mana telurnya Betih, ya?\r\n\r\nMereka harus memisahkannya segera,\r\nkarena telur-telur itu sudah mulai menetas!\r\nBisakah Ata dan Betih menyelesaikan kekacauan ini?', 0.5, 'pdf/Anak/19/Si Empunya Telur.pdf', 'Si Empunya Telur.pdf', 'readPdfSiEmpunyaTelur', 3, 2, 1),
(20, 1, NULL, 'pdf/Anak/20/cover.jpg', 'Suatu Hari di Museum Seni', 'Wah, mentimun model lukisan hilang!\r\nAyo kejar pencurinya! Dia berpindah-pindah dari\r\nsatu lukisan ke lukisan lain. Untung Kumbi dan\r\n\r\nteman-temannya cerdik.', 1.2, 'pdf/Anak/20/Suatu Hari di Museum Seni.pdf', 'Suatu Hari di Museum Seni.pdf', 'readPdfSuatuHariDiMuseumSeni', 4, 1, 1),
(21, 2, NULL, 'pdf/Dunia Usaha/21/cover.png', 'Modul Integritas Bisnis 01: Dasar Hukum Tentang Korupsi Terkait Sektor Bisnis', 'Modul Dasar Hukum Tentang Korupsi Terkait Sektor Bisnis ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar tentang konsep korupsi, jenis-jenis korupsi, dan dasar hukum tindak pidana korupsi baik berdasarkan hukum nasional maupun internasional, serta contoh-contoh kasus tindak pidana korupsi yang melibatkan sektor bisnis.', 1, 'pdf/Dunia Usaha/21/Modul Integritas Bisnis 1.pdf', 'Modul Integritas Bisnis 1 - Dasar Hukum Tentang Korupsi Terkait Sektor Bisnis.pdf', 'readPdfModulIntegritasBisnisSatuDasarHukumTentangKorupsiTerkaitSektorBisnis', 11, 6, 1),
(22, 2, NULL, 'pdf/Dunia Usaha/22/cover.png', 'Modul Integritas Bisnis 02: Praktik Korupsi Dilihat Dari Sisi Kelembagaan', 'Modul Praktik Korupsi Dilihat Dari Sisi Kelembagaan ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar tentang praktik korupsi yang melibatkan sektor bisnis/swasta dilihat dari aspek kelembagaan.', 1.1, 'pdf/Dunia Usaha/22/Modul Integritas Bisnis 2.pdf', 'Modul Integritas Bisnis 2 - Praktik Korupsi Dilihat Dari Sisi Kelembagaan.pdf', 'readPdfModulIntegritasBisnisDuaPraktikKorupsiDilihatDariSisiKelembagaan', 7, 1, 1),
(23, 2, NULL, 'pdf/Dunia Usaha/23/cover.png\r\n', 'Modul Integritas Bisnis 03: Dampak Sosial Korupsi', 'Modul Dampak Sosial Korupsi ini dibuat dengan tujuan agar masyarakat umum mampu menguraikan dengan baik dan benar tentang konsep, penyebab, perkembangan, dan dampak sosial akibat dari tindak pidana korupsi yang terjadi di Indonesia.', 0.8, 'pdf/Dunia Usaha/23/Modul Integritas Bisnis 3.pdf', 'Modul Integritas Bisnis 3 - Dampak Sosial Korupsi.pdf', 'readPdfModulIntegritasBisnisTigaDampakSosialKorupsi', 6, 2, 1),
(24, 2, NULL, 'pdf/Dunia Usaha/24/cover.png', 'Modul Integritas Bisnis 04: Cara Mencegah Korupsi Pada Korporasi: Praktik dan Strategi', 'Modul Cara Mencegah Korupsi pada Korporasi: Praktik dan Strategi ini dibuat dengan tujuan agar masyarakat umum mampu menerapkan praktik dan strategi mencegah korupsi pada korporasi.', 1, 'pdf/Dunia Usaha/24/Modul Integritas Bisnis 4.pdf', '', 'readPdfModulIntegritasBisnisEmpatCaraMencegahKorupsiPadaKorporasiPraktikDanStrategi', 3, 1, 1),
(25, 2, NULL, 'pdf/Dunia Usaha/25/cover.png', 'Modul Integritas Bisnis 05: Insentif dan Sanksi Pada Korporasi', 'Modul Insentif dan Sanksi pada Korporasi ini dibuat dengan tujuan agar masyarakat umum mampu menerapkan sistem insentif dan sanksi pada korporasi/perusahaan yang melakukan tindak pidana korupsi.', 0.3, 'pdf/Dunia Usaha/25/Modul Integritas Bisnis 5.pdf', 'Modul Integritas Bisnis 5 - Insentif dan Sanksi Pada Korporasi.pdf', 'readPdfModulIntegritasBisnisLimaInsentifDanSanksiPadaKorporasi', 5, 1, 1),
(26, 2, NULL, 'pdf/Dunia Usaha/26/cover.png', 'Modul Integritas Bisnis 06: Elemen-elemen Program Antikorupsi Bagi Korporasi', 'Modul Elemen-elemen Program Antikorupsi bagi Korporasi ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar dan melaksanakan elemen-elemen program antikorupsi baik dari sisi internal dan eksternal korporasi maupun aksi kolektif program antikorupsi yang dilakukan bersama-sama oleh korporasi.', 0.8, 'pdf/Dunia Usaha/26/Modul Integritas Bisnis 6.pdf', 'Modul Integritas Bisnis 6 - Elemen-elemen Program Antikorupsi Bagi Korporasi', 'readPdfModulIntegritasBisnisEnamElemenelemenProgramAntikorupsiBagiKorporasi', 3, 1, 1),
(27, 2, NULL, 'pdf/Dunia Usaha/27/cover.png', 'Modul Integritas Bisnis 07: Pengelolaan Konflik Kepentingan', 'Modul Pengelolaan Konflik Kepentingan ini dibuat dengan tujuan agar peserta \r\nmampu menerapkan strategi pengelolaan konflik kepentingan sebagai kunci dalam \r\nmembangun integritas korporasi.\r\n', 0.7, 'pdf/Dunia Usaha/27/Modul Integritas Bisnis 7.pdf', 'Modul Integritas Bisnis 7 - Pengelolaan Konflik Kepentingan.pdf', 'readPdfModulIntegritasBisnisTujuhPengelolaanKonflikKepentingan', 3, 2, 1),
(28, 2, NULL, 'pdf/Dunia Usaha/28/cover.png', 'Modul Integritas Bisnis 08: Managing Gift', 'Modul Managing Gift ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar serta menerapkan managing gift yang dapat meminimalisir konflik kepentingan serta resiko terjadinya korupsi pada korporasi.', 0.8, 'pdf/Dunia Usaha/28/Modul Integritas Bisnis 8.pdf', 'Modul Integritas Bisnis 8 - Managing Gift.pdf', 'readPdfModulIntegritasBisnisDelapanManagingGift', 3, 2, 1),
(29, 2, NULL, 'pdf/Dunia Usaha/29/cover.png', 'Modul Integritas Bisnis 09: Best Practice Compliance / Integrity Development', 'Modul Best Practice Compliance/Integrity Development ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar serta menerapkan best practice compliance/integrity development pada korporasi.', 0.7, 'pdf/Dunia Usaha/29/Modul Integritas Bisnis 9.pdf', 'Modul Integritas Bisnis 9 - Best Practice Compliance  Integrity Development.pdf', 'readPdfModulIntegritasBisnisSembilanBestPracticeComplianceIntegrityDevelopment', 4, 2, 1),
(30, 2, NULL, 'pdf/Dunia Usaha/30/cover.png', 'Modul Integritas Bisnis 10: Wawancara Investigatif', 'Modul Wawancara Investigatif ini dibuat dengan tujuan agar masyarakat umum mampu memahami dengan baik dan benar serta menerapkan wawancara investigatif bagi korporasi.', 0.8, 'pdf/Dunia Usaha/30/Modul Integritas Bisnis 10.pdf', 'Modul Integritas Bisnis 10 - Wawancara Investigatif.pdf', 'readPdfModulIntegritasBisnisSepuluhWawancaraInvestigatif', 5, 2, 1),
(31, 3, 'Pendidikan Dasar dan Menengah', 'pdf/Panduan Pendidikan Antikorupsi/1/31/cover.jpg', '99+1 Model Pembelajaran Antikorupsi', 'Apa yang akan terjadi dengan masa depan Indonesia jika anak-anak Indonesia tumbuh menjadi pribadi yang antikorupsi? Bagaimana cara menumbuhkan kejujuran dalam diri anak/remaja/mahasiswa? Bagaimana cara menjadikan para peserta didik menjadi Gen aksi (Generasi Antikorupsi)? Hal-hal ini menjadi sebuah mimpi yang harus diwujudkan dalam negeri ini dan kebanyakan yang berhasil mewujudkan impian tersebut adalah mereka yang memiliki visi misi kuat, ibarat sebuah kompas yang akan membantu menentukan arah yang harus dilakukan.\r\n\r\nMateri dalam buku ini merupakan materi pilihan yang didapat dari lomba Inovasi Pembelajaran antikorupsi yang diadakan oleh KPK pada tahun 2014 dengan peserta guru atau tenaga pengajar disemua jenjang level pendidikan di Indonesia. Guru dan tenaga pengajar tersebut memberikan Pembelajaran kreatif= IDE + DO IT (Induksi, Diskusi,Eksplorasi, Dokumentasi, Internalisasi, Teladan) yang dapat diterapkan di lingkungan pendidikan.\r\n\r\nBuku yang berisi model-model pembelajaran antikorupsi yang inovatif dan mudah ini, diharapkan dapat menjadi salah satu sumber inspirasi dan dapat diterapkan di lingkungan sekolah atau pendidikan. Sehingga akan tercipta sumber daya manusia yang membangun nilai-nilai lingkungan sekolah yang menyenangkan dan berintegritas.', 1.2, 'pdf/Panduan Pendidikan Antikorupsi/1/31/99+1 Model Pembelajaran Antikorupsi.pdf', '99+1 Model Pembelajaran Antikorupsi-min.pdf', 'readPdfModelPembelajaranAntikorupsi', 6, 2, 1),
(32, 3, 'Pendidikan Dasar dan Menengah', 'pdf/Panduan Pendidikan Antikorupsi/1/32/cover.jpg', 'Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn untuk Jenjang Pendidikan Dasar dan Menengah', 'Untuk memudahkan para Guru atau Pendidik dalam mengimplementasikan pembelajaran antikorupsi, diperlukan integrasi dengan mata pelajaran tertentu yang erat kaitannya dengan nilai-nilai antikorupsi, yaitu mata pelajaran Pendidikan Pancasila dan Kewarganegaraan (PPKn). Oleh karena itu, KPK menyusun panduan Insersi Pendidikan Antikorupsi melalui Mata Pelajaran PPKn ini sebagai pegangan bagi Guru atau Pendidik di Satuan Pendidikan Dasar dan Menengah. Panduan ini bersifat umum untuk penguatan nilai-nilai antikorupsi di setiap jenjang pendidikan dengan pelibatan seluruh elemen agar dapat lebih memahami, menyadari, meyakini, serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah dan lingkungan. Keniscayaan akan generasi ke depan yang memiliki karakter moral sesuai nilai-nilai antikorupsi, akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.6, 'pdf/Panduan Pendidikan Antikorupsi/1/32/Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn.pdf', 'Insersi Pendidikan Antikorupsi Melalui Mata Pelajaran PPKn untuk Jenjang Pendidikan Dasar dan Menengah-min.pdf', 'readPdfInsersiPendidikanAntikorupsiMelaluiMataPelajaranPpknUntukJenjangPendidikanDasarDanMenengah', 15, 2, 1),
(33, 3, 'Pendidikan Dasar dan Menengah', 'pdf/Panduan Pendidikan Antikorupsi/1/33/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SD/MI Kelas 1-3', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk setiap level jenjang pendidikan dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan. Keniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.7, 'pdf/Panduan Pendidikan Antikorupsi/1/33/ModulPenguatanNilai_NilaiAntikorupsiSD_MI Kelas1_3.pdf', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SD _ MI Kelas 1-3-min.pdf', 'ModulPenguatanNilaiAntikorupsiSD_MIKelas1_3', 4, 0, 1),
(34, 3, 'Pendidikan Dasar dan Menengah', 'pdf/Panduan Pendidikan Antikorupsi/1/34/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SD/MI Kelas 4-6', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk setiap level jenjang pendidikan dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan. Keniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.7, 'pdf/Panduan Pendidikan Antikorupsi/1/34/Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SD _ MI Kelas 4-6.pdf', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SD _ MI Kelas 4-6-min.pdf', 'ModulPenguatanNilai_NilaiAntikorupsiTingkatSD_MIKelas4_6', 3, 0, 1),
(35, 3, 'Pendidikan Dasar dan Menengah', 'pdf/Panduan Pendidikan Antikorupsi/1/35/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SMP/MTS', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk setiap level jenjang pendidikan dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan. Keniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.6, 'pdf/Panduan Pendidikan Antikorupsi/1/35/Modul Penguatan Nilai Antikorupsi Tingkat SMP.pdf', 'Pendidikan Dasar dan Menengah/Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SMP _ MTS-min.pdf', 'ModulPenguatanNilaiAntikorupsiTingkatSMP', 13, 2, 1),
(36, 3, 'Pendidikan Dasar dan Menengah', 'pdf/Panduan Pendidikan Antikorupsi/1/36/cover.png', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah: Tingkat SMA/MA/SMK/MAK', 'Modul ini disusun dengan tujuan sebagai proses pembelajaran dalam penguatan nilai-nilai antikorupsi untuk setiap level jenjang pendidikan dengan pelibatan dari seluruh elemen agar lebih dapat memahami, menyadari dan menyakini serta mengaktualisasikan pendidikan antikorupsi dari ruang kelas, sekolah, rumah, serta lingkungan. Keniscayaan akan generasi ke depan akan mempunyai karakter moral yang antikorupsi akan terwujud jika dalam setiap proses pembelajaran tidak hanya mengajarkan akan tetapi juga adanya pengkondisian yang dipraktekkan secara nyata melalui sikap dan perilaku yang baik.', 0.7, 'pdf/Panduan Pendidikan Antikorupsi/1/36/Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SMA, MA, SMK _ MAK.pdf\r\n', 'Modul Penguatan Nilai-Nilai Antikorupsi pada Pendidikan dasar dan Menengah Tingkat SMA, MA, SMK _ MAK-min.pdf', 'ModulPenguatanNilaiAntikorupsiTingkatSMA', 6, 1, 1),
(37, 3, 'Pendidikan Tinggi', 'pdf/Panduan Pendidikan Antikorupsi/2/37/cover.png', 'Buku Panduan Dosen: Pembelajaran Pendidikan Anti Korupsi Untuk Perguruan Tinggi', 'Pengembangan Buku Panduan Dosen Pembelajaran Pendidikan Anti Korupsi untuk Perguruan Tinggi ini merupakan kebutuhan penting untuk mewujudkan tujuan dan terlaksananya mata kuliah Pendidikan Anti Korupsi di Perguruan Tinggi. Buku panduan bagi dosen ini pada dasarnya merupakan instrumental input bagi dosen dalam proses pembelajaran Pendidikan Anti Korupsi.\r\n\r\nBuku ini berisikan panduan dosen untuk mengajarkan materi-materi yang terdapat dalam buku Pendidikan Anti Korupsi untuk Perguruan Tinggi, yaitu: (1) Pengertian Korupsi, (2) Faktor Penyebab Korupsi, (3) Dampak Masif Korupsi, (4) Nilai dan Prinsip Anti Korupsi, (5) Upaya Pemberantasan Korupsi, (6) Gerakan, Kerjasama dan Instrumen Internasional Pencegahan Korupsi, (7) Tindak Pidana Korupsi dalam Peraturan Perundang-undangan, dan (8) Peranan Mahasiswa dalam Gerakan Anti Korupsi. Buku ini juga dilengkapi dengan Model Pembelajaran Mata Kuliah Pendidikan Anti Korupsi. Pada bagian akhir disertakan Lampiran yang terdiri dari panduan tentang pembuatan Poster dan panduan tentang Investigasi Perilaku Koruptif.', 3.3, 'pdf/Panduan Pendidikan Antikorupsi/2/37/Buku Panduan Dosen Pembelajaran Pendidikan Anti Korupsi Untuk Perguruan Tinggi.pdf', 'Buku Panduan Dosen Pembelajaran Pendidikan Anti Korupsi Untuk Perguruan Tinggi.pdf', 'readPdfBukuPanduanDosenPembelajaranPendidikanAntiKorupsiUntukPerguruanTinggi', 5, 2, 1),
(38, 3, 'Pendidikan Tinggi', 'pdf/Panduan Pendidikan Antikorupsi/2/38/cover.png\r\n', 'Integrity Story', 'Integrity Story adalah sebuah buku yang merangkum perjalanan generasi muda khususnya mahasiswa untuk menjadi generasi muda antikorupsi. Agar perjalanan dalam terus menyerukan perlawanan terhadap korupsi terus tercatat sepanjang masa, terus dikenang dan diceritakan hingga anak-cucu, maka rekam perjalanan itu ke dalam integrity story. Buku ini juga berguna sebagai properti atau media tulis dalam orientasi mahasiswa baru supaya nilai-nilai antikorupsi seperti pengenalan integritas, kejujuran, keberanian dalam menyuarakan gerakan pemberantasan korupsi tertanam dalam diri mahasiswa.\r\n\r\nBuku ini sengaja dibuat dengan konsep yang tidak biasa, karena dilandasi semangat untuk terus kreatif dan mandiri dalam bergerak. Cara menggunakan buku ini, pertama print semua halaman buku ini dari sampul hingga isinya. Jilid bukunya sesuka hati, mau jilid spiral, binding, atau jahit kawat atau apa saja. Urutkan halaman per sub bab bahasan.Lalu, siapkan peralatan tempur kamu untuk berkreasi melawan korupsi (pensil, pulpen, spidol warna, lem dan sticky note). Ikuti semua instruksinya di setiap halaman. Seperti judulnya, buku ini untuk kamu selesaikan sendiri.', 2.2, 'pdf/Panduan Pendidikan Antikorupsi/2/38/Integrity Story.pdf', 'Integrity Story.pdf', 'readPdfIntegrityStory', 5, 1, 1),
(39, 4, NULL, 'pdf/Politik/39/cover.jpg', 'Buku Panduan Sistem Integritas Partai Politik', 'Buku panduan ini disarikan dari Kertas Posisi Sistem Integritas Partai Politik (SIPP) yang disusun oleh Direktorat Pendidikan dan Pelayanan Masyarakat KPK bekerjasama dengan Pusat Penelitian Politik Lembaga Ilmu Pengetahuan Indonesia (P2P-LIPI) sebagai media edukasi bagi partai politik (parpol) khususnya dan masyarakat luas pada umumnya dalam memahami Sistem Integritas Partai Politik (SIPP). Implementasi SIPP diharapkan dapat menjadi acuan dalam mewujudkan politik yang berintegritas di Indonesia.\r\n\r\nMelalui buku ini KPK berharap dapat memberikan kontribusi dalam mendorong terwujudnya sistem politik yang berintegritas di Indonesia.', 0.7, 'pdf/Politik/39/Buku Panduan Sistem Integritas Partai Politik.pdf', 'Buku Panduan Sistem Integritas Partai Politik.pdf', 'readpdfBukuPanduanSistemIntegritasPartaiPolitik', 4, 3, 1),
(40, 4, NULL, 'pdf/Politik/40/cover.png', 'Kertas Posisi Sistem Integritas Partai Politik', 'Dalam rangka membangun dan melembagakan sistem integritas partai politik di Indonesia, naskah kertas posisi ini berusaha memberi gambaran utuh namun ringkas mengenai apa yang dimaksud dengan sistem integritas, ruang lingkup, indikator dan instrumen sistem integritas, serta langkah-langkah dan strategi yang diperlukan untuk mengimplementasikannya dalam kehidupan partai politik.\r\n\r\nSetelah melalui diskusi, diseminasi dan masukan berharga dari para pemimpin partai politik diharapkan naskah ini dapat menjadi bahan baku bagi pembangunan sistem integritas partai politik yang pada akhirnya diimplementasikan sebagai kebijakan yang memandu sikap, perilaku dan tindakan partai politik dalam meningkatkan kualitas demokrasi dan pemerintahan di Indonesia. Harapannya, masyarakat menjadi lebih percaya politik sebagai sarana untuk mewujudkan tujuan bernegara, dengan terciptanya perpolitikan yang berintegritas.', 0.5, 'pdf/Politik/40/Kertas Posisi Sistem Integritas Partai Politik.pdf', 'Kertas Posisi Sistem Integritas Partai Politik.pdf', 'readPdfKertasPosisiSistemIntegritasPartaiPolitik', 7, 1, 1),
(41, 4, NULL, 'pdf/Politik/41/cover.png', 'Naskah Kode Etik Politisi dan Partai Politik', 'Buku Kode Etik Partai Politik dan Politisi ini dibuat agar menjadi acuan bagi semua partai politik dan politisi dalam menjalankan peran dan fungsi mereka. Jika kelompok kepentingan dalam kategori organisasi asosiasional dan institusional saja memiliki kode etik, adalah suatu keniscayaan parpol dan politisi juga harus memiliki pedoman etik.\r\n\r\nRangkuman kode etik ini diperlukan agar setiap partai politik dan politisi memiliki pegangan mengenai apa saja yang boleh dan tidak boleh, serta apa yang harus dilakukan oleh parpol dan politisi dalam menjalankan peran dan fungsi mereka. Kode etik ini merupakan hasil ramuan dari berbagai kode etik yang telah dimiliki beberapa partai politik di Indonesia, kode etik yang dimiliki oleh organisasi/asosiasi/institusi advokad dan jurnalis Indonesia, dan kode etik parpol dan politisi yang ada di beberapa negara, seperti Inggris, Australia, Jerman, Kanada, India, dan Korea Selatan. Selain itu, naskah ini juga bersumber dari masukan kalangan akademisi, politisi, aktivis mahasiswa, birokrasi daerah, dan aktivis sosial dan politik.', 1.1, 'pdf/Politik/41/Naskah Kode Etik Politisi dan Partai Politik.pdf', 'Naskah Kode Etik Politisi dan Partai Politik.pdf', 'readPdfNaskahKodeEtikPolitisiDanPartaiPolitik', 8, 1, 1),
(42, 4, NULL, 'pdf/Politik/42/cover.png\r\n', 'Panduan Rekrutmen & Kaderisasi Partai Politik Ideal di Indonesia', 'Kita semua berharap perkembangan politik dan kepartaian di tanah air akan melahirkan politisi dan kader-kader partai yang cerdas dan berintegritas. Jangan sampai adigium bahwa politisi itu sama saja di mana-mana terus menghantui kita.\r\n\r\nDalam rangka mendorong perbaikan organisasi partai politik ke depan yang lebih ideal penyusunan buku panduan partai politik dan kaderisasi ideal ini dilakukan dengan harapan dapat dimanfaatkan oleh setiap orang, khususnya pegiat politik, politisi, pengurus partai, dan generasi muda yang ingin menjadi kader partai politik.', 1.4, 'pdf/Politik/42/Panduan Rekrutmen _ Kaderisasi Partai Politik Ideal di Indonesia.pdf', 'Panduan Rekrutmen _ Kaderisasi Partai Politik Ideal di Indonesia.pdf', 'readPdfPanduanRekrutmenKaderisasiPartaiPolitikIdealDiIndonesia', 8, 1, 1),
(43, 5, NULL, 'pdf/Umum/43/cover.jpg', 'Buku Saku Antikorupsi untuk Pemeluk Agama Islam', 'Buku saku ini  berisi pasal-pasal hukum pidana dan padanan dalil hukum dari kitab suci. Buku saku kedua ini menggunakan pendekatan berbeda, yakni narasi ringan nan padat demi meningkatkan pemahaman di samping dalil-dalil Al-Quran dan Hadits Nabi Muhammad SAW yang melarang korupsi.', 1.3, 'pdf/Umum/43/Buku Saku Antikorupsi untuk Pemeluk Agama Islam.pdf', 'Buku Saku Antikorupsi untuk Pemeluk Agama Islam.pdf', 'readPdfBukuSakuAntikorupsiUntukPemelukAgamaIslam', 9, 3, 1),
(44, 5, NULL, 'pdf/Umum/44/cover.jpg', 'Buku Saku Antikorupsi untuk Pemeluk Agama Katolik', 'Buku ini bukanlah uraian lengkap tentang korupsi, melainkan butir-butir pemikiran dan harapan yang lahir dari hari studi dalam Sidang Tahunan Konferensi Waligereja Indonesia tahun 2016 tentang korupsi. Karena korupsi sebagai kejahatan sosial telah menggerogoti sendi-sendi hidup bersama, kami para Uskup merasa perlu untuk mengajak kita semua turut aktif dalam pencegahan dan pemberantasan korupsi serta pendidikan dan gerakan antikorupsi. Semoga semua yang dapat kita lakukan sebagai sikap antikorupsi mendorong kita untuk mewujudkan iman Kristiani dengan baik dan benar, serta jujur dan tulus dalam keluarga, sekolah, tempat kerja, dan Gereja.', 0.2, 'pdf/Umum/44/Buku Saku Antikorupsi untuk Pemeluk Agama Katolik.pdf', 'Buku Saku Antikorupsi untuk Pemeluk Agama Katolik.pdf', 'readPdfBukuSakuAntikorupsiUntukPemelukAgamaKatolik', 3, 2, 1),
(45, 5, NULL, 'pdf/Umum/45/cover.jpg', 'Jihad Nahdlatul Ulama Melawan Korupsi', 'Korupsi adalah tindakan memporak-porandakan keadilan. Implikasi korupsi adalah terjadinya kerusakan, terlanggarnya hak asasi manusia, pemiskinan, kehancuran tatanan kehidupan, dan sebagainya. Hal inilah yang diperangi oleh semua agama. Karena itu, agama tidak bisa dijadikan tempat berlindung para koruptor.', 1.1, 'pdf/Umum/45/Jihad Nahdlatul Ulama Melawan Korupsi.pdf', 'Jihad Nahdlatul Ulama Melawan KorupsiJihad Nahdlatul Ulama Melawan Korupsi.pdf', 'readPdfJihadNahdlatulUlamaMelawanKorupsi', 6, 1, 1),
(46, 5, NULL, 'pdf/Umum/46/cover.png', 'Memahami untuk Membasmi', 'Mengetahui bentuk/jenis perbuatan yang bisa dikategorikan sebagai korupsi adalah upaya dini untuk mencegah agar seseorang tidak melakukan korupsi. Buku ini sengaja dietrbitkan dengan tujuan agar masyarakat dapat memahami dengan lebih mudah dan lebih tepat tentang bentuk/jenis korupsi sebagaimana dimaksud oleh undang-undang.\r\n\r\nFormat penyajian berbentuk matrik unsur tindak pidana korupsi yang memuat unsur-unsur dari setiap bentuk/jenis tindak pidana korupsi dimaksudkan agar masyarakat lebih mudah memahami bagaimana cara menganalisa suatu eprbuatan. Tujuannya, masyarakat dapat menyimpulkan apakah perbuatan tersebut merupakan tindak pidana korupsi. Pada akhirnya, masyarakat dapat lebih mudah memahami perbuatan yang harus kita hindari, yaitu korupsi.', 0.3, 'pdf/Umum/46/Memahami untuk Membasmi.pdf', 'Memahami untuk Membasmi.pdf', 'readPdfMemahamiUntukMembasmi', 5, 0, 1),
(47, 5, NULL, 'pdf/Umum/47/cover.png', 'Orange Juice for Integrity', 'Dalam buku ini, terurai kisah-kisah para tokoh bangsa dengan integritas tinggi itu tatkala dihadapkan pada pilihan antara kepentingan negara dan kepentingan pribadi atau keluarga. Ibarat jus jeruk yang demikian menyegarkan saat kita berada di gurun, seperti itu pula kisah mereka bagi kita yang hidup pada zaman penuh kasus korupsi ini.\r\n\r\nPara tokoh yang kami angkat kisahnya dalam buku ini memilih hidup sederhana bukan karena tidak mampu, bukan pula karena tidak bisa kaya. Mereka memilih opsi itu karena fokus dalam menjalankan amanat rakyat, bukan fokus memperkaya diri. Menjadi abdi negara dan rakyat bukan berarti mencari kehidupan dengan memanfaatkan kekayaan negara dan rakyat. Menoleh pada deretan tokoh yang ada di buku ini, kita patut menarik napas lega dan berbangga hati.\r\n\r\nSetidaknya, mereka membuktikan bahwa negeri ini pernah memiliki pemimpin-pemimpin yang amanah, jujur, sederhana, dan sangat bertanggung jawab. Mereka adalah fakta bahwa bangsa kita tidaklah memiliki budaya korupsi sejak lama. Dari mereka, kita bisa optimistis, menjadi pribadi berintegritas dan amanah bukanlah kemustahilan bagi kita. Persoalannya, maukah kita meneladani jejak langkah mereka?', 5.6, 'pdf/Umum/47/Orange Juice for Integrity.pdf', 'Orange Juice for Integrity.pdf', 'readPdfOrangeJuiceForIntegrity', 4, 1, 1),
(48, 5, NULL, 'pdf/Umum/48/cover.jpg', 'Pahami Dulu Baru Lawan', 'Dalam dunia militer ada prinsip terkenal yang dalam bahasa anak mudanya kira-kira berbunyi, \"Mau menang perang! Kenali dulu siapa musuh lo.\"Seandainya perang yang kita omongin di sini adalah perang melawan korupsi, hampir bisa dipastiin kalo kita bakal kalah. Penyebabnya gampang saja, karena masih banyak orang yang nggak tau apa sebenarnya korupsi itu. Untuk ngatasin masalah itulah, buku ini dibuat.', 14.8, 'pdf/Umum/48/Pahami Dulu Baru Lawan.pdf', 'Pahami Dulu Baru Lawan.pdf', 'readPdfPahamiDuluBaruLawan', 5, 1, 1),
(49, 5, NULL, 'pdf/Umum/49/cover.png', 'Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi', 'Buku panduan ini berfungsi sebagai acuan bagi Direktorat Pendidikan dan Pelayanan Masyarakat (Dikyanmas) KPK untuk menentukan langkahlangkah yang lebih efektif dan efisien dalam upaya pelibatan komunitas untuk pencegahan korupsi melalui aksi kolaborasi komunitas, masyarakat dan pemerintah daerah. Sehingga upaya pencegahan korupsi dan penanaman semangat anti korupsi dapat terjadi secara optimal.\r\n\r\nBuku akan terbagi ke dalam 3 bagian besar. Bagian pertama akan membahas mengenai langkah-langkah yang untuk mengidentifikasi segmen komunitas/pemerintah daerah mana yang perlu disasar oleh KPK dalam menyukseskan gerakan ini. Bagian kedua akan memaparkan mengenai strategi komunikasi apa yang harus digunakan untuk menarik segmen yang sudah ditargetkan. Sedangkan bagian ketiga akan menjelaskan program pengembangan seperti apa yang cocok untuk mengembangkan segmen agar pencegahan korupsi dapat berjalan secara maksimal.\r\n\r\nDiharapkan agar buku ini ikut menyukseskan Dikyanmas dalam membawa perubahan di dalam kehidupan masyarakat Indonesia.', 0.6, 'pdf/Umum/49/Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'Panduan Singkat Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'readPdfPanduanSingkatAksiPelibatanKomunitasDalamPencegahanKorupsi', 5, 0, 1),
(50, 5, NULL, 'pdf/Umum/50/cover.png\r\n', 'Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi', 'Buku panduan ini berfungsi sebagai acuan bagi Direktorat Pendidikan dan Pelayanan Masyarakat (Dikyanmas) KPK untuk menentukan langkahlangkah yang lebih efektif dan efisien dalam upaya pelibatan komunitas untuk pencegahan korupsi melalui aksi kolaborasi komunitas, masyarakat dan pemerintah daerah. Sehingga upaya pencegahan korupsi dan penanaman semangat anti korupsi dapat terjadi secara optimal.\r\n\r\nBuku akan terbagi ke dalam 3 bagian besar. Bagian pertama akan membahas mengenai langkah-langkah yang untuk mengidentifikasi segmen komunitas/pemerintah daerah mana yang perlu disasar oleh KPK dalam menyukseskan gerakan ini. Bagian kedua akan memaparkan mengenai strategi komunikasi apa yang harus digunakan untuk menarik segmen yang sudah ditargetkan. Sedangkan bagian ketiga akan menjelaskan program pengembangan seperti apa yang cocok untuk mengembangkan segmen agar pencegahan korupsi dapat berjalan secara maksimal.\r\n\r\nDiharapkan agar buku ini ikut menyukseskan Dikyanmas dalam membawa perubahan di dalam kehidupan masyarakat Indonesia.', 0.6, 'pdf/Umum/50/Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'Panduan Strategi Aksi Pelibatan Komunitas dalam Pencegahan Korupsi.pdf', 'readPanduanStrategiAksiPelibatanKomunitasDalamPencegahanKorupsi', 4, 1, 1),
(51, 5, NULL, 'pdf/Umum/51/cover.jpg', 'Saujana: Di Antara Pilihan', 'Korupsi kini menjadi momok yang mengancam kesehatan mental masyarakat. Para pelaku bisa muncul darimana pun termasuk para pegawai negara. Seolah telah mafhum adanya: tindakan melawan hukum; menyalahgunaan kewenangan; kesempatan; memperkaya diri sendiri; memperkaya orang lain; dan merugikan perekonomian negara dilakukan banyak orang. Secara tidak wajar dan tidak legal, pegawai negara menyalahgunakan kepercayaan masyarakat yang dikuasakan kepada mereka demi keuntungan sepihak. Di antara kebutuhan, tekanan, kesempatan, dan rasionalisasi tinggi, semua orang bisa terjebak dalam lingkaran membudaya.\r\n\r\nPara tokoh pegawai negara dalam antologi cerpen Saujana: Di Antara Pilihan bermotif humanis dalam berlaku. Di antara kenyataan hidup yang serba abu-abu, para tokoh: hakim; penyidik; birokrat; auditor dihadapkan untuk menentukan sikap agar menetapkan diri pada garis hitam atau putih. Sebuah potret kehidupan budaya masyarakat Indonesia yang selalu berada di antara pilihan.', 0.5, 'pdf/Umum/51/Saujana Di Antara Pilihan.pdf', 'Saujana Di Antara Pilihan.pdf', 'readPdfSaujanaDiAntaraPilihan', 4, 1, 1),
(52, 5, NULL, 'pdf/Umum/52/cover.jpg', 'Semua BISA ber-AKSI: Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan ', 'Ber-AKSI itu artinya...\r\nBerantas Korupsi Tiada Henti,\r\nBerani Melawan Korupsi,\r\nBerperilaku Antikorupsi,\r\nBerbudaya Antikorupsi,\r\nBersikap Antikorupsi,\r\nBerpikir Antikorupsi,\r\n(Anda punya ide lain?)', 17.1, 'pdf/Umum/52/Semua BISA ber-AKSI Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan.pdf', 'Semua BISA ber-AKSI Panduan Memberantas Korupsi dengan Mudah dan Menyenangkan.pdf', 'readPdfSemuaBisaAksiPanduanMemberantasKorupsiDenganMudahDanMenyenangkan', 5, 1, 1),
(53, 5, NULL, 'pdf/Umum/53/cover.jpg', 'Suara dari Kelas Kecil', 'Kegiatan \'Teacher Supercamp 2015: Guru Menulis Antikorupsi\' menghasilkan 25 karya guru terpilih dari seluruh Indonesia yang sangat kaya warna dalam menyampaikan sejak dini nilai-nilai antikorupsi, seperti jujur, peduli, mandiri, disiplin, tanggung jawab, kerja keras, sederhana, berani, dan adil dengan cara yang ringan, menghibur, sarat makna, serta tidak menggurui. Nilai-nilai tersebut diterjemahkan dalam bentuk kumpulan cerpen, naskah drama, esai, puisi, dan komik strip yang bisa dimanfaatkan untuk memperkaya literasi dan pembelajaran antikorupsi denganvi segmentasi remaja. Selain itu, penggambaran dan pesan-pesan nilai-nilai antikorupsi diramu dan diinternalisasikan dalam setiap tindakan dan ucapan para tokoh, sehingga para remaja dapat lebih mudah menerima atau mencerna makna atau pesan di dalamnya.\r\n\r\nHarapannya, buku ini dapat memperkaya khazanah dunia literasi yang saat ini telah ada dan dapat menjadi salah satu acuan bahan literasi di sekolah dalam format cerpen, komik, puisi, naskah drama, dan essai yang sarat akan nilai-nilai antikorupsi.', 3.1, 'pdf/Umum/53/Suara dari Kelas Kecil.pdf', 'Suara dari Kelas Kecil.pdf', 'readPdfSuaraDariKelasKecil', 5, 1, 1),
(54, 1, NULL, 'pdf/Anak/54/cover.jpg', 'Kisah Kasus di Sekolah', 'Korupsi berawal dari kekuasaan-kekuasaan yang mengabaikan suara hati, dan ketika suara hati diabaikan, kekacauan tejadi.\r\n\r\nMaharani, Harley, Prio, dan Hendro beserta seluruh siswa SMP 2001 adalah korban dari kekacauan ini. Seringkali banyak jenis iuran gelap dengan kedok dana sekolah. Banyak menjadikan siswa dari golongan pas-pasan menjeit hatinya.\r\n\r\nBekejasama dengan pemburu koupto, membuat kasus di sekolah semakin jelas. Tidak lain adalah ulah kepala sekolah yang bekejasama dengan antek-anteknya melakukan koupsi, kolusi, dan nepotisme tanpa pandang bulu.', 20.5, 'pdf/Anak/54/PDF KOMIK KISAH KASUS DISEKOLAH.pdf', 'PDF KOMIK KISAH KASUS DISEKOLAH.pdf', 'KomikKisahKasusDiSekolah', 12, 3, 1),
(55, 1, NULL, 'pdf/Anak/55/cover.jpg', 'Pemburu Koruptor - Pajak Bukan Palak', '-', 27.4, 'pdf/Anak/55/KOMIK PEMBURU KORUPTOR.pdf', 'KOMIK PEMBURU KORUPTOR.pdf', 'KomikPemburuKoruptor', 6, 2, 1),
(56, 3, 'Pendidikan Tinggi', 'pdf/Panduan Pendidikan Antikorupsi/2/56/cover.png', 'Strategi Kampanye Integritas Ala Mahasiswa', 'Dalam beberapa tahun terakhir, Komisi Pemberantasan Korupsi (KPK) telah mengadakan Festival Integritas Kampus atau yang lebih dikenal dengan FIK. FIK merupakan wadah yang dibangun oleh KPK dalam bentuk kampanye sosial integritas dengan tujuan mengajak kamu sebagai mahasiswa untuk berperan secara aktif dalam menyebarkan nilai-nilai integritas. FIK menjadi bentuk nyata pergerakan mahasiswa dalam upaya pencegahan korupsi melalui kegiatan kampanye sosial integritas kampus yang efektif.\r\n\r\nBuku panduan ini dibuat oleh KPK agar kampanye sosial integritas dapat dijalankan oleh kamu sebagai mahasiswa agar mampu memberikan solusi terhadap permasalahan integritas yang ada di sekitar kamu. Semoga buku ini dapat memberikan inspirasi bagi kamu untuk melakukan perubahan sosial melalu kegiatan kampanye sosial yang akan kamu lakukan bersama teman-teman kamu di lingkungan kampus.', 5.2, 'pdf/Panduan Pendidikan Antikorupsi/2/56/Strategi Jitu Kampanye Integritas ala Mahasiswa.pdf', 'Strategi Jitu Kampanye Integritas ala Mahasiswa.pdf', 'StrategiKampanyeIntegritasalaMahasiswa', 3, 1, 1),
(57, 5, NULL, 'pdf/Umum/57/cover.png', 'Dari Gentar Menjadi Tegar', 'Kegiatan SENI INDONESIA BERKABUNG yang digagas oleh gabungan akademisi dari Universitas Sanata Dharma, Institut Seni Indonesia, Universitas Duta Wacana, Universitas Gadjah Mada, dan seniman Yogyakarta adalah serangkaian kegiatan seni beragam bidang dan seminar yang diselenggarakan untuk mengkritisi situasi sosial dan politik yang terjadi di Indonesia saat ini.\r\n\r\nDari Gentar Menjadi Tegar, program seni ini meliputi Pameran Seni Rupa, Festival Musik, Lomba Puisi, Lomba Teater Mahasiswa, Lomba dan Pameran Poster Perjuangan, serta seminar yang dilangsungkan di beberapa kampus di Yogyakarta, yaitu Universitas Sanata Dharma, Kampus Pascasarjana Institut Seni Indonesia Yogyakarta, Fakultas Arsitektur dan Disain Universitas Duta Wacana, dan Pusat Kebudayaan Koesnadi Hardjasoemantri UGM.', 14.7, 'pdf/Umum/57/Dari Gentar Menjadi Tegar.pdf', 'Dari Gentar Menjadi Tegar.pdf', 'DariGentarMenjadiTegar', 7, 0, 1),
(58, 5, NULL, 'pdf/Umum/58/cover.jpg', 'Pantang Korupsi Sampai Mati!', 'Korupsi adalah kata yang demikian akrab di telinga kita. Hampir setiap hari, kata itu muncul dalam diskusi dan berita-berita di media massa. Salah satu sebabnya tentu saja kasus-kasus korupsi yang seolah tiada henti. Apalagi sebagian melibatkan tokoh-tokoh negeri.\r\n\r\nSebut saja beberapa menteri, pemimpin daerah, dan anggota dewan. Ini menjadi sebuah ironi karena dalam kehidupan berbangsa dan bernegara, sejatinya korupsi adalah musuh bersama. Namun faktanya, korupsi seolah tak terkendali dan malah menjadi-jadi. Alih-alih menjadi musuh, korupsi seperti sudah menjadi sahabat sejati dan kewajaran. Salah satu faktor yang membuat perlawanan  terhadap korupsi menjadi seolah tumpul adalah ketidaktahuan kita terhadap korupsi itu sendiri.\r\n\r\nPadahal, dalam ilmu peperangan ada pepatah yang mengatakan, ketahuilah musuhmu. Dalam upaya memberikan pengetahuan yang cukup mengenai musuh bernama korupsi inilah buku ini dibuat. Melalui buku ini, berusaha menjelaskan secara gamblang namun tanpa bertele-tele tentang hal-hal yang dinyatakan oleh peraturan perundang-undangan sebagai tindak pidana korupsi. Kami berharap, dengan pemahaman yang jauh lebih baik, kita bisa berteriak lantang, \"pantang korupsi sampai mati\" dan pada akhirnya korupsi bisa dihabisi.\r\n\r\nDavis\r\nNamanya Davis. Meski berkepala plontos, dia bukanlah profesor yang serba tahu akan segala sesuatu. Meski ebrkumis melintang, dia pun bukan di jampang, legenda betawi yang jago berkelahi. Davis adalah representasi kemurnian hati yang sangat membenci korupsi. Dia begitu geram kepada para koruptor yang perlahan-lahan membangkrutkan negeri. Itu sebabnya dia selalu menunjukkan mimik muka yang sangat tegas.\r\n\r\nDavis selalu tergelitik untuk mengetahui hal-hal yang berkaitan dengan tindak pidana korupsi. Bukan untuk disimpan sendiri, semua informasi tentang seluk beluk tindak pidana korupsi itu dia bagikan kepada kita semua. Soal peraturan dan seluk-beluk tindak pidana korupsi, Davis adalah kamusnya.', 53.8, 'pdf/Umum/58/Pantang Korupsi Sampai Mati!.pdf', 'Pantang Korupsi Sampai Mati!.pdf', 'PantangKorupsiSampaiMati', 6, 3, 1);

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
('kpk12345', '$2y$10$HFAw5/i8ik8ZIdFRkPYkQeeGSyXb7ojC5upVBnxU1MooHdiCy3dqW');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
