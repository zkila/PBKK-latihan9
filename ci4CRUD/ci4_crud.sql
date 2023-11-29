SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `ci4_crud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ci4_crud`;

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(11) PRIMARY KEY NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `golongan` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `karyawan` (`id`, `nama`, `no_telp`, `tgl_lahir`, `golongan`) VALUES
(1, 'Duevano Fairuz Pandya', '081336197912', '2003-06-21', 'A'),
(2, 'Andhika Lingga Mariano', '082144421999', '2003-07-20', 'B'),
(3, 'Ken Anargya Alkausar', '082226644668', '2002-12-01', 'A'),
(4, "Achmad Khosyi\' Assajjad Ramandanta", '08113303924', '2001-04-23', 'C'),
(5, 'Abdullah Yasykur Bifadhlil Midror', '081358483864', '2001-04-23', 'C'),
(6, 'Frederick Yonatan Susanto', '081234005101', '2003-02-05', 'A');

ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

COMMIT;