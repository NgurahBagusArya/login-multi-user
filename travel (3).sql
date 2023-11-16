  -- phpMyAdmin SQL Dump
  -- version 5.2.0
  -- https://www.phpmyadmin.net/
  --
  -- Host: localhost:3306
  -- Generation Time: Nov 16, 2023 at 04:32 AM
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
  -- Database: `travel`
  --

  -- --------------------------------------------------------

  --
  -- Table structure for table `activity_log`
  --

  CREATE TABLE `activity_log` (
    `id` int NOT NULL,
    `user_id` int DEFAULT NULL,
    `activity_type` enum('Promote','Demote') DEFAULT NULL,
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `description` text
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  --
  -- Dumping data for table `activity_log`
  --

  INSERT INTO `activity_log` (`id`, `user_id`, `activity_type`, `created_at`, `description`) VALUES
  (1, 7, 'Demote', '2023-10-25 01:03:14', 'User dengan ID 7 demote menjadi User'),
  (2, NULL, 'Promote', '2023-10-25 01:08:21', 'User dengan ID  promote menjadi Admin'),
  (3, NULL, 'Demote', '2023-10-25 01:08:55', 'User dengan ID  demote menjadi User'),
  (4, NULL, 'Promote', '2023-10-25 01:22:30', 'User dengan ID  promote menjadi Admin'),
  (5, NULL, 'Demote', '2023-10-25 01:58:41', 'User dengan ID  demote menjadi User'),
  (6, 1, 'Promote', '2023-10-25 02:00:13', 'User dengan ID 1 promote menjadi Admin'),
  (7, 7, 'Promote', '2023-10-25 02:00:37', 'User dengan ID 7 promote menjadi Admin'),
  (8, 7, 'Demote', '2023-10-25 02:00:45', 'User dengan ID 7 demote menjadi User'),
  (9, 1, 'Demote', '2023-10-25 04:42:17', 'User dengan ID 1 demote menjadi User'),
  (10, 7, 'Promote', '2023-10-28 12:57:08', 'User dengan ID 7 promote menjadi Admin'),
  (11, 7, 'Demote', '2023-11-08 00:30:33', 'User dengan ID 7 demote menjadi User'),
  (12, 7, 'Promote', '2023-11-08 00:30:41', 'User dengan ID 7 promote menjadi Admin');

  -- --------------------------------------------------------

  --
  -- Table structure for table `blog`
  --

  CREATE TABLE `blog` (
    `id_blog` int NOT NULL,
    `judul` varchar(225) NOT NULL,
    `author` varchar(225) NOT NULL,
    `konten` varchar(225) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  --
  -- Dumping data for table `blog`
  --

  INSERT INTO `blog` (`id_blog`, `judul`, `author`, `konten`) VALUES
  (6, 'Bali', 'Leonardo', 'bali');

  -- --------------------------------------------------------

  --
  -- Table structure for table `booking`
  --

  CREATE TABLE `booking` (
    `id` int NOT NULL,
    `user_id` int NOT NULL,
    `trip_id` int NOT NULL,
    `tanggal_pemesanan` date NOT NULL,
    `status_pemesanan` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  -- --------------------------------------------------------

  --
  -- Table structure for table `crud`
  --

  CREATE TABLE `crud` (
    `id` int NOT NULL,
    `nama` varchar(255) NOT NULL,
    `tanggal_lahir` date NOT NULL,
    `image` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  --
  -- Dumping data for table `crud`
  --

  INSERT INTO `crud` (`id`, `nama`, `tanggal_lahir`, `image`) VALUES
  (7, 'Leonardo Pramudyo Hutomo', '2023-11-10', '/pwpb/public/img/foto/Leo-image.jpeg');

  -- --------------------------------------------------------

  --
  -- Table structure for table `trip`
  --

  CREATE TABLE `trip` (
    `trip_id` int NOT NULL,
    `nama_trip` varchar(225) NOT NULL,
    `deskripsi` varchar(10000) NOT NULL,
    `tujuan` varchar(225) NOT NULL,
    `image` varchar(255) NOT NULL,
    `start_date` date NOT NULL,
    `end_date` date NOT NULL,
    `harga` int NOT NULL,
    `slot_tiket` int NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  --
  -- Dumping data for table `trip`
  --

  INSERT INTO `trip` (`trip_id`, `nama_trip`, `deskripsi`, `tujuan`, `image`, `start_date`, `end_date`, `harga`, `slot_tiket`) VALUES
  (6, 'Pantai ', 'Pantai Kelingking', 'Pantai Kelingking', '/travel/public/img/ticket/kelingking-beach-manta-spot.jpg', '2023-11-08', '2023-11-09', 100000, 12);

  -- --------------------------------------------------------

  --
  -- Table structure for table `user`
  --

  CREATE TABLE `user` (
    `id` int NOT NULL,
    `username` varchar(225) NOT NULL,
    `email` varchar(255) NOT NULL,
    `no_telp` varchar(225) NOT NULL,
    `password` varchar(255) NOT NULL,
    `level` enum('admin','user','superadmin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

  --
  -- Dumping data for table `user`
  --

  INSERT INTO `user` (`id`, `username`, `email`, `no_telp`, `password`, `level`) VALUES
  (1, 'Admins', 'admin@gmail.com', '0895332242540', '$2y$10$8.M9eEcQXuLONDC4DiXuYubmUEDdks9yvpgbfVZOL6.afbseJJdEC', 'admin'),
  (10, 'bagus', 'bagus@gmail.com', '98798987', '$2y$10$kyYMq4UoqASTjo/11VR3HeLFbUwO5X8.zTeMGeStZxXZox9tfNfC2', 'admin');

  --
  -- Indexes for dumped tables
  --

  --
  -- Indexes for table `activity_log`
  --
  ALTER TABLE `activity_log`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `blog`
  --
  ALTER TABLE `blog`
    ADD PRIMARY KEY (`id_blog`);

  --
  -- Indexes for table `booking`
  --
  ALTER TABLE `booking`
    ADD PRIMARY KEY (`id`),
    ADD KEY `trip_id` (`trip_id`);

  --
  -- Indexes for table `crud`
  --
  ALTER TABLE `crud`
    ADD PRIMARY KEY (`id`);

  --
  -- Indexes for table `trip`
  --
  ALTER TABLE `trip`
    ADD PRIMARY KEY (`trip_id`);

  --
  -- Indexes for table `user`
  --
  ALTER TABLE `user`
    ADD PRIMARY KEY (`id`);

  --
  -- AUTO_INCREMENT for dumped tables
  --

  --
  -- AUTO_INCREMENT for table `activity_log`
  --
  ALTER TABLE `activity_log`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

  --
  -- AUTO_INCREMENT for table `blog`
  --
  ALTER TABLE `blog`
    MODIFY `id_blog` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

  --
  -- AUTO_INCREMENT for table `booking`
  --
  ALTER TABLE `booking`
    MODIFY `id` int NOT NULL AUTO_INCREMENT;

  --
  -- AUTO_INCREMENT for table `crud`
  --
  ALTER TABLE `crud`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

  --
  -- AUTO_INCREMENT for table `trip`
  --
  ALTER TABLE `trip`
    MODIFY `trip_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

  --
  -- AUTO_INCREMENT for table `user`
  --
  ALTER TABLE `user`
    MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

  --
  -- Constraints for dumped tables
  --

  --
  -- Constraints for table `booking`
  --
  ALTER TABLE `booking`
    ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`trip_id`) REFERENCES `trip` (`trip_id`) ON DELETE CASCADE ON UPDATE CASCADE;
  COMMIT;

  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
