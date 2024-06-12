-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jun 2024 pada 05.01
-- Versi server: 10.4.32-MariaDB-log
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cukurucook`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE `resep` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `bahan` text NOT NULL,
  `langkah` text NOT NULL,
  `kesulitan` varchar(24) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id`, `name`, `description`, `bahan`, `langkah`, `kesulitan`, `image_url`) VALUES
(1, 'Ayam Goreng', 'Ayam goreng yang gurih dan renyah.', 'Ayam potong (dapat menggunakan bagian sayap, paha, atau dada sesuai selera)\r\nBumbu halus untuk marinasi:\r\n4 siung bawang putih, haluskan\r\n2 cm jahe, haluskan\r\n1/2 sendok teh merica bubuk\r\n1 sendok teh garam\r\n1 sendok teh gula pasir\r\n\r\nBahan untuk pelapis:\r\n100 gram tepung terigu\r\n50 gram tepung maizena (atau tepung jagung)\r\n1/2 sendok teh baking powder\r\n1 sendok teh merica bubuk\r\n1/2 sendok teh garam\r\n\r\nBahan untuk pencelup:\r\n1 butir telur, kocok lepas\r\n100 ml air es\r\nMinyak untuk menggoreng', '1. Marinasi Ayam:\r\nCampurkan bumbu halus (bawang putih, jahe, merica bubuk, garam, dan gula pasir) dalam sebuah mangkuk.\r\nLumuri ayam dengan bumbu halus ini, pastikan semua bagian ayam terbalur rata dengan bumbu. Diamkan selama minimal 30 menit (atau lebih baik semalam di dalam lemari es untuk hasil yang lebih meresap).\r\n\r\n2. Persiapan Bahan Pelapis:\r\nCampurkan tepung terigu, tepung maizena (atau tepung jagung), baking powder, merica bubuk, dan garam dalam mangkuk lain. Aduk rata hingga semua bahan tercampur.\r\n\r\n3. Pencelupan Ayam:\r\nSiapkan telur yang sudah dikocok lepas dalam sebuah mangkuk, tambahkan air es, aduk hingga tercampur rata.\r\nCelupkan ayam yang sudah dimarinasi ke dalam campuran telur, pastikan ayam terbalut telur secara merata.\r\n\r\n4. Pelapis Ayam:\r\nSetelah dicelupkan ke telur, gulingkan ayam ke dalam campuran bahan pelapis (tepung terigu, maizena, baking powder, merica bubuk, dan garam). Pastikan ayam terbalut dengan pelapis secara merata.\r\n\r\n5. Proses Penggorengan:\r\nPanaskan minyak dalam wajan atau penggorengan dengan api sedang hingga cukup panas (sekitar 160-170°C).\r\nGoreng ayam dalam minyak panas hingga kedua sisi berwarna kuning keemasan dan ayam matang sempurna. Pastikan untuk tidak membalik ayam terlalu sering agar pelapis tetap renyah.\r\nAngkat ayam dan tiriskan minyak dengan meletakkannya di atas kertas minyak atau tisu dapur.\r\n\r\n6. Penyajian:\r\nAyam goreng siap disajikan selagi hangat, bisa disajikan dengan nasi, sambal, atau saus sesuai selera.\r\n\r\n7. Tips Tambahan:\r\nPastikan minyak dalam keadaan panas yang cukup sebelum menggoreng agar ayam tidak menyerap terlalu banyak minyak.\r\nPastikan ayam sudah matang sempurna di dalamnya tanpa daging yang masih mentah.\r\nUntuk hasil yang lebih renyah, Anda bisa mengulangi proses pencelupan dan pelapisan sebelum menggoreng.', 'Mudah', 'image/resep/ayam-goreng.jpg'),
(2, 'Nasi Goreng', 'Nasi yang digoreng dengan bumbu yang nikmat.', 'Nasi putih dingin (sebaiknya nasi yang telah dimasak dan didinginkan semalam, agar lebih kering)\r\nMinyak goreng (secukupnya untuk menumis)\r\n2 siung bawang putih, cincang halus\r\n1 buah bawang merah, cincang halus\r\n100 gram daging ayam fillet, potong dadu kecil (atau bisa diganti dengan udang, daging sapi, atau sosis sesuai selera)\r\n1 butir telur\r\n1 batang daun bawang, iris halus\r\n2 sendok makan kecap manis\r\n1 sendok makan kecap asin\r\n1 sendok teh saus tiram (opsional)\r\n1/2 sendok teh garam (secukupnya, sesuai selera)\r\n1/2 sendok teh merica bubuk (secukupnya, sesuai selera)', '1. Siapkan Bahan dan Bumbu:\r\nCincang halus bawang putih dan bawang merah. Potong daging ayam (atau bahan protein lainnya) menjadi dadu kecil. Siapkan juga telur dan daun bawang yang sudah dipotong.\r\n\r\n2. Panaskan Minyak dan Tumis Bumbu:\r\nPanaskan beberapa sendok minyak goreng di wajan besar dengan api sedang. Tumis bawang putih dan bawang merah hingga harum dan berwarna keemasan.\r\n\r\n3. Masak Bahan Protein:\r\nGeser bumbu ke tepi wajan. Masukkan daging ayam (atau bahan protein pilihan lainnya) ke tengah wajan. Masak hingga daging berubah warna dan matang.\r\n\r\n4. Tambahkan Telur:\r\nPecahkan telur ke dalam wajan yang sama. Orak-arik telur dengan spatula hingga matang.\r\n\r\n5. Masukkan Nasi:\r\nMasukkan nasi putih yang sudah didinginkan ke dalam wajan. Aduk rata dengan bumbu dan bahan lainnya.\r\n\r\n6. Tambahkan Bumbu:\r\nTambahkan kecap manis, kecap asin, saus tiram (jika menggunakan), garam, dan merica bubuk. Aduk lagi hingga semua bahan tercampur rata dan nasi terasa hangat.\r\n\r\n7. Tambahkan Daun Bawang:\r\nTerakhir, tambahkan iris daun bawang ke dalam nasi goreng. Aduk sebentar hingga daun bawang layu.\r\n\r\n8. Sajikan:\r\nAngkat nasi goreng dari wajan dan sajikan di piring saji. Anda bisa menambahkan pelengkap seperti acar, kerupuk, atau irisan mentimun dan tomat sesuai selera.', 'Sedang', 'image/resep/nasi-goreng.jpg'),
(3, 'Pisang Goreng', 'Pisang yang digoreng dengan tepung.', 'Pisang raja (pisang kepok) yang sudah matang, potong-potong sesuai selera\r\nMinyak goreng secukupnya untuk menggoreng\r\nTepung terigu serbaguna secukupnya\r\nTepung beras secukupnya\r\nGaram secukupnya\r\nAir secukupnya\r\nGula pasir (opsional, untuk variasi pisang goreng manis)\r\nMentega (opsional, untuk variasi pisang goreng keju)', '1. Siapkan Bahan:\r\nPotong pisang sesuai dengan selera, baik memotong menjadi dua bagian atau memotong melintang menjadi beberapa potongan.\r\n\r\n2. Siapkan Adonan Tepung:\r\nCampurkan tepung terigu dan tepung beras dalam sebuah mangkuk.\r\nTambahkan garam secukupnya untuk memberi rasa.\r\nJika Anda ingin pisang goreng manis, tambahkan sedikit gula pasir ke dalam campuran tepung.\r\nTambahkan air sedikit demi sedikit sambil aduk rata hingga adonan menjadi kental dan tidak terlalu encer. Pastikan konsistensi adonan tepung cukup untuk melapisi pisang.\r\n\r\n3. Panaskan Minyak Goreng:\r\nPanaskan minyak goreng dalam wajan atau penggorengan dengan api sedang hingga panas. Pastikan minyak cukup untuk menggoreng pisang hingga berwarna keemasan.\r\n\r\n4. Celupkan Pisang ke Dalam Adonan:\r\nCelupkan potongan pisang ke dalam adonan tepung, pastikan pisang terbalut rata dengan adonan.\r\n\r\n5. Goreng Pisang:\r\nLetakkan pisang yang sudah terbalut adonan tepung ke dalam minyak panas. Goreng hingga kedua sisi pisang berwarna keemasan dan renyah. Pastikan membalik pisang agar matang merata.\r\n\r\n6. Angkat dan Tiriskan:\r\nAngkat pisang goreng menggunakan sutil atau penjepit, lalu tiriskan di atas kertas minyak atau tisu dapur untuk menghilangkan kelebihan minyak.\r\n\r\n7. Sajikan:\r\nPisang goreng dapat disajikan langsung sebagai camilan hangat. Anda juga bisa menambahkan topping seperti keju parut atau cokelat meleleh untuk variasi rasa.', 'Mudah', 'image/resep/pisang-goreng.jpg'),
(4, 'Sate Ayam', 'Sate ayam adalah potongan daging ayam yang ditusuk dan dipanggang.', 'Daging ayam (dada atau paha), potong dadu\r\nBambu atau tusuk sate (sebaiknya direndam air agar tidak gosong saat dipanggang)\r\nBawang putih, haluskan atau tumbuk\r\nBawang merah, haluskan atau tumbuk\r\nKetumbar bubuk\r\nLada bubuk\r\nGula merah, sisir halus\r\nGaram secukupnya\r\nKecap manis\r\nMinyak untuk menggoreng', '1. Kacang tanah sangrai, haluskan (sekitar 100-150 gram)\r\n2. Bawang putih, haluskan atau tumbuk\r\n3. Bawang merah, haluskan atau tumbuk\r\n4. Cabai merah keriting, buang bijinya, haluskan (sesuai selera pedasnya)\r\n5. Gula merah, sisir halus\r\n6. Garam secukupnya\r\n7. Air matang', 'Sedang', 'image/resep/sate-ayam.jpg'),
(5, 'Rendang', 'Rendang adalah hidangan daging sapi yang dimasak dengan rempah-rempah.', 'Daging Sapi: 1 kg, pilih bagian daging sapi yang bagus untuk dipanggang.\r\nSantan: 500 ml, santan kental.\r\nAir: 500 ml, untuk merebus daging.\r\nSerai: 2 batang, memarkan.\r\nDaun jeruk: 4 lembar.\r\nAsam kandis: 4 buah, bisa diganti dengan 1 sdm asam jawa yang dilarutkan.\r\nGaram: secukupnya, sesuai selera.\r\nGula merah: secukupnya, sesuai selera.\r\nMinyak: 3 sdm, untuk menumis.\r\nBumbu halus:\r\n    Bawang merah: 10 butir.\r\n    Bawang putih: 5 siung.\r\n    Lengkuas: 2 cm, memarkan.\r\n    Jahe: 2 cm.\r\n    Ketumbar: 1 sdm, sangrai.\r\n    Kemiri: 5 butir, sangrai.\r\n    Cabai merah: 10 buah, sesuai selera \r\n    pedas.', '1. Rebus Daging:\r\nPotong daging sapi sesuai selera, lalu rebus dalam air mendidih sampai setengah matang. Angkat daging, tiriskan dan sisihkan air rebusan.\r\n\r\n2. Tumis Bumbu Halus:\r\nPanaskan minyak dalam wajan, tumis bumbu halus (bawang merah, bawang putih, lengkuas, jahe, ketumbar, kemiri, dan cabai merah) sampai harum dan matang.\r\n\r\n3. Tambahkan Serai dan Daun Jeruk:\r\nMasukkan serai yang sudah dimemarkan dan daun jeruk ke dalam tumisan bumbu. Aduk sebentar hingga harum.\r\n\r\n4. Masukkan Daging:\r\nTambahkan daging yang sudah direbus ke dalam wajan, aduk rata dengan bumbu tumis.\r\n\r\n5. Tambahkan Santan:\r\nTuangkan santan kental ke dalam wajan, aduk perlahan. Biarkan bumbu meresap dan santan mendidih.\r\n\r\n6. Tambahkan Asam Kandis, Garam, dan Gula:\r\nMasukkan asam kandis, garam, dan gula merah secukupnya ke dalam rendang. Aduk rata dan cicipi untuk menyesuaikan rasa.\r\n\r\n7. Masak dengan Api Kecil:\r\nMasak rendang dengan api kecil hingga santan mengental dan daging empuk. Proses ini bisa memakan waktu hingga 3-4 jam untuk mendapatkan rendang yang benar-benar lezat dan berbumbu.\r\n\r\n8. Sajikan:\r\nSetelah matang, angkat rendang dan sajikan hangat bersama nasi putih atau lontong. Rendang biasanya semakin lezat jika disajikan setelah beberapa jam atau bahkan keesokan harinya.', 'Sulit', 'image/resep/rendang.jpg'),
(6, 'Gado-Gado', 'Gado-gado adalah salad sayuran dengan saus kacang.', 'Sayuran:\r\nKubis, potong kasar\r\nTauge\r\nBayam, potong kasar\r\nDaun buncis, potong-potong\r\nKangkung (opsional), potong-potong\r\n\r\nLainnya:\r\nKentang, rebus dan potong-potong (opsional)\r\nTelur, rebus dan belah dua\r\nTahu, potong-potong dan goreng\r\nTempe, potong-potong dan goreng (opsional)\r\n\r\nBahan untuk Saus Kacang:\r\nKacang tanah sangrai, haluskan atau cincang kasar\r\nBawang putih, cincang halus\r\nCabai merah, iris halus (sesuai selera, bisa ditambahkan atau dikurangi)\r\nGula merah atau gula pasir\r\nGaram\r\nAir\r\nSantan (opsional, untuk membuat saus lebih kaya rasa)\r\n\r\nPelengkap (opsional):\r\nKerupuk\r\nBawang goreng\r\nIrisan mentimun', '1. Persiapan Bahan:\r\nRebus telur hingga matang, kupas dan belah dua.\r\nRebus kentang hingga lunak, kupas dan potong-potong.\r\nPotong tahu dan tempe, goreng hingga kecokelatan dan tiriskan.\r\n\r\n2. Membuat Saus Kacang:\r\nPanaskan sedikit minyak dalam wajan, tumis bawang putih hingga harum.\r\nMasukkan kacang tanah yang sudah dihaluskan atau dicincang kasar, aduk-aduk hingga tercium aroma harum.\r\nTambahkan cabai merah, gula merah atau gula pasir, garam, dan air secukupnya.\r\nMasak saus kacang dengan api kecil hingga mengental. Jika menggunakan santan, tambahkan santan dan aduk rata. Angkat dan sisihkan.\r\n\r\n3. Menyajikan Gado-gado:\r\nSusun sayuran yang sudah dipotong dan direbus di atas piring saji atau mangkok besar.\r\nAtur potongan telur, kentang, tahu, dan tempe goreng di atas sayuran.\r\nSiram dengan saus kacang yang sudah matang.\r\nTaburi dengan bawang goreng, kerupuk, dan irisan mentimun sebagai hiasan.\r\n\r\n4. Sajikan:\r\nGado-gado siap disajikan hangat atau dingin sesuai selera. Nikmati dengan kerupuk dan bawang goreng untuk memberikan tambahan tekstur dan rasa.', 'Mudah', 'image/resep/gadogado.jpg'),
(7, 'Soto Ayam', 'Soto ayam adalah sup ayam khas Indonesia yang disajikan dengan nasi atau lontong.', 'Ayam:\r\n1 ekor ayam kampung, potong menjadi bagian-bagian kecil (dada, paha, sayap)\r\n\r\nBumbu Halus:\r\n4 siung bawang putih\r\n6 butir bawang merah\r\n2 cm jahe, kupas\r\n2 cm kunyit, kupas\r\n1/2 sdt merica butiran\r\n\r\nBahan Tambahan:\r\n2 batang serai, memarkan\r\n3 lembar daun salam\r\n3 lembar daun jeruk\r\nGaram secukupnya\r\nGula secukupnya\r\n\r\nBumbu Pelengkap:\r\nKecap manis\r\nSambal cabe rawit\r\nJeruk nipis, potong-potong\r\nBawang merah goreng\r\nSeledri, iris halus\r\n\r\nPelengkap:\r\n200 gram tauge, seduh air panas\r\n2 batang daun bawang, iris halus\r\nSoun, rendam air panas hingga lunak\r\nTelur rebus, belah dua\r\n\r\nKaldu Ayam:\r\nAir secukupnya untuk merebus ayam\r\nPenyedap rasa (opsional)', '1. Merebus Ayam:\r\nRebus ayam dalam air yang cukup hingga ayam matang dan empuk. Jika menggunakan panci biasa, rebus selama sekitar 30-40 menit dengan api sedang.\r\nSetelah matang, angkat ayam, biarkan dingin, lalu suwir-suwir dagingnya. Sisihkan kaldu ayam yang dihasilkan.\r\n\r\n2. Membuat Bumbu Halus:\r\nHaluskan bawang putih, bawang merah, jahe, kunyit, dan merica butiran dengan blender atau ulekan.\r\n\r\n3. Membuat Kuah Soto:\r\nTumis bumbu halus bersama dengan serai, daun salam, dan daun jeruk hingga harum.\r\nMasukkan suwiran ayam, aduk rata dan tumis sebentar.\r\n\r\n4. Merebus dengan Kaldu Ayam:\r\nTuangkan kaldu ayam yang telah disiapkan ke dalam tumisan bumbu dan ayam. Biarkan mendidih hingga bumbu meresap ke dalam kaldu.\r\nTambahkan garam dan gula secukupnya sesuai dengan selera.\r\n\r\n5. Menyajikan:\r\nSoto Ayam siap disajikan dengan tambahan tauge, soun, telur rebus, daun bawang, dan bahan pelengkap lainnya.\r\nSajikan dengan kecap manis, sambal cabe rawit, jeruk nipis, bawang merah goreng, dan seledri sebagai tambahan bumbu dan pelengkap.', 'Sedang', 'image/resep/soto-ayam.jpg'),
(8, 'Mie Goreng', 'Mie Goreng yang lezat dan memanjakan perut', '200 gram mie telur, rebus dan tiriskan\r\n100 gram daging ayam, potong kecil-kecil\r\n100 gram udang, kupas\r\n1 butir telur\r\n3 siung bawang putih, cincang halus\r\n2 siung bawang merah, cincang halus\r\n2 sendok makan kecap manis\r\n1 sendok makan saus tiram\r\nGaram dan merica secukupnya\r\nSayuran seperti sawi, wortel, kol, iris sesuai selera\r\nMinyak goreng untuk menumis', '1. Panaskan sedikit minyak di wajan, tumis bawang putih dan bawang merah hingga harum.\r\n2. Masukkan ayam dan udang, tumis hingga berubah warna.\r\n3. Pindahkan ke pinggir wajan, masukkan telur, buat orak-arik.\r\n4. Campurkan dengan ayam dan udang, masukkan sayuran, tumis hingga layu.\r\n5. Tambahkan mie, kecap manis, saus tiram, garam, dan merica. Aduk rata.\r\n6. Tumis hingga semua bahan tercampur rata dan mie panas.\r\n7. Sajikan segera.', 'mudah', 'image/resep/mie-goreng.jpg'),
(9, 'Nasi Uduk', 'Nasi Uduk yang sangat cocok dimakan saat sarapan', '2 gelas beras\r\n200 ml santan\r\n2 lembar daun salam\r\n1 batang serai, memarkan\r\nGaram secukupnya\r\nAir untuk memasak beras\r\n\r\nPelengkap :\r\nAyam goreng\r\nTempe orek\r\nSambal kacang\r\nIrisan mentimun\r\nBawang goreng', 'Cuci beras hingga bersih.\r\nMasak beras dengan santan, daun salam, serai, dan garam. Aduk rata.\r\nMasak hingga air hampir habis, lalu kukus beras hingga matang.\r\nSajikan nasi uduk dengan pelengkapnya.', 'mudah', 'image/resep/nasi-uduk.jpg'),
(10, 'Pecel', 'Pecel yang sangat lezat dan bergizi', 'Bahan:\r\n200 gram taoge\r\n200 gram kacang panjang, potong 4 cm\r\n200 gram bayam, petik daunnya\r\n2 buah ketimun, iris tipis\r\n1 buah tahu, goreng dan potong-potong\r\n\r\nBumbu Pecel:\r\n250 gram kacang tanah goreng\r\n5 buah cabai merah\r\n3 siung bawang putih\r\n1 sendok makan gula merah\r\n1 sendok teh asam jawa\r\nGaram secukupnya\r\nAir secukupnya', '1. Rebus taoge, kacang panjang, dan bayam hingga matang, tiriskan.\r\n2. Haluskan kacang tanah, cabai merah, bawang putih, gula merah, asam jawa, dan garam.\r\n3. Tambahkan air hingga mencapai kekentalan yang diinginkan.\r\n4. Sajikan sayuran dengan bumbu pecel dan tahu goreng.', 'mudah', 'image/resep/pecel.jpg'),
(11, 'Bakso', 'Bakso yang dibuat dengan daging sapi', 'Bahan Bakso:\r\n500 gram daging sapi giling\r\n100 gram tepung sagu\r\n2 butir telur\r\n3 siung bawang putih, haluskan\r\n1 sendok teh garam\r\n1/2 sendok teh merica\r\nAir es secukupnya\r\n\r\nKuah:\r\n2 liter air\r\n500 gram tulang sapi\r\n3 siung bawang putih, haluskan\r\n1 sendok teh garam\r\n1/2 sendok teh merica\r\n\r\nPelengkap:\r\nMie kuning, rebus\r\nBihun, rebus\r\nDaun seledri, iris halus\r\nBawang goreng\r\nSaus, sambal, dan kecap', '1. Campur daging sapi giling dengan tepung sagu, telur, bawang putih, garam, dan merica. Aduk rata.\r\n2. Tambahkan air es sedikit demi sedikit sambil diuleni hingga adonan lembut.\r\n3. Bentuk adonan menjadi bulatan-bulatan bakso.\r\n4. Rebus air, masukkan bakso, masak hingga bakso mengapung. Angkat dan tiriskan.\r\n5. Untuk kuah, rebus air dengan tulang sapi, bawang putih, garam, dan merica hingga mendidih.\r\n6. Sajikan bakso dengan kuah, mie kuning, bihun, daun seledri, bawang goreng, saus, sambal, dan kecap.', 'sedang', 'image/resep/bakso.jpg'),
(12, 'Ayam Penyet', 'Ayam Penyet yang setara buatan restoran', 'Bahan:\r\n1 ekor ayam, potong menjadi beberapa bagian\r\n3 lembar daun salam\r\n2 batang serai, memarkan\r\n3 cm lengkuas, memarkan\r\nGaram dan merica secukupnya\r\n\r\nBumbu Halus:\r\n6 siung bawang putih\r\n4 butir kemiri\r\n5 buah cabai merah\r\n2 cm kunyit\r\n\r\nSambal:\r\n10 buah cabai rawit\r\n3 siung bawang putih\r\n2 buah tomat\r\nGaram dan gula secukupnya', '1. Rebus ayam bersama bumbu halus, daun salam, serai, lengkuas, garam, dan merica hingga empuk.\r\n2. Angkat ayam, lalu goreng hingga kecokelatan. Tiriskan.\r\n3. Uleg cabai rawit, bawang putih, tomat, garam, dan gula hingga halus.\r\n4. Penyet ayam goreng di atas sambal.\r\n5. Sajikan ayam penyet dengan nasi putih dan lalapan.', 'sedang', 'image/resep/ayam-penyet.jpg'),
(13, 'Gulai Kambing', 'Gulai Kambing dengan citarasa yang unik', 'Bahan:\r\n500 gram daging kambing, potong kotak\r\n1 liter santan dari 1 butir kelapa\r\n3 lembar daun jeruk\r\n2 lembar daun salam\r\n2 batang serai, memarkan\r\n3 cm lengkuas, memarkan\r\n\r\nBumbu Halus:\r\n8 butir bawang merah\r\n4 siung bawang putih\r\n5 buah cabai merah\r\n2 cm jahe\r\n3 cm kunyit\r\n4 butir kemiri', '1. Tumis bumbu halus hingga harum, tambahkan daun jeruk, daun salam, serai, dan lengkuas.\r\n2. Masukkan potongan daging kambing, aduk hingga berubah warna.\r\n3. Tuangkan santan, masak dengan api kecil sambil sesekali diaduk.\r\n4. Masak hingga daging empuk dan bumbu meresap.\r\n5. Sajikan dengan nasi putih.', 'sedang', 'image/resep/gulai-kambing.jpg'),
(14, 'Nasi Kuning', 'Nasi Kuning dengan citarasa yang kuat dan lezat', 'Bahan:\r\n2 gelas beras\r\n200 ml santan\r\n1 lembar daun pandan\r\n2 lembar daun salam\r\n1 batang serai, memarkan\r\n2 cm kunyit, parut dan ambil airnya\r\nGaram secukupnya\r\n\r\nPelengkap:\r\nAyam goreng\r\nSambal goreng ati\r\nTelur dadar iris\r\nPerkedel kentang\r\nBawang goreng', '1. Cuci beras hingga bersih.\r\n2. Masak beras dengan santan, daun pandan, daun salam, serai, air kunyit, dan garam. Aduk rata.\r\n3. Masak hingga air hampir habis, lalu kukus beras hingga matang.\r\n4. Sajikan nasi kuning dengan pelengkapnya.', 'sedang', 'image/resep/nasi-kuning.jpg'),
(15, 'Rawon', 'Rawon yang bergizi dan lezat untuk dinikmati', 'Bahan:\r\n500 gram daging sapi, potong kotak\r\n2 liter air\r\n2 lembar daun salam\r\n2 batang serai, memarkan\r\n3 cm lengkuas, memarkan\r\n\r\nBumbu Halus:\r\n6 butir bawang merah\r\n4 siung bawang putih\r\n3 buah kluwek, ambil isinya\r\n3 buah cabai merah\r\n1 cm jahe\r\n3 cm kunyit\r\n2 sendok teh ketumbar\r\n\r\nPelengkap:\r\nTauge pendek\r\nTelur asin\r\nSambal terasi\r\nKerupuk', '1. Rebus daging sapi dengan air, daun salam, serai, dan lengkuas hingga matang dan empuk.\r\n2. Tumis bumbu halus hingga harum, masukkan ke dalam kuah daging.\r\n3. Masak hingga mendidih dan bumbu meresap.\r\n4. Sajikan rawon dengan pelengkapnya.', 'sedang', 'image/resep/rawon.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(16) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL,
  `email` varchar(48) NOT NULL,
  `level` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`) VALUES
(999, 'ahyar', '321', 'ahyar@gmail.com', 'user'),
(1000, 'iqbal', '123', 'iqbal@gmail.com', 'user'),
(1001, 'admin', 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `resep`
--
ALTER TABLE `resep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
