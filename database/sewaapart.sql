-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Sep 2021 pada 00.08
-- Versi server: 8.0.26
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewaapart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_gallery`
--

CREATE TABLE `category_gallery` (
  `id_category` int NOT NULL,
  `category` varchar(225) NOT NULL,
  `lang` enum('EN','ID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category_gallery`
--

INSERT INTO `category_gallery` (`id_category`, `category`, `lang`) VALUES
(4, 'Sale', 'EN'),
(9, 'Rent', 'EN'),
(10, 'Jual', 'ID'),
(11, 'Sewa', 'ID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id_faq` int NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `no_hp` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `website` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id_faq`, `nama`, `email`, `no_hp`, `description`, `status`, `date_post`, `website`, `title`) VALUES
(75, 'admin', 'admin@gmail.com', '085206451636', 'testing ajah', 0, '2021-04-29 14:28:15', '', 'testing'),
(76, 'asas', 'developerpdak@gmail.com', '', 'sasasas', 0, '2021-09-17 22:59:55', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int NOT NULL,
  `title` varchar(225) NOT NULL,
  `foto` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lang` enum('EN','ID') NOT NULL,
  `client_name` varchar(225) NOT NULL,
  `client_foto` varchar(225) NOT NULL,
  `id_category` int NOT NULL,
  `counter` int NOT NULL,
  `author` varchar(225) NOT NULL,
  `tags` varchar(225) NOT NULL,
  `slug_gallery` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `title`, `foto`, `description`, `status`, `date_post`, `lang`, `client_name`, `client_foto`, `id_category`, `counter`, `author`, `tags`, `slug_gallery`) VALUES
(9, '2 BR ,Full Furniture ,Tower Flamboyan ,F.10 BG ', 'WhatsApp_Image_2021-09-14_at_5.18.49_PM.jpeg,WhatsApp_Image_2021-09-14_at_5.18.50_PM-1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.51_PM-1.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\"><strong><u>Harga Rp.400.000 / Malam</u></strong></div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\">Deposit Info</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\" style=\"text-align:justify\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi.</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:50:20', 'ID', '', '', 11, 38, 'Administrator', 'Flamboyan,2BR', '2-br-,full-furniture-,tower-flamboyan-,f.10-bg.html'),
(10, 'STUDIO ,Full Furniture ,Tower Eboni ,E.21AB ', 'WhatsApp_Image_2021-09-14_at_5.18.49_PM-1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.51_PM-2.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM.jpeg', '<p>&nbsp;</p>\r\n\r\n<table class=\"table table-bordered\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<div class=\"col-xs-12 hotel-left-item\">\r\n			<div class=\"hotel-left-head\">properti</div>\r\n\r\n			<div class=\"hotel-left-item-info-wrapper row\">\r\n			<div class=\"col-xs-12 hotel-left-item-info\">\r\n			<div class=\"capitalize hotel-left-item-info-head\">tipe properti</div>\r\n\r\n			<div class=\"capitalize hotel-left-item-info-detail\">apartemen</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 padding0\">\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"capitalize hotel-left-item-info-head\">Gedung</div>\r\n\r\n			<div class=\"capitalize hotel-left-item-info-detail\">Apartemen Kalibata City</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"capitalize hotel-left-item-info-head\">tower</div>\r\n\r\n			<div class=\"capitalize hotel-left-item-info-detail\">Kemuning</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"capitalize hotel-left-item-info-head\">lantai</div>\r\n\r\n			<div class=\"capitalize hotel-left-item-info-detail\">10</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"hotel-left-item-info-head\">Check-in</div>\r\n\r\n			<div class=\"hotel-left-item-info-detail\" id=\"checkin-time\">14.30 - 22.00</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"hotel-left-item-info-head\">Check-out</div>\r\n\r\n			<div class=\"hotel-left-item-info-detail\">12.00</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"hotel-left-item-info-head\">Biaya Kebersihan</div>\r\n\r\n			<div class=\"hotel-left-item-info-detail\">Akomodasi dan kain hanya akan dibersihkan saat check out. Permintaan khusus selama masa inap Anda tersedia dengan biaya tambahan.</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"hotel-left-item-info-head\">Orang Tambahan</div>\r\n\r\n			<div class=\"hotel-left-item-info-detail\">Orang tambahan di luar hunian maksimum akan dikenakan biaya 50.000, maksimum 1 orang. Harap dicatat bahwa tempat tidur tambahan tidak akan disediakan dalam skenario ini.</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"hotel-left-item-info-head\">Lainnya</div>\r\n\r\n			<div class=\"hotel-left-item-info-detail\">Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari 5.000 / jam</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-3 hotel-left-item-info\">\r\n			<div class=\"hotel-left-item-info-head\">Unit ini memiliki daya listrik rendah (1300 kWh)</div>\r\n\r\n			<div class=\"hotel-left-item-info-detail\">AC, kompor listrik, microwave, ketel listrik, pemanas air atau perangkat apa pun dengan daya listrik tinggi harus digunakan secara bergantian.</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"row\">\r\n			<div class=\"col-xs-9 hotel-left-item-info\">\r\n			<div class=\"capitalize hotel-left-item-info-head\">fasilitas unit</div>\r\n\r\n			<div class=\"row\">\r\n			<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n			<div class=\"col-xs-12\">\r\n			<div class=\"col-xs-4 furniture-item\">Queen Bed (160x200)</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Wardrobe</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Hanger</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n			<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n			<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n			<div class=\"col-xs-8\">\r\n			<div class=\"row\">\r\n			<div class=\"col-xs-6 furniture-item\">1 Queen (160x200)</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n			<div class=\"col-xs-12\">\r\n			<div class=\"col-xs-4 furniture-item\">Single Bed (100x200)</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n			<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n			<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n			<div class=\"col-xs-8\">\r\n			<div class=\"row\">\r\n			<div class=\"col-xs-6 furniture-item\">1 Single (100x200)</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 margintop10\">Kitchen</div>\r\n\r\n			<div class=\"col-xs-12\">\r\n			<div class=\"col-xs-4 furniture-item\">Tablespoon</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Refrigerator</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Microwave</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Glass</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Gas Stove</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Fork</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 margintop10\">Bathroom</div>\r\n\r\n			<div class=\"col-xs-12\">\r\n			<div class=\"col-xs-4 furniture-item\">Shower</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Water Heater</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Toilet Bowl</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Toiletries</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Towel</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 margintop10\">Other</div>\r\n\r\n			<div class=\"col-xs-12\">\r\n			<div class=\"col-xs-4 furniture-item\">Portable</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 margintop10\">Living Room</div>\r\n\r\n			<div class=\"col-xs-12\">\r\n			<div class=\"col-xs-4 furniture-item\">Air Conditioner</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">TV</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Sofa Pillow</div>\r\n\r\n			<div class=\"col-xs-4 furniture-item\">Sofa Bed (Double)</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"row\">\r\n			<div class=\"col-xs-9 hotel-left-item-info\">\r\n			<div class=\"capitalize hotel-left-item-info-head\">Fasilitas Gedung</div>\r\n\r\n			<div class=\"row\">\r\n			<div class=\"col-xs-4 hotel-facility-item\">ATM On Site</div>\r\n\r\n			<div class=\"col-xs-4 hotel-facility-item\">Cafe</div>\r\n\r\n			<div class=\"col-xs-4 hotel-facility-item\">Jogging Track</div>\r\n\r\n			<div class=\"col-xs-4 hotel-facility-item\">Laundry (Charge)</div>\r\n\r\n			<div class=\"col-xs-4 hotel-facility-item\">Playground</div>\r\n\r\n			<div class=\"col-xs-4 hotel-facility-item\">Restaurant</div>\r\n\r\n			<div class=\"col-xs-4 hotel-facility-item\">Shops</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n			<div class=\"hotel-left-head\">informasi tambahan</div>\r\n\r\n			<div class=\"hotel-left-item-info-wrapper row\">\r\n			<div id=\"other-prices\">&nbsp;</div>\r\n\r\n			<div id=\"ipl-estimation\">&nbsp;</div>\r\n\r\n			<div class=\"col-xs-3 daily-only hotel-left-item-info\" style=\"display:block\">\r\n			<div class=\"hotel-left-item-info-head\">Deposit Harian</div>\r\n\r\n			<div class=\"deposit-amount hotel-left-item-info-detail\" id=\"deposit-amount\">? IDR 200,000.00</div>\r\n			</div>\r\n\r\n			<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n			<div class=\"hotel-left-item-info-head\">Deposit Info</div>\r\n\r\n			<div class=\"hotel-left-item-info-detail\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif). Proses refund deposit untuk pemesanan jangka panjang hanya dapat kami proses setelah invoice terbit dari Building Management. Invoice tersebut akan digunakan untuk perhitungan pemakaian selama penyewaan Anda di unit Travelio. Pada umumnya invoice akan terbit pada tanggal 5-10 di setiap bulan berikutnya setelah anda check out. Setelah invoice terbit, Travelio membutuhkan kurang lebih 7 hari kerja untuk perhitungan secara detail setelah invoice diterbitkan. Untuk pembayaran menggunakan kartu kredit, bank anda akan membutuhkan waktu tambahan 14 hari kerja agar dana dapat tersedia kembali setelah proses di atas selesai</div>\r\n			</div>\r\n			</div>\r\n			</div>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-09-19 23:45:33', 'ID', '', '', 11, 169, 'Administrator', 'Studio ,Eboni', 'studio-,full-furniture-,tower-eboni-,e.21ab.html'),
(14, '2 BR ,Full Furniture ,Tower Kemuning ,K.8CD ', 'WhatsApp_Image_2021-09-14_at_5.18.52_PM-1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM-2.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.53_PM.jpeg,WhatsApp_Image_2021-09-14_at_5.18.54_PM-1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.54_PM.jpeg', '<p>2 BR ,Full Furniture ,Tower Kemuning ,K.8CD</p>\r\n\r\n<table class=\"table table-bordered\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Size</strong></td>\r\n			<td><strong>Panjang</strong></td>\r\n			<td><strong>Berat (Kg)</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>10 mm</td>\r\n			<td>12 M</td>\r\n			<td>7.40</td>\r\n		</tr>\r\n		<tr>\r\n			<td>13 mm</td>\r\n			<td>12 M</td>\r\n			<td>12.50</td>\r\n		</tr>\r\n		<tr>\r\n			<td>16 mm</td>\r\n			<td>12 M</td>\r\n			<td>19.00</td>\r\n		</tr>\r\n		<tr>\r\n			<td>19 mm</td>\r\n			<td>12 M</td>\r\n			<td>26.80</td>\r\n		</tr>\r\n		<tr>\r\n			<td>22 mm</td>\r\n			<td>12 M</td>\r\n			<td>35.76</td>\r\n		</tr>\r\n		<tr>\r\n			<td>25 mm</td>\r\n			<td>12 M</td>\r\n			<td>46.20</td>\r\n		</tr>\r\n		<tr>\r\n			<td>29 mm</td>\r\n			<td>12 M</td>\r\n			<td>62.28</td>\r\n		</tr>\r\n		<tr>\r\n			<td>32 mm</td>\r\n			<td>12 M</td>\r\n			<td>75.72</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', 1, '2021-09-19 23:45:45', 'ID', '', '', 10, 54, 'Administrator', 'Kemuning,2BR', '2-br-,full-furniture-,tower-kemuning-,k.8cd.html'),
(16, '2 BR, Fully Furnished, Flamboyant Tower, F.10 BG', 'WhatsApp_Image_2021-09-14_at_5.18.48_PM.jpeg,WhatsApp_Image_2021-09-14_at_5.18.49_PM-11.jpeg,WhatsApp_Image_2021-09-14_at_5.18.49_PM-2.jpeg,WhatsApp_Image_2021-09-14_at_5.18.50_PM-11.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-head\">properti</div>\r\n\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">tipe properti</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">apartemen</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 padding0\">\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">Gedung</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">Apartemen Kalibata City</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">tower</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">Kemuning</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">lantai</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">10</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Check-in</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\" id=\"checkin-time\">14.30 - 22.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Check-out</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">12.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Biaya Kebersihan</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Akomodasi dan kain hanya akan dibersihkan saat check out. Permintaan khusus selama masa inap Anda tersedia dengan biaya tambahan.</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Orang Tambahan</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Orang tambahan di luar hunian maksimum akan dikenakan biaya 50.000, maksimum 1 orang. Harap dicatat bahwa tempat tidur tambahan tidak akan disediakan dalam skenario ini.</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Lainnya</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari 5.000 / jam</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Unit ini memiliki daya listrik rendah (1300 kWh)</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">AC, kompor listrik, microwave, ketel listrik, pemanas air atau perangkat apa pun dengan daya listrik tinggi harus digunakan secara bergantian.</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-9 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">fasilitas unit</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Queen Bed (160x200)</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Wardrobe</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Hanger</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n<div class=\"col-xs-8\">\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 furniture-item\">1 Queen (160x200)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Single Bed (100x200)</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n<div class=\"col-xs-8\">\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 furniture-item\">1 Single (100x200)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Kitchen</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Tablespoon</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Refrigerator</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Microwave</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Glass</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Gas Stove</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Fork</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Bathroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Shower</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Water Heater</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Toilet Bowl</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Toiletries</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Towel</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Other</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Portable</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Living Room</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Air Conditioner</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">TV</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Sofa Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Sofa Bed (Double)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-9 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">Fasilitas Gedung</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-4 hotel-facility-item\">ATM On Site</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Cafe</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Jogging Track</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Laundry (Charge)</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Playground</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Restaurant</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Shops</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-head\">informasi tambahan</div>\r\n\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div id=\"other-prices\">&nbsp;</div>\r\n\r\n<div id=\"ipl-estimation\">&nbsp;</div>\r\n\r\n<div class=\"col-xs-3 daily-only hotel-left-item-info\" style=\"display:block\">\r\n<div class=\"hotel-left-item-info-head\">Deposit Harian</div>\r\n\r\n<div class=\"deposit-amount hotel-left-item-info-detail\" id=\"deposit-amount\">? IDR 200,000.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Deposit Info</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif). Proses refund deposit untuk pemesanan jangka panjang hanya dapat kami proses setelah invoice terbit dari Building Management. Invoice tersebut akan digunakan untuk perhitungan pemakaian selama penyewaan Anda di unit Travelio. Pada umumnya invoice akan terbit pada tanggal 5-10 di setiap bulan berikutnya setelah anda check out. Setelah invoice terbit, Travelio membutuhkan kurang lebih 7 hari kerja untuk perhitungan secara detail setelah invoice diterbitkan. Untuk pembayaran menggunakan kartu kredit, bank anda akan membutuhkan waktu tambahan 14 hari kerja agar dana dapat tersedia kembali setelah proses di atas selesai</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:45:57', 'EN', '', '', 9, 7, 'Administrator', 'Flamboyan,2BR', '2-br,-fully-furnished,-flamboyant-tower,-f.10-bg.html'),
(17, 'STUDIO ,Full Furniture ,Ebony Tower ,E.21AB', 'WhatsApp_Image_2021-09-14_at_5.18.46_PM.jpeg,WhatsApp_Image_2021-09-14_at_5.18.47_PM.jpeg,WhatsApp_Image_2021-09-14_at_5.18.48_PM-1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.48_PM1.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-head\">properti</div>\r\n\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">tipe properti</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">apartemen</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 padding0\">\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">Gedung</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">Apartemen Kalibata City</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">tower</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">Kemuning</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">lantai</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">10</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Check-in</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\" id=\"checkin-time\">14.30 - 22.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Check-out</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">12.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Biaya Kebersihan</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Akomodasi dan kain hanya akan dibersihkan saat check out. Permintaan khusus selama masa inap Anda tersedia dengan biaya tambahan.</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Orang Tambahan</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Orang tambahan di luar hunian maksimum akan dikenakan biaya 50.000, maksimum 1 orang. Harap dicatat bahwa tempat tidur tambahan tidak akan disediakan dalam skenario ini.</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Lainnya</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari 5.000 / jam</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Unit ini memiliki daya listrik rendah (1300 kWh)</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">AC, kompor listrik, microwave, ketel listrik, pemanas air atau perangkat apa pun dengan daya listrik tinggi harus digunakan secara bergantian.</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-9 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">fasilitas unit</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Queen Bed (160x200)</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Wardrobe</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Hanger</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n<div class=\"col-xs-8\">\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 furniture-item\">1 Queen (160x200)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Single Bed (100x200)</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n<div class=\"col-xs-8\">\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 furniture-item\">1 Single (100x200)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Kitchen</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Tablespoon</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Refrigerator</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Microwave</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Glass</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Gas Stove</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Fork</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Bathroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Shower</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Water Heater</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Toilet Bowl</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Toiletries</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Towel</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Other</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Portable</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Living Room</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Air Conditioner</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">TV</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Sofa Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Sofa Bed (Double)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-9 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">Fasilitas Gedung</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-4 hotel-facility-item\">ATM On Site</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Cafe</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Jogging Track</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Laundry (Charge)</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Playground</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Restaurant</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Shops</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-head\">informasi tambahan</div>\r\n\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div id=\"other-prices\">&nbsp;</div>\r\n\r\n<div id=\"ipl-estimation\">&nbsp;</div>\r\n\r\n<div class=\"col-xs-3 daily-only hotel-left-item-info\" style=\"display:block\">\r\n<div class=\"hotel-left-item-info-head\">Deposit Harian</div>\r\n\r\n<div class=\"deposit-amount hotel-left-item-info-detail\" id=\"deposit-amount\">? IDR 200,000.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Deposit Info</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif). Proses refund deposit untuk pemesanan jangka panjang hanya dapat kami proses setelah invoice terbit dari Building Management. Invoice tersebut akan digunakan untuk perhitungan pemakaian selama penyewaan Anda di unit Travelio. Pada umumnya invoice akan terbit pada tanggal 5-10 di setiap bulan berikutnya setelah anda check out. Setelah invoice terbit, Travelio membutuhkan kurang lebih 7 hari kerja untuk perhitungan secara detail setelah invoice diterbitkan. Untuk pembayaran menggunakan kartu kredit, bank anda akan membutuhkan waktu tambahan 14 hari kerja agar dana dapat tersedia kembali setelah proses di atas selesai</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:46:19', 'EN', '', '', 9, 41, 'Administrator', 'Studio,Eboni', 'studio-,full-furniture-,ebony-tower-,e.21ab.html'),
(18, '2 BR ,Full Furniture ,Tower Kemuning ,K.8CD', 'WhatsApp_Image_2021-09-14_at_5.18.49_PM-21.jpeg,WhatsApp_Image_2021-09-14_at_5.18.49_PM1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.50_PM-12.jpeg,WhatsApp_Image_2021-09-14_at_5.18.50_PM.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-head\">properti</div>\r\n\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">tipe properti</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">apartemen</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 padding0\">\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">Gedung</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">Apartemen Kalibata City</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">tower</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">Kemuning</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">lantai</div>\r\n\r\n<div class=\"capitalize hotel-left-item-info-detail\">10</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Check-in</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\" id=\"checkin-time\">14.30 - 22.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Check-out</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">12.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Biaya Kebersihan</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Akomodasi dan kain hanya akan dibersihkan saat check out. Permintaan khusus selama masa inap Anda tersedia dengan biaya tambahan.</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Orang Tambahan</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Orang tambahan di luar hunian maksimum akan dikenakan biaya 50.000, maksimum 1 orang. Harap dicatat bahwa tempat tidur tambahan tidak akan disediakan dalam skenario ini.</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Lainnya</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Biaya parkir merupakan tanggung jawab tamu, prediksi biaya mulai dari 5.000 / jam</div>\r\n</div>\r\n\r\n<div class=\"col-xs-3 hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Unit ini memiliki daya listrik rendah (1300 kWh)</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">AC, kompor listrik, microwave, ketel listrik, pemanas air atau perangkat apa pun dengan daya listrik tinggi harus digunakan secara bergantian.</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-9 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">fasilitas unit</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Queen Bed (160x200)</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Wardrobe</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Hanger</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n<div class=\"col-xs-8\">\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 furniture-item\">1 Queen (160x200)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Bedroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Single Bed (100x200)</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Blanket</div>\r\n\r\n<div class=\"col-xs-12 furniture-item\" style=\"background-color:#f1f1f1; padding-bottom:5px; padding:0\">\r\n<div class=\"col-xs-4 furniture-item\">Bed Config :</div>\r\n\r\n<div class=\"col-xs-8\">\r\n<div class=\"row\">\r\n<div class=\"col-xs-6 furniture-item\">1 Single (100x200)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Kitchen</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Tablespoon</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Refrigerator</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Microwave</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Glass</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Gas Stove</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Fork</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Bathroom</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Shower</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Water Heater</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Toilet Bowl</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Toiletries</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Towel</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Other</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Portable</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 margintop10\">Living Room</div>\r\n\r\n<div class=\"col-xs-12\">\r\n<div class=\"col-xs-4 furniture-item\">Air Conditioner</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">TV</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Sofa Pillow</div>\r\n\r\n<div class=\"col-xs-4 furniture-item\">Sofa Bed (Double)</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-9 hotel-left-item-info\">\r\n<div class=\"capitalize hotel-left-item-info-head\">Fasilitas Gedung</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-xs-4 hotel-facility-item\">ATM On Site</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Cafe</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Jogging Track</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Laundry (Charge)</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Playground</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Restaurant</div>\r\n\r\n<div class=\"col-xs-4 hotel-facility-item\">Shops</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-head\">informasi tambahan</div>\r\n\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div id=\"other-prices\">&nbsp;</div>\r\n\r\n<div id=\"ipl-estimation\">&nbsp;</div>\r\n\r\n<div class=\"col-xs-3 daily-only hotel-left-item-info\" style=\"display:block\">\r\n<div class=\"hotel-left-item-info-head\">Deposit Harian</div>\r\n\r\n<div class=\"deposit-amount hotel-left-item-info-detail\" id=\"deposit-amount\">? IDR 200,000.00</div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\">Deposit Info</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi. Pemberitahuan akan dikirimkan ke email Anda setelah berhasil (pastikan contact detail yang terdaftar aktif). Proses refund deposit untuk pemesanan jangka panjang hanya dapat kami proses setelah invoice terbit dari Building Management. Invoice tersebut akan digunakan untuk perhitungan pemakaian selama penyewaan Anda di unit Travelio. Pada umumnya invoice akan terbit pada tanggal 5-10 di setiap bulan berikutnya setelah anda check out. Setelah invoice terbit, Travelio membutuhkan kurang lebih 7 hari kerja untuk perhitungan secara detail setelah invoice diterbitkan. Untuk pembayaran menggunakan kartu kredit, bank anda akan membutuhkan waktu tambahan 14 hari kerja agar dana dapat tersedia kembali setelah proses di atas selesai</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:46:29', 'EN', '', '', 4, 121, 'Administrator', 'Kemuning,2BR', '2-br-,full-furniture-,tower-kemuning-,k.8cd.html'),
(19, 'Borneo 2BR', 'WhatsApp_Image_2021-09-14_at_5.18.49_PM-22.jpeg,WhatsApp_Image_2021-09-14_at_5.18.51_PM-11.jpeg,WhatsApp_Image_2021-09-14_at_5.18.51_PM.jpeg,WhatsApp_Image_2021-09-14_at_5.18.53_PM1.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\"><strong><u>Harga Rp.400.000 / Malam</u></strong></div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\">Deposit Info</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\" style=\"text-align:justify\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi.</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:55:14', 'ID', '', '', 11, 34, 'Administrator', 'Borneo', 'borneo-2br.html'),
(20, 'STUDIO HERBRAS', 'WhatsApp_Image_2021-09-14_at_5.18.48_PM2.jpeg,WhatsApp_Image_2021-09-14_at_5.18.49_PM-23.jpeg,WhatsApp_Image_2021-09-14_at_5.18.51_PM-21.jpeg,WhatsApp_Image_2021-09-14_at_5.18.51_PM1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM-11.jpeg,WhatsApp_Image_2021-09-14_at_5.18.53_PM2.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\"><strong><u>Harga Rp.400.000 / Malam</u></strong></div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\">Deposit Info</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\" style=\"text-align:justify\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi.</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:46:53', 'ID', '', '', 11, 5, 'Administrator', 'HERBRASS,STUDIO', 'studio-herbras.html'),
(21, '3 BR GRAND PALACE', 'WhatsApp_Image_2021-09-14_at_5.18.51_PM2.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM-12.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM-21.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM2.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\"><strong><u>Harga Rp.1.000.000 / Malam</u></strong></div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\">Deposit Info</div>\r\n\r\n<div class=\"hotel-left-item-info-detail\" style=\"text-align:justify\">Proses refund deposit untuk pemesanan harian menggunakan bank transfer atau virtual account diestimasikan akan diterima kembali oleh pelanggan dalam waktu paling lambat 5 hari kerja setelah data bank terkonfirmasi.</div>\r\n</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:58:37', 'ID', '', '', 11, 133, 'Administrator', 'GRAND PALACE,3BR,APARTEMEN KALIBATA CITY', '3-br-grand-palace.html'),
(22, 'Pojok Jasmin', 'WhatsApp_Image_2021-09-14_at_5.18.46_PM1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.47_PM1.jpeg,WhatsApp_Image_2021-09-14_at_5.18.50_PM-13.jpeg,WhatsApp_Image_2021-09-14_at_5.18.51_PM3.jpeg,WhatsApp_Image_2021-09-14_at_5.18.52_PM3.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\"><strong><u>Harga Rp.400.000.000</u></strong></div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">Dijual apartemen 2 BR di pojok jasmin.</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:47:12', 'ID', '', '', 10, 19, 'Administrator', 'Apartemen Kalibata,Jual Apartemen di Jakarta Selatan,2Br,Tower Jasmin', 'pojok-jasmin.html'),
(34, 'BORNEO STUDIO', '1.jpeg,2.jpeg,3.jpeg,4.jpeg,5.jpeg', '<div class=\"col-xs-12 hotel-left-item\">\r\n<div class=\"hotel-left-item-info-head\" style=\"text-align:justify\"><strong><u>Harga Rp.400.000.000</u></strong></div>\r\n</div>\r\n\r\n<div class=\"col-xs-12 hotel-left-item\" id=\"hotel-detail-prices\">\r\n<div class=\"hotel-left-item-info-wrapper row\">\r\n<div class=\"col-xs-12 deposit-amount deposit-info hotel-left-item-info\">Dijual apartemen 2 BR di pojok jasmin.</div>\r\n</div>\r\n</div>\r\n', 1, '2021-09-19 23:44:17', 'ID', '', '', 11, 73, 'Administrator', 'BORNEO', 'borneo-studio.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_administrator`
--

CREATE TABLE `master_administrator` (
  `id_administrator` int NOT NULL,
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level_login` int NOT NULL,
  `status` int NOT NULL,
  `foto` varchar(225) NOT NULL,
  `cookie` varchar(225) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `latest_session` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_online` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_administrator`
--

INSERT INTO `master_administrator` (`id_administrator`, `name`, `username`, `password`, `level_login`, `status`, `foto`, `cookie`, `date_save`, `date_updated`, `latest_session`, `status_online`) VALUES
(1, 'Andre', 'andre', 'andre', 1, 1, 'd6bd9fe455d2f3f0ee22a15ffde48329.png', '', '2021-04-29 13:10:59', '0000-00-00 00:00:00', '2021-04-28 20:57:10', 0),
(2, 'admin', 'admin', 'admin', 1, 1, '91149d75d4fcdbe2e084eb24ff1aaa96.jpg', '', '2021-09-19 17:08:46', '0000-00-00 00:00:00', '2021-09-20 05:08:46', 1),
(3, 'user', 'user', 'user', 1, 1, 'world.png', '', '2020-07-31 16:25:52', '0000-00-00 00:00:00', '2020-07-31 04:25:46', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_article`
--

CREATE TABLE `master_article` (
  `id_article` int NOT NULL,
  `id_category_article` int NOT NULL,
  `lang` enum('EN','ID') NOT NULL,
  `description` text NOT NULL,
  `slug_article` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `counter` int NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(225) NOT NULL,
  `tag` text NOT NULL,
  `title` varchar(225) NOT NULL,
  `status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_article`
--

INSERT INTO `master_article` (`id_article`, `id_category_article`, `lang`, `description`, `slug_article`, `author`, `counter`, `date_post`, `foto`, `tag`, `title`, `status`) VALUES
(22, 2, 'EN', '<p>What is startup ???</p>\r\n\r\n<p>Maybe there are still many people who do not understand this term, including me, but after reading several articles about the definition of startup, I write again in this article. maybe it can help you a little in understanding the meaning of startup itself.The term Startup itself is an absorption word from English which means the action or process of starting a new organization or business venture. According to Wikipedia, Startup refers to companies that have not been operational long. These companies are mostly newly established companies and are in the development and research phase to find the right market.Currently the term Startup is more widely used to describe companies that smell of technology, the web, the internet and those related to that realm. Why did it happen?Looking back, it turns out that this happened because the term Startup itself became popular internationally during the dot-com buble, so what else is the dot-com buble? the dot-com buble phenomenon is when in that period (1998-2000) many dot-com companies were established simultaneously.</p>\r\n', 'definition-of-startup', 'Administrator', 123, '2021-04-29 14:14:02', 'Kesuksesan-Ditentukan-Oleh-Pola-Pikir-Kita.png', 'Start Up Enthusiast', 'Definition of startup ', 1),
(23, 4, 'EN', '<p><strong>Communication skill is one of the most important skills for any supervisors and managers.</strong> Their ability to convey ideas, influence another, and getting feedbacks is key to their success in their job that eventually creating value for the organization. Communication skill includes listening skill, build relationship, set clear priorities, facilitate collaboration, and conveys the organization&rsquo;s vision.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Without a doubt, any supervisors/managers who excel all of those skills are good leaders.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>To equip you, supervisors and managers, with excellent communication skill, Foster &amp; Bridge Indonesia offers you a workshop/training on Communication Skill for Supervisors/Managers. With this training, you will sharpen your already existing communication skill and take it up to a higher level, customize it to your success performing the job and managing your teams.</p>\r\n', 'communication-skills-for-supervisors-and-managers', 'Administrator', 139, '2021-04-29 14:12:37', 'PM1.jpg', 'Communication Skills,People Development,Management', 'Communication Skills for Supervisors and Managers', 1),
(26, 2, 'EN', '<p>Apa itu startup ???</p>\r\n\r\n<p>Mungkin masih banyak yang belum paham dengan istilah ini termasuk saya, tapi setelah membaca beberapa artikel tentang pengertian startup, saya tulis lagi di artikel ini. mungkin bisa sedikit membantu anda dalam memahami arti dari startup itu sendiri.</p>\r\n\r\n<p>Istilah Startup sendiri merupakan kata serapan dari bahasa Inggris yang berarti tindakan atau proses memulai organisasi atau usaha bisnis baru.</p>\r\n\r\n<p>Menurut Wikipedia, rujukan startup ke perusahaan yang belum lama beroperasi. Perusahaan-perusahaan ini sebagian besar adalah perusahaan yang baru didirikan dan sedang dalam tahap pengembangan dan penelitian untuk menemukan pasar yang tepat. Saat ini istilah Startup lebih banyak digunakan untuk menggambarkan perusahaan yang berbau teknologi, web, internet dan yang berhubungan dengan ranah tersebut. Kenapa ini terjadi? Menengok ke belakang, ternyata hal ini terjadi karena istilah Startup sendiri menjadi populer secara internasional pada masa dot-com buble, lalu apa lagi dot-com buble itu? Fenomena dot-com buble adalah ketika pada periode tersebut (1998-2000) banyak perusahaan dot-com didirikan secara bersamaan.</p>\r\n', 'start-up', 'Administrator', 10, '2021-04-29 14:15:43', 'dekstopapp3.jpg', 'Start Up Enthusisast ,Tech Company', 'Start Up', 1),
(27, 4, 'EN', '<p><strong>Keterampilan komunikasi adalah salah satu keterampilan terpenting bagi setiap supervisor dan manajer</strong>.<br />\r\nKemampuan mereka untuk menyampaikan ide, mempengaruhi orang lain, dan mendapatkan umpan balik adalah kunci kesuksesan mereka dalam pekerjaan mereka yang pada akhirnya menciptakan nilai bagi organisasi. Keterampilan komunikasi meliputi keterampilan mendengarkan, membangun hubungan, menetapkan prioritas yang jelas, memfasilitasi kolaborasi, dan menyampaikan visi organisasi.Tanpa diragukan lagi, setiap supervisor / manajer yang unggul dalam semua keterampilan tersebut adalah pemimpin yang baik.Untuk membekali Anda, supervisor dan manajer, dengan keterampilan komunikasi yang sangat baik, Foster &amp; Bridge Indonesia menawarkan kepada Anda lokakarya / pelatihan tentang Keterampilan Komunikasi untuk Supervisor / Manajer. Dengan pelatihan ini, Anda akan mempertajam keterampilan komunikasi Anda yang sudah ada dan membawanya ke tingkat yang lebih tinggi, menyesuaikannya dengan keberhasilan Anda dalam melakukan pekerjaan dan mengelola tim Anda.</p>\r\n', 'keterampilan-komunikasi-untuk-supervisor-dan-manajer', 'Administrator', 4, '2021-04-29 13:13:10', '36758593484_e6ced72ab1_b1.jpg', 'Skill Komunikasi, Managerial,Pengembangan Sumber Daya Manusia', 'Keterampilan Komunikasi untuk Supervisor dan Manajer', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_category_article`
--

CREATE TABLE `master_category_article` (
  `id_category_article` int NOT NULL,
  `category_article` varchar(225) NOT NULL,
  `lang` enum('EN','ID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_category_article`
--

INSERT INTO `master_category_article` (`id_category_article`, `category_article`, `lang`) VALUES
(2, 'START UP', 'EN'),
(3, 'Technology Enthusiast', 'EN'),
(4, 'IT DEV', 'EN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `page`
--

CREATE TABLE `page` (
  `id_page` int NOT NULL,
  `page` varchar(225) NOT NULL,
  `lang` enum('EN','ID') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `page`
--

INSERT INTO `page` (`id_page`, `page`, `lang`) VALUES
(9, 'About Us', 'EN'),
(11, 'Tentang Kami', 'ID');

-- --------------------------------------------------------

--
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `id` int NOT NULL,
  `title` varchar(225) NOT NULL,
  `slug_slider` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `status` int NOT NULL,
  `author` varchar(225) NOT NULL,
  `counter` int NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lang` enum('EN','ID') NOT NULL,
  `sub_title` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`id`, `title`, `slug_slider`, `description`, `status`, `author`, `counter`, `date_post`, `lang`, `sub_title`, `foto`) VALUES
(3, 'Jual Beli dan Sewa Apartemen', 'jual-beli-dan-sewa-apartemen.html', '<p>Berada di pusat kota ,Jakarta Selatan</p>\r\n', 1, 'Administrator', 0, '2021-09-17 19:41:11', 'ID', 'Harian,Mingguan,Bulanan & Tahunan', 'a16e22412516e8a6be54654d8d01b6a4.jpeg'),
(4, 'Jual Beli Apartemen', 'jual-beli-apartemen.html', '<p>Harga bersaing dengan yang lainnya.</p>\r\n', 1, 'Administrator', 0, '2021-09-17 19:39:23', 'ID', 'Kalibata City', '8eec81ace29e08f4b1f0a67d0e7bceed.jpeg'),
(12, 'Sewa Apartemen ', 'sewa-apartemen.html', '<p>Sewa apartemen murah ,terbaik ,aman dan terpercaya.</p>\r\n', 1, '', 0, '2021-09-17 19:38:44', 'ID', 'Kalibata City', 'eb4ef239909fd5e84fd664d073fd854a.jpeg'),
(13, 'Sell Buy and Rent Apartments', 'sell-buy-and-rent-apartments.html', '<p>Located in the city center, South Jakarta</p>\r\n', 1, 'Administrator', 0, '2021-09-17 22:49:03', 'EN', 'Daily, Weekly, Monthly & Annually ', 'a16e22412516e8a6be54654d8d01b6a4.jpeg'),
(14, 'Selling and Buying Apartments', 'selling-and-buying-apartments.html', '<p>Prices are competitive with others.</p>\r\n', 1, 'Administrator', 0, '2021-09-17 22:47:31', 'EN', 'Kalibata City', '8eec81ace29e08f4b1f0a67d0e7bceed.jpeg'),
(15, 'Apartment Rent', 'apartment-rent.html', '<p>Rent apartments cheap, best, safe and reliable.&nbsp;</p>\r\n', 1, '', 0, '2021-09-17 22:47:02', 'EN', 'Kalibata City', 'eb4ef239909fd5e84fd664d073fd854a.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_page`
--

CREATE TABLE `sub_page` (
  `id_sub_page` int NOT NULL,
  `id_page` int NOT NULL,
  `counter` int NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `date_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `author` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` int NOT NULL,
  `lang` enum('EN','ID') NOT NULL,
  `slug_sub_page` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_page`
--

INSERT INTO `sub_page` (`id_sub_page`, `id_page`, `counter`, `title`, `description`, `date_post`, `author`, `foto`, `status`, `lang`, `slug_sub_page`) VALUES
(3, 9, 327, 'About Us', '<p>We are a trusted agent in Kalibata City, with more than 7 years of experience.</p>\r\n', '2021-09-19 20:55:46', 'Adminisitrator', '5c075275587e4c9bd0f02424ec41060c.jpeg', 1, 'EN', 'about-us.html'),
(12, 11, 60, 'Tentang Kami', '<p>Kami adalah agent terpercaya di Kalibata City ,dengan pengalaman lebih dari 7tahun.</p>\r\n', '2021-09-20 00:01:01', 'Administrator', '6ed89a11159926a56602a40dae3d0567.jpeg', 1, 'ID', 'tentang-kami.html');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category_gallery`
--
ALTER TABLE `category_gallery`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `master_administrator`
--
ALTER TABLE `master_administrator`
  ADD PRIMARY KEY (`id_administrator`);

--
-- Indeks untuk tabel `master_article`
--
ALTER TABLE `master_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indeks untuk tabel `master_category_article`
--
ALTER TABLE `master_category_article`
  ADD PRIMARY KEY (`id_category_article`);

--
-- Indeks untuk tabel `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sub_page`
--
ALTER TABLE `sub_page`
  ADD PRIMARY KEY (`id_sub_page`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category_gallery`
--
ALTER TABLE `category_gallery`
  MODIFY `id_category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `master_administrator`
--
ALTER TABLE `master_administrator`
  MODIFY `id_administrator` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_article`
--
ALTER TABLE `master_article`
  MODIFY `id_article` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `master_category_article`
--
ALTER TABLE `master_category_article`
  MODIFY `id_category_article` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sub_page`
--
ALTER TABLE `sub_page`
  MODIFY `id_sub_page` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
