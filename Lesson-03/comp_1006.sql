USE `comp_1006`;
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `postal_code` varchar(20) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

TRUNCATE TABLE `users`;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `postal_code`, `city`, `province`, `country`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Beth', 'Simonis', 'hoppe.josephine@buckridge.com', '570-680-7820 x550', '539 Gutkowski Spurs', 'Suite 740', '87318-0373', 'Kertzmannside', 'Connecticut', 'Cocos (Keeling) Islands', 'http://api.adorable.io/avatars/300/hoppe.josephine@buckridge.com', '2015-12-26 16:42:20', '2019-09-14 18:09:23'),
(2, 'Marquise', 'Orn', 'deven.krajcik@tromp.com', '+1-229-873-7601', '444 Rutherford Pines Suite 342', NULL, '82912-7815', 'Arnoldhaven', 'Connecticut', 'Zimbabwe', 'http://api.adorable.io/avatars/300/deven.krajcik@tromp.com', '2014-11-06 20:47:40', '2019-09-14 18:09:23'),
(3, 'Gene', 'Waters', 'schmeler.kari@effertz.com', '(471) 259-2556', '44038 Lakin Course', NULL, '86150-5051', 'North Louisa', 'West Virginia', 'Ukraine', 'http://api.adorable.io/avatars/300/schmeler.kari@effertz.com', '2019-02-28 05:51:56', '2019-09-14 18:09:23'),
(4, 'Eldon', 'Renner', 'lamar57@schaden.com', '318-373-5305 x19193', '740 Terry Crescent', NULL, '03216', 'Ryderport', 'Arkansas', 'Chad', 'http://api.adorable.io/avatars/300/lamar57@schaden.com', '2018-03-19 08:54:26', '2019-09-14 18:09:23'),
(5, 'Scot', 'Considine', 'viviane.mccullough@hotmail.com', '242-452-1370 x28640', '61969 Kilback Village Suite 909', 'Suite 218', '96307-5706', 'Wisozkton', 'Hawaii', 'Guinea-Bissau', 'http://api.adorable.io/avatars/300/viviane.mccullough@hotmail.com', '2016-03-18 09:17:04', '2019-09-14 18:09:23'),
(6, 'Jacinthe', 'Herzog', 'gulgowski.reuben@champlin.com', '990-349-6217 x374', '1578 Mills Heights Suite 242', NULL, '76877-5763', 'Margarettahaven', 'Virginia', 'United States Virgin Islands', 'http://api.adorable.io/avatars/300/gulgowski.reuben@champlin.com', '2015-07-06 21:09:15', '2019-09-14 18:09:23'),
(7, 'Agnes', 'Runte', 'glover.jarrod@quitzon.com', '614.330.3289', '501 Flo Ridge', 'Apt. 841', '20313-2329', 'Thadbury', 'Delaware', 'Nauru', 'http://api.adorable.io/avatars/300/glover.jarrod@quitzon.com', '2018-01-25 15:53:28', '2019-09-14 18:09:23'),
(8, 'Rowland', 'Rogahn', 'bruce13@daniel.com', '1-228-550-8982 x8989', '43955 Goyette Turnpike Suite 738', NULL, '45592-5335', 'Roderickland', 'Virginia', 'Chile', 'http://api.adorable.io/avatars/300/bruce13@daniel.com', '2018-12-08 20:37:25', '2019-09-14 18:09:23'),
(9, 'Tate', 'Nader', 'vandervort.ronaldo@barrows.net', '+1 (947) 307-7837', '4756 Raynor Trail Suite 835', NULL, '05057-1074', 'New Jensen', 'North Carolina', 'Jordan', 'http://api.adorable.io/avatars/300/vandervort.ronaldo@barrows.net', '2014-10-26 21:28:26', '2019-09-14 18:09:23'),
(10, 'Isai', 'Schoen', 'dgorczany@hotmail.com', '1-370-321-3004', '525 Carli Spring Apt. 872', NULL, '66139', 'Raynorview', 'New Hampshire', 'Eritrea', 'http://api.adorable.io/avatars/300/dgorczany@hotmail.com', '2019-02-16 21:21:59', '2019-09-14 18:09:23'),
(11, 'Gwen', 'Homenick', 'bosco.amelia@gmail.com', '569.835.4463 x71794', '48545 Laura Crossroad Apt. 771', 'Apt. 136', '12659-9764', 'Lake Lorena', 'Kansas', 'Croatia', 'http://api.adorable.io/avatars/300/bosco.amelia@gmail.com', '2018-09-27 05:43:40', '2019-09-14 18:09:23'),
(12, 'Deonte', 'Jerde', 'bailey47@gmail.com', '(472) 492-0496', '88204 Jacobson Rest', NULL, '13420-5877', 'Port Lillie', 'Connecticut', 'Macedonia', 'http://api.adorable.io/avatars/300/bailey47@gmail.com', '2019-06-25 01:23:40', '2019-09-14 18:09:23'),
(13, 'Green', 'Volkman', 'lacey79@schmeler.com', '(623) 512-2160 x688', '5584 Romaguera Points Suite 703', 'Apt. 181', '22748-2176', 'Fionaton', 'New York', 'Aruba', 'http://api.adorable.io/avatars/300/lacey79@schmeler.com', '2015-09-12 19:49:07', '2019-09-14 18:09:23'),
(14, 'Camilla', 'O\'Conner', 'stark.leora@hotmail.com', '1-307-768-9927', '54206 Glover Fort Apt. 379', NULL, '74320', 'Lockmanshire', 'South Dakota', 'Eritrea', 'http://api.adorable.io/avatars/300/stark.leora@hotmail.com', '2018-12-15 11:23:56', '2019-09-14 18:09:23'),
(15, 'Rozella', 'Jacobson', 'kiana75@nicolas.com', '383-230-7817', '7658 Funk Ford Suite 038', 'Apt. 333', '44325-8412', 'Gorczanymouth', 'Missouri', 'Afghanistan', 'http://api.adorable.io/avatars/300/kiana75@nicolas.com', '2019-03-07 12:34:10', '2019-09-14 18:09:23'),
(16, 'Lucio', 'Walter', 'brendon72@leuschke.com', '+1 (883) 827-2384', '6287 Missouri Cove Suite 334', NULL, '42136', 'North Chet', 'Connecticut', 'Slovakia (Slovak Republic)', 'http://api.adorable.io/avatars/300/brendon72@leuschke.com', '2018-08-13 07:45:02', '2019-09-14 18:09:23'),
(17, 'Alessandra', 'Conroy', 'ericka.haag@hill.net', '1-579-654-5402', '6800 Schmeler Trail', NULL, '79861-1297', 'West Constantin', 'South Carolina', 'Armenia', 'http://api.adorable.io/avatars/300/ericka.haag@hill.net', '2016-01-16 01:35:40', '2019-09-14 18:09:23'),
(18, 'Rebecca', 'Stehr', 'sofia.wunsch@kessler.com', '334.962.5443 x2559', '450 Ally Mews Suite 686', 'Apt. 502', '49089', 'Lake Enolaville', 'Nevada', 'Libyan Arab Jamahiriya', 'http://api.adorable.io/avatars/300/sofia.wunsch@kessler.com', '2018-03-25 00:55:10', '2019-09-14 18:09:23'),
(19, 'Keenan', 'Johnson', 'ettie.homenick@sauer.com', '714.324.4295', '7246 Hackett Lake', NULL, '77468', 'Mitchellburgh', 'District of Columbia', 'Turks and Caicos Islands', 'http://api.adorable.io/avatars/300/ettie.homenick@sauer.com', '2016-11-30 02:24:09', '2019-09-14 18:09:23'),
(20, 'Modesta', 'Ortiz', 'chane@gmail.com', '1-774-807-6206 x8268', '2334 Jeff Coves Suite 443', NULL, '81689-9143', 'Luraville', 'Massachusetts', 'Togo', 'http://api.adorable.io/avatars/300/chane@gmail.com', '2015-08-10 02:48:52', '2019-09-14 18:09:23'),
(21, 'Nikolas', 'Dicki', 'koepp.mitchel@gleason.com', '+1-907-533-3257', '99758 Harber Summit Apt. 551', 'Apt. 352', '07701-1097', 'Port Raphaelleport', 'Alabama', 'Lao People\'s Democratic Republic', 'http://api.adorable.io/avatars/300/koepp.mitchel@gleason.com', '2017-10-06 11:12:25', '2019-09-14 18:09:23'),
(22, 'Samantha', 'Hahn', 'shemar.kiehn@koss.com', '1-443-431-3869 x5316', '8747 Bartoletti Cove', NULL, '49392-1066', 'Larsonfurt', 'South Carolina', 'Korea', 'http://api.adorable.io/avatars/300/shemar.kiehn@koss.com', '2014-12-17 13:42:20', '2019-09-14 18:09:23'),
(23, 'Khalid', 'Kris', 'fcremin@zieme.com', '564.413.7443', '570 Cicero Dale Suite 228', NULL, '28098-4175', 'Port Skylarhaven', 'Colorado', 'Samoa', 'http://api.adorable.io/avatars/300/fcremin@zieme.com', '2015-07-21 08:54:46', '2019-09-14 18:09:23'),
(24, 'Sage', 'Rau', 'ilang@hotmail.com', '489.890.8076 x66781', '9485 Katarina Tunnel', NULL, '14299', 'South Eulalia', 'North Carolina', 'Tanzania', 'http://api.adorable.io/avatars/300/ilang@hotmail.com', '2017-05-04 04:21:34', '2019-09-14 18:09:23'),
(25, 'Gwendolyn', 'Quigley', 'maynard.dooley@yahoo.com', '(876) 460-7375', '55136 Spinka Rue', NULL, '92970', 'Liabury', 'New Jersey', 'Anguilla', 'http://api.adorable.io/avatars/300/maynard.dooley@yahoo.com', '2017-11-10 15:51:24', '2019-09-14 18:09:23'),
(26, 'Ephraim', 'Gerlach', 'tillman.stark@raynor.com', '436.451.6984', '3804 Runolfsdottir Manors Apt. 920', 'Suite 212', '66932', 'West Abbeyside', 'Alabama', 'Qatar', 'http://api.adorable.io/avatars/300/tillman.stark@raynor.com', '2016-06-09 15:24:31', '2019-09-14 18:09:23'),
(27, 'Grayce', 'Klocko', 'fred.grant@gmail.com', '(667) 353-8447 x592', '681 Crona Burg', NULL, '34540', 'Denesikport', 'Iowa', 'Mayotte', 'http://api.adorable.io/avatars/300/fred.grant@gmail.com', '2017-09-13 05:17:02', '2019-09-14 18:09:23'),
(28, 'Delfina', 'Romaguera', 'daren02@raynor.com', '1-631-320-6380', '2412 Daugherty Burgs', NULL, '53752', 'West Hermina', 'Alabama', 'Maldives', 'http://api.adorable.io/avatars/300/daren02@raynor.com', '2015-04-04 10:25:27', '2019-09-14 18:09:23'),
(29, 'Lesley', 'Waters', 'cremin.brycen@schowalter.com', '1-585-472-6945', '633 Shemar Loaf', NULL, '52332-1652', 'Jamirtown', 'Nebraska', 'Chile', 'http://api.adorable.io/avatars/300/cremin.brycen@schowalter.com', '2017-04-26 11:28:46', '2019-09-14 18:09:23'),
(30, 'Florian', 'Schuppe', 'schinner.daphnee@gmail.com', '628-291-3355 x88092', '4024 Funk Harbors Suite 109', NULL, '92318', 'North Ike', 'Pennsylvania', 'Vietnam', 'http://api.adorable.io/avatars/300/schinner.daphnee@gmail.com', '2016-05-01 15:03:12', '2019-09-14 18:09:23'),
(31, 'Taurean', 'Schmeler', 'davion82@hotmail.com', '+1-902-685-7109', '753 McKenzie Village Apt. 062', 'Suite 019', '85905-3151', 'North Mabellestad', 'Alabama', 'Yemen', 'http://api.adorable.io/avatars/300/davion82@hotmail.com', '2017-03-03 10:17:40', '2019-09-14 18:09:23'),
(32, 'Vada', 'Lindgren', 'esther96@metz.com', '224.495.1722', '3312 Colby Burg Suite 672', 'Apt. 565', '19630', 'North Evalynfurt', 'California', 'Mexico', 'http://api.adorable.io/avatars/300/esther96@metz.com', '2018-04-19 23:17:42', '2019-09-14 18:09:23'),
(33, 'Theodora', 'Treutel', 'mohr.imelda@gmail.com', '(563) 951-1323 x8158', '62537 Kitty Brooks Apt. 576', 'Suite 682', '10896-5989', 'Rickport', 'Ohio', 'Bosnia and Herzegovina', 'http://api.adorable.io/avatars/300/mohr.imelda@gmail.com', '2017-03-11 20:35:40', '2019-09-14 18:09:23'),
(34, 'Duane', 'Spencer', 'bode.logan@hotmail.com', '550-223-3829', '1977 Witting Lake Apt. 859', NULL, '34007-2660', 'Port Rheabury', 'Arkansas', 'Christmas Island', 'http://api.adorable.io/avatars/300/bode.logan@hotmail.com', '2017-07-20 22:07:41', '2019-09-14 18:09:23'),
(35, 'Ezra', 'Medhurst', 'schmitt.marlin@mcglynn.org', '1-627-317-2599 x284', '9963 Kian Flats Suite 415', NULL, '01396-9615', 'Lake Robin', 'Utah', 'Kiribati', 'http://api.adorable.io/avatars/300/schmitt.marlin@mcglynn.org', '2017-07-31 23:04:59', '2019-09-14 18:09:23'),
(36, 'Layla', 'Halvorson', 'maryse.lind@sanford.com', '398.933.9189 x4052', '9422 Mabelle Summit Apt. 337', NULL, '65373-9015', 'Salvatoretown', 'Michigan', 'Argentina', 'http://api.adorable.io/avatars/300/maryse.lind@sanford.com', '2018-05-17 22:13:55', '2019-09-14 18:09:23'),
(37, 'Lucie', 'Dickens', 'johnson40@yahoo.com', '+12162330902', '789 Will Heights', 'Suite 763', '00830', 'Buckridgetown', 'North Dakota', 'Malaysia', 'http://api.adorable.io/avatars/300/johnson40@yahoo.com', '2017-07-03 10:58:11', '2019-09-14 18:09:23'),
(38, 'Ruben', 'Volkman', 'bruen.zakary@bergstrom.com', '876-796-6512', '9622 Damon Creek', 'Apt. 333', '36253-2796', 'West Victoria', 'New York', 'El Salvador', 'http://api.adorable.io/avatars/300/bruen.zakary@bergstrom.com', '2018-07-25 06:58:34', '2019-09-14 18:09:23'),
(39, 'Haley', 'O\'Conner', 'keeling.erna@hodkiewicz.net', '710.600.0856', '6645 Dana Trafficway', NULL, '66434', 'New Annabel', 'Michigan', 'Djibouti', 'http://api.adorable.io/avatars/300/keeling.erna@hodkiewicz.net', '2016-11-14 00:02:06', '2019-09-14 18:09:23'),
(40, 'Jacky', 'Upton', 'rau.easter@heathcote.com', '263-456-2958', '48171 Mohamed Light Apt. 171', NULL, '64075', 'Hoegershire', 'Iowa', 'Estonia', 'http://api.adorable.io/avatars/300/rau.easter@heathcote.com', '2017-09-02 03:25:12', '2019-09-14 18:09:23'),
(41, 'Lyric', 'Schoen', 'tristin.ullrich@hotmail.com', '930-491-6210 x9357', '5277 Dickens Stravenue Suite 144', NULL, '31034', 'North Letha', 'Connecticut', 'Pakistan', 'http://api.adorable.io/avatars/300/tristin.ullrich@hotmail.com', '2015-10-14 04:44:07', '2019-09-14 18:09:23'),
(42, 'Geovany', 'Rogahn', 'alexandre26@mitchell.com', '(678) 406-1802 x757', '140 Leffler Lane', NULL, '46466-5031', 'West Gennaro', 'New Jersey', 'Uganda', 'http://api.adorable.io/avatars/300/alexandre26@mitchell.com', '2016-05-21 06:55:49', '2019-09-14 18:09:23'),
(43, 'Minnie', 'Gutkowski', 'pritchie@gmail.com', '1-694-490-8794', '9993 Eugenia Branch', NULL, '41597-6287', 'Kavonside', 'Pennsylvania', 'Iceland', 'http://api.adorable.io/avatars/300/pritchie@gmail.com', '2018-06-12 02:50:16', '2019-09-14 18:09:23'),
(44, 'Jerrell', 'Bogan', 'casper.kimberly@yahoo.com', '874.506.6822 x938', '761 Johns Tunnel', 'Suite 134', '86394-2853', 'New Matteoberg', 'Louisiana', 'Kazakhstan', 'http://api.adorable.io/avatars/300/casper.kimberly@yahoo.com', '2014-11-27 13:31:39', '2019-09-14 18:09:23'),
(45, 'Nico', 'Jacobs', 'vella.gislason@gottlieb.com', '(310) 715-8804 x0331', '83580 Feest Locks Apt. 076', NULL, '04676', 'Camilleton', 'Hawaii', 'Zambia', 'http://api.adorable.io/avatars/300/vella.gislason@gottlieb.com', '2018-10-10 11:38:41', '2019-09-14 18:09:23'),
(46, 'Narciso', 'Harber', 'francisca.fay@beahan.com', '1-359-254-5821', '530 Chad Forks Apt. 574', NULL, '23355-1274', 'Gorczanyland', 'Missouri', 'South Africa', 'http://api.adorable.io/avatars/300/francisca.fay@beahan.com', '2018-06-11 10:41:20', '2019-09-14 18:09:23'),
(47, 'Lina', 'O\'Connell', 'brisa08@king.com', '+1-970-407-2970', '9863 Rhianna Fields Suite 714', NULL, '43979', 'Roybury', 'New Jersey', 'Burkina Faso', 'http://api.adorable.io/avatars/300/brisa08@king.com', '2017-04-16 23:33:37', '2019-09-14 18:09:23'),
(48, 'Megane', 'Trantow', 'hwhite@wiza.com', '645.481.0454 x76640', '1891 Bashirian Port Suite 011', 'Apt. 200', '02536', 'Port Frederickmouth', 'Arizona', 'Austria', 'http://api.adorable.io/avatars/300/hwhite@wiza.com', '2015-08-02 08:14:46', '2019-09-14 18:09:23'),
(49, 'Kara', 'Lemke', 'hegmann.pinkie@osinski.org', '+16169102297', '9210 Schmitt Rest Apt. 752', NULL, '29219', 'North Alia', 'Virginia', 'Congo', 'http://api.adorable.io/avatars/300/hegmann.pinkie@osinski.org', '2015-10-04 06:44:29', '2019-09-14 18:09:23'),
(50, 'Kara', 'Donnelly', 'sanford.dominique@gmail.com', '(868) 844-1616 x8954', '4820 Kamryn Passage', 'Apt. 408', '44305-9561', 'Murphyland', 'Massachusetts', 'Seychelles', 'http://api.adorable.io/avatars/300/sanford.dominique@gmail.com', '2017-12-12 09:20:55', '2019-09-14 18:09:23'),
(51, 'Bulah', 'Cartwright', 'kiley.kshlerin@orn.com', '524.381.0731 x9614', '3075 Dena Square', 'Apt. 426', '65695', 'Jeniferhaven', 'Delaware', 'Bahamas', 'http://api.adorable.io/avatars/300/kiley.kshlerin@orn.com', '2016-05-12 11:44:29', '2019-09-14 18:09:23'),
(52, 'Ada', 'Gleichner', 'julian.romaguera@hotmail.com', '218-684-6275 x857', '32175 Fisher Street Suite 807', NULL, '74211-5125', 'Padbergton', 'Colorado', 'United Arab Emirates', 'http://api.adorable.io/avatars/300/julian.romaguera@hotmail.com', '2015-05-25 19:55:35', '2019-09-14 18:09:23'),
(53, 'Queen', 'Altenwerth', 'sfritsch@schamberger.com', '(887) 667-0955', '100 Cronin Manor', 'Suite 005', '58190', 'East Llewellyn', 'Connecticut', 'Central African Republic', 'http://api.adorable.io/avatars/300/sfritsch@schamberger.com', '2016-01-25 10:34:22', '2019-09-14 18:09:23'),
(54, 'Abbie', 'O\'Reilly', 'larissa90@hotmail.com', '323.576.4813 x24364', '7726 Garfield Glen Apt. 109', NULL, '80971', 'Adolphusbury', 'North Dakota', 'Bouvet Island (Bouvetoya)', 'http://api.adorable.io/avatars/300/larissa90@hotmail.com', '2018-04-20 09:23:16', '2019-09-14 18:09:23'),
(55, 'Ward', 'Beatty', 'alice.swaniawski@gmail.com', '743.568.7370', '60233 Bergstrom Track Suite 819', NULL, '96716-9168', 'South Ashley', 'Ohio', 'Bosnia and Herzegovina', 'http://api.adorable.io/avatars/300/alice.swaniawski@gmail.com', '2018-06-24 09:41:40', '2019-09-14 18:09:23'),
(56, 'Rosendo', 'Heidenreich', 'cpollich@gmail.com', '896-288-8896', '29576 Sanford Views Apt. 063', 'Apt. 059', '78382-0989', 'Wolfffurt', 'Hawaii', 'Netherlands', 'http://api.adorable.io/avatars/300/cpollich@gmail.com', '2015-04-14 21:41:49', '2019-09-14 18:09:23'),
(57, 'Josianne', 'O\'Hara', 'arianna.white@kiehn.com', '497.553.3705', '95282 Hagenes Highway Apt. 797', 'Suite 000', '70663', 'O\'Connellbury', 'North Dakota', 'New Zealand', 'http://api.adorable.io/avatars/300/arianna.white@kiehn.com', '2019-05-13 09:31:59', '2019-09-14 18:09:23'),
(58, 'Casey', 'Parisian', 'barrows.marcellus@hotmail.com', '(543) 452-4889 x3647', '83463 Jade Points', NULL, '57424-0946', 'Reichelfort', 'Indiana', 'Serbia', 'http://api.adorable.io/avatars/300/barrows.marcellus@hotmail.com', '2017-04-17 02:11:12', '2019-09-14 18:09:23'),
(59, 'Newell', 'Bartell', 'lempi23@herman.com', '+1-974-886-3589', '60284 Nora Trail', 'Suite 057', '14778', 'Port Dean', 'Kansas', 'Bahamas', 'http://api.adorable.io/avatars/300/lempi23@herman.com', '2016-04-10 08:25:52', '2019-09-14 18:09:23'),
(60, 'Abner', 'Smith', 'kabernathy@casper.com', '751.889.5091 x70677', '50802 Eleanore Courts', 'Suite 234', '23201', 'Moniquemouth', 'South Carolina', 'Croatia', 'http://api.adorable.io/avatars/300/kabernathy@casper.com', '2018-04-04 04:16:38', '2019-09-14 18:09:23'),
(61, 'Garrick', 'Krajcik', 'tromaguera@yahoo.com', '431.979.9531 x42363', '859 Lindgren Alley Suite 356', NULL, '91036-7076', 'Faheyfort', 'Michigan', 'Seychelles', 'http://api.adorable.io/avatars/300/tromaguera@yahoo.com', '2017-11-27 23:29:15', '2019-09-14 18:09:23'),
(62, 'Wellington', 'Barton', 'wintheiser.ramon@hotmail.com', '449-709-0578', '98204 Oswald Extensions', NULL, '12870-8338', 'East Rosalyn', 'Utah', 'Nigeria', 'http://api.adorable.io/avatars/300/wintheiser.ramon@hotmail.com', '2017-05-08 21:30:01', '2019-09-14 18:09:23'),
(63, 'Francisco', 'Sawayn', 'satterfield.dejon@gmail.com', '362.930.1660 x284', '488 Nader Valley', 'Apt. 680', '38661-8777', 'Lazarotown', 'North Carolina', 'Angola', 'http://api.adorable.io/avatars/300/satterfield.dejon@gmail.com', '2018-11-12 22:07:11', '2019-09-14 18:09:23'),
(64, 'Cleora', 'Marks', 'jayda13@yahoo.com', '1-817-563-2336', '5138 Ritchie Knolls Apt. 710', NULL, '92628', 'Guyberg', 'New Mexico', 'Denmark', 'http://api.adorable.io/avatars/300/jayda13@yahoo.com', '2019-08-02 20:06:07', '2019-09-14 18:09:23'),
(65, 'Polly', 'Morar', 'nader.nyah@hansen.com', '1-374-606-2936', '82144 Toy Island', NULL, '42423', 'Priceland', 'Connecticut', 'Jersey', 'http://api.adorable.io/avatars/300/nader.nyah@hansen.com', '2016-06-13 21:17:00', '2019-09-14 18:09:23'),
(66, 'Dejon', 'Veum', 'libby59@gmail.com', '396-972-8474', '838 Peter Stravenue Suite 374', 'Apt. 042', '95831', 'Handchester', 'New York', 'Kyrgyz Republic', 'http://api.adorable.io/avatars/300/libby59@gmail.com', '2015-09-08 06:56:17', '2019-09-14 18:09:23'),
(67, 'Eulalia', 'Goyette', 'lwalsh@tromp.com', '836-232-9649 x20403', '84565 Beth Falls', NULL, '79318', 'New Rico', 'Missouri', 'Seychelles', 'http://api.adorable.io/avatars/300/lwalsh@tromp.com', '2017-12-03 20:12:26', '2019-09-14 18:09:23'),
(68, 'Jace', 'Murray', 'blanda.ralph@yahoo.com', '637.931.7952', '22298 Sim Mount Apt. 770', 'Suite 494', '53037', 'Skilesland', 'West Virginia', 'India', 'http://api.adorable.io/avatars/300/blanda.ralph@yahoo.com', '2017-05-17 14:01:18', '2019-09-14 18:09:23'),
(69, 'Ayana', 'Hammes', 'weimann.bettye@trantow.biz', '+1.271.490.6550', '5809 Aletha Burgs', 'Apt. 800', '32558', 'West Christophebury', 'Idaho', 'France', 'http://api.adorable.io/avatars/300/weimann.bettye@trantow.biz', '2015-05-29 22:08:25', '2019-09-14 18:09:23'),
(70, 'Estelle', 'Lesch', 'mrussel@yahoo.com', '+1-382-694-1662', '7532 Alexander Ports Suite 210', 'Suite 394', '23373-8485', 'Armandoton', 'New Jersey', 'Marshall Islands', 'http://api.adorable.io/avatars/300/mrussel@yahoo.com', '2017-03-20 00:30:16', '2019-09-14 18:09:23'),
(71, 'Darlene', 'Abbott', 'herbert19@gmail.com', '440-799-8895 x94018', '8287 Johnny Circles', 'Suite 649', '96323', 'Haagland', 'Georgia', 'Romania', 'http://api.adorable.io/avatars/300/herbert19@gmail.com', '2015-09-17 03:32:11', '2019-09-14 18:09:23'),
(72, 'Ophelia', 'Mohr', 'mckenzie.edwardo@yahoo.com', '+1.907.352.3673', '635 Natasha Run', 'Apt. 173', '01796', 'Glennabury', 'Indiana', 'Azerbaijan', 'http://api.adorable.io/avatars/300/mckenzie.edwardo@yahoo.com', '2018-07-23 12:00:23', '2019-09-14 18:09:23'),
(73, 'Glennie', 'Kassulke', 'kuhn.pansy@yahoo.com', '+15084640365', '5872 Alfonzo Harbor', 'Apt. 636', '52767', 'Mosciskishire', 'Delaware', 'Mexico', 'http://api.adorable.io/avatars/300/kuhn.pansy@yahoo.com', '2017-12-05 13:50:00', '2019-09-14 18:09:23'),
(74, 'Lauriane', 'Kovacek', 'ilangworth@lueilwitz.com', '1-383-660-3145 x536', '83767 Nienow Crossing Apt. 261', NULL, '44005', 'East Kianna', 'Montana', 'Latvia', 'http://api.adorable.io/avatars/300/ilangworth@lueilwitz.com', '2018-03-04 01:44:30', '2019-09-14 18:09:23'),
(75, 'Thomas', 'Ratke', 'kherzog@yahoo.com', '+1.651.589.7791', '5293 Jones Lock Suite 032', NULL, '83121-3614', 'Jackiehaven', 'Alabama', 'Isle of Man', 'http://api.adorable.io/avatars/300/kherzog@yahoo.com', '2018-04-28 19:52:34', '2019-09-14 18:09:23'),
(76, 'Karina', 'Streich', 'juana.kuvalis@hyatt.com', '259.260.7200 x23785', '35349 Kailee Lights Suite 677', NULL, '91239-8560', 'North Jasperfort', 'Missouri', 'Cook Islands', 'http://api.adorable.io/avatars/300/juana.kuvalis@hyatt.com', '2018-02-13 05:02:53', '2019-09-14 18:09:23'),
(77, 'Lou', 'McKenzie', 'mann.mozell@yahoo.com', '+1 (848) 580-5332', '64046 Lemke Mill Apt. 176', 'Apt. 711', '00643', 'South Pierreside', 'Tennessee', 'Andorra', 'http://api.adorable.io/avatars/300/mann.mozell@yahoo.com', '2017-03-28 01:44:43', '2019-09-14 18:09:23'),
(78, 'Nicholaus', 'Volkman', 'vmayert@orn.com', '862.406.6813', '765 Spencer Gateway', NULL, '65335-5592', 'Baumbachchester', 'Nebraska', 'Kazakhstan', 'http://api.adorable.io/avatars/300/vmayert@orn.com', '2015-03-31 05:33:09', '2019-09-14 18:09:23'),
(79, 'Everette', 'Glover', 'jterry@hotmail.com', '(752) 495-4409 x145', '41754 Shea Light', 'Apt. 657', '29866-2285', 'Port Daphney', 'Mississippi', 'Yemen', 'http://api.adorable.io/avatars/300/jterry@hotmail.com', '2015-09-25 10:36:41', '2019-09-14 18:09:23'),
(80, 'Seth', 'Rohan', 'meghan08@gmail.com', '640-619-7715 x7286', '7075 Johnson Flats', NULL, '27975-0570', 'Olefurt', 'Alaska', 'Grenada', 'http://api.adorable.io/avatars/300/meghan08@gmail.com', '2017-08-28 23:48:07', '2019-09-14 18:09:23'),
(81, 'Verdie', 'Beahan', 'bkemmer@gmail.com', '1-880-570-3767', '739 Rosario Bypass Suite 477', 'Apt. 833', '67022', 'Antwanside', 'North Carolina', 'Kazakhstan', 'http://api.adorable.io/avatars/300/bkemmer@gmail.com', '2018-03-30 03:25:04', '2019-09-14 18:09:23'),
(82, 'Lola', 'Reilly', 'ohara.nicklaus@lindgren.com', '803-942-6057 x59434', '7929 Mitchell Plain', NULL, '44758', 'North Nicklausfort', 'Massachusetts', 'Antigua and Barbuda', 'http://api.adorable.io/avatars/300/ohara.nicklaus@lindgren.com', '2015-06-28 23:20:39', '2019-09-14 18:09:23'),
(83, 'Freddy', 'Anderson', 'marjory.ryan@homenick.info', '398-877-9974 x381', '64648 Mariah Mill', 'Apt. 606', '21389', 'Issachaven', 'Vermont', 'Gambia', 'http://api.adorable.io/avatars/300/marjory.ryan@homenick.info', '2017-10-08 17:08:20', '2019-09-14 18:09:23'),
(84, 'Abigayle', 'Kihn', 'ervin49@schmidt.com', '424.662.8007 x630', '33944 Nickolas Islands Suite 450', NULL, '11007-2391', 'Lake Lucieborough', 'Illinois', 'Norfolk Island', 'http://api.adorable.io/avatars/300/ervin49@schmidt.com', '2015-08-21 10:25:04', '2019-09-14 18:09:23'),
(85, 'Terrence', 'Breitenberg', 'pauline.rau@mertz.com', '478-486-5416 x367', '6940 Kreiger Lane Apt. 737', 'Apt. 407', '37104', 'Reillyview', 'District of Columbia', 'Marshall Islands', 'http://api.adorable.io/avatars/300/pauline.rau@mertz.com', '2018-01-19 22:32:15', '2019-09-14 18:09:23'),
(86, 'Hester', 'Connelly', 'zoey.rath@yahoo.com', '242.465.9107 x827', '851 Kole Mill Suite 053', 'Apt. 720', '63819', 'Kirlintown', 'New York', 'Guatemala', 'http://api.adorable.io/avatars/300/zoey.rath@yahoo.com', '2018-10-26 04:00:46', '2019-09-14 18:09:23'),
(87, 'Jesus', 'Ritchie', 'ekilback@homenick.info', '715-782-5060 x569', '4963 Noe Estate', NULL, '49646-8955', 'West Emelia', 'Tennessee', 'Botswana', 'http://api.adorable.io/avatars/300/ekilback@homenick.info', '2016-08-06 02:08:02', '2019-09-14 18:09:23'),
(88, 'Rowena', 'McCullough', 'brandy.grant@hahn.com', '(780) 844-1395 x062', '1349 Marty Spur Suite 327', 'Apt. 313', '42884-4987', 'North Ricostad', 'Florida', 'Pitcairn Islands', 'http://api.adorable.io/avatars/300/brandy.grant@hahn.com', '2018-09-02 10:34:17', '2019-09-14 18:09:23'),
(89, 'Leilani', 'Gleichner', 'taurean.olson@gerhold.biz', '(458) 236-2771', '561 Marion Plain', 'Apt. 089', '43030-7934', 'Parisianhaven', 'Wyoming', 'Reunion', 'http://api.adorable.io/avatars/300/taurean.olson@gerhold.biz', '2018-01-30 04:47:37', '2019-09-14 18:09:23'),
(90, 'Domenica', 'Littel', 'brook17@von.com', '543.836.3372 x59405', '69310 Damaris Canyon Suite 514', NULL, '68891-6189', 'North Daniellemouth', 'South Carolina', 'French Polynesia', 'http://api.adorable.io/avatars/300/brook17@von.com', '2017-02-05 05:28:23', '2019-09-14 18:09:23'),
(91, 'Stanley', 'Mayer', 'jevon78@hotmail.com', '+1-461-688-3024', '3394 Ole Key', 'Suite 272', '29300', 'Federicoside', 'Connecticut', 'Cocos (Keeling) Islands', 'http://api.adorable.io/avatars/300/jevon78@hotmail.com', '2019-05-10 02:31:54', '2019-09-14 18:09:23'),
(92, 'Olaf', 'Walsh', 'santino.quigley@quitzon.org', '775-852-6684 x6827', '7621 Elbert Falls', NULL, '82226-9795', 'North Antonietta', 'Hawaii', 'Guinea-Bissau', 'http://api.adorable.io/avatars/300/santino.quigley@quitzon.org', '2018-08-28 11:00:50', '2019-09-14 18:09:23'),
(93, 'Oleta', 'Pouros', 'gerlach.antoinette@romaguera.com', '669.334.6894 x822', '5855 Rolfson Green Suite 219', 'Apt. 486', '54171', 'East Dwight', 'Utah', 'Hungary', 'http://api.adorable.io/avatars/300/gerlach.antoinette@romaguera.com', '2015-12-26 22:33:59', '2019-09-14 18:09:23');

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;