-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 12 May 2019, 22:44:10
-- Sunucu sürümü: 10.1.33-MariaDB
-- PHP Sürümü: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bMarker`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bolumSayfalari`
--

CREATE TABLE `bolumSayfalari` (
  `id` int(11) NOT NULL,
  `sayfa_icerik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `sayfaNo` int(100) DEFAULT NULL,
  `icerikBilgisiID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikBilgisi`
--

CREATE TABLE `icerikBilgisi` (
  `id` int(11) NOT NULL,
  `kacinciBolum` int(11) NOT NULL,
  `bolumYazan` int(20) NOT NULL,
  `tarih` date NOT NULL,
  `bolumeBaslik` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `icerikYayinlaID` int(11) DEFAULT NULL,
  `bolumKonusu` varchar(200) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerikBilgisi`
--

INSERT INTO `icerikBilgisi` (`id`, `kacinciBolum`, `bolumYazan`, `tarih`, `bolumeBaslik`, `icerikYayinlaID`, `bolumKonusu`) VALUES
(1, 1, 1, '2019-05-11', 'NasÄ±l oldu BU ?', 1, 'garip işler :)');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerikYayinla`
--

CREATE TABLE `icerikYayinla` (
  `id` int(11) NOT NULL,
  `icerikResim` varchar(30) COLLATE utf8_turkish_ci NOT NULL,
  `konu` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kategori` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `icerikYazan` int(20) NOT NULL,
  `tarih` date NOT NULL,
  `icerikAdi` varchar(20) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerikYayinla`
--

INSERT INTO `icerikYayinla` (`id`, `icerikResim`, `konu`, `kategori`, `icerikYazan`, `tarih`, `icerikAdi`) VALUES
(1, 'avatar.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ullamcorper nibh sed gravida tristi', 'hikaye', 1, '2019-05-11', 'sensizlik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik_degerlendirme`
--

CREATE TABLE `icerik_degerlendirme` (
  `id` int(11) NOT NULL,
  `kimDegerlendirdiID` int(11) NOT NULL,
  `DegerlendirilenIcerikID` int(11) NOT NULL,
  `puan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik_degerlendirme`
--

INSERT INTO `icerik_degerlendirme` (`id`, `kimDegerlendirdiID`, `DegerlendirilenIcerikID`, `puan`) VALUES
(1, 1, 1, 3),
(2, 2, 1, 5);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icerik_followlar`
--

CREATE TABLE `icerik_followlar` (
  `id` int(11) NOT NULL,
  `icerikID` int(11) NOT NULL,
  `takipEdenID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icerik_followlar`
--

INSERT INTO `icerik_followlar` (`id`, `icerikID`, `takipEdenID`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usrName` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(10) COLLATE utf8_turkish_ci NOT NULL,
  `sifreTekrar` varchar(10) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `usrName`, `email`, `sifre`, `sifreTekrar`) VALUES
(1, 'mansur', 'kayamansur61@gmail.c', '1', '1'),
(2, 'ibo', 'kaya@gmail.com', '2', '2'),
(3, 'mustafa', 'mustafa@gmail.com', '4', '4');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bolumSayfalari`
--
ALTER TABLE `bolumSayfalari`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icerikBilgisi`
--
ALTER TABLE `icerikBilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icerikYayinla`
--
ALTER TABLE `icerikYayinla`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icerik_degerlendirme`
--
ALTER TABLE `icerik_degerlendirme`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `icerik_followlar`
--
ALTER TABLE `icerik_followlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bolumSayfalari`
--
ALTER TABLE `bolumSayfalari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `icerikBilgisi`
--
ALTER TABLE `icerikBilgisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `icerikYayinla`
--
ALTER TABLE `icerikYayinla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `icerik_degerlendirme`
--
ALTER TABLE `icerik_degerlendirme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `icerik_followlar`
--
ALTER TABLE `icerik_followlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
