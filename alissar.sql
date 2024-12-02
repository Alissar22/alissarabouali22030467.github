

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `songs` (
  `watching` varchar(3) NOT NULL,
  `song_type` varchar(30) NOT NULL,
  `artist` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE `registration` (
  `username` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


ALTER TABLE `registration`
  ADD PRIMARY KEY (`username`);
COMMIT;

