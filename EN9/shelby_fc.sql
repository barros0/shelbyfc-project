-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2022 at 08:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shelby_fc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bets`
--

CREATE TABLE `bets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `game_id` bigint UNSIGNED NOT NULL,
  `value` double(8,2) NOT NULL,
  `result` enum('Vitorio','Derrota') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `token_session` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `game_id` int NOT NULL,
  `quanty` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Segunda liga', NULL, NULL, NULL, NULL),
(2, 'Bilhetes', NULL, NULL, NULL, NULL),
(3, 'Relatório de Jogo', NULL, NULL, NULL, NULL),
(4, 'Pré-visualização de Jogo', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `code`, `icon`) VALUES
(1, 'Afghanistan', 'AF', NULL),
(2, 'Åland Islands', 'AX', NULL),
(3, 'Albania', 'AL', NULL),
(4, 'Algeria', 'DZ', NULL),
(5, 'American Samoa', 'AS', NULL),
(6, 'Andorra', 'AD', NULL),
(7, 'Angola', 'AO', NULL),
(8, 'Anguilla', 'AI', NULL),
(9, 'Antarctica', 'AQ', NULL),
(10, 'Antigua and Barbuda', 'AG', NULL),
(11, 'Argentina', 'AR', NULL),
(12, 'Armenia', 'AM', NULL),
(13, 'Aruba', 'AW', NULL),
(14, 'Australia', 'AU', NULL),
(15, 'Austria', 'AT', NULL),
(16, 'Azerbaijan', 'AZ', NULL),
(17, 'Bahamas', 'BS', NULL),
(18, 'Bahrain', 'BH', NULL),
(19, 'Bangladesh', 'BD', NULL),
(20, 'Barbados', 'BB', NULL),
(21, 'Belarus', 'BY', NULL),
(22, 'Belgium', 'BE', NULL),
(23, 'Belize', 'BZ', NULL),
(24, 'Benin', 'BJ', NULL),
(25, 'Bermuda', 'BM', NULL),
(26, 'Bhutan', 'BT', NULL),
(27, 'Bolivia, Plurinational State of', 'BO', NULL),
(28, 'Bonaire, Sint Eustatius and Saba', 'BQ', NULL),
(29, 'Bosnia and Herzegovina', 'BA', NULL),
(30, 'Botswana', 'BW', NULL),
(31, 'Bouvet Island', 'BV', NULL),
(32, 'Brazil', 'BR', NULL),
(33, 'British Indian Ocean Territory', 'IO', NULL),
(34, 'Brunei Darussalam', 'BN', NULL),
(35, 'Bulgaria', 'BG', NULL),
(36, 'Burkina Faso', 'BF', NULL),
(37, 'Burundi', 'BI', NULL),
(38, 'Cambodia', 'KH', NULL),
(39, 'Cameroon', 'CM', NULL),
(40, 'Canada', 'CA', NULL),
(41, 'Cape Verde', 'CV', NULL),
(42, 'Cayman Islands', 'KY', NULL),
(43, 'Central African Republic', 'CF', NULL),
(44, 'Chad', 'TD', NULL),
(45, 'Chile', 'CL', NULL),
(46, 'China', 'CN', NULL),
(47, 'Christmas Island', 'CX', NULL),
(48, 'Cocos (Keeling) Islands', 'CC', NULL),
(49, 'Colombia', 'CO', NULL),
(50, 'Comoros', 'KM', NULL),
(51, 'Congo', 'CG', NULL),
(52, 'Congo, the Democratic Republic of the', 'CD', NULL),
(53, 'Cook Islands', 'CK', NULL),
(54, 'Costa Rica', 'CR', NULL),
(55, 'Côte d\'Ivoire', 'CI', NULL),
(56, 'Croatia', 'HR', NULL),
(57, 'Cuba', 'CU', NULL),
(58, 'Curaçao', 'CW', NULL),
(59, 'Cyprus', 'CY', NULL),
(60, 'Czech Republic', 'CZ', NULL),
(61, 'Denmark', 'DK', NULL),
(62, 'Djibouti', 'DJ', NULL),
(63, 'Dominica', 'DM', NULL),
(64, 'Dominican Republic', 'DO', NULL),
(65, 'Ecuador', 'EC', NULL),
(66, 'Egypt', 'EG', NULL),
(67, 'El Salvador', 'SV', NULL),
(68, 'Equatorial Guinea', 'GQ', NULL),
(69, 'Eritrea', 'ER', NULL),
(70, 'Estonia', 'EE', NULL),
(71, 'Ethiopia', 'ET', NULL),
(72, 'Falkland Islands (Malvinas)', 'FK', NULL),
(73, 'Faroe Islands', 'FO', NULL),
(74, 'Fiji', 'FJ', NULL),
(75, 'Finland', 'FI', NULL),
(76, 'France', 'FR', NULL),
(77, 'French Guiana', 'GF', NULL),
(78, 'French Polynesia', 'PF', NULL),
(79, 'French Southern Territories', 'TF', NULL),
(80, 'Gabon', 'GA', NULL),
(81, 'Gambia', 'GM', NULL),
(82, 'Georgia', 'GE', NULL),
(83, 'Germany', 'DE', NULL),
(84, 'Ghana', 'GH', NULL),
(85, 'Gibraltar', 'GI', NULL),
(86, 'Greece', 'GR', NULL),
(87, 'Greenland', 'GL', NULL),
(88, 'Grenada', 'GD', NULL),
(89, 'Guadeloupe', 'GP', NULL),
(90, 'Guam', 'GU', NULL),
(91, 'Guatemala', 'GT', NULL),
(92, 'Guernsey', 'GG', NULL),
(93, 'Guinea', 'GN', NULL),
(94, 'Guinea-Bissau', 'GW', NULL),
(95, 'Guyana', 'GY', NULL),
(96, 'Haiti', 'HT', NULL),
(97, 'Heard Island and McDonald Mcdonald Islands', 'HM', NULL),
(98, 'Holy See (Vatican City State)', 'VA', NULL),
(99, 'Honduras', 'HN', NULL),
(100, 'Hong Kong', 'HK', NULL),
(101, 'Hungary', 'HU', NULL),
(102, 'Iceland', 'IS', NULL),
(103, 'India', 'IN', NULL),
(104, 'Indonesia', 'ID', NULL),
(105, 'Iran, Islamic Republic of', 'IR', NULL),
(106, 'Iraq', 'IQ', NULL),
(107, 'Ireland', 'IE', NULL),
(108, 'Isle of Man', 'IM', NULL),
(109, 'Israel', 'IL', NULL),
(110, 'Italy', 'IT', NULL),
(111, 'Jamaica', 'JM', NULL),
(112, 'Japan', 'JP', NULL),
(113, 'Jersey', 'JE', NULL),
(114, 'Jordan', 'JO', NULL),
(115, 'Kazakhstan', 'KZ', NULL),
(116, 'Kenya', 'KE', NULL),
(117, 'Kiribati', 'KI', NULL),
(118, 'Korea, Democratic People\'s Republic of', 'KP', NULL),
(119, 'Korea, Republic of', 'KR', NULL),
(120, 'Kuwait', 'KW', NULL),
(121, 'Kyrgyzstan', 'KG', NULL),
(122, 'Lao People\'s Democratic Republic', 'LA', NULL),
(123, 'Latvia', 'LV', NULL),
(124, 'Lebanon', 'LB', NULL),
(125, 'Lesotho', 'LS', NULL),
(126, 'Liberia', 'LR', NULL),
(127, 'Libya', 'LY', NULL),
(128, 'Liechtenstein', 'LI', NULL),
(129, 'Lithuania', 'LT', NULL),
(130, 'Luxembourg', 'LU', NULL),
(131, 'Macao', 'MO', NULL),
(132, 'Macedonia, the Former Yugoslav Republic of', 'MK', NULL),
(133, 'Madagascar', 'MG', NULL),
(134, 'Malawi', 'MW', NULL),
(135, 'Malaysia', 'MY', NULL),
(136, 'Maldives', 'MV', NULL),
(137, 'Mali', 'ML', NULL),
(138, 'Malta', 'MT', NULL),
(139, 'Marshall Islands', 'MH', NULL),
(140, 'Martinique', 'MQ', NULL),
(141, 'Mauritania', 'MR', NULL),
(142, 'Mauritius', 'MU', NULL),
(143, 'Mayotte', 'YT', NULL),
(144, 'Mexico', 'MX', NULL),
(145, 'Micronesia, Federated States of', 'FM', NULL),
(146, 'Moldova, Republic of', 'MD', NULL),
(147, 'Monaco', 'MC', NULL),
(148, 'Mongolia', 'MN', NULL),
(149, 'Montenegro', 'ME', NULL),
(150, 'Montserrat', 'MS', NULL),
(151, 'Morocco', 'MA', NULL),
(152, 'Mozambique', 'MZ', NULL),
(153, 'Myanmar', 'MM', NULL),
(154, 'Namibia', 'NA', NULL),
(155, 'Nauru', 'NR', NULL),
(156, 'Nepal', 'NP', NULL),
(157, 'Netherlands', 'NL', NULL),
(158, 'New Caledonia', 'NC', NULL),
(159, 'New Zealand', 'NZ', NULL),
(160, 'Nicaragua', 'NI', NULL),
(161, 'Niger', 'NE', NULL),
(162, 'Nigeria', 'NG', NULL),
(163, 'Niue', 'NU', NULL),
(164, 'Norfolk Island', 'NF', NULL),
(165, 'Northern Mariana Islands', 'MP', NULL),
(166, 'Norway', 'NO', NULL),
(167, 'Oman', 'OM', NULL),
(168, 'Pakistan', 'PK', NULL),
(169, 'Palau', 'PW', NULL),
(170, 'Palestine, State of', 'PS', NULL),
(171, 'Panama', 'PA', NULL),
(172, 'Papua New Guinea', 'PG', NULL),
(173, 'Paraguay', 'PY', NULL),
(174, 'Peru', 'PE', NULL),
(175, 'Philippines', 'PH', NULL),
(176, 'Pitcairn', 'PN', NULL),
(177, 'Poland', 'PL', NULL),
(178, 'Portugal', 'PT', NULL),
(179, 'Puerto Rico', 'PR', NULL),
(180, 'Qatar', 'QA', NULL),
(181, 'Réunion', 'RE', NULL),
(182, 'Romania', 'RO', NULL),
(183, 'Russian Federation', 'RU', NULL),
(184, 'Rwanda', 'RW', NULL),
(185, 'Saint Barthélemy', 'BL', NULL),
(186, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', NULL),
(187, 'Saint Kitts and Nevis', 'KN', NULL),
(188, 'Saint Lucia', 'LC', NULL),
(189, 'Saint Martin (French part)', 'MF', NULL),
(190, 'Saint Pierre and Miquelon', 'PM', NULL),
(191, 'Saint Vincent and the Grenadines', 'VC', NULL),
(192, 'Samoa', 'WS', NULL),
(193, 'San Marino', 'SM', NULL),
(194, 'Sao Tome and Principe', 'ST', NULL),
(195, 'Saudi Arabia', 'SA', NULL),
(196, 'Senegal', 'SN', NULL),
(197, 'Serbia', 'RS', NULL),
(198, 'Seychelles', 'SC', NULL),
(199, 'Sierra Leone', 'SL', NULL),
(200, 'Singapore', 'SG', NULL),
(201, 'Sint Maarten (Dutch part)', 'SX', NULL),
(202, 'Slovakia', 'SK', NULL),
(203, 'Slovenia', 'SI', NULL),
(204, 'Solomon Islands', 'SB', NULL),
(205, 'Somalia', 'SO', NULL),
(206, 'South Africa', 'ZA', NULL),
(207, 'South Georgia and the South Sandwich Islands', 'GS', NULL),
(208, 'South Sudan', 'SS', NULL),
(209, 'Spain', 'ES', NULL),
(210, 'Sri Lanka', 'LK', NULL),
(211, 'Sudan', 'SD', NULL),
(212, 'Suriname', 'SR', NULL),
(213, 'Svalbard and Jan Mayen', 'SJ', NULL),
(214, 'Swaziland', 'SZ', NULL),
(215, 'Sweden', 'SE', NULL),
(216, 'Switzerland', 'CH', NULL),
(217, 'Syrian Arab Republic', 'SY', NULL),
(218, 'Taiwan', 'TW', NULL),
(219, 'Tajikistan', 'TJ', NULL),
(220, 'Tanzania, United Republic of', 'TZ', NULL),
(221, 'Thailand', 'TH', NULL),
(222, 'Timor-Leste', 'TL', NULL),
(223, 'Togo', 'TG', NULL),
(224, 'Tokelau', 'TK', NULL),
(225, 'Tonga', 'TO', NULL),
(226, 'Trinidad and Tobago', 'TT', NULL),
(227, 'Tunisia', 'TN', NULL),
(228, 'Turkey', 'TR', NULL),
(229, 'Turkmenistan', 'TM', NULL),
(230, 'Turks and Caicos Islands', 'TC', NULL),
(231, 'Tuvalu', 'TV', NULL),
(232, 'Uganda', 'UG', NULL),
(233, 'Ukraine', 'UA', NULL),
(234, 'United Arab Emirates', 'AE', NULL),
(235, 'United Kingdom', 'GB', NULL),
(236, 'United States', 'US', NULL),
(237, 'United States Minor Outlying Islands', 'UM', NULL),
(238, 'Uruguay', 'UY', NULL),
(239, 'Uzbekistan', 'UZ', NULL),
(240, 'Vanuatu', 'VU', NULL),
(241, 'Venezuela, Bolivarian Republic of', 'VE', NULL),
(242, 'Viet Nam', 'VN', NULL),
(243, 'Virgin Islands, British', 'VG', NULL),
(244, 'Virgin Islands, U.S.', 'VI', NULL),
(245, 'Wallis and Futuna', 'WF', NULL),
(246, 'Western Sahara', 'EH', NULL),
(247, 'Yemen', 'YE', NULL),
(248, 'Zambia', 'ZM', NULL),
(249, 'Zimbabwe', 'ZW', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `pergunta` text COLLATE utf8mb4_unicode_ci,
  `resposta` text COLLATE utf8mb4_unicode_ci,
  `categoria` enum('informacoes','criar_conta','jogos_apostas','depositos_levantamentos') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `pergunta`, `resposta`, `categoria`) VALUES
(1, 'Sou sócio e já tinha conta na plataforma Shelby FC', 'É necessário registar nova conta selecionando a opção Sócio e inserir o seu número.<br>Ser-lhe-ão apresentados contactos existentes para validar o acesso.<br>No caso de falta de contactos associados, surgirá um alerta para contactar os serviços. ', 'informacoes'),
(2, 'Sou Sócio e já não tenho acesso aos dados existentes para validação (email e contacto inativos)', 'No caso de dados inativos contactar os serviços: <br><span>Email: </span>suporte@shelbyfc.pt <br><span>Telefone:</span> +351 22 508 33 52', 'informacoes'),
(3, 'Sou sócio mas gostaria de iniciar sessão com a minha conta Facebook, Google ou Apple.', ' Necessário registar nova conta. <br>O email de registo terá que ser o mesmo da sua conta da plataforma selecionada.', 'informacoes'),
(4, 'Os dados preenchidos no formulário de login refletem-se na ficha de sócio?', 'Não. Se quiser alterar alguma informação na ficha de sócio contacte os nossos serviços através:<br><span>Email: </span>suporte@shelbyfc.pt<br><span>Telefone:</span> +351 22 508 33 52', 'informacoes'),
(5, 'Sou sócio mas não me lembro do email associado.', 'Contacte, por favor, o serviço de apoio ao Sócio através do e-mail <span> suporte@shelbyfc.pt</span>', 'informacoes'),
(6, 'Ao autenticar é-me apresentado uma janela de consentimentos, o que fazer?', 'É necessário aceitar os consentimentos.', 'criar_conta'),
(7, 'Requisitos da Senha de acesso', 'A <span>senha de acesso</span> deverá ter:<br><br>Pelo menos um caracter não alfanumérico (. - ! - # - %)<br>Pelo menos um digito (0 - 9 )<br>Pelo menos um caracter maiúsculo (A - Z)<br>Pelo menos 8 caracteres<br>', 'criar_conta'),
(8, 'Ao autenticar apresenta um formulário para validar?', 'Deverá seguir as instruções. De seguida terá que selecionar um dos métodos de verificação: SMS ou email.', 'criar_conta'),
(9, 'Não tenho conta criada. Posso criar uma conta para acesso às plataformas Shelby FC?', 'Sim, deverá introduzir um email e password e, de seguida, selecionar <span>\"Registar nova conta\".</span>', 'criar_conta'),
(10, 'De que forma são regulados os jogos de casino da Shelby FC?', 'Todos os jogos que estão disponíveis na SHELBY FC são devidamente certificados pela entidade reguladora do jogo online em Portugal, o SRIJ.<br>Para além do mais, todos estes jogos são providenciados por entidades certificadas, sendo que o nosso casino não tem qualquer controlo relativamente a quaisquer resultados.<br>Sendo assim, os resultados de cada jogada são completamente aleatórios e independentes da SHELBY FC.', 'jogos_apostas'),
(11, 'Como faço uma aposta desportiva?', 'Para colocar uma aposta desportiva, tens de escolher pelo menos uma seleção para que esta seja adicionada ao boletim de apostas.<br>Seguidamente, deves definir o valor que pretendes apostar no boletim de apostas.<br>Podes colocar apostas simples (com apenas uma seleção), múltiplas (com várias seleções) ou combinadas (que englobam várias combinações de apostas múltiplas e simples).<br>No boletim de apostas encontrarás informação relevante sobre a tua aposta, como o valor da odd, o custo da aposta e os ganhos potenciais. No nosso blog temos um artigo sobre as diferenças entre os tipos de apostas que te poderá ajudar a decidir.', 'jogos_apostas'),
(12, 'O que são odds?', 'Odds (ou \"cotas\") são valores numéricos que são atribuídos a um determinado evento, consoante a probabilidade de o mesmo ocorrer. Quanto mais improvável for o resultado, maior será a odd. Comparativamente, quanto mais provável for o resultado, menor será o seu valor.<br>É importante mencionar que o valor de uma odd não é estático, variando desde o momento em que é criada até ao momento em que já não está disponível.<br>As odds permitem calcular o prémio oferecido ao jogador, servindo de \"multiplicador\" da aposta: quando colocas uma aposta, o valor da odd será multiplicado pelo valor da tua aposta de forma a obteres o valor dos teus ganhos.<br>Por exemplo, se a odd da seleção em que apostares for de 2.50, e o valor apostado for €10, os teus ganhos serão de €25 (no caso de uma aposta bem sucedida).', 'jogos_apostas'),
(13, 'Qual o valor mínimo que poderei depositar e levantar?', 'O valor mínimo de depósito é de 10€. O valor mínimo de levantamento é de 0,01€.', 'depositos_levantamentos'),
(14, 'Quais são os Métodos de Pagamento disponíveis na Shelby FC?', 'Na Shelby FC, podes efetuar depósitos através de Multibanco, MB WAY, Maestro, Visa, Mastercard, Skrill, Netteler, Paypal e Paysafecard.<br>No que diz respeito aos levantamentos, poderão ser feitos através de Cartão de Crédito Visa, transferência bancária/SEPA, Skrill, Neteller e Paypal.<br>Caso não encontres o método que queres utilizar, por favor contacta o Serviço de Apoio ao Cliente.', 'depositos_levantamentos'),
(15, 'Os meus depósitos terão taxas associadas?', 'Não, os teus depósitos não terão qualquer encargo para ti por parte da Shelby FC. Contudo, poderão existir taxas aplicadas pelo teu banco ou método de pagamento, aos quais a Shelby FC é alheia.<br>Por favor, informa-te junto do teu banco ou método de pagamento relativamente às mesmas.', 'depositos_levantamentos');

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts_comments`
--

CREATE TABLE `forum_posts_comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `reply_id` bigint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts_images`
--

CREATE TABLE `forum_posts_images` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_available` tinyint(1) NOT NULL,
  `ticket_price` double(8,2) NOT NULL,
  `ticket_price_partner` double(8,2) NOT NULL,
  `result_home` int NOT NULL,
  `result_opponent` int NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `limit_bet` datetime NOT NULL,
  `limit_buy_ticket` datetime NOT NULL,
  `stock_tickets` int NOT NULL,
  `datetime_game` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs_login`
--

CREATE TABLE `logs_login` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` enum('Sucesso','Falhada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_29_143614_create_categories_table', 1),
(6, '2022_11_29_143700_create_news_table', 1),
(7, '2022_11_29_143810_create_news_categories_table', 1),
(8, '2022_11_29_144159_create_teams_table', 1),
(9, '2022_11_29_144641_create_games_table', 1),
(10, '2022_11_29_144756_create_tickets_table', 1),
(11, '2022_11_29_193351_create_contacts_table', 1),
(12, '2022_11_29_193416_create_cart_table', 1),
(13, '2022_11_29_193427_create_bets_table', 1),
(14, '2022_11_29_194719_create_forum_posts_table', 1),
(15, '2022_11_29_194735_create_forum_posts_comments_table', 1),
(16, '2022_11_29_195301_create_forum_posts_comments_images', 1),
(17, '2022_11_29_195848_create_countries_table', 1),
(18, '2022_11_29_195850_create_subscriptions_table', 1),
(19, '2022_11_29_200102_create_logs_login_table', 1),
(20, '2022_11_29_223516_create_transactions_table', 1),
(21, '2022_11_30_130621_create_social_accounts_table', 1),
(22, '2022_12_09_160659_create_faqs_table', 1),
(23, '2022_12_12_160416_create_socio_price_table', 1),
(24, '2022_12_13_161642_add_country_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `small_description`, `body`, `image`, `views`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ADEPTOS DO SHELBY FC RUMAM A FILADÉLFIA PARA A SEGUNDA LIGA EM DIRETO', 'Centenas de adeptos da Cidade dos Eua e membros de Clubes Oficiais de Adeptos dirigiram-se a Filadélfia para o maior evento de sempre da Segunda Liga Live.', 'Arranca a preparação para a receção ao SC Farense, da 3.ª jornada da Segunda Liga<br>Depois da vitória em Chaves (2-0), o FC Porto regressa ao trabalho na segunda-feira no Centro de Treinos e Formação Desportiva PortoGaia, no Olival.<br>A sessão (10h30) marca o arranque da preparação para o jogo da 3.ª jornada do grupo A da Taça da Liga, em que os Dragões recebem o Vizela na sexta-feira (20h30, Sport TV).', 'noticia1.jpg', 0, NULL, NULL, NULL),
(2, 'Shelby FC v CD Mafra ', 'TICKETING INFORMATION', 'O Clube recebeu uma dotação de 2.947 bilhetes, incluindo 18 baías de cadeira de rodas e uma série de bilhetes para adeptos ambulantes.', 'noticia2.jpg', 0, NULL, NULL, NULL),
(3, 'ADEPTOS DO SHELBY FC RUMAM A FILADÉLFIA PARA A SEGUNDA LIGA EM DIRETO', 'Centenas de adeptos da Cidade dos Eua e membros de Clubes Oficiais de Adeptos dirigiram-se a Filadélfia para o maior evento de sempre da Segunda Liga Live.', '<p>Arranca a preparação para a receção ao SC Farense, da 3.ª jornada da Segunda Liga</p><p>Depois da vitória em Chaves (2-0), o FC Porto regressa ao trabalho na segunda-feira no Centro de Treinos e Formação Desportiva PortoGaia, no Olival.</p><p>A sessão (10h30) marca o arranque da preparação para o jogo da 3.ª jornada do grupo A da Taça da Liga, em que os Dragões recebem o Vizela na sexta-feira (20h30, Sport TV).</p>', 'noticia2.jpg1671048839.jpg', 0, '2022-12-14 20:13:59', '2022-12-14 20:13:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `news_id` bigint UNSIGNED NOT NULL,
  `categories_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `news_id`, `categories_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, '2022-12-14 20:13:59', '2022-12-14 20:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `provider_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `socio_price`
--

CREATE TABLE `socio_price` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preco` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `socio_price`
--

INSERT INTO `socio_price` (`id`, `name`, `idade`, `preco`) VALUES
(1, 'Júnior', '>13', 5),
(2, 'Regular', '15+', 20),
(3, 'Sénior', '60+', 15);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `state` enum('Pendente','Ativa','Expirada') COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` bigint UNSIGNED NOT NULL,
  `value` double(8,2) DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `state`, `name`, `email`, `phone`, `postal_code`, `address`, `city`, `birthdate`, `cc`, `nif`, `country_id`, `value`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ativa', 'Pedro Andrade', 'admin@admin.com', '987456123', '2425-555', 'Rua de Leiria 92', 'Leiria', '2003-12-13', 'cc1.pdf', '256587489', 6, 30.00, '2023-12-13 21:41:05', '2022-12-13 21:41:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `images`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Shelby FC', 'shelby_fc.png', NULL, NULL, NULL),
(2, 'SC Farense', 'sc_farense.png', NULL, NULL, NULL),
(3, 'Estrela Amadora', 'estrela_da_amadora.png', NULL, NULL, NULL),
(4, 'SL Benfica B', 'sl_benfica.png', NULL, NULL, NULL),
(5, 'Vilafranquense', 'ud_vilafranquense.png', NULL, NULL, NULL),
(6, 'Ac. Viseu', 'academico_de_viseu.png', NULL, NULL, NULL),
(7, 'FC Porto B', 'fc_porto.png', NULL, NULL, NULL),
(8, 'Leixões SC', 'leixoes.png', NULL, NULL, NULL),
(9, 'CD Feirense', 'cd_feirense.png', NULL, NULL, NULL),
(10, 'FC Penafiel', 'fc_penafiel.png', NULL, NULL, NULL),
(11, 'CD Tondela', 'cd_tondela.png', NULL, NULL, NULL),
(12, 'CD Mafra', 'cd_mafra.png', NULL, NULL, NULL),
(13, 'CD Nacional', 'cd_nacional.png', NULL, NULL, NULL),
(14, 'UD Oliveirense', 'UD_Oliveirense.png', NULL, NULL, NULL),
(15, 'SCU Torreense', 'Torreense.png', NULL, NULL, NULL),
(16, 'BSAD', 'Belenenses.png', NULL, NULL, NULL),
(17, 'CD Trofense', 'trofense.png', NULL, NULL, NULL),
(18, 'SC Covilhã', 'covilha.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `game_id` bigint UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('Pendente','Ativo','Suspenso','Banido') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'noimage.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `postal_code`, `city`, `address`, `nif`, `birthdate`, `is_admin`, `status`, `image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `country_id`) VALUES
(1, 'Administrador', 'admin@admin.com', '91200200', '1234-123', 'cidade', 'morada', '123456789', '2022-12-29', 1, 'Pendente', 'noimage.png', NULL, '$2y$10$TFB91U6/tW3F5.mzxral2O6eCvwJm9pp.5bnsTQ4zeGtUs4h3nVeC', NULL, '2022-12-14 20:03:48', '2022-12-14 20:05:02', NULL, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bets`
--
ALTER TABLE `bets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bets_user_id_foreign` (`user_id`),
  ADD KEY `bets_game_id_foreign` (`game_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_code_unique` (`code`),
  ADD UNIQUE KEY `countries_icon_unique` (`icon`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_posts_comments`
--
ALTER TABLE `forum_posts_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_posts_comments_user_id_foreign` (`user_id`),
  ADD KEY `forum_posts_comments_post_id_foreign` (`post_id`),
  ADD KEY `forum_posts_comments_reply_id_foreign` (`reply_id`);

--
-- Indexes for table `forum_posts_images`
--
ALTER TABLE `forum_posts_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forum_posts_images_post_id_foreign` (`post_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `games_team_id_foreign` (`team_id`);

--
-- Indexes for table `logs_login`
--
ALTER TABLE `logs_login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_login_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_categories_news_id_foreign` (`news_id`),
  ADD KEY `news_categories_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_id_unique` (`provider_id`),
  ADD KEY `social_accounts_user_id_foreign` (`user_id`);

--
-- Indexes for table `socio_price`
--
ALTER TABLE `socio_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `subscriptions_country_id_foreign` (`country_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`),
  ADD KEY `tickets_game_id_foreign` (`game_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bets`
--
ALTER TABLE `bets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_posts_comments`
--
ALTER TABLE `forum_posts_comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_posts_images`
--
ALTER TABLE `forum_posts_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs_login`
--
ALTER TABLE `logs_login`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socio_price`
--
ALTER TABLE `socio_price`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bets`
--
ALTER TABLE `bets`
  ADD CONSTRAINT `bets_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `bets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `forum_posts_comments`
--
ALTER TABLE `forum_posts_comments`
  ADD CONSTRAINT `forum_posts_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `forum_posts` (`id`),
  ADD CONSTRAINT `forum_posts_comments_reply_id_foreign` FOREIGN KEY (`reply_id`) REFERENCES `forum_posts_comments` (`id`),
  ADD CONSTRAINT `forum_posts_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `forum_posts_images`
--
ALTER TABLE `forum_posts_images`
  ADD CONSTRAINT `forum_posts_images_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `forum_posts` (`id`);

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`);

--
-- Constraints for table `logs_login`
--
ALTER TABLE `logs_login`
  ADD CONSTRAINT `logs_login_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD CONSTRAINT `news_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `news_categories_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`id`);

--
-- Constraints for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD CONSTRAINT `social_accounts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`),
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
