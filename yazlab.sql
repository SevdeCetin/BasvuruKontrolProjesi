-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 18 Haz 2019, 19:23:15
-- Sunucu sürümü: 5.7.24
-- PHP Sürümü: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yazlab`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giris`
--

DROP TABLE IF EXISTS `giris`;
CREATE TABLE IF NOT EXISTS `giris` (
  `TC` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Ad` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `SoyAd` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Yetki` int(1) NOT NULL,
  `Sifre` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `giris`
--

INSERT INTO `giris` (`TC`, `Ad`, `SoyAd`, `Yetki`, `Sifre`) VALUES
('12345678911', 'Sevda', 'Cetin', 1, '12345'),
('12345678910', 'Ahmet', 'Yilmaz', 0, '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `isci`
--

DROP TABLE IF EXISTS `isci`;
CREATE TABLE IF NOT EXISTS `isci` (
  `Firma` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `TC` varchar(11) COLLATE utf8mb4_turkish_ci NOT NULL,
  `AdSoyad` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Alan` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `LinkSeviye` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `Belge1` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `Belge2` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `onay` varchar(15) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `Belge3` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `Belge4` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `Belge5` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `isci`
--

INSERT INTO `isci` (`Firma`, `TC`, `AdSoyad`, `Alan`, `email`, `LinkSeviye`, `Belge1`, `Belge2`, `onay`, `Belge3`, `Belge4`, `Belge5`) VALUES
('HMZYAPI', '63215987523', 'Necmi ErtÃ¼rk', 'Usta', 'Necmi@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', NULL, NULL),
('Lenovo', '43875612358', 'Åževval Kaya', 'MÃ¼hendis', 'sevval@gmail.com', 'Seviye2', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', NULL, NULL, NULL),
('Lenovo', '98621316612', 'Burcu Bodur', 'MÃ¼hendis', 'burcu@gmail.com', 'Seviye2', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', NULL, NULL, NULL),
('Lenovo', '56325987412', 'Kadir Topal', 'Kalfa', 'kadir@gmail.com', 'Seviye2', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', NULL, NULL, NULL),
('SSC', '74185296300', 'Mert GÃ¼ngÃ¶r', 'Tekniker', 'Mertg@gmail.com', 'Seviye1', 'Belge1.docx', NULL, 'onaylandi', NULL, NULL, NULL),
('Lenovo', '63254897201', 'Seda Alkan', 'Tekniker', 'Seda@gmail.com', 'Seviye1', 'dosya.txt', NULL, 'onaylanmadÄ±', NULL, NULL, NULL),
('Aysefa', '63254987232', 'Mert Tekin', 'Tekniker', 'Mert@gmail.com', 'Seviye1', 'dosya.txt', NULL, 'onaylandi', NULL, NULL, NULL),
('Aysefa', '32586497812', 'Sefa Eker', 'MÃ¼hendis', 'sefa@gmail.com', 'Seviye1', 'dosya.txt', NULL, 'onaylanmadÄ±', NULL, NULL, NULL),
('Aysefa', '84569725689', 'Eren Sar', 'Usta', 'Eren@gmail.com', 'Seviye1', 'dosya.txt', NULL, 'onaylanmadÄ±', NULL, NULL, NULL),
('Aysefa', '78931568472', 'RÄ±za Pek', 'Usta', 'Riza@gmail.com', 'Seviye3', 'dosya.txt', 'dosya.txt', 'onaylanmadÄ±', 'dosya.txt', NULL, NULL),
('HMZYAPI', '52117446285', 'Hamza GÃ¼ndoÄŸan', 'YÃ¶netici', 'Hamza@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', NULL, NULL),
('HMZYAPI', '88996625687', 'Emine GÃ¼ndoÄŸan', 'MÃ¼hendis', 'emine@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', NULL, NULL),
('HMZYAPI', '44112569875', 'Dilara KÃ¼bra', 'MÃ¼hendis', 'DilaraKubra@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', NULL, NULL),
('SSC', '45689966321', 'Metehan Kalyoncu', 'Tekniker', 'Metehan@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', 'Belge4.docx', NULL),
('SSC', '23566566615', 'Hilal YÄ±lmaz', 'MÃ¼hendis', 'Hilal@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', 'Belge4.docx', NULL),
('SSC', '43900852012', 'Sevde Ã‡etin', 'YÃ¶netici', 'svdsrctn@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylandi', 'Belge3.docx', 'Belge4.docx', NULL),
('KOU', '65998563224', 'Hande Bilirgen', 'Ä°nsan KaynaklarÄ±', 'Hande@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', 'Belge4.docx', 'Belge5.docx'),
('KOU', '63255456621', 'KÃ¼bra Ã–zkaya', 'EÄŸitmen', 'Kubra@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', 'Belge4.docx', 'Belge5.docx'),
('KOU', '33665585214', 'Mehmet Dermez', 'Usta', 'Mehmet@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', 'Belge4.docx', 'Belge5.docx'),
('SSC', '23655856697', 'Fatih Ã‡etin', 'Kalfa', 'Faatih@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', 'Belge4.docx', NULL),
('KOU', '63322586661', 'Ahmet YÃ¼ksel', 'Usta', 'Ahmet@gmail.com', 'Seviye3', 'Belge1.docx', 'Belge2.docx', 'onaylanmadÄ±', 'Belge3.docx', 'Belge4.docx', 'Belge5.docx');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
