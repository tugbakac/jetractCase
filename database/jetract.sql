-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Tem 2020, 16:13:05
-- Sunucu sürümü: 10.3.15-MariaDB
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `jetract`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `test`
--

CREATE TABLE `test` (
  `UserID` int(50) NOT NULL,
  `UserName` text COLLATE utf8_turkish_ci NOT NULL,
  `UserMail` text COLLATE utf8_turkish_ci NOT NULL,
  `UserPassword` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `test`
--

INSERT INTO `test` (`UserID`, `UserName`, `UserMail`, `UserPassword`) VALUES
(1, 'tugba', 'tugbakac45@gmail.com', '123'),
(2, 'deneme', 'deneme@mail.com', '456'),
(3, 'tugba', 'tugbakac45@gmail.com', '123'),
(4, 'deneme', 'deneme@mail.com', '456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userinfo`
--

CREATE TABLE `userinfo` (
  `UserID` int(50) NOT NULL,
  `UserName` text COLLATE utf8_turkish_ci NOT NULL,
  `UserMail` text COLLATE utf8_turkish_ci NOT NULL,
  `UserPassword` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `userinfo`
--

INSERT INTO `userinfo` (`UserID`, `UserName`, `UserMail`, `UserPassword`) VALUES
(1, 'tugba', 'tugbakac45@gmail.com', '123'),
(2, 'deneme', 'deneme@mail.com', '456');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`UserID`);

--
-- Tablo için indeksler `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`UserID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `test`
--
ALTER TABLE `test`
  MODIFY `UserID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `UserID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
