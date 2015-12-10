-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 10 Des 2015 pada 09.18
-- Versi Server: 5.5.44-0ubuntu0.14.04.1
-- Versi PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `jff`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banned`
--

CREATE TABLE IF NOT EXISTS `banned` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(15) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `banned`
--

INSERT INTO `banned` (`id`, `ip`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, '100.10.25.40', '2015-05-19 16:37:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`,`ip_address`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type` varchar(100) NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `featured_image` varchar(255) NOT NULL,
  `order` int(4) unsigned NOT NULL,
  `published` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data untuk tabel `contents`
--

INSERT INTO `contents` (`id`, `content_type`, `parent_id`, `featured_image`, `order`, `published`, `published_at`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(25, 'category', 0, '', 0, 1, '2015-05-26 13:42:47', '2015-05-26 13:42:55', '2015-10-02 21:40:55', NULL, 1, 1, 0),
(30, 'category', 0, '', 0, 0, '2015-10-03 09:42:19', '2015-09-15 15:22:49', '2015-10-06 18:16:41', NULL, 1, 1, 0),
(27, 'page', 0, '', 0, 0, '2015-06-05 13:53:57', '2015-06-05 13:54:19', '2015-06-05 13:58:35', NULL, 1, 1, 0),
(31, 'page', 0, '', 0, 0, '2015-10-03 09:41:40', '2015-10-03 09:41:43', '2015-10-06 18:16:22', NULL, 1, 1, 0),
(32, 'post', 30, '', 0, 0, '2015-10-03 09:42:38', '2015-10-03 09:42:47', '2015-10-06 18:16:57', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `content_translations`
--

CREATE TABLE IF NOT EXISTS `content_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `language_slug` varchar(5) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `teaser` mediumtext NOT NULL,
  `content` longtext,
  `page_title` varchar(100) DEFAULT NULL,
  `page_description` varchar(170) DEFAULT NULL,
  `page_keywords` varchar(255) DEFAULT NULL,
  `rake` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `page_id` (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `content_translations`
--

INSERT INTO `content_translations` (`id`, `content_id`, `language_slug`, `title`, `short_title`, `teaser`, `content`, `page_title`, `page_description`, `page_keywords`, `rake`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(26, 30, 'ro', 'Cara menggambar anime dengan mudah', 'Cara membuat anime dengan mudah', '', '', 'test', '', '', 0, '2015-09-15 15:22:49', NULL, NULL, 1, 0, 0),
(21, 25, 'ro', 'Art of the Week #2', 'Blogs', '0', '', 'Blog', '0', '', 0, '2015-05-26 13:42:56', '2015-10-02 21:40:54', NULL, 1, 1, 0),
(27, 31, 'id', 'test', 'test', '', '', 'test', '21313', '', 0, '2015-10-03 09:41:43', NULL, NULL, 1, 0, 0),
(28, 30, 'id', 'tes', 'tes', '', '', 'tes', '', '', 0, '2015-10-03 09:42:23', NULL, NULL, 1, 0, 0),
(29, 32, 'id', 'tstetst', 'fdsf', '', '<p>dfdsfdsf</p>', 'tstetst', '', '', 0, '2015-10-03 09:42:47', NULL, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dictionary`
--

CREATE TABLE IF NOT EXISTS `dictionary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `word` varchar(255) NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `noise` tinyint(1) NOT NULL DEFAULT '0',
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1333 ;

--
-- Dumping data untuk tabel `dictionary`
--

INSERT INTO `dictionary` (`id`, `parent_id`, `word`, `language_slug`, `noise`, `verified`) VALUES
(660, 0, 'va', 'ro', 1, 1),
(661, 0, 'fi', 'ro', 1, 1),
(662, 0, 'din', 'ro', 1, 1),
(663, 0, 'si', 'ro', 1, 1),
(664, 0, 'in', 'ro', 1, 1),
(665, 0, 'la', 'ro', 1, 1),
(666, 0, 'a', 'ro', 1, 1),
(667, 0, 'sub', 'ro', 1, 1),
(668, 0, 'de', 'ro', 1, 1),
(669, 0, 'alaturi', 'ro', 1, 1),
(670, 0, 'al', 'ro', 1, 1),
(671, 0, 'cu', 'ro', 1, 1),
(672, 0, 'catre', 'ro', 1, 1),
(673, 0, 'cand', 'ro', 1, 1),
(674, 0, 'pana', 'ro', 1, 1),
(675, 972, 'unor', 'ro', 1, 1),
(676, 0, 'le', 'ro', 1, 1),
(677, 0, 'care', 'ro', 1, 1),
(678, 0, 'pe', 'ro', 1, 1),
(679, 0, 'sa', 'ro', 1, 1),
(680, 0, 'dupa', 'ro', 1, 1),
(681, 0, 'o', 'ro', 1, 1),
(682, 950, 'ar', 'ro', 1, 1),
(683, 0, 's', 'ro', 1, 1),
(684, 0, 'acest', 'ro', 1, 1),
(685, 1217, 'intre', 'ro', 1, 1),
(686, 0, 'ca', 'ro', 1, 1),
(687, 0, 'ii', 'ro', 1, 1),
(688, 0, 'se', 'ro', 1, 1),
(689, 0, 'fie', 'ro', 1, 1),
(690, 0, 'lui', 'ro', 1, 1),
(691, 957, 'eliberata', 'ro', 0, 1),
(692, 966, 'plasata', 'ro', 0, 1),
(693, 971, 'trimisa', 'ro', 0, 1),
(694, 661, 'este', 'ro', 0, 1),
(695, 0, 'mai', 'ro', 0, 1),
(696, 975, 'acelasi', 'ro', 1, 1),
(697, 967, 'potrivit', 'ro', 0, 1),
(698, 0, 'pentru', 'ro', 1, 1),
(699, 707, 'arestata', 'ro', 0, 1),
(700, 0, 'prin', 'ro', 1, 1),
(701, 762, 'luat', 'ro', 0, 1),
(702, 707, 'arestat', 'ro', 0, 1),
(703, 957, 'eliberat', 'ro', 0, 1),
(704, 966, 'plasat', 'ro', 0, 1),
(705, 971, 'trimis', 'ro', 0, 1),
(706, 773, 'penitenciarul', 'ro', 0, 1),
(707, 0, 'arest', 'ro', 0, 1),
(708, 945, 'domiciliu', 'ro', 0, 1),
(709, 0, 'fost', 'ro', 1, 1),
(710, 978, 'judecata', 'ro', 0, 1),
(711, 0, 'aprilie', 'ro', 0, 1),
(712, 752, 'dosarul', 'ro', 0, 1),
(713, 947, 'cunoscut', 'ro', 0, 1),
(714, 775, 'numele', 'ro', 0, 1),
(715, 0, 'gala', 'ro', 0, 1),
(716, 709, 'fostul', 'ro', 0, 1),
(717, 747, 'ministru', 'ro', 0, 1),
(718, 0, 'fata', 'ro', 0, 1),
(719, 756, 'instantei', 'ro', 0, 1),
(720, 950, 'au', 'ro', 1, 1),
(721, 935, 'ajuns', 'ro', 0, 1),
(722, 0, 'presedinte', 'ro', 0, 1),
(723, 754, 'federatiei', 'ro', 0, 1),
(724, 771, 'romane', 'ro', 0, 1),
(725, 0, 'box', 'ro', 0, 1),
(726, 940, 'consilier', 'ro', 0, 1),
(727, 0, 'secretar', 'ro', 0, 1),
(728, 0, 'general', 'ro', 0, 1),
(729, 952, 'director', 'ro', 0, 1),
(730, 750, 'companiei', 'ro', 0, 1),
(731, 1028, 'nationale', 'ro', 0, 1),
(732, 977, 'investitii', 'ro', 0, 1),
(733, 748, 'acuzata', 'ro', 0, 1),
(734, 0, 'abuz', 'ro', 0, 1),
(735, 1034, 'serviciu', 'ro', 0, 1),
(736, 0, 'legatura', 'ro', 0, 1),
(737, 964, 'organizarea', 'ro', 0, 1),
(738, 753, 'evenimentului', 'ro', 0, 1),
(739, 747, 'ministerul', 'ro', 0, 1),
(740, 948, 'dezvoltarii', 'ro', 0, 1),
(741, 772, 'regionale', 'ro', 0, 1),
(742, 770, 'turismului', 'ro', 0, 1),
(743, 0, 'respectiv', 'ro', 1, 1),
(744, 762, 'luare', 'ro', 0, 1),
(745, 745, 'mita', 'ro', 0, 1),
(746, 755, 'finantarea', 'ro', 0, 1),
(747, 0, 'minister', 'ro', 0, 1),
(748, 748, 'acuzat', 'ro', 0, 1),
(749, 950, 'avea', 'ro', 1, 1),
(750, 0, 'companie', 'ro', 0, 1),
(751, 948, 'dezvoltare', 'ro', 0, 1),
(752, 0, 'dosar', 'ro', 0, 1),
(753, 0, 'eveniment', 'ro', 0, 1),
(754, 0, 'federatie', 'ro', 0, 1),
(755, 960, 'finantare', 'ro', 0, 1),
(756, 0, 'instanta', 'ro', 0, 1),
(757, 977, 'investitie', 'ro', 0, 1),
(758, 978, 'judeca', 'ro', 0, 1),
(759, 971, 'trimite', 'ro', 0, 1),
(760, 967, 'potrivi', 'ro', 0, 1),
(761, 966, 'plasa', 'ro', 0, 1),
(762, 0, 'lua', 'ro', 1, 1),
(763, 977, 'investi', 'ro', 0, 1),
(764, 960, 'finanta', 'ro', 0, 1),
(765, 957, 'elibera', 'ro', 0, 1),
(766, 948, 'dezvolta', 'ro', 0, 1),
(767, 947, 'cunoaste', 'ro', 0, 1),
(768, 707, 'aresta', 'ro', 0, 1),
(769, 934, 'acuza', 'ro', 0, 1),
(770, 0, 'turism', 'ro', 0, 1),
(771, 0, 'roman', 'ro', 0, 1),
(772, 0, 'regional', 'ro', 0, 1),
(773, 0, 'penitenciar', 'ro', 0, 1),
(774, 964, 'organiza', 'ro', 0, 1),
(775, 0, 'nume', 'ro', 0, 1),
(776, 1028, 'national', 'ro', 0, 1),
(777, 0, 'primit', 'ro', 0, 1),
(778, 783, 'firmei', 'ro', 0, 1),
(779, 933, 'administratorul', 'ro', 0, 1),
(780, 939, 'asigura', 'ro', 0, 1),
(781, 0, 'plata', 'ro', 0, 1),
(782, 0, 'primi', 'ro', 0, 1),
(783, 0, 'firma', 'ro', 0, 1),
(784, 933, 'administrator', 'ro', 0, 1),
(785, 979, 'stat', 'ro', 0, 1),
(786, 707, 'arestul', 'ro', 0, 1),
(787, 0, 'masura', 'ro', 0, 1),
(788, 0, 'inlocuit', 'ro', 0, 1),
(789, 0, 'februarie', 'ro', 0, 1),
(790, 968, 'preventiv', 'ro', 0, 1),
(791, 942, 'cauza', 'ro', 0, 1),
(792, 0, 'penal', 'ro', 0, 1),
(793, 973, 'urmarita', 'ro', 0, 1),
(794, 814, 'banilor', 'ro', 0, 1),
(795, 965, 'originea', 'ro', 0, 1),
(796, 949, 'disimula', 'ro', 0, 1),
(797, 818, 'infractionala', 'ro', 0, 1),
(798, 820, 'intocmite', 'ro', 0, 1),
(799, 955, 'donatie', 'ro', 0, 1),
(800, 1288, 'aparenta', 'ro', 0, 1),
(801, 0, 'transferat', 'ro', 0, 1),
(802, 824, 'sume', 'ro', 0, 1),
(803, 821, 'multe', 'ro', 1, 1),
(804, 661, 'fiind', 'ro', 0, 1),
(805, 814, 'bani', 'ro', 0, 1),
(806, 970, 'spalare', 'ro', 0, 1),
(807, 819, 'infractiunea', 'ro', 0, 1),
(808, 954, 'cercetarile', 'ro', 0, 1),
(809, 944, 'continue', 'ro', 0, 1),
(810, 953, 'dispus', 'ro', 0, 1),
(811, 823, 'procurorii', 'ro', 0, 1),
(812, 752, 'dosarului', 'ro', 0, 1),
(813, 1288, 'aparent', 'ro', 1, 1),
(814, 0, 'ban', 'ro', 0, 1),
(815, 954, 'cercetare', 'ro', 0, 1),
(816, 944, 'continuu', 'ro', 0, 1),
(817, 944, 'continua', 'ro', 0, 1),
(818, 0, 'infractional', 'ro', 0, 1),
(819, 0, 'infractiune', 'ro', 0, 1),
(820, 0, 'intocmit', 'ro', 0, 1),
(821, 0, 'mult', 'ro', 1, 1),
(822, 965, 'origine', 'ro', 0, 1),
(823, 0, 'procuror', 'ro', 0, 1),
(824, 0, 'suma', 'ro', 0, 1),
(825, 973, 'urmarit', 'ro', 0, 1),
(826, 971, 'trimiterea', 'ro', 0, 1),
(827, 937, 'aprobate', 'ro', 0, 1),
(828, 660, 'vor', 'ro', 1, 1),
(829, 755, 'finantarile', 'ro', 0, 1),
(830, 961, 'garantiei', 'ro', 0, 1),
(831, 861, 'schimbul', 'ro', 0, 1),
(832, 858, 'lucrari', 'ro', 0, 1),
(833, 854, 'contractele', 'ro', 0, 1),
(834, 956, 'efectuate', 'ro', 0, 1),
(835, 781, 'platile', 'ro', 0, 1),
(836, 859, 'materiale', 'ro', 0, 1),
(837, 856, 'foloase', 'ro', 0, 1),
(838, 976, 'afaceri', 'ro', 0, 1),
(839, 860, 'omul', 'ro', 0, 1),
(840, 0, 'cerut', 'ro', 0, 1),
(841, 862, 'totala', 'ro', 0, 1),
(842, 988, 'valoare', 'ro', 0, 1),
(843, 951, 'bancare', 'ro', 0, 1),
(844, 863, 'transferuri', 'ro', 0, 1),
(845, 0, 'patru', 'ro', 0, 1),
(846, 969, 'realizat', 'ro', 0, 1),
(847, 0, 'fel', 'ro', 0, 1),
(848, 974, 'vrea', 'ro', 0, 1),
(865, 821, 'multor', 'ro', 0, 1),
(851, 976, 'afacere', 'ro', 0, 1),
(852, 937, 'aprobat', 'ro', 0, 1),
(853, 951, 'bancar', 'ro', 0, 1),
(854, 0, 'contract', 'ro', 0, 1),
(855, 956, 'efectuat', 'ro', 0, 1),
(856, 0, 'folos', 'ro', 0, 1),
(857, 961, 'garantie', 'ro', 0, 1),
(858, 0, 'lucrare', 'ro', 0, 1),
(859, 0, 'material', 'ro', 0, 1),
(860, 0, 'om', 'ro', 0, 1),
(861, 0, 'schimb', 'ro', 0, 1),
(862, 0, 'total', 'ro', 0, 1),
(863, 0, 'transfer', 'ro', 0, 1),
(864, 971, 'trimitere', 'ro', 0, 1),
(866, 938, 'aproximativ', 'ro', 1, 1),
(867, 898, 'lei', 'ro', 0, 1),
(868, 0, 'timp', 'ro', 0, 1),
(869, 858, 'lucrarilor', 'ro', 0, 1),
(870, 958, 'executate', 'ro', 0, 1),
(871, 900, 'societatea', 'ro', 0, 1),
(872, 963, 'mentionata', 'ro', 0, 1),
(873, 1043, 'baza', 'ro', 0, 1),
(874, 854, 'contractelor', 'ro', 0, 1),
(875, 962, 'incheiate', 'ro', 0, 1),
(876, 936, 'anchetatorii', 'ro', 0, 1),
(877, 0, 'stabilit', 'ro', 0, 1),
(878, 892, 'dadea', 'ro', 0, 1),
(879, 814, 'banii', 'ro', 0, 1),
(880, 777, 'primiti', 'ro', 0, 1),
(881, 959, 'faceau', 'ro', 1, 1),
(882, 0, 'numerar', 'ro', 0, 1),
(883, 897, 'intermediul', 'ro', 0, 1),
(884, 900, 'societatii', 'ro', 0, 1),
(885, 933, 'administrata', 'ro', 0, 1),
(886, 890, 'altor', 'ro', 0, 1),
(887, 895, 'fictive', 'ro', 0, 1),
(888, 946, 'consultanta', 'ro', 0, 1),
(932, 933, 'administrat', 'ro', 0, 1),
(890, 0, 'alt', 'ro', 0, 1),
(891, 936, 'anchetator', 'ro', 0, 1),
(892, 0, 'da', 'ro', 0, 1),
(893, 958, 'executat', 'ro', 0, 1),
(894, 959, 'face', 'ro', 1, 1),
(895, 0, 'fictiv', 'ro', 0, 1),
(896, 962, 'incheiat', 'ro', 0, 1),
(897, 0, 'intermediu', 'ro', 0, 1),
(898, 0, 'leu', 'ro', 0, 1),
(899, 963, 'mentionat', 'ro', 0, 1),
(900, 0, 'societate', 'ro', 0, 1),
(901, 0, 'elena', 'ro', 0, 1),
(902, 0, 'udrea', 'ro', 0, 1),
(903, 0, 'targsor', 'ro', 0, 1),
(904, 0, 'bute', 'ro', 0, 1),
(905, 0, 'ion', 'ro', 0, 1),
(906, 0, 'ariton', 'ro', 0, 1),
(907, 0, 'rudel', 'ro', 0, 1),
(908, 0, 'obreja', 'ro', 0, 1),
(909, 0, 'tudor', 'ro', 0, 1),
(910, 0, 'breazu', 'ro', 0, 1),
(911, 901, 'elenei', 'ro', 0, 1),
(912, 0, 'stefan', 'ro', 0, 1),
(913, 0, 'lungu', 'ro', 0, 1),
(914, 0, 'mdrt', 'ro', 0, 1),
(915, 0, 'nastasia', 'ro', 0, 1),
(916, 0, 'ana', 'ro', 0, 1),
(917, 0, 'maria', 'ro', 0, 1),
(918, 0, 'gheorghe', 'ro', 0, 1),
(919, 0, 'topoliceanu', 'ro', 0, 1),
(920, 0, 'dragos', 'ro', 0, 1),
(921, 0, 'botoroaga', 'ro', 0, 1),
(922, 854, 'contracte', 'ro', 0, 1),
(923, 0, 'dna', 'ro', 0, 1),
(924, 0, 'srl', 'ro', 1, 1),
(925, 0, 'adrian', 'ro', 0, 1),
(926, 0, 'gardean', 'ro', 0, 1),
(927, 0, 'sc', 'ro', 1, 1),
(928, 0, 'bucuresti', 'ro', 0, 1),
(929, 0, 'pdl', 'ro', 0, 1),
(930, 0, 'microsoft', 'ro', 0, 1),
(931, 950, 'are', 'ro', 1, 1),
(933, 0, 'administr', 'ro', 0, 1),
(934, 0, 'acuz', 'ro', 0, 1),
(935, 0, 'ajun', 'ro', 0, 1),
(936, 0, 'anchet', 'ro', 0, 1),
(937, 0, 'aprob', 'ro', 0, 1),
(938, 0, 'proxim', 'ro', 0, 1),
(939, 0, 'sigur', 'ro', 0, 1),
(940, 0, 'consili', 'ro', 0, 1),
(941, 938, 'aproxima', 'ro', 0, 1),
(942, 0, 'cauz', 'ro', 0, 1),
(943, 955, 'dona', 'ro', 0, 1),
(944, 0, 'continu', 'ro', 0, 1),
(945, 0, 'domicil', 'ro', 0, 1),
(946, 0, 'consult', 'ro', 0, 1),
(947, 0, 'cunosc', 'ro', 0, 1),
(948, 0, 'dezvolt', 'ro', 0, 1),
(949, 0, 'simul', 'ro', 0, 1),
(950, 0, 'ave', 'ro', 0, 1),
(951, 0, 'banca', 'ro', 0, 1),
(952, 0, 'direct', 'ro', 0, 1),
(953, 0, 'dispu', 'ro', 0, 1),
(954, 0, 'cercet', 'ro', 0, 1),
(955, 0, 'don', 'ro', 0, 1),
(956, 0, 'efect', 'ro', 0, 1),
(957, 0, 'eliber', 'ro', 0, 1),
(958, 0, 'execut', 'ro', 0, 1),
(959, 0, 'fac', 'ro', 0, 1),
(960, 0, 'finant', 'ro', 0, 1),
(961, 0, 'garant', 'ro', 0, 1),
(962, 0, 'inchei', 'ro', 0, 1),
(963, 0, 'mention', 'ro', 0, 1),
(964, 0, 'organiz', 'ro', 0, 1),
(965, 0, 'origin', 'ro', 0, 1),
(966, 0, 'plas', 'ro', 0, 1),
(967, 0, 'potriv', 'ro', 0, 1),
(968, 0, 'preven', 'ro', 0, 1),
(969, 0, 'realiz', 'ro', 0, 1),
(970, 0, 'spal', 'ro', 0, 1),
(971, 0, 'trimi', 'ro', 0, 1),
(972, 0, 'un', 'ro', 0, 1),
(973, 0, 'urmar', 'ro', 0, 1),
(974, 0, 'vre', 'ro', 0, 1),
(975, 0, 'acela', 'ro', 0, 1),
(976, 0, 'afacer', 'ro', 0, 1),
(977, 0, 'invest', 'ro', 0, 1),
(978, 0, 'judec', 'ro', 0, 1),
(979, 0, 'sta', 'ro', 0, 1),
(980, 0, 'consmin', 'ro', 0, 1),
(981, 0, 'cni', 'ro', 0, 1),
(982, 0, 'ekaton', 'ro', 0, 1),
(983, 0, 'consulting', 'ro', 0, 1),
(984, 0, 'termogaz', 'ro', 0, 1),
(985, 0, 'company', 'ro', 0, 1),
(986, 0, 'kranz', 'ro', 0, 1),
(987, 0, 'eurocenter', 'ro', 0, 1),
(988, 0, 'valor', 'ro', 0, 1),
(990, 0, 'test', 'ro', 0, 1),
(991, 990, 'testarea', 'ro', 0, 1),
(992, 0, 'be', 'en', 0, 1),
(993, 992, 'being', 'en', 0, 1),
(994, 0, 'despre', 'ro', 1, 1),
(995, 0, 'noi', 'ro', 1, 1),
(996, 0, 'uti', 'ro', 0, 1),
(997, 1028, 'nationala', 'ro', 0, 1),
(998, 1027, 'inalta', 'ro', 0, 1),
(999, 1038, 'tehnologie', 'ro', 0, 1),
(1000, 1031, 'ofera', 'ro', 0, 1),
(1001, 1035, 'solutii', 'ro', 0, 1),
(1002, 1030, 'novatoare', 'ro', 0, 1),
(1003, 0, 'partener', 'ro', 0, 1),
(1004, 1036, 'strategic', 'ro', 0, 1),
(1005, 1031, 'oferind', 'ro', 0, 1),
(1006, 1021, 'clientilor', 'ro', 0, 1),
(1007, 1033, 'sai', 'ro', 1, 1),
(1008, 0, 'dintr', 'ro', 1, 1),
(1009, 1037, 'sursa', 'ro', 0, 1),
(1010, 1040, 'unica', 'ro', 0, 1),
(1011, 0, 'larg', 'ro', 0, 1),
(1012, 1032, 'portofoliu', 'ro', 0, 1),
(1013, 1034, 'servicii', 'ro', 0, 1),
(1014, 1023, 'cuprinde', 'ro', 0, 1),
(1015, 1039, 'toate', 'ro', 0, 1),
(1016, 1025, 'etapele', 'ro', 0, 1),
(1017, 1029, 'necesare', 'ro', 0, 1),
(1018, 1022, 'conceptia', 'ro', 0, 1),
(1019, 1026, 'implementarea', 'ro', 0, 1),
(1026, 0, 'implement', 'ro', 0, 1),
(1021, 0, 'client', 'ro', 0, 1),
(1022, 0, 'concep', 'ro', 0, 1),
(1023, 0, 'cuprin', 'ro', 0, 1),
(1024, 1025, 'etapa', 'ro', 0, 1),
(1025, 0, 'etap', 'ro', 0, 1),
(1027, 0, 'inalt', 'ro', 0, 1),
(1028, 0, 'nation', 'ro', 0, 1),
(1029, 0, 'necesar', 'ro', 0, 1),
(1030, 0, 'nou', 'ro', 0, 1),
(1031, 0, 'ofer', 'ro', 0, 1),
(1032, 0, 'portofoli', 'ro', 0, 1),
(1033, 0, 'sau', 'ro', 0, 1),
(1034, 0, 'servici', 'ro', 0, 1),
(1035, 0, 'soluti', 'ro', 0, 1),
(1036, 0, 'strateg', 'ro', 0, 1),
(1037, 0, 'surs', 'ro', 0, 1),
(1038, 0, 'tehnolog', 'ro', 0, 1),
(1039, 0, 'tot', 'ro', 0, 1),
(1040, 0, 'unic', 'ro', 0, 1),
(1041, 1042, 'exploatarea', 'ro', 0, 1),
(1042, 0, 'exploat', 'ro', 0, 1),
(1043, 0, 'baz', 'ro', 0, 1),
(1044, 0, 'about', 'en', 1, 1),
(1045, 0, 'us', 'en', 1, 1),
(1046, 0, 'uti', 'en', 0, 1),
(1047, 1053, 'company', 'en', 0, 1),
(1048, 0, 'a', 'en', 1, 1),
(1050, 0, 's-ar', 'ro', 1, 1),
(1051, 0, 'le-a', 'ro', 1, 1),
(1052, 992, 'it''s', 'en', 1, 1),
(1053, 0, 'compan', 'en', 0, 1),
(1054, 992, 'is', 'en', 0, 1),
(1055, 684, 'aceasta', 'ro', 1, 1),
(1056, 1077, 'prima', 'ro', 0, 1),
(1057, 1074, 'mea', 'ro', 0, 1),
(1058, 1076, 'postare', 'ro', 0, 1),
(1059, 990, 'testare', 'ro', 0, 1),
(1060, 0, 'asadar', 'ro', 1, 1),
(1061, 1075, 'poate', 'ro', 0, 1),
(1062, 990, 'testez', 'ro', 0, 1),
(1063, 1073, 'iti', 'ro', 1, 1),
(1064, 1078, 'vine', 'ro', 0, 1),
(1065, 1072, 'crezi', 'ro', 0, 1),
(1066, 0, 'nu', 'ro', 1, 1),
(1295, 0, 'edit', 'ro', 0, 1),
(1068, 0, 'ce', 'ro', 1, 1),
(1069, 1079, 'zici', 'ro', 0, 1),
(1070, 1071, 'asta', 'ro', 1, 1),
(1071, 0, 'ast', 'ro', 1, 1),
(1072, 0, 'cred', 'ro', 0, 1),
(1073, 1073, 'tu', 'ro', 1, 1),
(1074, 0, 'me', 'ro', 1, 1),
(1075, 0, 'pot', 'ro', 0, 1),
(1076, 0, 'post', 'ro', 0, 1),
(1077, 0, 'prim', 'ro', 0, 1),
(1078, 0, 'vin', 'ro', 0, 1),
(1079, 0, 'zic', 'ro', 0, 1),
(1080, 1082, 'putine', 'ro', 0, 1),
(1081, 1083, 'mijloace', 'ro', 0, 1),
(1082, 0, 'putin', 'ro', 0, 1),
(1083, 0, 'mijloc', 'ro', 0, 1),
(1084, 0, 'transport', 'ro', 0, 1),
(1085, 1084, 'transportului', 'ro', 0, 1),
(1086, 1110, 'sindicat', 'ro', 0, 1),
(1087, 0, 'ratb', 'ro', 0, 1),
(1088, 1118, 'calatorii', 'ro', 0, 1),
(1089, 1114, 'informati', 'ro', 0, 1),
(1090, 1236, 'luni', 'ro', 0, 1),
(1091, 1113, 'posibila', 'ro', 0, 1),
(1092, 1109, 'suspendarea', 'ro', 0, 1),
(1093, 0, 'comun', 'ro', 0, 1),
(1094, 1110, 'sindicatele', 'ro', 0, 1),
(1095, 1111, 'regia', 'ro', 0, 1),
(1096, 1119, 'autonoma', 'ro', 0, 1),
(1097, 1120, 'arata', 'ro', 0, 1),
(1098, 0, 'vineri', 'ro', 0, 1),
(1100, 1116, 'comunicat', 'ro', 0, 1),
(1101, 1112, 'presa', 'ro', 0, 1),
(1102, 1083, 'mijloacele', 'ro', 0, 1),
(1103, 1115, 'iesi', 'ro', 0, 1),
(1104, 1108, 'traseu', 'ro', 0, 1),
(1105, 1075, 'putea', 'ro', 0, 1),
(1106, 1117, 'citi', 'ro', 0, 1),
(1107, 1107, 'mesaj', 'ro', 0, 1),
(1108, 0, 'tras', 'ro', 0, 1),
(1109, 0, 'suspend', 'ro', 0, 1),
(1110, 0, 'sindica', 'ro', 0, 1),
(1111, 0, 'regi', 'ro', 0, 1),
(1112, 0, 'pres', 'ro', 0, 1),
(1113, 0, 'posibil', 'ro', 0, 1),
(1114, 0, 'inform', 'ro', 0, 1),
(1115, 0, 'ies', 'ro', 0, 1),
(1116, 0, 'comunic', 'ro', 0, 1),
(1117, 0, 'cit', 'ro', 0, 1),
(1118, 0, 'calator', 'ro', 0, 1),
(1119, 0, 'autonom', 'ro', 0, 1),
(1120, 0, 'arat', 'ro', 0, 1),
(1121, 1122, 'capitalei', 'ro', 0, 1),
(1122, 0, 'capital', 'ro', 0, 1),
(1123, 0, 'razboi', 'ro', 0, 1),
(1124, 1233, 'mondial', 'ro', 0, 1),
(1125, 0, 'bismarck', 'ro', 0, 1),
(1126, 1128, 'cuirasatului', 'ro', 0, 1),
(1127, 1128, 'cuirasatul', 'ro', 0, 1),
(1128, 0, 'cuirasat', 'ro', 0, 1),
(1129, 1242, 'epopeea', 'ro', 0, 1),
(1130, 1242, 'epopee', 'ro', 0, 1),
(1131, 1068, 'ce-i', 'ro', 1, 1),
(1242, 0, 'epope', 'ro', 0, 1),
(1134, 1137, 'istoria', 'ro', 0, 1),
(1135, 1137, 'istorie', 'ro', 0, 1),
(1136, 1137, 'istoricul', 'ro', 0, 1),
(1137, 0, 'istori', 'ro', 0, 1),
(1138, 0, 'triumf', 'ro', 0, 1),
(1139, 1142, 'tragedie', 'ro', 0, 1),
(1140, 1144, 'lupta', 'ro', 0, 1),
(1141, 1143, 'scufundarea', 'ro', 0, 1),
(1142, 0, 'tragedi', 'ro', 0, 1),
(1143, 0, 'scufund', 'ro', 0, 1),
(1144, 0, 'lupt', 'ro', 0, 1),
(1145, 0, 'moderata', 'ro', 0, 1),
(1146, 1168, 'reprezinta', 'ro', 0, 1),
(1147, 0, 'manuel', 'ro', 0, 1),
(1148, 0, 'stanescu', 'ro', 0, 1),
(1149, 1160, 'pagina', 'ro', 0, 1),
(1150, 1150, 'aparte', 'ro', 1, 1),
(1151, 1167, 'bataliilor', 'ro', 0, 1),
(1152, 1161, 'navale', 'ro', 0, 1),
(1153, 1166, 'celui', 'ro', 0, 1),
(1154, 1165, 'doilea', 'ro', 0, 1),
(1155, 1162, 'marcand', 'ro', 0, 1),
(1156, 1163, 'inceputul', 'ro', 0, 1),
(1157, 1159, 'sfarsitului', 'ro', 0, 1),
(1158, 1164, 'iluzii', 'ro', 0, 1),
(1159, 0, 'sfars', 'ro', 0, 1),
(1160, 0, 'pagin', 'ro', 0, 1),
(1161, 0, 'nav', 'ro', 0, 1),
(1162, 0, 'marc', 'ro', 0, 1),
(1163, 0, 'incep', 'ro', 0, 1),
(1164, 0, 'iluzi', 'ro', 0, 1),
(1165, 0, 'doi', 'ro', 0, 1),
(1166, 0, 'cel', 'ro', 0, 1),
(1167, 0, 'bat', 'ro', 0, 1),
(1168, 0, 'reprez', 'ro', 0, 1),
(1169, 670, 'ale', 'ro', 1, 1),
(1170, 0, 'totodata', 'ro', 1, 1),
(1171, 1189, 'renasterea', 'ro', 0, 1),
(1172, 1187, 'sperantei', 'ro', 0, 1),
(1173, 1185, 'supusii', 'ro', 0, 1),
(1174, 1193, 'imperiului', 'ro', 0, 1),
(1175, 1196, 'britanic', 'ro', 0, 1),
(1176, 1195, 'clipa', 'ro', 0, 1),
(1177, 1191, 'mandrie', 'ro', 0, 1),
(1178, 1190, 'orgoliu', 'ro', 0, 1),
(1179, 1188, 'satisfacut', 'ro', 0, 1),
(1180, 1192, 'inteleasa', 'ro', 0, 1),
(1181, 0, 'semn', 'ro', 0, 1),
(1182, 1194, 'esecului', 'ro', 0, 1),
(1183, 1167, 'batalia', 'ro', 0, 1),
(1184, 1186, 'suprematie', 'ro', 0, 1),
(1185, 0, 'supun', 'ro', 0, 1),
(1186, 0, 'suprem', 'ro', 0, 1),
(1187, 0, 'sper', 'ro', 0, 1),
(1188, 0, 'satisfa', 'ro', 0, 1),
(1189, 0, 'nasc', 'ro', 0, 1),
(1190, 0, 'orgoli', 'ro', 0, 1),
(1191, 0, 'mandr', 'ro', 0, 1),
(1192, 0, 'inteleg', 'ro', 0, 1),
(1193, 0, 'imperi', 'ro', 0, 1),
(1194, 0, 'esec', 'ro', 0, 1),
(1195, 0, 'clip', 'ro', 0, 1),
(1196, 0, 'britan', 'ro', 0, 1),
(1197, 1198, 'blogs', 'ro', 0, 1),
(1198, 0, 'blog', 'ro', 0, 1),
(1199, 0, 'ora', 'ro', 0, 1),
(1200, 1232, 'nazist', 'ro', 0, 1),
(1201, 1233, 'mondiala', 'ro', 0, 1),
(1202, 1240, 'conditiile', 'ro', 0, 1),
(1203, 0, 'peste', 'ro', 0, 1),
(1204, 1236, 'luna', 'ro', 0, 1),
(1205, 1163, 'incepea', 'ro', 0, 1),
(1206, 1234, 'marea', 'ro', 0, 1),
(1207, 1167, 'batalie', 'ro', 0, 1),
(1208, 0, 'est', 'ro', 0, 1),
(1209, 1229, 'politica', 'ro', 0, 1),
(1210, 1237, 'inmormanta', 'ro', 0, 1),
(1211, 821, 'multa', 'ro', 0, 1),
(1212, 0, 'vreme', 'ro', 0, 1),
(1213, 0, 'iar', 'ro', 1, 1),
(1214, 1228, 'purta', 'ro', 0, 1),
(1215, 1230, 'pierea', 'ro', 0, 1),
(1216, 0, 'i', 'ro', 1, 1),
(1217, 0, 'intr', 'ro', 1, 1),
(1218, 1238, 'glorie', 'ro', 0, 1),
(1219, 1239, 'efemera', 'ro', 0, 1),
(1220, 0, 'insa', 'ro', 1, 1),
(1221, 1231, 'neuitat', 'ro', 0, 1),
(1222, 1241, 'batranii', 'ro', 0, 1),
(1223, 1235, 'lupi', 'ro', 0, 1),
(1224, 670, 'ai', 'ro', 1, 1),
(1225, 1234, 'marilor', 'ro', 0, 1),
(1226, 1227, 'subiectele', 'ro', 0, 1),
(1227, 0, 'subiect', 'ro', 0, 1),
(1228, 0, 'port', 'ro', 0, 1),
(1229, 0, 'politic', 'ro', 0, 1),
(1230, 0, 'pier', 'ro', 0, 1),
(1231, 0, 'uit', 'ro', 0, 1),
(1232, 0, 'nazi', 'ro', 0, 1),
(1233, 0, 'mond', 'ro', 0, 1),
(1234, 0, 'mare', 'ro', 0, 1),
(1235, 0, 'lup', 'ro', 0, 1),
(1236, 0, 'lun', 'ro', 0, 1),
(1237, 0, 'mormant', 'ro', 0, 1),
(1238, 0, 'glor', 'ro', 0, 1),
(1239, 0, 'efemer', 'ro', 0, 1),
(1240, 0, 'conditi', 'ro', 0, 1),
(1241, 0, 'batran', 'ro', 0, 1),
(1243, 1311, 'valuri', 'ro', 0, 1),
(1244, 1310, 'ului', 'ro', 1, 1),
(1245, 1305, 'referitoare', 'ro', 0, 1),
(1246, 0, 'raman', 'ro', 0, 1),
(1247, 1301, 'populare', 'ro', 0, 1),
(1248, 1304, 'randul', 'ro', 0, 1),
(1249, 1303, 'publicului', 'ro', 0, 1),
(1250, 771, 'romania', 'ro', 0, 1),
(1251, 1288, 'aparitia', 'ro', 0, 1),
(1252, 1282, 'unei', 'ro', 1, 1),
(1253, 1293, 'dedicata', 'ro', 0, 1),
(1254, 1296, 'exclusiv', 'ro', 0, 1),
(1255, 1255, 'demers', 'ro', 0, 1),
(1256, 1161, 'navala', 'ro', 0, 1),
(1257, 1217, 'dintre', 'ro', 1, 1),
(1258, 1166, 'cele', 'ro', 1, 1),
(1259, 1291, 'bune', 'ro', 0, 1),
(1260, 1292, 'carti', 'ro', 0, 1),
(1261, 1293, 'dedicate', 'ro', 0, 1),
(1262, 0, 'apa', 'ro', 0, 1),
(1263, 1298, 'impactul', 'ro', 0, 1),
(1264, 1242, 'epopeii', 'ro', 0, 1),
(1265, 1300, 'planuri', 'ro', 0, 1),
(1266, 1299, 'lansarii', 'ro', 0, 1),
(1267, 890, 'altele', 'ro', 1, 1),
(1268, 1308, 'speciala', 'ro', 0, 1),
(1269, 1294, 'dezbaterilor', 'ro', 0, 1),
(1270, 1295, 'editie', 'ro', 0, 1),
(1271, 0, 'm', 'ro', 1, 1),
(1272, 1309, 'transmisa', 'ro', 0, 1),
(1273, 1295, 'editor', 'ro', 0, 1),
(1274, 972, 'unui', 'ro', 1, 1),
(1275, 1275, 'episod', 'ro', 0, 1),
(1276, 0, 'destul', 'ro', 1, 1),
(1277, 1279, 'riscant', 'ro', 0, 1),
(1278, 1290, 'asumat', 'ro', 0, 1),
(1279, 0, 'risc', 'ro', 0, 1),
(1280, 1306, 'reusit', 'ro', 0, 1),
(1281, 1307, 'scrie', 'ro', 0, 1),
(1282, 1282, 'una', 'ro', 1, 1),
(1283, 1161, 'nava', 'ro', 0, 1),
(1284, 1302, 'povestea', 'ro', 0, 1),
(1285, 0, 'ei', 'ro', 0, 1),
(1286, 1297, 'fascineze', 'ro', 0, 1),
(1287, 1289, 'astazi', 'ro', 0, 1),
(1288, 0, 'apar', 'ro', 0, 1),
(1289, 0, 'zi', 'ro', 0, 1),
(1290, 0, 'asum', 'ro', 0, 1),
(1291, 0, 'bun', 'ro', 0, 1),
(1292, 0, 'cart', 'ro', 0, 1),
(1293, 0, 'dedic', 'ro', 0, 1),
(1294, 0, 'dezbat', 'ro', 0, 1),
(1296, 0, 'exclu', 'ro', 0, 1),
(1297, 0, 'fascin', 'ro', 0, 1),
(1298, 0, 'impact', 'ro', 0, 1),
(1299, 0, 'lans', 'ro', 0, 1),
(1300, 0, 'plan', 'ro', 0, 1),
(1301, 0, 'popul', 'ro', 0, 1),
(1302, 0, 'povest', 'ro', 0, 1),
(1303, 0, 'public', 'ro', 0, 1),
(1304, 0, 'rand', 'ro', 0, 1),
(1305, 0, 'refer', 'ro', 0, 1),
(1306, 0, 'reus', 'ro', 0, 1),
(1307, 0, 'scri', 'ro', 0, 1),
(1308, 0, 'special', 'ro', 0, 1),
(1309, 0, 'transmi', 'ro', 0, 1),
(1310, 0, 'ul', 'ro', 1, 1),
(1311, 0, 'val', 'ro', 0, 1),
(1312, 1292, 'cartii', 'ro', 0, 1),
(1313, 1318, 'autorul', 'ro', 0, 1),
(1314, 1321, 'raspuns', 'ro', 0, 1),
(1315, 0, 'dar', 'ro', 1, 1),
(1316, 1319, 'intrebari', 'ro', 0, 1),
(1317, 1320, 'iubitorii', 'ro', 0, 1),
(1318, 0, 'autor', 'ro', 0, 1),
(1319, 0, 'intreb', 'ro', 0, 1),
(1320, 0, 'iub', 'ro', 0, 1),
(1321, 0, 'raspun', 'ro', 0, 1),
(1322, 1163, 'incepand', 'ro', 0, 1),
(1323, 684, 'aceste', 'ro', 1, 1),
(1324, 0, 'root', 'en', 0, 0),
(1325, 1324, 'dsdasd', 'en', 0, 1),
(1326, 0, 'ssss', 'en', 0, 0),
(1327, 1326, 'saya', 'en', 0, 1),
(1328, 0, 'nice', 'en', 0, 0),
(1329, 1328, 'nice', 'en', 0, 1),
(1330, 0, 'good', 'en', 0, 1),
(1331, 0, 'fuck', 'en', 0, 1),
(1332, 0, 'kontol', 'en', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `file` text NOT NULL,
  `caption` text NOT NULL,
  `description` text NOT NULL,
  `thumb` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `caption`, `description`, `thumb`) VALUES
(62, 'uploads/d36d26c38fd2f24e6f74db9df07fadf4.jpg', 'alia&#039;s carnival comic', '1', 'uploads/thumbs/d36d26c38fd2f24e6f74db9df07fadf4.jpg'),
(63, 'uploads/e57d13fdfbce7605a8ee99958d39d6ee.jpg', '2', '2', 'uploads/thumbs/e57d13fdfbce7605a8ee99958d39d6ee.jpg'),
(64, 'uploads/1bc7cdb6b8b85557f7ef94c169ada5ee.jpg', '3', '3', 'uploads/thumbs/1bc7cdb6b8b85557f7ef94c169ada5ee.jpg'),
(65, 'uploads/80fb0b1875a747ba552038eb0da979b1.png', '&lt;3', '&lt;3', 'uploads/thumbs/80fb0b1875a747ba552038eb0da979b1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrators'),
(2, 'members', 'Members');

-- --------------------------------------------------------

--
-- Struktur dari tabel `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type` varchar(100) NOT NULL,
  `content_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `width` int(5) NOT NULL DEFAULT '0',
  `height` int(5) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keyphrases`
--

CREATE TABLE IF NOT EXISTS `keyphrases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type` varchar(100) NOT NULL,
  `content_id` int(10) unsigned NOT NULL,
  `phrase_id` int(10) unsigned NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `score` decimal(10,2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type` varchar(255) NOT NULL,
  `content_id` int(10) unsigned NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `word_id` int(10) unsigned NOT NULL,
  `appearances` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(100) NOT NULL,
  `slug` varchar(10) NOT NULL,
  `language_directory` varchar(100) NOT NULL,
  `language_code` varchar(20) DEFAULT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `languages`
--

INSERT INTO `languages` (`id`, `language_name`, `slug`, `language_directory`, `language_code`, `default`) VALUES
(9, 'Bahasa Indonesia', 'id', 'indonesian', 'id_ID', 0),
(8, 'English', 'en', 'english', 'en_US', 1),
(10, '日本語', 'ja', 'japanese', 'ja', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `menus`
--

INSERT INTO `menus` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(2, 'top-menu', '2015-05-04 12:25:23', NULL, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) unsigned NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `order` int(4) unsigned NOT NULL,
  `styling` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `parent_id`, `order`, `styling`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(4, 2, 0, 0, '', '2015-05-05 09:53:40', '2015-10-06 21:12:21', NULL, 1, 1, 0),
(6, 2, 0, 6, '', '2015-10-06 21:13:00', '2015-10-06 21:13:17', NULL, 1, 1, 0),
(7, 2, 0, 3, '', '2015-10-25 03:16:39', '2015-12-09 15:20:20', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_item_translations`
--

CREATE TABLE IF NOT EXISTS `menu_item_translations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `language_slug` varchar(5) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `absolute_path` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `menu_item_translations`
--

INSERT INTO `menu_item_translations` (`id`, `item_id`, `language_slug`, `title`, `url`, `absolute_path`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(7, 4, 'ro', 'Al doilea item', '#', 0, '2015-05-05 09:53:40', '2015-05-05 10:45:14', NULL, 1, 1, 0),
(9, 4, 'en', 'Blog', '#', NULL, '2015-05-05 10:45:37', '2015-10-06 21:12:21', NULL, 1, 1, 0),
(12, 4, 'id', 'Blog', 'blog', 1, '2015-10-06 21:11:44', NULL, NULL, 1, 0, 0),
(15, 6, 'id', 'Tentang', 'about', NULL, '2015-10-06 21:13:00', '2015-10-06 21:13:17', NULL, 1, 1, 0),
(16, 6, 'en', 'About', 'about', NULL, '2015-10-06 21:13:11', NULL, NULL, 1, 0, 0),
(17, 7, 'id', 'Galeri', 'gallery', NULL, '2015-10-25 03:16:39', '2015-10-25 03:17:49', NULL, 1, 1, 0),
(18, 7, 'en', 'Gallery', '/p/gallery', NULL, '2015-10-25 03:17:40', '2015-12-09 15:20:20', NULL, 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `phrases`
--

CREATE TABLE IF NOT EXISTS `phrases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `phrase` varchar(255) NOT NULL,
  `language_slug` varchar(10) NOT NULL,
  `last_check` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `site` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `slugs`
--

CREATE TABLE IF NOT EXISTS `slugs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type` varchar(150) NOT NULL,
  `content_id` int(11) NOT NULL,
  `translation_id` int(11) NOT NULL,
  `language_slug` varchar(5) NOT NULL,
  `url` varchar(255) NOT NULL,
  `redirect` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `url` (`url`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data untuk tabel `slugs`
--

INSERT INTO `slugs` (`id`, `content_type`, `content_id`, `translation_id`, `language_slug`, `url`, `redirect`, `created_at`, `updated_at`, `deleted_at`, `created_by`, `updated_by`, `deleted_by`) VALUES
(49, 'category', 30, 26, 'ro', 'test', 0, '2015-09-15 15:22:49', NULL, NULL, 1, 0, 0),
(38, 'page', 21, 16, 'ro', 'sindicat-ratb-calatorii-vor-fi-informati-luni-ca-este-posibila-suspendarea-transportului-in-comun', 0, '2015-05-22 16:38:23', NULL, NULL, 1, 0, 0),
(43, 'category', 25, 21, 'ro', 'blog', 0, '2015-05-26 13:42:56', NULL, NULL, 1, 0, 0),
(50, 'page', 31, 27, 'id', 'test', 0, '2015-10-03 09:41:43', NULL, NULL, 1, 0, 0),
(51, 'category', 30, 28, 'id', 'tes', 0, '2015-10-03 09:42:23', NULL, NULL, 1, 0, 0),
(52, 'post', 32, 29, 'id', 'tstetst', 0, '2015-10-03 09:42:47', NULL, NULL, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `pics` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `pics`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$G0h47xFzvBDD3DjwWD13XeCfwGuZgqtSodh5ARhDJLLWPRv0jSgfG', '', 'axlyody@gmail.com', '', NULL, NULL, 'G//xM7.GdpYOaX4KGLfi2u', 1268889823, 1449649128, 1, 'Spaghetti-san', '', 'Baka', '0', '14456173655051.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(3, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `website`
--

CREATE TABLE IF NOT EXISTS `website` (
  `title` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `admin_email` varchar(200) NOT NULL,
  `contact_email` varchar(200) NOT NULL,
  `modified_by` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `website`
--

INSERT INTO `website` (`title`, `page_title`, `status`, `admin_email`, `contact_email`, `modified_by`) VALUES
('M.C Nime', 'IDKs', 1, 'pherry@gmail.com', 'pherry@gmail.com', '1'),
('M.C Nime', 'IDKs', 1, 'pherry@gmail.com', 'pherry@gmail.com', '1');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `users_groups_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
