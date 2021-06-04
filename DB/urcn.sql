-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql01.knowyy.beep.pl:3306
-- Czas generowania: 28 Kwi 2021, 23:25
-- Wersja serwera: 5.7.31-34-log
-- Wersja PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `urcn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `link` text NOT NULL,
  `add_by` text NOT NULL,
  `visible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `films`
--

INSERT INTO `films` (`id`, `title`, `link`, `add_by`, `visible`) VALUES
(2, 'Classic Car Meet | GTA V', 'https://www.youtube.com/watch?v=7gVOe6ahbVQ', 'SnaYQ97', 0),
(4, 'Benny\'s OMW Sponsored Car Meet | GTA V', 'https://www.youtube.com/watch?v=FFlVz0KrA7s', 'Knowyy', 0),
(5, 'Luxury Meeting | GTA V', 'https://www.youtube.com/watch?v=YZnqH6mfg-4', 'Knowyy', 0),
(6, 'Rusty Car Meet | GTA V', 'https://www.youtube.com/watch?v=0A2JAhpvWLI', 'Knowyy', 0),
(7, 'Night Racing Los Santos', 'https://youtu.be/oDA3gJQmwgw', 'Knowyy', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klanowicze`
--

CREATE TABLE `klanowicze` (
  `id` int(11) NOT NULL,
  `discord_code` text CHARACTER SET utf8mb4 NOT NULL,
  `game_nick` varchar(16) CHARACTER SET utf8mb4 NOT NULL,
  `level` int(4) NOT NULL,
  `earned` int(11) NOT NULL,
  `spent` int(11) NOT NULL,
  `difference` int(11) NOT NULL,
  `join_date` date NOT NULL,
  `comment` text CHARACTER SET utf8mb4 NOT NULL,
  `add_by` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klanowicze`
--

INSERT INTO `klanowicze` (`id`, `discord_code`, `game_nick`, `level`, `earned`, `spent`, `difference`, `join_date`, `comment`, `add_by`) VALUES
(43, '1275', 'SnaYQ97', 316, 286200000, 279300000, 5300000, '2019-08-30', 'Testowe sprawdzanie', 'Knowyy'),
(44, '0744', 'Mokry_Ryszard', 118, 76500000, 77600000, 4100000, '2019-08-30', 'coÅ› dla czytajÄ…cego <3', 'Knowyy'),
(45, '4749', 'moKApar', 132, 116900000, 126800000, 10000000, '2019-08-30', 'coÅ› dla czytajÄ…cego <3', 'Knowyy'),
(46, 'null', 'MrsPietruszka', 61, 12300000, 11700000, 600000, '2019-08-30', 'coÅ› dla czytajÄ…cego <3', 'Knowyy'),
(48, '0018', 'KubaeN', 47, 2900000, 3100000, 700000, '2019-08-30', '', 'Knowyy'),
(50, '0833', 'Mix0noo', 36, 7100000, 10500000, 3600000, '2019-08-30', '', 'Knowyy'),
(51, '7123', 'MisieQ3579', 41, 2700000, 5100000, 2400000, '2019-08-30', '', 'Knowyy'),
(52, '7679', 'Patrol2814', 119, 25300000, 28500000, 3200000, '2019-08-30', '', 'Knowyy'),
(53, '9226', 'SzymiZo', 223, 104500000, 81800000, -21800000, '2019-08-30', '', 'Knowyy'),
(54, '2307', 'Sybekhide', 345, 254000000, 271000000, 17000000, '2020-11-29', 'ponowne dołączenie do ekipy.', 'Radziek'),
(55, '1084', 'TelirPL', 118, 21600000, 22500000, 900000, '2019-08-30', '', 'Knowyy'),
(57, '2164', 'TheEggsYT', 136, 44600000, 49100000, 5500000, '2019-08-30', '', 'Knowyy'),
(58, '8629', 'PLStrazak', 216, 87600000, 162800000, 83400000, '2019-08-30', 'sharki', 'Knowyy'),
(59, '7457', 'Player688', 238, 418700000, 396000000, 30300000, '2019-08-30', 'poradnik stania AFK', 'Knowyy'),
(60, '8236', 'sonczeponcze', 207, 195600000, 198400000, 3700000, '2019-08-30', '', 'Knowyy'),
(61, '6172', 'Satnox', 117, 41600000, 42300000, 2800000, '2019-08-30', '', 'Knowyy'),
(62, '7352', 'BojeQ25', 88, 32000000, 31800000, 1000000, '2019-08-30', '', 'Knowyy'),
(63, '8856', 'BoskiTabaluga', 49, 17800000, 19900000, 4000000, '2019-08-30', '', 'Knowyy'),
(64, '8206', 'DrewkoXPL', 52, 5700000, 6000000, 1900000, '2019-08-30', '', 'Knowyy'),
(65, '1314', 'cuba20036', 67, 13800000, 14700000, 900000, '2019-08-30', '', 'Knowyy'),
(66, '7652', 'Aligamespl', 105, 34000000, 53700000, 21000000, '2019-08-30', '', 'Knowyy'),
(67, '3269', '_NuclearFred_', 46, 21000000, 21000000, 478000, '2019-08-30', 'Mundek', 'Knowyy'),
(68, '3096', 'anrzej_', 155, 24100000, 21400000, 900000, '2019-08-30', '', 'Knowyy'),
(69, '2686', 'BigGizo', 41, 3500000, 4200000, 900000, '2019-08-30', '', 'Knowyy'),
(70, '2047', 'Antenu', 44, 2500000, 3100000, 600000, '2019-08-30', '', 'Knowyy'),
(71, '6899', 'EgonStetmann2215', 133, 76400000, 80700000, 5300000, '2019-08-30', '', 'Knowyy'),
(72, '2749', 'KalcziXD', 72, 11100000, 10800000, 100000, '2019-08-30', '', 'Knowyy'),
(73, '7124', 'itzCrytal', 37, 1300000, 2200000, 1600000, '2019-08-30', '', 'Knowyy'),
(74, '1938', 'kapichex', 187, 106900000, 119000000, 13000000, '2019-08-30', '', 'Knowyy'),
(75, '9942', 'Koerino', 65, 11000000, 11400000, 600000, '2019-08-30', '', 'Knowyy'),
(76, '9597', 'GrublonGda', 32, 1900000, 4000000, 2400000, '2019-08-30', '', 'Knowyy'),
(77, '5012', 'gonzo99799', 28, 1700000, 3600000, 2200000, '2019-08-30', '', 'Knowyy'),
(78, '8476', 'Hilderos', 48, 4300000, 12600000, 8400000, '2019-08-30', '', 'Knowyy'),
(79, '6670', 'Inkevn', 86, 36000000, 35300000, 1300000, '2019-08-30', '', 'Knowyy'),
(80, '3008', 'Im_So_CrazY_PL', 124, 39400000, 41600000, 3800000, '2019-08-30', '', 'Knowyy'),
(81, '6821', 'Piechur2506', 112, 74500000, 76600000, 3100000, '2019-08-30', '', 'Knowyy'),
(82, '5428', 'Prodigyyy_', 98, 47700000, 56900000, 9300000, '2019-08-30', '', 'Knowyy'),
(83, '7097', 'BrutalBaby', 353, 284900000, 274500000, 21100000, '2019-08-30', '', 'Knowyy'),
(84, '5351', 'BrutalneSudoku', 182, 112300000, 108100000, 7300000, '2019-08-30', 'bakÅ‚aÅ¼an', 'Knowyy'),
(85, '3491', 'Kaszadin', 245, 150400000, 120300000, 5200000, '2019-08-30', '', 'Knowyy'),
(86, '3765', 'Knowyy_', 356, 313900000, 317400000, 10000000, '2019-08-30', '', 'Knowyy'),
(88, '8225', 'PaZeRa', 200, 111300000, 115400000, 7600000, '2019-08-30', '', 'Knowyy'),
(89, '5038', 'Radziek24', 324, 335800000, 329400000, 7600000, '2019-08-30', 'KONIEC!', 'Knowyy'),
(90, '3054', 'NeutraL4FuN', 134, 75600000, 92000000, 16900000, '2019-09-01', '', 'Knowyy'),
(91, '3620', 'mant3z', 132, 85400000, 85800000, 400000, '2019-09-01', '', 'Knowyy'),
(92, '6681', 'KENEZ521', 116, 35500000, 41600000, 6100000, '2019-09-03', '', 'Knowyy'),
(93, '1215', 'Niekryty765', 285, 277100000, 290800000, 20000000, '2019-09-15', '', 'Knowyy'),
(94, '7843', 'Hordyy', 169, 88100000, 93400000, 5300000, '2019-09-19', 'Hordy wraca. MowiÅ‚ Å¼e juÅ¼ nie zmieni ekipy SC', 'Knowyy'),
(95, '0305', 'Grzegorzxx', 1, 0, 1000000, 1000000, '2019-10-08', 'Początkujący. Pakiet kryminalisty kupiony bo okrągły milion na koncie', 'Knowyy'),
(97, '2990', 'KonradeQu', 15, 654300, 357400, 252000, '2019-10-13', 'BANA DOSTAÅ', 'Knowyy'),
(98, '3222', 'Druid_Pakuel', 29, 999000, 1200000, 801000, '2019-10-13', '', 'Knowyy'),
(99, '6830', 'AronKams', 253, 198400000, 230000000, 32000000, '2019-10-16', 'mod fb', 'Knowyy'),
(100, '7871', 'fe3lfre3', 183, 66200000, 72210000, 6021000, '2019-10-23', 'TPLC w znaj. 1 osoba', 'Knowyy'),
(101, '6892', 'DaRaH23213', 55, 5300000, 7200000, 1900000, '2019-10-23', '', 'Knowyy'),
(102, '5756', 'Hubs000n', 119, 132400000, 194400000, 62000000, '2019-10-26', 'na odpowiedzialnoÅ›Ä‡ RadÅºka', 'Knowyy'),
(103, '2925', 'miller1610', 37, 1500000, 2500000, 2000000, '2019-10-28', 'pakiet kryminalisty', 'Knowyy'),
(104, '0802', 'SteamAsPl', 65, 7200000, 6600000, 800000, '2019-10-29', '', 'Knowyy'),
(105, '1635', 'plasticFireBall5', 135, 36800000, 41700000, 6200000, '2019-10-29', '', 'Knowyy'),
(106, '7674', 'JacobsUrbanos', 86, 21800000, 20500000, 1300000, '2019-10-29', '', 'Knowyy'),
(107, '3588', 'Gusciorek', 128, 41700000, 16500000, 15000000, '2019-11-02', 'sharki', 'Knowyy'),
(108, '3172', 'Nowosinsky69', 74, 10500000, 10700000, 200000, '2019-11-02', '', 'Knowyy'),
(109, '0237', 'Liber9477', 38, 4700000, 5800000, 900000, '2019-11-02', '', 'Knowyy'),
(110, '9994', 'Mycio84', 7, 217400, 1216000, 1000000, '2019-11-30', '', 'Knowyy'),
(111, '4186', 'qqflower1969', 82, 26200000, 27200000, 100000, '2019-12-03', 'komentaÅ¼', 'Knowyy'),
(112, '5565', 'Thorus2286', 13, 140000, 1100000, 1000000, '2019-12-03', 'Pakiet Kryminalisty na start', 'Knowyy'),
(113, '6419', 'Gabrynio03', 49, 4500000, 4500000, 0, '2019-12-09', '', 'Knowyy'),
(114, '2193', 'TakeThisDoBuzi', 122, 55500000, 63500000, 8000000, '2019-12-09', 'Nie podoba mi siÄ™ nick...', 'Knowyy'),
(116, '8036', 'Adikoo_coelhio', 35, 15300000, 12600000, 0, '2019-12-24', 'wyzerowane konto', 'Knowyy'),
(117, '3551', 'Dzikowiec', 41, 2500000, 2800000, 300000, '2019-12-26', '', 'Knowyy'),
(118, '9284', 'RajksPlaY', 124, 83000000, 90900000, 7900000, '2019-12-30', 'Kolega Cuby', 'Knowyy'),
(119, '5877', 'Acid-YoSHi', 44, 12700000, 12700000, 0, '2020-01-02', 'Yoshi z Hercon Corp', 'Knowyy'),
(120, '6336', '_-luto-_', 32, 9200000, 9200000, 0, '2020-01-02', 'Luto z Hercon Corp', 'Knowyy'),
(122, '1496', 'tabson2222', 55, 620000, 5900000, -300000, '2020-01-05', '', 'Knowyy'),
(123, '6904', 'asasinmati123123', 160, 1700000, 31600000, 30000000, '2020-01-06', 'Karta shark 30 mln od kolegi na STEAMIE', 'Knowyy'),
(124, '6413', '_MateO___', 37, 2400000, 15600000, 13200000, '2020-01-07', '???', 'Knowyy'),
(126, '5377', 'WaleWiadro_', 50, 4900000, 4900000, 180000, '2020-01-06', 'spoko staty', 'Knowyy'),
(127, '2690', 'Herckus112', 31, 1600000, 2100000, 500000, '2020-01-07', '', 'Knowyy'),
(128, '4338', 'ljayy02', 39, 3000000, 3800000, 1800000, '2020-01-07', '', 'Knowyy'),
(130, '5824', ' ShanwayPL', 35, 1400000, 1200000, 0, '2020-01-06', '', 'Knowyy'),
(131, '5926', 'MaMiNpAPa1', 36, 2000000, 1700000, 200000, '2020-01-07', '', 'Knowyy'),
(132, '3306', '__-ZodiaC-__', 28, 4200000, 3600000, 0, '2020-01-07', '', 'Knowyy'),
(133, '7518', 'rafikking_', 40, 3400000, 4500000, 1100000, '0000-00-00', '', 'Knowyy'),
(134, '1410', 'OsomTygrys', 96, 26100000, 28900000, 3000000, '2020-01-07', '', 'Knowyy'),
(135, '8737', 'Morgulek', 63, 5300000, 4500000, 420000, '2020-01-02', 'Wyciek danych i Bogdan ukoÅ„czone', 'Knowyy'),
(136, '5412', 'bucekxd', 29, 9200000, 11400000, 2200000, '2020-01-15', 'KoleÅ¼anka Sonczeponcze', 'Knowyy'),
(137, '4566', 'Viaari', 37, 3600000, 4700000, 1100000, '2020-01-28', '', 'Knowyy'),
(138, '3053', 'NeXHX1', 15, 359000, 2359000, 2000000, '2020-02-10', '2mln rÃ³Å¼nicy z Promocji R*', 'Knowyy'),
(140, '5107', 'Kondziu1705', 61, 5700000, 7900000, 2200000, '2020-02-24', '', 'Knowyy'),
(141, '4512', 'GazrozSK', 36, 4100000, 5200000, 2100000, '2020-02-25', '', 'Knowyy'),
(142, '2262', 'ziomacki', 67, 16800000, 17500000, 700000, '2020-02-26', '', 'Knowyy'),
(143, '3079', 'UtOski', 71, 8600000, 9800000, 1200000, '2020-03-01', '14 lat', 'Knowyy'),
(144, '7111', 'pvllyx', 12, 1000000, 2500000, 1500000, '2020-03-03', 'Wiktoria', 'Knowyy'),
(145, '1477', 'kuleczka22', 11, 100000, 1100000, 1000000, '2020-03-14', 'Pakiet kryminalisty', 'Knowyy'),
(146, '2871', 'WieczornyPiotrus', 43, 10400000, 10400000, 0, '2020-03-19', '', 'Knowyy'),
(147, '3400', 'CesarVialpando20', 165, 200000000, 250000000, 50000000, '2020-03-25', '50mln r&oacute;żnicy, kolega arona', 'Knowyy'),
(148, '6201', 'Deadrabbit1355', 92, 49300000, 56400000, 7100000, '2020-03-25', 'Chyba kolega arona', 'Knowyy'),
(149, '8182', 'Filip0605', 75, 12200000, 14900000, 2700000, '2020-04-23', '', 'Knowyy'),
(151, '0903', 'Kajson96', 241, 192600000, 198907616, 6307616, '2020-05-07', 'Z COBS. I co? Nie wiem...', 'Knowyy'),
(152, '6862', 'KooTleeeT', 81, 90900000, 92000000, 1100000, '2020-05-17', 'Z FB - FiveM, przypomnieć o regulaminie', 'SnaYQ97'),
(153, '7352', 'BojeQ25', 90, 32100000, 33700000, 1600000, '2020-05-18', '', 'Knowyy'),
(154, '6949', 'Olek1596', 20, 415000, 1330000, 915000, '2020-05-18', 'Zmieniłem kod discord', 'Knowyy'),
(155, '6035', 'Giovanni2137', 18, 620000, 824000, 204000, '2020-05-20', '', 'Knowyy'),
(157, '8849', 'borytokozak2137', 36, 7600000, 9000000, -1300000, '2020-05-26', 'Z: $7,6 mln W: $7,9 mln B: $0,9 mln', 'SnaYQ97'),
(158, '5251', 'szwedzio9182', 73, 7800000, 8400000, 600000, '2020-05-26', '', 'Knowyy'),
(159, '4895', 'perfectmichalix1', 36, 1400000, 1600000, 200000, '2020-05-27', '', 'SnaYQ97'),
(160, '1555', 'Stefangryf', 33, 2900000, 4500000, 1600000, '2020-05-27', '', 'Knowyy'),
(163, '3971', 'Smarpooo', 47, 2700000, 3200000, 500000, '2020-06-02', 'chyba pakiet początkującego', 'SnaYQ97'),
(164, '2489', 'mister90890', 21, 591000, 2100000, 1509000, '2020-06-02', '', 'Knowyy'),
(165, '8015', 'DOPESHT13', 16, 237300, 1744000, 1506700, '2020-06-03', '', 'Knowyy'),
(167, '9337', 'Axenom', 1, 0, 0, 0, '2020-06-23', 'Kolega Knowyy\'ego. Dopiero zaczyna.', 'Knowyy'),
(168, '3259', 'evilLukaMagnotta', 37, 9400000, 12200000, 2800000, '2020-07-05', '', 'Kaszadin'),
(169, '0962', 'xawiix', 84, 18500000, 19500000, 1000000, '2020-07-25', '', 'Knowyy'),
(170, '6027', 'Dellerineq', 43, 2700000, 3800000, 1100000, '2020-07-26', '', 'Knowyy'),
(171, '7685', 'Pedroeloko', 20, 415000, 915000, 500000, '2020-07-27', '', 'Knowyy'),
(172, '0215', 'SzachyPL', 213, 172100000, 172300000, 200000, '2020-07-28', '', 'Knowyy'),
(173, '5926', 'Kiwi475', 107, 72800000, 73600000, 800000, '2020-07-28', '', 'Knowyy'),
(174, '9496', 'THE_BECZA', 95, 34100000, 55700000, 21600000, '2020-07-29', '', 'Knowyy'),
(175, '1086', 'Thomas_837', 99, 119500000, 118500000, -1000000, '2020-08-12', '37 lat', 'Knowyy'),
(176, '5721', 'Prorok_76', 229, 150200000, 159000000, 8800000, '2021-01-03', '', 'Knowyy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'User'),
(2, 'Moderator'),
(3, 'Administrator');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `nick`, `password`) VALUES
(43, 'SnaYQ97', '1234'),
(85, 'Kaszadin', 'yB2BGXpu'),
(86, 'Knowyy', '6849'),
(89, 'Radziek24', 'HasloRadziek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_to_role`
--

CREATE TABLE `user_to_role` (
  `id` int(11) NOT NULL,
  `ref_user` int(11) NOT NULL,
  `ref_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user_to_role`
--

INSERT INTO `user_to_role` (`id`, `ref_user`, `ref_role`) VALUES
(1, 43, 3),
(2, 86, 3),
(3, 85, 3),
(4, 89, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdjecia`
--

CREATE TABLE `zdjecia` (
  `id` int(11) NOT NULL,
  `link` varchar(200) COLLATE utf8_polish_ci NOT NULL,
  `author` varchar(16) COLLATE utf8_polish_ci NOT NULL,
  `add_by` text COLLATE utf8_polish_ci NOT NULL,
  `add_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zdjecia`
--

INSERT INTO `zdjecia` (`id`, `link`, `author`, `add_by`, `add_date`) VALUES
(11, 'https://cdn.discordapp.com/attachments/549178243081568277/565484117517533184/QQsp2qlPHEaxwZBWH7NJzg_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 22:29:31'),
(12, 'https://cdn.discordapp.com/attachments/549178243081568277/551036660578517002/aLSiYBpLikCtYvb7JUgJ-g_0_0.jpg', 'AdrianTheFixer', 'Knowyy', '2019-05-01 23:22:32'),
(13, 'https://cdn.discordapp.com/attachments/549178243081568277/551036684859473920/PGTA542687196.jpg', 'AdrianTheFixer', 'Knowyy', '2019-05-01 23:22:47'),
(14, 'https://cdn.discordapp.com/attachments/549178243081568277/551036717579239443/PGTA5184602875.jpg', 'AdrianTheFixer', 'Knowyy', '2019-05-01 23:22:57'),
(15, 'https://cdn.discordapp.com/attachments/549178243081568277/551036734377295874/PGTA5410503993.jpg', 'AdrianTheFixer', 'Knowyy', '2019-05-01 23:23:04'),
(16, 'https://cdn.discordapp.com/attachments/549178243081568277/551036755651067904/PGTA51339154690.jpg', 'AdrianTheFixer', 'Knowyy', '2019-05-01 23:23:12'),
(17, 'https://cdn.discordapp.com/attachments/549178243081568277/551036778887249938/PGTA51756424216.jpg', 'AdrianTheFixer', 'Knowyy', '2019-05-01 23:23:20'),
(19, 'https://cdn.discordapp.com/attachments/549178243081568277/551036874245013504/xjZnbz_1mE2tlvmxTop0GA_0_0.jpg', 'AdrianTheFixer', 'Knowyy', '2019-05-01 23:23:40'),
(20, 'https://cdn.discordapp.com/attachments/549178243081568277/551848561210425346/0f1hJdUe5k6t-ifBJwAx5g_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:23:51'),
(21, 'https://cdn.discordapp.com/attachments/549178243081568277/552162290628296725/dL0IuhlCB0ugMHmtd24OTg_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:24:01'),
(22, 'https://cdn.discordapp.com/attachments/549178243081568277/552162293006336029/i2eXHkwQOEyUetn9oKnLxA_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:24:29'),
(23, 'https://cdn.discordapp.com/attachments/549178243081568277/552162300270870539/z5OytVmatEaaJ4L8oBZXYw_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:24:40'),
(24, 'https://cdn.discordapp.com/attachments/549178243081568277/552263924095909908/wR-DtcUJUWSySmI8_w4Hg_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:25:00'),
(26, 'https://cdn.discordapp.com/attachments/549178243081568277/552263954123194369/AVQYwytHc0Ga0w9mtRlk7g_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:25:17'),
(27, 'https://cdn.discordapp.com/attachments/549178243081568277/552263964407627796/bV3BPoVdvk-KsDHkE2FM0g_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:25:25'),
(28, 'https://cdn.discordapp.com/attachments/549178243081568277/552263967267880960/OGFvN01hNkqJ44snaiWYRA_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:25:32'),
(29, 'https://cdn.discordapp.com/attachments/549178243081568277/552263969226752010/PlOAKPl5o0mmH76CWxtE6w_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:25:39'),
(30, 'https://cdn.discordapp.com/attachments/549178243081568277/552263971017719808/wSUliB-04UawaMsqk7U0pw_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:25:48'),
(31, 'https://cdn.discordapp.com/attachments/549178243081568277/552263971743203339/WTsHAtZV8k6DsKI96J4YiA_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:25:56'),
(32, 'https://cdn.discordapp.com/attachments/549178243081568277/552263975853621248/zdhaCs5jHU2TpkM_pvnUsw_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:26:03'),
(33, 'https://cdn.discordapp.com/attachments/549178243081568277/552488639028920350/gnuj.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:26:14'),
(34, 'https://cdn.discordapp.com/attachments/549178243081568277/552488667751645196/hondaa.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:26:28'),
(35, 'https://cdn.discordapp.com/attachments/549178243081568277/553280086732701702/4auBW5vpQUSNoeObO8YpWg_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:26:39'),
(36, 'https://cdn.discordapp.com/attachments/549178243081568277/553280107163156480/dNV0xkLfc0yzSs50GIKJdg_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:26:51'),
(37, 'https://cdn.discordapp.com/attachments/549178243081568277/553280113832099842/ytV1tswThk6tQIi6EH8ICw_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:27:14'),
(38, 'https://cdn.discordapp.com/attachments/549178243081568277/553280116281835521/TNmd3Wi_L0moVHBsVlnkaw_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:27:25'),
(39, 'https://cdn.discordapp.com/attachments/549178243081568277/553280116722106378/WKjxEbPlwUSi_N-HeG5Mbw_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:27:34'),
(40, 'https://cdn.discordapp.com/attachments/549178243081568277/553280117967814667/zGdhOohogUWvhs_DmSuhfQ_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:27:39'),
(41, 'https://cdn.discordapp.com/attachments/549178243081568277/553280119653793803/ZVbTQRNQsE-sioyLavQuZQ_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:27:47'),
(42, 'https://cdn.discordapp.com/attachments/549178243081568277/553332350038048771/sf.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:28:12'),
(43, 'https://cdn.discordapp.com/attachments/549178243081568277/553332357353046037/sf1.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:28:20'),
(44, 'https://cdn.discordapp.com/attachments/549178243081568277/554623435414700032/RS3.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:28:43'),
(45, 'https://cdn.discordapp.com/attachments/549178243081568277/554623460144447500/RS3.2.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:28:51'),
(46, 'https://cdn.discordapp.com/attachments/549178243081568277/554757344043466771/unknown.png', 'Knowyy', 'Knowyy', '2019-05-01 23:29:07'),
(47, 'https://cdn.discordapp.com/attachments/549178243081568277/554757387311906816/unknown.png', 'Knowyy', 'Knowyy', '2019-05-01 23:29:13'),
(48, 'https://cdn.discordapp.com/attachments/549178243081568277/554757426046566412/unknown.png', 'Knowyy', 'Knowyy', '2019-05-01 23:29:24'),
(49, 'https://cdn.discordapp.com/attachments/549178243081568277/555087697220337666/r4Lcqamp5UiPUvsuYzlO1g_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:29:34'),
(50, 'https://cdn.discordapp.com/attachments/549178243081568277/555087704589860865/TMPYRmKMR0CCe6_TRVSYlQ_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:29:40'),
(51, 'https://cdn.discordapp.com/attachments/549178243081568277/555377421910540299/k-6wpQCGk6cV2KhC9oN3Q_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:29:49'),
(52, 'https://cdn.discordapp.com/attachments/549178243081568277/555377425182228481/4jYPNCvEDk6BxChogTiJPQ_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:29:57'),
(53, 'https://cdn.discordapp.com/attachments/549178243081568277/555377435827503104/CpAOvHtiAEWP_EGjPHU1Ug_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:30:05'),
(54, 'https://cdn.discordapp.com/attachments/549178243081568277/555377436494135297/OX4jpRT91Eads2ZH1GHb8g_0_0.jpg', 'Rvkuzan', 'Knowyy', '2019-05-01 23:31:23'),
(55, 'https://cdn.discordapp.com/attachments/549178243081568277/555397922494087169/SPOILER_unknown.png', 'HakerskiEmil', 'Knowyy', '2019-05-01 23:31:29'),
(56, 'https://cdn.discordapp.com/attachments/549178243081568277/555848793912770812/PGTA590805075.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:31:41'),
(57, 'https://cdn.discordapp.com/attachments/549178243081568277/555895856641867777/2.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:32:07'),
(58, 'https://cdn.discordapp.com/attachments/549178243081568277/555895862656630870/1.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:32:14'),
(59, 'https://cdn.discordapp.com/attachments/549178243081568277/555895866339229726/Az5P0uU_AkiKmeH-GC1opw_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:32:23'),
(60, 'https://cdn.discordapp.com/attachments/549178243081568277/555895866422984711/WkSyyV5ha06a5J_G_22xlg_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:32:29'),
(61, 'https://cdn.discordapp.com/attachments/549178243081568277/555895883754110986/8.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:32:52'),
(62, 'https://cdn.discordapp.com/attachments/549178243081568277/555895885754531860/6.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:32:59'),
(63, 'https://cdn.discordapp.com/attachments/549178243081568277/555895887063416842/7.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:33:08'),
(64, 'https://cdn.discordapp.com/attachments/549178243081568277/555896156903964694/9.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:33:14'),
(65, 'https://cdn.discordapp.com/attachments/549178243081568277/555896158191353867/10.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:33:21'),
(66, 'https://cdn.discordapp.com/attachments/549178243081568277/555896598866165767/4.png', 'Kaszadin', 'Knowyy', '2019-05-01 23:33:29'),
(67, 'https://cdn.discordapp.com/attachments/549178243081568277/563690634683351040/PGTA5102068554.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:35:46'),
(68, 'https://cdn.discordapp.com/attachments/549178243081568277/563690638173011968/PGTA5339041295.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:35:56'),
(69, 'https://cdn.discordapp.com/attachments/549178243081568277/563690638487453696/PGTA5568545707.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:36:07'),
(70, 'https://cdn.discordapp.com/attachments/549178243081568277/563690642484756481/PGTA51822603001.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:36:13'),
(71, 'https://cdn.discordapp.com/attachments/549178243081568277/563690642652397579/PGTA51933157872.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:36:20'),
(72, 'https://cdn.discordapp.com/attachments/549178243081568277/563811517712039956/-o8BWIq90aYcR6XGrsX-A_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:36:38'),
(73, 'https://cdn.discordapp.com/attachments/549178243081568277/563811519226314753/3OAm52PPrEKSIxrMBxZhIA_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:36:45'),
(74, 'https://cdn.discordapp.com/attachments/549178243081568277/563811523881861199/I1sWsXCaqUmIDH-tZ3-luw_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:36:56'),
(75, 'https://cdn.discordapp.com/attachments/549178243081568277/563811524154490894/n8DJ-UzqnEeXYLOnAzVH1w_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:37:09'),
(76, 'https://cdn.discordapp.com/attachments/549178243081568277/563811526318751764/nEZ54yZAHk-QB8wD1AKkKA_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:37:39'),
(77, 'https://cdn.discordapp.com/attachments/549178243081568277/563811527438761994/WBlFPAf2IEmzyxzmKePSZg_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:37:48'),
(78, 'https://cdn.discordapp.com/attachments/549178243081568277/563811531154915437/XTKAfoZ1hE2RElQMwBuPRA_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:38:24'),
(79, 'https://cdn.discordapp.com/attachments/549178243081568277/563811532279119882/X9LfG7Hn8US_itxU-RL66Q_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:38:33'),
(80, 'https://cdn.discordapp.com/attachments/549178243081568277/564033878227157005/50NOMLdSh0etT3eLtAbTYw_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:38:41'),
(81, 'https://cdn.discordapp.com/attachments/549178243081568277/564033880252743680/bznP8BGp30a0Tvy5no_1Zw_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:38:50'),
(82, 'https://cdn.discordapp.com/attachments/549178243081568277/564033882060488705/ITPUdf9WoU61fmLWIVP2TA_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:38:59'),
(83, 'https://cdn.discordapp.com/attachments/549178243081568277/564033883922890772/mPrmYmqmukWRq4lZFPSwwA_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:39:06'),
(84, 'https://cdn.discordapp.com/attachments/549178243081568277/564033886661640212/smRqTNXQakidauZGJkCYoQ_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:39:15'),
(85, 'https://cdn.discordapp.com/attachments/549178243081568277/564033891611050004/ygLMCZeXqkut5hklbN2FIQ_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:39:22'),
(86, 'https://cdn.discordapp.com/attachments/549178243081568277/564033888536756267/WTAwnmf0lkaj2DvZVVDjUQ_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:39:31'),
(87, 'https://cdn.discordapp.com/attachments/549178243081568277/564825419191418881/PGTA51258845591.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:39:45'),
(88, 'https://cdn.discordapp.com/attachments/549178243081568277/564825422546862105/PGTA51576367526.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:39:56'),
(89, 'https://cdn.discordapp.com/attachments/549178243081568277/564825727858376719/PGTA51174004323.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:40:04'),
(90, 'https://cdn.discordapp.com/attachments/549178243081568277/564829660806905867/PGTA51593961761.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:40:15'),
(91, 'https://cdn.discordapp.com/attachments/549178243081568277/564829663453642791/PGTA5448179776.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:40:29'),
(92, 'https://cdn.discordapp.com/attachments/549178243081568277/564829677387120641/PGTA51871508022.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:40:36'),
(93, 'https://cdn.discordapp.com/attachments/549178243081568277/564829679958360064/PGTA5684477253.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:40:45'),
(94, 'https://cdn.discordapp.com/attachments/549178243081568277/564829691635171349/PGTA5114734663.jpg', 'Knowyy', 'Knowyy', '2019-05-01 23:40:53'),
(95, 'https://cdn.discordapp.com/attachments/549178243081568277/564833181727981598/unknown.png', 'HakerskiEmil', 'Knowyy', '2019-05-01 23:41:05'),
(97, 'https://cdn.discordapp.com/attachments/549178243081568277/565484096608927744/eJK_AP2wE0qYUaD57YKfjw_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:41:33'),
(98, 'https://cdn.discordapp.com/attachments/549178243081568277/565484097795784704/o3BqdaiHzEi6rujmIt_b7w_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:41:41'),
(99, 'https://cdn.discordapp.com/attachments/549178243081568277/565484097330479107/PxHVdFwNT0qfx9bqDVXYbQ_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:41:47'),
(100, 'https://cdn.discordapp.com/attachments/549178243081568277/565484138354704387/NT1A-u9ZjUuK8IeBHhYOHw_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:42:01'),
(101, 'https://cdn.discordapp.com/attachments/549178243081568277/572810596530126849/20190430172039_1.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:42:14'),
(102, 'https://cdn.discordapp.com/attachments/549178243081568277/572895277661552665/20190430224208_1.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:42:22'),
(103, 'https://cdn.discordapp.com/attachments/549178243081568277/572895279620292629/20190430224224_1.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:42:32'),
(104, 'https://cdn.discordapp.com/attachments/549178243081568277/572895285244723242/20190430224240_1.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:42:39'),
(106, 'https://cdn.discordapp.com/attachments/549178243081568277/573149022655610881/20190501145336_1.jpg', 'Kaszadin', 'Knowyy', '2019-05-01 23:42:55'),
(108, 'https://cdn.discordapp.com/attachments/549178243081568277/573574773880389632/20190502202052_1.jpg', 'Radziek24', 'Knowyy', '2019-05-02 22:04:40'),
(110, 'https://cdn.discordapp.com/attachments/549178243081568277/574354270359650345/20190504232205_1.jpg', 'Kaszadin', 'Knowyy', '2019-05-06 17:51:17'),
(111, 'https://cdn.discordapp.com/attachments/549178243081568277/576410347481858068/PGTA5427044239.jpg', 'Knowyy', 'Knowyy', '2019-05-10 23:49:45'),
(112, 'https://cdn.discordapp.com/attachments/549178243081568277/576871404021088278/PdWjCoaVB0ONMq6xCkboDg_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-11 23:12:52'),
(113, 'https://cdn.discordapp.com/attachments/549178243081568277/576871457448263680/wR7qoXPVP0qOroCc9jQ3Gg_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-11 23:12:57'),
(114, 'https://cdn.discordapp.com/attachments/549178243081568277/576871438267580427/m8RT_O2takCBM-o1sNsCcQ_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-05-11 23:13:05'),
(115, 'https://cdn.discordapp.com/attachments/549178243081568277/577169056499761163/PGTA5320915808.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:11:13'),
(116, 'https://cdn.discordapp.com/attachments/549178243081568277/577168950882861066/PGTA5350079240.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:12:31'),
(117, 'https://cdn.discordapp.com/attachments/549178243081568277/577168961712553995/PGTA5963183900.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:12:40'),
(118, 'https://cdn.discordapp.com/attachments/549178243081568277/577168962949873666/PGTA5953351181.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:12:48'),
(119, 'https://cdn.discordapp.com/attachments/549178243081568277/577169007174483974/PGTA51644986478.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:13:00'),
(120, 'https://cdn.discordapp.com/attachments/549178243081568277/577169016263540838/PGTA51783802893.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:13:19'),
(121, 'https://cdn.discordapp.com/attachments/549178243081568277/577169019132706843/PGTA51791372081.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:13:24'),
(122, 'https://cdn.discordapp.com/attachments/549178243081568277/577169021791633458/PGTA51856173934.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:13:30'),
(123, 'https://cdn.discordapp.com/attachments/549178243081568277/577169024241238017/PGTA52025140523.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:13:36'),
(124, 'https://cdn.discordapp.com/attachments/549178243081568277/577169032172535808/PGTA5161185923.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:13:43'),
(125, 'https://cdn.discordapp.com/attachments/549178243081568277/577168957065134084/PGTA5703456364.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:15:56'),
(126, 'https://cdn.discordapp.com/attachments/549178243081568277/577168954871644160/PGTA5470102366.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:07'),
(127, 'https://cdn.discordapp.com/attachments/549178243081568277/577168958424350720/PGTA5751693935.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:13'),
(128, 'https://cdn.discordapp.com/attachments/549178243081568277/577169011029180426/PGTA51682470369.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:19'),
(129, 'https://cdn.discordapp.com/attachments/549178243081568277/577169052917694465/PGTA5221763289.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:24'),
(130, 'https://cdn.discordapp.com/attachments/549178243081568277/577168959887900672/PGTA5939141426.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:29'),
(131, 'https://cdn.discordapp.com/attachments/549178243081568277/577168996114104321/PGTA51407195691.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:35'),
(132, 'https://cdn.discordapp.com/attachments/549178243081568277/577168965001019405/PGTA51217350525.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:42'),
(133, 'https://cdn.discordapp.com/attachments/549178243081568277/577168962975039488/PGTA5974979498.jpg', 'Knowyy', 'Knowyy', '2019-05-12 19:16:47'),
(134, 'https://cdn.discordapp.com/attachments/549178243081568277/585157066415407104/PGTA5833577319.jpg', 'Knowyy', 'Knowyy', '2019-06-03 19:25:23'),
(135, 'https://cdn.discordapp.com/attachments/549178243081568277/587389689095258137/PGTA5229014871.jpg', 'Knowyy', 'Knowyy', '2019-06-10 17:53:21'),
(136, 'https://cdn.discordapp.com/attachments/549178243081568277/587389690651475994/PGTA5894972765.jpg', 'Knowyy', 'Knowyy', '2019-06-10 17:53:32'),
(137, 'https://cdn.discordapp.com/attachments/549178243081568277/588802058203955210/PGTA52122189476.jpg', 'Knowyy', 'Knowyy', '2019-06-13 20:54:54'),
(138, 'https://cdn.discordapp.com/attachments/549178243081568277/588802065346854919/PGTA5187276862.jpg', 'Knowyy', 'Knowyy', '2019-06-13 20:55:06'),
(139, 'https://cdn.discordapp.com/attachments/549178243081568277/588802059751391281/PGTA51695542270.jpg', 'Knowyy', 'Knowyy', '2019-06-13 20:55:18'),
(140, 'https://cdn.discordapp.com/attachments/549178243081568277/588805955869868082/HZqs0x8BOk-QB8ETkQG_Ag_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-06-13 21:08:41'),
(141, 'https://cdn.discordapp.com/attachments/549178243081568277/588805955475603476/HGH-6y40A0emRr9nahbgpQ_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-06-13 21:08:50'),
(142, 'https://cdn.discordapp.com/attachments/549178243081568277/588805958533120000/IP8DAkBtqkmu0jyTwVB0Dg_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-06-13 21:08:56'),
(143, 'https://cdn.discordapp.com/attachments/549178243081568277/588805960403779606/O9TKFfw3hEOykYo2Z5jlyA_0_0.jpg', 'Kaszadin', 'Knowyy', '2019-06-13 21:09:06'),
(144, 'https://media.giphy.com/media/PoJVy58DFZgWOEs3dz/giphy.gif', 'Kaszadin', 'Knowyy', '2019-06-13 21:35:00'),
(145, 'https://cdn.discordapp.com/attachments/549178243081568277/591618534862225432/Tampa_tampa.gif', 'Knowyy', 'Knowyy', '2019-06-21 15:28:30'),
(146, 'https://cdn.discordapp.com/attachments/549178243081568277/591555545819906048/PGTA5113156385.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:34:29'),
(147, 'https://cdn.discordapp.com/attachments/549178243081568277/591555548009332737/PGTA5502316130.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:34:35'),
(148, 'https://cdn.discordapp.com/attachments/549178243081568277/591555550299553813/PGTA5536338953.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:34:41'),
(149, 'https://cdn.discordapp.com/attachments/549178243081568277/591555554082816000/PGTA5583532985.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:34:49'),
(150, 'https://cdn.discordapp.com/attachments/549178243081568277/591555554808168474/PGTA5641106973.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:34:55'),
(151, 'https://cdn.discordapp.com/attachments/549178243081568277/591555590094979073/PGTA51453243844.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:35:01'),
(152, 'https://cdn.discordapp.com/attachments/549178243081568277/591555619081814023/PGTA51581575105.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:35:06'),
(153, 'https://cdn.discordapp.com/attachments/549178243081568277/591555629177503755/PGTA51625533091.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:35:11'),
(154, 'https://cdn.discordapp.com/attachments/549178243081568277/591555649859485706/PGTA52059496290.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:35:17'),
(155, 'https://cdn.discordapp.com/attachments/549178243081568277/591556426359373837/PGTA51242977298.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:35:21'),
(156, 'https://cdn.discordapp.com/attachments/549178243081568277/591556519645151271/PGTA51393099099.jpg', 'Kaszadin', 'Knowyy', '2019-06-21 16:35:26'),
(157, 'https://cdn.discordapp.com/attachments/549178243081568277/591618461231349778/PGTA5450496916.jpg', 'Knowyy', 'Knowyy', '2019-06-21 16:37:29'),
(158, 'https://cdn.discordapp.com/attachments/549178243081568277/591618462250696726/PGTA51668195197.jpg', 'Knowyy', 'Knowyy', '2019-06-21 16:37:33'),
(159, 'https://cdn.discordapp.com/attachments/549178243081568277/591618470093914133/PGTA51226958744.jpg', 'Knowyy', 'Knowyy', '2019-06-21 16:37:38'),
(160, 'https://cdn.discordapp.com/attachments/549178243081568277/592360675519758346/PGTA51831819499.jpg', 'Knowyy', 'Knowyy', '2019-06-26 23:41:26'),
(161, 'https://cdn.discordapp.com/attachments/549178243081568277/592360677029576725/PGTA51420590926.jpg', 'Knowyy', 'Knowyy', '2019-06-26 23:41:35'),
(162, 'https://cdn.discordapp.com/attachments/549178243081568277/602896443216494601/PGTA5447332424.jpg', 'Knowyy', 'Knowyy', '2019-07-23 10:41:45'),
(163, 'https://cdn.discordapp.com/attachments/549178243081568277/602808596035796993/PGTA5581483492.jpg', 'Knowyy', 'Knowyy', '2019-07-23 10:41:51'),
(164, 'https://cdn.discordapp.com/attachments/549178243081568277/602896451873275909/PGTA51016689360.jpg', 'Knowyy', 'Knowyy', '2019-07-23 10:41:59'),
(165, 'https://cdn.discordapp.com/attachments/549178243081568277/602808592621371412/PGTA52010196369.jpg', 'Knowyy', 'Knowyy', '2019-07-23 10:42:08'),
(166, 'https://cdn.discordapp.com/attachments/549178243081568277/602808594802540544/PGTA52146189024.jpg', 'Knowyy', 'Knowyy', '2019-07-23 10:42:15'),
(167, 'https://cdn.discordapp.com/attachments/549178243081568277/602974724162846739/asdasd.jpg', 'Knowyy', 'Knowyy', '2019-07-23 10:43:49'),
(168, 'https://cdn.discordapp.com/attachments/549178243081568277/603686755996008476/z7lxpJXYVUOYggSZPdGd8g_0_0.jpg', 'Knowyy', 'Knowyy', '2019-07-25 18:33:05'),
(169, 'https://cdn.discordapp.com/attachments/549178243081568277/603986458587562001/PGTA51339924462.jpg', 'Knowyy', 'Knowyy', '2019-07-25 18:33:12'),
(170, 'https://cdn.discordapp.com/attachments/549178243081568277/603986455206821918/PGTA51524298102.jpg', 'Knowyy', 'Knowyy', '2019-07-25 18:33:17'),
(171, 'https://cdn.discordapp.com/attachments/549178243081568277/603873301915369473/PGTA51252585702.jpg', 'Knowyy', 'Knowyy', '2019-07-25 18:33:22'),
(172, 'https://cdn.discordapp.com/attachments/549178243081568277/603986457321013289/PGTA52020175461.jpg', 'Knowyy', 'Knowyy', '2019-07-25 18:33:27'),
(173, 'https://cdn.discordapp.com/attachments/549178243081568277/607681143189536799/PGTA51413271705.jpg', 'Knowyy', 'Knowyy', '2019-08-05 22:21:59'),
(174, 'https://cdn.discordapp.com/attachments/549178243081568277/607979361064189963/PGTA5765462689.jpg', 'Knowyy', 'Knowyy', '2019-08-05 22:22:05'),
(175, 'https://cdn.discordapp.com/attachments/549178243081568277/608030964450328585/PGTA579086821.jpg', 'Knowyy', 'Knowyy', '2019-08-05 22:22:09'),
(176, 'https://cdn.discordapp.com/attachments/549178243081568277/608030981877792778/PGTA5546638418.jpg', 'Knowyy', 'Knowyy', '2019-08-05 22:22:14'),
(177, 'https://cdn.discordapp.com/attachments/549178243081568277/609161946918551552/PGTA5375215974.jpg', 'Knowyy', 'Knowyy', '2019-08-17 00:50:50'),
(178, 'https://cdn.discordapp.com/attachments/549178243081568277/609161948998926337/PGTA5395313468.jpg', 'Knowyy', 'Knowyy', '2019-08-17 00:51:00'),
(179, 'https://cdn.discordapp.com/attachments/549178243081568277/611818985830219777/PGTA51965568373.jpg', 'Knowyy', 'Knowyy', '2019-08-17 00:51:09'),
(180, 'https://cdn.discordapp.com/attachments/549178243081568277/611818988246269983/PGTA51161153102.jpg', 'Knowyy', 'Knowyy', '2019-08-17 00:51:18'),
(181, 'https://cdn.discordapp.com/attachments/549178243081568277/608051884791431170/0KVs9XtLA02IC3u7QajLlA_0_0.jpg', 'HakerskiEmil', 'Knowyy', '2019-08-17 00:51:46'),
(182, 'https://cdn.discordapp.com/attachments/549178243081568277/611296231544586311/PGTA515063280.jpg', 'Kaszadin', 'Knowyy', '2019-08-17 00:51:52'),
(183, 'https://cdn.discordapp.com/attachments/549178243081568277/614061792498286602/PGTA51817619128.jpg', 'Knowyy', 'Knowyy', '2019-08-22 13:45:03'),
(184, 'https://cdn.discordapp.com/attachments/549178243081568277/614061963542265866/PGTA51405244893.jpg', 'Kaszadin', 'Knowyy', '2019-08-22 13:45:09'),
(185, 'https://cdn.discordapp.com/attachments/549178243081568277/614061796671619093/PGTA51902431452.jpg', 'Kaszadin', 'Knowyy', '2019-08-22 13:45:15'),
(186, 'https://cdn.discordapp.com/attachments/549178243081568277/615925141574254603/PGTA51254827342.jpg', 'Knowyy', 'Knowyy', '2019-08-27 17:08:04'),
(187, 'https://cdn.discordapp.com/attachments/549178243081568277/615925140286472192/PGTA51945338597.jpg', 'Knowyy', 'Knowyy', '2019-08-27 17:08:10'),
(188, 'https://cdn.discordapp.com/attachments/549178243081568277/616025416909455512/PGTA51874144968.jpg', 'Knowyy', 'Knowyy', '2019-09-01 22:08:52'),
(189, 'https://cdn.discordapp.com/attachments/549178243081568277/616025414279888896/PGTA51571234638.jpg', 'Knowyy', 'Knowyy', '2019-09-01 22:08:57'),
(190, 'https://cdn.discordapp.com/attachments/549178243081568277/616025412685922324/PGTA51005790459.jpg', 'Knowyy', 'Knowyy', '2019-09-01 22:09:02'),
(191, 'https://cdn.discordapp.com/attachments/549178243081568277/616025681649860755/PGTA5322181015.jpg', 'Knowyy', 'Knowyy', '2019-09-01 22:09:08'),
(192, 'https://cdn.discordapp.com/attachments/549178243081568277/617787673515393070/PGTA51860589776.jpg', 'Knowyy', 'Knowyy', '2019-09-01 22:09:13'),
(193, 'https://cdn.discordapp.com/attachments/549178243081568277/617787686912262174/PGTA52076556744.jpg', 'Knowyy', 'Knowyy', '2019-09-01 22:09:19'),
(194, 'https://cdn.discordapp.com/attachments/549178243081568277/617787704146657285/PGTA5551728850.jpg', 'Knowyy', 'Knowyy', '2019-09-01 22:09:23'),
(195, 'https://cdn.discordapp.com/attachments/549178243081568277/618778343747092480/PGTA5766732009.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:16'),
(196, 'https://cdn.discordapp.com/attachments/549178243081568277/618778373812125697/PGTA51839481804.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:22'),
(197, 'https://cdn.discordapp.com/attachments/549178243081568277/618778324017217572/PGTA5683229659.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:27'),
(198, 'https://cdn.discordapp.com/attachments/549178243081568277/618778321588584458/PGTA5485292331.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:32'),
(199, 'https://cdn.discordapp.com/attachments/549178243081568277/618778347790532609/PGTA5830547830.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:37'),
(200, 'https://cdn.discordapp.com/attachments/549178243081568277/618778406779224073/PGTA51809668466.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:41'),
(201, 'https://cdn.discordapp.com/attachments/549178243081568277/618778392149360660/PGTA51413585247.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:47'),
(202, 'https://cdn.discordapp.com/attachments/549178243081568277/618778387275579392/PGTA51368018743.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:51'),
(203, 'https://cdn.discordapp.com/attachments/549178243081568277/618778382557118465/PGTA51360735802.jpg', 'Knowyy', 'Knowyy', '2019-09-10 17:59:56'),
(204, 'https://cdn.discordapp.com/attachments/549178243081568277/618778378702422026/PGTA51205127191.jpg', 'Knowyy', 'Knowyy', '2019-09-10 18:00:04'),
(205, 'https://cdn.discordapp.com/attachments/549178243081568277/620658922289627137/PGTA51729934556.jpg', 'Knowyy', 'Knowyy', '2019-09-10 18:00:08'),
(206, 'https://cdn.discordapp.com/attachments/549178243081568277/621010475101978626/benny.jpg', 'Knowyy', 'Knowyy', '2019-09-10 18:00:12'),
(209, 'https://cdn.discordapp.com/attachments/549178243081568277/621596598295724042/ezgif.com-video-to-gif.gif', 'Wojtektekla13', 'Knowyy', '2019-09-12 08:43:11'),
(210, 'https://cdn.discordapp.com/attachments/549178243081568277/622086581242560521/Drift_K.gif', 'Knowyy', 'Knowyy', '2019-09-13 17:18:55'),
(211, '/img/files/Drift1.gif', 'Knowyy', 'Knowyy', '2019-09-15 16:04:00'),
(212, 'https://cdn.discordapp.com/attachments/549178243081568277/624206619609399296/PGTA51679032340.jpg', 'Knowyy', 'Knowyy', '2019-09-19 18:59:15'),
(213, 'https://cdn.discordapp.com/attachments/549178243081568277/624206609903779850/PGTA5187415689.jpg', 'Knowyy', 'Knowyy', '2019-09-19 18:59:21'),
(214, 'https://cdn.discordapp.com/attachments/549178243081568277/630415107842899988/PGTA5420420623.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:00:04'),
(215, 'https://cdn.discordapp.com/attachments/549178243081568277/630415191611277313/PGTA51290910789.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:00:25'),
(216, 'https://cdn.discordapp.com/attachments/549178243081568277/630415184086827039/PGTA51086388323.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:00:32'),
(217, 'https://cdn.discordapp.com/attachments/549178243081568277/630415213664927765/PGTA51565978297.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:00:47'),
(218, 'https://cdn.discordapp.com/attachments/549178243081568277/630415233168441345/PGTA51762351374.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:01:12'),
(219, 'https://cdn.discordapp.com/attachments/549178243081568277/630415244736593939/PGTA52066169366.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:01:27'),
(220, 'https://cdn.discordapp.com/attachments/549178243081568277/630415236972806163/PGTA51918267778.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:01:42'),
(221, 'https://cdn.discordapp.com/attachments/549178243081568277/630415118118813716/PGTA5699363476.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:01:55'),
(222, 'https://cdn.discordapp.com/attachments/549178243081568277/630415198544724009/PGTA51429372298.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:02:00'),
(223, 'https://cdn.discordapp.com/attachments/549178243081568277/630415205201084441/PGTA51518443013.jpg', 'Knowyy', 'Knowyy', '2019-10-08 15:02:09'),
(224, 'https://cdn.discordapp.com/attachments/549178243081568277/631250018753314836/PGTA5470527844.jpg', 'Knowyy', 'Knowyy', '2019-10-09 22:56:01'),
(225, 'https://cdn.discordapp.com/attachments/549178243081568277/631250041968787484/PGTA5597895277.jpg', 'Knowyy', 'Knowyy', '2019-10-09 22:56:05'),
(226, 'https://cdn.discordapp.com/attachments/549178243081568277/632710211056041984/9FBVjyQMqkSjnD2R8OKHLA_0_0.png', 'Wojtektekla13', 'Knowyy', '2019-10-13 17:52:42'),
(227, 'https://cdn.discordapp.com/attachments/549178243081568277/636571863929323538/PGTA51884787404.jpg', 'Knowyy', 'Knowyy', '2019-10-25 12:17:59'),
(228, 'https://cdn.discordapp.com/attachments/549178243081568277/636571936775995414/PGTA51937312924.jpg', 'Knowyy', 'Knowyy', '2019-10-25 12:18:05'),
(229, 'https://cdn.discordapp.com/attachments/549178243081568277/636959877968822273/PGTA51782427998.jpg', 'Kaszadin', 'Knowyy', '2019-10-25 12:18:11'),
(230, 'https://cdn.discordapp.com/attachments/549178243081568277/637232983207706634/PGTA51192139692.jpg', 'Knowyy', 'Knowyy', '2019-10-28 16:58:36'),
(231, 'https://cdn.discordapp.com/attachments/549178243081568277/637233002010640386/PGTA583001342.jpg', 'Knowyy', 'Knowyy', '2019-10-28 16:58:41'),
(232, 'https://cdn.discordapp.com/attachments/549178243081568277/637771259882635310/20191026235419_1.jpg', 'Wojtektekla13', 'Knowyy', '2019-10-28 16:58:51'),
(233, 'https://cdn.discordapp.com/attachments/549178243081568277/642880440558157837/PGTA521562115.jpg', 'Knowyy', 'Knowyy', '2019-11-11 15:05:23'),
(234, 'https://cdn.discordapp.com/attachments/549178243081568277/643086152752168967/20191110144818_1.jpg', 'Kaszadin', 'Knowyy', '2019-11-11 15:05:28'),
(235, 'https://cdn.discordapp.com/attachments/549178243081568277/643447817754378280/PGTA5833857068.jpg', 'Knowyy', 'Knowyy', '2019-11-12 19:47:57'),
(236, 'https://cdn.discordapp.com/attachments/549178243081568277/643832856275058699/PGTA51188542269.jpg', 'Knowyy', 'Knowyy', '2019-11-12 19:48:01'),
(237, 'https://cdn.discordapp.com/attachments/549178243081568277/644255485385768960/20191113200832_1.jpg', 'Kaszadin', 'Knowyy', '2019-11-16 01:05:36'),
(238, 'https://cdn.discordapp.com/attachments/549178243081568277/656812056015536128/PGTA5596909314.jpg', 'Knowyy', 'Knowyy', '2019-12-20 19:43:47'),
(239, 'https://cdn.discordapp.com/attachments/549178243081568277/655855488466157588/PGTA5972714127.jpg', 'Knowyy', 'Knowyy', '2019-12-20 19:43:53'),
(240, 'https://cdn.discordapp.com/attachments/549178243081568277/657332946772033537/Screenshot_14.png', 'Knowyy', 'Knowyy', '2019-12-20 19:43:57'),
(241, 'https://cdn.discordapp.com/attachments/549178243081568277/657653464746426368/Screenshot_37.png', 'Knowyy', 'Knowyy', '2019-12-20 19:44:01'),
(242, 'https://cdn.discordapp.com/attachments/549178243081568277/657612623797551114/Screenshot_35.png', 'Knowyy', 'Knowyy', '2019-12-20 19:44:06'),
(243, 'https://cdn.discordapp.com/attachments/549178243081568277/662420770168897565/PGTA5801572537.jpg', 'Knowyy', 'Knowyy', '2020-01-03 10:38:22'),
(244, 'https://cdn.discordapp.com/attachments/549178243081568277/662420773268619276/PGTA51082312124.jpg', 'Knowyy', 'Knowyy', '2020-01-03 10:38:26'),
(245, 'https://cdn.discordapp.com/attachments/549178243081568277/662420775814299687/PGTA52014544105.jpg', 'Knowyy', 'Knowyy', '2020-01-03 10:38:32'),
(246, 'https://cdn.discordapp.com/attachments/549178243081568277/662420808303640657/PGTA52012104098.jpg', 'Knowyy', 'Knowyy', '2020-01-03 10:38:38'),
(247, 'https://cdn.discordapp.com/attachments/549178243081568277/662420801638891544/PGTA51446669026.jpg', 'Knowyy', 'Knowyy', '2020-01-03 10:38:44'),
(248, 'https://cdn.discordapp.com/attachments/549178243081568277/662420815492677643/PGTA518581438.jpg', 'Knowyy', 'Knowyy', '2020-01-03 10:38:49'),
(249, 'https://cdn.discordapp.com/attachments/549178243081568277/662346773674852383/20200102182442_1.jpg', 'Kaszadin', 'Knowyy', '2020-01-05 12:08:01'),
(250, 'https://cdn.discordapp.com/attachments/549178243081568277/664180668305113110/PGTA5580006335.jpg', 'Knowyy', 'Knowyy', '2020-01-18 23:40:01'),
(251, 'https://cdn.discordapp.com/attachments/549178243081568277/664180672222724153/PGTA51309353177.jpg', 'Knowyy', 'Knowyy', '2020-01-18 23:40:07'),
(252, 'https://cdn.discordapp.com/attachments/549178243081568277/668061308326903828/20200118124231_1.jpg', 'Kaszadin', 'Knowyy', '2020-01-18 23:40:15'),
(253, 'https://cdn.discordapp.com/attachments/549178243081568277/668221148240019460/F7KSNudLqkuxSaZLQVBIqw_0_0.jpg', 'SnaYQ97', 'Knowyy', '2020-01-18 23:41:59'),
(254, 'https://cdn.discordapp.com/attachments/549178243081568277/665215032967036939/PGTA51815699189.jpg', 'Knowyy', 'Knowyy', '2020-01-18 23:42:08'),
(255, 'https://cdn.discordapp.com/attachments/549178243081568277/668221074986500127/xfH1FLtrESbh8CqxPLO2g_0_0.jpg', 'SnaYQ97', 'Knowyy', '2020-01-18 23:42:14'),
(256, 'https://cdn.discordapp.com/attachments/549178243081568277/668220995219488788/-_CiLtwMO0WmgAg11SUnvQ_0_0.jpg', 'SnaYQ97', 'Knowyy', '2020-01-18 23:42:18'),
(257, 'https://cdn.discordapp.com/attachments/549178243081568277/668220988944809994/LToLbtc-DUm4aP9sFlcpNg_0_0.jpg', 'SnaYQ97', 'Knowyy', '2020-01-18 23:42:24'),
(258, 'https://cdn.discordapp.com/attachments/549178243081568277/668868286821433380/PGTA51123866781.jpg', 'Knowyy', 'Knowyy', '2020-02-02 13:22:27'),
(259, 'https://cdn.discordapp.com/attachments/549178243081568277/668868288238845952/PGTA51352594073.jpg', 'Knowyy', 'Knowyy', '2020-02-02 13:22:33'),
(260, 'https://cdn.discordapp.com/attachments/549178243081568277/668879942934855681/PGTA51638090256.jpg', 'Knowyy', 'Knowyy', '2020-02-16 01:04:50'),
(261, 'https://cdn.discordapp.com/attachments/549178243081568277/668879945967337480/PGTA51905469201.jpg', 'Knowyy', 'Knowyy', '2020-02-16 01:04:54'),
(262, 'https://cdn.discordapp.com/attachments/549178243081568277/668879928942657549/PGTA51042129011.jpg', 'Knowyy', 'Knowyy', '2020-02-16 01:04:58'),
(263, 'https://cdn.discordapp.com/attachments/549178243081568277/677860912685776917/unknown.png', 'Knowyy', 'Knowyy', '2020-03-10 21:46:06'),
(264, 'https://cdn.discordapp.com/attachments/549178243081568277/679036511747833885/PGTA51746087521.jpg', 'Knowyy', 'Knowyy', '2020-03-10 21:46:12'),
(265, 'https://cdn.discordapp.com/attachments/549178243081568277/679036512024657920/PGTA535990346.jpg', 'Knowyy', 'Knowyy', '2020-03-10 21:46:16'),
(266, 'https://cdn.discordapp.com/attachments/549178243081568277/682963715649306667/PGTA51338356937.jpg', 'Knowyy', 'Knowyy', '2020-03-10 21:46:22'),
(267, 'https://cdn.discordapp.com/attachments/549178243081568277/679036518953779230/PGTA52115863032.jpg', 'Knowyy', 'Knowyy', '2020-03-10 21:46:27'),
(268, 'https://cdn.discordapp.com/attachments/549178243081568277/697163573872558171/Screenshot_1.png', 'Knowyy', 'Knowyy', '2020-04-08 11:51:53'),
(269, 'https://cdn.discordapp.com/attachments/549178243081568277/697089709670793327/unknown.png', 'Knowyy', 'Knowyy', '2020-04-08 11:52:04'),
(270, 'https://cdn.discordapp.com/attachments/549178243081568277/697090065985175613/unknown.png', 'Knowyy', 'Knowyy', '2020-04-08 11:53:28'),
(271, 'https://cdn.discordapp.com/attachments/549178243081568277/697086875126726686/unknown.png', 'Knowyy', 'Knowyy', '2020-04-08 11:53:35'),
(272, 'https://cdn.discordapp.com/attachments/549178243081568277/697083287755292682/unknown.png', 'Knowyy', 'Knowyy', '2020-04-08 11:53:41'),
(273, 'https://cdn.discordapp.com/attachments/549178243081568277/697382725279285298/zlot.jpg', 'Antenu', 'Knowyy', '2020-04-08 11:53:48'),
(274, 'https://cdn.discordapp.com/attachments/549178243081568277/696760631193239582/LAMPADATTIV2.png', 'SnaYQ97', 'Knowyy', '2020-04-08 11:59:10'),
(275, 'https://cdn.discordapp.com/attachments/549178243081568277/704317214433738772/PGTA521531995.jpg', 'Knowyy', 'Knowyy', '2020-04-30 14:28:59'),
(276, 'https://cdn.discordapp.com/attachments/549178243081568277/704317215922716702/PGTA5122889311.jpg', 'Knowyy', 'Knowyy', '2020-04-30 14:29:03'),
(277, 'https://cdn.discordapp.com/attachments/549178243081568277/704317219571630086/PGTA51125120760.jpg', 'Knowyy', 'Knowyy', '2020-04-30 14:29:08'),
(278, 'https://cdn.discordapp.com/attachments/549178243081568277/704317223547961344/PGTA51791804114.jpg', 'Knowyy', 'Knowyy', '2020-04-30 14:29:13'),
(279, 'https://cdn.discordapp.com/attachments/549178243081568277/704317225896509470/PGTA51994831347.jpg', 'Knowyy', 'Knowyy', '2020-04-30 14:29:18'),
(280, 'https://cdn.discordapp.com/attachments/549178243081568277/704351520015122463/PGTA5874786286.jpg', 'SnaYQ97', 'Knowyy', '2020-04-30 14:29:25'),
(281, 'https://cdn.discordapp.com/attachments/549178243081568277/704351613753622538/PGTA52029993425.jpg', 'SnaYQ97', 'Knowyy', '2020-04-30 14:29:30'),
(282, 'https://cdn.discordapp.com/attachments/549178243081568277/704351583395250279/PGTA51967342872.jpg', 'SnaYQ97', 'Knowyy', '2020-04-30 14:29:35'),
(283, 'https://cdn.discordapp.com/attachments/549178243081568277/705817326494285864/PGTA51766678523.jpg', 'Knowyy', 'Knowyy', '2020-05-03 15:38:38'),
(284, 'https://cdn.discordapp.com/attachments/549178243081568277/705817324707643392/PGTA5141999372.jpg', 'Knowyy', 'Knowyy', '2020-05-03 15:38:42'),
(288, 'https://cdn.discordapp.com/attachments/549178243081568277/741256800409485362/unknown.png', 'Knowyy', 'Knowyy', '2021-01-15 13:15:05'),
(289, 'https://cdn.discordapp.com/attachments/549178243081568277/741256871641350194/unknown.png', 'Knowyy', 'Knowyy', '2021-01-15 13:15:16'),
(290, 'https://cdn.discordapp.com/attachments/549178243081568277/741258867010175036/unknown.png', 'Knowyy', 'Knowyy', '2021-01-15 13:15:24'),
(291, 'https://cdn.discordapp.com/attachments/549178243081568277/739011153635835925/PGTA51944995397.jpg', 'Knowyy', 'Knowyy', '2021-01-15 13:15:33'),
(292, 'https://cdn.discordapp.com/attachments/549178243081568277/739011297856978944/l0V2WXz8DE2AGYx4cwi91g_0_0.jpg', 'SnaYQ97', 'Knowyy', '2021-01-15 13:15:46'),
(293, 'https://cdn.discordapp.com/attachments/549178243081568277/788425325050069083/Nowy20obraz20mapy20bitowej.png', 'Knowyy', 'Knowyy', '2021-01-15 13:16:13'),
(294, 'https://cdn.discordapp.com/attachments/549178243081568277/799541654167486474/kosatka.jpg', 'MixOnoo', 'Knowyy', '2021-01-15 13:16:54');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klanowicze`
--
ALTER TABLE `klanowicze`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user_to_role`
--
ALTER TABLE `user_to_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ref_role` (`ref_role`),
  ADD KEY `ref_user` (`ref_user`) USING BTREE;

--
-- Indeksy dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `klanowicze`
--
ALTER TABLE `klanowicze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT dla tabeli `user_to_role`
--
ALTER TABLE `user_to_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `zdjecia`
--
ALTER TABLE `zdjecia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
