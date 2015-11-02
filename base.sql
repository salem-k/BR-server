
--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `start_time`, `end_time`, `type`, `content`, `comment`) VALUES
(1, '2010-01-01 00:00:00', '2010-01-01 00:00:00', 'Option', 'red', 'fsqfdq'),
(2, '2010-01-01 00:00:00', '2010-01-01 00:00:00', 'Option', 'red', 'fsqfdq'),
(3, '2010-01-01 00:00:00', '2010-01-01 00:00:00', 'Checkbox', 'pathimage', 'dsjhgkjh');
