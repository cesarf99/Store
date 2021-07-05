-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Jun-2021 às 01:19
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `simplestore`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cart`
--

CREATE TABLE `cart` (
  `CARTID` int(11) NOT NULL,
  `CLIENT_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE `client` (
  `CLIENTID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`CLIENTID`, `NAME`, `USERNAME`, `PASSWORD`, `ADDRESS`, `EMAIL`) VALUES
(1, 'Natal Collie', 'Natal', 'RZKKwK', '465 Sauthoff Park', 'ncollie0@howstuffworks.com'),
(2, 'Dulciana Gotthard', 'Dulciana', 'JzgbrvACK', '9 Hoffman Alley', 'dgotthard1@miitbeian.gov.cn'),
(3, 'Calla Iskowitz', 'Calla', 'CsNaGe5', '7773 Carberry Plaza', 'ciskowitz2@indiegogo.com'),
(4, 'Luce Halgarth', 'Luce', '7nhxjXmgas', '399 Mosinee Drive', 'lhalgarth3@unc.edu'),
(5, 'Daffi Matthias', 'Daffi', 'htFjrR', '93072 Banding Lane', 'dmatthias4@chron.com'),
(6, 'Isa Ginnell', 'Isa', 'JDDN6vEP', '764 Ronald Regan Court', 'iginnell5@bbc.co.uk'),
(7, 'Valerye Coppock.', 'Valerye', '4XJOaCy3W', '5 Doe Crossing Center', 'vcoppock6@mozilla.org'),
(8, 'Merv Pouck', 'Merv', '9zUkfvYs', '65 Old Shore Park', 'mpouck7@virginia.edu'),
(9, 'Selia Winyard', 'Selia', 'mkwWHJl75X', '383 Caliangt Terrace', 'swinyard8@discuz.net'),
(10, 'Corrianne Libbis', 'Corrianne', '7G7xVYgOzC', '97004 Namekagon Terrace', 'clibbis9@wikispaces.com'),
(11, 'Maitilde Mouton', 'Maitilde', 'WYoK6JmVJWM', '74 Wayridge Crossing', 'mmoutona@usgs.gov'),
(12, 'Tomas Purdey', 'Tomas', 'QFj46rXiwfVU', '78752 Dennis Terrace', 'tpurdeyb@addthis.com'),
(13, 'Fredrika Le Huquet', 'Fredrika', 'dy53Ds0fq8J', '0 Vidon Terrace', 'flec@booking.com'),
(14, 'Donny Mack', 'Donny', 'r2nIj8WgR', '458 Donald Circle', 'dmackd@boston.com'),
(15, 'Dillon Beldon', 'Dillon', 'Za4bRWG32H', '0129 Spohn Parkway', 'dbeldone@home.pl'),
(16, 'Hope Morteo', 'Hope', 'tgA7Gsdoo7e', '50653 Bayside Drive', 'hmorteof@rambler.ru'),
(17, 'Jeane Catt', 'Jeane', 'MlEVHoqixY', '469 Bobwhite Parkway', 'jcattg@posterous.com'),
(18, 'Karine Szreter', 'Karine', 'PaRFWRS', '034 Alpine Point', 'kszreterh@walmart.com'),
(19, 'Llywellyn Eim', 'Llywellyn', 'EGNhVqd6Jsa', '150 Crescent Oaks Place', 'leimi@google.ca'),
(20, 'Caroljean Pietruszewicz', 'Caroljean', 'XAeOmJPO4D', '40500 Rieder Lane', 'cpietruszewiczj@sciencedaily.com'),
(21, 'Vivyan Tuddall', 'Vivyan', 'rtpQIwQLG', '2 Buhler Hill', 'vtuddallk@time.com'),
(22, 'Xymenes Hissett', 'Xymenes', 'GVAvm4r', '69 Monica Street', 'xhissettl@cocolog-nifty.com'),
(23, 'Kalli Stealfox', 'Kalli', 'MzUM0Bh', '7 Di Loreto Alley', 'kstealfoxm@ifeng.com'),
(24, 'Willyt Muddiman', 'Willyt', 'IleSqefU0', '5 Brown Court', 'wmuddimann@i2i.jp'),
(25, 'Miguel Cheales', 'Miguel', 'gAltzo', '6794 Golf View Trail', 'mchealeso@amazon.com'),
(26, 'Jed Gleeson', 'Jed', 'fgnUxHev0kZ', '421 Rowland Place', 'jgleesonp@dailymotion.com'),
(27, 'Wakefield Daily', 'Wakefield', 'UatmrDVpG11', '21629 Ridgeview Point', 'wdailyq@mtv.com'),
(28, 'Vinny Livingstone', 'Vinny', 'Dtk3WY3F', '9775 Katie Way', 'vlivingstoner@cdbaby.com'),
(29, 'Marlene Groocock', 'Marlene', 'HbfUAHB0Jf', '06 Lawn Center', 'mgroococks@nba.com'),
(30, 'Deb Zelake', 'Deb', 'n98MtL6', '1 Corry Avenue', 'dzelaket@ted.com'),
(31, 'Jon Engelbrecht', 'Jon', 'CyJuwCh4Tjcc', '56 Fordem Avenue', 'jengelbrechtu@yolasite.com'),
(32, 'Raymond Baal', 'Raymond', 'vKKTH21C1A5d', '12066 Nancy Parkway', 'rbaalv@un.org'),
(33, 'Mame Semeniuk', 'Mame', 'TYVITOPK9DA', '739 Rieder Parkway', 'msemeniukw@hao123.com'),
(34, 'Calypso Iskowitz', 'Calypso', '3lsxrgXzMi', '10366 Eliot Avenue', 'ciskowitzx@hexun.com'),
(35, 'Carter Morgan', 'Carter', 'vmD2nsdczJ', '105 Holy Cross Center', 'cmorgany@addthis.com'),
(36, 'Gualterio Ayre', 'Gualterio', 'FsGYLgzL', '3 Loeprich Parkway', 'gayrez@loc.gov'),
(37, 'Ranice Capeling', 'Ranice', 'mDTfsPt', '7 Ilene Plaza', 'rcapeling10@arizona.edu'),
(38, 'Tarra Fer', 'Tarra', 'UN3XZxbw8', '27 Veith Center', 'tfer11@dyndns.org'),
(39, 'Vanya Cicccitti', 'Vanya', 'AvekUmVk5d3S', '322 Iowa Road', 'vcicccitti12@theatlantic.com'),
(40, 'Ernest Peschet', 'Ernest', 'V3M1WtADV', '416 Hoard Street', 'epeschet13@jugem.jp'),
(41, 'Andreana Bushen', 'Andreana', 'AWCK1k', '625 Bashford Center', 'abushen14@dell.com'),
(42, 'Candace Kenafaque', 'Candace', 'uJ4IKCkbpoZt', '89161 Carpenter Circle', 'ckenafaque15@bravesites.com'),
(43, 'Christoph Rottenbury', 'Christoph', 'PicyGA', '3860 Buell Road', 'crottenbury16@imdb.com'),
(44, 'Danna Kilkenny', 'Danna', 'tQGEOFk', '28205 Oakridge Trail', 'dkilkenny17@amazon.com'),
(45, 'Alissa Pointin', 'Alissa', 'BKuWqI', '598 Grim Way', 'apointin18@unc.edu'),
(46, 'Bonita Callis', 'Bonita', 'aSdN08', '809 Green Ridge Hill', 'bcallis19@shinystat.com'),
(47, 'Josephina Saura', 'Josephina', 'l8wiRmutb', '4 Oak Valley Lane', 'jsaura1a@ycombinator.com'),
(48, 'Hester Geharke', 'Hester', 'P8PEdet', '992 Lindbergh Place', 'hgeharke1b@canalblog.com'),
(49, 'Esme Jobe', 'Esme', 'dXqe6pyHfblu', '03617 Continental Terrace', 'ejobe1c@dell.com'),
(50, 'Preston McGorman', 'Preston', '6u6PCsAAsr', '7695 Manufacturers Avenue', 'pmcgorman1d@stanford.edu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `product`
--

CREATE TABLE `product` (
  `PRODUCTID` int(11) NOT NULL,
  `TYPE` varchar(50) NOT NULL,
  `PRICE` float NOT NULL,
  `DESCRIPTION` varchar(100) DEFAULT NULL,
  `QUANTITY` int(11) DEFAULT NULL,
  `SIZE` varchar(5) DEFAULT NULL,
  `COLOR` varchar(50) DEFAULT NULL,
  `IMGPATH` varchar(50) DEFAULT NULL,
  `NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `product`
--

INSERT INTO `product` (`PRODUCTID`, `TYPE`, `PRICE`, `DESCRIPTION`, `QUANTITY`, `SIZE`, `COLOR`, `IMGPATH`, `NAME`) VALUES
(1, 'Pants', 100, 'Nulla justo. Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse ac', 80, 'XS', 'Indigo', NULL, 'berangey0@imdb.com'),
(2, 'Pants', 1020, 'Aenean auctor gravida sem. Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi', 12, 'XS', 'Aquamarine', NULL, 'sknibb1@mysql.com'),
(3, 'Pants', 1020, 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor', 59, '3XL', 'Puce', NULL, 'doxby2@1688.com'),
(4, 'Pants', 1070, 'Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus.', 69, '2XL', 'Puce', NULL, 'bmccurtin3@technorati.com'),
(5, 'Shirt', 1020, 'Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamu', 17, '2XL', 'Violet', NULL, 'cglasgow4@goo.ne.jp'),
(6, 'Shirt', 1040, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ', 75, 'L', 'Purple', NULL, 'kpietzke5@sakura.ne.jp'),
(7, 'Shirt', 10570, 'Etiam pretium iaculis justo. In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus', 7, '2XL', 'Maroon', NULL, 'oagronski6@dot.gov'),
(8, 'Shirt', 150, 'Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamu', 33, 'XS', 'Turquoise', NULL, 'aclaiden7@icq.com'),
(9, 'Shirt', 1450, 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst. Maecenas ut massa qu', 87, '3XL', 'Aquamarine', NULL, 'hputtan8@ca.gov'),
(10, 'Shirt', 1456, 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Mor', 69, 'XL', 'Puce', NULL, 'mwoodson9@angelfire.com'),
(11, 'Shirt', 154, 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis i', 57, 'XS', 'Aquamarine', NULL, 'cboguea@sitemeter.com'),
(12, 'Shirt', 187, 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien u', 32, 'S', 'Green', NULL, 'dchaudronb@hostgator.com'),
(13, 'Shirt', 15, 'Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id,', 89, 'L', 'Aquamarine', NULL, 'rcollettc@prweb.com'),
(14, 'Shirt', 14, 'Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tin', 81, 'M', 'Blue', NULL, 'ecagand@pbs.org'),
(15, 'Skirt', 154, 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus. In sagittis dui vel nisl. Duis ac', 27, '2XL', 'Violet', NULL, 'ctokleye@flickr.com'),
(16, 'Skirt', 112, 'Nulla nisl. Nunc nisl.', 13, '3XL', 'Red', NULL, 'lmanjotf@fema.gov'),
(17, 'Skirt', 1000, 'In hac habitasse platea dictumst. Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molest', 58, 'M', 'Maroon', NULL, 'cwallegeg@tamu.edu'),
(18, 'Skirt', 100, 'Maecenas tincidunt lacus at velit.', 52, 'XL', 'Fuscia', NULL, 'jfarnorthh@statcounter.com'),
(19, 'Skirt', 10, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', 72, 'L', 'Violet', NULL, 'hpingstoni@gnu.org'),
(20, 'Skirt', 1, 'Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ul', 30, 'M', 'Mauv', NULL, 'orubinovitschj@sakura.ne.jp');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`CARTID`),
  ADD KEY `CLIENT_ID` (`CLIENT_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Índices para tabela `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`CLIENTID`);

--
-- Índices para tabela `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCTID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cart`
--
ALTER TABLE `cart`
  MODIFY `CARTID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `client`
--
ALTER TABLE `client`
  MODIFY `CLIENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`CLIENT_ID`) REFERENCES `client` (`CLIENTID`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCTID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
