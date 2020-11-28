
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";



-- Database: `pro`

-- Table  `users`


CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(25) NOT NULL,
  `family` varchar(25) NOT NULL,
  `telephone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- insert data for table `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `name`,`family`,`telephone`,`email`) VALUES
(1, 'mahmoud11', '123', 'mahmoud','al-saleh','0555123451','mahmoud@gmail.com');




-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables

-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;