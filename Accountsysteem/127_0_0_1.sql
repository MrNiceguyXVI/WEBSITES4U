-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jun 2019 om 17:56
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--
CREATE DATABASE IF NOT EXISTS `accounts` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `accounts`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikersgegevens`
--

CREATE TABLE `gebruikersgegevens` (
  `Gebruikersnaam` text,
  `Wachtwoord` text,
  `Admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikersgegevens`
--

INSERT INTO `gebruikersgegevens` (`Gebruikersnaam`, `Wachtwoord`, `Admin`) VALUES
('Zach', '789', 'NO'),
('Gert', 'Gert24', 'YES'),
('opa', '1', 'NO'),
('Jason', 'Admin', 'YES'),
('klant', 'klant1', 'NO');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `id` int(100) NOT NULL,
  `title` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `specs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`id`, `title`, `image`, `description`, `specs`) VALUES
(36, 'Asus Chromebook C523NA-EJ0054', 'pc1.webp', 'De ASUS Chromebook C523NA-EJ0054 is geschikt voor het bekijken van films en series in full HD beeldkwaliteit. Met de Intel Pentium processor werken apps soepel.Dankzij 8 GB werkgeheugen kan deze laptop meerdere taken gelijktijdig uitvoeren. Het 64 GB flashgeheugen werkt sneller dan een traditionele harde schijf en is daarnaast ook stiller. Door de beperkte opslagcapaciteit is het aanbevolen gebruik te maken van cloudopslag of een externe geheugenkaart. Een 15.6 inch biedtveel werkruimte op het beeldscherm. Met deze Chromebook kun je 10 uur lang werken zonder opladen. ', 'Product specificaties\r\n\r\nProcessor\r\nType - Intel Pentium N4200\r\nCodenaam - Apollo lake\r\nKloksnelheid - 1,1 GHz (max 2,5 Ghz)\r\n \r\nGeheugen\r\nIntern geheugen - 8 GB DDR4\r\nMax - 8 GB\r\nLayout - 1 x 8 GB\r\n\r\nOpslag\r\nTotale opslag - 64 GB Flash\r\nSnelheid - Solid State\r\nKaartlezer - Micro SD\r\n\r\nBeeldsherm\r\nBeeldverhouding - 16:09\r\nSchermgrootte - 15.6 Inch\r\nResolutie - 1920 x 1080 pixels\r\nType - IPS\r\nVerversing snelheid - 60 Hz\r\n\r\nVideokaart\r\nModel - Onboard>\r\nVideokaart - Intel HD Graphics 505>\r\nGeheugen - Gedeeld\r\n\r\nNetwerkverbinding\r\nWifi - Ja\r\n>Bluetooth - Ja, 4.0\r\nWiDi - Nee\r\n\r\nAansluitingen\r\nAantal usb-poorten - 4\r\nVGA - Nee\r\nDisplayPort - 1\r\n\r\nAudio - Luidsprekers\r\n\r\nBatterij\r\nGeschatte accuduur - Max 10 uur\r\nVermogen - 45 W\r\n                       \r\nArtikel informatie\r\nInhoud - handleiding, adapter\r\nArtikelnummer - 654646546\r\nEAN - 4718017179249\r\nType - Chromebook\r\nBesturingssysteem - Chrome OS\r\nAfmetingen - 35,8 x 24,9 cm'),
(37, 'HP Elitebook 2560p', 'pc2.webp', 'Ben je gecharmeerd van het geborstelde aluminium of vind je m gewoon lekker compact en handzaam?                           Wat de reden ook is, er is altijd een goede reden om te kiezen voor de refurbished HP2560p.                           De prestaties liegen er niet om dankzij de Intel Core i5-2450m processor en 4GB DDR3 geheugen.                                                      Door het 12.5 inch beeldscherm is deze HP erg handzaam en door de metalen behuizing heel erg stevig.                           Verder voorzien van alles wat belangrijk is zoals een displayport, fingerprintreader en een webcam.                           Een erg voordelige laptop die alles in huis heeft en er ook nog eens geweldig uit ziet.', 'Product specificaties\r\n\r\nProcessor\r\nType - Intel Pentium N4200\r\nCodenaam - Apollo lake\r\nKloksnelheid - 1,1 GHz (max 2,5 Ghz)\r\n \r\nGeheugen\r\nIntern geheugen - 8 GB DDR4\r\nMax - 8 GB\r\nLayout - 1 x 8 GB\r\n\r\nOpslag\r\nTotale opslag - 64 GB Flash\r\nSnelheid - Solid State\r\nKaartlezer - Micro SD\r\n\r\nBeeldsherm\r\nBeeldverhouding - 16:09\r\nSchermgrootte - 15.6 Inch\r\nResolutie - 1920 x 1080 pixels\r\nType - IPS\r\nVerversing snelheid - 60 Hz\r\n\r\nVideokaart\r\nModel - Onboard>\r\nVideokaart - Intel HD Graphics 505>\r\nGeheugen - Gedeeld\r\n\r\nNetwerkverbinding\r\nWifi - Ja\r\n>Bluetooth - Ja, 4.0\r\nWiDi - Nee\r\n\r\nAansluitingen\r\nAantal usb-poorten - 4\r\nVGA - Nee\r\nDisplayPort - 1\r\n\r\nAudio - Luidsprekers\r\n\r\nBatterij\r\nGeschatte accuduur - Max 10 uur\r\nVermogen - 45 W\r\n                       \r\nArtikel informatie\r\nInhoud - handleiding, adapter\r\nArtikelnummer - 654646546\r\nEAN - 4718017179249\r\nType - Chromebook\r\nBesturingssysteem - Chrome OS\r\nAfmetingen - 35,8 x 24,9 cm');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
