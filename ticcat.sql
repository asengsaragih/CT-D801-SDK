-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Mar 2020 pada 07.00
-- Versi server: 5.7.24
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticcat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Tahun_Rilis` varchar(4) NOT NULL,
  `Jumlah_Penonton` bigint(255) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Rating` varchar(3) NOT NULL,
  `Poster` varchar(100) NOT NULL,
  `Banner` varchar(100) NOT NULL,
  `Durasi` varchar(100) NOT NULL,
  `Synopsis` varchar(5000) NOT NULL,
  `Votes` bigint(255) NOT NULL,
  `Likes` varchar(5) NOT NULL,
  `Format` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movie`
--

INSERT INTO `movie` (`id`, `Judul`, `Tahun_Rilis`, `Jumlah_Penonton`, `Genre`, `Rating`, `Poster`, `Banner`, `Durasi`, `Synopsis`, `Votes`, `Likes`, `Format`) VALUES
(1, 'Aladdin', '2019', 2899209, 'Comedy', '4.3', 'frontend/images/DaftarFilm/Aladdin.jfif', 'frontend/images/DaftarBanner/Aladdin.jpg', '1 Jam 30 Menit', 'Film Aladdin 2019 berkisah tentang seorang anak jalanan yang hidup bersama teman monyetnya yang bernama Abu, iya jatuh cinta kepada putri kerajaan yang bernama Jasmine. karena perbedaan kastah dan harta ia pun sempat mendapatkan penolakan, tidak berputus asa, aladdin pun mencari cara agar ia bisa menjadi seorang pangeran.', 8992, '76%', '2D'),
(2, 'Avengers: Endgame', '2019', 5566615, 'Sci Fi', '4.8', 'frontend/images/DaftarFilm/Avengers End Game.jfif', 'frontend/images/DaftarBanner/Avengers.jfif', '2 Jam 22 Menit', 'Marvel Studio dan Walt Disney Pictures bakal rilis Film Avengers: Endgame. Film yang menghadirkan hampir semua Avengers ini akan tayang di seluruh bioskop Tanah Air mulai 24 April 2019. Setelah peristiwa yang memusnahkan setengah dari populasi Bumi di Avengers: Infinity War (2018), kisah akan berlanjut saat Avengers yang tersisa berkumpul sekali lagi untuk melawan Thanos (Josh Brolin). Namun Kesedihan, keputusasaan dan ketidakberdayaan masih tetap menyelimuti para pahlawan super. Trailer Avengers: Endgame didominasi potret \"kehancuran\" di bumi usai Thanos memusnahkan separuh populasi dunia. Warna hitm putih mendominasi cuplikan film besutan Joe dan Anthony Russo tersebut. Dalam sinopsis Avengers: Endgame, para Avengers pun berusaha untuk memulihkan tatanan alam semesta. Avengers yang tersisa seperti Steve Rogers/Captain America (Chris Evans), Natasha Romanoff/Black Widow (Scarlett Johansson) hingga Thor (Chris Hemsworth) mendapat bantuan dari Carol Danvers/Captain Marvel (Brie Larson).', 776668, '96%', '2D'),
(3, 'Captain Marvel', '2019', 4657890, 'Sci Fi', '4.5', 'frontend/images/DaftarFilm/Captain Marvel.jfif', 'frontend/images/DaftarBanner/Captain Marvel.jfif', '2 Jam 53 Menit', 'Vers (Brie Larson) masih dihantui mimpi-mimpi buruknya. Ia tak pernah bisa tidur dengan nyenyak. Emosinya labil, sembrono dan mencoba tampil menjadi sosok yang menyenangkan. Kehidupan yang sebenarnya canggung bagi seorang wanita dengan kekuatan super yang sudah terberkarti.', 66711, '88%', '2D'),
(4, 'Charlie\'s Angels', '2019', 4773818, 'Action', '4.1', 'frontend/images/DaftarFilm/Charlie Angles.jfif', 'frontend/images/DaftarBanner/Charlie\'s Angels.jfif', '2 Jam 14 Menit', 'Kali ini, tiga wanita tersebut adalah Sabina Wilson (Kristen Stewart), Elena Houghlin (Naomi Scott) dan Jane Kano (Ella Balinska). Mereka harus menggagalkan produksi sebuah alat yang bisa membahayakan manusia.', 8818, '81%', '2D'),
(5, 'X-Men | Dark Phoenix', '2019', 3878738, 'Sci Fi', '4.4', 'frontend/images/DaftarFilm/Dark Phoenix.jfif', 'frontend/images/DaftarBanner/Dark-Phoenix.jpg', '1 Jam 48 Menit', 'Bagian perpisahan memang selalu tak menyenangkan bagi semua orang. Ada yang harus pergi dan ada yang datang.  sesuka hatinya saja. Charles Xavier (James McAvoy) tahu betul tentang hal itu. Ia mencoba menyelamatkan para mutan sebelum pergi begitu saja, karena kerap berbeda visi dari dirinya.', 990, '70%', '2D'),
(6, 'Dumbo', '2019', 2090908, 'Fantasy', '3.9', 'frontend/images/DaftarFilm/Dumbo.jfif', 'frontend/images/DaftarBanner/Dumbo.jpg', '1 Jam 33 Menit', 'Sutradara Tim Burton memang sudah terkenal cerdas dalam menciptakan film-film fantasi. Ada Charlie and the Chocolate Factory (2005), dan Alice in Wonderland (2015).', 776, '73%', '3D'),
(7, 'Frozen II', '2019', 7677774, 'Fantasy', '4.6', 'frontend/images/DaftarFilm/Frozen II.jpg', 'frontend/images/DaftarBanner/Frozen.jpg', '3 Jam 01 Menit', 'ilm ini mengisahkan kelanjutan petualangan Elsa dan Anna di hutan ajaib. Dalam trailer Frozen 2 ditampilkan sosok sosok Anna dan Elsa ketika masih anak-anak. Keduanya sedang mendengarkan sebuah dongeng tentang hutan ajaib penuh sihir yang diceritakan oleh ayah mereka. Dahulu kala hutan ajaib itu menyenangkan hingga suatu ketika tempat itu terkunci oleh sihir gelap yang membuat manusia tak lagi bisa masuk atau pun keluar dari sana. Adegan kemudian berpindah ketika sesuatu yang buruk menimpa Kerajaan Arendelle dan memaksa semua orang pergi untuk mencari perlindungan. Tak hanya itu, trailer juga menunjukkan Elsa yang sering mendengar suara-suara misterius dan tidak tahu dari mana datangnya. Elsa pun turun tangan untuk menangani segala kejadian yang terjadi. Tindakannya mengantarkan ia ke sebuah tempat jauh di utara yang diduga lokasi hutan ajaib itu berada. Dia bersama dengan Anna, Kristoff, dan Olaf berangkat menuju hutan ajaib tersebut dengan penuh rintangan badai, gelombang laut, monster dan kekuatan sihir lain yang mengancam.', 3342, '80%', '3D'),
(8, 'Hellboy 2019', '2019', 2322998, 'Action', '4.3', 'frontend/images/DaftarFilm/Hellboy.jpg', 'frontend/images/DaftarBanner/Hellboy.jpg', '2 Jam 27 Menit', 'Film Hellboy (2019) menceritakan tentang karakter Hellboy (David Harbour) yang terperangkap di antara dunia supranatural dan dunia manusia, yang akan bertempur dengan penyihir jahat untuk balas dendam. Melansir dari Lionsgate, Hellboy telah kembali dengan semangat yang membara. Hellboy akan bertemu The Blood Queen, Nimue (Milla Jovovich), seorang penyihir kuno yang berniat membalas pengkhianatan di masa lalu. Dalam pertemuannya dengan Nimue, dia terjebak dalam bentrokan antara dunia supranatural dan dunia manusia. Sekarang Hellboy sangat bersikeras untuk menghentikan Nimue tanpa harus menghancurkan Dunia. Selain Harbour dan Jovovich, masih banyak bintang-bintang besar yang membintangi film HellBoy ini, seperti Trevor Bruttenholm, ayah angkat Hellboy (Ian McShane), Alice Monaghan (Sasha Lane), Ben Daimio (Daniel Dae Kim), Lobster Johnson (Gereja Thomas Haden). Selnjutnya, penyihir tua Ganeida (Penelope Mitchell), Lady Hatton (Sophie Okonedo), penyihir kuno Merlin (Brian Gleeson), Lord Adam Glaren (Alistair Petrie), dan peran perinya Nimue, Gruagach, yang diperankan dua aktor yaitu Stephen Graham yang menjadi pengisi suara, dan Douglas Tait yang mengisi fisiknya. Setelah Hellboy 2 yang dirilis pada 2008 yang lalu, tahun ini Hellboy kembali hadir dan disutradarai oleh Neil Marshall yang juga menjadi penanggun jawab film Game Of Thrones. Film ini diangkat dari komik Hellboy yang ditulis oleh Mike Mignola. Hellboy (2019) kabarnya akan berbeda dan memiliki alur cerita yang lebih baik dibanding Hellboy 2. Hal ini dikarenakan sang penulis Mike Mignola, cukup terlibat banyak dalam penulisan cerita.', 76677, '76%', '2D'),
(9, 'Joker', '2019', 7776767, 'Action', '4.8', 'frontend/images/DaftarFilm/Joker.jfif', 'frontend/images/DaftarBanner/Joker.jpg', '2 Jam 07 Menit', 'Joker, film anti-hero dari DC tayang di bioskop-bioskop Indonesia Rabu (2/10/2019). Dalam film ini, Joker diperankan aktor Joaquin Phoenix. Dilansir Indiewire, Todd Phillips, sebagai sutradara, sejak awal menginginkan tokoh badutnya layak untuk dibenci dan tidak ada orang selain Phoenix yang pantas mendapatkan peran ini. \"Aku akan lakukan apa pun bersama Joaquin Phoenix, setiap hari dalam seminggu. Tidak ada yang seperti dia,\" kata Phillips. Joker bercerita tentang seorang pria bernama Arthur Fleck yang berjuang mencari jati diri di Kota Gotham. Fleck bekerja sebagai badut. Seperti yang dikatakan ibunya, tujuan hidupnya adalah membuat orang tertawa. Kemudian dia tampil sebagai komika pada malam hari, tetapi lelucon yang Fleck buat selalu berbalik kepadanya. Di antara serbuan tawa ejekan penontonnya, Fleck membuat keputusan jahat yang melahirkan jati dirinya sebagai Joker. Meskipun tokoh Joker berasal dari serial komik DC, Phillips mengatakan film Joker tidak akan mengikuti karakter di dalam komik.', 72625, '81%', '2D'),
(10, 'Knivves Out', '2019', 4545676, 'Mistery', '3.7', 'frontend/images/DaftarFilm/Knivves Out.jfif', 'frontend/images/DaftarBanner/Knivves Out.jfif', '2 Jam 12 Menit', 'Sebenarnya gini. Film ini cuma pengen dikomen dengan “bagus banget gilak!” Namun, itu tidak akan pernah terjadi. Jadi ya sudahlah. Mari kita mulai saja seperti apa ulasan atau review  Knive Out, satu film terbaru yang akan tayang pada bulan November 2019 ini dan tentu saja  bertabur bintang.\r\n\r\nDentingan piano dengan nada yang entahlah dimainkan Benoit Blanc (Daniel Craig) sebagai sebuah ‘pertanda’. Sementara itu di sisi yang bersebrangan satu per satu keluarga Thrombey bercerita tentang mendiang Ayahnya (Harlan Thrombey).\r\n\r\nMulai dari Linda  (Jamie Lee Curtis). Walt (Michael Shannon), Joni (Toni Colllete). Semuanya bercerita dengan semangat yang mengisahkan ‘semuanya baik-baik’ saja. Lalu, apa yang sebenarnya terjadi? Kenapa Harlan Thrombey meninggal dengan cara yang emngerikan?\r\n\r\nKenapa sampai ada Benoit Blac, detektif swasta yang tersohor datang dan mendengarkan cerita dari anak-anak yang ditinggalkan Harlan? Bagaimana nasib Marta Cabrera (Ana de Armas), perawat harian yang selalu menjaga Harlan, bahkan hingga akhir usianya. Lalu, bagaimana dengan Chris Evans? Peran apa yang ia mainkan? Hanya sebagai cucu dari keluarga Thombrey, yaitu Ransom Drysdale.\r\n\r\nBanyak karakter, banyak bintang pemerna papan atas yang tampil di film ini. Sebuah film misteri dengan paket komplit. Kenapa? Berikut alasannya.', 8878, '77%', '2D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `movie_category`
--

CREATE TABLE `movie_category` (
  `id` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Tahun_Rilis` varchar(4) NOT NULL,
  `Jumlah_Penonton` bigint(255) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Rating` varchar(3) NOT NULL,
  `Poster` varchar(100) NOT NULL,
  `Banner` varchar(100) NOT NULL,
  `Durasi` varchar(100) NOT NULL,
  `Synopsis` varchar(5000) NOT NULL,
  `Votes` bigint(255) NOT NULL,
  `Likes` varchar(5) NOT NULL,
  `Format` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movie_category`
--

INSERT INTO `movie_category` (`id`, `Judul`, `Tahun_Rilis`, `Jumlah_Penonton`, `Genre`, `Rating`, `Poster`, `Banner`, `Durasi`, `Synopsis`, `Votes`, `Likes`, `Format`) VALUES
(1, 'Aladdin', '2019', 2899209, 'Comedy', '4.3', 'frontend/images/DaftarFilm/Aladdin.jfif', 'frontend/images/DaftarBanner/Aladdin.jpg', '1 Jam 30 Menit', 'Film Aladdin 2019 berkisah tentang seorang anak jalanan yang hidup bersama teman monyetnya yang bernama Abu, iya jatuh cinta kepada putri kerajaan yang bernama Jasmine. karena perbedaan kastah dan harta ia pun sempat mendapatkan penolakan, tidak berputus asa, aladdin pun mencari cara agar ia bisa menjadi seorang pangeran.', 8992, '76%', '2D'),
(2, 'Avengers: Endgame', '2019', 5566615, 'Sci Fi', '4.8', 'frontend/images/DaftarFilm/Avengers End Game.jfif', 'frontend/images/DaftarBanner/Avengers.jfif', '2 Jam 22 Menit', 'Marvel Studio dan Walt Disney Pictures bakal rilis Film Avengers: Endgame. Film yang menghadirkan hampir semua Avengers ini akan tayang di seluruh bioskop Tanah Air mulai 24 April 2019. Setelah peristiwa yang memusnahkan setengah dari populasi Bumi di Avengers: Infinity War (2018), kisah akan berlanjut saat Avengers yang tersisa berkumpul sekali lagi untuk melawan Thanos (Josh Brolin). Namun Kesedihan, keputusasaan dan ketidakberdayaan masih tetap menyelimuti para pahlawan super. Trailer Avengers: Endgame didominasi potret \"kehancuran\" di bumi usai Thanos memusnahkan separuh populasi dunia. Warna hitm putih mendominasi cuplikan film besutan Joe dan Anthony Russo tersebut. Dalam sinopsis Avengers: Endgame, para Avengers pun berusaha untuk memulihkan tatanan alam semesta. Avengers yang tersisa seperti Steve Rogers/Captain America (Chris Evans), Natasha Romanoff/Black Widow (Scarlett Johansson) hingga Thor (Chris Hemsworth) mendapat bantuan dari Carol Danvers/Captain Marvel (Brie Larson).', 776668, '96%', '2D'),
(3, 'Captain Marvel', '2019', 4657890, 'Sci Fi', '4.5', 'frontend/images/DaftarFilm/Captain Marvel.jfif', 'frontend/images/DaftarBanner/Captain Marvel.jfif', '2 Jam 53 Menit', 'Vers (Brie Larson) masih dihantui mimpi-mimpi buruknya. Ia tak pernah bisa tidur dengan nyenyak. Emosinya labil, sembrono dan mencoba tampil menjadi sosok yang menyenangkan. Kehidupan yang sebenarnya canggung bagi seorang wanita dengan kekuatan super yang sudah terberkarti.', 66711, '88%', '2D'),
(4, 'Charlie\'s Angels', '2019', 4773818, 'Action', '4.1', 'frontend/images/DaftarFilm/Charlie Angles.jfif', 'frontend/images/DaftarBanner/Charlie\'s Angels.jfif', '2 Jam 14 Menit', 'Kali ini, tiga wanita tersebut adalah Sabina Wilson (Kristen Stewart), Elena Houghlin (Naomi Scott) dan Jane Kano (Ella Balinska). Mereka harus menggagalkan produksi sebuah alat yang bisa membahayakan manusia.', 8818, '81%', '2D'),
(5, 'X-Men | Dark Phoenix', '2019', 3878738, 'Sci Fi', '4.4', 'frontend/images/DaftarFilm/Dark Phoenix.jfif', 'frontend/images/DaftarBanner/Dark-Phoenix.jpg', '1 Jam 48 Menit', 'Bagian perpisahan memang selalu tak menyenangkan bagi semua orang. Ada yang harus pergi dan ada yang datang.  sesuka hatinya saja. Charles Xavier (James McAvoy) tahu betul tentang hal itu. Ia mencoba menyelamatkan para mutan sebelum pergi begitu saja, karena kerap berbeda visi dari dirinya.', 990, '70%', '2D'),
(6, 'Dumbo', '2019', 2090908, 'Fantasy', '3.9', 'frontend/images/DaftarFilm/Dumbo.jfif', 'frontend/images/DaftarBanner/Dumbo.jpg', '1 Jam 33 Menit', 'Sutradara Tim Burton memang sudah terkenal cerdas dalam menciptakan film-film fantasi. Ada Charlie and the Chocolate Factory (2005), dan Alice in Wonderland (2015).', 776, '73%', '3D'),
(7, 'Frozen II', '2019', 7677774, 'Fantasy', '4.6', 'frontend/images/DaftarFilm/Frozen II.jpg', 'frontend/images/DaftarBanner/Frozen.jpg', '3 Jam 01 Menit', 'ilm ini mengisahkan kelanjutan petualangan Elsa dan Anna di hutan ajaib. Dalam trailer Frozen 2 ditampilkan sosok sosok Anna dan Elsa ketika masih anak-anak. Keduanya sedang mendengarkan sebuah dongeng tentang hutan ajaib penuh sihir yang diceritakan oleh ayah mereka. Dahulu kala hutan ajaib itu menyenangkan hingga suatu ketika tempat itu terkunci oleh sihir gelap yang membuat manusia tak lagi bisa masuk atau pun keluar dari sana. Adegan kemudian berpindah ketika sesuatu yang buruk menimpa Kerajaan Arendelle dan memaksa semua orang pergi untuk mencari perlindungan. Tak hanya itu, trailer juga menunjukkan Elsa yang sering mendengar suara-suara misterius dan tidak tahu dari mana datangnya. Elsa pun turun tangan untuk menangani segala kejadian yang terjadi. Tindakannya mengantarkan ia ke sebuah tempat jauh di utara yang diduga lokasi hutan ajaib itu berada. Dia bersama dengan Anna, Kristoff, dan Olaf berangkat menuju hutan ajaib tersebut dengan penuh rintangan badai, gelombang laut, monster dan kekuatan sihir lain yang mengancam.', 3342, '80%', '3D'),
(8, 'Hellboy 2019', '2019', 2322998, 'Action', '4.3', 'frontend/images/DaftarFilm/Hellboy.jpg', 'frontend/images/DaftarBanner/Hellboy.jpg', '2 Jam 27 Menit', 'Film Hellboy (2019) menceritakan tentang karakter Hellboy (David Harbour) yang terperangkap di antara dunia supranatural dan dunia manusia, yang akan bertempur dengan penyihir jahat untuk balas dendam. Melansir dari Lionsgate, Hellboy telah kembali dengan semangat yang membara. Hellboy akan bertemu The Blood Queen, Nimue (Milla Jovovich), seorang penyihir kuno yang berniat membalas pengkhianatan di masa lalu. Dalam pertemuannya dengan Nimue, dia terjebak dalam bentrokan antara dunia supranatural dan dunia manusia. Sekarang Hellboy sangat bersikeras untuk menghentikan Nimue tanpa harus menghancurkan Dunia. Selain Harbour dan Jovovich, masih banyak bintang-bintang besar yang membintangi film HellBoy ini, seperti Trevor Bruttenholm, ayah angkat Hellboy (Ian McShane), Alice Monaghan (Sasha Lane), Ben Daimio (Daniel Dae Kim), Lobster Johnson (Gereja Thomas Haden). Selnjutnya, penyihir tua Ganeida (Penelope Mitchell), Lady Hatton (Sophie Okonedo), penyihir kuno Merlin (Brian Gleeson), Lord Adam Glaren (Alistair Petrie), dan peran perinya Nimue, Gruagach, yang diperankan dua aktor yaitu Stephen Graham yang menjadi pengisi suara, dan Douglas Tait yang mengisi fisiknya. Setelah Hellboy 2 yang dirilis pada 2008 yang lalu, tahun ini Hellboy kembali hadir dan disutradarai oleh Neil Marshall yang juga menjadi penanggun jawab film Game Of Thrones. Film ini diangkat dari komik Hellboy yang ditulis oleh Mike Mignola. Hellboy (2019) kabarnya akan berbeda dan memiliki alur cerita yang lebih baik dibanding Hellboy 2. Hal ini dikarenakan sang penulis Mike Mignola, cukup terlibat banyak dalam penulisan cerita.', 76677, '76%', '2D'),
(9, 'Joker', '2019', 7776767, 'Action', '4.8', 'frontend/images/DaftarFilm/Joker.jfif', 'frontend/images/DaftarBanner/Joker.jpg', '2 Jam 07 Menit', 'Joker, film anti-hero dari DC tayang di bioskop-bioskop Indonesia Rabu (2/10/2019). Dalam film ini, Joker diperankan aktor Joaquin Phoenix. Dilansir Indiewire, Todd Phillips, sebagai sutradara, sejak awal menginginkan tokoh badutnya layak untuk dibenci dan tidak ada orang selain Phoenix yang pantas mendapatkan peran ini. \"Aku akan lakukan apa pun bersama Joaquin Phoenix, setiap hari dalam seminggu. Tidak ada yang seperti dia,\" kata Phillips. Joker bercerita tentang seorang pria bernama Arthur Fleck yang berjuang mencari jati diri di Kota Gotham. Fleck bekerja sebagai badut. Seperti yang dikatakan ibunya, tujuan hidupnya adalah membuat orang tertawa. Kemudian dia tampil sebagai komika pada malam hari, tetapi lelucon yang Fleck buat selalu berbalik kepadanya. Di antara serbuan tawa ejekan penontonnya, Fleck membuat keputusan jahat yang melahirkan jati dirinya sebagai Joker. Meskipun tokoh Joker berasal dari serial komik DC, Phillips mengatakan film Joker tidak akan mengikuti karakter di dalam komik.', 72625, '81%', '2D'),
(10, 'Knivves Out', '2019', 4545676, 'Mistery', '3.7', 'frontend/images/DaftarFilm/Knivves Out.jfif', 'frontend/images/DaftarBanner/Knivves Out.jfif', '2 Jam 12 Menit', 'Sebenarnya gini. Film ini cuma pengen dikomen dengan “bagus banget gilak!” Namun, itu tidak akan pernah terjadi. Jadi ya sudahlah. Mari kita mulai saja seperti apa ulasan atau review  Knive Out, satu film terbaru yang akan tayang pada bulan November 2019 ini dan tentu saja  bertabur bintang.\r\n\r\nDentingan piano dengan nada yang entahlah dimainkan Benoit Blanc (Daniel Craig) sebagai sebuah ‘pertanda’. Sementara itu di sisi yang bersebrangan satu per satu keluarga Thrombey bercerita tentang mendiang Ayahnya (Harlan Thrombey).\r\n\r\nMulai dari Linda  (Jamie Lee Curtis). Walt (Michael Shannon), Joni (Toni Colllete). Semuanya bercerita dengan semangat yang mengisahkan ‘semuanya baik-baik’ saja. Lalu, apa yang sebenarnya terjadi? Kenapa Harlan Thrombey meninggal dengan cara yang emngerikan?\r\n\r\nKenapa sampai ada Benoit Blac, detektif swasta yang tersohor datang dan mendengarkan cerita dari anak-anak yang ditinggalkan Harlan? Bagaimana nasib Marta Cabrera (Ana de Armas), perawat harian yang selalu menjaga Harlan, bahkan hingga akhir usianya. Lalu, bagaimana dengan Chris Evans? Peran apa yang ia mainkan? Hanya sebagai cucu dari keluarga Thombrey, yaitu Ransom Drysdale.\r\n\r\nBanyak karakter, banyak bintang pemerna papan atas yang tampil di film ini. Sebuah film misteri dengan paket komplit. Kenapa? Berikut alasannya.', 8878, '77%', '2D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `movie_top`
--

CREATE TABLE `movie_top` (
  `id` int(11) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Tahun_Rilis` varchar(4) NOT NULL,
  `Jumlah_Penonton` bigint(255) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Rating` varchar(3) NOT NULL,
  `Poster` varchar(100) NOT NULL,
  `Banner` varchar(100) NOT NULL,
  `Durasi` varchar(100) NOT NULL,
  `Synopsis` varchar(5000) NOT NULL,
  `Votes` bigint(255) NOT NULL,
  `Likes` varchar(5) NOT NULL,
  `Format` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `movie_top`
--

INSERT INTO `movie_top` (`id`, `Judul`, `Tahun_Rilis`, `Jumlah_Penonton`, `Genre`, `Rating`, `Poster`, `Banner`, `Durasi`, `Synopsis`, `Votes`, `Likes`, `Format`) VALUES
(1, 'Aladdin', '2019', 2899209, 'Comedy', '4.3', 'frontend/images/DaftarFilm/Aladdin.jfif', 'frontend/images/DaftarBanner/Aladdin.jpg', '1 Jam 30 Menit', 'Film Aladdin 2019 berkisah tentang seorang anak jalanan yang hidup bersama teman monyetnya yang bernama Abu, iya jatuh cinta kepada putri kerajaan yang bernama Jasmine. karena perbedaan kastah dan harta ia pun sempat mendapatkan penolakan, tidak berputus asa, aladdin pun mencari cara agar ia bisa menjadi seorang pangeran.', 8992, '76%', '2D'),
(2, 'Avengers: Endgame', '2019', 5566615, 'Sci Fi', '4.8', 'frontend/images/DaftarFilm/Avengers End Game.jfif', 'frontend/images/DaftarBanner/Avengers.jfif', '2 Jam 22 Menit', 'Marvel Studio dan Walt Disney Pictures bakal rilis Film Avengers: Endgame. Film yang menghadirkan hampir semua Avengers ini akan tayang di seluruh bioskop Tanah Air mulai 24 April 2019. Setelah peristiwa yang memusnahkan setengah dari populasi Bumi di Avengers: Infinity War (2018), kisah akan berlanjut saat Avengers yang tersisa berkumpul sekali lagi untuk melawan Thanos (Josh Brolin). Namun Kesedihan, keputusasaan dan ketidakberdayaan masih tetap menyelimuti para pahlawan super. Trailer Avengers: Endgame didominasi potret \"kehancuran\" di bumi usai Thanos memusnahkan separuh populasi dunia. Warna hitm putih mendominasi cuplikan film besutan Joe dan Anthony Russo tersebut. Dalam sinopsis Avengers: Endgame, para Avengers pun berusaha untuk memulihkan tatanan alam semesta. Avengers yang tersisa seperti Steve Rogers/Captain America (Chris Evans), Natasha Romanoff/Black Widow (Scarlett Johansson) hingga Thor (Chris Hemsworth) mendapat bantuan dari Carol Danvers/Captain Marvel (Brie Larson).', 776668, '96%', '2D'),
(3, 'Captain Marvel', '2019', 4657890, 'Sci Fi', '4.5', 'frontend/images/DaftarFilm/Captain Marvel.jfif', 'frontend/images/DaftarBanner/Captain Marvel.jfif', '2 Jam 53 Menit', 'Vers (Brie Larson) masih dihantui mimpi-mimpi buruknya. Ia tak pernah bisa tidur dengan nyenyak. Emosinya labil, sembrono dan mencoba tampil menjadi sosok yang menyenangkan. Kehidupan yang sebenarnya canggung bagi seorang wanita dengan kekuatan super yang sudah terberkarti.', 66711, '88%', '2D'),
(4, 'Charlie\'s Angels', '2019', 4773818, 'Action', '4.1', 'frontend/images/DaftarFilm/Charlie Angles.jfif', 'frontend/images/DaftarBanner/Charlie\'s Angels.jfif', '2 Jam 14 Menit', 'Kali ini, tiga wanita tersebut adalah Sabina Wilson (Kristen Stewart), Elena Houghlin (Naomi Scott) dan Jane Kano (Ella Balinska). Mereka harus menggagalkan produksi sebuah alat yang bisa membahayakan manusia.', 8818, '81%', '2D'),
(5, 'X-Men | Dark Phoenix', '2019', 3878738, 'Sci Fi', '4.4', 'frontend/images/DaftarFilm/Dark Phoenix.jfif', 'frontend/images/DaftarBanner/Dark-Phoenix.jpg', '1 Jam 48 Menit', 'Bagian perpisahan memang selalu tak menyenangkan bagi semua orang. Ada yang harus pergi dan ada yang datang.  sesuka hatinya saja. Charles Xavier (James McAvoy) tahu betul tentang hal itu. Ia mencoba menyelamatkan para mutan sebelum pergi begitu saja, karena kerap berbeda visi dari dirinya.', 990, '70%', '2D'),
(6, 'Dumbo', '2019', 2090908, 'Fantasy', '3.9', 'frontend/images/DaftarFilm/Dumbo.jfif', 'frontend/images/DaftarBanner/Dumbo.jpg', '1 Jam 33 Menit', 'Sutradara Tim Burton memang sudah terkenal cerdas dalam menciptakan film-film fantasi. Ada Charlie and the Chocolate Factory (2005), dan Alice in Wonderland (2015).', 776, '73%', '3D'),
(7, 'Frozen II', '2019', 7677774, 'Fantasy', '4.6', 'frontend/images/DaftarFilm/Frozen II.jpg', 'frontend/images/DaftarBanner/Frozen.jpg', '3 Jam 01 Menit', 'ilm ini mengisahkan kelanjutan petualangan Elsa dan Anna di hutan ajaib. Dalam trailer Frozen 2 ditampilkan sosok sosok Anna dan Elsa ketika masih anak-anak. Keduanya sedang mendengarkan sebuah dongeng tentang hutan ajaib penuh sihir yang diceritakan oleh ayah mereka. Dahulu kala hutan ajaib itu menyenangkan hingga suatu ketika tempat itu terkunci oleh sihir gelap yang membuat manusia tak lagi bisa masuk atau pun keluar dari sana. Adegan kemudian berpindah ketika sesuatu yang buruk menimpa Kerajaan Arendelle dan memaksa semua orang pergi untuk mencari perlindungan. Tak hanya itu, trailer juga menunjukkan Elsa yang sering mendengar suara-suara misterius dan tidak tahu dari mana datangnya. Elsa pun turun tangan untuk menangani segala kejadian yang terjadi. Tindakannya mengantarkan ia ke sebuah tempat jauh di utara yang diduga lokasi hutan ajaib itu berada. Dia bersama dengan Anna, Kristoff, dan Olaf berangkat menuju hutan ajaib tersebut dengan penuh rintangan badai, gelombang laut, monster dan kekuatan sihir lain yang mengancam.', 3342, '80%', '3D'),
(8, 'Hellboy 2019', '2019', 2322998, 'Action', '4.3', 'frontend/images/DaftarFilm/Hellboy.jpg', 'frontend/images/DaftarBanner/Hellboy.jpg', '2 Jam 27 Menit', 'Film Hellboy (2019) menceritakan tentang karakter Hellboy (David Harbour) yang terperangkap di antara dunia supranatural dan dunia manusia, yang akan bertempur dengan penyihir jahat untuk balas dendam. Melansir dari Lionsgate, Hellboy telah kembali dengan semangat yang membara. Hellboy akan bertemu The Blood Queen, Nimue (Milla Jovovich), seorang penyihir kuno yang berniat membalas pengkhianatan di masa lalu. Dalam pertemuannya dengan Nimue, dia terjebak dalam bentrokan antara dunia supranatural dan dunia manusia. Sekarang Hellboy sangat bersikeras untuk menghentikan Nimue tanpa harus menghancurkan Dunia. Selain Harbour dan Jovovich, masih banyak bintang-bintang besar yang membintangi film HellBoy ini, seperti Trevor Bruttenholm, ayah angkat Hellboy (Ian McShane), Alice Monaghan (Sasha Lane), Ben Daimio (Daniel Dae Kim), Lobster Johnson (Gereja Thomas Haden). Selnjutnya, penyihir tua Ganeida (Penelope Mitchell), Lady Hatton (Sophie Okonedo), penyihir kuno Merlin (Brian Gleeson), Lord Adam Glaren (Alistair Petrie), dan peran perinya Nimue, Gruagach, yang diperankan dua aktor yaitu Stephen Graham yang menjadi pengisi suara, dan Douglas Tait yang mengisi fisiknya. Setelah Hellboy 2 yang dirilis pada 2008 yang lalu, tahun ini Hellboy kembali hadir dan disutradarai oleh Neil Marshall yang juga menjadi penanggun jawab film Game Of Thrones. Film ini diangkat dari komik Hellboy yang ditulis oleh Mike Mignola. Hellboy (2019) kabarnya akan berbeda dan memiliki alur cerita yang lebih baik dibanding Hellboy 2. Hal ini dikarenakan sang penulis Mike Mignola, cukup terlibat banyak dalam penulisan cerita.', 76677, '76%', '2D'),
(9, 'Joker', '2019', 7776767, 'Action', '4.8', 'frontend/images/DaftarFilm/Joker.jfif', 'frontend/images/DaftarBanner/Joker.jpg', '2 Jam 07 Menit', 'Joker, film anti-hero dari DC tayang di bioskop-bioskop Indonesia Rabu (2/10/2019). Dalam film ini, Joker diperankan aktor Joaquin Phoenix. Dilansir Indiewire, Todd Phillips, sebagai sutradara, sejak awal menginginkan tokoh badutnya layak untuk dibenci dan tidak ada orang selain Phoenix yang pantas mendapatkan peran ini. \"Aku akan lakukan apa pun bersama Joaquin Phoenix, setiap hari dalam seminggu. Tidak ada yang seperti dia,\" kata Phillips. Joker bercerita tentang seorang pria bernama Arthur Fleck yang berjuang mencari jati diri di Kota Gotham. Fleck bekerja sebagai badut. Seperti yang dikatakan ibunya, tujuan hidupnya adalah membuat orang tertawa. Kemudian dia tampil sebagai komika pada malam hari, tetapi lelucon yang Fleck buat selalu berbalik kepadanya. Di antara serbuan tawa ejekan penontonnya, Fleck membuat keputusan jahat yang melahirkan jati dirinya sebagai Joker. Meskipun tokoh Joker berasal dari serial komik DC, Phillips mengatakan film Joker tidak akan mengikuti karakter di dalam komik.', 72625, '81%', '2D'),
(10, 'Knivves Out', '2019', 4545676, 'Mistery', '3.7', 'frontend/images/DaftarFilm/Knivves Out.jfif', 'frontend/images/DaftarBanner/Knivves Out.jfif', '2 Jam 12 Menit', 'Sebenarnya gini. Film ini cuma pengen dikomen dengan “bagus banget gilak!” Namun, itu tidak akan pernah terjadi. Jadi ya sudahlah. Mari kita mulai saja seperti apa ulasan atau review  Knive Out, satu film terbaru yang akan tayang pada bulan November 2019 ini dan tentu saja  bertabur bintang.\r\n\r\nDentingan piano dengan nada yang entahlah dimainkan Benoit Blanc (Daniel Craig) sebagai sebuah ‘pertanda’. Sementara itu di sisi yang bersebrangan satu per satu keluarga Thrombey bercerita tentang mendiang Ayahnya (Harlan Thrombey).\r\n\r\nMulai dari Linda  (Jamie Lee Curtis). Walt (Michael Shannon), Joni (Toni Colllete). Semuanya bercerita dengan semangat yang mengisahkan ‘semuanya baik-baik’ saja. Lalu, apa yang sebenarnya terjadi? Kenapa Harlan Thrombey meninggal dengan cara yang emngerikan?\r\n\r\nKenapa sampai ada Benoit Blac, detektif swasta yang tersohor datang dan mendengarkan cerita dari anak-anak yang ditinggalkan Harlan? Bagaimana nasib Marta Cabrera (Ana de Armas), perawat harian yang selalu menjaga Harlan, bahkan hingga akhir usianya. Lalu, bagaimana dengan Chris Evans? Peran apa yang ia mainkan? Hanya sebagai cucu dari keluarga Thombrey, yaitu Ransom Drysdale.\r\n\r\nBanyak karakter, banyak bintang pemerna papan atas yang tampil di film ini. Sebuah film misteri dengan paket komplit. Kenapa? Berikut alasannya.', 8878, '77%', '2D');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `movie_category`
--
ALTER TABLE `movie_category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `movie_top`
--
ALTER TABLE `movie_top`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `movie_category`
--
ALTER TABLE `movie_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `movie_top`
--
ALTER TABLE `movie_top`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
