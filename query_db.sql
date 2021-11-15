
USE `MYSQL_DATABASE`;

CREATE TABLE `book` (
  `id` int NOT NULL,
  `bookdate` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(200) NOT NULL,
  `booktime` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `total` double NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `book` (`id`, `bookdate`, `username`, `booktime`, `quantity`, `total`, `status`) VALUES
(4, '30-05-2020', 'a', 'Days', 13, 1300, 'Waiting'),
(5, '30-05-2020', 'a', 'Days', 3, 300, 'Waiting'),
(6, '19-09-2019', 'b', 'Hours', 2, 10, 'Taken'),
(7, '30-05-2020', 'a', 'Hours', 2, 10, 'Waiting'),
(8, '31-05-2020', 'admin', 'Days', 2, 200, 'Returned'),
(9, '19-09-2019', 'h', 'Hours', 4, 20, 'Waiting'),
(10, '19-03-9', 'a', 'Days', 22, 2200, 'Waiting'),
(12, '14-11-2021', 'a', 'Days', 11, 1100, 'Waiting'),
(13, '14-11-2021', 'a', 'Hours', 22, 110, 'Waiting'),
(14, '14-11-2021', 'admin', 'Hours', 11, 55, 'Waiting'),
(15, '14-11-2021', 'a', 'Days', 89, 8900, 'Waiting'),
(16, '15-11-2021', 'a', 'Days', 2, 200, 'Waiting'),
(17, '15-11-2021', 'i', 'Days', 2, 200, 'Waiting');

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `last_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `identification` varchar(200) NOT NULL,
  `card_name` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `card_number` varchar(200) NOT NULL,
  `card_expiry_date` varchar(5) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `card_cvv` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `identification`, `card_name`, `card_number`, `card_expiry_date`, `card_cvv`) VALUES
(7, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 11),
(11, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 2),
(12, 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 13),
(13, 'i', 'i', 'i', 'i', 'i', '1', '1', '1', '1', 1),
(14, 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 1);

ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `book`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;
