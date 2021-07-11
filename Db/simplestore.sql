-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jul-2021 às 01:45
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
(51, 'César Freitas', 'Cesar', '123456', 'rua rua', 'cesar@email.com');

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
(1, 'Pants', 100, 'Normal Pants', 80, 'XS', 'Indigo', 'img\\pants0.png', 'Normal Pants'),
(2, 'Pants', 1020, 'Some Pants', 12, 'XS', 'Aquamarine', 'img\\pants1.png', 'Pants 1'),
(3, 'Pants', 1020, 'More Pants', 59, '3XL', 'Puce', 'img\\pants2.jpg', 'Pants 2'),
(4, 'Pants', 1070, 'More More pants', 69, '2XL', 'Puce', 'img\\pants3.jpg', 'Pants 3'),
(5, 'Pants', 1020, 'Pants Pants', 17, '2XL', 'Violet', 'img\\pants5.jpg', 'Pants 5'),
(21, 'Shirt', 123, 'Shirt', 23, 'M', 'Blue', 'img\\shirt0.jpg', 'Shirt0'),
(22, 'Shirt', 12323, 'Shirt asd ', 23, 'M', 'Blue', 'img\\shirt6.jpg', 'Shirt3'),
(23, 'Shirt', 13223, 'Shirt', 233, 'M', 'Blue', 'img\\shirt1.jpg', 'Shirt1'),
(24, 'Shirt', 13233, 'Shirt', 23, 'L', 'Green', 'img\\shirt2.jpg', 'Shirt2'),
(25, 'Shirt', 13233, 'Shirt', 1, 'M', 'Red', 'img\\shirt3.jpg', 'Shirt3');

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
  MODIFY `CLIENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
