-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2022 at 11:58 AM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calcCem`
--

-- --------------------------------------------------------

--
-- Table structure for table `azulejo`
--

CREATE TABLE `azulejo` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alto` double NOT NULL,
  `ancho` double NOT NULL,
  `coleccion_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `azulejo`
--

INSERT INTO `azulejo` (`id`, `nombre`, `descripcion`, `alto`, `ancho`, `coleccion_id`) VALUES
(1, 'FS Raku', 'El Raku consiste en la utilización de cerámica con esmaltes metálicos en hornos especiales que, al alcanzar la temperatura de cocción se extrae y depositan sobre virutas de madera o papel.', 20, 40, 1),
(2, 'Poitiers blanco', 'Esta colección apta para revestimiento, combina su apariencia artesanal con un brillo característico del esmaltado clásico. ', 7.5, 30, 1),
(3, 'Ground Decorativo', 'Colección mínimal y contemporánea sin perder la calidez que le aportan los contrastes de su gráfica.', 30, 30, 2),
(4, 'Ground Mila Warm', 'Colección mínimal y contemporánea sin perder la calidez que le aportan los contrastes de su gráfica.', 60, 60, 2),
(5, 'Essence anti slip', 'La colección ESSENCE es una madera cerámica de carácter noble y atemporal inspirada en la gráfica del roble y llevada a cuatro tonos neutros y cálidos que mejoran las prestaciones de la madera original.', 19.5, 121.5, 3),
(6, 'Mumble Barcelos', 'Nuestra línea inspirada en maderas crece con la nueva colección ‘Mumble’. Este porcelánico presenta en su gráfica una madera rústica de aspecto muy natural.', 15, 90, 3),
(7, 'Brass Rectificado', 'La nueva colección BRASS se inspira en el valor de la materia para aportar una novedosa gráfica que combina elementos como el cemento y el metal óxido.', 60, 60, 4),
(8, 'Brass Decorativo', 'La nueva colección BRASS se inspira en el valor de la materia para aportar una novedosa gráfica que combina elementos como el cemento y el metal óxido.', 30, 30, 4),
(9, 'Nature decorativo', 'Azulejos Porcelánicos Colección Nature – Amplia colección inspirada en la piedra Cardoso, con influencias estéticas de cuarcita.', 30, 30, 5),
(10, 'Adrenaline', 'Pavimento fabricado en material porcelánico esmaltado en colores Beige, Bone y Silver con acabado mate.', 45.6, 67.5, 5),
(11, 'FS Star', 'La exitosa colección FS STAR, diseñada por el interiorista y diseñador de mobiliario Francisco Segarra, amplía su gama de colores iniciada hace 3 años incluyendo el FS Star White.', 45, 45, 6),
(12, 'FS Yard', 'El patrón geométrico de este modelo nos transporta a amplios espacios con carácter.', 45, 45, 6);

-- --------------------------------------------------------

--
-- Table structure for table `coleccion`
--

CREATE TABLE `coleccion` (
  `id` int NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coleccion`
--

INSERT INTO `coleccion` (`id`, `nombre`) VALUES
(1, 'Blancos'),
(2, 'Cementados'),
(3, 'Maderas'),
(4, 'Metal'),
(5, 'Piedra'),
(6, 'Vintage');

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `id` int NOT NULL,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id`, `contenido`, `user_id`) VALUES
(6, 'Hola, espero que funcione', 2),
(7, 'prueba definitiva', 2),
(8, 'Hola patata', 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220121093127', '2022-01-21 10:31:49', 300),
('DoctrineMigrations\\Version20220121093842', '2022-01-21 10:38:49', 40),
('DoctrineMigrations\\Version20220124072142', '2022-01-24 08:21:52', 421),
('DoctrineMigrations\\Version20220124075856', '2022-01-24 08:59:02', 68),
('DoctrineMigrations\\Version20220124080615', '2022-01-24 09:06:19', 122),
('DoctrineMigrations\\Version20220131080555', '2022-01-31 09:06:17', 451),
('DoctrineMigrations\\Version20220131113402', '2022-01-31 12:34:07', 166),
('DoctrineMigrations\\Version20220131114454', '2022-01-31 12:44:59', 61),
('DoctrineMigrations\\Version20220131114626', '2022-01-31 12:46:28', 29),
('DoctrineMigrations\\Version20220204075655', '2022-02-04 08:57:15', 212),
('DoctrineMigrations\\Version20220207080659', '2022-02-07 09:07:15', 372),
('DoctrineMigrations\\Version20220207081225', '2022-02-07 09:12:29', 131),
('DoctrineMigrations\\Version20220207090320', '2022-02-07 10:03:35', 34),
('DoctrineMigrations\\Version20220209074438', '2022-02-09 08:44:55', 265),
('DoctrineMigrations\\Version20220211103059', '2022-02-11 11:31:18', 275),
('DoctrineMigrations\\Version20220211103309', '2022-02-11 11:33:15', 49),
('DoctrineMigrations\\Version20220211103556', '2022-02-11 11:36:15', 125);

-- --------------------------------------------------------

--
-- Table structure for table `resultado`
--

CREATE TABLE `resultado` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `azulejo_seleccionado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `superficie` int NOT NULL,
  `num_azulejo` int NOT NULL,
  `azulejo_metro` int NOT NULL,
  `num_caja` int NOT NULL,
  `azulejo_caja` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resultado`
--

INSERT INTO `resultado` (`id`, `user_id`, `azulejo_seleccionado`, `superficie`, `num_azulejo`, `azulejo_metro`, `num_caja`, `azulejo_caja`) VALUES
(1, 2, '1 - FS Raku', 0, 0, 331, 1, 0),
(2, 2, '3 - Ground Decorativo', 1, 11, 9, 2, 5),
(3, 2, '5 - Essence anti slip', 1, 4, 24, 2, 2),
(4, 2, '2 - Poitiers Blanco', 1, 44, 2, 5, 8),
(5, 2, '4 - Ground Mila Warm', 1, 3, 36, 2, 2),
(6, 2, '1 - FS Raku', 1, 13, 8, 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`) VALUES
(2, 'amartin.onda@gmail.com', '[]', '$2y$13$9teDx.nZ10M8Rb0Wermmre0BSOZ4gQHHAVnIYZdYTX2uRUT7tqycS'),
(3, 'prueba@g.es', '[]', '$2y$13$FPeaSbQcRGYaHj5Aqf1iiOuGgyr7tRi1mpt9N0Ib1o0riYHpOJ0le'),
(4, 'saulpachecot@gmail.com', '[]', '$2y$13$h1Pwogbcqi76qnWINF1F6.YPoZc.oW1Rn4ugF1k2jiwu/3Sxvfy4i');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `azulejo`
--
ALTER TABLE `azulejo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_56D567A3A840E940` (`coleccion_id`);

--
-- Indexes for table `coleccion`
--
ALTER TABLE `coleccion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_4B91E702A76ED395` (`user_id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B2ED91CA76ED395` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `azulejo`
--
ALTER TABLE `azulejo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coleccion`
--
ALTER TABLE `coleccion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `azulejo`
--
ALTER TABLE `azulejo`
  ADD CONSTRAINT `FK_56D567A3A840E940` FOREIGN KEY (`coleccion_id`) REFERENCES `coleccion` (`id`);

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_4B91E702A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `FK_B2ED91CA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
