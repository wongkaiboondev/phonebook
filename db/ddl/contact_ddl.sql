CREATE TABLE `Contact` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `phone_type` varchar(1) NOT NULL,
  `number` varchar(12) NOT NULL
);