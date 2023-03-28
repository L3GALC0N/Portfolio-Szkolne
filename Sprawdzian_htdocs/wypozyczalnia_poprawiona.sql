-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 16 Lis 2021, 11:43
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wypozyczalnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `ID_klienta` int(11) NOT NULL,
  `Nazwisko` varchar(35) NOT NULL,
  `Imie` varchar(20) NOT NULL,
  `Nr_dowodu` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`ID_klienta`, `Nazwisko`, `Imie`, `Nr_dowodu`) VALUES
(1, 'Nowakowski', 'Jerzy', 'ASD23432'),
(2, 'Kot', 'Jan', 'AED34234'),
(3, 'Cichy', 'Karol', 'AMS23223'),
(4, 'Kosior', 'Piotr', 'AFE45344'),
(5, 'Lew', 'Ewa', 'AKO44433'),
(6, 'Kowalski', 'Krzysztof', 'ASD19343'),
(7, 'Nowak', 'Monika', 'AMF32223'),
(8, 'Konior', 'Marcin', 'ADS124365');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `ID_samochodu` int(11) NOT NULL,
  `Marka` varchar(11) NOT NULL,
  `Model` varchar(11) NOT NULL,
  `Nr_rejestracyjny` varchar(11) NOT NULL,
  `rok_produkcji` int(4) NOT NULL DEFAULT 2000
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`ID_samochodu`, `Marka`, `Model`, `Nr_rejestracyjny`, `rok_produkcji`) VALUES
(1, 'Volkswagen', 'Amarok', 'KRA 12342', 2000),
(2, 'Volkswagen', 'Amarok', 'KRA 33442', 2006),
(3, 'Volkswagen', 'Passat', 'KRA 42334', 2000),
(4, 'Audi', 'A5', 'KRA 12343', 2009),
(5, 'Audi', 'A5', 'KRA 12346', 2000),
(6, 'Audi', 'A6', 'KRA 12777', 2000),
(7, 'Skoda', 'Octavia', 'KRA 12344', 2011),
(8, 'Skoda', 'Octavia', 'KRA 32354', 2000),
(9, 'Skoda', 'Superb', 'KRA 25433', 2000),
(10, 'Skoda', 'Octavia', 'KRA 98769', 2014),
(11, 'Volkswagen', 'Passat', 'KRA 55566', 2000),
(12, 'Skoda', 'Superb', 'KRA 78553', 2010);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `ID_wypozyczenia` int(11) NOT NULL,
  `ID_samochodu` int(11) NOT NULL,
  `ID_klienta` int(11) NOT NULL,
  `Data_wypozycz` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`ID_wypozyczenia`, `ID_samochodu`, `ID_klienta`, `Data_wypozycz`) VALUES
(1, 3, 3, '2016-08-02'),
(2, 5, 6, '2016-08-04'),
(3, 6, 5, '2016-08-04'),
(4, 7, 3, '2016-08-08'),
(5, 1, 1, '2016-08-08'),
(6, 12, 2, '2016-08-09'),
(7, 10, 4, '2016-08-10'),
(8, 3, 1, '2016-08-11'),
(9, 9, 3, '2016-08-13'),
(10, 8, 7, '2016-08-16'),
(11, 2, 4, '2016-08-18');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`ID_klienta`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`ID_samochodu`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`ID_wypozyczenia`),
  ADD KEY `ID_samochodu` (`ID_samochodu`),
  ADD KEY `ID_klienta` (`ID_klienta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `ID_klienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD CONSTRAINT `wypozyczenia_ibfk_2` FOREIGN KEY (`ID_samochodu`) REFERENCES `samochody` (`ID_samochodu`),
  ADD CONSTRAINT `wypozyczenia_ibfk_3` FOREIGN KEY (`ID_klienta`) REFERENCES `klienci` (`ID_klienta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
